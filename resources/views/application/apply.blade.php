@extends('layouts.app')
@section('content')
    <!-- modals -->
    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">New Application</h1>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        <strong> Choose your Physical Address  <code>e.g Free Area Nakuru</code>  </strong>  <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control  pl-3" placeholder="Enter your location and press Enter" id="address" onchange="myFunction()">
                                        <span class="d-none" id="loader14" >
                                        <img src="{{ asset('img/loader/loader.gif') }}" style="size: 10px" />
                                        </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="contact-header">
                                            <h4>Application details</h4>
                                            <hr>
                                            <br><br>
                                        </div>
                                    </div>
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                        </div>
                                    @endif


                                    <form action="{{ route('post-apply') }}" method="post" class= "animated" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12 h-100 position-relative" >
                                            <div class="form-items w-100">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Artwork</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="file" id="artwork"  name="artwork" class="form-group" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Advert Code</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" value="10-8484"  placeholder="Enter uniqueAdvertCode" id="uniqueAdvertCode" name="uniqueAdvertCode" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Category Name</strong>  <strong class="text-danger">*</strong>
                                                                </label>
                                                                <select class="selectpicker form-control show-tick" id="parentId" name="parentId" data-live-search="true">
                                                                    <option data-tokens="select">-- Select Category Name--</option>
                                                                        @foreach($getCategories->data as $item)
                                                                            <option value="{{ $item->parentId }}">{{ $item->itemName }}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Sub Category Name</strong>  <strong class="text-danger">*</strong>
                                                                </label>
                                                                <select  id="categoryName" name="categoryName" class="first-required form-control ">
                                                                    <option>-- Sub Category Name --</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Physical Address</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select  id="physicalAddress" name="physicalAddress" class="first-required form-control">

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Latitude / Longitude</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <div id="map"></div>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter customer's name" name="latLng" id="latLng" readonly required >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Applicant </strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="applicantID" name="applicantID" data-live-search="true">
                                                                <option data-tokens="select">-- Select applicantID--</option>
                                                                @foreach($getApplicants->data as $item)
                                                                    <option value="{{ $item->applicantId }}">{{ $item->names }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3 pr-0">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Dimensions</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter dimention" id="dimensions" name="dimensions" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 pl-0">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Dimensions Units</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="dimensionsUnits" name="dimensionsUnits" data-live-search="true">
                                                                            <option data-tokens="select">-- Select dimensions units--</option>
                                                                            <option>Meters</option>
                                                                            <option>Centimeters</option>
                                                                            <option>Milimeters</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pr-0">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Duration</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter duration" id="duration" name="duration" required>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-3 pl-0">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Duration Unit</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="durationUnit" name="durationUnit" data-live-search="true">
                                                                <option data-tokens="select">-- Select duration unit--</option>
                                                                @foreach($getDuration->data as $item)
                                                                    <option value="{{ $item->duration }}">{{ $item->duration }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Sub County</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Sub County" name="subCountyId" id="subCountyId" readonly required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Ward / Town</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Ward/Town" name="wardID" readonly id="wardID" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success">
                                                            <i class="zmdi zmdi-save"></i> Save Application</button>
{{--                                                            <span class="d-none" id="loader14" >--}}
{{--                                                            <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />--}}
{{--                                                            </span>--}}
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
        function myFunction() {
            $("#physicalAddress").val("");
            var physicalAddress = document.getElementById("address").value;
            //alert(physicalAddress);
            $('#loader14').removeClass('d-none');
            // if(physicalAddress.length >5){
                $.ajax({
                    url: "<?php echo url('get-address')?>" ,
                    type: "POST",
                    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {physicalAddress:physicalAddress},
                    success:function(data){
                        console.log(data.success.data);
                        $('#loader14').addClass('d-none');

                        $('#physicalAddress').append($('<option>', {
                            value: ' ',
                            text: '-- select physicalAddress --'
                        }));

                        $.each(data.success.data, function (i, item) {
                            $('#physicalAddress').append($('<option>', {
                                value: i,
                                text: item.address
                            }));
                        });
                    }
                });


        }
    </script>

    <script>
        $('#physicalAddress').on('change', function(){
           var locationID = $(this).val();

           console.log(locationID);

            $.ajax({
                url : "<?php echo url('get-location/')?>",
                type : "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{locationID:locationID},

                success:function(data)
                {

                    console.log(data);

                    $('input[name=subCountyId]').val(data.subCounty);
                    $('input[name=wardID]').val(data.Town);
                    $('input[name=latLng]').val(data.latLng)

                    // $('#ward').addClass('selectpicker');

                }
            });
        });
    </script>


    <script type="text/javascript">
        $('.btn-apply').click(function(e){
            e.preventDefault();
//alert();

            var uniqueAdvertCode = $('#uniqueAdvertCode').val();
            var categoryName = $("#categoryName").val();
            var physicalAddress = $("#physicalAddress").val();
            var latLng = $("#latLng").val();
            var applicantID = $("#applicantID").val();
            var artwork = $("#artwork").val();
            var duration = $("#duration").val();
            var durationUnit = $("#durationUnit").val();
            var dimensions = $("#dimensions").val();
            var dimensionsUnits = $("#dimensionsUnits").val();
            var subCountyId = $("#subCountyId").val();
            var wardID = $("#wardID").val();

            alert(artwork);
            if(uniqueAdvertCode === "" || dimensionsUnits ==="" ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "<?php echo url('apply')?>" ,
                type: "POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'multipart/form-data'
                },
                data: {uniqueAdvertCode:uniqueAdvertCode, categoryName:categoryName, physicalAddress:physicalAddress, latLng:latLng,applicantID:applicantID,
                    dimensions:dimensions,artwork:artwork,duration:duration,durationUnit:durationUnit, dimensionsUnits:dimensionsUnits, subCountyId:subCountyId, wardID:wardID},

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
