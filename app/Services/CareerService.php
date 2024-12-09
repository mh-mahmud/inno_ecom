<?php

namespace App\Services;

use App\Models\Career;

class CareerService
{
    public function getAllCareers()
    {
        return Career::orderBy('created_at', 'desc')->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function createCareer($request)
    {
        $career = new Career([
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'requirements' => $request->requirements,
            'location' => $request->location,
            'employment_type' => $request->employment_type,
            'salary_range' => $request->salary_range,
            'closing_date' => $request->closing_date,
            'contact_email' => $request->contact_email,
        ]);

        $career->save();
        return $career;
    }

    public function getCareerById($id)
    {
        return Career::findOrFail($id);
    }

    public function updateCareer($request, $id)
    {
        $career = Career::findOrFail($id);

        $career->job_title = $request->job_title;
        $career->job_description = $request->job_description;
        $career->requirements = $request->requirements;
        $career->location = $request->location;
        $career->employment_type = $request->employment_type;
        $career->salary_range = $request->salary_range;
        $career->closing_date = $request->closing_date;
        $career->contact_email = $request->contact_email;

        $career->save();
        return $career;
    }

    public function deleteCareer($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return true;
    }
}
