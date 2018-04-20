<?php get_header(); ?>
<!--banner开始-->
  <div class="banner_box">
    <img  src="<?php bloginfo('template_url'); ?>/style/img/listbg3.jpg">
  </div>
<!--banner结束-->

<!--logo开始-->
<div class="list_logo">
  <div class="logo_btnbox" >
    <div class="btn btn_gradient"><span class="glyphicon glyphicon-certificate" ></span>&nbsp;关于我</div>
    <div class="btn btn_gradient2" ><span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍</div>
    <div class="btn btn_gradient3"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;吐槽啦！</div>
  </div>
</div>
<!--logo结束-->

<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<!--主页container开始-->
<div class="container contant">
    <!--二级导航栏开始-->
    <div class="second_nav">
        <!--特殊导航条开始-->
        <div class="nav_ul">
          <span><?php the_title(); ?></span>
        </div>
       <!--特殊导航条结束-->
    </div>
    <!--二级导航栏结束-->
    
    <div class="container-fluid" >
      <div class="row" >
         <div class="contant_page_list"><span><span class="glyphicon glyphicon-user"></span>作者：胡新春</span><span><span class="glyphicon glyphicon-dashboard"></span>时间：<?php the_time('Y年n月j日') ?></span><span><span class="glyphicon glyphicon-eye-open"></span>标签：<?php the_tags('标签：', ', ', ''); ?></span><span><span class="glyphicon glyphicon-eye-open"></span>评论：<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></span></div>
         <div class="contant_page">
         <?php the_content(); ?>
         </div>
        
      </div>
    </div>
</div>
<!--主页container结束-->
<!--主体部分结束-->

<?php else : ?>
<div class="errorbox">
	没有文章！
</div>
<?php endif; ?>
<?php get_footer(); ?>

