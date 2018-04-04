
<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <p class="copyright col-md-12">
        <?php the_field('footer_text'); ?>
      </p><!-- /copyright -->
      <p class="footer__tel--title"><?php the_field('footer_near_phone_text'); ?></p> 
      <a href="<?php the_field('footer_phone'); ?>" class="footer__tel"><?php the_field('footer_phone'); ?></a>

    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

</body>
</html>
