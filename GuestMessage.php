<?php
class GuestMessage {
    private $userName;
    private $message;
    private $imagePath;

    // Constructor to set initial property values
    public function __construct($userName, $message, $imagePath) {
        $this->userName = $userName;
        $this->message = $message;
        $this->imagePath = $imagePath;
    }

    // Getter method for accessing userName (read-only)
    public function getUserName() {
        return $this->userName;
    }

    // Getter method for accessing message (read-only)
    public function getMessage() {
        return $this->message;
    }

    // Getter method for accessing imagePath (read-only)
    public function getImagePath() {
        return $this->imagePath;
    }
}
