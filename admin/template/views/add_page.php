<div id="page-wrapper">

<div class="row">

<br>
    <br>
    <form action="/admin/?action=save_page" enctype="multipart/form-data" method="post">

        <div class="form-group">
            <label>Название статьи</label>
            <input class="form-control" name="title" placeholder="Введите текст">
        </div>

        <div class="form-group">
            <label>Текст статьи</label>
            <textarea class="form-control" name="content" rows="6" placeholder="Введите текст"></textarea>
        </div>

        <div class="form-group">
            <label>Автор</label>
            <input class="form-control" name="auhtor" placeholder="Введите текст">
        </div>

        <div class="form-group">
            <label>Категория</label>
            <input class="form-control" name="category" placeholder="Введите текст">
        </div>


        <div class="form-group">
            <label>Загрузить фото</label>
            <input type="file" name="imag">
        </div>
        <button type="submit" class="btn btn-sm btn-success" >Добавить новость</button>
    </form>
</div>
</div>
