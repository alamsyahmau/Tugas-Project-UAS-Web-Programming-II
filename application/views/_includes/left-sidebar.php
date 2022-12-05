<?php $uri = $this->uri->segment(1); $uri1 = $this->uri->segment(2) ?>
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    Master Menu
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('') ?>" class="nav-link <?php echo $uri == '' | $uri === 'dashboard' ? 'active' : '' ?>"><i class="fa fa-fw fa-chart-area"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/cafe_abnurmal/kategori_menu" class="nav-link <?php echo $uri === 'kategori_menu' | $uri === 'menu' ? 'active' : '' ?>" data-toggle="collapse" aria-expanded="false" data-target="#data-menu" aria-controls="#data-menu"><i class="fa fa-fw fa-book"></i>Menu</a>
                    <div id="data-menu" class="collapse submenu <?php echo $uri === 'kategori_menu' | $uri === 'menu' ? 'show' : '' ?>">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="<?php echo site_url('kategori_menu') ?>" class="nav-link <?php echo $uri === 'kategori_menu' ? 'active' : '' ?>">Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('menu') ?>" class="nav-link <?php echo $uri === 'menu' ? 'active' : '' ?>">Data Menu</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>