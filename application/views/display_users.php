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
        <br>
        <table border="1">
            
            <tr>
                <td>#id</td>
                <td>Username</td>
                <td>Email</td>
                <td>Permission</td>
            </tr>
            
            <?php foreach ($users as $user) {?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['permission'] ?></td>
            </tr>
            <?php } ?>
            
        </table>
    
    </body>
</html>