<!-- BODY -->
<div class="row" style="margin-top: 10px; margin-bottom: 5px;">
    <!-- NỘI DUNG -->
    <div class="col-lg-8">
        <form action="index.php?controller=cv&action=checked" method="POST">
            <div class="card text-left" style="margin-top: 5px">
            <div class="list-group" style="margin-bottom: 3px">
                <a  href="index.php?controller=cv&action=listAll" 
                class="list-group-item list-group-item-action list-group-item-dark">
                    <h3>Danh sách công việc</h3>
                    <h6 style="color: red">
                        <?php
                            if ($loi != '') {
                                echo $loi; 
                            } 
                        ?>
                    </h6>
                </a>
            </div>
                <?php foreach ($rowLoaiCVs as $rowLoaiCV ) : ?>
                <table style="width: 100%; text-align: center">
                    <tr class="table-<?php
                                        if ($rowLoaiCV->Loai_cv == 'Không quan trọng') {
                                            echo 'success';
                                        } else if ($rowLoaiCV->Loai_cv == 'Quan trọng') {
                                            echo 'warning';
                                        } else {
                                            echo 'danger';
                                        }
                                        
                                    ?>">
                        <th style="width: 85%; text-align: left;">
                            <a href="index.php?controller=cv&action=view&id=<?php echo $rowLoaiCV->ID_cv; ?>">
                                <?php echo $rowLoaiCV->Mo_ta; ?>
                            </a>
                        </th>
                        <td style="width: 15%;">
                            <div class="form-check form-check-inline" style="color: green">
                                <?php if ($rowLoaiCV->Trang_thai == 'Chưa hoàn thành') : ?>
                                <input name="<?php echo $rowLoaiCV->ID_cv; ?>" class="form-check-input" type="checkbox" id="inlineCheckbox<?php echo $rowLoaiCV->ID_cv; ?>" value="option1">
                                <?php endif; ?>
                                <label class="form-check-label" for="inlineCheckbox<?php echo $rowLoaiCV->ID_cv; ?>">Đã hoàn thành</label>
                            </div>
                        </td>
                    </tr>
                </table>
                <?php endforeach; ?>
            </div>
            <div style="text-align: right; margin-top: 10px">
                <input type="submit" value="Cập nhật" class="btn btn-outline-info">
            </div>
        </form>
        

    </div>

    <!-- BÊN PHẢI -->
    <div class="col-lg-4">

        <div class="list-group" style="margin-top: 5px">
            <a href="index.php?controller=nv&action=list" 
                class="list-group-item list-group-item-action list-group-item-dark"><h5>Nhân viên</h5>
            </a>
            <?php foreach ($rowNVs as $rowNV) : ?>
            <div style="margin-top: 3px; margin-bottom: 3px">
                <a href="index.php?controller=nv&action=view&ID_nv=<?php echo $rowNV->ID_nv; ?>"
                    class="list-group-item list-group-item-action list-group-item-Secondary ">
                    <?php echo $rowNV->Ten_nv; ?>
                </a>
            </div>
            <?php endforeach; ?>
            <a href="index.php?controller=nv&action=add" 
               class="list-group-item list-group-item-action list-group-item-dark"
               style="text-align: center" ><i class="fas fa-plus"></i>
            </a>
        </div>

    </div>
