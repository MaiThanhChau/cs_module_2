<form method="post" action="">
    <div class="row" style="margin-top: 10px">
        <div class="col-lg-12">
            <table class="table table-warning table-striped"  style="width: 100%">
                <tbody>
                    <tr>
                        <td style="text-align: left, width: 50%">Tên công việc:</td>
                        <td>
                            <input name="Mo_ta" type="text" style="width: 70%" value="<?php echo $rowCV->Mo_ta ?>">
                        </td>
                    </tr>    
                    <tr>
                        <td style="text-align: left, width: 50%">Người thực hiện:</td>
                        <td>
                            <select name="ID_nv">
                                <?php foreach( $rowNVs as $rowNV ):?>
                                <option 
                                    value="<?php echo $rowNV->ID_nv ;?>"
                                    <?php 
                                        if( $rowCV->ID_nhan_vien == $rowNV->ID_nv ){
                                            echo 'selected';
                                        }
                                    ?>
                                ><?php echo $rowNV->Ten_nv ;?></option>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>    
                    <tr>
                        <td style="text-align: left, width: 50%">Mức độ quan trọng:</td>
                        <td>
                            <select name="ID_loai">
                                <?php foreach( $rowLOAIs as $rowLOAI ):?>
                                <option 
                                    value="<?php echo $rowLOAI->ID_loai_cv ;?>"
                                    <?php 
                                        if( $rowCV->ID_loai_cv == $rowLOAI->ID_loai_cv ){
                                            echo 'selected';
                                        }
                                    ?>
                                ><?php echo $rowLOAI->Loai_cv ;?></option>
                                <?php endforeach;?>
                            </select>
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

