      <?php
$a=$_POST['admin'];
$b=$_POST['pass'];
if($a=="MIT Campus" and $b=="MITCampus@123"){

    $acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}

$select='select * from student';
if (mysqli_query($acclink,$select))
{echo "Records select succesfully";}
else{echo 'no records select';}

$result=mysqli_query($acclink,$select);
if (mysqli_num_rows($result) > 0)

{
    echo "<br><br><br><br><center><br><table border='1'>";
  echo "<tr>
  <th> NAME </th>
  <th> REGISTER NUMBER</th>
  <th> YEAR </th>
  <th> BP</th>
  <th> BLOOD_GROUP</th>
  <th> BMI </th>
  <th> CONTACT </th>  
  <th>ALLERGY</th>
  <th>GURDIAN NAME</th>
  <th>GURDIAN CONTACT</th>
 <th>USERNAME</th>
 <th>PASSWORD</th>
 <th>PATIENT PLACE</th>
 <th>HOSPITAL PLACE</th>
 <th> AMBULANCE</th>
 <th>PURPOSE</th>
 <th>TREATMENT</th>
   </tr> </center>"  ;

while($row = mysqli_fetch_array($result)) {
echo "<tr>
<td>$row[NAME]</td>
<td>$row[reg_no]</td>
<td>$row[year]</td>
<td>$row[bp]</td>
<td>$row[bloodgroup]</td>
<td>$row[bmi]</td>
<td>$row[phone_no]</td>
<td>$row[allergy]</td>
<td>$row[guardian_Name]</td>
<td>$row[guardian_contact]</td>
<td>$row[username]</td>
<td>$row[password]</td>
<td>$row[patient_place]</td>
<td>$row[hospital_place]</td>
<td>$row[ambulance]</td>
<td>$row[purpose]</td>
<td>$row[treatment]</td>
</center>
";
}}
else{echo 'query not excicutted';}
mysqli_free_result($result);
mysqli_close($acclink);
}
else{ echo "<p>your username and password is wrong<p>";}
?>


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
  

  </style>
    <head>
        <form method='POST' action="update.php">
            REGISTER NUMBER:<br>
            <input type="text" name="num"><br>
            PURPOSE:<br>
            <input type="text" name="purpose"><br>
            BP:<br>
            <input type="text" name="bp"><br>

            TREATMENT:<br>
            <input type="text" name="treatment"><br>
            AMBULANCE NO:<BR>
            <INPUT TYPE="text" name="amb"><br>
            <input type="submit"></form></head>
            <a href="appoint.php"><input type="button" value="appointment"></a><br><br><br><br><br>
</html>