<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $customerName = $_POST["name"];
  $customerEmail = $_POST["email"];
  $menuItems = $_POST["phone"];
  $quantity = $_POST["quantity"];
  $quantity = $_POST["date"];
  // You can process and store the order data in your backend/database here

  // Generate the confirmation message
  $confirmationMessage = "Your order will be ready soon, " . $customerName . "!";

  // Return the confirmation message as JSON response
  header("Content-Type: application/json");
  echo json_encode(array("confirmationMessage" => $confirmationMessage));
}
?>
