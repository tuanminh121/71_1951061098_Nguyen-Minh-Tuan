
<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/message.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 ms-auto" style="display:flex; justify-content:flex-end">
            <a href="index.php?controller=giangvien&function=add">
                <button>
                Thêm mới giảng viên
                </button>
            </a>
        </div>
        <div class="col-md-12" style="display:flex; align-items: center; justify-content:center">
        <table class="table table-striped" style="border:1px"  cellspacing="0" cellpadding="8">
            <tr class="table-success">
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Trình độ</th>
                <th>Chuyên môn</th>
                <th>Học hàm</th>
                <th>Học vị</th>
                <th>Cơ quan</th>
                <th>Chỉnh sửa</th>
            </tr>
    <?php if (!empty($giangviens)): ?>
        <?php foreach ($giangviens AS $giangvien) : ?>
                    <tr>
                        <td><?php echo $giangvien['magv'] ?></td>
                        <td><?php echo $giangvien['hovaten'] ?></td>
                        <td><?php echo $giangvien['ngaysinh'] ?></td>
                        <td><?php echo $giangvien['gioitinh'] ?></td>
                        <td><?php echo $giangvien['trinhdo'] ?></td>
                        <td><?php echo $giangvien['chuyenmon'] ?></td>
                        <td><?php echo $giangvien['hocham'] ?></td>
                        <td><?php echo $giangvien['hocvi'] ?></td>
                        <td><?php echo $giangvien['coquan'] ?></td>
                        <td>
                            <?php
                            //khai báo biến sửa, xóa
                            $urlEdit =
                                "index.php?controller=giangvien&function=edit&id=" . $giangvien['magv'];
                            $urlDelete =
                                "index.php?controller=giangvien&function=delete&id=" . $giangvien['magv'];
                            ?>
                            <a href="<?php echo $urlEdit?>">Sửa</a> &nbsp;
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                            href="<?php echo $urlDelete?>">
                                Xóa
                            </a>
                        </td>
                    </tr>
        <?php endforeach; ?>
        </div>
    </div>
</div>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>

