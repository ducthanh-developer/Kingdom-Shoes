@extends('admin.index')
@push('styles')
    <!-- third party css -->

    <link href=" {{ asset('admin/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('admin/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('admin/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('admin/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('admin/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endpush
@push('scripts')
    <!-- third party js -->
    <script src=" {{ asset('admin/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/select2/select2.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $(".select2").select2()

        function fetchDelivery() {
            $.ajax({
                type: "post",
                url: "{{ route('list-delivery') }}",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    $('#list-delivery').html(response);
                    $('[data-toggle="input-mask"]').each(function(e, t) {
                        var a = $(t).data("maskFormat"),
                            n = $(t).data("reverse");
                        null != n ? $(t).mask(a, {
                            reverse: n
                        }) : $(t).mask(a);
                    });

                    $('.fee-ship').keypress(function(e) {
                        if (e.which == 13) {
                            let id = $(this).data('id');
                            let fee_ship = $(this).val();
                            $.ajax({
                                type: "post",
                                url: "{{ route('edit-delivery') }}",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    fee_ship,
                                    id,
                                },
                                success: function(response) {
                                    toastr.success('Thay đổi phí ship thành công!');
                                    console.log(response);
                                    fetchDelivery();
                                },
                                error: function(error) {
                                    console.error(error);
                                }

                            });
                        }

                    });
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }

        fetchDelivery()

        $('#form-delivery').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "{{ route('insert-fee') }}",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    toastr.success('Thêm phí ship thành công!')
                    $('button[type=reset]').click();
                    fetchDelivery();
                },
                error: function(error) {
                    toastr.error('Thêm phí ship thất bại!')
                    console.error(error);
                }
            });
        });

        $('.choose').change(function(e) {
            e.preventDefault();
            let result = '';
            let action = $(this).attr('id');
            let id = $(this).val();

            if (action == "province") {
                result = "district"
            } else {
                result = 'ward'
            }
            if (action != "ward") {
                $.ajax({
                    type: "post",
                    url: "{{ route('select-location') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        action,
                        id,
                    },
                    success: function(response) {
                        $('#' + result).html(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }

                });
            }


        });

        $("#datatable").DataTable();
        var a = $("#datatable-buttons").DataTable({
            lengthChange: !1,
            buttons: ["copy", "excel", "pdf"],
        });
        $("#key-table").DataTable({
                keys: !0
            }),
            $("#responsive-datatable").DataTable(),
            $("#selection-datatable").DataTable({
                select: {
                    style: "multi"
                }
            }),
            a
            .buttons()
            .container()
            .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
    </script>
    <!-- third party js ends -->
@endpush
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="" method="post" id="form-delivery">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-3">
                                    <h5>Tỉnh/Thành phố</h5>

                                    <select class="form-control select2 choose" name="province" id="province">
                                        <option value="">-- Chọn tỉnh/thành phố --</option>
                                        @foreach ($province as $key => $prov)
                                            <option value="{{ $prov->id }}">{{ $prov->_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <h5>Quận/Huyện</h5>

                                    <select class="form-control select2 choose" name="district" id="district">
                                        <option>-- Chọn quận/huyện --</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <h5>Xã/Phường/Thị trấn</h5>

                                    <select class="form-control select2 choose" name="ward" id="ward">
                                        <option>-- Chọn xã/phường/thị trấn --</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mt-1">
                                        <label>Phí vận chuyển</label>
                                        <input type="text" class="form-control" data-toggle="input-mask"
                                            data-mask-format="000,000,000,000,000" data-reverse="true" name="m_fee_ship"
                                            placeholder="Nhập phí vận chuyển">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group text-left mb-0">
                                        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit"
                                            name="add-delivery">
                                            Thêm phí vận chuyển
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                            Hủy
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tỉnh/Thành phố</th>
                                    <th>Quận/Huyện</th>
                                    <th>Xã/Phường</th>
                                    <th>Phí ship</th>
                                </tr>
                            </thead>

                            <tbody id="list-delivery">
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    @endsection
