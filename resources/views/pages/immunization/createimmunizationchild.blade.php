@extends('layouts.dashboard')

@section('content')
    
        <h1 class="h3 mb-2 text-center text-gray-800">Imunisasi Anak</h1>
                    <div class="col-lg-6">
                        <form action="store" method="POST">
                            @csrf

                                <input type="hidden" name="id_anak" value="{{ $id_anak->id }}">

                                <div class="mb-3">
                                  <label for="nama" class="form-label font-weight-bold">Nama</label>
                                  <p>{{ $id_anak->name }}</p>
                                </div>

                                <div class="mb-3">
                                    <label for="umur" class="form-label font-weight-bold">Umur</label>
                                    <p>{{ $id_anak->age }} Bulan</p>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="imunisasi" class="form-label font-weight-bold">Imunisasi</label>
                                </div>
                                <div class="mb-3">
                                    <select name="nama_imunisasi">
                                        <option value="">-</option>
                                    @foreach ($imunanak as $imun)
                                        <option value="{{ $imun->nama }}">{{ $imun->nama }}</option>
                                    @endforeach
        
                                    </select>
                                </div>
                                    
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>

@endsection