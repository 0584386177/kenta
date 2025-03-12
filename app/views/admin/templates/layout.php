<!-- Main layout container -->
<div class="body-admin">
    <!-- Sidebar -->
    <div class="sidebar">
        <?php
        if (isset($sidebar)) {
            require_once "../kenta/app/views/admin/templates/" . $sidebar . ".php";
        }
        ?>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <!-- Nav menu -->
        <?php
        if (isset($nav)) {
            require_once "../kenta/app/views/admin/templates/" . $nav . ".php";
        }
        ?>
        
        <!-- Content area -->
        <div class="content-container">
            <?php require_once "../kenta/app/views/admin/" . $layout . ".php" ?>
        </div>
    </div>
</div>