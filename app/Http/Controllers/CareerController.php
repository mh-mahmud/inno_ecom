<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\CareerService;

class CareerController extends Controller
{
    protected $careerService;

    public function __construct(CareerService $careerService)
    {
        $this->careerService = $careerService;
    }

    public function index()
    {
        $careers = $this->careerService->getAllCareers();
        return view('careers.index', compact('careers'));
    }

    public function create()
    {
        return view('careers.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_title' => 'required|string',
            'job_description' => 'required|string',
            'requirements' => 'nullable|string',
            'location' => 'nullable|string',
            'employment_type' => 'required|in:Full-Time,Part-Time,Contract,Internship',
            'salary_range' => 'nullable|string',
            'closing_date' => 'required|date',
            'contact_email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->careerService->createCareer($request);
        return redirect()->route('careers-index')->with('success', 'Career created successfully.');
    }

    public function show($id)
    {
        $career = $this->careerService->getCareerById($id);
        return view('careers.show', compact('career'));
    }

    public function edit($id)
    {
        $career = $this->careerService->getCareerById($id);
        return view('careers.edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => 'required|string',
            'job_description' => 'required|string',
            'requirements' => 'nullable|string',
            'location' => 'nullable|string',
            'employment_type' => 'required|in:Full-Time,Part-Time,Contract,Internship',
            'salary_range' => 'nullable|string',
            'closing_date' => 'required|date',
            'contact_email' => 'required|email',
        ]);

        $this->careerService->updateCareer($request, $id);
        return redirect()->route('careers-index')->with('success', 'Career updated successfully.');
    }

    public function destroy($id)
    {
        try {
            $this->careerService->deleteCareer($id);
            return redirect()->route('careers-index')->with('success', 'Career deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
