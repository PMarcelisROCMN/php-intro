<?php
// Include the GuestMessage class
include 'GuestMessage.php';

// Function to save GuestMessage data to JSON file
function saveGuestMessageToJson($guestMessage) {
    // Read existing JSON data from file
    $jsonData = file_get_contents('guest_messages.json');
    
    // Decode JSON data into PHP array
    $data = json_decode($jsonData, true);

    // [
    // 'naam' => "Peter",
    // 'bericht' => "Bericht",
    // ]
    
    // Add new message to array
    $data[] = array(
        'userName' => $guestMessage->getUserName(),
        'message' => $guestMessage->getMessage(),
        'imagePath' => $guestMessage->getImagePath()
    );
    
    // Encode data to JSON format
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    
    // Save JSON data to file
    file_put_contents('guest_messages.json', $jsonData);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $message = $_POST['message'];
    
    // Check if an image has been selected
    if (!empty($_FILES["image"]["name"])) {
        // Upload image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $imagePath = $target_file;
    } else {
        $imagePath = ""; // Set image path to empty string if no image selected
    }


    
    // Create GuestMessage object
    $guestMessage = new GuestMessage($username, $message, $imagePath);
    
    // Save GuestMessage data to JSON file
    saveGuestMessageToJson($guestMessage);
    
    // echo "Message saved successfully!";
    header('Location: index.php');
}
?>
