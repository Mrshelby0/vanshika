<?php
$server = "localhost";
$username = "root";
// Replace "" with your actual database password (store securely using environment variables or a configuration file)
$password = "";
$database = "user";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error: Unable to connect to the database. Please check your connection parameters.");
}
<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "message"; // Adjusted to match the database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     else {
    echo "Form data not submitted.";
    }

$conn->close();
?>
