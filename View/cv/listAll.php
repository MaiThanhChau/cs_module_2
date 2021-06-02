<!-- BODY -->
<div class="row" style="margin-top: 10px; margin-bottom: 5px;">
    <!-- NỘI DUNG -->
    <div class="col-lg-12">
        <form action="index.php?controller=cv&action=checked" method="POST">
            <div class="card text-left" style="margin-top: 5px">
            <div class="list-group" style="margin-bottom: 3px">
                <a class="list-group-item list-group-item-action list-group-item-dark">
                    <h3>Danh sách công việc</h3>
                    <h6 style="text-align: right;">Tổng: <?php echo $tongsoCV->tong_so; ?></h6>
                    <h6 style="text-align: right;">Đã hoàn thành: <?php echo $CVdahoanthanh->tong_so; ?></h6>
                    <h6 style="text-align: right;">Chưa hoàn thành: <?php echo $CVchuahoanthanh->tong_so; ?></h6>
                </a>
            </div>
                <?php foreach ($rowCVs as $rowCV ) : ?>
                <table style="width: 100%; text-align: center; border: 1px solid">
                    <tr class="table-<?php
                                        if ($rowCV->Loai_cv == 'Không quan trọng') {
                                            echo 'success';
                                        } else if ($rowCV->Loai_cv == 'Quan trọng') {
                                            echo 'warning';
                                        } else {
                                            echo 'danger';
                                        }
                                        
                                    ?>">
                        <th style="width: 90%; text-align: left;">
                            <a href="index.php?controller=cv&action=view&id=<?php echo $rowCV->ID_cv; ?>">
                                <?php echo $rowCV->Mo_ta; ?>
                            </a>
                        </th>
                        <td style="width: 10%;">
                            <div class="form-check form-check-inline" style="color: green">
                                <?php if ($rowCV->Trang_thai == 'Đã hoàn thành') : ?>
                                    <i class="fas fa-check-circle  btn-outline-success"></i>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                </table>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
