<?php
$email=$_POST['email'];
$conn=mysqli_connect("sql300.epizy.com","epiz_26180603","vxb05mg3","epiz_26180603_Subscribe");
$sql="INSERT INTO Subscriber(email) values('{$email}')";
if(mysqli_query($conn,$sql)){
	?><script>alert("Thank You for subscribing");</script>
<?php
}else{
	?><script>alert("Something went wrong");</script>
<?php
}
?>