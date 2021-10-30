<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">My Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th style="width:60%">Product</th>
                            <th style="width:12%">Price</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:16%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                        <img src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h6>Product Name</h6>
                                        <p class="font-weight-light">Brand &amp; Name</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$49.00</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control form-control-sm text-center" value="1">
                            </td>
                            <td class="actions" data-th="">
                                <div class="text-right">
                                    <button class="btn btn-white bg-white btn-md mb-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <a href="checkout" class="btn btn-primary waves-effect waves-light">Checkout</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                2021 © Smartshoppers.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    <i class="mdi mdi-heart text-danger"></i> by Tegadian Limited
                </div>
            </div>
        </div>
    </div>
</footer>