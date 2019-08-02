<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>

    <?php include "header.php"; ?> <!-- mozda nece trebati!!! -->

    <main role="main" class="container">
    

        <form name="newPost" action="create.php" method="post" onsubmit="return createPostRequire()">
            <label for="author">Your name:</label> <br>
            <input name="author" placeholder="Enter your name"> <br> <br>

            <label for="title">Post title:</label> <br>
            <input name="title" placeholder="Enter title"> <br> <br>

            <label for="bodyText">Enter your text:</label> <br>
            <textarea name="bodyText" cols="50" rows="10" placeholder="Write your post"></textarea> <br> <br>

            <input type="submit" class="btn btn-primary" value="submit">
        </form>

        <script src="javaScript/javaScript.js"></script>

        <div class="row">

            <div class="col-sm-8 blog-main">

            </div><!-- /.blog-main -->
            
        </div><!-- /.row -->
        <?php include "sidebar.php"; ?>

    </main><!-- /.container -->
    
    <?php include "footer.php"; ?>

</body>
</html>
