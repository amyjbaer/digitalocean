<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<h1>Website</h1>
<button>Push me!</button>
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
foreach($arr as $row) {
echo $row['name'];
?>
<p><?php echo $row['name']?></p>

<?} ?>
</body>
</html>