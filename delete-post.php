<?php

    include "db.php";

    $postId = $_POST['postId'];

    $sqlDeleteComments = "DELETE FROM comments WHERE post_id=$postId";
    $delCommentsStatement = $connection->prepare($sqlDeleteComments);
    $delCommentsStatement->execute();


    var_dump($postId);
    $sql = "DELETE FROM posts WHERE id =" . $postId;

    $statement = $connection->prepare($sql);

    $statement->execute();
    header("Location:index.php");



?>