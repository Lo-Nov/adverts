@extends('layouts.app')

@section('content')
    <section class="content">
      <button class="float-right btn btn-outline-success d-none" onclick="myFunction()"> <i class="zmdi zmdi-account-add"></i> Applicantion Portal </button>

        <div class="content__inner">
          <h4 class="card-title">Running Applications</h4>
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
                                                      <strong>primaryPhone</strong>  <strong class="text-danger">*</strong>
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
                                                          <option >-- Sub sub County Name --</option>
                                                          {{-- @foreach ($subCounty->data->subCounty as $item)
                                                              <option value="{{ $item->id }}">{{ $item->subCounty }} </option>
                                                          @endforeach --}}
                                                      </select>
                                              </div>
                                          </div>

                                          <div class="col-md-4">
                                              <div class="form-group">
                                                      <label>
                                                          <strong>ward</strong>  <strong class="text-danger">*</strong>
                                                      </label>
                                                      <select  id="ward" name="ward" class="first-required form-control ">

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
                                                  <select class="selectpicker form-control show-tick" id="applicantType" name="applicantType" data-live-search="true">
                                                      <option data-tokens="select">-- Select applicant type--</option>
                                                      {{-- @foreach($getApplicantTypes->data as $item)
                                                          <option value="{{ $item->id }}">{{ $item->applicantType }}</option>
                                                      @endforeach --}}
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-4">

                                          </div>
                                          <div class="col-md-4">

                                          </div>

                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <span type="submit" class="btn btn-success btn-add-applicant">
                                                  <i class="zmdi zmdi-save"></i> Save Applicant</span>
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
                            <table class="table table-hover table-striped table-sm" id="data-table">
                                <thead class="">
                                <tr>
                                    <th class="d-none">Id</th>
                                    <th class="d-none">artwork</th>
                                    <th>Advertisements Code</th>
                                    <th>unique Advert Code</th>
                                    <th>Category Name</th>
                                    <th class="d-none">latLng</th>
                                    <th>Applicant ID</th>
                                    <th>Dimensions</th>
                                    <th>Duration</th>
                                    <th>status</th>
                                    <th>Update Status</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                @foreach ($getApplications->data as $key=>$item)
                                    <tr class="gradeX">
                                        <td class="d-none">{{ $item->id }} </td>
                                        <td class="d-none">{{ $item->artwork }} </td>
                                        <td>{{ $item->advertisementsCode }} </td>
                                        <td>{{ $item->uniqueAdvertCode }} </td>
                                        <td>{{ $item->categoryName }}</td>
                                        <td class="d-none">{{ $item->latLng }}</td>
                                        <td>{{ $item->applicantID }}</td>
                                        <td>{{ $item->dimensions }} {{  $item->dimensionsUnits }}</td>
                                        <td>{{ $item->duration }} {{  $item->durationUnit }}</td>
                                        @if($item->status == 1)
                                        <td style="color:rgba(0, 9, 128, 0.644)"> New</td>
                                        @endif
                                        <td>
                                            <button class="btn btn-primary btnSelect btn-sm" data-toggle="modal" data-target="#get-id"> <i class="zmdi zmdi-refresh"></i> Update</button>
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


                    <form id="cform">
                        <div class="modal-body pt-3">
                            <div class="card">
                                <div class="card-img-top" src="demo/img/demo-poster.png" alt="The artwork">
                            </div>
                            <div class="col-12 p-4 bg-info-yellow text-black mb-4">
                                <iframe width="100" height="100" :src="'https://biller.revenuesure.co.ke/adverts/uploads/'+the-id0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="form-row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Applicant Status <strong class="text-danger">*</strong></label>
                                            <div class="">
                                                <input type="text" id="id" name="id" class="form-control the-id0" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <label>Application Status<strong class="text-danger">*</strong></label>
                                            <select  id="status" name="status" class="first-required form-control ">
                                                <option >-- Application status --</option>
                                                @foreach ($getApplicantsStatus->data as $item)
                                                    <option value="{{ $item->id }}">{{ $item->status }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" class="btn btn-secondary" data-dismiss="modal"> <i class="zmdi zmdi-close-circle"></i> Close</button>
                            <span type="submit" class="btn btn-success btn-update-status">
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
