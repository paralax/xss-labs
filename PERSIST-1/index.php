<?php     include("../common/header.php");   ?>

<?php
if (strlen($_POST["comment"]) > 0) {
    file_put_contents("comments.txt", $_POST["comment"] + "\n\n----==\n\n", FILE_APPEND);
} 

echo "<h2>Comments</h2>";
$txt = file_get_contents("comments.txt");
if ($txt != FALSE) {
    $comments = explode("----==", $txt);
    echo var_dump($comments);
    foreach ($commments as $comment) {
        echo sprintf("<p>%s</p><hr />\n", $comment);
    }
}
?>
<p>
<form method="POST" action="/PERSIST-1/index.php">
    comment? <br/>
    <input type="textarea" rows="4" cols="90" name="comment">
    <button type="submit" form="form1" value="Submit">Submit</button>
</form>
</p>  