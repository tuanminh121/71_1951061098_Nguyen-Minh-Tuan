<?php
require_once 'configs/database.php';
class Giangvien {
    public $id;
    public $name;

    public function index() { //truy vấn cho hiển thị dữ liệu 
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM giangvien";
        $results = mysqli_query($connection, $querySelect);
        //tạo mảng lữu trữ DL vừa lấy
        $giangviens = [];
        if (mysqli_num_rows($results) > 0) {
            $giangviens = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $giangviens;
    }

    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO giangvien(hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan) 
                        VALUES ('{$param['hovaten']}', '{$param['ngaysinh']}', '{$param['gioitinh']}',
                    '{$param['trinhdo']}', '{$param['chuyenmon']}', '{$param['hocham']}', '{$param['hocvi']}', '{$param['coquan']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }

    public function getGVById($id = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM giangvien WHERE magv=$id";
        $results = mysqli_query($connection, $querySelect);
        $giangvien = [];
        if (mysqli_num_rows($results) > 0) {
            $giangviens = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $giangvien = $giangviens[0];
        }
        $this->closeDb($connection);

        return $giangvien;
    }
    public function update($giangvien = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE giangvien
                        SET hovaten = '{$giangvien['hovaten']}', ngaysinh = '{$giangvien['ngaysinh']}',
                            gioitinh = '{$giangvien['gioitinh']}', trinhdo = '{$giangvien['trinhdo']}',
                            chuyenmon = '{$giangvien['chuyenmon']}', hocham = '{$giangvien['hocham']}',
                            hocvi = '{$giangvien['hocvi']}', coquan = '{$giangvien['coquan']}'
                        WHERE magv = {$giangvien['magv']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM giangvien WHERE magv = $id";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

//Tạo hàm kết nối tới CSDL
    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}