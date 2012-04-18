<?php get_header(); ?>
      <div class="row-fluid">
        <div class="span12">
          <div class="row">
            <h1>Underwater Robotics Blog</h1>
            &nbsp;
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span8">
          <?php while(have_posts()) : the_post() ?>

          <div class="row well <?php post_class(); ?>" id="<?php the_ID(); ?>">
            <div class="span7">
              <h2><a href="<?php the_permalink(); ?>" title="<?php printf(__('Permalink to %s', 'uscrs'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
              <h6>
                Posted by <a href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a>
                on <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr>
              </h6>
              <p>
                <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'uscrs' )  ); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'uscrs' ) . '&after=</div>') ?>
              </p>
            </div>
          </div>
          <?php endwhile; ?>

        </div><!--span8-->

        <?php get_sidebar(); ?>

      </div>
<?php get_footer(); ?>
