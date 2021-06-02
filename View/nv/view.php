<!-- BODY -->
<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
    <!-- NỘI DUNG -->
    <div class="col-lg-3">
        <img src="<?php echo $rowNV->Hinh_anh; ?>" alt="Không có hình ảnh" style="width: 400px">
        <div style="text-align: center">
            <span style="color: red">
                <h1>
                    <?php echo $rowNV->Ten_nv ?>
                </h1>
            </span>
        </div>
    </div>
    <div class="col-lg-6">
        <?php foreach ($rows as $row ) : ?>
        <div class="card text-left">
            <table style="width: 100%; text-align: center">
                <tr class="table-<?php
                                    if ($row->Loai_cv == 'Không quan trọng') {
                                        echo 'success';
                                    } else if ($row->Loai_cv == 'Quan trọng') {
                                        echo 'warning';
                                    } else {
                                        echo 'danger';
                                    }
                                    
                                ?>">
                    <th style="width: 80%; text-align: left;">
                        <a href="index.php?controller=cv&action=view&id=<?php echo $row->ID_cv; ?>">
                            <?php echo $row->Mo_ta; ?>
                        </a>
                    </th>
                    <td style="width: 20%">
                        <?php if ($row->Trang_thai == 'Đã hoàn thành') : ?>
                        <i class="fas fa-check-circle btn-outline-success"></i>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="col-lg-3">

        <div class="list-group">
            <a href="index.php?controller=nv&action=list"
                class="list-group-item list-group-item-action list-group-item-dark">Nhân viên
            </a>
            <?php foreach ($rowNVs as $rowNV) : ?>
            <a href="index.php?controller=nv&action=view&ID_nv=<?php echo $rowNV->ID_nv; ?>"
                class="list-group-item list-group-item-action list-group-item-Secondary ">
                <?php echo $rowNV->Ten_nv; ?>
            </a>
            <?php endforeach; ?>
            <a href="index.php?controller=nv&action=add"
                class="list-group-item list-group-item-action list-group-item-dark" style="text-align: center">+
            </a>
        </div>

    </div>