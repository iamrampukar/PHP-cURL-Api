<!DOCTYPE html>
<html>
<head>
	<title>Country API</title>
	<style type="text/css">
	*{
		font-size: 14px;
		font-family: arial;
	}
	</style>
</head>
<body>
<table border = "1">
<tr>
	<th>S.NO</th>
	<th>COUNTRY NAME</th>
	<th>CAPITAL</th>
	<th>REGION</th>
</tr>
<?php 
	header('content-type:text/html;charset=utf-8');
	$json = file_get_contents('https://restcountries.eu/rest/v1/all');
	$result_json = json_decode($json);
	$i=1;
	
	foreach ($result_json as $key => $value) {
		echo '<tr>';
		echo '<td>'.$i++.'</td>';
		echo '<td>'.$value->name.'</td>';
		echo '<td>'.$value->capital.'</td>';
		echo '<td>'.$value->region.'</td>';
		echo '</tr>';
	}
 ?>
</table>
</body>
</html>