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
			+this['NIM']+"</td><td>"
			+this['Nama']+"</td><td>"
			+this['Prodi']+"</td><td>"
			+this['Angkatan']+"</td></tr>");
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