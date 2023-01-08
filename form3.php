<html>

<head>
</head>

<body>
<form action="" method="post">

Name:<input type="text" name="name"/><br>
Mobile:<input type="tel" name="mobile"/><br>
Dob:<input type="date" name="dob"/><br>
Gender:<input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
<br>
Address<textarea name="address" name="address"></textarea><br>
Qualification:<select name="qualification">
    <option>Diploma</option>
    <option>B.Tech</option>
</select><br>
Email:<input type="email" name="email"/><br>
Language Known:<input type="checkbox" name="language[]" value="hindi">Hindi
<input type="checkbox" name="language[]" value="english">English
<br>
<input type="submit" name="submit" value="Submit"/>

</form>
</body>

</html>