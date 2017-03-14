<?php
include "connect.php";

// ===> UPLOAD GAMBAR <===
$id 		= mysql_real_escape_string($_POST['id']);
//folder tempet gambar
$target_dir = "assets/img/";
//target nama file di folder
$target_file = $target_dir . basename($_FILES["Images"]["name"]);
//masih keadaan oke
$uploadOk = 1;
//dapetin tipe file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// cek apakah gambar ato gambar palsu
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Images"]["tmp_name"]);
    if($check !== false) {
        echo "file adalah gambar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "file bukan gambar.";
        $uploadOk = 0;
    }
}
// cek apakah file sudah ada
if (file_exists($target_file)) {
    echo "Sorry, file sudah ada.";
    $uploadOk = 0;
}
// cek ukuran
if ($_FILES["Images"]["size"] > 500000) {
    echo "Sorry, file terlalu besar.";
    $uploadOk = 0;
}
// ijinkan format tertentu
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, hanya JPG, JPEG, PNG & GIF diijinkan.";
    $uploadOk = 0;
}
// cek jika upload = 0
if ($uploadOk == 0) {
    echo "Sorry, file tidak diupload.";
// jika uploadOk = 1 maka upload gambar
} else {
    if (move_uploaded_file($_FILES["Images"]["tmp_name"], $target_file)) {
        echo "File ". basename( $_FILES["Images"]["name"]). " sudah di upload.";
    } else {
        echo "Sorry, terjadi error saat upload file. ".basename( $_FILES["Images"]["name"]);
    }
}
// ===> END UPLOAD GAMBAR <===

$Update = "UPDATE users SET Images='".$target_file."' WHERE idUser='".$id."'";

if(mysqli_query($con, $Update)) {
    session_start();
    $_SESSION['Pesan'] = 'Uploaded Success!';
	?>
	<script language="JavaScript">
		document.location = 'UserProfile.php'
	</script>
	<?php
}else{
	echo "Error: " . $Update . "<br/>" . mysqli_error($con);
}
?>