<?php     include("../common/header.php");   ?>

<?php
if (isset($_POST["/tmp/comment"])) {
    $data = $_POST["comment"] . "\n\n----==\n\n";
    $ret = file_put_contents("comments.txt", $data, FILE_APPEND | LOCK_EX);
    if ($ret === false) {
         die('There was an error writing this file');
    }
} 

hint("this should be obvious");

echo "<h2>Comments</h2>";
if (file_exists("/tmp/comments.txt") == TRUE) {
    $txt = file_get_contents("comments.txt");    
} else {
    $txt = "";
}
if ($txt != FALSE) {
    $comments = explode("----==", $txt);
    for ($i = 0; $i < count($comments); $i++) {
        echo "<p>$comments[$i]</p><hr />\n";
    }
}
?>
<p>
<form method="POST" action="index.php">
    comment? <br/>
    <input type="textarea" rows="4" cols="90" name="comment">
    <input type="submit" name="submit" value="Save Data">
</form>
</p>  
