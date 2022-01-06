<?php
require_once 'models/Giangvien.php';
class GiangvienController {
    
    //Hiển thị các dữ liệu có trong hệ thống
    public function index() {
        echo "
        <div class='container'>
            <div class='col-md-12' style='display: flex; justify-content:center'>
                <h1>DANH SÁCH CÁC GIẢNG VIÊN TRONG TRƯỜNG</h1>
            </div>
        </div>";

        //khai báo biến gọi hàm từ class Book của Model
        $giangvien = new Giangvien();
        $giangviens = $giangvien->index(); //chứa DL

        require_once 'views/Giangviens/index.php'; //gọi view
    }

    public function add() {
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $ngaysinh = $_POST['ngaysinh']; 
            $gioitinh = $_POST['gioitinh'];
            $trinhdo = $_POST['trinhdo'];
            $chuyenmon = $_POST['chuyenmon'];
            $hocham = $_POST['hocham'];
            $hocvi = $_POST['hocvi'];
            $coquan = $_POST['coquan'];

//xứ lý dữ liệu trống báo lỗi và không cho submit form
            if (empty($hovaten) || empty($ngaysinh) || empty($gioitinh) || empty($trinhdo)
                || empty($chuyenmon) || empty($hocham) || empty($coquan) || empty($hocvi)) {
                $error = "Không được để trống thông tin nào";
            }
            else {
                //gọi model để insert dữ liệu vào database
                $giangvien = new Giangvien();
                
                //tạo mảng để lưu DL tạm thời
                $giangvienArr = [
                    'hovaten' => $hovaten,
                    'ngaysinh' => $ngaysinh,
                    'gioitinh' => $gioitinh,
                    'trinhdo' => $trinhdo,
                    'chuyenmon' => $chuyenmon,
                    'hocham' => $hocham,
                    'hocvi' => $hocvi,
                    'coquan' => $coquan
                ];
                //khai báo biến gọi hàm bên model
                $isInsert = $giangvien->insert($giangvienArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=giangvien&function=index");
                exit();
            }
        }
        //gọi view
        require_once 'views/Giangviens/add.php';
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=giangvien&function=index");
            return;
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=giangvien&function=index");
            return;
        }
        $id = $_GET['id'];
        //gọi model để lấy ra đối tượng sách theo id
        $giangvienModel = new Giangvien();
        $giangvien = $giangvienModel->getGVById($id);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $ngaysinh = $_POST['ngaysinh']; 
            $gioitinh = $_POST['gioitinh'];
            $trinhdo = $_POST['trinhdo'];
            $chuyenmon = $_POST['chuyenmon'];
            $hocham = $_POST['hocham'];
            $hocvi = $_POST['hocvi'];
            $coquan = $_POST['coquan'];
            //check validate dữ liệu
            if (empty($hovaten)) {
                $error = "Không được để trống thông tin nào";
            }
            else {
                //xử lý update dữ liệu vào hệ thống
                $giangvienModel = new Giangvien();
                $giangvienArr = [
                    'magv' => $id,
                    'hovaten' => $hovaten,
                    'ngaysinh' => $ngaysinh,
                    'gioitinh' => $gioitinh,
                    'trinhdo' => $trinhdo,
                    'chuyenmon' => $chuyenmon,
                    'hocham' => $hocham,
                    'hocvi' => $hocvi,
                    'coquan' => $coquan
                ];
                $isUpdate = $giangvienModel->update($giangvienArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update giảng viên mã #$id thành công";
                }
                else {
                    $_SESSION['error'] = "Update giảng viên mã #$id thất bại";
                }
                header("Location: index.php?controller=giangvien&function=index");
                exit();
            }
        }
        
        //truyền ra view
        require_once 'views/Giangviens/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        if (!is_numeric($id)) {
            header("Location: index.php?controller=giangvien&function=index");
            exit();
        }

        $giangvien = new Giangvien();
        $isDelete = $giangvien->delete($id);

        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $_SESSION['success'] = "Xóa giảng viên mã #$id thành công";
        }
        else {
            //báo lỗi
            $_SESSION['error'] = "Xóa giảng viên mã #$id thất bại";
        }
        header("Location: index.php?controller=giangvien&function=index");
        exit();
    }
}