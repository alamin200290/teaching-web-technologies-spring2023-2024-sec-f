<?php

    $id = $_GET['id'];

?>

<html>
<head>
    <title>Edit User</title>
</head>
<body>
        <h1>Edit User</h1>
        <a href="userlist.php" > Back </a> |
        <a href="logout.php" > Logout </a>
        <br>
        <br>

        <form method="post" action="update.php">
            ID:         <input type="number" name="id" readonly value="<?=$id?>" /> <br>
            Username:   <input type="text" name="username" value="" /> <br>
            Email:      <input type="email" name="email" value="" /> <br>
            password:   <input type="password" name="password" value="" /> <br>
                      <input type="submit" name="submit" value="Update" /> 
        </form>
</body>
</html>