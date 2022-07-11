@extends('layouts.dashboard')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 text-gray-800">Dashboard</h1>
        </div>

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Anak </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse hide" id="collapseCardExample">
                <div class="card-body">
                    <form class="user" action="/child/add" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Nama <input type="text" class="form-control form-control-user" name="name"
                                    required="required">

                            </div>
                            <div class="col-sm-6">
                                User ID (percobaan) <input type="text" class="form-control form-control-user"
                                    name="user_id" value="{{Auth::user()->id}}" required="required" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            Tanggal Lahir <input type="date" class="form-control form-control-user" name="birthday" required="required"> <br />
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                Apakah Masih Diberikan ASI?<br />
                                <input type="radio" name="breast_milk" value="yes"> Masih<br>
                                <input type="radio" name="breast_milk" value="no"> Tidak
                            </div>

                            <div class="col-sm-6">
                                Jenis Kelamin<br />
                                <input type="radio" name="gender" value="male"> Laki-laki<br>
                                <input type="radio" name="gender" value="female"> Perempuan
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        {{-- <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    ID_anak</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Earnings (Annual)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <!-- Content Row -->
        <div class="row">

            @for ($index = 0; $index < count($childs); $index++)
                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $childs[$index]->name }}</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <p>Anak anda berumur {{ $ages[$index] }} Bulan</p>
                                <?php
                                switch ($ages[$index]) {
                                    case 6:
                                        echo '<p>Jangan lupa melakukan check up rutin ke dokter anak</p>';
                                        break;
                                    case 12:
                                        echo '<p>jangan lupa memberikan asi ke anak anda</p>';
                                        break;
                                    case 24:
                                        echo '<p>Anda sudah bisa melepas pemberian asi kepada anak anda</p>';
                                        break;
                                    case 36:
                                        echo '<p>Penuhi kebutuhan nutrisi anak anda sesuai rekomendasi dari GrowUp</p>';
                                        break;
                                    case 48;
                                        echo '<p>Berikan Makanan 4 Sehat 5 Sempurna</p>';
                                        break;
                                    case 60;
                                        echo '<p>Penuhi Seluruh Vaksinasi dan Imunisasi anak anda, Sebelum melewati usia 5 tahun</p>';
                                        break;
        
                                }
                                ?>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Direct
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Social
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Referral
                                </span>
                            </div>
                            <a href="/child/edit/{{ $childs[$index]->id }}" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-child"></i>
                                </span>
                                <span class="text">Update Data Anak</span>
                            </a>
                        </div>
                    </div>
                
                </div>


                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Z-Score {{ $childs[$index]->name }}</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <!--<canvas id="myAreaChart"></canvas>-->
                                <p>zScore anak anda sekarang adalah {{ $childs[$index]->height }}</p>
                            </div>
                            <a href="/child/growth/{{ $childs[$index]->id }}" class="btn btn-primary btn-icon-split mb-3">
                                <span class="icon text-white-50">
                                    <i class="fas fa-heartbeat"></i>
                                </span>
                                <span class="text">Update Perkembangan anak</span>
                            </a>

                            <a href="/immunization/{{ $childs[$index]->id }}" class="btn btn-primary btn-icon-split mb-3">
                                <span class="icon text-white-50">
                                    <i class="fas fa-heartbeat"></i>
                                </span>
                                <span class="text">Imunisasi</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
