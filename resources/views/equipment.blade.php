@extends('layouts.dashboardAdmin') 
@section('page_title','Equipment Inventory') 
@section('page_content')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title" style="margin-bottom: 20px;">
                    <div class="title_left">
                        <h4 style="margin-top: -4px;">Equipment <small>Inventory</small></h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        It shows inventory of trucks, including some information like its total number of stocks, available, Deployed.
                    </p>

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead style="background-color: #353959; color:#ffffff;">
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Available</th>
                                <th>Deployed</th>
                                <th>Defective</th>
                                <th>Total Quantity</th>
                                <!--th>Action</th-->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($var as $var)
                            <tr>
                                <td>{{$var->id}}</td>
                                <td>{{$var->ec_category}}</td>
                                <?php
                                    if($var->Available==0){
                                      echo '<td>0</td>';
                                    }else{
                                      echo '<td>'. $var->Available. '</td>';
                                    }if($var->Deployed==0){
                                      echo '<td>0</td>';
                                    }else{
                                      echo '<td>'. $var->Deployed. '</td>';
                                    }if($var->Defective==0){
                                      echo '<td>0</td>';
                                    }else{
                                      echo '<td>'. $var->Defective. '</td>';
                                    }
                                ?>
                                <td>{{$var->ec_quantity}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
@stop
