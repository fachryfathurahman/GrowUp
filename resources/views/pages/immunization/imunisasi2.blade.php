@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="h3 mb-2 text-center text-gray-800">Imunisasi</h1>

                    <a class="btn btn-primary mb-3" href="/immunization/create/{{ $id_anak->id }}">Tambah Imunisasi Anak</a>

                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="/immunization/{{ $id_anak->id }}">Data Imunisasi</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">Data Imunisasi Anak</a></li>
                        </ul>
                    </nav>

                    <!-- Content Row -->
                    <div class="row">

                        {{-- @if ($id_anak == $imunchild["id_anak"]) --}}

                            @foreach ($imunchild as $ic)
                            @if ($ic["id_anak"] == $id_anak->id)
                            <div class="col-lg-4 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        {{ $ic["nama_imunisasi"] }}
                                    </div>
                                </div>
                            </div>
                            @endif
                          @endforeach
                            
                        {{-- @endif --}}

                        

                    </div>
    </div>
@endsection
