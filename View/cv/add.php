<form method="post" action="">
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px">
            <table class="table table-warning table-striped"  style="width: 100%">
                <tbody>
                    <tr>
                        <td style="text-align: left, width: 50%">Tên công việc:</td>
                        <td>
                            <input name="Mo_ta" type="text" style="width: 70%" placeholder="Nhập mô tả công việc">
                        </td>
                    </tr>    
                    <tr>
                        <td style="text-align: left, width: 50%">Người thực hiện:</td>
                        <td>
                            <select name="ID_nv">
                                <option value="0">Tên nhân viên</option>
                                <?php foreach( $rowNVs as $rowNV ):?>
                                <option 
                                    value="<?php echo $rowNV->ID_nv ;?>">
                                    <?php echo $rowNV->Ten_nv ;?>
                                </option>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>    
                    <tr>
                        <td style="text-align: left, width: 50%">Mức độ quan trọng:</td>
                        <td>
                            <select name="ID_loai">
                                <option value="0">Chọn mức độ</option>
                                <?php foreach( $rowLOAIs as $rowLOAI ):?>
                                <option 
                                    value="<?php echo $rowLOAI->ID_loai_cv ;?>">
                                    <?php echo $rowLOAI->Loai_cv ;?>
                                </option>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: left">
                            <input type="submit" value="Thêm" class="btn btn-success">
                            <input type="reset" value="Nhập lại" class="btn btn-danger">
                        </td>
                    </tr>    
    
                </tbody>
            </table>
        </div>
    </div>
</form>
