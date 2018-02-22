<?php 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if ($id<=0) {
        die("wrong id");
    }
    $query = "SELECT `data`, `name`, `mime`, `size`
    FROM `file` WHERE id='$id'";
    require 'koneksi.php';
    $tugas = $kon->prepare($query);
    $tugas->execute();
    if ($tugas->rowCount() == 1) {
        $row = $tugas->fetch(PDO::FETCH_OBJ);
        header("Content-Type: ".$row->mime);
        header("Content-Length: ".$row->size);
        header("Content-Disposition:attachment;filename=".$row->name);
        echo $row->data;
    } else {
        die("wrong data");
    }

} else {
    die("no id");
}