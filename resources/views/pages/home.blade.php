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
                    Nama <input type="text" name="name" required="required"> <br/>
                    Umur <input type="number" name="age" required="required"> <br/>
                    Gender
                    <div>
                    <input type="radio" name="gender" value="Laki-laki">
                    <input type="radio" name="gender" value="Perempuan">
                    </div>
                    Tanggal Lahir<input type="date" name="birthday">
                    Asi <input type="checkbox" name="asi" value="1">
                    <input type="submit" value="Simpan Data">
                </form>
                </div>
                <br>
                <h1>Daftar Anak</h1>
                <div>
                <table border="1">
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Status Asi</th>
                    </tr>
                    @foreach($childs as $c)
                    <tr>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->age }}</td>
                        <td>{{ $c->gender }}</td>
                        <td>{{ $c->birthday }}</td>                        
                        <td>{{ $c->asi }}</td>    
                        <a href="/child_edit/{{ $c->id }}">Edit</a>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
