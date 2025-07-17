<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];

  // Validate data (example: check if title is not empty)
  if (empty($title)) {
    echo "Title cannot be empty";
    exit;
  }

  // Database connection and insertion (example using MySQLi)
  $conn = new mysqli("localhost", "username", "password", "database");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";
  if ($conn->query($sql) === TRUE) {
    echo "Article submitted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>
