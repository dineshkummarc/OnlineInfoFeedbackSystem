<html>
<head>
<title>Member Search</title>
</head>
<body>
<h1> Search</h1>
<form action="results.php" method="post">
Choose Search Type:<br />
<select name="searchtype">
<option value="name">Name</option>
<option value="mobile">Phone</option>
<option value="dob">DateOfBirth</option>
</select>
<br />
Enter Search Term:<br />
<input name="searchterm" type=”"text" size="40"/>
<br />
<input type="submit" name="submit" value="Search"/>
</form>
</body>
</html>