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
	$('button').click(function() {
		$('p').css('display', 'block');
	});
	
});
</script>
</head>
<body>
<h1>Website</h1>
<button>Push me to see everyone's names!</button>
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
<p><?=$row['name']?></p>
<?php } ?>
</body>
</html>