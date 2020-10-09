<html>
<head>
<title> Search Results</title>
</head>
<body>
<div align="center">
<h1>Search Results</h1>
<div class="col-sm-6">
   <a href="index.php">Back to Home</a>
</div>
<?php
// create short variable names
$searchtype=$_POST['searchtype'];
$searchterm=trim($_POST['searchterm']);

if (!$searchtype || !$searchterm) {
echo 'You have not entered search details. Please go back and try again.';
exit;
}
if (!get_magic_quotes_gpc()){
$searchtype = addslashes($searchtype);
$searchterm = addslashes($searchterm);
}
@ $db = new mysqli('localhost', 'root', '', 'feedback_system');
if (mysqli_connect_errno()) {
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
$query = "select * from user where ".$searchtype." like '%".$searchterm."%'";
$result = $db->query($query);
$num_results = $result->num_rows;
echo "<p>Number of People found: ".$num_results."</p>";
for ($i=0; $i <$num_results; $i++) {
$row = $result->fetch_assoc();
echo "<p><strong>".($i+1).". Name: ";
echo htmlspecialchars(stripslashes($row['name']));
echo "</strong><br />Mobile: ";
echo stripslashes($row['mobile']);
echo "<br />Email: ";
echo stripslashes($row['email']);
echo "<br />DateOfBirth: ";
echo stripslashes($row['dob']);
echo "</p>";
}
$result->free();
$db->close();
?>
</body>
</html>