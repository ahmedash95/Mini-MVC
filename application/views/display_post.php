<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
        <style>
            .comment {
                background: #eee;
                padding: 10px;
                margin-bottom: 5px;
            }

            .photo {
                width: 300px;
                height: 300px;
            }
        </style>
    </head>

    <body>



        <h1><?php echo $post['title'] ?></h1>
        <p><?php echo $post['description'] ?></p>
        <p><?php echo $post['body'] ?></p>

        <div>

            <?php
                if(!empty($photos)) {
                    foreach ($photos as $photo) {
            ?>
                        <img  class="photo" src="<?php echo URL ?>public/imgs/posts/<?php echo $photo['photo_name'] ?>">
                        <br>

                <?php } ?>
            <?php } ?>

        </div>

        <hr>

        <?php
        if(empty($comments)) {
        ?>

        <h2>
            <?php
            echo "no comments yet"."<hr>";}
            else {
                echo "<h2>Comments</h2><hr>";
            ?>
        </h2>

        <br>


            <?php foreach ($comments as $comment) { ?>

                <div class="comment">

                    <h3><?php echo $comment['comment'] ?></h3>

                    <?php foreach($users as $user) { ?>

                        <?php if($user['id'] == $comment['user_id']) {?>

                            <p style="color: blue">Written by <?php echo $user['username'] ?></p>

                        <?php } ?>

                    <?php } ?>

                </div>

            <?php } ?>

        <?php } ?>



        <form action="" method="post">

            <p>Leave a comment</p>

            <p><textarea name="comment"></textarea></p>

            <p><input type="submit" name="submit"></p>

        </form>




    </body>
</html>
