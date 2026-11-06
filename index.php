<?php
// Show all errors (very helpful while learning)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize messages
$successMsg = "";
$errorMsg   = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize inputs
    $name        = htmlspecialchars(trim($_POST['name'] ?? ""));
    $email       = htmlspecialchars(trim($_POST['email'] ?? ""));
    $phone       = htmlspecialchars(trim($_POST['phone'] ?? ""));
    $destination = htmlspecialchars($_POST['destination'] ?? "");
    $travelDate  = htmlspecialchars($_POST['travelDate'] ?? "");
    $people      = htmlspecialchars($_POST['people'] ?? "");
    $message     = htmlspecialchars(trim($_POST['message'] ?? ""));

    // Validation
    if ($name === "" || $email === "" || $phone === "" || 
        $destination === "" || $travelDate === "" || $people === "") {

        $errorMsg = "❌ Please fill all required fields.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errorMsg = "❌ Invalid email format.";

    } else {

        $successMsg = "✅ Booking submitted successfully!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tour Booking</title>
    <style>
        .success { color: green; font-weight: bold; }
        .error   { color: red; font-weight: bold; }
        label    { display: block; margin-top: 10px; }
    </style>
</head>
<body>

<h2>Tour Booking Form</h2>

<?php if ($successMsg): ?>
    <p class="success"><?= $successMsg ?></p>
<?php elseif ($errorMsg): ?>
    <p class="error"><?= $errorMsg ?></p>
<?php endif; ?>

<form method="POST" novalidate>
    <label>Full Name *</label>
    <input type="text" name="name" required>

    <label>Email *</label>
    <input type="email" name="email" required>

    <label>Phone *</label>
    <input type="tel" name="phone" required>

    <label>Destination *</label>
    <select name="destination" required>
        <option value="">-- Choose --</option>
        <option>Himalayas</option>
        <option>Pokhara</option>
        <option>Kathmandu</option>
        <option>Lumbini</option>
    </select>

    <label>Travel Date *</label>
    <input type="date" name="travelDate" required>

    <label>People *</label>
    <input type="number" name="people" min="1" max="20" required>

    <label>Message</label>
    <textarea name="message"></textarea>

    <br><br>
    <button type="submit">Submit Booking</button>


</form>

</body>
</html>
