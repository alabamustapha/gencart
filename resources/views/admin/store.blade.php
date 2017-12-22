@extends('layouts.admin')

@section('content')
   <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>store name</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Home</a>
                </li>
                <li>
                    <a href="{{route('admin_stores')}}">stores</a>
                </li>
                <li class="active">
                    <a>store name</a>
                </li>

            </ol>
        </div>
        <div class="col-lg-2 m-t-lg">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{route('admin_add_department')}}"><i class="fa fa-plus"></i>&nbsp;add department</a></li>
                    <li><a href="{{route('admin_add_shelve')}}"><i class="fa fa-plus"></i>&nbsp;add shelve</a></a></li>
                    <li><a href="{{route('admin_add_product')}}"><i class="fa fa-plus"></i>&nbsp;add product</a></a></li>
                   
                </ul>
            </div>
        </div>

    </div>

            <div class="row wrapper wrapper-content">
              
                <div class="row m-b-sm">
                    <div class="col-lg-4">
                        <div class="widget-head-color-box navy-bg no-margins p-md text-center">
                            <img src="{{asset('images/admin/a3.jpg')}}" class="img-circle " alt="logo">
                            <div class="m-md">
                                <h3 class="font-bold no-margins">
                                    store name
                                </h3>
                                <span><i class="fa fa-map-marker"></i>&nbsp;loaction, saudi arabia</span>
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
                                          stock available
                                          
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




            </div>

            <div class="row wrapper wrapper-content">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>
                               &nbsp;products</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-plus"></i>&nbsp; add product</a>
                            <p></p>
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

@endsection