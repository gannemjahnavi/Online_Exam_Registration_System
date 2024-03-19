<?php
// Create or open the SQLite database
$db = new SQLite3('exam_registration.db');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $examType = $_POST["examType"];

    if (empty($name) || empty($email) || empty($examType)) {
        echo "Please fill in all fields";
        exit;
    }

    // Prepare SQL statement to insert data into the database
    $stmt = $db->prepare('INSERT INTO registrations (name, email, exam_type) VALUES (:name, :email, :examType)');
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':examType', $examType, SQLITE3_TEXT);

    // Execute the SQL statement
    $result = $stmt->execute();

    // Check if the insertion was successful
    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: Registration failed";
    }
}
?>
