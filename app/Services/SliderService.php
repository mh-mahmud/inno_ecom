<?php

namespace App\Services;

use App\Models\Slider;

class SliderService
{


    public function getAllAgents()
    {
        return Slider::orderBy('created_at', 'desc')->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function create_slider($request)
    {
        if ($request->hasFile('slider_image')) {
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('slider_image')->move(getcwd().'/uploads/sliders', $fileNameToStore);
            
        } else {
            
            $fileNameToStore = '';
        }
        $agent_id = str_pad(mt_rand(1, 9999), 4);
        $user = User::create([
            'user_id' => str_pad(mt_rand(1, 9999999999999), 20),
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' =>  $request->username,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'address' => $request->address,
            'slider_image' => $fileNameToStore,
            'status' => $request->status,
            'user_type' =>'agent',
            'password' => bcrypt($request->password),
        ]);
        //$agent_id = str_pad(mt_rand(1, 9999), 4);
        $agent = new Agent([
            'agent_id' => $agent_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'birth_day' => $request->birth_day,
            'phone_number' => $request->phone_number,
            'status' => $request->status,
            'address' => $request->address,
            'description' => $request->description,
        ]);

        
        $user->agent()->save($agent);

        return $user;
    }

    public function getAgentWithUser($id)
    {
        $agent = Agent::findOrFail($id);
        $user = $agent->user()->firstOrFail();
        
        return compact('agent', 'user');
    }

    public function getAgentEditData($id)
    {
        $agent = Agent::findOrFail($id);
        $user = $agent->user()->firstOrFail();
        
        return compact('agent', 'user');
    }


    public function updateAgent($request, $id)
    {
        // Find the user by id
        //dd($id);die();
        $agent = Agent::findOrFail($id);
        $user = User::findOrFail($agent->user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        //$user->username = $id;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->user_type ='agent';
        //$user->password = bcrypt($request->password);
        if(!empty($request->password)) {
			$user->password = bcrypt($request->password);
		}
        if ($request->hasFile('slider_image')) {
           
            if ($user->slider_image) {
                $previousImagePath = getcwd().'/uploads/agents/'.$user->slider_image;
                if (file_exists($previousImagePath)) {
                    @unlink($previousImagePath);
                }
            }
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('slider_image')->move(getcwd().'/uploads/agents', $fileNameToStore);
            $user->slider_image = $fileNameToStore;
               
        }
        $user->save();
        $agent = $user->agent;
        $agent->first_name = $request->first_name;
        $agent->last_name = $request->last_name;
        $agent->gender = $request->gender;
        $agent->birth_day = $request->birth_day;
        $agent->phone_number = $request->phone_number;
        $agent->status = $request->status;
        $agent->address = $request->address;
        $agent->description = $request->description;
        

        // Save the agent
        $agent->save();
    }

    public function searchAgents($request)
    {
        $searchTerm = trim($request->input('search'));
        $query = Agent::query();

        $query->where(function($q) use ($searchTerm) {
            $q->where('agent_id', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('first_name', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('last_name', 'LIKE', '%' . $searchTerm . '%');
        });

        return $query->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function deleteAgentAndUser($id)
    {
        $agent = Agent::findOrFail($id);
        $user = $agent->user;
        if ($user->slider_image) {
            $imagePath = getcwd().'/uploads/agents/'.$user->slider_image;
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
        }
        $agent->delete();
        $user->delete();
        if($user->delete()) {
            return true;
        }
        return false;
    }
}
