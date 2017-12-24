<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Store;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::with(['departments', 'products', 'shelves'])->get();
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateStoreRequest $request)
    {
    
        $store = Store::create($request->all());

        if($store) {

           if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                $path = $request->logo->store('public/logos');
                $store->logo = str_replace('public/', '', $path);
				$store->save();  
            }

           if ($request->hasFile('banner') && $request->file('banner')->isValid()) {
                $path = $request->banner->store('public/banners');
                $store->banner = str_replace('public/', '', $path);
				$store->save();  
            }
       }  
        

        return back()->with('message', $store->name . ' Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('store.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store->delete();
        return back()->with('message', 'Store deleted');
    }
}
