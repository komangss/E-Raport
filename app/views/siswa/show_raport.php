<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css/css_2d/show-raport.css">
    <title>show nilai</title>
</head>

<body>
    <div>
        <div style="height:80%; margin-top:100px;" class="card box-shadow position-relative uk-card">
            <!-- tampilan nilai siswa -->
            <h3 class="uk-card-title">Nilai</h3>
            <h2>Nama Siswa : </h2>
            <h2>Kelas Siswa :</h2>
            <h2>No Urut Siswa : </h2>
            <br>
            <hr>
            <br>    

            <table border="1" style="width:100%;" >
				<tr>
					<th>Mapel</th>
					<th>KKM</th>
					<th>NILAI</th>	
				</tr>
				<tr>
					<td>Bahasa Indonesia</td>
					<td>75</td>
					<td>78</td>
				</tr>
				<tr>
					<td>Matematika</td>
					<td>78</td>
					<td>80</td>
				</tr>
				<tr>
					<td>Produk Kreatif dan Kewirausahaan</td>
					<td>78</td>
					<td>84</td>
				</tr>
				<tr>
					<td>Perangkat Lunak</td>
					<td>78</td>
					<td>88</td>
				</tr>
				<tr>
					<td>PWPB</td>
					<td> 78</td>
					<td>86</td>
				</tr>
				<tr>
					<td>Bahasa Inggris</td>
					<td>75</td>
					<td>78</td>
        		</tr>
        		<tr>
					<td colspan="2  ">Rata</td>
					<td>89,6</td>
				</tr>
			</table>

			<div class="tombol-back">
				<button type="button" >Kembali</button>
			</div>

        </div>
    </div>
</body>

</html>