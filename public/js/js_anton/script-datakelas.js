// inisiasi element
let btn = document.getElementById('tambahSiswa')
let select = document.getElementById('mySelect')
let tableDataSiswa = document.getElementById('tableDataSiswa')
let inputTotalSiswaCreated = document.getElementById('totalSiswaCreated')
let tableRowLength // tempat nampung panjang row di table
let inputHidden = document.querySelectorAll('.inputHidden')[0] // ini div tempat nampung si input yang hidden
let inputIdSiswaClass

btn.addEventListener('click', () => {
    // cek jika yang sedang dipilih bukanlah choose siswa (value nya -)
    if (select.options[select.selectedIndex].value != '-') {
        // inisiasi data yang diperlukan
        let idSiswa = select.options[select.selectedIndex].getAttribute('data-id-siswa')
        let nisSiswa = select.options[select.selectedIndex].getAttribute('data-nis')
        let namaSiswa = select.options[select.selectedIndex].text

        // replace variable tableRowLength diatas dengan total length table sekarang
        tableRowLength = tableDataSiswa.rows.length

        // buat row baru di table data siswa
        let row = tableDataSiswa.insertRow(tableRowLength)

        // buat cell nya
        let cellNo = row.insertCell(0) // no
        let cellNis = row.insertCell(1) // nis
        let cellNama = row.insertCell(2) // nama
        let cellAksi = row.insertCell(3) // aksi (tombol delete)

        // isi cell yang dibuat dengan data
        cellNo.innerHTML = tableRowLength
        cellNis.innerHTML = nisSiswa
        cellNama.innerHTML = namaSiswa
        // buat element button di cell ini dengan onClick function dibawah dengan mengirimkan row table
        cellAksi.innerHTML = "<button type='button' onClick='deleteThisRowThenTakeBackToSelect(" + tableRowLength + ")'>delete</button>"

        // remove option yang sudah di buat
        select.remove(select.selectedIndex)

        // buat element input untuk nanti di php di eksekusi
        let inputIdSiswaHidden = document.createElement('input')
        inputIdSiswaHidden.setAttribute('type', 'hidden')
        inputIdSiswaHidden.setAttribute('class', 'inputIdSiswa')
        inputIdSiswaHidden.setAttribute('name', 'idSiswa' + tableRowLength)
        inputIdSiswaHidden.setAttribute('value', idSiswa)
        inputIdSiswaHidden.setAttribute('id', 'idSiswa' + tableRowLength)

        // element input yang baru dibuat diatas taruh sebelum inputtotal 
        document.querySelector('.inputHidden').insertBefore(inputIdSiswaHidden, inputTotalSiswaCreated)
        
        // replace value dari inputan total siswa yang ada di table
        inputTotalSiswaCreated.setAttribute('value', tableRowLength)
        
    }
})

function deleteThisRowThenTakeBackToSelect(row) {
    // ambil data dari row yang dihapus
    let nisSiswa = tableDataSiswa.rows[row].cells[1].innerHTML
    let namaSiswa = tableDataSiswa.rows[row].cells[2].innerHTML

    // buat element option
    let option = document.createElement("option");
    option.text = namaSiswa
    option.setAttribute('data-nis', nisSiswa)

    // taruh optionnya di select
    select.add(option, select[1])

    // delete row yang dimaksud dan kurangi total lenghth rownya
    tableDataSiswa.deleteRow(row)

    // hilangkan input element itu
    document.getElementById('idSiswa' + row).remove()

    // kurangi total row -1
    tableRowLength--
    
    // kurangi yang di total
    inputTotalSiswaCreated.setAttribute('value', tableRowLength)

    inputIdSiswaClass = document.querySelectorAll('.inputIdSiswa')
    
    // pas di delete semua cell dan input hidden jadi no. nya berurutan
    for (let i = 0; i < tableRowLength; i++) {
        tableDataSiswa.rows[i + 1].cells[0].innerHTML = i + 1
        // urutkan attributnya
        inputIdSiswaClass[i].setAttribute('name', 'idSiswa'+(i+1))
        inputIdSiswaClass[i].setAttribute('id', 'idSiswa'+(i+1))
        
    }

}