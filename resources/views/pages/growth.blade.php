@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <form class="user" action="/add" method="post">
            {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    Nama <input type="text" class="form-control form-control-user" name="name" required="required"> 
                    </div>
                    <div class="col-sm-6">
                    ID Anak <input type="number" class="form-control form-control-user" name="child_id" required="required" readonly> 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        User ID (percobaan) <input type="text" class="form-control form-control-user" name="user_id" required="required"> 
                    </div>
                    <div class="col-sm-6">
                        Tanggal Lahir <input type="date" name="birthday" required="required"> <br/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        Jenis Kelamin<br/>
                        <input type="radio" name="breast_milk" value="yes"> Masih<br>
                        <input type="radio" name="breast_milk" value="no"> Tidak
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        Jenis Kelamin<br/>
                        <input type="radio" name="gender" value="male"> Laki-laki<br>
                        <input type="radio" name="gender" value="female"> Perempuan
                    </div>

                </div>
            <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan Data">
        </form>
    </div>
@endsection
