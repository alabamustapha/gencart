@extends('layouts.admin')


@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Stores</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <a>stores</a>
                        </li>
                        
                    </ol>
                </div>
            </div>

            <div class="row wrapper wrapper-content">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2><i class="fa fa-laptop"></i>&nbsp; Manage stores</h2>

                            <p>
                                <a href=" {{ route('admin_create_store') }}" class="btn btn-primary"><i class="fa fa-cart-plus"></i>&nbsp; add store</a>
                            </p>
                            
                            <div class="row ">
                                <div class="col-lg-3">
                                    <select name="" id="" class="form-control">
                                        <option value="" disabled selected>records per page</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="input-group">
            
                                        <input type="text" placeholder="Search... " class="input form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn btn-primary">
                                                <i class="fa fa-search"></i> Search</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
            
            
            
                            <div class="table-responsive m-t-lg">
            
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                        
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Address</th>
                                            <th>Zipcode</th>
                                            <th>Date created</th>
                                            <th>action</th>
                                            
                                        </tr>
                                        @foreach($stores as $store)
                                        <tr>
                                            <td>{{ $store->name }}</td>
                                            <td><i class="fa fa-map-marker"></i>{{ $store->lat_long}}</td>
                                            <td><i class="fa fa-envelope"></i>{{ $store->address}}</td>
                                            <td><i class="fa fa-envelope"></i>{{ $store->zipcode}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="...">
                                                    <a href="{{ route('admin_show_store', ['store' => $store->slug]) }}"  type="button" class="btn btn-default btn-xs"><i class="fa fa-angle-double-right"></i>&nbsp;view</a>
                                                    <a href="{{route('admin_edit_store', ['store' => $store->slug])}}" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>&nbsp;edit</a>
                                                    <a href="#" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

@endsection