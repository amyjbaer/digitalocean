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
echo '1';
exit;
$servername = "104.236.198.230";
$username = "Amy";
$passwd = "password";
$conn = new PDO("mysql:host=104.236.198.230:3306;dbname=user", $username, $passwd);
echo $conn;
$sql = "SELECT * FROM user.user";
$result = $conn->query($sql);
var_dump($reuslt->fetchAll()); 

?>
</body>
</html>