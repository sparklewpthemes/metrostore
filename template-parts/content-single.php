<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MetroStore
 */

?>

  <div class="entry-detail">
    <?php 
      if( has_post_thumbnail() ){
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', true);
    ?>
      <div class="entry-photo">
        <figure><img src="<?php echo esc_url($image[0]); ?>" alt="Blog"></figure>
      </div>
    <?php } ?>
    <div class="entry-meta-data"> 
        <span class="author"> <i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span> 
        <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <?php the_category( ', ' ); ?> </span> 
        <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; <?php comments_popup_link( '0', '1', '%' ); ?> </span> 
        <span class="date"><i class="fa fa-calendar"></i>&nbsp; <?php echo esc_attr(get_the_date());?></span> 
    </div>
    <div class="content-text clearfix">
        <?php
          the_content();

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'metrostore' ),
            'after'  => '</div>',
          ) );
        ?>
    </div>
  </div>
  <!-- Related Posts -->
 <!--  <div class="single-box">
    <h2>Related Posts</h2>
    <div class="slider-items-products">
      <div id="related-posts" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 fadeInUp">
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img2.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">Qui ut ceteros comprehensam</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 1 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-05 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img3.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 5 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-15 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img4.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">Lorem ipsum dolor</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 6 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-11 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img5.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">Sed ut perspiciatis</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 10 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2016-01-05 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img6.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">Iste natus error</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 0 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-25 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img7.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">omnis iste natus</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 8 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2016-01-09 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
          <div class="product-item">
            <article class="entry">
              <div class="entry-thumb image-hover2"> <a href="#"> <img src="images/blog-img1.jpg" alt="Blog"> </a> </div>
              <div class="entry-info">
                <h3 class="entry-title"><a href="#">unde omnis iste</a></h3>
                <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 2 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2016-01-02 </span> </div>
                <div class="entry-more"> <a href="#">Read more</a> </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- ./Related Posts --> 
  <!-- Comment -->
  <!-- <div class="single-box">
    <h2 class="">Comments</h2>
    <div class="comment-list">
      <ul>
        <li>
          <div class="avartar"> <img src="images/avatar.png" alt="Avatar"> </div>
          <div class="comment-body">
            <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
            <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
          </div>
        </li>
        <li>
          <ul>
            <li>
              <div class="avartar"> <img src="images/avatar.png" alt="Avatar"> </div>
              <div class="comment-body">
                <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
              </div>
            </li>
            <li>
              <div class="avartar"> <img src="images/avatar.png" alt="Avatar"> </div>
              <div class="comment-body">
                <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <div class="avartar"> <img src="images/avatar.png" alt="Avatar"> </div>
          <div class="comment-body">
            <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
            <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
          </div>
        </li>
        <li>
          <div class="avartar"> <img src="images/avatar.png" alt="Avatar"> </div>
          <div class="comment-body">
            <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
            <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="single-box comment-box">
    <h2>Leave a Comment</h2>
    <div class="coment-form">
      <p>Make sure you enter the () required information where indicated. HTML code is not allowed.</p>
      <div class="row">
        <div class="col-sm-6">
          <label for="name">Name</label>
          <input id="name" type="text" class="form-control">
        </div>
        <div class="col-sm-6">
          <label for="email">Email</label>
          <input id="email" type="text" class="form-control">
        </div>
        <div class="col-sm-12">
          <label for="website">Website URL</label>
          <input id="website" type="text" class="form-control">
        </div>
        <div class="col-sm-12">
          <label for="message">Message</label> <textarea name="message" id="message" rows="8" class="form-control"></textarea>
        </div>
      </div>
      <button class="button"><span>Post Comment</span></button>
    </div>
  </div> -->
  <!-- ./Comment --> 