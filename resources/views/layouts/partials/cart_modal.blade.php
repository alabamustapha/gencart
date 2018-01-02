<!-- Modal -->
<div class="modal fade modal-right-pane" id="modalSidePaneRight" tabindex="-1" role="dialog" aria-labelledby="sidePaneRightModal" aria-hidden="true">

    <div class="modal-dialog" role="document">    

    <div class="modal-content rounded-0">



        <div class="modal-header">

        <h5 class="modal-title" id="sidePaneRightModal"> My Cart</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span class="modal-close" aria-hidden="true">&times; Close</span>

        </button>

        </div>



        <div class="modal-body">

            <!-- <div class="text-center">

                <i class="fa fa-shopping-cart fa-5x"></i>

                <p><strong>Your Cart is Empty</strong></p>

            </div> -->




            <div class="ibox">

                <div class="ibox-title">
                    <span class="float-right">(<strong>{{ count($cartItems) }}</strong>) items</span>
                    <h5>Items in your cart</h5>
                </div>
                
                
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table shoping-cart-table">

                            <tbody>
                            <tr>
                                <td width="90">
                                    <div class="cart-product-imitation">
                                    </div>
                                </td>
                                <td class="desc">
                                    <h3>
                                        <a href="#" class="text-navy">
                                            PM software
                                        </a>
                                    </h3>
                                    <p class="small">
                                        Readable content of a page when looking at its layout.
                                    </p>
                                    <!-- <dl class="small m-b-none">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                    </dl> -->

                                    <div class="m-t-sm">
                                        <a href="#" class="text-muted"><i class="fa fa-edit"></i> instructions</a>
                                        |
                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </td>

                                <!-- <td>
                                    $1.90
                                </td> -->
                                <td width="65">
                                    <input type="text" class="form-control" placeholder="1">
                                </td>

                                <td>
                                    $1.9
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table shoping-cart-table">

                            <tbody>
                            <tr>
                                <td width="90">
                                    <div class="cart-product-imitation">
                                    </div>
                                </td>
                                <td class="desc">
                                    <h3>
                                        <a href="#" class="text-navy">
                                            PM software
                                        </a>
                                    </h3>
                                    <p class="small">
                                        Readable content of a page when looking at its layout.
                                    </p>
                                    <!-- <dl class="small m-b-none">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                    </dl> -->

                                    <div class="m-t-sm">
                                        <a href="#" class="text-muted"><i class="fa fa-edit"></i> instructions</a>
                                        |
                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </td>

                                <!-- <td>
                                    $1.90
                                </td> -->
                                <td width="65">
                                    <input type="text" class="form-control" placeholder="1">
                                </td>

                                <td>
                                    $1.9
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                
                <!-- <div class="ibox-content">

                    <button class="btn btn-primary float-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                    <button class="btn btn-white"><i class="fa fa-arrow-left"></i> Continue shopping</button>

                </div> -->
            </div>




        </div>



        <div class="modal-footer" >

            <button type="button" class="btn btn-default btn-block" style="display:flex; justify-content: space-between;">

                Checkout

                <h1><span class="badge badge-secondary">{{ LaraCart::total() }}</span></h1>

            </button>

        </div>

    </div>

    </div> <!-- modal dialog -->

</div> <!-- modal fade -->
