@extends('layouts.app')

@section('content')
    <section class="content">

        <div class="content__inner">
          <h4 class="card-title"> Assigned Ads on this Plate</h4>
            <div class="card">

                <div class="card-body">
                    <a  class="btn btn-info" href="{{  route('advert-plates') }}">Back</a>
                    <div class="col">
                        <p class="alert alert-danger d-none" id="msg-danger"></p>
                        <p class="alert alert-success d-none" id="msg-success"></p>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="table-responsive" id="res-table">
                            <table class="table table-hover" id="data-table">
                                <thead class="thead-default">
                                <tr>

                                    <th>Id</th>
                                    <th>plateNumber</th>
                                    <th>advertisementsCode</th>
                                    <th>dateCreated</th>
                                    <th>createdBy</th>
                                </tr>
                                </thead>
                                <tbody class="table-striped">
                                @foreach ($getPlateAssignment->data as $key=>$item)
                                    <tr class="gradeX">
                                        <td >{{ $item->id }} </td>
                                        <td >{{ $item->plateNumber }} </td>
                                        <td>{{ $item->advertisementsCode }} </td>
                                        <td>{{ $item->dateCreated }} </td>
                                        <td>{{ $item->createdBy }} </td>
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
                var id_num=$(this).parent().siblings().eq(6).text();
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

                $('#testTittle').html('<h4 class"mb-0"><strong> Advertisements Code: '+col2+'</strong><hr></h4><span class="thin"></span><p><strong><center> Update status for this application :</center></strong></p>');
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
        $('.btn-update-status').click(function(e){
            e.preventDefault();

            var  id = $('#id').val();
            var status = $("#status").val();

            if(id === "" || status === ""  ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "<?php echo url('update-status') ?>" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id:id, status:status},

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
