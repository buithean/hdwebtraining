<?php
session_start();

?> 
<?php 
echo "<form action = 'readsession.php' method = 'POST'>";
echo "<table boder = '1' width = '300'>";
echo "<tr><td width = 100>Full name: </td><td><input type = text name = 'fullname'></td></tr> ";
echo "<tr><td width = 100>Email: </td><td><input type = text name = 'email'></td></tr> ";
echo "<tr><td width = 100>User name: </td><td><input type = text name = 'username'></td></tr> ";
echo "<tr><td width = 100>Password: </td><td><input type = password name = 'password'></td></tr> ";
echo "<tr><td width = 100><input type = submit value = 'Login'></td><td><input type = reset value = 'Cancel'></td></tr> ";
?>