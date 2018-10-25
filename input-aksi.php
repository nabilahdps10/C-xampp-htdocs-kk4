
<?php
include 'koneksi.php';
$id = $_POST['Id'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$level = $_POST['Level'];
$fullname = $_POST['Fullname'];

$sql_insert="INSERT INTO user VALUES ('$Id','$Username','$Password','$Level', '$Fullname')";

mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>
