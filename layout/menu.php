
<div class="col-lg-12">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="index.php?controller=cv&action=list">
            <button class="btn btn-outline-light my-2 my-sm-0" type="button">
                <i class="fas fa-home"></i>
            </button>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controller=cv&action=add" style="color: beige;">Thêm
                        công việc<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=nv&action=list" style="color: beige;">Quản lý nhân
                        viên</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: beige;">Tài khoản</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Quản lý tài khoản</a>
                        <a class="dropdown-item" href="index.php?controller=admin&action=logout">Đăng
                            xuất</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.php?controller=cv&action=search" method="POST">
                <input class="form-control mr-sm-2" type="text" placeholder="Nhập loại công việc..." name="search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </nav>
</div>