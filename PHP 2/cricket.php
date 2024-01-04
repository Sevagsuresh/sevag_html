<html>
<center>
<?php
$name=["Mahendra singh Dhoni","Sachin Tendulkar","Gautham Gamber","Suresh Raina","Virendra Shewag","Virat kholi","Rohit Sharma","Shikkar Dhawan","Rishab Paude","Hrdik Pandya",];
echo "<h4> Cricket Team players name</h4>
<table border='1 px'>
<tr><th>sl no</th>
<th>Name</th></tr>";
for($i=0;$i<10;$i++)
{
$sl=$i+1;
echo "<tr><td>$sl</td><th>$name[$i]</th></tr>";
}
echo "</table>";
?>
