<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Murid</title>
</head>

<body>
    <select name="" id="select_kelas">
        <option value="-">pilih kelas</option>
        <?php foreach ($data['data_kelas'] as $datakelas) : ?>
            <option value="<?= $datakelas['id_data_kelas']; ?>"><?= $datakelas['nama_kelas'] . " " . $datakelas['nama_jurusan'] . " " . $datakelas['index']; ?></option>
        <?php endforeach; ?>
    </select>
    <button id="btn_select_class">pilih</button>
    <select name="" id="select_siswa">
        <option value="-">pilih murid</option>
    </select>
    <button id="btn_select_murid">pilih</button>
</body>
<script>
    let selectKelas = document.getElementById('select_kelas')
    let selectSiswa = document.getElementById('select_siswa')
    document.getElementById('btn_select_class').addEventListener('click', function() {
        let idKelas = selectKelas.options[selectKelas.selectedIndex].value

        testFetch(idKelas)
            .then(data => {
                data.forEach(dataSiswa => {
                    // buat element option
                    let option = document.createElement("option");
                    option.text = dataSiswa.nama_siswa
                    option.value = dataSiswa.id_siswa

                    // remove option yang lain
                    var length = selectSiswa.options.length-1;
                    for (i = 0; i < length; i++) {
                        selectSiswa.options[i] = null;
                    }

                    // taruh optionnya di select
                    selectSiswa.add(option, selectSiswa[1])
                })
            })
            .catch(err => console.log(err))
    })

    async function testFetch(idKelas) {
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