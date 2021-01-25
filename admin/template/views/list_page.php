
<?php
$sql = "SELECT * FROM table_11";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>



<div id="page-wrapper">

    <div class="row">
        <br>
        <br>
        <a href="/admin/?action=add_page" class="btn btn-sm btn-success">Добавить статью</a>
        <table class="table">
            <thead>
            <tr>

                <th scope="col">Названия</th>
                <th scope="col">Действия</th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($pages as $page): ?>
            <tr>

                <td><?= $page['title']?></td>
                <td><a href="/admin/?action=edit_page&id=<?=$page['id']?>">Редактировать</a>
                <td><a href="/admin/?action=delete_page&id=<?=$page['id']?>">Удалить</a>
                </td>

            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

