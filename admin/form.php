<form name="test" action="" enctype="multipart/form-data" method="post">
    <input type="text" name="title" placeholder="title"><br>
    <textarea name="content" cols="40" rows="10" placeholder="content"></textarea><br>
    <input type="file" name="imag" placeholder="title"><br>
    <input type="text" name="auhtor" placeholder="title"><br>
    <input type="text" name="category" placeholder="title"><br>
    <input type="submit" name="done" value="Готово"><br>

</form>
<?php
require_once '../db.php';
?>
<?php
var_dump($_FILES);
if (isset($_FILES['imag'])) {
    $errors = array();
    $file_name = $_FILES['imag']['name'];
    $file_tmp = $_FILES['imag']['tmp_name'];

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "upload/" . $file_name);
    }
    if (!empty($_POST)){
        $sql = "INSERT INTO `table_11` (`title`, `content`,`imag`, `auhtor`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$file_name}','{$_POST['auhtor']}',
    '{$_POST['category']}')";
       mysqli_query($connection, $sql);
    }}
