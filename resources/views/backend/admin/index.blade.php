@extends('backend.master')
@section('main')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <!-- Start Widget -->
            <div class="row">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Datatable</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Moltran</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Datatable</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6" @style(['text-align: right'])>
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Add Hotel</button>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="col-md-6">
                                    <h3 class="panel-title">Datatable</h3>
                                </div>
                                <div class="col-md-6" @style(['text-align: right'])>
            
                                </div>
                            </div>
            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                        <table class="table table-striped table-bordered data_tbl unit__Table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>ROLE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                {{-- Add Modal --}}
                <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myLargeModalLabel">Add Hotel</h4>
                            </div>
                            <div class="modal-body">
                                <form class="" action="{{ route('hotel.store') }}" id="add_hotel_form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Hotel Name</label>
                                                <input type="text" class="form-control" name="name" id="field-2" placeholder="Hotel Name">
                                                <span class="error error_name text-danger"></span>
                                            </div>
                                        </div>
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected disabled>Choose Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">De-Active</option>
                                                </select>
                                                <span class="error error_status text-danger"></span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="office_id" value="{{ Auth()->user()->office_id }}">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="description" class="control-label">Description </label>
                                                <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                                                <span class="error errordescription text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Seat</label>
                                                <input type="number" required class="form-control" name="seat" id="seat"  placeholder="Seat">
                                                <span class="error error_seat text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Price / Night</label>
                                                <input type="number" required class="form-control" name="price" id="price"  placeholder="Price">
                                                <span class="error error_price text-danger"></span>
                                            </div>
                                        </div>
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="capacity" class="control-label">Capacity</label>
                                                <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Capacity">
                                                <span class="error error_capacity text-danger"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                                <span class="error error_image text-danger"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light submit_button">Add Hotel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                {{-- Edit Modal --}}
                <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg" id="edit-content"></div>
                </div>
                <form id="deleted_form" action="" method="post">
                    @method('DELETE')
                    @csrf
                </form>
            </div> 
            <!-- End row-->
        </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        2015 © Moltran.
    </footer>

</div>
@endsection

@push('js')

   
    <script>
        $(document).ready( function() {

            /**
             * Yajra DataTable for show all data
             *
             * */
            var unit__Table = $('.data_tbl').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.list') }}",
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'role', name: 'role'},
                    {data: 'action', name: 'action'},

                ]
            });


            /**
             *  Add Center Form
             **/

            $(document).on('submit', '#add_hotel_form', function(e) {
                e.preventDefault();
                // $('.loading_button').show();
                var url = $(this).attr('action');

                $('.submit_button').prop('type', 'button');

                $.ajax({
                    url: url,
                    type: 'post',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {

                        $('#add_hotel_form')[0].reset();
                        $('#myModal').modal('hide');

                        $('.submit_button').prop('type', 'submit');

                        unit__Table.ajax.reload();
                        toastr.success(data)

                    },
                    error: function(err) {
                        let error = err.responseJSON;

                        $.each(error.errors, function (key, error){

                            $('.submit_button').prop('type', 'submit');
                            $('.error_' + key + '').html(error[0]);
                        });
                    }
                });
            });


            /**
             * Delete Form Open
             * */

            $(document).on('click', '#delete_btn', function(e) {
                e.preventDefault();

                var url = $(this).attr('href');

                $('#deleted_form').attr('action', url);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleted_form').submit();
                }
                })

            })

            /**
             * Delete Form Submit
             * */
            $(document).on('submit', '#deleted_form', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');
                var request = $(this).serialize();
                $.ajax({
                    url: url,
                    type: 'get',
                    success: function(data) {
                        toastr.error(data)
                        unit__Table.ajax.reload();
                    },
                    error: function(err) {
                        toastr.error(err.responseJSON)
                        unit__Table.ajax.reload();
                    }
                });
            });

            /**
             * Edit Form Open
             * */
            $(document).on('click', '#edit_btn', function(e) {
                e.preventDefault();

                var url = $(this).attr('href');

                $.ajax({
                    url: url,
                    type: 'get',
                    success: function(data) {

                        // $('#edit-content').empty();
                        $('#edit-content').html(data);
                        $('#editModal').modal('show');
                    },
                    error: function(err) {
                        $('.data_preloader').hide();
                        if (err.status == 0) {
                            toastr.error('Net Connetion Error. Reload This Page.');
                        } else if (err.status == 500) {
                            toastr.error('Server Error, Please contact to the support team.');
                        }
                    }
                });
            });

          

            $(document).on('click', '#active_btn', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                $.ajax({
                    url: url,
                    type: 'post',
                    success: function(data) {
                        toastr.success(data)
                        unit__Table.ajax.reload();

                    },
                    error: function(err) {
                        toastr.error(err.responseJSON)
                        unit__Table.ajax.reload();
                    }
                });
            });


          
            $(document).on('click', '#deactive_btn', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                $.ajax({
                    url: url,
                    type: 'post',
                    success: function(data) {
                        toastr.error(data)
                        unit__Table.ajax.reload();

                    },
                    error: function(err) {
                        toastr.error(err.responseJSON)
                        unit__Table.ajax.reload();
                    }
                });
            });

        });
    </script>
@endpush
