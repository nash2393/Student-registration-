README - Student Registration System
Project Overview
This project is a simple web-based Student Registration System developed using HTML, CSS, PHP, and MySQL. It includes a form for student registration that captures various details, stores them in a MySQL database, and sends a confirmation email to the student.

Prerequisites
MAMP (or any similar stack like XAMPP, LAMP) installed on your Mac.
Basic knowledge of PHP and MySQL.
Installation and Setup
Install MAMP:

Download MAMP from the official website: https://www.mamp.info
Follow the installation instructions.
Configure MAMP:

Launch MAMP from the Applications folder.
Go to Preferences > Ports and set Apache Port to 80 (optional) for ease of use.
Set the Document Root to the directory where you'll store your project files.
Start MAMP Servers:

Click on 'Start Servers' in MAMP.
Once the servers are running, MAMP will open the MAMP start page in your default web browser.
Create a MySQL Database:

On the MAMP start page, open phpMyAdmin.
Create a new database named StudentRegistration.
Import or create the required tables (Refer to the provided SQL setup script).
Project Files:

Place the project files (index.html, style.css, register.php) in the Document Root directory specified in MAMP.
Running the Project
Access the Project:

Open your web browser.
Navigate to http://localhost (or http://localhost:8888 if you're using default MAMP ports).
You should see the Student Registration Form.
Testing the Registration:

Fill in the form and submit.
Check your database in phpMyAdmin for the new entry.
Verify if the confirmation email is received (Note: Email sending may require additional server configuration).
Additional Configuration for Email Sending
The PHP mail() function is used for sending emails and might not work on local environments without proper configuration.
For testing email functionality locally, consider using tools like Mailhog or configuring a SMTP server.
Troubleshooting
Ensure MAMP servers are running and no other services are using the same ports.
Check the PHP and MySQL error logs in MAMP for any errors.
Make sure PHP and MySQL versions are compatible with the project requirements.