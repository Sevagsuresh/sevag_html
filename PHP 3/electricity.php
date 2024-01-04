<html>
<head>
<title>Bill</title>
</head>
<body>
<h2><center><b>Electricity Bill</center></b></h2>
<form method="post" action="#">
Consumer ID :<input type="number"name="id"></br>
Name:<input type="text" name="name"></br>
Units Consumed :<input type="number" name="units"><br>
<input type="submit">
<input type="reset"> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$id=$_post['id'];
$consumerName=$_post['name'];
$unitsConsumed=$_post['units'];
echo"<h2><center><b>Electricity Bill</center></b></h2>";
echo"Consumer ID :".$id."<br>";
echo"Consumer Name :".$name."<br>";
echo"Units Consumed :".$units."<br>";
if($units<=100)
{
$amt=$unit*3;
}
else if($units>100 && $units<=200)
{
$amt=$units*4;
}
else if($units>200 && $units <=300)
{
$amt =$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4>Total:Rs.".($amt)."</h4><br>";
}
?>
</body>
</html>

