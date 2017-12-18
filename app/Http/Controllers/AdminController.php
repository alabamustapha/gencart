<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function showUsers(){
        return view('admin.users');
    }

    public function customers(){
    	return view('admin.customers');
    }

    public function shoppers(){
    	return view('admin.shoppers');
    }

    public function stores(){
    	return view('admin.stores');
    }

     public function stores_store(){
    	return view('admin.store');
    }
    public function departments(){
    	return view('admin.departments');
    }
    public function products(){
    	return view('admin.products');
    }

    public function cities(){
    	return view('admin.cities');
    }

    public function old_orders(){
    	return view('admin.old_orders');
    }
    public function new_orders(){
    	return view('admin.new_orders');
    }

    public function statistics(){
    	return view('admin.statistics');
    }

    public function settings(){
    	return view('admin.settings');
    }
}
