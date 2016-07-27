<?php
/*
	Created by Ketan Sharma
*/
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>
		Simple PHP App
	</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
			function get_data(data) {
				alert(data);
			}
	</script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>			
<?php
     $button;
	echo "<table class='table'>";
		foreach($people as $array => $innerArray){
			echo "<tr><td>". $innerArray['first_name'] . "</td><td>" .$innerArray['last_name'] . "</td><td>" . $innerArray['email'];
			$data = "First Name: ".$innerArray['first_name']." Last Name: ".$innerArray['last_name']." Email: ".$innerArray['email'];
			echo '<td><input type="submit" id="'. $innerArray['id'] .'" value="Click Me..!" onClick="get_data(\''.$data.'\')"></td></tr>';
		}
		echo "</table>";
?>
</body>
</html>
