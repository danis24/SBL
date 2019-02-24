@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <h4 class="card-title">Tanggal</h4>
                                <div class="list d-flex align-items-center border-bottom pb-3">
                                    <div class="wrapper w-100">
                                        <p><b>Senin, 25 Febuari 2019</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h4 class="card-title">Anda Login Sebagai</h4>
                                <div class="list d-flex align-items-center border-bottom pb-3">
                                    <div class="wrapper w-100">
                                        <p><b>Admin</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h4 class="card-title">Account Period</h4>
                                <div class="list d-flex align-items-center border-bottom pb-3">
                                    <div class="wrapper w-100">
                                        <p><b>Jan 2019 - Dec 2019</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h4 class="card-title">Cabang</h4>
                                <div class="list d-flex align-items-center border-bottom pb-3">
                                    <div class="wrapper w-100">
                                        <p><b>CGK - Jakarta</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <h3>Statistik Tahun 2019</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                    <div class="card-body">
                        <h6 class="font-weight-normal">Booking Baru</h6>
                        <h2 class="mb-0">25</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                    <div class="card-body">
                        <h6 class="font-weight-normal">Customer</h6>
                        <h2 class="mb-0">30</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                    <div class="card-body">
                        <h6 class="font-weight-normal">Vendor</h6>
                        <h2 class="mb-0">3</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                <div class="card bg-gradient-info text-white text-center card-shadow-info">
                    <div class="card-body">
                        <h6 class="font-weight-normal">Approval Request</h6>
                        <h2 class="mb-0">10</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <h4 class="card-title">Booking Today Chart</h4>
                        <div class="d-flex justify-content-between justify-content-lg-start flex-wrap">
                            <div class="mr-5 mb-2">
                                <h3>
                                    2
                                </h3>
                                <h6 class="font-weight-normal mb-0">
                                    Today Booking Count
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-end p-0">
                        <div class="mt-auto w-100">
                            <div id="sales-legend" class="chartjs-legend mt-2 mb-4"></div>
                            <canvas id="chart-sales"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Booking Status Today</h4>
                        <div class="table-responsive mt-2">
                            <table class="table mt-3 border-top">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Nomor</th>
                                        <th>Pelanggan</th>
                                        <th>Transfortasi</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Biaya</th>
                                        <th>Tanggal</th>
                                        <th>Jatuh Tempo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="badge badge-warning badge-fw">Pending</div>
                                        </td>
                                        <td>0003794</td>
                                        <td>PT ANTAR MITRA SEMBADA (AMS)</td>
                                        <td>Udara</td>
                                        <td>DKI Jakarta</td>
                                        <td>Kota Palembang</td>
                                        <td>Rp. 0</td>
                                        <td>21 Februari</td>
                                        <td>23 Maret 2019</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="badge badge-warning badge-fw">Pending</div>
                                        </td>
                                        <td>0003794</td>
                                        <td>PT ANTAR MITRA SEMBADA (AMS)</td>
                                        <td>Udara</td>
                                        <td>DKI Jakarta</td>
                                        <td>Kota Palembang</td>
                                        <td>Rp. 0</td>
                                        <td>21 Februari</td>
                                        <td>23 Maret 2019</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="badge badge-warning badge-fw">Pending</div>
                                        </td>
                                        <td>0003794</td>
                                        <td>PT ANTAR MITRA SEMBADA (AMS)</td>
                                        <td>Udara</td>
                                        <td>DKI Jakarta</td>
                                        <td>Kota Palembang</td>
                                        <td>Rp. 0</td>
                                        <td>21 Februari</td>
                                        <td>23 Maret 2019</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                            <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
                            <nav>
                                <ul class="pagination pagination-primary mb-0">
                                    <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link">1</a></li>
                                    <li class="page-item"><a class="page-link">2</a></li>
                                    <li class="page-item"><a class="page-link">3</a></li>
                                    <li class="page-item"><a class="page-link">4</a></li>
                                    <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Monthly Booking</h4>
                        <p class="card-description">Description</p>
                        <div id="js-legend" class="chartjs-legend mt-4 mb-5 analytics-legend"></div>
                        <div class="demo-chart">
                            <canvas id="dashboard-monthly-analytics"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('layouts.footer')
</div>
@endsection