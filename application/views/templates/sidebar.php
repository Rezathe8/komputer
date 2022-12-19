<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url(); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Komponen</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('komponen/prosesor'); ?>">
                        <i class="bi bi-circle"></i><span>Prosesor</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('komponen/motherboard'); ?>">
                        <i class="bi bi-circle"></i><span>Motherboard</span>
                    </a>
                </li> 
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Rakitan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('home/rakitan'); ?>">
                        <i class="bi bi-circle"></i><span>Rakitan Saya</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav --> 

        <!--- <li class="nav-heading">Pages</li> --->

    </ul>

</aside><!-- End Sidebar-->