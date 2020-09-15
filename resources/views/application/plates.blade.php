@extends('layouts.app')

@section('content')
    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                   <span class="rev-title-container">
                    <h1 class="text-capitalize stream_name m-0">Addvert Plates</h1>
                   </span>
                   <div class="">
                       <ol class="breadcrumb border-0">
                           <li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
                           <li class="breadcrumb-item"><a href="#">Application</a></li>
                           <li class="breadcrumb-item active">Plates</li>

                       </ol>

                   </div>
               </div>
               <div class="col-md-6 col-sm-12 text-right text-white"></div>
           </div>
       </header>
        <div class="content__inner">


            <div class="card">
                <div class="card-body">
                     <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Existing Advert Plates</h4>
                            <h6 class="card-subtitle">Bellow is a list of the current advert plates</h6>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-success float-right btn--icon-text" onclick="myFunction()"><i class="pe-7s-plus"></i> Advertisement Plate</button>
                        </div>
                    </div>

                     <div id="myDIV" style="display: none">
                        <div class="row">

                            <div class="col-md-12">
                                <form action="" method="post" novalidate>
                                    @csrf
                                    <div class="form-row  mt-3">
                                        <div class="col-auto">

                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">To</div>
                                            </div>
                                            <input type="date" class="form-control hidden-md-up" placeholder="Pick Date from" required>
                                            <input type="text" name="from" class="form-control date-picker hidden-sm-down" placeholder="Pick Date from" required>
                                        </div>
                                        </div>
                                        <div class="col-auto">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">To</div>
                                                </div>
                                                <input type="date" class="form-control hidden-md-up" placeholder="Pick Date to" required>
                                                <input type="text" name="to" class="form-control date-picker hidden-sm-down" placeholder="Pick Date To" required>
                                            </div>
                                        </div>
                                        <div class="col-auto">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Status</div>
                                                </div>
                                                <select type="text" name="status" class="form-control" id="inlineFormInputGroup" required>
                                                    <option value="">--Select Status--</option>
                                                    <option value="COMPLETED">COMPLETED</option>
                                                    <option value="CONFIRMED">CONFIRMED</option>
                                                    <option value="PENDING">PENDING</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-primary btn--icon-text " type="submit"><i class="zmdi zmdi-search"></i>Seacrh</button>

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

                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="table-responsive" id="res-table">
                                <table class="table table-hover mt-3 table-striped" id="data-table">
                                    <thead class="thead-default">
                                    <tr>
                                        <th>ID</th>
                                        <th>plateNumber</th>
                                        <th>latLng</th>
                                        <th>street</th>
                                        <th>createdBy</th>
                                        <th>status</th>
                                        <th>Date Created</th>
                                        <th>Ad No.</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-striped">
                                    @foreach ($getAdvertsPlates->data->Items as $key=>$item)
                                        <tr class="gradeX">
                                            <td>{{ $item->id }} </td>
                                            <td>
                                                <a href="{{ route('get-assigned', $item->plateNumber) }}" class="" role="button">{{ $item->plateNumber }}</a>
                                            </td>
                                            <td>{{ $item->latLng }}</td>
                                            <td>{{ $item->street }}</td>
                                            <td>{{ $item->createdBy }}</td>
                                            @if($item->status === "1")
                                                <td>Empty</td>
                                            @elseif ($item->status === "2")
                                                 <td>Occupied</td>
                                            @endif
                                            <td>{{ $item->dateCreated }}</td>
                                            <td>{{ $item->noOfAdverts }}</td>

                                            <td>
                                                <button class="btn btn-outline-info btnSelect" data-toggle="modal" data-target="#get-id"> <i class="zmdi zmdi-refresh"></i> Asign</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="get-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="testTittle"><strong>Make changes to test</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form id="cform">
                        <div class="modal-body pt-3">
                            <div class="form-row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Plate Number <strong class="text-danger">*</strong></label>
                                            <div class="">
                                                <input type="text" id="plateNumber" name="plateNumber" class="form-control the-id1" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Advertisements Code <strong class="text-danger">*</strong></label>
                                            <div class="">
                                                <input type="text" id="advertisementsCode" name="advertisementsCode" class="form-control " >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Created By<strong class="text-danger">*</strong></label>
                                            <div class="select">
                                                <input type="text"  id="createdBy" name="createdBy" value="{{ Session::get('auth_session')[0]['user_full_name'] }}" readonly class="form-control">
                                                <i class="form-group__bar d-none"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" class="btn btn-secondary" data-dismiss="modal"> <i class="zmdi zmdi-close-circle"></i> Close</button>

                            <span type="submit" class="btn btn-success btn-plate-asign">
                        <i class="zmdi zmdi-save"></i> Save changes</span>
                            <span class="d-none" id="loader14" >
                            <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                        </span>
                        </div>
                    </form>


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
                $('#get-id .modal-body .the-id1').val(id_num);
                $('#get-id .modal-body .the-id2').val(col3);

                $('#testTittle').html('<h4 class"mb-0"><strong> Plate Number: '+id_num+'</strong><hr></h4><span class="thin">Confirm the location.</span><p><strong>Longitude/Latitude:'  +col2+  '</strong></p>');


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
        $('.btn-plate-asign').click(function(e){
            e.preventDefault();

            var plateNumber = $('#plateNumber').val();
            var advertisementsCode = $("#advertisementsCode").val();
            var createdBy = $("#createdBy").val();





            if(createdBy === "" || advertisementsCode ==="" || plateNumber === ""  ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }



            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "save-plate-assignment" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {plateNumber:plateNumber, advertisementsCode:advertisementsCode, createdBy:createdBy},

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
    <script>
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
