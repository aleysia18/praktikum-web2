<?php
include "../connection.php";
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM Matakuliah WHERE id=$id");
header("Location:../admin/?page=matakuliah-show");
// echo "<meta http-equiv='refresh' content='0; url=../?page=mahasiswa-show'>";