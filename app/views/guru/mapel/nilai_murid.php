<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Murid</title>
</head>

<body>
    <h3>pilih kelas</h3>
    <select name="" id="select_kelas">
        <option value="-">pilih kelas</option>
        <?php foreach ($data_kelas as $datakelas) : ?>
            <option value="<?= $datakelas['id_data_kelas']; ?>"><?= $datakelas['nama_kelas'] . " " . $datakelas['nama_jurusan'] . " " . $datakelas['index']; ?></option>
        <?php endforeach; ?>
    </select>
    <button id="btn_select_class">pilih</button> 
    
    <form action="justdoit">
        <h3>pilih murid</h3>
        <select name="" id="select_siswa">
            <option value="-">pilih murid</option>
        </select>
        <h3>masukan nilai</h3>
        <input type="text" class="input_nilai" placeholder="nilai 1" disabled>
        <input type="text" class="input_nilai" placeholder="nilai 2" disabled>
        <input type="text" class="input_nilai" placeholder="nilai 3" disabled>
        <input type="text" class="input_nilai" placeholder="nilai 4" disabled>
        <button type="submit">submit!</button>
    </form>
</body>
<script>
    let selectKelas = document.getElementById('select_kelas')
    let selectSiswa = document.getElementById('select_siswa')
    document.getElementById('btn_select_class').addEventListener('click', function() {
        let idKelas = selectKelas.options[selectKelas.selectedIndex].value

        if (idKelas != '-') {
            getSiswaAsync(idKelas)
                .then(data => {
                    data.forEach(dataSiswa => {
                        // buat element option
                        let option = document.createElement("option");
                        option.text = dataSiswa.nama_siswa
                        option.value = dataSiswa.id_siswa

                        // remove option yang lain
                        var length = selectSiswa.options.length - 1;
                        for (i = 0; i < length; i++) {
                            selectSiswa.options[i] = null;
                        }

                        // taruh optionnya di select
                        selectSiswa.add(option, selectSiswa[1])
                        document.querySelectorAll(".input_nilai").forEach(input => input.removeAttribute('disabled'))
                    })
                })
                .catch(err => console.log(err))
        }
    })

    async function getSiswaAsync(idKelas) {
        let formData = new FormData()
        formData.append('idkelas', idKelas)

        let url = 'http://localhost/E-Raport/mapel/getMuridFromKelas'

        let response = await fetch(url, {
            method: 'POST',
            body: formData
        });

        let data = await response.json()
        return data;
    }
</script>

</html>