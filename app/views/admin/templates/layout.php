<div class="body-admin">
    <div class="container">
        <!-- NAV MENU -->
        <div>
            <?php
            if (isset($nav)) {
                require_once "../kenta/app/views/admin/templates/" . $nav . ".php";
            }
            ?>
        </div>
        <!-- SIDE BAR -->
        <div>
            <?php
            if (isset($sidebar)) {
                require_once "../kenta/app/views/admin/templates/" . $sidebar . ".php";
            }
            ?>
        </div>
        <!-- CONTENT -->
        <div class="bg-white">
            <?php require_once  "../kenta/app/views/admin/" . $layout . ".php" ?>
        </div>
    </div>
</div>