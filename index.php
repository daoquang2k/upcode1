<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
<form action="Connect.php" method="POST">
	<span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;"><form>
	<h1>Login</h1>
	Username<input type="text" name="username" label="User" required="true"><br>
	Password<input type="password" name="pass" lable="Pass" required="true"><br>
	<input type="Submit" name="" id="" value="Login">
	</form></span></span>
</form>
</body>
<style type="text/css">
	<span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">form {
  box-sizing: border-box;
  width: 260px;
  margin: 100px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
}
form h1 {
  box-sizing: border-box;
  padding: 20px;
}
  
input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #1abc9c;
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #0e6252;
}
input:focus, input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 11px;
  transform: translateY(-20px);
  visibility: visible !important;
}
</style>
</html>
