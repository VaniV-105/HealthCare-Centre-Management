<html>
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
    .container input[type="button"],
    .container input[type="submit"]{
      background-color:lightblue;
    }
    
p.inset {border-style: inset;}</style>
<body>  <br><br><br><br><br><div class="container">
    <h1 style='color:blue'> <center>SIGNIN PAGE </center></h1>
<form action="logs.php"    method="POST">
    REGISTER NUMBER:<br>
    <input type="number" name="user" pattern=".{8,}" title="Eight or more characters" required><br>
    PASSWORD:<br>
    <input type="text" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    <input type="submit" value="SIGNIN" >
    <a href="login.php"><input type="button" value="login"></a>

    <a href="hospital.html"><input type="button" value="Back"></a>

   

</form>
</DIV></body>

</html>