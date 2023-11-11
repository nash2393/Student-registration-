<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize input data
    function sanitize($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Collect and sanitize input data
    $enrollmentDate = sanitize($_POST['enrollmentDate']);
    $name = sanitize($_POST['name']);
    $address = sanitize($_POST['address']);
    $city = sanitize($_POST['city']);
    $state = sanitize($_POST['state']);
    $zip = sanitize($_POST['zip']);
    $phone = sanitize($_POST['phone']);
    $email = sanitize($_POST['email']);
    $course = sanitize($_POST['course']);
    $location = sanitize($_POST['location']);
    $fee = sanitize($_POST['fee']);
    $paymentMethod = sanitize($_POST['paymentMethod']);

    // Prepare email content
    $headers = "From: pariharnishantsingh2393@gmail.com" . "\r\n";  // Replace with your email address
    $headers .= "Reply-To: spariharnishantsingh2393@gmail.com" . "\r\n";  // Replace with your email address
    $headers .= "X-Mailer: PHP/" . phpversion();
    $to = $email;
    $subject = "Registration Confirmation";
    $message = "Thank you for registering. Here are your details:\n";
    $message .= "Name: $name\n";
    $message .= "Enrollment Date: $enrollmentDate\n";
    $message .= "Address: $address, $city, $state, $zip\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Course: $course\n";
    $message .= "Location: $location\n";
    $message .= "Fee: $fee\n";
    $message .= "Payment Method: $paymentMethod\n";

    // Send email
    if(mail($to, $subject, $message)) {
        echo "Registration successful. A confirmation email has been sent to $email.";
    } else {
        echo "Failed to send confirmation email.";
    }
}
?>
