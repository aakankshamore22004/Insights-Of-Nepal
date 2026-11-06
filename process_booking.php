<?php
// Initialize messages
$contactSuccess = "";
$contactError   = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contactSubmit'])) {

    // Collect & sanitize form data
    $name        = trim($_POST['name'] ?? "");
    $email       = trim($_POST['email'] ?? "");
    $phone       = trim($_POST['phone'] ?? "");
    $destination = trim($_POST['destination'] ?? "");
    $travelDate  = trim($_POST['travelDate'] ?? "");
    $people      = trim($_POST['people'] ?? "");
    $message     = trim($_POST['message'] ?? "");

    // Validation
    if (
        empty($name) ||
        empty($email) ||
        empty($phone) ||
        empty($destination) ||
        empty($travelDate) ||
        empty($people)
    ) {
        $contactError = "❌ Please fill in all required fields.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $contactError = "❌ Please enter a valid email address.";
    }
    elseif (!preg_match("/^[0-9+ ]{7,}$/", $phone)) {
        $contactError = "❌ Invalid phone number.";
    }
    elseif ($people < 1 || $people > 20) {
        $contactError = "❌ Number of travelers must be between 1 and 20.";
    }
    else {
        // SUCCESS
        $contactSuccess = "✅ Booking submitted successfully! We will contact you soon.";

        // (Later you can add MySQL insert or email here)
    }
}

/
include "index.php";
?>
