<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
        <style>
            td {
                padding: 10px;
            }
        </style>
    </head>
    
    <body>
        
        <a href="<?php echo URL ?>main">&laquo; Back to main page</a><br>
        <a href="<?php echo URL ?>manageusers/add">+ Add new User</a>
        <br>
        <table border="1">
            
            <tr>
                <td>#id</td>
                <td>Username</td>
                <td>Password</td>
                <td>Email</td>
                <td>Permission</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            
            <?php foreach ($users as $user) {?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['password'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['permission'] ?></td>
                <td><a href="<?php echo URL ?>manageusers/edit/<?php echo $user['id'] ?>">Edit</a></td>
                <td><a href="<?php echo URL ?>manageusers/delete/<?php echo $user['id'] ?>">Delete</a></td>
            </tr>
            <?php } ?>
            
        </table>
    
    </body>
</html>
