<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/child/update/{{ $childs->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                        Nama <input type="text" name="name" required="required" value="{{ $childs->name }}"> <br/>
                        Umur <input type="number" name="age" required="required" value="{{ $childs->age }}"> <br/>
                        Gender
                            <div>
                            Laki-Laki<input type="radio" name="gender" value="male">
                            Perempuan<input type="radio" name="gender" value="female">
                            </div>
                        Tanggal Lahir<input type="date" name="birthday" value="{{ $childs->date }}"><br>
                        Asi
                            <div> 
                            Masih<input type="radio" name="breast_milk" value="yes">
                            Tidak<input type="radio" name="breast_milk" value="no">
                            </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>

