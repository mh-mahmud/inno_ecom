<?php

namespace App\Services;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use DB;

class ProductService
{
    public function productList($request)
    {
        $sql = Product::query();
        $data = $request->all();
        if(!empty($data["search"])) {
            $sql->where('name','like', '%' . $data["search"] . '%');

        }
        if (isset($data['paginate']) && $data['paginate'] == false) {
            return  $sql->orderBy('id', 'DESC')->get();

        } else {
            return  $sql->orderBy('id', 'DESC')->paginate(config('constants.ROW_PER_PAGE'));

        }
    }

    public function productStore($request)
    {
        $request->validate([
            'name' => 'required|unique:products|max:191',
            'product_code' => 'required|max:20',
            'product_type' => 'required',
            'product_cost' => [
                'nullable',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
            'product_value' => [
                'nullable',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
        ], [
            'product_cost.regex' => 'The product cost must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
            'product_value.regex' => 'The product value must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
        ]);
        $data = $request->all();

        $fileNameToStore = '';
        if ($request->hasFile('img_path')) {
            $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img_path')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $request->file('img_path')->move(getcwd().'/uploads/products', $fileNameToStore);
            
        } 

        try {
            return  DB::transaction(function () use ($data, $fileNameToStore) {
                $dataObj                        = new Product();
                $dataObj->name                  = $data['name'];
                $dataObj->product_type          = $data['product_type'];
                $dataObj->product_cost          = $data['product_cost'];
                $dataObj->product_value         = $data['product_value'];
                $dataObj->product_code          = $data['product_code'];
                $dataObj->description           = $data['description'];
                $dataObj->status                = $data['status'];
                $dataObj->img_path              = $fileNameToStore;
                $dataObj->created_by            = Auth::id();
                $dataObj->save();

                Helper::storeLog($data['name'], "Products", "Add Product", "Added");

                return (object)[
                    'status'                 => 201,
                    'info'                   => $dataObj->id
                ];
            });
        } catch (Exception $e) {
            return (object)[
                'status'             => 424,
                'error'              => $e->getMessage()
            ];
        }
    }

    public function productUpdate($request, $id)
    {
        $request->validate([
            'name'         => 'required|max:191|unique:products,name,'.$id,
            'product_code'  => 'required|max:20',
            'product_type'  => 'required',
            'product_cost' => [
                'nullable',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
            'product_value' => [
                'nullable',
                'numeric',
                'regex:/^\d{1,11}(\.\d{1,2})?$/'
            ],
        ], [
            'product_cost.regex' => 'The product cost must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
            'product_value.regex' => 'The product value must have at most 11 digits before the decimal point and up to 2 digits after the decimal point.',
        ]);
        $data = $request->all();
        $fileNameToStore = '';
        if ($request->hasFile('img_path')) {
            $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img_path')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $request->file('img_path')->move(getcwd().'/uploads/products', $fileNameToStore);
            
        } 

        try {
            return  DB::transaction(function () use ($data, $fileNameToStore, $request, $id) {
                $dataObj                        = Product::findOrFail($id);;
                $dataObj->name                  = $data['name'];
                $dataObj->product_type          = $data['product_type'];
                $dataObj->product_cost          = $data['product_cost'];
                $dataObj->product_value         = $data['product_value'];
                $dataObj->product_code          = $data['product_code'];
                $dataObj->description           = $data['description'];
                $dataObj->status                = $data['status'];
                $dataObj->img_path              = $request->hasFile('img_path') ? $fileNameToStore : $dataObj->img_path;
                $dataObj->updated_by            = Auth::id();
                $dataObj->save();

                Helper::storeLog($data['name'], "Products", "Update Product", "Updated");

                return (object)[
                    'status'                 => 208,
                    'info'                   => $dataObj->id
                ];
            });


        } catch (Exception $e) {
            return (object)[
                'status'             => 424,
                'error'              => $e->getMessage()
            ];
        }

    }

    public function getProductById($id)
    {
        return Product::findOrFail($id);
    }

    public function productDelete($id)
    {
        try {
            return  DB::transaction(function () use ($id) {
                $data = Product::findOrFail($id);
                $data->delete();

                Helper::storeLog($data->name, "Products", "Delete Product", "Deleted");

                return (object)[
                    'status'                 => 200,
                ];

            });
        } catch (Exception $e) {
            return (object)[
                'status'             => 424,
                'error'              => $e->getMessage()
            ];
        }
    }
}