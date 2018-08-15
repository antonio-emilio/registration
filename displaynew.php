<?php

$host = 'localhost';
$port = '5432';
$database = 'postgres';
$user = 'postgres';
$password = 'ZEBRONICS';

$connectString = 'host=' . $host . ' port=' . $port . ' dbname=' . $database . 
	' user=' . $user . ' password=' . $password;


$link = pg_connect ($connectString);
if (!$link)
{
	die('Error: Could not connect: ' . pg_last_error());
}


$query = ' alter table stud add column K integer not null default 25 ';




$result = pg_query($query);


$i = 0;
echo '<html><body><table style = "border:2px solid black"><tr>';
while ($i < pg_num_fields($result))
{
	$fieldName = pg_field_name($result, $i);
	echo '<td style = "border:1px solid black border-collapse:collapse">' . $fieldName . '</td>';
	$i = $i + 1;
}
echo '</tr>';
$i = 0;

while ($row = pg_fetch_row($result)) 
{
	echo '<tr>';
	$count = count($row);
	$y = 0;
	while ($y < $count)
	{
		$c_row = current($row);
		echo '<td>' . $c_row . '</td>';
		next($row);
		$y = $y + 1;
	}
	echo '</tr>';
	$i = $i + 1;
}
pg_free_result($result);

echo '</table></body></html>';
//query 2:
/*$query1 = 'update stud set n=15 where project_preference="0"';

$result1 = pg_query($query1);
$i = 0;
echo '<html><body><table><tr>';
while ($i < pg_num_fields($result1))
{
	$fieldName = pg_field_name($result1, $i);
	echo '<td>' . $fieldName . '</td>';
	$i = $i + 1;
}
echo '</tr>';
$i = 0;

while ($row = pg_fetch_row($result1)) 
{
	echo '<tr>';
	$count = count($row);
	$y = 0;
	while ($y < $count)
	{
		$c_row = current($row);
		echo '<td>' . $c_row . '</td>';
		next($row);
		$y = $y + 1;
	}
	echo '</tr>';
	$i = $i + 1;
}
pg_free_result($result1);

echo '</table></body></html>';*/
//query3
$query3 = 'select name,gender,address,project_type,collegename,degree,degreename,branch,year,guide,cgpa ,noofprojects,project_preference,accomodation,((cgpa*5)+(noofprojects*5)+k)as Total from stud order by Total desc';

$result3 = pg_query($query3);
$i = 0;
echo '<html><body><table style = "border:1px solid black;width:105%;height:30px "><tr style = "border:1px solid black;">';
while ($i < pg_num_fields($result3))
{
	$fieldName = pg_field_name($result3, $i);
	echo '<th style = "border:1px solid black; font-family:Arial; font-size:13px ; text-transform:uppercase ; background-color:#f0f0f5; height:40px">' . $fieldName . '</th>';
	$i = $i + 1;
}
echo '</tr>';
$i = 0;

while ($row = pg_fetch_row($result3)) 
{
	echo '<tr style = "border:1px solid black; border-collapse:collapse;">';
	$count = count($row);
	$y = 0;
	while ($y < $count)
	{
		$c_row = current($row);
		echo '<td style = "border:1px solid black;text-align:center">' . $c_row . '</td>';
		next($row);
		$y = $y + 1;
	}
	echo '</tr>';
	$i = $i + 1;
}
pg_free_result($result3);

echo '</table></body></html>';

//query4:k
$query2 = 'alter table stud drop column k ';

$result2 = pg_query($query2);
$i = 0;
echo '<html><body><table style = "border:1px solid black"><tr>';
while ($i < pg_num_fields($result2))
{
	$fieldName = pg_field_name($result2, $i);
	echo '<td style = "border:1px solid black border-collapse:collapse">' . $fieldName . '</td>';
	$i = $i + 1;
}
echo '</tr>';
$i = 0;

while ($row = pg_fetch_row($result2)) 
{
	echo '<tr>';
	$count = count($row);
	$y = 0;
	while ($y < $count)
	{
		$c_row = current($row);
		echo '<td style = "border:1px solid black border-collapse:collapse">' . $c_row . '</td>';
		next($row);
		$y = $y + 1;
	}
	echo '</tr>';
	$i = $i + 1;
}
pg_free_result($result2);

echo '</table></body></html>';

?>
