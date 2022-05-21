<?php 
ob_start();
$dashboard      = HelperBackend::itemSideBar('single', URL::createLink($this->arrParam['module'], 'dashboard', 'index'), 'dashboard', 'fas fa-tachometer-alt', $this->arrParam['controller']);

$arrItemGroup   =   [   
                        [
                            'link' => URL::createLink($this->arrParam['module'], 'group', 'index'),              
                            'icon' => 'fas fa-list-ul',             
                            'title' => 'list'
                        ],
                        [
                            'link' => URL::createLink($this->arrParam['module'], 'group', 'form'),              
                            'icon' => 'fas fa-edit',             
                            'title' => 'form'
                        ],
                    ];

$arrItemUser    =   [   
                        [
                            'link' => URL::createLink($this->arrParam['module'], 'user', 'index'),              
                            'icon' => 'fas fa-list-ul',             
                            'title' => 'list'
                        ],
                        [
                            'link' => URL::createLink($this->arrParam['module'], 'user', 'form'),              
                            'icon' => 'fas fa-edit',             
                            'title' => 'form'
                        ],
                    ];
$group  = HelperBackend::itemSideBar('multi', '#', 'group', 'fas fa-users', $this->arrParam['controller'], $arrItemGroup);
$user   = HelperBackend::itemSideBar('multi', '#', 'user', 'fas fa-user', $this->arrParam['controller'], $arrItemUser);
?>

<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= $this->_dirImg?>logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ZendVN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $this->_dirImg?>logoAdmin.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b><?= Session::get('loginFullname')?></b><br><small><?= Session::get('loginRole')?></small></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?= $dashboard . $group . $user?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>