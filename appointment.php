<html>
<head><style>
  h1{  font-family: 'Niconne', cursive;
  color:darkblue;}
         form{
 font-family:cursive;
font-size:25px;}
div{
  font-family:cursive;
  font-size:10px;
  color:purple;
}
span{
  color:red;
}
body{ background-image: url('back.jpg'); 
 background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }

  </style></head>
    <form method="POST">
    REGISTER NUMBER:<br>

    <input type="number" name="num"><br>
    PURPOSE:<br>
<input type="text" name="purpose"><br>
<input type="submit"></form>

<body>
<?php


    $acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$a=(int)$_POST['num'];
$b=$_POST['purpose'];
$select="insert into admin (reg_no,purpose) values($a,'$b')";
if (mysqli_query($acclink,$select))
{echo "Records insert succesfully";}
else{echo 'no records insert';}
$select='select appointment from admin';
if (mysqli_query($acclink,$select))
{echo "Records select succesfully";}
else{echo 'no records select';}
$result=mysqli_query($acclink,$select);
if (mysqli_num_rows($result)>0)
{echo "Your appointment is $row[appointment]";
}
else{ echo "<p>your appointment is prosess ...<p>";}
mysqli_free_result($result);
mysqli_close($acclink);


?></body></html>