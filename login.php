<html><head><style>
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
    }
p.inset {border-style: inset;}</style>
</head></html>
<?php
$acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$a=(int)$_POST['id'];
$b=$_POST['num'];
$c=(int)$_POST['age'];

$e=$_POST['bg'];
$f=(int)$_POST['bmi'];
$g=(int)$_POST['contact'];
$h=$_POST['all'];
$i=$_POST['gnum'];
$j=(int)$_POST['cell'];
$insert="update student set NAME='$b',year=$c,bloodgroup='$e',bmi=$f,phone_no='$g',allergy='$h',guardian_Name='$i',guardian_contact='$j' where reg_no=$a";

if (mysqli_query($acclink,$insert))
{echo '
    <br><br><br><br><br><div class="container">
    <center> SIGNIN PAGE </center>
    <form action="details.php" method="POST">
    REGISTER NAME:<br>
    <input type="text" name="user" pattern=".{8,}" title="Eight or more characters" required><br>
    PASSWORD:<br>
    <input type="text" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    <input type="submit" value="signin">

</form>
    ';}

else{
    echo "unable to exicute quary" . mysqli_connect_error();
    echo "$insert";
}
?>