<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Page</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
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
      form {
        margin-top: 20px;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type=text],
      input[type=tel] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }
      button[type=submit] {
       display: block;
        width: 100%;
        padding: 10px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Create a New Page</h1>
      <form>
        <label for="page-name">Name of Page:</label>
        <input type="text" id="page-name" name="page-name" required>
        <label for="phone-number">Phone Number to Contact:</label>
        <input type="tel" id="phone-number" name="phone-number" required>
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </body>
</html>