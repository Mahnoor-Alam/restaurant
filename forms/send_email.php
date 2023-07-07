<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  // You can process and store the order data in your backend/database here

  // Generate the confirmation message
  $confirmationMessage = "your message is sent, " . $name . "!";

  // Return the confirmation message as JSON response
  header("Content-Type: application/json");
  echo json_encode(array("confirmationMessage" => $confirmationMessage));
}
?>
