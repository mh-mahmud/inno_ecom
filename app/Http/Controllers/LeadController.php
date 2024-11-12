<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\LeadsForm;
use App\Models\Customer;
use App\Models\LeadFormDetail;
use App\Models\Lead;
use App\Models\EmailLog;
use App\Models\SmsQueue;
use App\Models\Meeting;
use App\Models\Proposal;
use App\Models\Logs;
use App\Models\Invoice;
use App\Services\LeadService;
use Illuminate\Support\Facades\Schema;
use DateTime;

class LeadController  extends Controller
{
    protected $leadService;

    public function __construct(LeadService  $leadService)
    {
        $this->leadService = $leadService;
        // $this->middleware(['auth']);
    }


    public function index_backup()
    {
        $leads = $this->leadService->getAllLeads();
        //$formName = LeadsForm::pluck('form_name', 'form_id');
        $formName = LeadsForm::whereNull('parent_id')->pluck('form_name', 'form_id');
        return view('leads.index', compact('leads', 'formName'));
    }

    public function index($form_id = null)
    {
        // Get all leads or filter by form_id if provided
        if ($form_id) {
            $leads = $this->leadService->getLeadsByFormId($form_id);
        } else {
            $leads = $this->leadService->getAllLeads();
        }

        // Get form names where parent_id is null
        $formName = LeadsForm::whereNull('parent_id')->pluck('form_name', 'form_id');

        return view('leads.index', compact('leads', 'formName'));
    }
    public function create_backup()
    {

        return view('leads.create');
    }

    public function create(Request $request)
    {
        //dd('sdsd');die();
        $formName = [
            1 => 'Form A',
            2 => 'Form B',

        ];

        $fieldsByTable = [];
        $old_phone = null;
        if(!empty($_GET['phone'])) {
            $old_phone = $_GET['phone'];
        }

        if ($request->has('form_id')) {
            $formId = $request->input('form_id');
            $fields = LeadFormDetail::where('form_id', $formId)->get();

            foreach ($fields as $field) {
                $fieldsByTable[$field->table_name][] = $field;
            }
        }

        return view('leads.create', compact('formName', 'fieldsByTable', 'old_phone'));
    }



