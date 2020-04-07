<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Murid</title>
</head>

<body>
    <?php var_dump($data['data_kelas']);
    echo $data['data_kelas'][0]['nama_kelas'] . " " . $data['data_kelas'][0]['nama_jurusan'] . " " . $data['data_kelas'][0]['index'];
    ?>
    <select name="" id="">
        <option value="-">pilih kelas</option>
        <?php foreach ($data['data_kelas'] as $datakelas) : ?>
            <option value="<?= $datakelas['id_data_kelas']; ?>"><?= $datakelas['nama_kelas'] . " " . $datakelas['nama_jurusan'] . " " . $datakelas['index']; ?></option>
        <?php endforeach; ?>
    </select>
    <button id="test_fetch">fetch!</button>
</body>
<script>
    document.getElementById('test_fetch').addEventListener('click', function() {
        testFetch()
            .then(data => console.log(data))
            .catch(err => console.log(err))
    })

    async function testFetch() {
        let response = await fetch('http://localhost/E-Raport/mapel/testfetch');
        let data = await response.json()
        return data;
    }
</script>

</html>