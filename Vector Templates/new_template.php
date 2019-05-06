<!DOCTYPE html>
<html>
<head>
<?php 
    include('conn.php');
?>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>New Template</title>
	  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="icon" type="image/png" href="images/icon1.png" />
</head>

<style>
    input,textarea,select{

        text-align: center;
        display: block;
        padding-top: 20px;
        margin-top: 20px;
        margin-left: 40%;
  
    }
</style>

<?php

    ini_set("display_errors", 1);
    include('function.php');


if(isset($_POST['submit'])){

    if(tambah_br($_POST) > 0){
        echo "<script>alert('Data Telah Ditambahkan')</script>";
    }else{
       echo "<script>alert('Data Telah Ditambahkan')</script>";
    }

}


?>
<body>

    <?php

            function randomkode($panjang){
                $letter = array_merge(range('0', '9'));
                $r = count($letter)-1;
                $kode = '';
                for ($i=0; $i < $panjang; $i++) { 
                    $index = mt_rand(0,$r);
                    $kode .= $letter[$index];   
                }
                return $kode;
            }


    ?>


<form style="display: block; position: absolute; top:50%; left:50%; transform:translate(-50%, -50%); border: 1px solid black; width: 60%; height: 80%;" class="box" method="post" action="" enctype="multipart/form-data">
	
	<h1 style="text-align:center;">New Template</h1>

	<input type="hidden" name="kode" value="<?php echo randomkode(10); ?>" /> 
    <input type="text" style="text-transform: lowercase;" name="nama" placeholder="Nama Template" /> 
	<input type="text" name="harga" value="" placeholder="Harga Template" />
    <input type="text" name="tags" value="" placeholder="#contoh #contoh_1" />
    <input type="hidden" name="rev" value="<?php echo rand(0,999999)?>"/>
    <input type="text" name="media" value="" placeholder="Media Contoh: Adobe" />
	<textarea name="deskripsi" value="" /></textarea>

                     <?php

            $host = "localhost";
            $db_name = "o_design";
            $username = "root";
            $password = "";
            $konek = mysqli_connect($host,$username,$password,$db_name);

            $query = "SELECT * FROM sub_kategori";

            $hasil = mysqli_query($konek, $query);

            echo "<select name='kategori' id='select' class='form-control'>";

            while ($qtabel = mysqli_fetch_assoc($hasil)) {
        
                echo "<option value='".$qtabel['id_sub']."'>".$qtabel['nama_sub']."</option>";        
            }


            echo "</select>";
            

            ?>
    <input type="hidden" name="tgl" value="<?php echo date('d M Y')?>" />
	<input type="file" name="images" value="100000">
	<input type="submit" name="submit">

<a href="dashboard.php">Back to Dashboard</a>
	
</form>
</body>
</html>