<?php
  get_header();
  the_post();
?>
      <div class="row-fluid">
        <div class="span12">
          <div class="row">
            <h1><?php the_title(); ?></h1>
            &nbsp;
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span8">

          <div class="row well <?php post_class(); ?>" id="<?php the_ID(); ?>">
            <div class="span7">
              <p>
                <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'uscrs' )  ); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'uscrs' ) . '&after=</div>') ?>
              </p>
            </div>
          </div>

        </div><!--span8-->

        <?php get_sidebar(); ?>

      </div>
<?php get_footer(); ?>
