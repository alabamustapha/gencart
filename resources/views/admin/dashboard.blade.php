@extends("layouts.admin")

@section('content')

	<div class="wrapper wrapper-content">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Monthly</span>
                                <h5>Sales</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><i class="fa fa-dollar"></i>&nbsp;40 886,200</h1>
                                <div class="stat-percent font-bold text-success">20%
                                    <i class="fa fa-level-up"></i>
                                </div>
                                <small>Total sales</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Annual</span>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"> <i class="fa fa-shopping-bag"></i>  275,800</h1>
                            <div class="stat-percent font-bold text-info">20%
                                    <i class="fa fa-level-up"></i>
                                </div>
                                <small>orders</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">annual</span>
                                <h5>users</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><i class="fa fa-users"></i>&nbsp;106,120</h1>
                                <div class="stat-percent font-bold text-navy">44%
                                    <i class="fa fa-level-up"></i>
                                </div>
                                <small>all users</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <!-- <span class="label label-danger pull-right">Low value</span> -->
                                <h5>products</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><i class="fa fa-shopping-basket"></i>&nbsp;80,600</h1>
                                <div class="stat-percent font-bold text-danger">
                                    
                                </div>
                                <small>total products</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-12">
                       <div class="ibox">
                            <div class="ibox-content">
                                <span class="text-muted small pull-right">Last modification:
                                    <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                                <h2><i class="fa fa-shopping-bag"></i>&nbsp;recent Orders</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="row">
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
                                        <tr>
                                            <th>order id</th>
                                            <th>customer name</th>
                                            <th>email</th>
                                            <th>contact</th>
                                            <th>total products</th>
                                            <th>amount</th>
                                            <th>status</th>
                                            <th>order date</th>
                                            <th>action</th>
                                        </tr>
                                    </table>
                                </div>
                          </div>
                       </div>
                    </div> 
                   
                </div>

            </div>

@endsection

@section('scripts')

@endsection