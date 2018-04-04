<?php /* Template Name: Home Page */ get_header(); ?>

  <section role="main">

    <div class="first__title--block">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="page__title"><?php the_field('page_title'); ?></h1>
            <i class="page__title--bars"></i>
          </div>
        </div>
      </div>
    </div><!-- first__title--block -->

    <div class="second__info--block">
      <div class="container">

        <div class="row first__info--row">
          <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="info__block--left">
              <h4 class="yellow__after"><?php the_field('first_title'); ?></h4>
              <p><?php the_field('first_undertitle'); ?></p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12">
              <div class="info__block--right">
                <?php $image = get_field('about_image'); if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
                <h4><?php the_field('under_image_title'); ?></h4>
                <p><?php the_field('under_image_undertitle'); ?></p>
              </div>
          </div>
        </div><!-- first__info--row -->

        <div class="row second__info--row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <a href="#" class="second__row--button"><?php the_field('button_text'); ?></a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p><?php the_field('text_near_button'); ?></p>
          </div>
        </div><!-- second__info--row -->

        <div class="row third__info--row">
          <div class="col-md-12 col-sm-12 col-xs-12">

          	<?php if( have_rows('third_sublock') ): while ( have_rows('third_sublock') ) : the_row(); ?>
            <div class="third__row--inner">
              <h4><?php the_sub_field('sublock_title'); ?></h4>
              <p><?php the_sub_field('sublock_undertitle'); ?></p>
            </div>
            <?php endwhile; endif; ?>

            <div class="third__row--inner--special">
              <?php $image = get_field('third_subblock_image'); if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
            </div>
          </div>
        </div><!-- third__info--row -->

      </div><!-- container -->
    </div><!-- second__info--block -->

    <div class="third__services--block">
      <div class="container container-wide">
        <div class="row">

          <h4 class="yellow__after"><?php the_field('second_title'); ?></h4>

          <?php if( have_rows('services') ): while ( have_rows('services') ) : the_row();
          	$image = get_sub_field('service_image'); ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="service__item--wrap">
              <div class="service__img--wrap">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              </div>
              <div class="service__decription--wrap">
                <h4><?php the_sub_field('service_title'); ?></h4>
                <ul class="services__list">
                  <?php if( have_rows('servicess_list') ): while ( have_rows('servicess_list') ) : the_row(); ?>
                  	<li><?php the_sub_field('services_list_item'); ?></li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div><!-- third__services--block -->

    <div class="fourth__contact--block">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h4 class="yellow__after"><?php the_field('contact_title'); ?></h4>
            <div class="contact__form--wrap">
              <h4><?php the_field('form_title'); ?></h4>
              <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form middle"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div><!-- fourth__contact--block -->
		  
    <div class="fifth__video--block">
      <div class="container container-wide">
        <div class="row">
          <h4 class="yellow__after"><?php the_field('fourth_title'); ?></h4>

          <?php if( have_rows('video_wrap') ): while ( have_rows('video_wrap') ) : the_row(); ?>
	          <div class="col-md-3 video__wrap">
	            <?php the_sub_field('video_item'); ?>
	            <div class="video__descr--wrap">
	              <h4><?php the_sub_field('video_title'); ?></h4>
	              <p><?php the_sub_field('video_undertitle'); ?></p>
	            </div>
	          </div>
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div><!-- fifth__video--block -->

    <div class="sixth__slider--block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="yellow__after"><?php the_field('fifth_title'); ?></h4>
            <div class="owl-carousel">

              <?php if( have_rows('slider_wrap') ): while ( have_rows('slider_wrap') ) : the_row(); ?>
	              <div class="owl__text--inner">
	                <p class="owl__inner--main"><?php the_sub_field('slider_text'); ?></p>
	                <p class="owl__inner--title"><?php the_sub_field('slider_title'); ?></p>
	              </div>
              <?php endwhile; endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div><!-- sixth__slider--block -->

  </section><!-- /section -->
</div><!-- /wrapper -->


<?php get_footer(); ?>
