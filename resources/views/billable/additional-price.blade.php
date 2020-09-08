@extends('layouts.app')
@section('content')
    <!-- modals -->
    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">Application</h1>
							</span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">New Application</li>

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

                            <div class="col-md-12">
                                <div class="bill-details h-100 bill-checkout">
                                    <div class="contact-header">
                                        <h4>Additional Price Per Unit  Details</h4>
                                        <hr>
                                    </div>

                                    <form class= "animated fade-in blue box" id="cform">
                                        <div class="row h-100 position-relative" >

                                            <div class="form-items w-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Unique Advert Code</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" value="{{ $code }}" id="uniqueAdvertCode" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Amount</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3"  id="amount" required placeholder="Enter amount">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Created By</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" value="{{ Session::get('auth_session')[0]['username'] }}" id="createdBy" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">

                                                            <span type="submit" class="btn btn-primary btn-addtional">
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
        $('.btn-addtional').click(function(e){
            e.preventDefault();
            //alert();

            var uniqueAdvertCode = $('#uniqueAdvertCode').val();
            var amount = $("#amount").val();
            var createdBy = $("#createdBy").val();

            if(uniqueAdvertCode === "" || createdBy ==="" ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "<?php echo url('additional-price')?>" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {uniqueAdvertCode:uniqueAdvertCode, amount:amount,  createdBy:createdBy},

                success:function(data){
                    $("#cform")[0].reset();

                    console.log(data.success.message);
                    $('#loader14').addClass('d-none');
                    $('#get-id').modal('hide');
                    //location.reload();

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
    <script type="text/javascript">

        $(document).ready(function ()
        {
            $('#parentId').on('change',function(){
                $('#loader4').removeClass('d-none');
                $('#categoryName').addClass('d-none');
                var parentId = $(this).val();
                if(parentId)
                {
                    $.ajax({
                        url : "<?php echo url('get-subcategory/')?>",
                        type : "GET",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:{parentId:parentId},

                        success:function(data)
                        {

                            //console.log(data.success.data);

                            $('#loader4').addClass('d-none');
                            $('#categoryName').removeClass('d-none');
                            $('#categoryName').empty();


                            $('#categoryName').append($('<option>', {
                                value: ' ',
                                text: '-- select subcategory --'
                            }));


                            $.each(data.success.data, function (i, item) {
                                $('#categoryName').append($('<option>', {
                                    value: item.Item.itemName,
                                    text: item.Item.itemName
                                }));
                            });

                        }
                    });
                }
                else
                {
                    $('#categoryName').empty();
                }
            });

        });
    </script>
    <script>
        function initMap() {
            var myLatlng = {lat: -25.363, lng: 131.044};

            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: myLatlng});

            // Create the initial InfoWindow.
            var infoWindow = new google.maps.InfoWindow(
                {content: 'Click the map to get Lat/Lng!', position: myLatlng});
            infoWindow.open(map);

            // Configure the click listener.
            map.addListener('click', function(mapsMouseEvent) {
                // Close the current InfoWindow.
                infoWindow.close();

                // Create a new InfoWindow.
                infoWindow = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
                infoWindow.setContent(mapsMouseEvent.latLng.toString());
                infoWindow.open(map);
            });
        }
    </script>
    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs5dwb2YsUgMkUDwcGx2AAlt7x9OtzQsI&callback=initMap">
    </script>

@endsection



