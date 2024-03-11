<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Messages</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Guest Messages</h2>
    <div class="messages">

        <?php
    // Read JSON data from file
    $jsonData = file_get_contents('guest_messages.json'); // dit is gewoon een lap tekst
    
    // Decode JSON data into PHP array
    $data = json_decode($jsonData, true);
    
    // Check if there are messages
    if (!empty($data)) {
        // Display messages
        foreach ($data as $messageData) {
            echo '<div class="message">';
            echo '<div class="avatar">';
            echo '<img src="' . (!empty($messageData['imagePath']) ? $messageData['imagePath'] : "/php-stuff/uploads/blank-picture.png") . '" alt="Avatar">';
                
            echo '</div>';
            echo '<div class="content">';
            echo '<p><strong>' . $messageData['userName'] . ':</strong></p>';
            echo '<p>' . $messageData['message'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No messages found.</p>';
    }
    ?>
</body>
</html>
