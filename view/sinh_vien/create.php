<form method="post" action="?action=store&controller=sinh_vien">
    Tên 
    <input type="text" name="ten">
    <br>
    Lớp
    <select name="ma_lop">
        <?= $options_lops ?>
    </select>
    <button type="submit">Thêm</button>
</form>