    public function store_backup(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'title' => 'required|string|max:191',
            'email' => 'nullable|string|email|max:191|unique:leads,email',
            'phone' => 'required|string|max:191',

        ]);

        $data = $request->all();
        $this->leadService->createLead($data);

        return redirect()->route('lead-index')->with('success', 'Lead created successfully.');
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'nullable|string|email|max:191|unique:leads,email',
            'phone' => 'required|string|max:191',
            //'form_id' => 'required|exists:leads_form,form_id',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        //dd($request);die();

        //$data = $request->only(['first_name', 'last_name', 'title', 'email', 'phone', 'lead_status','form_id']);
        $data = $request->all();

        $dynamicFields = $request->except(['first_name', 'last_name', 'title', 'email', 'phone', 'form_id', '_token']);
        //dd($dynamicFields);die();



        $this->leadService->createLead($data, $request->input('form_id'), $dynamicFields, $request);

        return redirect()->route('lead-index')->with('success', 'Lead created successfully.');
    }


    public function show_backup($id)
    {
        $lead = $this->leadService->getLeadById($id);
        return view('leads.show', compact('lead'));
    }

    public function show_backup_2($id)
    {
        $lead = $this->leadService->getLeadById($id);

        // Fetch dynamic fields data based on lead_id
        $fields = LeadFormDetail::where('form_id', $lead->form_id)->get();
        $tableData = [];
        foreach ($fields as $field) {
            $tableName = $field->table_name;
            $tableData[$tableName] = DB::table($tableName)->where('lead_id', $lead->id)->first();
        }

        return view('leads.show', compact('lead', 'tableData'));
    }

    public function show($id)
    {
        $lead = $this->leadService->getLeadById($id);
        $is_customer = Customer::where('lead_id', $id)->first();
        $customer_id = null;
        if(!empty($is_customer)) {
            $customer_id = $is_customer->customer_id;
        }

        // Fetch dynamic fields data based on lead_id
        $fields = LeadFormDetail::where('form_id', $lead->form_id)->get();
        $tableData = [];
        foreach ($fields as $field) {
            $tableName = $field->table_name;
            $tableData[$tableName] = DB::table($tableName)->where('lead_id', $lead->id)->orderBy('id', 'desc')->get();
        }

        $emails = EmailLog::where('lead_id', $id)->get();
        $sms = SmsQueue::where('lead_id', $id)->get();
        $meetings = Meeting::where('lead_id', $id)->get();
        $proposals = Proposal::where('lead_id', $id)->get();
        $logs = Logs::where('lead_id', $id)->get();
        $invoices = Invoice::join('customers', 'invoices.customer_id', '=', 'customers.id')
            ->join('leads', 'customers.lead_id', '=', 'leads.id')
            ->select('invoices.*', 'customers.customer_group', 'leads.first_name', 'leads.last_name')
            ->where('lead_id', $id)
            ->orderBy('invoices.created_at', 'desc')->get();

        return view('leads.show', compact('lead', 'tableData','fields', 'customer_id', 'emails', 'sms', 'meetings', 'proposals', 'logs', 'invoices'));
    }



    public function add($tableName, $leadId)
    {
        // Get column names
        $columns = Schema::getColumnListing($tableName);

        // Fetch lead form details
        $fields = LeadFormDetail::where('table_name', $tableName)->get();

        // Fetch lead details associated with the lead ID
        $leads = Lead::where('id', $leadId)->first();

        // Fetch column details with data types using raw SQL query
        $columnDetails = DB::select("SHOW COLUMNS FROM $tableName");

        // Map column names to their types
        $columnTypes = [];
        $dropdownOptions = [];
        foreach ($columnDetails as $column) {
            $columnName = $column->Field;
            $columnType = $column->Type;
            // chk if the field_value in $fields is 'file' and override the type
            foreach ($fields as $field) {
                if ($field->field_value == 'file' && $columnName == $field->field_name) {
                    $columnType = 'file';
                    break;
                }elseif ($field->field_value == 'dropdown' && $columnName == $field->field_name) {
                    $columnType = 'dropdown';
                     // split the character length field into an array if it is a dropdown list
                    if (!empty($field->character_length)) {
                        $dropdownOptions[$columnName] = explode(',', $field->character_length);
                    }
                    break;
                }
            }
            $columnTypes[$columnName] = $columnType;
        }

        // filter out unwanted fields
        $filteredColumns = array_filter($columns, function ($column) {
            return !in_array($column, ['id', 'created_at', 'updated_at']);
        });

        // return view with necessary data
        return view('leads.add', compact('tableName', 'filteredColumns', 'leads', 'columnTypes', 'dropdownOptions'));
    }

    public function storeTableData(Request $request)
    {
        $tableName = $request->input('tableName');
        $data = $request->except(['_token', 'tableName']);
        $lead_id = $request->input('lead_id');
        $form_id = $request->input('form_id');
        $data['lead_id'] = $lead_id;
        $data['form_id'] = $form_id;
        $fields = LeadFormDetail::where('table_name', $tableName)->get();
        foreach ($fields as $field) {
            $columnName = $field->field_name;
            // chk if the field is a file input
            if ($field->field_value === 'file' && $request->hasFile($columnName)) {
                $fileNameWithExt = $request->file($columnName)->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file($columnName)->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                $request->file($columnName)->move(getcwd() . '/uploads/files', $fileNameToStore);
                $data[$columnName] = $fileNameToStore;
            }
        }
        if (Schema::hasColumns($tableName, ['created_by','created_at', 'updated_at'])) {
            $data['created_by'] = Auth::user()->username;
            $data['created_at'] = now();
            $data['updated_at'] = now();
           
        }
        DB::table($tableName)->insert($data);
        return redirect()->route('lead-show', ['id' => $lead_id])->with('success', 'Data inserted successfully');
    }


    public function deleteTableData($tableName, $id, $leadId)
    {
        $this->leadService->deleteTableRecord($tableName, $id, $leadId);
        //return redirect()->route('lead-index')->with('success', 'Record deleted successfully.');
        return redirect()->route('lead-show', ['id' => $leadId])->with('success', 'Data Deleted successfully');
    }


    public function edit_backup($id)
    {
        //$formName = LeadsForm::pluck('form_name', 'form_id');
        $formName = LeadsForm::whereNull('parent_id')->pluck('form_name', 'form_id');
        $lead = $this->leadService->getLeadById($id);
        $fieldsByTable = [];
        $tableData = [];

        if ($lead->form_id) {
            $formId = $lead->form_id;
            $fields = LeadFormDetail::where('form_id', $formId)->get();

            foreach ($fields as $field) {
                $fieldsByTable[$field->table_name][] = $field;

                // specific table based on lead_id
                if (!isset($tableData[$field->table_name])) {
                    $tableData[$field->table_name] = DB::table($field->table_name)->where('lead_id', $lead->id)->first();
                }
            }
        }

        return view('leads.edit', compact('lead', 'formName', 'fieldsByTable', 'tableData'));
    }

    public function edit($id)
    {
        //$formName = LeadsForm::pluck('form_name', 'form_id');
        $formName = LeadsForm::whereNull('parent_id')->pluck('form_name', 'form_id');
        $lead = $this->leadService->getLeadById($id);
        $tableData = [];

        // Fetch dynamic fields data based on lead_id
        $fields = LeadFormDetail::where('form_id', $lead->form_id)->get();
        $tableData = [];
        foreach ($fields as $field) {
            $tableName = $field->table_name;
            $tableData[$tableName] = DB::table($tableName)->where('lead_id', $lead->id)->get();
        }


        return view('leads.edit', compact('lead', 'formName', 'tableData'));
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'nullable|string|email|max:191|unique:leads,email,' . $id,
            'phone' => 'required|string|max:191',
            //'form_id' => 'required|exists:leads_form,form_id',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $this->leadService->updateLead($id, $data, $request);

        return redirect()->route('lead-index')->with('success', 'Lead updated successfully.');
    }


    public function search(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        $formName = LeadsForm::pluck('form_name', 'form_id');

        if (empty($searchTerm)) {
            return redirect()->route('lead-index')->with('error', 'Search Field cannot be blank.');
        }

        $request->validate([
            'search' => 'required|string',
        ]);

        $leads = $this->leadService->searchLeadForm($request);
        return view('leads.index', compact('leads', 'formName'));
    }

    public function destroy($id)
    {
        $this->leadService->deleteLead($id);
        return redirect()->route('lead-index')->with('success', 'Lead deleted successfully.');
    }


    public function editTableData($tableName, $leadId)
    {
        try {
            //dd($leadId);die();
            $data = $this->leadService->getTableData($tableName, $leadId);
            $previousUrl = url()->previous();
            $lastFourDigits = substr($previousUrl, -4);
            //dd($lastSixDigits);die();
            return view('leads.edit_table_data', $data, array_merge($data, ['lastFourDigits' => $lastFourDigits]));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error occurred while retrieving data.']);
        }
    }

 
    public function updateTableData(Request $request)
    {
        $tableName = $request->input('tableName');
        $leadId = $request->input('lead_id');
        $formId = $request->input('form_id');
        $leadTableId = $request->input('lead_table_id');
        $lastFourDigits = $request->input('last_four_digit');
        $formData = $request->except(['_token', 'tableName', 'lead_id', 'form_id', 'lead_table_id','last_four_digit']);
     
        try {
            DB::beginTransaction();
    
            // Call service method to update the data
            $this->leadService->updateTableData($request, $tableName, $leadId, $formId, $formData);
    
            DB::commit();

            //return redirect()->route('lead-edit', ['id' => $leadTableId])->with('success', 'Data updated successfully');
            // Conditional redirection based on the value of $lastFourDigits
            if ($lastFourDigits === 'edit') {
                return redirect()->route('lead-edit', ['id' => $leadTableId])->with('success', 'Data updated successfully');
            } else {
                return redirect()->route('lead-show', ['id' => $leadTableId])->with('success', 'Data Edited successfully');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => '' . $e->getMessage()]);
        }
    }
    

    public function leads_upload_backup(Request $request)
    {
        //dd($request->form_id);die();
        $formName = [
            1 => 'Form A',
            2 => 'Form B',

        ];

        $fieldsByTable = [];
        $formId = $request->input('form_id');

        if ($request->has('form_id')) {
            $formId = $request->input('form_id');
            $fields = LeadFormDetail::where('form_id', $formId)->get();

            foreach ($fields as $field) {
                $fieldsByTable[$field->table_name][] = $field;
            }
        }

        return view('leads.leads_upload', compact('formName', 'fieldsByTable', 'formId'));
    }


    public function leads_upload(Request $request)
    {
        $formId = $request->input('form_id');
        return view('leads.leads_upload', compact('formId'));
    }


    public function downloadSampleFile_backup(Request $request)
    {
        // Validate the request
        $request->validate([
            'form_id' => 'required|exists:leads_form,form_id'
        ]);
        $leadFormDetailsColumns = LeadFormDetail::where('form_id', $request->form_id)->pluck('field_name')->toArray();
        // Get columns from Lead table
        $leadColumns = (new Lead)->getFillable();

        //Merge columns ensuring no duplicates
        $columns = array_unique(array_merge($leadColumns, $leadFormDetailsColumns));
        $columns = array_filter($columns, function ($column) {
            return $column !== 'form_id' && $column !== 'parent_id';
        });

        //dd($columns);die();
        $callback = function () use ($columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            fclose($file);
        };

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="sample-file.csv"',
        ];

        return Response::stream($callback, 200, $headers);
    }


    public function downloadSampleFile(Request $request)
    {
        // Validate the request
        $request->validate([
            'form_id' => 'required|exists:leads_form,form_id'
        ]);
        //$leadFormDetailsColumns = LeadFormDetail::where('form_id', $request->form_id)->pluck('field_name')->toArray();
        $leadFormDetailsColumns = LeadFormDetail::where('form_id', $request->form_id)
        ->where('field_value', '!=', 'file') // Exclude fields with 'file'
        ->pluck('field_name')
        ->toArray();
        // Get columns from Lead table
        //$leadColumns = (new Lead)->getFillable();
        $lead = new Lead;
        //$leadColumns = array_diff($lead->getFillable(), ['lead_status', 'no_of_employee',]);
        $leadColumns = array_diff($lead->getFillable(), ['lead_status', 'no_of_employee','title','profile_image','gender','dob','marital_status','lead_source','age','created_by']);

        //Merge columns ensuring no duplicates
        $columns = array_unique(array_merge($leadColumns, $leadFormDetailsColumns));
        $columns = array_filter($columns, function ($column) {
            return $column !== 'form_id' && $column !== 'parent_id';
        });

        // Map columns to user-friendly names
        $formattedColumns = array_map(function ($column) {
            return ucwords(str_replace('_', ' ', $column));
        }, $columns);

        $callback = function () use ($formattedColumns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $formattedColumns);
            fclose($file);
        };

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="sample-file.csv"',
        ];

        return Response::stream($callback, 200, $headers);
    }

    public function upload_file_backup(Request $request)
    {
        // Custom validation messages
        $messages = [
            'fileUpload.required' => 'The file upload is required.',
            'fileUpload.file' => 'The uploaded file must be a valid file.',
            'fileUpload.mimes' => 'The uploaded file must be a file of type: csv, txt.',
            'form_id.required' => 'The form ID is required.',
            'form_id.exists' => 'The selected form ID is invalid.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), [
            'fileUpload' => 'required|file|mimes:csv,txt',
            'form_id' => 'required|exists:leads_form,form_id'
        ], $messages);

        if ($validator->fails()) {
            // Collect validation error messages
            $errorMessages = implode(' ', $validator->errors()->all());
            return redirect()->back()->with('error', $errorMessages)->withInput();
        }

        $formId = $request->input('form_id');
        $parentId = DB::table('leads_form')->where('form_id', $formId)->value('parent_id');

        //uploaded file code
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            $path = $file->getRealPath();

            // Open and read the CSV file
            $handle = fopen($path, 'r');
            $header = fgetcsv($handle, 1000, ',');

            // Check if the header matches the expected columns
            if ($header && count($header) > 0) {
                // Get fields configuration from LeadFormDetail
                $fieldsConfig = LeadFormDetail::where('form_id', $formId)->get()->groupBy('table_name');

                // Begin a database transaction
                DB::beginTransaction();

                try {
                    $errors = []; // To collect validation errors

                    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                        $csvData = array_combine($header, $data);

                        // Validate required fields and unique email
                        $validator = Validator::make($csvData, [
                            'first_name' => 'required|string|max:191',
                            'last_name' => 'required|string|max:191',
                            'title' => 'required|string|max:191',
                            'email' => 'nullable|string|email|max:191|unique:leads,email',
                            'phone' => 'required|string|max:191',
                        ]);

                        if ($validator->fails()) {
                            $errors[] = $validator->errors()->all();
                            continue; // Skip to next iteration if validation fails
                        }

                        // Insert data into the Lead table
                        $leadData = [];
                        foreach ((new Lead)->getFillable() as $field) {
                            if (isset($csvData[$field])) {
                                //empty strings and set to NULL if empty
                                $leadData[$field] = $csvData[$field] === '' ? NULL : $csvData[$field];
                            }
                        }

                        $leadData['form_id'] = $formId;
                        $leadData['lead_status'] = '1';
                        $leadId = DB::table('leads')->insertGetId($leadData);
                        if (!$leadId) {
                            throw new \Exception("Failed to insert lead data and retrieve lead ID.");
                        }

                        // Insert data into the respective tables based on the configuration
                        foreach ($fieldsConfig as $tableName => $fields) {
                            $insertData = [
                                'lead_id' => $leadId,
                                'form_id' => $formId,
                            ];
                            if ($parentId !== null) {
                                $insertData['parent_id'] = $parentId;
                            }

                            foreach ($fields as $field) {
                                if (isset($csvData[$field->field_name])) {
                                    // Check for empty strings and set to NULL if empty
                                    $insertData[$field->field_name] = $csvData[$field->field_name] === '' ? NULL : $csvData[$field->field_name];
                                }
                            }

                            if (!empty($insertData)) {
                                DB::table($tableName)->insert($insertData);
                            }
                        }
                    }

                    fclose($handle);

                    // Commit the transaction
                    DB::commit();

                    if (!empty($errors)) {
                        return redirect()->back()->with('error', 'Validation failed for some records. Errors:' . json_encode($errors));
                    } else {
                        return redirect()->back()->with('success', 'File uploaded and data inserted successfully.');
                    }
                } catch (\Exception $e) {
                    // Rollback the transaction if something goes wrong
                    DB::rollback();

                    return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
                }
            } else {
                return redirect()->back()->with('error', 'Invalid CSV file format.');
            }
        } else {
            return redirect()->back()->with('error', 'File not uploaded.');
        }
    }



    public function upload_file(Request $request)
    {
        // Custom validation messages
        $messages = [
            'fileUpload.required' => 'The file upload is required.',
            'fileUpload.file' => 'The uploaded file must be a valid file.',
            'fileUpload.mimes' => 'The uploaded file must be a file of type: csv',
            'form_id.required' => 'The form ID is required.',
            'form_id.exists' => 'The selected form ID is invalid.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), [
            //'fileUpload' => 'required|file|mimes:csv',
            'fileUpload' => 'required|file|mimes:csv,txt,xls,xlsx',
            'form_id' => 'required|exists:leads_form,form_id'
        ], $messages);

        if ($validator->fails()) {
            // Collect validation error messages
            $errorMessages = implode(' ', $validator->errors()->all());
            return redirect()->back()->with('error', $errorMessages)->withInput();
        }

        $formId = $request->input('form_id');
        $parentId = DB::table('leads_form')->where('form_id', $formId)->value('parent_id');

        // Uploaded file code
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            $path = $file->getRealPath();

            // Open and read CSV file
            $handle = fopen($path, 'r');
            $header = fgetcsv($handle, 1000, ',');


            //header to convert spaces to underscores and uppercase to lowercase
            $dbHeader = array_map(function ($column) {
                $column = str_replace(' ', '_', $column);
                $column = strtolower($column);
                return $column;
            }, $header);

            // Check if the header matches the expected columns
            if ($dbHeader && count($dbHeader) > 0) {
                // Get fields from LeadFormDetail
                $fieldsConfig = LeadFormDetail::where('form_id', $formId)->get()->groupBy('table_name');

                // Collect all CSV data and validation errors
                $allCsvData = [];
                $errors = []; //collect validation errors
                $rowNumber = 2; // Start from the second row because the first row is the header

                while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    //dd($header);die();
                    $csvData = array_combine($dbHeader, $data);
                    //dd($csvData['dob']);die();
                    //$csvData['dob'] = $this->convertDate($csvData['dob']);
                    foreach ($fieldsConfig as $tableFields) {
                        foreach ($tableFields as $field) {
                            if ($field->field_value === 'date' && isset($csvData[$field->field_name])) {
                                $csvData[$field->field_name] = $this->convertDate($csvData[$field->field_name]);
                            }
                        }
                    }

                    // dd($csvData);die();

                    // Custom validation rules for each field based on their types
                    $fieldValidations = [];
                    foreach ($fieldsConfig as $tableFields) {
                        foreach ($tableFields as $field) {
                            $fieldName = $field->field_name;
                            $fieldType = $field->field_value;

                            switch ($fieldType) {
                                case 'varchar':
                                case 'char':
                                case 'text':
                                    $fieldValidations[$fieldName] = 'nullable|string';
                                    break;
                                case 'int':
                                    $fieldValidations[$fieldName] = 'nullable|integer';
                                    break;
                                case 'date':
                                    $fieldValidations[$fieldName] = 'nullable|date';
                                    break;
                                case 'boolean':
                                    $fieldValidations[$fieldName] = 'nullable|boolean';
                                    break;
                                default:
                                    $fieldValidations[$fieldName] = 'nullable';
                            }
                        }
                    }

                    // Validate required fields and unique email
                    $fieldValidations = array_merge($fieldValidations, [
                        'first_name' => 'required|string|max:191',
                        'last_name' => 'required|string|max:191',
                        //'title' => 'required|string|max:191',
                        'email' => 'nullable|string|email|max:191|unique:leads,email',
                        'phone' => 'required|string|max:191',
                    ]);

                    // Validate the CSV row
                    $validator = Validator::make($csvData, $fieldValidations);


                    if ($validator->fails()) {

                        $errors[] = ['row' => $rowNumber, 'messages' => $validator->errors()->all()];
                    } else {

                        $allCsvData[] = $csvData; // Only collect valid data
                    }
                    $rowNumber++;
                }

                fclose($handle);

                if (!empty($errors)) {
                    $errorMessages = [];
                    foreach ($errors as $error) {
                        $errorMessages[] = 'Row ' . $error['row'] . ': ' . implode(' ', $error['messages']);
                    }
                    return redirect()->back()->with('error', 'Validation failed for some records. Errors:' . json_encode($errorMessages));
                }

                // Begin a database transaction
                DB::beginTransaction();

                try {
                    $insertedCount = 0; // count the number of successfully inserted data

                    foreach ($allCsvData as $csvData) {
                        //dd($header);die();
                        // insert data into the Lead table
                        $leadData = [];
                        foreach ((new Lead)->getFillable() as $field) {
                            if (isset($csvData[$field])) {
                                // Empty strings and set to NULL if empty
                                $leadData[$field] = $csvData[$field] === '' ? NULL : $csvData[$field];
                            }
                        }

                        $leadData['form_id'] = $formId;
                        $leadData['lead_status'] = '1';
                        $leadData['created_by'] = auth()->id();
                        $phone=$leadData['phone'];
                        //ensure the phone number starts with '0'
                        if (substr($leadData['phone'], 0, 1) !== '0') {
                            $leadData['phone'] = '0' .$phone;
                        }
                       
                        $leadId = DB::table('leads')->insertGetId($leadData);
                        //dd($leadData);die();

                        if (!$leadId) {
                            throw new \Exception("Failed to insert lead data and retrieve lead ID.");
                        }


                        // Insert data into the tables based on the config
                        foreach ($fieldsConfig as $tableName => $fields) {

                            $insertData = [
                                'lead_id' => $leadId,
                                'form_id' => $formId,
                            ];

                            if ($parentId !== null) {
                                $insertData['parent_id'] = $parentId;
                            }


                            // foreach ($fields as $field) {
                            //     if (isset($csvData[$field->field_name])) {
                            //         // Check for empty strings and set to NULL if empty
                            //         $insertData[$field->field_name] = $csvData[$field->field_name] === '' ? NULL : $csvData[$field->field_name];
                            //     }
                            // }

                            foreach ($fields as $field) {
                                // If the field is of type 'file', insert NULL
                                if ($field->field_value === 'file') {
                                    $insertData[$field->field_name] = '';
                                } elseif (isset($csvData[$field->field_name])) {
                                    // Check for empty strings and set to NULL if empty
                                    $insertData[$field->field_name] = $csvData[$field->field_name] === '' ? NULL : $csvData[$field->field_name];
                                }
                            }

                            if (!empty($insertData)) {
                                //dd($insertData);die();
                                DB::table($tableName)->insert($insertData);
                            }
                        }


                        // Increment the count of successfully inserted records
                        $insertedCount++;
                    }



                    // Commit the transaction
                    DB::commit();

                    return redirect()->back()->with('success', "File uploaded and data inserted successfully. Number of records inserted: $insertedCount.");
                } catch (\Exception $e) {
                    // Rollback the transaction if something goes wrong error
                    DB::rollback();

                    return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
                }
            } else {
                return redirect()->back()->with('error', 'Invalid CSV file format.');
            }
        } else {
            return redirect()->back()->with('error', 'File not uploaded.');
        }
    }



    private function convertDate($dateString)
    {
        if (empty($dateString)) {
            return null;
        }

        $formats = [
            'd/m/Y',  // day/month/year (e.g., 01/10/2024)
            'm/d/Y',  // month/day/year (e.g., 10/01/2024)
            'Y-m-d',  // year-month-day (e.g., 2024-10-01)
            'Y/m/d',  // year/month/day (e.g., 2024/10/01)
            'd-m-Y',  // day-month-year (e.g., 01-10-2024)
            'm-d-Y',  // month-day-year (e.g., 10-01-2024)
            'Y.m.d',  // year.month.day (e.g., 2024.10.01)
            'd.m.Y',  // day.month.year (e.g., 01.10.2024)
            'd/m/y',  // day/month/two-digit year (e.g., 01/10/24)
            'm/d/y',  // month/day/two-digit year (e.g., 10/01/24)
            'd-m-y',  // day-month-two-digit year (e.g., 01-10-24)
            'm-d-y',  // month-day-two-digit year (e.g., 10-01-24)
            'd.m.y',  // day.month.two-digit year (e.g., 01.10.24)
            'd/m/y',  // day/month/two-digit year (e.g., 1/10/24)
            'd.m.y',  // day.month.two-digit year (e.g., 1.10.24)
            'd M Y',  // day Month year (e.g., 1 Jan 2023)
            'M d, Y', // Month day, year (e.g., Jan 1, 2023)
            'd-M-Y',  // day-Month-year (e.g., 01-Jan-2023)
            'Ymd',    // yearmonthday (e.g., 20231001)
            'dmy',    // daymonthyear (e.g., 01102023)
            'mdY',    // monthdayyear (e.g., 10012023)
        ];

        foreach ($formats as $format) {
            $date = DateTime::createFromFormat($format, $dateString);
            if ($date) {
                return $date->format('Y-m-d'); // Return in Y-m-d format
            }
        }

        return null;
    }

    
    private function convertDate_backup($dateString)
    {
        if (empty($dateString)) {
            return null;
        }

        $date = DateTime::createFromFormat('d/m/Y', $dateString);
        if (!$date) {
            $date = DateTime::createFromFormat('m/d/Y', $dateString);
        }

        return $date ? $date->format('Y-m-d') : null;
    }
    

    public function search_phone($data) {
        $searchTerm = trim($data);
        $formName = [];

        if (empty($searchTerm)) {
            return redirect()->route('lead-index')->with('error', 'Search Field cannot be blank.');
        }

        $leads = $this->leadService->search_on_url($data);
        if ($leads->isEmpty()) {
            // dd("ami here");
            return redirect('/lead/create?form_id=3092288972&phone='.$data)->with('error', 'No data found');
        }
        
        return redirect()->route('lead-show', $leads[0]->id);
    }


    public function updateLeadProfileImage($id)
    {
        $lead = Lead::findOrFail($id);
        if ($lead->profile_image) {
            // Path to the image file
            //$imagePath = public_path('uploads/agents/' . $lead->profile_image);
            $imagePath =getcwd().'/uploads/leads/'.$lead->profile_image;
    
            // Delete the file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            // Update the user record to remove the profile image
            $lead->profile_image = null;
            $lead->save();
    
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false, 'message' => 'No profile image found']);
    }

  

    
}
