{{--<link rel="stylesheet" href="../app.css">--}}

{{--<div>--}}
{{--    Day la thanh filter--}}
{{--</div>--}}
{{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">--}}
{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <!-- BEGIN SEARCH RESULT -->--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="grid search">--}}
{{--                <div class="grid-body">--}}
{{--                    <div class="row">--}}
{{--                        <!-- BEGIN FILTERS -->--}}
{{--                        <div class="col-md-3">--}}
{{--                            <h2 class="grid-title"><i class="fa fa-filter"></i> Filters</h2>--}}
{{--                            <hr>--}}

{{--                            <!-- BEGIN FILTER BY CATEGORY -->--}}
{{--                            <h4>By category:</h4>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label><input type="checkbox" class="icheck"> Application</label>--}}
{{--                            </div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label><input type="checkbox" class="icheck"> Design</label>--}}
{{--                            </div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label><input type="checkbox" class="icheck"> Desktop</label>--}}
{{--                            </div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label><input type="checkbox" class="icheck"> Management</label>--}}
{{--                            </div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label><input type="checkbox" class="icheck"> Mobile</label>--}}
{{--                            </div>--}}
{{--                            <!-- END FILTER BY CATEGORY -->--}}

{{--                            <div class="padding"></div>--}}

{{--                            <!-- BEGIN FILTER BY DATE -->--}}
{{--                            <h4>By date:</h4>--}}
{{--                            From--}}
{{--                            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">--}}
{{--                                <input type="text" class="form-control">--}}
{{--                                <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>--}}
{{--                            </div>--}}
{{--                            <input type="hidden" id="dtp_input1" value="">--}}

{{--                            To--}}
{{--                            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2">--}}
{{--                                <input type="text" class="form-control">--}}
{{--                                <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>--}}
{{--                            </div>--}}
{{--                            <input type="hidden" id="dtp_input2" value="">--}}
{{--                            <!-- END FILTER BY DATE -->--}}

{{--                            <div class="padding"></div>--}}

{{--                            <!-- BEGIN FILTER BY PRICE -->--}}
{{--                            <h4>By price:</h4>--}}
{{--                            Between <div id="price1">$300</div> to <div id="price2">$800</div>--}}
{{--                            <div class="slider-primary">--}}
{{--                                <div class="slider slider-horizontal" style="width: 152px;"><div class="slider-track"><div class="slider-selection" style="left: 30%; width: 50%;"></div><div class="slider-handle round" style="left: 30%;"></div><div class="slider-handle round" style="left: 80%;"></div></div><div class="tooltip top hide" style="top: -30px; left: 50.1px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">300 : 800</div></div><input type="text" class="slider" value="" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[300,800]" data-slider-tooltip="hide"></div>--}}
{{--                            </div>--}}
{{--                            <!-- END FILTER BY PRICE -->--}}
{{--                        </div>--}}
{{--                        <!-- END FILTERS -->--}}
{{--                        <!-- BEGIN RESULT -->--}}
{{--                        <div class="col-md-9">--}}
{{--                            <h2><i class="fa fa-file-o"></i> Result</h2>--}}
{{--                            <hr>--}}
{{--                            <!-- BEGIN SEARCH INPUT -->--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" value="web development">--}}
{{--                                <span class="input-group-btn">--}}
{{--                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>--}}
{{--              </span>--}}
{{--                            </div>--}}
{{--                            <!-- END SEARCH INPUT -->--}}
{{--                            <p>Showing all results matching "web development"</p>--}}

{{--                            <div class="padding"></div>--}}

{{--                            <div class="row">--}}
{{--                                <!-- BEGIN ORDER RESULT -->--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <!-- Đảm bảo bạn đã bao gồm thư viện jQuery trong trang của mình -->--}}
{{--                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>--}}
{{--                                    <!-- JavaScript -->--}}
{{--                                    <script>--}}
{{--                                        $(document).ready(function () {--}}
{{--                                            // Sự kiện khi một mục trong dropdown được chọn--}}
{{--                                            $('.dropdown-item').on('click', function (e) {--}}
{{--                                                e.preventDefault();--}}

{{--                                                // Lấy giá trị từ thuộc tính data-value--}}
{{--                                                let selectedValue = $(this).data('value');--}}

{{--                                                console.log(">>Check option: ", selectedValue);--}}

{{--                                                // Gửi dữ liệu lên thông qua AJAX--}}
{{--                                                $.ajax({--}}
{{--                                                    type: 'POST',--}}
{{--                                                    url: '/sanpham', // Thay đổi đường dẫn tương ứng với route của bạn--}}
{{--                                                    data: {--}}
{{--                                                        selectedValue: selectedValue,--}}
{{--                                                        _token: '{{ csrf_token() }}' // Đảm bảo thêm token CSRF khi sử dụng POST request trong Laravel--}}
{{--                                                    },--}}
{{--                                                    success: function (data) {--}}
{{--                                                        // Xử lý dữ liệu trả về từ server (nếu cần)--}}
{{--                                                        console.log(data);--}}

{{--                                                        $('.table tbody').html(data);--}}
{{--                                                    },--}}
{{--                                                    error: function (error) {--}}
{{--                                                        console.log('Error:', error);--}}
{{--                                                    }--}}
{{--                                                });--}}
{{--                                            });--}}
{{--                                        });--}}
{{--                                    </script>--}}

{{--                                    <!-- Dropdown -->--}}
{{--                                    <div class="dropdown">--}}
{{--                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                            Dropdown button--}}
{{--                                        </button>--}}
{{--                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                            <li><a class="dropdown-item"  data-value="asc">Tăng dần</a></li>--}}
{{--                                            <li><a class="dropdown-item" data-value="desc">Giảm dần</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- END ORDER RESULT -->--}}

{{--                                <div class="col-md-6" style="text-align: end">--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>--}}
{{--                                        <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- BEGIN TABLE RESULT -->--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-hover">--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($sanphams as $sanpham)--}}
{{--                                    <tr>--}}
{{--                                        <td class="number text-center">{{ $sanpham->MaSP }}</td>--}}
{{--                                        <td class="image"><img src="https://www.bootdey.com/image/400x300/FF8C00" alt=""></td>--}}
{{--                                        <td class="product"><strong>{{ $sanpham->TenSP }}</strong><br>{{ $sanpham->MoTa }}</td>--}}
{{--                                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>--}}
{{--                                        <td class="price text-right">{{ $sanpham->GiaBan }}</td>--}}
{{--                                        <td class="count">{{ $sanpham->SoLuong }}</td>--}}
{{--                                    </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <!-- END TABLE RESULT -->--}}

{{--                            <!-- BEGIN PAGINATION -->--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="disabled"><a href="#">«</a></li>--}}
{{--                                <li class="active"><a href="#">1</a></li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                                <li><a href="#">4</a></li>--}}
{{--                                <li><a href="#">5</a></li>--}}
{{--                                <li><a href="#">»</a></li>--}}
{{--                            </ul>--}}
{{--                            <!-- END PAGINATION -->--}}
{{--                        </div>--}}
{{--                        <!-- END RESULT -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- END SEARCH RESULT -->--}}
{{--    </div>--}}
{{--</div>--}}
