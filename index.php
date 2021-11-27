<!DOCTYPE html>
<html >
    <head>
        <title>Notes</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" stylesheet>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<link rel="stylesheet" type="text/css" href="index.css">  
</head>
    <body>
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1" ><h1 class="h1">My Notes!<h1></span>
    </div>
</nav>
    <h3 class=p-4>Tambah Notes</h3>
        <form method="post" class="tambah_data">	
            <label>Nama :</label><br>
            <input type="text" name="Nama"><br><br>
            <label>Nomor Catatan :</label><br>
            <input type="text" name="Nomor"><br><br>
            <label>Catatan :</label><br>
            <textarea type="text" name="Catatan"></textarea><br>
          <button class="btnSave">Simpan</button>
        </form>
  
     <h3 class=p-4>Hapus Notes</h3>
     <form method="post" class="hapus_data">
         <label>Nomor</label><br>
         <input type="text" name="Nomor"><br>
         <button class="btnDel">Simpan</button>         
    </form>

    <h3 class=p-4>Edit Notes</h3>
        <form method="post" class="edit_data">	
            <label>Nama</label><br>
            <input type="text" name="Nama"><br>
            <label>Nomor Catatan :</label><br>
            <input type="text" name="Nomor"><br>
            <label>Catatan</label><br>
            <textarea type="text" name="Catatan"></textarea><br>    
          <button class="btnUp">Simpan</button>
        </form>
        <table align="center" border=1>
        <footer class="bg-light-dark bg-primary text-center text-lg-start fixed-bottom ">
  <div class="text-center p-3" style="color:white">
    ©Copyright: Ilham Nofri Yandra
  </div>
</footer>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
         $(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}
 
function update() {
	$.getJSON("data.php", function(data) {
		$("table").empty();
		$.each(data.result, function() {
			$("table").append("<tr><td>"
			+this['Nama']+"</td><td>"
			+this['Nomor']+"</td><td>"
			+this['Catatan']+"</td></tr>");
		});
	});
}

$(".btnSave").click(function(){
	var data = $('.tambah_data').serialize();
	$.ajax({
		type: 'POST',
		url: "simpan.php",
		data: data,
		success: function() {
			alert('input data berhasil');
		}
	});
});

$(".btnDel").click(function(){
	var data = $('.hapus_data').serialize();
	$.ajax({
		type: 'POST',
		url: "delete.php",
		data: data,
		cache: false,
		success: function() {
			alert('hapus berhasil');
		}
	});
});

$(".btnUp").click(function(){
	var data = $('.edit_data').serialize();
	$.ajax({
		type: 'POST',
		url: "update.php",
		data: data,
		cache: false,
		success: function() {
			alert('update berhasil');
		}
	});
});
</script>
    </body>
    
</html>

