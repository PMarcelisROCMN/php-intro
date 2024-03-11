<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_information.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name"> naam
        <br>
        <input type="text" name="message"> bericht
        <br>
        <input type="file" name="fileToUpload" >
        <br>
        <input type="submit" value="verstuur informatie" name="submit">
    </form>

    <?php
    include 'get_messages.php';
    echo $htmlString;
    ?>
</body>
</html>