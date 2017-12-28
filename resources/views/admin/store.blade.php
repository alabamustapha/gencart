@extends('layouts.admin')

@section('content')
   <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>{{ $store->name }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Home</a>
                </li>
                <li>
                    <a href="{{route('admin_stores')}}"> All Stores</a>
                </li>
                <li class="active">
                    <a>{{ $store->name }}</a>
                </li>

            </ol>
        </div>
        <div class="col-lg-3 m-t-lg">
                <a class="btn btn-primary btn-lg" href="{{ route('admin_store_departments', ['store' => $store->slug ]) }}">
                    Manage Departments
                </a>
        </div>
    </div>

    <div class="wrapper wrapper-content">
            <div class="row m-b-sm">
                <div class="col-lg-4">
                    <div class="widget-head-color-box navy-bg no-margins p-md text-center">
                        <img src="{{asset('images/admin/a3.jpg')}}" class="img-circle " alt="logo">
                        <div class="m-md">
                            <h3 class="font-bold no-margins">
                                {{ $store->name }}
                            </h3>
                            <span><i class="fa fa-map-marker"></i>&nbsp; {{ $store->address }} ({{ $store->zipcode }})</span>
                        </div>
                        
                    </div>
                    <div class="widget-text-box text-center">
                        <div class="m-b-xs">
                                <span>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star fa-2x"></i>
                                    <i class="fa fa-star-half-full fa-2x"></i>
                                </span>
                        </div>
                    </div>

                        
                    <div class="widget-text-box clearfix">
                        <a href="{{route('admin_edit_store')}}" class="btn btn-success pull-left"><i class="fa fa-edit"></i>&nbsp;edit</a>
                        <a href="#" class="btn btn-danger pull-right"><i class="fa fa-trash"></i>&nbsp;delete</a>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget blue-bg p-lg text-center">
                                <div class="m-b-md">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                    <h1 class="m-xs">47</h1>
                                    <h3 class="font-bold no-margins">
                                        current orders
                                    </h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget blue-bg p-lg text-center">
                                <div class="m-b-md">
                                    <i class="fa fa-shopping-basket fa-4x"></i>
                                    <h1 class="m-xs">477</h1>
                                    <h3 class="font-bold no-margins">
                                        Stock available
                                    </h3>                                       
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget blue-bg p-lg text-center">
                                <div class="m-b-md">
                                    <i class="fa fa-money fa-4x"></i>
                                    <h1 class="m-xs"><i class="fa fa-dollar"></i>&nbsp;47,700</h1>
                                    <h3 class="font-bold no-margins">
                                        stock available
                        
                                    </h3>
                        
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

             <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <h2>&nbsp;Products</h2>
                    <a href="#" class="btn btn-primary" data-target="#productModal" data-toggle="modal">
                        <i class="fa fa-plus"></i>&nbsp; Add product</a>    
                    <p></p>
                     <!-- add product modal -->
                    <div class="modal fade productModal" id="productModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h3 class="modal-title">Add product</h3>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-shopping-bag"></i>
                                                        </span>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="product name" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-money"></i>
                                                        </span>
                                                        <input type="text" name="price" id="price" class="form-control" placeholder="price" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                        %
                                                        </span>
                                                        <input type="text" name="tax" id="tax" class="form-control" placeholder="tax percentage if any" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-shopping-bag"></i>
                                                        </span>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="product name" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-list"></i>
                                                        </span>
                                                        <input type="text" name="amount" id="amount" class="form-control" placeholder="amount" required>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            unit
                                                        </span>
                                                        <select name="unit" id="unit" class="form-control">
                                                                <option value="">...</option>
                                                                <option value="kg">kg</option>
                                                                <option value="pack">pack</option>
                                                                <option value="dozen">dozen</option>
                                                                <option value="m">m</option>
                                                                <option value="pcs">pcs</option>
                                                            </select>
                                                    </div>
                                                        
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            shelf
                                                        </span>
                                                        <select name="store" id="store" class="form-control">
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            department
                                                        </span>
                                                        <select name="department" id="department" class="form-control">
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">
                                                            brand
                                                        </span>
                                                        <select name="brand" id="brand" class="form-control">
                                                            <option value="">...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select product image</span>
                                                        <span class="fileinput-exists">Change</span><input type="file" name="..."/></span>
                                                        <span class="fileinput-filename"></span>
                                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                                    </div> 
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="description" id="description" class="form-control"  rows="5" placeholder="product description..." required ></textarea>
                                                </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">add</button>
                                    </div>
                                </form>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!--- end product modal-->


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
    
                                    <th>product</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                    <th>total sales</th>
                                    <th>added on</th>
                                    <th>action</th>
    
                                </tr>
                                <tr>
                                    <td>milk</td>
                                    <td>20</td>
                                    <td>
                                        <i class="fa fa-dollar"></i>&nbsp;20</td>
                                    <td>
                                        10
                                    </td>
                                    <td>14 Dec 2017</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="...">
                                            <a href="" type="button" class="btn btn-default btn-xs">
                                                <i class="fa fa-angle-double-right"></i>&nbsp;view</a>
                                            <a href="" type="button" class="btn btn-success btn-xs">
                                                <i class="fa fa-edit"></i>&nbsp;edit</a>
                                            <a href="" type="button" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"></i>&nbsp;delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

   
@endsection