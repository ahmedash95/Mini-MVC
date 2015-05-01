<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
    </head>
    
    <body>
        
        <div class="header">
            <h1>Welcome to our website <span style="color: red"><?php echo ucfirst($_SESSION['username']); ?></span></h1>
            <?php echo $link; ?>
        </div>
        
        <a href="<?php echo URL ?>logout">log out</a>
    
    
    </body>
</html>
