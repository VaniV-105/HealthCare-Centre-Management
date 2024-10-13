<HTML><form method="POST">
    DELETE REGISTER NUMBER:
    <input type="text" name="num"></form>
    <input type="submit"></form>
  <BODY>  <?php
$acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$a=(INT)$_POST['num'];

$insert="delete from student where reg_no=$a ";
if (mysqli_query($acclink,$insert)){
    echo "Records DELETE sucessfully";
}
else{ 
    echo " Records DELETE unsucessfully";
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

?></BODY></HTML>