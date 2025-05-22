<?php
include "../connection.php";

$npm = $_POST['text_npm'];

//isi query delete
$sql = "DELETE FROM tbl_mahasiswa WHERE npm = '$npm'";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>