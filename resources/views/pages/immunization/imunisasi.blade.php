@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="h3 mb-2 mt-4 text-center text-gray-800">Imunisasi</h1>
            
                
            
                    <a class="btn btn-primary mb-3" href="/immunization/create/{{ $id_anak->id }}">Tambah Imunisasi Anak</a>

                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">Data Imunisasi</a></li>
                            <li class="page-item"><a class="page-link" href="/immunization/child/{{ $id_anak->id }}">Data Imunisasi Anak</a></li>
                        </ul>
                    </nav>
                   
                    
                    <h4 class="mb4">0 Bulan</h4>
                    <div class="row">

                        @foreach ($imunisasi as $imun)
                            @if ($imun["usia"] == 0)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                    

                    <h4 class="mb4">2 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 2)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
        

                    
                    <h4 class="mb4">3 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 3)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    

                    
                    <h4 class="mb4">4 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 4)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    
                    
                    <h4 class="mb4">6 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 6)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">7 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 7)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">9 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 9)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">12 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 12)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">14 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 14)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">18 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 18)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">24 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 24)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">30 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 30)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">36 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 36)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>


                    <h4 class="mb4">48 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 48)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    <h4 class="mb4">60 Bulan</h4>

                    <div class="row">
                        @foreach ($imunisasi as $imun)
                            @if ($imun->usia == 60)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $imun["nama"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
           

                    
    </div>
@endsection