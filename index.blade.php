<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Bootstrap</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="bg-primary py-5">
        <div class="container">
            <h1 class="display-4 text-white">Bootstrap Khoiruddin Hasibuan SI4</h1>
        </div>
    </header>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>







	<title>QUIZ PBWL Laravel 9.x </title>
</head>
<body>
 
	
	<h3>Data PLN</h3>
 
	<a href="/tb_pelanggan/tambah"> + Tambah Pelanggan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Umur</th>
			<th>Alamat</th>
			
		</tr>
		
		<tr>
			<td><input type=text name=Nama>		</td>
			<td><input type=text name=Umur>		</td>
			<td><input type=text name=Alamat>		</td>
			<td>
				<a href="/tb_pelanggan/edit/{{ $p->pelanggan_id }}">Edit</a>
				|
				<a href="/tb_pelanggan/hapus/{{ $p->pelanggan_id }}">Hapus</a>
			</td>
		</tr>
		
	</table>



 
</body>
</html>

