<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Store;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Return a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $categories = Category::all();
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
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

        if ($store) {

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


        return $store;
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
    public function destroy(Store $store)
    {

        if ($store->delete()) {
            return true;
        }

        return false;

    }

    public function getStores(Category $category)
    {
        return $category->stores()->paginate(10);
    }

}
