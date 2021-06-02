<div class="row">
    <div class="col-lg-12">
        <table class="table table-warning table-striped"  style="text-align: center">
            <thead>
                <tr>
                    <th>Tên công việc</th>
                    <th>Tên người thực hiện</th>
                    <th>Số điện thoại</th>
                    <th>Mức độ quan trọng</th>
                    <th>Trạng thái</th>
                    <th colspan="2">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $row->Mo_ta; ?></td>
                    <td><?php echo $row->Ten_nv; ?></td>
                    <td><?php echo $row->SDT; ?></td>
                    <td><?php echo $row->Loai_cv; ?></td>
                    <td><?php echo $row->Trang_thai; ?></td>
                    <td>
                        <a href="index.php?controller=cv&action=edit&id=<?php echo $row->ID_cv; ?>"
                            class="btn btn-outline-success">Sửa</a>
                    </td>
                    <td><a href="index.php?controller=cv&action=delete&id=<?php echo $row->ID_cv; ?>"
                            class="btn btn-outline-danger">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
