<html>
<head><style>
  h1{  font-family: 'Niconne', cursive;
  color:darkblue;}
         form{
 font-family:cursive;
font-size:30px;}
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
  
input {
  width: 50%;
  padding: 24px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  font-size: 20px;}
  select{ width: 50%;
  padding: 24px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  font-size: 20px;

  }
  
input[type=button] {
    size:12.5%;
    font-size: 20px;
  background-color: green;
  color: white;
}
  input[type=submit] {
    size:12.5%;
    font-size: 20px;
  background-color: green;
  color: white;
}
  </style></head>
    <body>

    <?php 
 $a=(int)$_POST["user"];
$b=$_POST["pass"];

$acclink=mysqli_connect('localhost','root','','healthcare');
if($acclink==FALSE)
{
    die('ERROR:could not connect'.mysqli_connect__error());
}
$update="insert into student(reg_no,username,password) values($a,$a,'$b')";           
if (mysqli_query($acclink,$update))
{echo"records added sucessfully";}
else
  {echo " no records ";}

?>
  <form action="login.php" method="POST"><br>
<center><h1>STUDENT LOGIN PAGE</h1></center>

            NAME:<span>*</span><br>
            <input type="text" name="num" required>
            <br>REGISTER NUMBER:<span>*</span> <br>
            <input type="text" name="id" required min="10" max="10">
            <br>
            GENDER:<span>*</span>
            <br>
            <select name="gen" required>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
                <option value="OTHER">OTHER</option>
               </select>          <br>
            YEAR:<span>*</span>
            <br>
            <select name="age" required>
                <option value="1ST">1ST</option>
                <option value="2ND">2ND</option>
                <option value="3RD">3RD</option>
                <option value="4TH">4TH</option>  </select>          <br>
         
            BLOOD_GROUP:<span>*</span>
            <br>
            <select name="bg" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
</select>

            <br>
        BMI:<span>*</span>
            <br>
            <input type="text" name="bmi">
            <br>
            PHONE NO:<span>*</span>
            <br>
            <input type="text" name="contact" required min="10" max="10">
           
<br>
            <br>
            ALLERGY:<span>*</span>
            <br>
            <select name="all"><option value="none" required>NONE</option>
                <option value="fish">FISH</option>
                <option value="oil">OIL</option>
                <option value="dest">DEST</option>
                <option value="peanut">PEANUT</option>
                <option value="brinjal">BRINJAL</option>
                <option value="pollen">POLLEN</option>

 </select>
            <br>
  GUARDIAN NAME:<span>*</span><br>
            <input type="text" name="gnum" required><br>

            GUARDIAN CONTACT:<span>*</span><br>
            <input type="text" name="cell" required min="10" max="10"><br>
            

            <input type="submit">
          
                  </form>
    </body>
</html>

