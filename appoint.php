<html>
    <head>
    <style>
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
  

  </style>
        <form method='POST'>
            REGISTER NUMBER:<br>
            <input type="text" name="num"><br>
            APPOINTMENT:<br>
            <input type="text" name="appoint"><br><br>
            <input type="submit">
            </form></head>
            
            
            <body>
<?php


    $acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$a=(int)$_POST['num'];
$b=$_POST['appoint'];
$select="update admin set  appointment='$b' where reg_no=$a";
if (mysqli_query($acclink,$select))
{echo "Records update succesfully";}
else{echo 'no records update';}
$select='select * from admin';
if (mysqli_query($acclink,$select))
{echo "Records select succesfully";}
else{echo 'no records select';}
$result=mysqli_query($acclink,$select);
if (mysqli_num_rows($result)>0)

{
    echo "<br><br><br><br><center><br><table border='1'>";
  echo "<tr>
 
  <th> REGISTER NUMBER</th>
 <th>PURPOSE</th>
 <th>APPOINTMENT</th>

   </tr> </center>"  ;

while($row = mysqli_fetch_array($result)) {
echo "<tr>

<td>$row[reg_no]</td>
<td>$row[purpose]</td>
<td>$row[appointment]</td>
</center>
";}}


mysqli_free_result($result);
mysqli_close($acclink);


?></body>
            
            
            </html>
