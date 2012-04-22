<?php
  get_header();
  the_post(); 
?>
      <div class="row-fluid">
        <div class="span8">
          <div class="row well <?php post_class(); ?>" id="<?php the_ID(); ?>">
            <div class="span7">
              <h2><a href="<?php the_permalink(); ?>" title="<?php printf(__('Permalink to %s', 'uscrs'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
              <h6>
                Posted by <a href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a>
                on <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr>
                <?php edit_post_link( __( 'Edit', 'your-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">[", "]</span>" ) ?>              
              </h6>
              <p>
                <?php the_content(); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'uscrs' ) . '&after=</div>') ?>

                <span style="float: left"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></span>
                <span style="float: right"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></span>
              </p>
            </div>
          </div>

        </div><!--span8-->

        <?php get_sidebar(); ?>

      </div>
<?php get_footer(); ?>
