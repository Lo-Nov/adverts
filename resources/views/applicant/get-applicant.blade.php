@extends('layouts.app')

@section('content')
    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">List of Applicant's</h1>
							</span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Applicants</li>

                        </ol>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-right text-white"></div>
            </div>
        </header>

      <button class="float-right btn btn-outline-success d-none" onclick="myFunction()"> <i class="zmdi zmdi-account-add"></i> Add Adverts Plates </button>

        <div class="content__inner">
          <h4 class="card-title d-none">Additional of Adverts Plates</h4>

            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">List of Applicant's</h4>
                            <h6 class="card-subtitle">Bellow is a list of applicant's</h6>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-success float-right btn--icon-text" onclick="myFunction()"><i class="pe-7s-plus"></i> Add Adverts Plates</button>
                        </div>
                    </div>

                     <div id="myDIV" style="display: none">
                        <div class="w-100 pt-4">
                            <div class="col-md-12">
                            <form action="{{ route('post-apply') }}" method="post" class= "animated" enctype="multipart/form-data">
                                @csrf
                                <div class="row h-100 position-relative" >
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
                                                            {{-- <span class="d-none" id="loader14" >
                                                                <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                                                                </span> --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="alert alert-danger d-none" id="msg-danger"></p>
                        <p class="alert alert-success d-none" id="msg-success"></p>

                    </div>

                    <div class="table-responsive" id="res-table">
                        <table class="table table-hover table-striped" id="data-table">
                            <thead class="thead-default">
                            <tr>
                                <th>ID</th>
                                <th>names</th>
                                <th>applicantId</th>
                                <th>primaryPhone</th>
                                <th>secondaryPhone</th>
                                <th>email</th>
                                <th>town</th>
                                <th>dateCreated</th>
                            </tr>
                            </thead>
                            <tbody class="table-striped">
                            @foreach ($getApplicants->data as $key=>$item)
                                <tr class="gradeX">
                                    <td>{{ $item->id }} </td>
                                    <td>{{ $item->names }} </td>
                                    <td>{{ $item->applicantId }}</td>
                                    <td>{{ $item->primaryPhone }}</td>
                                    <td>{{ $item->secondaryPhone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->town }}</td>
                                    <td>{{ $item->dateCreated }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            // code to read selected table row cell data (values).
            $("#data-table").on('click','.btnSelect',function(){
                // alert("clicked");
                // get the current row
                var currentRow=$(this).closest("tr");

                var col1=$(this).parent().siblings().eq(0).text(); // get current row 1st TD value
                var col2=$(this).parent().siblings().eq(2).text();// get current row 2nd TD
                var id_num=$(this).parent().siblings().eq(1).text();
                var col3=$(this).parent().siblings().eq(3).text(); // get current row 3rd TD

                var results=$(this).parent().siblings('.test-results').text();
                var the_lab=$(this).parent().siblings('.the-lab').text();
                var lab_val=0;


                //alert(col1);

                $("#get-id textarea").val(results);
                $("#get-id #labId").val(lab_val);


                $('#get-id .modal-body .the-id0').val(col1);
                $('#get-id .modal-body .the-id1').val(col2);
                $('#get-id .modal-body .the-id2').val(col3);

                $('#testTittle').html('<h4 class"mb-0"><strong> Suggested Date: '+col2+'</strong><hr></h4><span class="thin">Confirm the booking date to corporates.</span><p><strong>Business  Number:'+id_num+'</strong></p>');


            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            $.ajax({

                url: "<?php  echo url('get-inspection') ?>" ,
                type: "post",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {},

                success:function(data){

                    console.log(data.success.data);

                    $('#labId').append($('<option>', {
                        value: ' ',
                        text: '-- select lab Id --'
                    }));
                    $.each(data.success.data, function (i, item) {

                        $('#labId').append($('<option>', {
                            value: item.id,
                            text: item.clinicName
                        }));


                    });

                } ,
                error: function(data) {

                    console.log(data.success.message);

                }

            });

            // $.ajax({
            //     url: 'ajax_get_data.php',
            //     success: function(data){
            //
            //         .hapa;
            //     }
            // })
        });
    </script>

    <script type="text/javascript">
        //getting selected test name
        // var test_name=$('#testNam').val();
        $('.btn-add-applicant').click(function(e){
            e.preventDefault();

            var names = $('#names').val();
            var applicantId = $("#applicantId").val();
            var primaryPhone = $("#primaryPhone").val();
            var secondaryPhone = $("#secondaryPhone").val();
            var email = $("#email").val();
            var subCounty = $("#subCounty").val();
            var ward = $("#ward").val();
            var town = $("#town").val();
            var county = $("#county").val();
            var applicantType = $("#applicantType").val();

            if(email === "" || names ==="" || county === "" || town === "" || primaryPhone==="" ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "save-applicant" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {names:names, applicantId:applicantId, primaryPhone:primaryPhone, secondaryPhone:secondaryPhone,email:email, subCounty:subCounty,ward:ward,town:town,county:county,applicantType:applicantType},

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

                    //console.log(data.success.message);
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
        $('#subCounty').on('change', function(){
            var Id = $(this).val();

            alert(Id);

            $.ajax({
                url : "<?php echo url('get-demo') ?>",
                type : "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{Id:Id},

                success:function(res)
                {
                    console.log(res);

                    $('#ward').empty();
                    $('#ward').append($('<option>', {
                        value: ' ',
                        text: '-- select ward --'
                    }));
                    $.each(res.data.wards, function (i, item) {
                        $('#ward').append($('<option>', {
                            value: item.id,
                            text: item.ward
                        }));
                    });

                }
            });
        });
    </script>

    <script type="text/javascript">
           function myFunction() {
               var x = document.getElementById("myDIV");
               if (x.style.display === "none") {
                   x.style.display = "block";
               } else {
                   x.style.display = "none";
               }
           }
       </script>

@endsection
