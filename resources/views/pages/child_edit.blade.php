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
                    <a href="/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/child_edit/update/{{ $childs->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                        Nama <input type="text" name="name" required="required" value="{{ $childs->name }}"> <br/>
                        Umur <input type="number" name="age" required="required" value="{{ $childs->age }}"> <br/>
                        Gender
                        <div>
                        <input type="radio" name="gender" value="Laki-laki">
                        <input type="radio" name="gender" value="Perempuan">
                        </div>
                        Tanggal Lahir<input type="date" name="birthday" value="{{ $childs->date }}"><br>
                        Asi <input type="checkbox" name="asi" value="{{ $childs->asi }}">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>

