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

    public function add_shopper(){
        return view('admin.add_shopper');
    }
    public function edit_shopper(){
        return view('admin.edit_shopper');
    }

    public function shopper(){
    	return view('admin.shopper');
    }
    public function shoppers(){
    	return view('admin.shoppers');
    }
   public function stores(){
       return view('admin.stores');
   }

   public function store(){
       return view('admin.store');
   }

   public function add_store(){
       return view('admin.add_store');
   }

   public function edit_store(){
       return view('admin.edit_store');
   }
   public function add_department(){
       return view('admin.add_department');
   }
   public function add_shelve(){
       return view('admin.add_shelve');
   }
   public function add_product(){
       return view('admin.add_product');
   } 

    public function departments(){
    	return view('admin.departments');
    }
    public function products(){
    	return view('admin.products');
    }

    public function add_city(){
        return view('admin.add_city');
    }
    public function edit_city(){
        return view('admin.edit_city');
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
