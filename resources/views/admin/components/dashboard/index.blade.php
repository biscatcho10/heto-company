@extends("admin.layouts.index")
@section("title", title('Dashboard'))
@section('content')
{{--    {{ Breadcrumbs::render('dashboard') }}--}}
    <div class="main-content" style="min-height: 865px;">
        <!-- page title area start -->
        <div class="main-content-inner">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="info-box bg-info">
                        <span class="info-box-icon"><i class="ti-comment"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Contacts</span>
                            <span class="info-box-number">{{number_format($contact['allCount'])}}</span>

                            <div class="progress">
                                    <div class="progress-bar"
                                         style="width: {{100}}%"></div>
                            </div>
                            <span class="progress-description">
                                {{number_format($contact['last30daysCount'])}} Contacts opened in 30 Days
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fa fa-briefcase"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Careers</span>
                            <span class="info-box-number">{{number_format($career['allCount'])}}</span>

                            <div class="progress">
                                <div class="progress-bar"
                                     style="width: {{100}}%"></div>
                            </div>
                            <span class="progress-description">
                                {{number_format($career['last30daysCount'])}} Careers opened in 30 Days
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="info-box bg-warning">
                        <span class="info-box-icon"><i class="fa fa-tasks" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Projects</span>
                            <span class="info-box-number">{{number_format($project['allCount'])}}</span>

                            <div class="progress">
                                <div class="progress-bar"
                                     style="width: {{100}}%"></div>
                            </div>
                            <span class="progress-description">{{number_format($project['last30daysCount'])}} Projects opened in 30 Days</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="info-box bg-danger">
                        <span class="info-box-icon"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Visitors</span>
                            <span class="info-box-number">{{number_format($visitors['all'])}}</span>

                            <div class="progress">
                                <div class="progress-bar"
                                     style="width: {{$visitors['all']/($visitors['last30days'])*100}}%"></div>
                            </div>
                            <span class="progress-description">
                  {{number_format($visitors['last30days'])}} Visitors in 30 Days
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

            </div>

            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Visitors Browsers</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <input type="hidden" id="browserusage" data-target="{{route("browserUsage")}}">
                            <canvas id="pieChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 764px;"
                                    width="764" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">
                    <!-- Map card -->
                    <div class="card bg-gradient-primary">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                Visitors
                            </h3>
                            <!-- card tools -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                                    <i class="far fa-calendar-alt"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse"
                                        title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <div class="card-body">
                            <input type="hidden" id="urltovisitors" data-target="{{route("mapData")}}">
                            <div id="world-map" style="height: 250px; width: 100%;"></div>
                            <style>
                                .jqvmap-zoomin, .jqvmap-zoomout {
                                    padding: 0;
                                    padding-top: 1px;
                                    padding-right: 1px;
                                }
                            </style>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0">

                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>
                            <!-- tools card -->
                            <div class="card-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                            data-toggle="dropdown" data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a href="#" class="dropdown-item">Add new event</a>
                                        <a href="#" class="dropdown-item">Clear events</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- right col -->
            </div>


        </div>
    </div>
@endsection
