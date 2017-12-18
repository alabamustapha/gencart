@extends("layouts.admin")

@section('content')
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Clients</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>customers</a>
                        </li>
                        <li class="active">
                            <strong>view customers</strong>
                        </li>
                    </ol>
                </div>
  </div>

	<div class="row wrapper wrapper-content">
	    <div class="col-lg-12">
	        <div class="ibox">
	            <div class="ibox-content">
	                <span class="text-muted small pull-right">Last modification:
	                    <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
	                <h2>Customers</h2>
	                <p>
	                   Lorem ipsum dolor sit amet consectetur adipisicing elit. 
	                </p>
	                <div class="input-group">
	                    <input type="text" placeholder="Search client " class="input form-control">
	                    <span class="input-group-btn">
	                        <button type="button" class="btn btn btn-primary">
	                            <i class="fa fa-search"></i> Search</button>
	                    </span>
	                </div>
	                <div class="clients-list">
	                    <ul class="nav nav-tabs">
	                        <span class="pull-right small text-muted">1406 Elements</span>
	                        <li class="active">
	                            <a data-toggle="tab" href="#tab-1">
	                                <i class="fa fa-users"></i> customers</a>
	                        </li>
	                        <li class="">
	                            <a data-toggle="tab" href="#tab-2">
	                            <span class="text-danger"> <i class="fa fa-users"></i> deleted</span></a>
	                        </li>
	                    </ul>
	                    <div class="tab-content">
	                        <div id="tab-1" class="tab-pane active">
	                            <div class="full-height-scroll">
	                                <div class="table-responsive" style="margin-top:10px;">
	                                    <table class="table table-striped table-bordered table-hover">
	                                        <tbody>
	                                            <tr>
	                                                <th>#</th>
	                                                <th>name</th>
	                                                <th>location</th>
	                                                <th>contact</th>
	                                                <th>status</th>
	                                                <th>action</th>
	                                            </tr>
	                                            <tr>
	                                                <td>#</td>
	                                                <td>Jane Doe</td>
	                                                <td>Goningora , kaduna</td>
	                                                <td> <i class="fa fa-phone"></i>&nbsp;000-000-0000</td>
	                                                <td><span class="label label-primary">active</span></td>
	                                                <td><a href="#" class="btn btn-danger">delete&nbsp;</a></td>
	                                            </tr>
	                                            <tr>
	                                                <td>#</td>
	                                                <td>Jane Doe</td>
	                                                <td>Goningora , kaduna</td>
	                                                <td><i class="fa fa-phone"></i>&nbsp;000-000-0000</td>
	                                                <td><span class="label label-warning">pending</span></td>
	                                                <td><a href="#" class="btn btn-danger">delete&nbsp;</a></td>
	                                                
	                                            </tr>
	                                            <tr>
	                                                <td>#</td>
	                                                <td>Jane Doe</td>
	                                                <td>Goningora , kaduna</td>
	                                                <td><i class="fa fa-phone"></i>&nbsp;000-000-0000</td>
	                                                <td><span class="label label-primary">active</span></td>
	                                                <td><a href="#" class="btn btn-danger">delete&nbsp;</a></td>
	                                                
	                                            </tr>
	                                        </tbody>
	                                        
	                                    </table>
	                                </div>
	                            </div>
	                        </div>

	                        <div id="tab-2" class="tab-pane">
	                            <div class="full-height-scroll">
	                                <div class="table-responsive" style="margin-top:10px;">
	                                    <table class="table table-striped table-bordered table-hover">
	                                        <tbody>
	                                            <tr>
	                                                <th>#</th>
	                                                <th>name</th>
	                                                <th>location</th>
	                                                <th>contact</th>
	                                            </tr>
	                                            <tr>
	                                                <td>#</td>
	                                                <td>James Doe</td>
	                                                <td>kakuri , kaduna</td>
	                                                <td>000-000-0000</td>
	                                            </tr>
	                                            <tr>
	                                                <td>#</td>
	                                                <td>James Doe</td>
	                                                <td>Goningora , kaduna</td>
	                                                <td>000-000-0000</td>
	                                                
	                                            </tr>
	                                            
	                                        </tbody>
	                        
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection