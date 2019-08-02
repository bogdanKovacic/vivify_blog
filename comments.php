<?php 
include "db.php";



$sql = "SELECT * FROM comments WHERE post_id = $post_id";
$statement = $connection->prepare($sql);

$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);

$comments = $statement->fetchAll();

?>

<ul id= "allComments" class="comments">
    <?php foreach($comments as $comment) { ?>
        <li>created by: <?php echo($comment['author']); ?> <br> <?php echo($comment['text']); ?> </li>
        <form name="deleteComment" action="delete-comment.php" method="post">
            <button type="submit" class="btn-default">Delete</button>
            <input type="hidden" name="postId" value=<?php echo($post_id); ?>>
            <input type="hidden" name="commentId" value=<?php echo $comment['id'] ?>>
        </form><hr>

    <?php }; ?>
</ul>