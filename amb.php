<html>
    <style>
body
    {color:black; 

height: 800px;
background-image: url("logs.jpg");
background-color: #cccccc;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
position: relative;
font-family: Arial, Helvetica, sans-serif;

}
    </style>
    <body><center><br><br><br><br><br><br><br><br>
        <form method="POST">
            NAME:<br>
            <input type="text" name="name"><br>
            REGISTER NUMBER:<br>
            <input type="NUMBER" name="no"><br>
            PLACE TO PATIENT:<BR>
            <input type="text" name="patient"><br>
            PLACE TO HOSPITAL:<br>
            <input type="text" name="hospital"><br>
            <input type="submit">
        </form></center>
    </body>

<?php

$a=$_POST['no'];
$b=$_POST['patient'];
$c=$_POST['hospital'];

$acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}

$update="update student set patient_place='$b',hospital_place='$c' where reg_no=$a";

if (mysqli_query($acclink,$update))
{echo"records added sucessfully";}
else
  {echo " no records ";}

  $select="select * from student where  reg_no=$a and username=$a ";
    if (mysqli_query($acclink,$select))
    { "Records select succesfully";
    
    $result=mysqli_query($acclink,$select);
    if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_array($result)) {
    echo "  <hr> <center><h1>HIII $row[NAME]</h1></center><hr>
      <h3> YOUR AMBULANCE NUMBER IS: </h3> 
        $row[ambulance]<br>
   
    
    
    ";
    }}
    else{ echo 'your password or register number is wrong';}
  }
  else{echo 'username sno founded';}
    
  


?></html>