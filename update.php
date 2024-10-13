<a href="delete.php">
    <input type="button" value="delete">
</a>
<?php
$acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$p=(int)$_POST['num'];
$q=$_POST['purpose'];
$s=(int)$_POST['bp'];
$r=$_POST['treatment'];
$t=$_POST['ambulance'];
$insert="update student set purpose='$q',bp=$s,treatment='$r',ambulance='$t' where reg_no=$p";
if (mysqli_query($acclink,$insert)){
    echo "Records added sucessfully";
}
else{ 
    echo " Records added unsucessfully";
}
mysqli_close($acclink);
?>
