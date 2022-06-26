@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div>
                <form action="/home/add" method="post">
                    {{ csrf_field() }}
                    Nama <input type="text" name="nama" required="required"> <br/>
                    Umur <input type="number" name="umur" required="required"> <br/>
                    Gender
                    <div>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki">
                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                    </div>
                    Tanggal Lahir<input type="date" name="tgl_lahir">
                    Asi <input type="checkbox" name="asi" value="1">
                    <input type="submit" value="Simpan Data">
                </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
