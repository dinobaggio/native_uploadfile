<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    <button onclick="list()">View List File</button><br/><br/>
    <form method="POST" action="add_file.php" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" />
        <input type="submit" value="upload" />
    </form>
    <script>
        let list = function () {
            window.open('v_list.php', '_self');
        }
    </script>
</body>
</html>