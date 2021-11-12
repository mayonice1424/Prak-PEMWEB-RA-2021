<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <CENTER><h3>Tambah Data</h3></CENTER>
     <form method="post" class="tambah_data">	
            <label>NIM</label>
            <input type="text" name="NIM"><br>
            <label>Nama</label>
            <input type="text" name="Nama"><br>
            <label>Prodi</label>
            <input type="text" name="Prodi"><br>
            <label>Angkatan</label>
            <input type="text" name="Angkatan"><br>    
          <button class="btnSave">Simpan</button>
     </form>
     <hr>
     <CENTER><h3>Hapus Data</h3></CENTER>
     <form method="post" class="hapus_data">
         <label>NIM</label>
         <input type="text" name="NIM"><br>
         <button class="btnDel">Simpan</button>         
    </form>
    <hr>
    <CENTER><h3>Edit Data</h3></CENTER>
        <form method="post" class="edit_data">	
            <label>NIM</label>
            <input type="text" name="nim"><br>
            <label>Nama</label>
            <input type="text" name="nama"><br>
            <label>Prodi</label>
            <input type="text" name="Prodi"><br>
            <label>Angkatan</label>
            <input type="text" name="angkatan"><br>    
          <button class="btnUp">Simpan</button>
        </form>

        <table align="center" border=1>

        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="fungsi.js"></script>
    </body>
    
</html>