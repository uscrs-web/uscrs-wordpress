<?php
  get_header();
?>
      <div class="row-fluid">
        <div class="span8">
          <div class="row well <?php post_class(); ?>" id="<?php the_ID(); ?>">
            <div class="span7">
              <h2>Page not found!</h2>
              <p>
                <a href="javascript:history.go(-1)">Go back</a>
              </p>
            </div>
          </div>

        </div><!--span8-->

        <?php get_sidebar(); ?>

      </div>
<?php get_footer(); ?>
