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

        <hr>

        <a href="<?php echo URL ?>main/addpost">Add New Post</a>

        <hr>

        <?php foreach ($posts as $post) { ?>

            <h2>Title : <a href="#"><?php echo $post['title'] ?></a></h2>
            <p>Description :s <?php echo $post['description'] ?></p>
            <p><?php echo substr($post['body'],0,50)."..."?></p>

            <?php foreach($users as $user) { ?>
                <?php if($user['id'] == $post['user_id']) {?>
                    <p style="color: red;"><?php  echo "Written by ".$user['username']?></p>
                <?php } ?>
            <?php } ?>

            <a href="<?php echo URL ?>main/post/<?php echo $post['id'] ?>">read more</a>

            <hr>
            <br>

        <?php } ?>
    
    </body>
</html>
