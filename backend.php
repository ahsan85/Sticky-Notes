<?php
var_dump($_GET);


$connection = mysqli_connect("localhost", "root", "root", "sticky_notes");
if (isset($_GET['text']) && empty($_GET['id'])) {
    $get_data = mysqli_real_escape_string($connection, $_GET['text']);
    $sql = "INSERT INTO data (body) VALUES ('$get_data')";
    mysqli_query($connection, $sql);

    echo 'Success';
}
if (isset($_GET['text']) && isset($_GET['id'])) {
    $get_data = mysqli_real_escape_string($connection, $_GET['text']);
    $get_id = $_GET['id'];
    $update_result = "UPDATE  data SET body=' $get_data'  WHERE id='$get_id'";
    mysqli_query($connection, $update_result);

    echo 'Success';
}
?>

