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
        {{-- <div class="row with-custom-header">
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
                                                        <strong>Category Selection</strong>  <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select id="selectbillable" class="selectpicker form-control show-tick" data-live-search="true">
                                                        <option value="select">-- Select Status --</option>
                                                        <option value="parent">Main Category</option>
                                                        <option value="blue">Sub Category</option>
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
                                                                <strong>Category</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input id="isParent" type="text" class="form-control  pl-3" value="true" required readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group float-right">
                                                            <span type="submit" class="btn btn-success btn-parent">
                                                            <i class="zmdi zmdi-save"></i> Save Billable Item</span>
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
                                                                <strong>Category</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="parentId" data-live-search="true">
                                                                <option data-tokens="select">-- Select Category--</option>
                                                                @foreach($getCategories->data as $item)
                                                                    <option value="{{ $item->parentId }}">{{ $item->itemName }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Advert Code</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" id="uniqueAdvertCode" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Fixed Rate</strong>  <strong class="text-danger">*</strong>
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
                                                            <span type="submit" class="btn btn-success btn-child">
                                                            <i class="zmdi zmdi-save"></i> Save </span>
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

        </div> --}}

        <div class="row with-custom-header">
            <div class="col-12 h-100">
                <div class="card h-100">
                    <div class="card-body h-100">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-sm-12">
                                <div class="bill-details h-100">
                                    <div class="contact-header">
                                        <h4>Advertisment Categories</h4>
                                        <p>Select a type main or sub-category for the new Advertisment fee type you want to add.
                                        <hr>
                                    </div>

                                    <form class="with-mpesa animated fade-in receipting-form w-100">
                                        <div class="row w-100" >

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>Category Selection</strong>  <strong class="text-danger">*</strong>
                                                        <p class="d-none"><small>Select bill type Bellow</small></p>
                                                    </label>
                                                    <select id="selectbillable" class="selectpicker form-control show-tick" data-live-search="true">
                                                        <option value="select">-- Select Status --</option>
                                                        <option value="parent">Main Category</option>
                                                        <option value="blue">Sub Category</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-12 d-none">
                                                <button class="btn btn-secondary text-uppercase w-100 d-flex justify-content-center align-items-center">Add to bill<i class="icon-list-add font-22 ml-3"></i></button>

                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="col-sm-12 col-md-7 col-lg-7 form-actions-cont">
                                <div class="">

                                    <!-- hide fater searching for bill successfully -->
                                    <div class="w-100 search-img h-320">
                                        <center>
                                            <img src="demo/img/form-svgs/2838020.svg">

                                            <h4>Search for bill first</h4>
                                        </center>
                                    </div>
                                    <div class="bill-details h-100 bill-checkout their-forms w-100 d-none">
                                        <!-- bill results -->
                                        <div class="contact-header">
                                            <h4>New Advertisement type form</h4>
                                            <hr>
                                        </div>
                                        <div class="">

                                            <form class= "animated fade-in main-category d-none " id="cform">
                                                <div class="row h-100 position-relative" >

                                                   <div class="form-items w-100">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>New Fee type name</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter  new fee type name" id="itemName"  required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Category</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input id="isParent" type="text" class="form-control  pl-3"  value="true" readonly placeholder="category">
                                                        </div>
                                                    </div>



                                                   </div>

                                                    <div class="col-12 submit-btn-container">
                                                        <div class="form-group">
                                                            <span type="submit" class="btn btn-success btn-parent btn--icon-text">
                                                            <i class="zmdi zmdi-save"></i> Save Billable Item</span>
                                                            <span class="d-none" id="loader14" >
                                                            <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


                                            <form class= "animated fade-in sub-category col-12 d-none" id="cform1">
                                                <div class="row position-relative" >

                                                   <div class="form-items row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <strong>Item Name</strong>  <strong class="text-danger">*</strong>
                                                                    </label>


                                                                    <input type="text" class="form-control  pl-3" placeholder="Enter Item Name" id="itemN" required>
                                                                    <input id="isP" type="hidden" class="form-control  pl-3" value="false" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>
                                                                        <strong>Advert Code</strong>  <strong class="text-danger">*</strong>
                                                                    </label>
                                                                    <input type="text" class="form-control  pl-3" placeholder="Enter advert code" id="uniqueAdvertCode" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 col-sm-12">
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

                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Amount</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" id="amount" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Category</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="parentId" data-live-search="true">
                                                                <option data-tokens="select">-- Select Category--</option>
                                                                @foreach($getCategories->data as $item)
                                                                    <option value="{{ $item->parentId }}">{{ $item->itemName }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Does it have a fixed rate?</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="fixed" data-live-search="true">
                                                                <option data-tokens="select">-- Select from options --</option>
                                                                <option value="true">Yes</option>
                                                                <option value="false">No</option>
                                                            </select>
                                                        </div>
                                                    </div>




                                                   </div>


                                                    <div class="form-group">
                                                        <span type="submit" class="btn btn-success btn-child">
                                                        <i class="zmdi zmdi-save"></i> Save </span>
                                                        <span class="d-none" id="loader13" >
                                                        <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                                                        </span>
                                                     </div>

                                                </div>
                                            </form>



                                        </div>




                                    </div>
                                </div>

                                <!-- bill total -->
                                <div class="bill-total  py-3 d-none">
                                    <div class="">
                                        <!-- show if the bill has not been paid -->
                                        <button class="btn btn-warning text-black text-capitalize w-100 btn-big d-none" data-toggle="modal" data-target="#mpesa-paymodal"><span class="font-12px">Send payment request</span><i class="ml-3 font-18 zmdi zmdi-phone-forwarded"></i></button>
                                        <!-- show if bill has been paid -->
                                        <button class="btn btn-primary btn--icon-text"><i class="zmdi zmdi-print mr-3"></i>Print receipt</button>
                                    </div>

                                    <div class="text-left d-none">
                                        <span class=" font-weight-light font-22">5 Items</span>
                                    </div>


                                    <div class="text-right">
                                        <small class="text-muted-blue bold bold">Total bill Amount</small>
                                        <div class=""><h4 class="font-weight-bold">KES 258,203</h4></div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-12 d-none">
                                <div class="bill-details h-100 bill-checkout">
                                    <div class="contact-header">
                                        <h4>Customer details</h4>
                                        <hr>
                                    </div>

                                    <form class= "animated fade-in">
                                        <div class="row h-100 position-relative" >

                                           <div class="form-items w-100">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>Custmer's Name</strong>  <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>ID Num/ PP Num.</strong>  <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" class="form-control  pl-3" placeholder="Enter customer's Id Number">
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>
                                                        <strong>Customer's Phone number</strong>  <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" class="form-control  pl-3" placeholder="Enter customer's Phone Number" required>
                                                </div>
                                            </div>

                                           </div>

                                            <div class="col-12 submit-btn-container">
                                                <button class="btn btn-success text-capitalize w-100 btn-big  "><span class="font-12px">Print Bill</span><i class="ml-3 zmdi zmdi-print font-18"></i></button>
                                                <center class="my-3">- OR -</center>
                                                <button class="btn btn-warning text-black text-capitalize w-100 btn-big " data-toggle="modal" data-target="#mpesa-paymodal"><span class="font-12px">Send payment request</span><i class="ml-3 font-18 zmdi zmdi-phone-forwarded"></i></button>

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

            //alert(parentId);

            if(itemName === "" || isParent ==="" || uniqueAdvertCode ==="" ) {
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
                        }, 2000);
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
        // $(document).ready(function(){
        //     $("#selectbillable").change(function(){
        //         $(this).find("option:selected").each(function(){
        //             var optionValue = $(this).attr("value");
        //             if(optionValue){
        //                 $(".box").not("." + optionValue).hide();
        //                 $("." + optionValue).show();
        //             } else{
        //                 $(".box").hide();
        //             }
        //         });
        //     }).change();


        // });
    </script>
@endsection
