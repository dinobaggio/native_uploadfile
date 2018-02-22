<?php


require "koneksi.php";


$query = "SELECT `id`, `name`, `mime`, `size`, `created` FROM `file`";
$tugas = $kon->prepare($query);
$tugas->execute(); ?>

<button onclick="upload()">Upload another file</button> <br/><br/>

<?php

echo '<table width="100%">
<tr>
    <td><b>Name</b></td>
    <td><b>Mime</b></td>
    <td><b>Size (bytes)</b></td>
    <td><b>Created</b></td>
    <td><b>&nbsp;</b></td>
</tr>';

while ($row = $tugas->fetch(PDO::FETCH_OBJ)) {
    echo "<tr>
        <td>$row->name</td>
        <td>$row->mime</td>
        <td>$row->size</td>
        <td>$row->created</td>
        <td><button onclick='download($row->id)'>Download</button></td>
    </tr>";
}

echo "</table>";

?>

<script>

let download = function (id) {
    window.open('download.php?id='+id, "_self");
}

let upload = function () {
    window.open('v_upload.php', '_self');
}

</script>

