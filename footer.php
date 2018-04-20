<?php
/**
 */
?>



<!--脚部开始-->
<div class="footer_box">
    <div class="container footer">
      <div class="copyright"><p>Copyright © <?php do_action( 'twentyfifteen_credits' ); ?> All Rights Reserved. 备案号:鄂ICP备15020375号-1</p>
      <p>程序:<?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></p>
      </div>
    </div>
</div>
<!--脚部结束-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/style/bootstrap3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/style/js/left_nav.js"></script>

<?php wp_footer(); ?>
</body>
</html>
