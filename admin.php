<html>
    <head>
    <style>
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
    }
    .container label {
      display: block;
      margin-bottom: 10px;
    }
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    .container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
    }</style></head>
        <body><br><br><br><br><br><br><br><br>
        <div class="container">    
        <center><h1> ADMIN PAGE </h1></center>
        <form method="POST" action="adminpage.php">
            ADMIN:<br>
            <input type="text" name="admin"><br>
            PASSWORD:<br>
            <input type="text" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

<input type="submit">
</form></div>
</body>
<html>