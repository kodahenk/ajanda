<?php get_header() ?>

<!-- main container start -->
<main id="main-container">
  <!-- page content start -->
  <div class="content" style="max-width: 1000px">

    <div class="block block-rounded">
      <div class="block-content block-content-full">
        <div class="py-3 text-center">
          <h1 class="fw-bold mb-2">
            <?php bloginfo('name'); ?>
          </h1>
          <h2 class="fs-base fw-medium text-muted mb-3">
            <?php bloginfo('description'); ?>
          </h2>
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
              <form action="be_pages_hosting_support.html" method="POST">
                <div class="input-group input-group-lg">
                  <input type="text" class="form-control" placeholder="">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">

        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
            <div class="card mb-2 rounded">
              <div class="card-body p-3">
                <h3 class="fs-4 m-0">
                  <i class="fa fa-bookmark text-primary-lighter me-1"></i>
                  <a class="fw-semibold" href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                  </a>
                </h3>
              </div>
            </div>
          <?php } // end while 
          ?>

        
        <?php
        } // end if
        ?>
      </div>
      <div class="col-md-4">
        <div class="list-group">

          <?php
          $args = [
            "posts_per_page" => 8,
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'ID',
          ];
          $the_query = new WP_Query($args);
          ?>

          <?php
          if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
              $the_query->the_post();
          ?>
              <a class="fs-m fs-sm list-group-item list-group-item-action px-3 py-2 fs-m" href="<?php the_permalink() ?>">
                <?php the_title() ?>
              </a>
          <?php } // end while
          } // end if
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- page content end -->


  <?php get_footer() ?>

</main>
<!-- main container end -->