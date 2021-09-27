<footer class="footer">
    <div class="container">
      <a class="footer__phone phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
      <a class="footer__email email" href="mailto:<?php the_field('email') ?>"><span><?php the_field('email') ?></span></a>
    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>

</html>