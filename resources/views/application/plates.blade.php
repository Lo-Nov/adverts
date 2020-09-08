@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="content__inner">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="card-title">Booking confirmation portal</h4>
                        </div>
                        <div class="col-md-8">
                            <form action="" method="post" novalidate>
                                @csrf
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInput">Name</label>
                                        <input type="date" class="form-control hidden-md-up" placeholder="Pick Date from" required>
                                        <input type="text" name="from" class="form-control date-picker hidden-sm-down" placeholder="Pick Date from" required>
                                    </div>
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">To</div>
                                            </div>
                                            <input type="date" class="form-control hidden-md-up" placeholder="Pick Date to" required>
                                            <input type="text" name="to" class="form-control date-picker hidden-sm-down" placeholder="Pick Date To" required>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
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
                                        <button type="submit" class="btn btn-outline-success mb-2">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <p class="alert alert-danger d-none" id="msg-danger"></p>
                        <p class="alert alert-success d-none" id="msg-success"></p>

                    </div>
                </div>
                <div class="table-responsive" id="res-table">
                    <table class="table table-hover" id="data-table">
                        <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>plateNumber</th>
                            <th>latLng</th>
                            <th>street</th>
                        </tr>
                        </thead>
                        <tbody class="table-striped">
                        @foreach ($getAdvertsPlates->data->Items as $key=>$item)
                            <tr class="gradeX">
                                <td>{{ $item->id }} </td>
                                <td>{{ $item->plateNumber }} </td>
                                <td>{{ $item->latLng }}</td>
                                <td>{{ $item->street }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
                                    <div class="col-md-12 d-none">
                                        <div class="">
                                            <label>ID <strong class="text-danger">*</strong></label>
                                            <div class="">
                                                <input type="text" id="id" name="id" class="form-control the-id0" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Testing Date <strong class="text-danger">*</strong></label>
                                            <div class="select">
                                                <input type="date"  id="testingDate" name="testingDate" class="form-control">
                                                <i class="form-group__bar d-none"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Select Status <strong class="text-danger">*</strong></label>
                                            <div class="select">
                                                <select class="form-control" id="status">
                                                    <option>--Select Status--</option>
{{--                                                    @foreach($getInspectionStatus->data as $key => $value)--}}

{{--                                                        <option value="{{  $value->id }}">{{  $value->status }}</option>--}}
{{--                                                    @endforeach--}}
                                                    </select>
                                                        <i class="form-group__bar d-none"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Tester <strong class="text-danger">*</strong></label>
                                            <div class="select">
                                                <select class="form-control" id="testerId">
                                                    <option>--Select Status--</option>
{{--                                                    @foreach($getUsers->data as $key => $value)--}}
{{--                                                        <option value="{{  $value->id }}">{{  $value->name }}</option>--}}
{{--                                                    @endforeach--}}
                                                    </select>
                                                        <i class="form-group__bar d-none"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="">
                                            <label>Tester Comments <strong class="text-danger">*</strong></label>
                                            <textarea class="form-control alert alert-inverse" rows="5" id="testerComments" name="testerComments"
                                                      placeholder="Tester comment" onclick="this.focus();this.select()"></textarea>
                                            <i class="form-group__bar d-none"></i>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="">
                                            <label>confirmed By<strong class="text-danger">*</strong></label>
                                            <div class="select">
                                                <input type="text"  id="confirmedBy" name="confirmedBy" value="{{ Session::get('resource')[0]['user_full_name'] }}" readonly class="form-control">
                                                <i class="form-group__bar d-none"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" class="btn btn-secondary" data-dismiss="modal"> <i class="zmdi zmdi-close-circle"></i> Close</button>

                            <span type="submit" class="btn btn-success btn-confirm-booking">
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
        $('.btn-confirm-booking').click(function(e){
            e.preventDefault();

            var id = $('#id').val();
            var testingDate = $("#testingDate").val();
            var testerComments = $("#testerComments").val();
            var confirmedBy = $("#confirmedBy").val();
            var status = $("#status").val();
            var testerId = $("#testerId").val();





            if(testingDate === "" || confirmedBy ==="" || testerComments === "" || status === "" || testerId==="" ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }



            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "save-booking-confirmation" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id:id, testingDate:testingDate, testerComments:testerComments, confirmedBy:confirmedBy,status:status, testerId:testerId},

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


@endsection

