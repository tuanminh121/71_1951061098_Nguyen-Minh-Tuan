
<div class='container'>
    <div class='col-md-12' style='display: flex; justify-content:center'>
        <h1>THÊM GIẢNG VIÊN MỚI</h1>
    </div>
</div>

<!--</form>-->
<div class="row">
    <div class="col-md-12" style="display:flex; align-items: center; justify-content:center">
        <div style="color: red">
                <?php echo $error ?>
        </div>
    </div>
</div>
<!-- <form method="post" action="">
    Name :
    <input type="text" name="name" value="" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form> -->
<div class="container">
    <form method="post" action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
            <input type="text" name="hovaten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ngày sinh</label>
            <input type="text" name="ngaysinh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Giới Tính(1:Nam / 0:Nữ)</label>
            <input type="text" name="gioitinh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Trình độ</label>
            <input type="text" name="trinhdo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Chuyên môn</label>
            <input type="text" name="chuyenmon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Học hàm</label>
            <input type="text" name="hocham" class="form-control" id="exampleInputPassword1" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Học vị</label>
            <input type="text" name="hocvi" class="form-control" id="exampleInputPassword1" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cơ quan</label>
            <input type="text" name="coquan" class="form-control" id="exampleInputPassword1" value="">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>