<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Message Form</title>
</head>
<body>
    <h2>Guest Message Form</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
