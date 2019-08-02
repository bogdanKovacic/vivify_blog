<?php include "db.php"; ?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivifyblog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<?php include "header.php"; ?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php 
                $post_id = ($_GET['id']);

                $sql = "SELECT * FROM posts WHERE id = $post_id";
                $statement = $connection->prepare($sql);

                $statement->execute();
                $statement->setFetchMode(PDO::FETCH_ASSOC);

                $singlePost = $statement->fetch();
            ?>

            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo($singlePost['title']); ?></h2>
                <p class="blog-post-meta"><?php echo($singlePost['created_at']); ?> by <a href="#"><?php echo($singlePost['author']); ?></a></p>
                <p><?php echo($singlePost['body']); ?> </p>
                <hr>
            </div>

            <form name="deletePost" action="delete-post.php" method="post">
                <input type="submit" class="btn btn-primary" value="Delete post" id="delete-post"> <br> <br>
                <input type="hidden" name="postId" value=<?php echo($post_id); ?>>
            </form>
         
            <form name="firstFrom" action="create-comment.php" onsubmit="return commentForm()" method="post">
                <label for="formName">Your name</label> <br>
                <input name="formName" type="text" class="" placeholder="Enter your name"> <br>
                <small>Your name and comment are public</small> <br> <br>

                <label for="comments">Enter your comment:</label> <br>
                <textarea name="comment" class="" rows= "10" cols="60" placeholder= "write your comment"></textarea> <br>
                <input type="hidden" name='postId' value= <?php echo($post_id); ?> >

                <input type="submit" class="btn btn-primary" value= "submit"> <br>

            </form>
            <br>
            <button id="myBtn" type="button" class="btn-default">Hide comments</button> <br> <br>

            
            <h4 class="comment-list-headline">Comment list</h4> 

            <?php include "comments.php"; ?>

            <script src='javaScript/javaScript.js'></script> 
                         
        </div><!-- /.blog-main -->
        <?php include "sidebar.php"; ?>
    </div><!-- /.row -->
</main><!-- /.container -->
<?php include "footer.php"; ?>
</body>
</html>