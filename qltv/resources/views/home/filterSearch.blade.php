
<div class="container-fluid">
    <div class="row">
        <!-- BEGIN SEARCH RESULT -->
        <div class="col-md-12">
            <div class="grid search">
                <div class="grid-body">
                    <div class="row">
                        <!-- BEGIN FILTERS -->
                        <div class="col-md-3">
                            <h2 class="grid-title"><i class="fa fa-filter"></i> Filters</h2>
                            <hr>

                            <!-- BEGIN FILTER BY CATEGORY -->
                            <h4>By category:</h4>
                            <div class="checkbox">
                                <label><input type="checkbox" class="icheck" value="1"> Application</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" class="icheck" value="5"> Design</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" class="icheck" value="3"> Desktop</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" class="icheck" value="6"> Management</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" class="icheck" value="7"> Mobile</label>
                            </div>
                            <!-- END FILTER BY CATEGORY -->

                            <div class="padding"></div>

                            <!-- BEGIN FILTER BY DATE -->
                            <h4>By date:</h4>
                            From
                            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
                                <input type="text" class="form-control">
                                <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>
                            </div>
                            <input type="hidden" id="dtp_input1" value="">

                            To
                            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2">
                                <input type="text" class="form-control">
                                <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>
                            </div>
                            <input type="hidden" id="dtp_input2" value="">
                            <!-- END FILTER BY DATE -->

                            <div class="padding"></div>

                            <!-- BEGIN FILTER BY PRICE -->
                            <h4>By price:</h4>
                            <input type="range" class="price-range" min="0" max="100" value="50">
                            <span class="price-value">50</span>
                            <!-- END FILTER BY PRICE -->
                        </div>
                        <!-- END FILTERS -->
                        <!-- BEGIN RESULT -->
                        <div class="col-md-9">
                            <h2><i class="fa fa-file-o"></i> Result</h2>
                            <hr>
                            <!-- BEGIN SEARCH INPUT -->
                            <div class="input-group">
                                <input type="text" class="form-control" value="web development">
                                <span class="input-group-btn">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </span>
                            </div>
                            <!-- END SEARCH INPUT -->
                            <p>Showing all results matching "web development"</p>

                            <div class="padding"></div>

                            <div class="row">
                                <!-- BEGIN ORDER RESULT -->
                                <div class="col-sm-6">
                                    <!-- Đảm bảo bạn đã bao gồm thư viện jQuery trong trang của mình -->


                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="/?dir=asc" data-value="asc">Tăng dần</a></li>
                                            <li><a class="dropdown-item" data-value="desc">Giảm dần</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END ORDER RESULT -->

                                <div class="col-md-6" style="text-align: end">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>
                                    </div>
                                </div>
                            </div>



