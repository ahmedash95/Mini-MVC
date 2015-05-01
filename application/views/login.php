<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
    </head>
    
    <body>
        
        <h1>
            <?php
                echo isset($error) ? $error : null;
                echo isset($_SESSION['username']) ? $_SESSION['username'] : null
            ?>
        </h1>
        
        <form action="" method="post">
        
        <fieldset>
            
            <legend>Log In</legend>
            
            <p>Username : <input type="text" name="username"></p>
            <p>Password : <input type="password" name="password"></p>
            <p><input type="submit" name="submit" value="Log In"></p>
            
        </fieldset>
        
        </form>
        
        <h3><a href="<?php echo URL ?>register">Don't have an account! register now</a></h3>
        
    </div>
    
    
    </body>
</html>
