<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a> Daftar</a></h2>
	<h3>Data orangtua</h3>
 
	<a href="/home"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/registration/add" method="post">
		{{ csrf_field() }}
        <h2>Data Ayah<h2>
		Nama <input type="text" name="namaAyah" required="required"> <br/>
		Umur <input type="number" name="umurAyah" required="required"> <br/>
		No. Telpon <input type="text" name="telpAyah" required="required"> <br/>
		Email <input type="text" name="emailAyah" required="required"></textarea> <br/>
        <br>
        <h2>Data Ibu<h2>
        Nama <input type="text" name="namaIbu" required="required"> <br/>
		Umur <input type="number" name="umurIbu" required="required"> <br/>
		No. Telpon <input type="text" name="telpIbu" required="required"> <br/>
		Email <input type="text" name="emailIbu" required="required"></textarea> <br/>
		<input type="submit" value="Daftar">
	</form>
 
</body>
</html>











