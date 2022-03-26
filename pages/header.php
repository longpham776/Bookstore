<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            BooK
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Trang chủ</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="">Sách</button>
                <div class="dropdown-content">
                    <a href="index.php?controller=sach&action=index">Xem tất cả sách</a>
                    <a href="index.php?controller=sach&action=add">Thêm </a>
                </div>
            </div>
            <div class="flex-fill">
            </div>
            <div class="dropdown">
                <button class="">Loại Sách</button>
                <div class="dropdown-content">
                <a href="index.php?controller=loaisach&action=index">Xem tất cả loại sách</a>
                <a href="index.php?controller=loaisach&action=add">Thêm</a>
                </div>
            </div>
            <div class="flex-fill">
            </div>
            <div class="dropdown">
                <button class="">Nhà Xuất Bản</button>
                <div class="dropdown-content">
                <a href="index.php?controller=nxb&action=index">Xem tất cả nhà xuất bản</a>
                <a href="index.php?controller=nxb&action=add">Thêm </a>
                </div>
            </div>
            <div class="flex-fill">
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <?php
                    switch ($controller) {
                        case 'sach':
                            ?>
                            <form action="index.php?controller=sach&action=filter" method="post">
                                <input type="text" name="keyword"><input type="submit" value="Search">&ensp;
                            </form>
                            <?php
                            break;
                        case 'loaisach':
                            ?>
                            <form action="index.php?controller=loaisach&action=filter" method="post">
                                <input type="text" name="keyword"><input type="submit" value="Search">&ensp;
                            </form>
                            <?php
                            break;
                        case 'nxb':
                            ?>
                            <form action="index.php?controller=nxb&action=search" method="post">
                                <input type="text" name="keyword"><input type="submit" value="Search">&ensp;
                            </form>
                            <?php
                            break;
                        default:
                            # code...
                            break;
                    }
                ?>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                </a>
            </div>
        </div>

    </div>
</nav>