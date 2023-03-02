<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
                <span class="smini-visible fw-bold tracking-wide fs-lg">
                    c<span class="text-primary">b</span>
                </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="<?php bloginfo('url'); ?>">
                    <span class="smini-hidden">
                        <i class="fa fa-fire text-primary"></i>

                        <span class="fs-4 text-dual">Dev</span><span class="fs-4 text-primary">Orhan</span>
                    </span>
                </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">



            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">

                <!-- Visible only in mini mode -->
                <div class="smini-visible-block animated fadeIn px-3">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="smini-hidden text-center mx-auto">
                    <a class="img-link" href="<?php echo home_url() ?>">
                        <img class="img-avatar" src="<?php echo get_template_directory_uri() . '/assets/img/orhan-osmanoglu-devorhan.jpg' ?>" alt="">
                    </a>
                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <?php $current_user = wp_get_current_user(); ?>

                            <span class="link-fx text-dual fs-sm fw-semibold text-uppercase">
                                Orhan Osmanoğlu
                            </span>
                        </li>

                        <?php if (is_user_logged_in()) : ?>
                            <li class="list-inline-item">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="link-fx" href="<?php echo admin_url() ?>">
                                    <i class="fa fa-user-cog text-info"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-fx text-dual" href="<?php echo wp_logout_url(home_url()) ?>">
                                    <i class="fa fa-sign-out-alt text-danger"></i>
                                </a>
                            </li>
                        <?php else : ?>

                        <?php endif; ?>


                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->


            <!-- Side Navigation -->
            <div class="content-side content-side-full">


                <ul class="nav-main">
                    <?php
                    $getMenu = wp_get_nav_menu_items('sidebar-menu');
                    if ($getMenu) {
                        foreach ($getMenu as $item) { ?>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?php echo $item->url ?>">
                                    <i class="nav-main-link-icon fa fa-arrow-alt-circle-right"></i>
                                    <span class="nav-main-link-name"><?php echo $item->title  ?></span>
                                </a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>