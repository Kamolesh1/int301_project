<html>

<head><link rel="stylesheet" href="style.css"></head>
<body>
<div>
<form action="welcome2.php" method="post">

<div class="container">
<h1><center><font color="blue">Registration form for email</font></center></h1></div>
<div class="signup-form">
<h2><font color="red">Fill up the form</font></h2>
<form>

<label for="name"><b>Enter name</b></label><br>
<input type="text" class="input-bx" name="name" placeholder="Enter your full name here"
required><br>

<label for="dob"><b>date of birth</b></label><br>
<input type="text" class="input-bx" name="dob" placeholder="dd/mm/yyyy" required><br>

<label for="phone"><b>Enter phone no</b></label><br>
<input type="text" class="input-bx" name="phone" placeholder="123-45-678" required><br>

<label for="email"><b>Enter New user name</b></label><br>
<input type="email" class="input-bx" name="email" placeholder="username@email.com" required><br>
</form>

<label for="pass"><b>Enter New password</b></label><br>
<input type="password" name="pass"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="New password"required><br>

<label for="cpassword"><b>comfirm password</b></label><br>
<input type="password" name="cpassword"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="Confirm password" required><br>


<input type="radio" name="gender" value="male" />Male
<input type="radio" name="gender" value="female" />Female
<input type="radio" name="gender" value="other" />other<br>
<input type="submit" name="s" value="sign up">

</div>
</div>
</form>


</div>
</body>
</html>
