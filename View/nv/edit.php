<form method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-warning table-striped"  style="width: 100%">
                <tbody>   
                    <tr>
                        <td style="text-align: left, width: 70%">Tên nhân viên:</td>
                        <td>
                            <input type="text" name="ten_nv" placeholder="Nhập tên nhân viên" style="width: 70%" value="<?php echo $row->Ten_nv; ?>">
                        </td>
                    </tr>    
                    <tr>
                        <td style="text-align: left, width: 70%">Chức vụ:</td>
                        <td>
                            <input type="text" name="chuc_vu" placeholder="Nhập chức vụ" style="width: 70%" value="<?php echo $row->Chuc_vu; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left, width: 70%">Số điện thoại:</td>
                        <td>
                            <input type="text" name="SDT" placeholder="Nhập số điện thoại" style="width: 70%" value="<?php echo $row->SDT; ?>">
                        </td>
                    </tr> 
                    <tr>
                        <td style="text-align: left, width: 70%">Hình ảnh:</td>
                        <td>
                            <input type="file" name="hinh_anh" value="<?php echo $row->Hinh_anh; ?>">
                        </td>
                    </tr> 
                    <tr>
                        <td></td>
                        <td style="text-align: left">
                            <input type="submit" value="Cập nhật" class="btn btn-warning">
                            <input type="reset" value="Nhập lại" class="btn btn-danger">
                        </td>
                    </tr>    
    
                </tbody>
            </table>
        </div>
    </div>
</form>
