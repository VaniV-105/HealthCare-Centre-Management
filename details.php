<style>
h3{color:purple;}
h1{color:blue;}
body{background-image: url('detail.jpg');
    background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
</style>
<?php
$acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$a=$_POST['user'];
$b=$_POST['pass'];

    $select="select * from student where  reg_no=$a and username=$a and password in ('$b')";
    if (mysqli_query($acclink,$select))
    { "Records select succesfully";
    
    $result=mysqli_query($acclink,$select);
    if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_array($result)) {
    echo "  <hr> <center><h1>HIII $row[NAME]</h1></center><hr>
      <h3>  NAME: </h3> 
        $row[NAME]<br>
    <h3>REGISTER NUMBER:</h3>
$row[reg_no]<br>
<h3>YEAR: </h3>
$row[year]<br>
<h3>BP:</h3>

    $row[bp]<br>
    <h3>BLOOD_GROUP:</h3>
    $row[bloodgroup]<br>
    <h3>BMI :</h3>  
      $row[bmi]<br>
      <h3>  CONTACT :</h3> 
    $row[phone_no]<br>
    <h3>ALLERGY:</h3>
    $row[allergy]<br>
    <h3>GURDIAN NAME:</h3>
    $row[guardian_Name]<br>
    <h3> GURDIAN CONTACT:</h3>
    $row[guardian_contact]<br>
    <h3>PATIENT PLACE:</h3>
$row[patient_place]<br>
    <h3>HOSPITAL PLACE</h3>
    $row[hospital_place]<br>
    <h3>AMBULANCE</h3>
    $row[ambulance]<br>
    <h3>PURPOSE</h3>
    $row[purpose]<br>
    <h3>TREATMENT</h3>
    $row[treatment]<br>

    ";
    }}
    else{ echo 'your password or register number is wrong';}
  }
  else{echo 'username sno founded';}
    
  
?>