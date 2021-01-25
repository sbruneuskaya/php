<div id="page-wrapper">

    <div class="row">
<br>
        <br>

        <?php
       if(!empty($_POST)){
//        новость добавлена
if ($_FILES['imag']['size']>0){
    $imagurl = $_FILES['imag']['name'];
    move_uploaded_file($_FILES['imag']['tmp_name'], 'upload/' .$_FILES['imag']['name']);
}
        }
       $sql = "INSERT INTO `table_11` (`title`,`content`,`imag`,`auhtor`,`category`)
VALUES ('{$_POST['title']}', '{$_POST['content']}','{$imagurl}','{$_POST['auhtor']}','{$_POST['category']}')
";
       mysqli_query($connection, $sql);
        ?>
    </div>
</div>
