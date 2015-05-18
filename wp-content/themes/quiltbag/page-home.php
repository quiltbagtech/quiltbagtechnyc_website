<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>
          <div class="m-splitbar">
            <div class="m-splitbar__segment">
            </div>
            <div class="m-splitbar__segment">
              <p><?php echo get_bloginfo('description'); ?></p>
            </div>
          </div>
          <section class="l-main">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                  <?php the_content(); ?>


              <?php endwhile; else : ?>
                  <article id="post-not-found" class="hentry cf">
                      <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                      <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
                    </footer>
                  </article>
              <?php endif; ?>

              <div class="m-box m-box--social">
                <a href="mailto:info@quiltbagtech.nyc" class="link--mail">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512">
                    <path d="M256 0c-141.385 0-256 114.615-256 256s114.615 256 256 256 256-114.615 256-256-114.615-256-256-256zM128 128h256c4.569 0 9.002 0.981 13.072 2.831l-141.072 164.584-141.072-164.585c4.070-1.848 8.503-2.83 13.072-2.83zM96 352v-192c0-0.67 0.028-1.336 0.070-2l93.832 109.471-92.799 92.799c-0.722-2.668-1.103-5.443-1.103-8.27zM384 384h-256c-2.827 0-5.601-0.381-8.27-1.104l91.059-91.059 45.211 52.749 45.212-52.747 91.058 91.060c-2.67 0.72-5.443 1.101-8.27 1.101zM416 352c0 2.827-0.381 5.6-1.103 8.27l-92.8-92.799 93.833-109.471c0.042 0.664 0.070 1.33 0.070 2v192z"></path>
                  </svg>
                  info@quiltbagtech.nyc
                </a>
              </div>
              <div class="m-box m-box--social">
                <a href="http://twitter.com/user/quiltbag" class="link--twitter">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" viewBox="0 0 512 512">
                    <path d="M256 0c-141.385 0-256 114.615-256 256s114.615 256 256 256 256-114.615 256-256-114.615-256-256-256zM383.239 190.74c0.126 2.816 0.19 5.648 0.19 8.494 0 86.755-66.035 186.794-186.792 186.794-37.075 0-71.584-10.869-100.638-29.498 5.136 0.609 10.362 0.92 15.661 0.92 30.759 0 59.067-10.496 81.536-28.105-28.729-0.527-52.974-19.51-61.329-45.592 4.009 0.766 8.122 1.18 12.352 1.18 5.988 0 11.789-0.805 17.296-2.305-30.032-6.033-52.663-32.566-52.663-64.375 0-0.277 0-0.552 0.006-0.826 8.85 4.917 18.974 7.871 29.735 8.212-17.616-11.773-29.207-31.868-29.207-54.646 0-12.032 3.238-23.31 8.89-33.005 32.38 39.72 80.755 65.856 135.317 68.595-1.119-4.806-1.7-9.816-1.7-14.962 0-36.256 29.396-65.649 65.652-65.649 18.883 0 35.946 7.972 47.921 20.731 14.954-2.943 29.004-8.407 41.69-15.931-4.902 15.331-15.312 28.197-28.866 36.322 13.28-1.587 25.933-5.116 37.706-10.337-8.797 13.164-19.927 24.727-32.757 33.983z"></path>
                  </svg>
                  @quiltbagtech
                </a>
              </div>
              <div class="m-box m-box--titled">
                <!--
                <h2>About</h2>
                <p>The acronym ‘QUILTBAG’ is like ‘LGBT’, but includes several words not listed there, like queer, intersex, and asexual. What about the ++? In some programming languages, using two plus signs is a shortcut for adding 1 to a number. We are using it here because even an acronym as robust as QUILTBAG will invariably leave out some identities, and we want to make clear that our terminology, like our inclusiveness, is not finite, but growing and changing. We are using ++ to signal our interest in making space for queer, trans, and ++ people in tech.</p>
                -->
                <?php if ( is_active_sidebar( 'contentarea2' ) ) : ?>

                  <?php dynamic_sidebar( 'contentarea2' ); ?>

                <?php else : ?>

                  <div class="no-widgets">
                    <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
                  </div>

                <?php endif; ?>
              </div>
              <div class="m-box m-box--half">
                The acronym ‘QUILTBAG’ is like ‘LGBT’, but includes several words not listed there, like queer, intersex, and asexual. What about the ++?
              </div>
              <div class="m-box m-box--half">
                The acronym ‘QUILTBAG’ is like ‘LGBT’, but includes several words not listed there, like queer, intersex, and asexual. What about the ++?
              </div>
           </section>
           <section class="l-rail">
             <div class="m-box" --xs>
              <p><span class="emphasis">Queer Tech New York City</span></p>
             </div>
             <!--
            <div class="m-box m-box - - nav"> //fix dashes if you uncomment
              <ul>
                <li><a href="#">Code of Conduct</a></li>
                <li><a href="#">Other Link</a></li>
                <li><a href="#">Other Link</a></li>
              </ul>
            </div>
            -->
            <?php
            $menu_settings = array(
              'theme_location'  => 'main_nav',
              'menu'            => '',
              'container'       => 'div',
              'container_class' => 'm-box m-box--nav',
              'container_id'    => '',
              'menu_class'      => '',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => ''
            );

            wp_nav_menu( $menu_settings );
            ?>
           </section>


            </main>

<?php get_footer(); ?>
