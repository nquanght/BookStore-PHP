<?php
$arrEleCategory = [
    [
        'link' => 'indeclgf.f',
        'title' => 'ggfgdgdfg'
    ],
    [
        'link' => 'indeclgf.f',
        'title' => 'ggfgdgdfg'
    ],
    [
        'link' => 'indeclgf.f',
        'title' => 'ggfgdgdfg'
    ],
    [
        'link' => 'indeclgf.f',
        'title' => 'ggfgdgdfg'
    ],
    [
        'link' => 'indeclgf.f',
        'title' => 'ggfgdgdfg'
    ],
];
$home = HelperFrontend::itemNavBar('single', URL::createLink($this->arrParam['module'], 'home', 'index'), 'Trang chủ', 'home');
$book = HelperFrontend::itemNavBar('single', URL::createLink($this->arrParam['module'], 'book', 'list'), 'Sách', 'book');
$category = HelperFrontend::itemNavBar('dropdown', URL::createLink($this->arrParam['module'], 'category', 'list'), 'Danh mục', 'category', $arrEleCategory);
?>

<header class="my-header sticky">
    <div class="mobile-fix-option"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="brand-logo">
                            <a href="<?= URL::createLink($this->arrParam['module'], 'home', 'index') ?>">
                                <h2 class="mb-0" style="color: #5fcbc4">BookStore</h2>
                            </a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <?= $home . $book . $category?>
                                </ul>
                            </nav>
                        </div>

                        <div class="top-header">
                            <ul class="header-dropdown">
                                <li class="onhover-dropdown mobile-account">
                                    <img src="<?= $this->_dirImg ?>avatar.png" alt="avatar">
                                    <span style="font-size: 16px;" class="pl-1 text-dark"><?= ($_SESSION['loginDefault']['fullnameUser']) ?? '' ?></span>

                                    <ul class="onhover-show-div">
                                        <?php
                                        if (@$_SESSION['loginDefault']['loginSuccess'] == true) {
                                            $xhtml = '<li><a href="' . URL::createLink($this->arrParam['module'], 'account', 'logoutAccount') . '">Đăng xuất</a></li>';
                                        } else {
                                            $xhtml = '<li><a href="' . URL::createLink($this->arrParam['module'], 'account', 'login') . '">Đăng nhập</a></li>
                                            <li><a href="' . URL::createLink($this->arrParam['module'], 'account', 'register') . '">Đăng ký</a></li>';
                                        }

                                        echo $xhtml;
                                        ?>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div>
                                            <img src="<?= $this->_dirImg ?>search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-search" onclick="openSearch()"></i>
                                        </div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div>
                                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form action="" method="GET">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="search" id="search-input" placeholder="Tìm kiếm sách...">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div>
                                            <a href="cart.html" id="cart" class="position-relative">
                                                <img src="<?= $this->_dirImg ?>cart.png" class="img-fluid blur-up lazyload" alt="cart">
                                                <i class="ti-shopping-cart"></i>
                                                <span class="badge badge-warning">0</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>