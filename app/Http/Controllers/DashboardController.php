<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
    public function index(){
    	if(Auth::user()->hasRole('admin')){
    		return $this->adminDasboard();
    	}
    	else{
    		return $this->userDashboard();
    	}
    }
    public function adminDasboard(){
    	return view('admin.layouts.app');
    }
    public function userDashboard(){
    	return view('user.layouts.app');
    }
    

}
