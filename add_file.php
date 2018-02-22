<?php

if(isset($_FILES['uploaded_file'])) {
    if($_FILES['uploaded_file']['error'] == 0){
        require 'koneksi.php';
        $name = $_FILES['uploaded_file']['name'];
        $mime = $_FILES['uploaded_file']['type'];
        $size = intval($_FILES['uploaded_file']['size']);
        $data = file_get_contents($_FILES['uploaded_file']['tmp_name']);

        $query = "INSERT INTO `file` (`name`, `mime`, `size`, `data`, `created`)
        VALUES (:name, :mime, :size, :data, NOW())";

        $tugas = $kon->prepare($query);
        $tugas->bindParam(':name', $name);
        $tugas->bindParam(':mime', $mime);
        $tugas->bindParam(':size', $size);
        $tugas->bindParam(':data', $data);
        //$tugas->bindParam(':created', $created);
        if ($tugas->execute()) {
            echo "<button onclick='upload()'>Upload another file</button> ";
            echo "<button onclick='list()'>View List File</button><br/><br/>";
            echo "berhasil input data";
        } else {
            echo "gagal input data";
        }



    } else {
        echo intval($_FILES['uploaded_file']['error']);
    }
}
?>

<script>

let list = function () {
    window.open("v_list.php", "_self");
}

let upload = function () {
    window.open("v_upload.php", "_self");
}


</script>