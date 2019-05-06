<?php 

	include('conn.php');

function tambah_br(){
	
	global $con;

	$id = htmlspecialchars(strip_tags($_POST['kode']));
	$nama = htmlspecialchars(strip_tags($_POST['nama']));
	$harga = htmlspecialchars(strip_tags($_POST['harga']));
	$desc = htmlspecialchars(strip_tags($_POST['deskripsi']));
	$kat = htmlspecialchars(strip_tags($_POST['kategori']));
	$tgl = htmlspecialchars(strip_tags($_POST['tgl']));
	$tags = htmlspecialchars(strip_tags($_POST['tags']));
	$rev = htmlspecialchars(strip_tags($_POST['rev']));
	$media = htmlspecialchars(strip_tags($_POST['media']));
	$file = upload();
	
	

	$query = "INSERT INTO template VALUES ('$id','$nama','$file','$desc','$tgl','$harga','$tags','R-$rev','$media','$kat')";
	mysqli_query($con, $query);
	
	}

function upload(){

	global $con;
	$namafile = $_FILES['images']['name'];
	$ukuran = $_FILES['images']['size'];
	$error = $_FILES['images']['error'];
	$tmpname = $_FILES['images']['tmp_name'];
	

	if ($error === 4) {
		# code...
		echo "<script>alert('Pilih Gambar Terlebih Dahulu')</script>";
		return false;

	}
	
	$ekstensi = ['jpg','jpeg','png'];
	$ext = explode('.', $namafile);
	$extlamp = strtolower(end($ext));
	
	if (!in_array($extlamp, $ekstensi)) {
		# code...
		echo "<script>alert('Ekstensi Lampiran tidak Ada')</sript>";
		return false;
	}

	if ($ukuran > 1000000) {
		# code...
		echo "<sciprt>alert('Ukuran Lampiran file terlalu besar')</script>";
		return false;

	}
 
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $extlamp;
 
	move_uploaded_file($tmpname, 'images/' . $namafilebaru);

	return $namafilebaru;
	
}


function edit_br($id){

	global $con;

	$barang = htmlspecialchars(strip_tags($_POST['nama']));
	$desc = htmlspecialchars(strip_tags($_POST['deksripsi']));
	$harga = htmlspecialchars(strip_tags($_POST['harga']));
	$kategori = htmlspecialchars(strip_tags($_POST['kategori']));

	if ($_FILES['images']['error'] === 4) {
		 $lampiran = $lampiranlama;
	} else {
		 $lampiran = upload();
	}
	
	$query = "UPDATE barang SET nama_barang, description, images, harga, id_kategori values('$barang','$desc','$harga','$kategori') where kode_barang='$id'"; 
	mysqli_query($con, $query);

	}
	

?>