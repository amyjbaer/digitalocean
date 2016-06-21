<!DOCTYPE html>
<style>
p {
	display: none;
}
</style>
<html>
<head>
<meta charset="ISO-8859-1">
<title>My Website</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('button:first').click(function() {
		if ($('p').css('display') == 'none') {
			$('p').css('display', 'block');
			$('button').html('Hide Info');
		}
		else {
			$('p').css('display', 'none');
			$('button').html('Show Info');
		}
	});
	$('button:last').click(function() {
		alert('you suck');
	});
});
</script>
</head>
<body>
<h1>Amy's Website</h1>
<button>Show Info</button>
<button>Andrew click here</button>
<?php 
$servername = "104.236.198.230";
$username = "amy";
$passwd = "ravens2013";
try {
$conn = new PDO("mysql:host=localhost;dbname=user", $username, $passwd);
}
catch(\Exception $e) {
	echo $e->getMessage();
}
$sql = "SELECT * FROM user.user";
$result = $conn->query($sql);
$arr = $result->fetchAll();
?>

<?php foreach($arr as $row ) {?>
<p><?=$row['name']?> is <?=$row['age']?> years old and has a ID of <?=$row['user_id']?></p>
<?php } ?>
</body>
</html>