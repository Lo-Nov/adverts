@extends('layouts.app')

@section('content')
    <section class="content">
      <button class="float-right btn btn-outline-success" onclick="myFunction()"> <i class="zmdi zmdi-account-add"></i> Add Status </button>

        <div class="content__inner">
          <h4 class="card-title">Applications</h4>
            <div class="card">

                <div class="card-body">

                     <div id="myDIV" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                          <form id="cform">
                              <div class="row h-100 position-relative" >
                                  <div class="form-items w-100">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      <strong>Status</strong>  <strong class="text-danger">*</strong>
                                                  </label>
                                                  <input type="text" class="form-control  pl-3" placeholder="Enter status" id="status" name="status" required>
                                              </div>
                                          </div>

                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      <strong>Order</strong>  <strong class="text-danger">*</strong>
                                                  </label>
                                                  <input type="text" class="form-control  pl-3" placeholder="Enter order" id="order" name="order" required>
                                              </div>
                                          </div>


                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      <strong>applicationFee</strong>  <strong class="text-danger">*</strong>
                                                  </label>
                                                  <input type="text" class="form-control  pl-3" placeholder="Enter applicationFee" id="applicationFee" name="applicationFee" required>
                                              </div>
                                          </div>

                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      <strong>description</strong>  <strong class="text-danger">*</strong>
                                                  </label>
                                                  <textarea type="text" class="form-control  pl-3" placeholder="Enter names" id="description" name="description" required rows="5"></textarea>
                                              </div>
                                          </div>

                                          <div class="col-md-4">

                                          </div>
                                          <div class="col-md-4">

                                          </div>

                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <span type="submit" class="btn btn-success btn-add-status">
                                                  <i class="zmdi zmdi-save"></i> Save Status</span>
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
                                    <th>ID</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>description</th>
                                    <th>default</th>
                                    <th>generateBill</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="table-striped">
                                @foreach ($getApplicantsStatus->data as $key=>$item)
                                    <tr class="gradeX">
                                        <td>{{ $item->id }} </td>
                                        <td>{{ $item->order }} </td>
                                        <td>{{ $item->status }} </td>
                                        <td>{{ $item->description }} </td>
                                        <td>{{ $item->default }}</td>
                                        <td>{{ $item->generateBill }}</td>
                                        <td>
                                            <button class="btn btn-outline-success btnSelect" data-toggle="modal" data-target="#get-id"> <i class="zmdi zmdi-refresh"></i> Update</button>
                                            <button class="btn btn-outline-danger btnSelect1" data-toggle="modal" data-target="#get-id1"> <i class="zmdi zmdi-trash"></i> Delete</button>
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


                    <form id="cform1">
                        <div class="modal-body pt-3">
                            <div class="form-row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <label> ID<strong class="text-danger">*</strong></label>
                                            <div class="">
                                                <input type="text" id="id" name="id" class="form-control the-id0" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Application Status<strong class="text-danger">*</strong></label>
                                            <select  id="statu" name="status" class="first-required form-control  ">
                                                <option >-- Application status --</option>
                                                @foreach ($getApplicantsStatus->data as $item)
                                                    <option value="{{ $item->status }}">{{ $item->status }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <label>order<strong class="text-danger">*</strong></label>
                                            <input type="text" id="orde" name="order" class="form-control the-id2" >
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Application Fee<strong class="text-danger">*</strong></label>
                                            <input type="text" id="applicationFe" name="applicationFee" class="form-control the-id3" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <label>description <strong class="text-danger">*</strong></label>
                                            <input type="text" id="descriptio" name="description" class="form-control the-id4" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" class="btn btn-secondary" data-dismiss="modal"> <i class="zmdi zmdi-close-circle"></i> Close</button>
                            <span type="submit" class="btn btn-success btn-change-status">
                                <i class="zmdi zmdi-save"></i> Save changes</span>
                                <span class="d-none" id="loader15" >
                                <img src="{{ asset('img/loader/loader.gif') }}" style="size: 20px" />
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="get-id1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="testTittle"><strong>Are you sure you want to delete???</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <form id="cform2">
                            <div class="modal-body pt-3">
                                <div class="form-row">
                                    <div class="row">
                                        <div class="col-md-12 d-none">
                                            <div class="">
                                                <label> ID<strong class="text-danger">*</strong></label>
                                                <div class="">
                                                    <input type="text" id="id1" name="id" class="form-control the-id0" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <span type="submit" class="btn btn-danger btn-delete-status">
                                    <i class="zmdi zmdi-save"></i> Delete changes</span>
                                    <span class="d-none" id="loader16" >
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

                var col0=$(this).parent().siblings().eq(0).text(); // get current row 1st TD value
                var col1=$(this).parent().siblings().eq(1).text();// get current row 2nd TD
                var col2=$(this).parent().siblings().eq(2).text();
                var col3=$(this).parent().siblings().eq(3).text(); // get current row 3rd TD
                var col4=$(this).parent().siblings().eq(4).text(); // get current row 3rd TD

                var results=$(this).parent().siblings('.test-results').text();
                var the_lab=$(this).parent().siblings('.the-lab').text();
                var lab_val=0;


                //alert(col1);

                $("#get-id textarea").val(results);
                $("#get-id #labId").val(lab_val);


                $('#get-id .modal-body .the-id0').val(col0);
                $('#get-id .modal-body .the-id1').val(col2);
                $('#get-id .modal-body .the-id2').val(col1);
                $('#get-id .modal-body .the-id4').val(col3);

                $('#testTittle').html('<h4 class"mb-0"><strong> Advertisements Code: '+col2+'</strong><hr></h4><span class="thin"></span><p><strong><center> Update status for this application :</center></strong></p>');
            });
        });
    </script>
       <script type="text/javascript">
        $(document).ready(function(){

            // code to read selected table row cell data (values).
            $("#data-table").on('click','.btnSelect1',function(){
                // alert("clicked");
                // get the current row
                var currentRow=$(this).closest("tr");

                var col0=$(this).parent().siblings().eq(0).text(); // get current row 1st TD value
                var col1=$(this).parent().siblings().eq(1).text();// get current row 2nd TD
                var col2=$(this).parent().siblings().eq(2).text();
                var col3=$(this).parent().siblings().eq(3).text(); // get current row 3rd TD
                var col4=$(this).parent().siblings().eq(4).text(); // get current row 3rd TD

                var results=$(this).parent().siblings('.test-results').text();
                var the_lab=$(this).parent().siblings('.the-lab').text();
                var lab_val=0;


                //alert(col1);

                $("#get-id textarea").val(results);
                $("#get-id #labId").val(lab_val);


                $('#get-id1 .modal-body .the-id0').val(col0);

                $('#testTittle').html('<h4 class"mb-0"><strong> Advertisements Code: '+col2+'</strong><hr></h4><span class="thin"></span><p><strong><center> Update status for this application :</center></strong></p>');
            });
        });
    </script>


    <script type="text/javascript">
        //getting selected test name
        // var test_name=$('#testNam').val();
        $('.btn-add-status').click(function(e){
            e.preventDefault();

            var  status = $('#status').val();
            var order = $("#order").val();
            var applicationFee = $("#applicationFee").val();
            var description = $("#description").val();


            if(status === "" || order === ""  ) {
                swal({
                    title: "Required fields",
                    text:"Please Fill All Required Field",
                    icon: "danger",
                });
                return false;
            }

            $('#loader14').removeClass('d-none');
            $.ajax({

                url: "<?php echo url('add-status') ?>" ,
                type: "POST",
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {status:status, order:order,applicationFee:applicationFee,description:description},

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
            //getting selected test name
            // var test_name=$('#testNam').val();
            $('.btn-change-status').click(function(e){
                e.preventDefault();

                var  id = $('#id').val();
                var  status = $('#statu').val();
                var order = $("#orde").val();
                var applicationFee = $("#applicationFe").val();
                var description = $("#descriptio").val();

                alert(id);
                alert(status);
                alert(applicationFee);
                alert(order);
                alert(description);


                if(status === "" || order === ""  || applicationFee ==="") {
                    swal({
                        title: "Required fields",
                        text:"Please Fill All Required Field",
                        icon: "danger",
                    });
                    return false;
                }

                $('#loader15').removeClass('d-none');
                $.ajax({

                    url: "<?php echo url('change-status') ?>" ,
                    type: "POST",
                    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {id:id,status:status, order:order,applicationFee:applicationFee,description:description},

                    success:function(data){
                        $("#cform1")[0].reset();

                        console.log(data.success.message);
                        $('#loader15').addClass('d-none');
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
                        $('#loader15').addClass('d-none');
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

            $('.btn-delete-status').click(function(e){
                e.preventDefault();

                var  id = $('#id1').val();

                // alert(id);

                if(id === "" ) {
                    swal({
                        title: "Required fields",
                        text:"Please Fill All Required Field",
                        icon: "danger",
                    });
                    return false;
                }

                $('#loader16').removeClass('d-none');
                $.ajax({

                    url: "<?php echo url('delete-status') ?>" ,
                    type: "POST",
                    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {id:id},

                    success:function(data){
                        $("#cform1")[0].reset();

                        console.log(data.success.message);
                        $('#loader16').addClass('d-none');
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
                        $('#loader16').addClass('d-none');
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
