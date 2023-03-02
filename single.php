<?php get_header() ?>

<!-- main container start -->
<main id="main-container">
    <!-- page content start -->
    <div class="content" style="max-width: 1000px">
        <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
            <a class="breadcrumb-item" href="<?php echo home_url() ?>">Ana Sayfa</a>
            <a class="breadcrumb-item" href="javascript:void(0)">Kategori A</a>
            <span class="breadcrumb-item active"><?php echo the_title() ?></span>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default p-2 p-md-3">
                        <h2 class="block-title"><?php the_title() ?></h2>
                        <div class="block-options">
                            <a href="<?php echo get_edit_post_link() ?>" class="btn-block-option text-elegance fs-sm">
                                <i class="far fa-fw fa-edit"></i> Düzenle
                            </a>
                            <a href="<?php echo get_delete_post_link() ?>" class="btn-block-option text-pulse fs-sm">
                                <i class="far fa-fw fa-trash-alt "></i> Sil
                            </a>
                        </div>
                    </div>
                    <div class="block-content post-content p-2 p-md-3">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- page content end -->
</main>
<!-- main container end -->

<?php get_footer() ?>

