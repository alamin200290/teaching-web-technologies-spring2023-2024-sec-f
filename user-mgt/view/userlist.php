<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    $users = getAllUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>User List</h1>
        <a href="home.php" > Back </a> |
        <a href="logout.php" > Logout </a>    
        <br>
        <br>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>ACTION</td>
            </tr>
            <?php for($i=0; $i<count($users); $i++){?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?=$users[$i]['name'] ?></td>
                <td><?php echo $users[$i]['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?=$users[$i]['id']?>"> EDIT </a> |
                    <a href="delete.php?id=<?=$users[$i]['id']?>"> DELETE </a> |
                    <a href="details.php?id=<?=$users[$i]['id']?>"> Details </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>