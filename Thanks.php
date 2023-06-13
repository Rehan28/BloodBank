<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: wheat;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      text-align: center;
    }

    h1 {
      color: #333;
      font-size: 28px;
      margin-bottom: 20px;
    }

    p {
      color: green;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thank You!</h1>
   
    <p>Your message has been received.</p>
    <a href="index.php" class="button">Go Back</a>
  </div>
</body>
</html>
