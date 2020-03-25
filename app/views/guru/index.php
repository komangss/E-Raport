<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru Index</title>
</head>
<body>
<h1>CRUD Guru</h1>

<h3>GetAllData Guru</h3>
    <?php var_dump($data['data_guru']); ?>

    <h1>Insert Data Guru</h1>
    
    <form action="<?= BASEURL ?>/guru/insert" method="POST">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="nip" placeholder="nip">
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="checkbox" placeholder="is wali kelas?" id="checkbox">
        <label for="checkbox">is wali?</label>
        
        <select name="wali_kelas" id="wali_kelas">
        <!-- foreach setiap kelas -->
        <option value="-">choose kelas</option>
        <option value="1">X RPL 1</option>
        </select>
        
        <br>
        <button type="submit">insert</button>
    </form>

</body>


</html>