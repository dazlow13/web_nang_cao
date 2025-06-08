<form method="post" action="?action=update&controller=sinh_vien">
    <input type="hidden" name="ma" value="<?php echo $each['ma']; ?>">
    Tên 

    <input type="text" name="ten" value="<?php echo $each['ten']; ?>">
    <br>
    Lớp
    <select name="ma_lop">
        <?php echo $options_lops; ?>
    </select>
    <br>
    <button>Sửa</button>
</form>