<?php
$kelas = $data['data_kelas'][0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>

<body>

    <h1>data kelas</h1>

    <h5>select all kelas</h5>
    <!-- <?php // var_dump($data['data_kelas']); 
            ?> -->


    <h5>select X RPL 1</h5>
    <p><?= $kelas['nama_kelas']; ?> <?= $kelas['nama_jurusan']; ?> <?= $kelas['index']; ?></p>

    <h1>create new data kelas</h1>
    <form action="<?= BASEURL ?>/datakelas/insert" method="POST" id="form">
        <select name="kelas" id="kelas">
            <option value="-">pilih kelas</option>
            <?php foreach ($data['kelas'] as $kelas) : ?>
                <option value="<?= $kelas['id_kelas']; ?>"><?= $kelas['nama_kelas']; ?></option>
            <?php endforeach; ?>
        </select>

        <select name="jurusan" id="jurusan">
            <option value="-">pilih jurusan</option>
            <?php foreach ($data['jurusan'] as $jurusan) : ?>
                <option value="<?= $jurusan['id_jurusan']; ?>"><?= $jurusan['nama_jurusan']; ?></option>
            <?php endforeach; ?>
        </select>

        <select name="tahun" id="tahun">
            <option value="-">pilih tahun</option>
            <?php foreach ($data['tahun'] as $tahun) : ?>
                <option value="<?= $tahun['id_tahun']; ?>"><?= $tahun['tahun']; ?></option>
            <?php endforeach; ?>
        </select>

        <input type="number" name="index" placeholder="index..." min="1">
        <select name="guru" id="guru">
            <option value="-">pilih guru not wali</option>
            <?php foreach ($data['guru_not_wali'] as $guru) : ?>
                <option value="<?= $guru['id_guru']; ?>"><?= $guru['nama_guru']; ?></option>
            <?php endforeach; ?>
        </select>

        <p>tambah siswa</p>
        <input type="text" placeholder="search siswa">
        <select id="mySelect">
            <option value="-">choose siswa</option>
            <?php for ($i = 0; $i < count($data['data_siswa']); $i++) {
                echo "<option value='" . $i . "' data-nis='" . $data['data_siswa'][$i]['nis'] . "' data-id-siswa='" . $data['data_siswa'][$i]['id_siswa'] . "'>
                " . $data['data_siswa'][$i]['nama_siswa'] . "
            </option>";
            } ?>
        </select>
        <button type="button" id="tambahSiswa">tambah siswa</button>

        <div class="inputHidden">
            <input type="hidden" id="totalSiswaCreated" name="totalSiswaCreated">
        </div>

        <table border="1" id="tableDataSiswa">
            <tr>
                <th>no</th>
                <th>nis</th>
                <th>nama</th>
                <th>aksi</th>
            </tr>
        </table>
        <button type="submit">create</button>
    </form>
</body>

<script src="<?= BASEURL; ?>/js/js_anton/script-datakelas.js"></script>

</html>