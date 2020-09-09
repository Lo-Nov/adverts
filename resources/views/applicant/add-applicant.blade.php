@extends('layouts.app')
@section('content')
    <!-- modals -->
    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">New Applicant</h1>
							</span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Settings</a></li>
                            <li class="breadcrumb-item active">New Applicant</li>

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
                                <div class=" h-100 ">
                                    <div class="contact-header">
                                        <h4>Applicant details</h4>
                                        <hr>
                                        <br><br>
                                    </div>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <p class="alert alert-danger mt-3">{{$errors->first()}}</p>
                                    @endif
                                    <form action="{{ route('post-apply') }}" method="post" class= "animated" enctype="multipart/form-data">
                                        @csrf
                                        <div class=" h-100 position-relative" >
                                            <div class="form-items w-100">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Names</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter names" id="names" name="names" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>applicantId</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter names" id="applicantId" name="applicantId" required>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>applicantId</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter names" id="primaryPhone" name="primaryPhone" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>secondaryPhone</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter names" id="secondaryPhone" name="secondaryPhone" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>email</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="email" class="form-control  pl-3" placeholder="Enter names" id="email" name="email" required>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                                <label>
                                                                    <strong>subCounty</strong>  <strong class="text-danger">*</strong>
                                                                </label>
                                                                <select  id="subCounty" name="subCounty" class="first-required form-control ">
                                                                    <option >-- Sub Category Name --</option>
                                                                    <option>Naivasha </option>
                                                                </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                                <label>
                                                                    <strong>ward</strong>  <strong class="text-danger">*</strong>
                                                                </label>
                                                                <select  id="ward" name="ward" class="first-required form-control ">
                                                                    <option >-- select ward --</option>
                                                                    <option>Olkaria </option>
                                                                    <option>Hell's gate </option>
                                                                </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>town</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter names" id="town" name="town" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>county</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <input type="text" class="form-control  pl-3" placeholder="Enter names" id="county" name="county" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <strong>Applicant Type</strong>  <strong class="text-danger">*</strong>
                                                            </label>
                                                            <select class="selectpicker form-control show-tick" id="durationUnit" name="durationUnit" data-live-search="true">
                                                                <option data-tokens="select">-- Select applicant type--</option>
                                                                @foreach($getApplicantTypes->data as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->applicantType }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success">
                                                            <i class="zmdi zmdi-save"></i> Save Applicant</button>
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
