<h1>
    Danh sách lớp học
</h1>
<a href="?action=create&controller=sinh_vien">Thêm</a>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
        <th>Mã Sinh Viên</th>
        <th>Tên Sinh Viên</th>
        <th>Tên Lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each): ?>
        <tr>
            <td>
                <?php echo $each['ma']; ?>
            </td>
            <td>
                <?php echo $each['ten']; ?>
            </td>
            <td>
                <?php echo $each['ten_lop']; ?>
            <td>
                <a href="?action=edit&controller=sinh_vien&ma=<?php echo $each['ma']; ?>">Sửa</a>
            </td>
            <td>
                <a href="?action=delete&controller=sinh_vien&ma=<?php echo $each['ma']; ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>