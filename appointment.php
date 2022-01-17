<?php
$db = mysqli_connect("localhost", "root", "", "clinic") or die("Unable to connect");
?>
<!doctype html>
<html>
<head>
<title>Book appointment</title>
<style>
    

    .wrap{
    width:600px;
    margin:auto;
       padding:5px;
    }
    
    form{
    border:1px dotted white;
    background-color:#FFFAF0;
    }

    h2{
    text-align:center;
    background:#4682B4;
    color:white;
    padding:10px;
    border-radius:10px;
    }
    input{
    padding:10px;
    margin:5px;
    border: 1px solid #4682B4;
    border-radius:5px;
    }
    input[type=text], radio,select{
      width: 50%;
      padding: 12px;
      border: 1px solid #4682B4;
      border-radius: 4px;
      margin-top: 6px;
      margin-bottom: 16px;
     
      
    }
    button {
      
      background-color:#4682B4;
      color: white;
      padding: 14px 20px;
      border: none;
	  border-radius:4px;
     
    }
	
	
    
    
    </style>
</head>
<body>
<script type="text/javascript">
function validateForm()
{
if(document.myForm.name.value=="") {
            alert( "Please enter patient name" );
            return false;
         }
if( /[a-zA-Z]+/.test(document.myForm.name.value)==false) {
            alert( "Please enter only alphabets for name" );
            return false;
         }
if(document.myForm.age.value=="") {
            alert( "Please enter patient age" );
            return false;
         }
if( /[0-9]+/.test(document.myForm.age.value)==false) {
            alert( "Please enter only numbers for age" );
            return false;
         }
if( document.myForm.age.value<0 || document.myForm.age.value>150 ) {
            alert( "Please enter valid age" );
            return false;
         }
if( document.myForm.g.value == "" ) {
            alert( "Please choose patient gender" );
            return false;
         }
if( document.myForm.doc.value == "" ) {
            alert( "Please choose a doctor" );
            return false;
         }
if( document.myForm.time.value == "" ) {
            alert( "Please choose timings" );
            return false;
			}
if( document.myForm.sym.value == "" ) {
            alert( "Please enter patient symptoms" );
            return false;
         }    
}
</script>
<div class="wrap">
<h1><u><b>Clinic Appointment Booking</b></u></h1>
<h2 align="center">Book an appointment:</h2>
<form name="myForm" onsubmit="return validateForm()" action="booking.php" method="post">
<table align=center>
<tr>
<td>Enter patient name</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>Enter patient age</td>
<td><input type="text" name="age"/></td>
</tr>
<tr>
<td>Select patient gender</td>
<td><input type="radio" name="gender" value="male"/>Male <br><input type="radio" name="gender" value="female"/>Female <br><input type="radio" name="gender" value="other"/>Other</td>
</tr>
<tr>
<tr>
<td>Select doctor</td>
<td>
<?php
$sql1="select name from doctors";
$res=mysqli_query($db, $sql1);
while ( $result = $res->fetch_assoc() ) {
	$docname=$result['name'];
	?>
	<input type="radio" name="doc" value="<?php echo $docname;?>"/><?php echo $docname;?> <br>
	<?php
}
?>
</td>
</tr>
<tr>
<tr>
<td>Select appointment timings</td>
<td>
<?php
$sql2="select timing from doctors";
$res=mysqli_query($db, $sql2);
while ( $result = $res->fetch_assoc() ) {
	$timings=$result['timing'];
	?>
	<input type="radio" name="time" value="<?php echo $timings;?>"/><?php echo $timings;?> <br>
	<?php
}
?>
</td>
</tr>
<tr>
<td>Enter symptoms</td>
<td><textarea name="sym" rows="8" cols="20"></textarea></td>
</tr>
<tr>
<td align=center colspan="2"><button type="submit" name="submit">Submit</button>   <button type="reset" >Reset</td>
</tr>
</table>
</div>
</form>
</body>
</html>