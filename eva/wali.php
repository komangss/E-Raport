<!DOCTYPE html>
<html>
<head>
	<title>Create Rapot</title>
	<link rel="stylesheet" href="wali.css">
</head>
<body>

<table width="100%" >
	<th class="header">
      <p> Create Rapot </p>
  </th>
<tr>
	<td class="body">
      <div class="pilih">
        <table class="create" width="100%" >
          <tr>
            <td class="create" colspan="4">
              <p class="kelas">Pilih Siswa Dari Kelas Anda</p>
           </td>
          </tr>
          <tr>
            <td width="100%" colspan="4">
              <select class="siswa" type="text">
                <option value="">Pilih Siswa</option>
               <option value="">Angga Tusan Adji (01)</option>
               <option value="">Antonio Komang Yudistira (02)</option>
               <option value="">Evangelista Cahyaningrum (04)</option>
             </select>
            </td>
            <td width="100%"></td>
          </tr>
          <tr>
            <td class="create" colspan="4" >
              <p class="kelas">Pilih Mata Pelajaran</p>
           </td>
          </tr>
          <tr>
            <td width="100%" colspan="4" >
              <select class="siswa" type="text">
                <option value="">Pilih Mata Pelajaran</option>
               <option value="">PBO</option>
               <option value="">PWPB</option>
               <option value="">PKK</option>
             </select>
            </td>
            <td width="100%"></td>
          </tr>
          <tr>
            <td class="create" colspan="4" >
              <p class="kelas">Nilai Siswa</p>
           </td>
          </tr>
          <tr>
              <td class="nilai">
                <div class="teori">
                  <p>Teori</p>
                  <input type="number" placeholder="0-100" class="input">
                </div>
              </td>
              <td class="nilai">
                <div class="teori">
                  <p>Keterampilan</p>
                  <input type="number" placeholder="0-100" class="input">
                </div>
              </td>
              <td class="nilai">
                <div class="teori">
                 <p>Sikap</p>
                 <input type="number" placeholder="0-100" class="input">
                </div>
              </td>
              <td class="nilai">
                <div class="teori">
                 <p>Total</p>
                 <input type="number" placeholder="0-100" class="input">
                </div>
              </td>
          </tr>
            <tr>
              <td>
                <input type="submit" name="submit" value="Tambahkan" class="tambahkan">
              </td>
            </tr>
        	</table>
        	</table>
</body>
</html>