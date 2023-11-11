<?php
$servername = "localhost"; // Replace with your server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "StudentRegistration"; // Replace with your database name

// Function to sanitize input data
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Prepare and send email
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

    $headers = "From: sender@example.com\r\n"; // Replace with your email address
    $headers .= "Reply-To: sender@example.com\r\n"; // Replace with your email address

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "A confirmation email has been sent to $email.<br>";
    } else {
        echo "Failed to send confirmation email.<br>";
    }

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // SQL to insert data into the database
    $sql = "INSERT INTO Registrations (enrollmentDate, name, address, city, state, zip, phone, email, course, location, fee, paymentMethod) 
            VALUES ('$enrollmentDate', '$name', '$address', '$city', '$state', '$zip', '$phone', '$email', '$course', '$location', '$fee', '$paymentMethod')";

    // Attempt to insert data into the database
    if ($conn->query($sql) === TRUE) {
        echo "Registration details successfully stored in the database.";
    } else {
        echo "Failed to store registration details in the database: " . $conn->error;
    }

    $conn->close();
}
?>
<?php
$servername = "localhost"; // Replace with your server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "StudentRegistration"; // Replace with your database name

// Function to sanitize input data
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Prepare and send email
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

    $headers = "From: sender@example.com\r\n"; // Replace with your email address
    $headers .= "Reply-To: sender@example.com\r\n"; // Replace with your email address

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "A confirmation email has been sent to $email.<br>";
    } else {
        echo "Failed to send confirmation email.<br>";
    }

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // SQL to insert data into the database
    $sql = "INSERT INTO Registrations (enrollmentDate, name, address, city, state, zip, phone, email, course, location, fee, paymentMethod) 
            VALUES ('$enrollmentDate', '$name', '$address', '$city', '$state', '$zip', '$phone', '$email', '$course', '$location', '$fee', '$paymentMethod')";

    // Attempt to insert data into the database
    if ($conn->query($sql) === TRUE) {
        echo "Registration details successfully stored in the database.";
    } else {
        echo "Failed to store registration details in the database: " . $conn->error;
    }

    $conn->close();
}
?>
