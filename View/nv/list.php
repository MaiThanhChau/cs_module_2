<div class="row" style="margin-top: 10px">
    <div class="col-lg-12">
        <table class="table table-warning table-striped"  style="text-align: center">
            <thead>
                <tr>
                    <th>Tên nhân viên</th>
                    <th>Chức vụ</th>
                    <th>Số điện thoại</th>
                    <th>Hình ảnh</th>
                    <th colspan="2">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                <tr>
                    <td>
                        <?php echo $row->Ten_nv ?>

                    </td>
                    <td><?php echo $row->Chuc_vu ?></td>
                    <td><?php echo $row->SDT ?></td>
                    <td>
                        <a href="index.php?controller=nv&action=view&ID_nv=<?php echo $row->ID_nv; ?>" style="color: black">
                        <img src="<?php echo $row->Hinh_anh; ?>" alt="Không có hình ảnh" style="width: 300px">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?controller=nv&action=edit&id=<?php echo $row->ID_nv; ?>"
                            class="btn btn-outline-success">Sửa</a>
                    </td>
                    <td><a href="index.php?controller=nv&action=delete&id=<?php echo $row->ID_nv; ?>"
                            class="btn btn-outline-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
