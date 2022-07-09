@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <form class="user" action="/child/update/{{ $childs->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            Nama <input type="text" class="form-control form-control-user" name="name" value="{{ $childs->name }}"
                                required="required">

                        </div>
                        <div class="col-sm-6">
                            Umur <input type="number" class="form-control form-control-user" name="age" value="{{ $childs->age }}"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            Tanggal Lahir <input type="date" name="birthday" value="{{ $childs->birthday }}" required="required"> <br />
                        </div>
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
                    <div class="col-sm-6">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="/" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            </div>
@endsection
