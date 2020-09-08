@extends('layouts.app')
@section('content')
    <!-- modals -->
    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">Add Billable Items</h1>
							</span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">New Bill</li>

                        </ol>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-right text-white"></div>
            </div>
        </header>
        <div class="row with-custom-header">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="bill-details">
                                    <div class="contact-header">
                                        <h4>Billable Item Status</h4>
                                        <hr>
                                    </div>

                                    <form class="with-mpesa animated fade-in">
                                        <div class="row" >

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>Account Name</strong>  <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select id="selectbillable" class="selectpicker form-control show-tick" data-live-search="true">
                                                        <option value="select">-- Select Status --</option>
                                                        <option value="parent">Parent</option>
                                                        <option value="blue">Child</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="bill-details h-100 bill-checkout">
                                    <div class="contact-header">
                                        <h4>Billable Item details</h4>
                                        <hr>
                                    </div>

                                    <form class= "animated fade-in parent box" id="cform">
                                        <div class="row h-100 position-relative" >

                                            <div class="form-items w-100">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Item Name</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" id="itemName" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Parent</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input id="isParent" type="text" class="form-control  pl-3" value="true" required readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group float-right">
                                                            <span type="submit" class="btn btn-primary btn-parent">
                                                            <i class="zmdi zmdi-save"></i> Save changes</span>
                                                            <span class="d-none" id="loader14" >
                                                            <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </form>


                                    <form class= "animated fade-in blue box" id="cform1">
                                        <div class="row h-100 position-relative" >

                                            <div class="form-items w-100">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Item Name</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" id="itemN" required>
                                                            <input id="isP" type="hidden" class="form-control  pl-3" value="false" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Amount</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" id="amount" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Currency</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="currency" data-live-search="true">
                                                                <option data-tokens="select">-- Select Currency--</option>
                                                                <option value="KES">KES</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>ParentId</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="parentId" data-live-search="true">
                                                                <option data-tokens="select">-- Select Parent Id--</option>
                                                                @foreach($getCategories->data as $item)
                                                                    <option value="{{ $item->parentId }}">{{ $item->itemName }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>uniqueAdvertCode</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" id="uniqueAdvertCode" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Fixed</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="fixed" data-live-search="true">
                                                                <option data-tokens="select">-- Select Status --</option>
                                                                <option value="true">Yes</option>
                                                                <option value="false">No</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <span type="submit" class="btn btn-primary btn-child">
                                                            <i class="zmdi zmdi-save"></i> Save changes</span>
                                                            <span class="d-none" id="loader13" >
                                                            <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <footer class="footer hidden-xs-down">
            <p>Powered by RevenueSure</p>
        </footer>
    </section>
    <!-- Modal -->
    <!-- editing modal -->
    <div class="modal fade" id="edit-bill-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Billing Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Make changes to initially submitted Details</p>
                    <form class="with-mpesa animated fade-in">
                        <div class="row" >

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>
                                        <strong>Account Name</strong>  <strong class="text-danger">*</strong>
                                        <p class="d-none"><small>Select account name from options bellow</small></p>
                                    </label>
                                    <select class="selectpicker form-control show-tick" data-live-search="true">
                                        <option data-tokens="select">-- Select Account Name --</option>
                                        <option data-tokens="option 1">option 1</option>
                                        <option data-tokens="option 2">option 2</option>
                                        <option data-tokens="option 3">option 3</option>
                                        <option data-tokens="option 4">option 4</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>
                                        <strong>Income Type</strong>  <strong class="text-danger">*</strong>
                                        <p class="d-none"><small>Select income type from Drop down</small></p>
                                    </label>
                                    <select class="selectpicker form-control show-tick" data-live-search="true">
                                        <option data-tokens="select">-- Select Income Type --</option>
                                        <option data-tokens="option 1">option 1</option>
                                        <option data-tokens="option 2">option 2</option>
                                        <option data-tokens="option 3">option 3</option>
                                        <option data-tokens="option 4">option 4</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>Sub County</strong>  <strong class="text-danger">*</strong>
                                                        <p class="d-none"><small>Select income type from Drop down</small></p>
                                                    </label>
                                                    <select class="selectpicker form-control show-tick" data-live-search="true">
                                                        <option data-tokens="select">-- Select sub county --</option>
                                                        <option data-tokens="option 1">option 1</option>
                                                        <option data-tokens="option 2">option 2</option>
                                                        <option data-tokens="option 3">option 3</option>
                                                        <option data-tokens="option 4">option 4</option>

                                                    </select>

                                                </div>

                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>Ward</strong>  <strong class="text-danger">*</strong>
                                                        <p class="d-none"><small>Select income type from Drop down</small></p>
                                                    </label>
                                                    <select class="selectpicker form-control show-tick" data-live-search="true">
                                                        <option data-tokens="select">-- Select ward --</option>
                                                        <option data-tokens="option 1">option 1</option>
                                                        <option data-tokens="option 2">option 2</option>
                                                        <option data-tokens="option 3">option 3</option>
                                                        <option data-tokens="option 4">option 4</option>

                                                    </select>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <strong>Brief Description</strong>  <strong class="text-danger">*</strong>
                                            </label>
                                            <textarea class="form-control  text-counter  pl-3 pt-3" placeholder="Start typing..." required style="height: 134px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>
                                        <strong>Amount</strong>  <strong class="text-danger">*</strong>
                                        <p class="d-none"><small>Enter amount to be paid</small></p>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter amount" required>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                    <button type="button" class="btn btn-success btn--icon-text"> <i class="zmdi zmdi-check" ></i>Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- editing modal end -->

    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $('.btn-parent').click(function(e){
            e.preventDefault();


            var itemName = $('#itemName').val();
            var isParent = $("#isParent").val();

            if(itemName === "" || isParent ==="" ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "<?php echo url('billable-items')?>" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {itemName:itemName, isParent:isParent},

                success:function(data){
                    $("#cform")[0].reset();

                    console.log(data.success.message);
                    $('#loader14').addClass('d-none');
                    $('#get-id').modal('hide');
                    location.reload();

                    //$("#res-table").load(window.location + " #res-table");
                    swal({
                        title: data.success.message,
                        text:data.success.message,
                        icon: "success",
                    });


                } ,
                error: function(data) {

                    console.log(data.success.message);
                    $('#get-id').modal('hide');
                    $('#loader14').addClass('d-none');
                    swal({
                        title: "Error!",
                        text:data.success.message,
                        icon: "success",
                    });

                }

            });

        })
    </script>
    <script type="text/javascript">
        $('.btn-child').click(function(e){
            e.preventDefault();


            var itemName = $('#itemN').val();
            var isParent = $("#isP").val();
            var amount = $("#amount").val();
            var currency = $("#currency").val();
            var parentId = $("#parentId").val();
            var uniqueAdvertCode = $("#uniqueAdvertCode").val();
            var fixed = $("#fixed").val();

            //alert();

            if(itemName === "" || isParent ==="" ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader13').removeClass('d-none');
            $.ajax({

                url: "<?php echo url('child-items')?>" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {itemName:itemName, isParent:isParent, amount:amount,currency:currency,parentId:parentId,uniqueAdvertCode:uniqueAdvertCode, fixed:fixed},

                success:function(data){
                    $("#cform1")[0].reset();

                    console.log(data);
                    $('#loader13').addClass('d-none');
                    $('#get-id').modal('hide');
                    //location.reload();

                    //$("#res-table").load(window.location + " #res-table");
                    swal({
                        title: data.success.message,
                        text:data.success.message,
                        icon: "success",
                    });

                    if(data.success.data.fixed === "false")
                    {
                        setTimeout(function(){
                            window.location = '<?php echo url('additional-price') ?>/'+data.success.data.uniqueAdvertCode;
                        }, 5000);
                    }else{
                        return false;
                    }


                } ,
                error: function(data) {

                    console.log(data.success.message);
                    $('#get-id').modal('hide');
                    $('#loader13').addClass('d-none');
                    swal({
                        title: "Error!",
                        text:data.success.message,
                        icon: "success",
                    });

                }

            });

        })
    </script>
    <script>
        $(document).ready(function(){
            $("#selectbillable").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
@endsection



