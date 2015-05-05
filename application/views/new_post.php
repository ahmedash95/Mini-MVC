<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
    </head>

    <body>

        <a href="<?php echo URL ?>main">&laquo; Back to main page</a>

        <form action="" method="post" enctype="multipart/form-data">

            <p>
                Title : <input type="text" name="title">
            </p>

            <p>
                description : <input type="text" name="description">
            </p>

            <p>
                <label for="body">Body : </label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </p>

            <p id="uploads">
                upload a photo : <input type="file" name="file">
            </p>

            <a href="#" id="link">upload more photos +</a>

            <p>
                <input type="submit" name="submit">
            </p>

        </form>

        <script>

            var uploads = document.getElementById("uploads");
            var link = document.getElementById("link");

            var i = 1;

            link.onclick = function () {

                uploads.innerHTML += '<br>'+'<input type="file" name="file'+(i++)+'">';

            }

        </script>

    </body>
</html>

