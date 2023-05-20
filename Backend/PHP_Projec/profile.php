<?php

require 'config.php';

$sql = "SELECT * FROM tb_user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // Fetch the client information as an associative array
  $clientInfo = $result->fetch_assoc();

  // Now you can access individual client details like $clientInfo['name'], $clientInfo['email'], etc.
} else {
  echo "No client found with ID: $clientID";
}

// Close the database connection
$conn->close();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
		background: #1877f2;      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      }
      h1 {
        text-align: center;
        color: #333;
      }
      ul {
        list-style: none;
        padding: 0;
      }
      li {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 100px;
        font-weight: bold;
      }
      span {
        font-weight: normal;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Welcome to My Website</h1>
      <?php if (!empty($clientInfo)): ?>
        <p><strong>Name:</strong> <?php echo $clientInfo['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $clientInfo['email']; ?></p>
        <!-- Add more profile information here -->
        <?php else: ?>
        <p>No client information found.</p>
      <?php endif; ?>
    </div>
  </body>
</html>