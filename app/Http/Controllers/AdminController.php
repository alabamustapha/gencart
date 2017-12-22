<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

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

//    public function create_store(Request $request){
//        $validator = $request->validate([
//            'name'       => 'bail|required|unique:stores',
//            'address'    => 'required',
//            'phone'      => 'required',
//            'zip'        => 'required',
//            'logo'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
//            'banner'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024'
//        ]);

//        $store = Store::create([
//            'name' => $request->name,
//     		'address' => $request->address,
//     		'phone' => $request->phone,
//     		'logo' => '',
//     		'banner' => '',
//     		'zip' => $request->zip,
//        ]);

//        if($store) {
//            if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
//                $extension = $request->logo->getClientOriginalExtension();
//                 $path = $request->logo->storeAs(
//                     'logos', str_replace(' ', '_',$request->name).'_logo'.'.'.$extension
//                 );

//                 dd($path);

//                 $store->logo = str_replace('public/', '', $path);
// 				$store->save();  
//             }
//        }

        
//    }

   public function edit_store(){
       return view('admin.edit_store');
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
