<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
    </head>
    
    <body>
        
        <form action="" method="post">
        
        <fieldset>
            
            <legend>Edit User</legend>
            
            <p>Username : <input type="text" name="username" value="<?php echo $user['username'] ?>"></p>
            <p>Password : <input type="password" name="password"></p>
            <p>Email : <input type="email" name="email" value="<?php echo $user['email'] ?>"></p>
            <p>
                <select name="permission">
                    <option value="admin">admin</option>
                    <option value="admin">moderator</option>
                    <option value="admin">user</option>
                </select>
            </p>
            <p><input type="submit" name="edit" value="Edit User"></p>
            
        </fieldset>
        
        </form>
        
        
    </div>
    
    
    </body>
</html>