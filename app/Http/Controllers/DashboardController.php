<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Lead;
use App\Models\LeadsForm;
use App\Models\Agent;
use App\Models\Product;
use App\Models\Campaign;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller {

	public function __construct() {
        // $this->middleware(['auth']);
    }

	public function dashboard()
    {
       return view('dashboard');
    }

	function profile() {
		return view('single_form');
	}

}

