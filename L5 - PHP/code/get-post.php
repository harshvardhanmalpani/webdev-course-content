<form method=post action="get-post.php?y=99">
<input type="text" name="a">
<input type="text" name="b">
<input type=submit>
</form>
<?php
print_r($_POST);
print_r($_GET);
echo $_POST['a'];

?>