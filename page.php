<?php get_header(); ?>
<!--banner��ʼ-->
  <div class="banner_box">
    <img  src="<?php bloginfo('template_url'); ?>/style/img/listbg3.jpg">
  </div>
<!--banner����-->

<!--logo��ʼ-->
<div class="list_logo">
  <div class="logo_btnbox" >
    <div class="btn btn_gradient"><span class="glyphicon glyphicon-certificate" ></span>&nbsp;������</div>
    <div class="btn btn_gradient2" ><span class="glyphicon glyphicon-heart" ></span>&nbsp;��������</div>
    <div class="btn btn_gradient3"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;�²�����</div>
  </div>
</div>
<!--logo����-->

<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<!--��ҳcontainer��ʼ-->
<div class="container contant">
    <!--������������ʼ-->
    <div class="second_nav">
        <!--���⵼������ʼ-->
        <div class="nav_ul">
          <span><?php the_title(); ?></span>
        </div>
       <!--���⵼��������-->
    </div>
    <!--��������������-->
    
    <div class="container-fluid" >
      <div class="row" >
         <div class="contant_page_list"><span><span class="glyphicon glyphicon-user"></span>���ߣ����´�</span><span><span class="glyphicon glyphicon-dashboard"></span>ʱ�䣺<?php the_time('Y��n��j��') ?></span><span><span class="glyphicon glyphicon-eye-open"></span>��ǩ��<?php the_tags('��ǩ��', ', ', ''); ?></span><span><span class="glyphicon glyphicon-eye-open"></span>���ۣ�<?php comments_popup_link('0 ������', '1 ������', '% ������', '', '�����ѹر�'); ?></span></div>
         <div class="contant_page">
         <?php the_content(); ?>
         </div>
        
      </div>
    </div>
</div>
<!--��ҳcontainer����-->
<!--���岿�ֽ���-->

<?php else : ?>
<div class="errorbox">
	û�����£�
</div>
<?php endif; ?>
<?php get_footer(); ?>

