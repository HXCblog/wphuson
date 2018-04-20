<?php get_header(); ?>


<!--banner开始-->
<div id="banner" >
   <div id="animate-layer">
        <s class="clouds cloud-01"></s>
        <s class="clouds cloud-02"></s>
        <s class="clouds cloud-03"></s>
        <s class="clouds cloud-04"></s>
        <s class="clouds cloud-05"></s>
        <s class="clouds cloud-06"></s>
        <s class="clouds cloud-07"></s>
        <s class="balloon balloon-01"></s>
        <s class="balloon balloon-02"></s>
        <s class="bg"></s>
    </div>
</div>
<!--banner结束-->

<!--logo开始-->
<div class="logo">
  <div class="logo_img"><img src="<?php bloginfo('template_url'); ?>/style/img/logo.jpg"></div>
  <div class="logo_title"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
  <div class="logo_mo"><?php bloginfo('description'); ?></div>
  <div class="logo_btnbox" >
    <div class="btn btn_gradient"><span class="glyphicon glyphicon-certificate" ></span>&nbsp;关于我</div>
    <div class="btn btn_gradient2"><span class="glyphicon glyphicon-heart" ></span>&nbsp;左邻右舍</div>
    <div class="btn btn_gradient3"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;吐槽啦！</div>
  </div>
</div>
<!--logo结束-->

<!--主页container开始-->
<div class="container contant">
    <!--二级导航栏开始-->
    <div class="second_nav">
        <!--特殊导航条开始-->
        
        <div class="nav_ul">
        <li <?php if (is_home()) { echo 'class="current"';} ?>><a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">主页</a></li>
        <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
        </div>
     
       <!--特殊导航条结束-->
    </div>
    <!--二级导航栏结束-->
    
    <div class="container-fluid">
    <div class="row" >
        <!--左侧盒子开始-->
        <div class="col-md-3 left_row">
            <!--左侧边栏框开始-->
          <div class="left_box">
            <!--工具开始-->
              <div class="left_cell">
                <!--书签标题-->
                  <div class="ui red ribbon label lmar left_fla" style="background: #337ab7;">
                    工具导航
                  </div>

                  <div style="width: 300px;height: 100px;">
                    <div  class="card_img">
                      <a href="http://weibo.com/u/2092882521">
                        <img id="sinasite" src="<?php bloginfo('template_url'); ?>/style/img/sinap.png">
                        <p>新浪微博</p>
                      </a>
                    </div>

                    <div class="card_img">
                      <a title="5345" onclick="funem();" href="">
                        <img id="emailsite" src="<?php bloginfo('template_url'); ?>/style/img/emailp.png">
                        <p>博主邮箱</p>
                      </a>
                    </div>
                      <script>
                      function funem(){
                        alert("博主邮箱:hi@huxinhcun.com");
                      }
                      </script>
                    
                    <div class="card_img">
                      <a href="http://www.huxinchun.com/Home/content/71">
                        <img id="appsite" src="<?php bloginfo('template_url'); ?>/style/img/app.png">
                        <p>本站APP</p>
                      </a>
                    </div>

                    <div class="card_img">
                      <a href="https://github.com/HXCblog/HXCblog-PC-">
                        <img id="githubsite" src="<?php bloginfo('template_url'); ?>/style/img/gitp.png">
                        <p>&nbsp;GitHub</p>
                      </a>
                    </div>
                </div>
              </div>
              <!--工具结束-->

              <!--热门文章-->
              <div class="left_cell">
                <!--书签标题-->
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second_sidebar') ) : ?>	
                <div class="ui red ribbon label lmar left_fla" style="background: #d9534f">
                  最新文章
                </div>
                <!--数字-->
          		<div class="left_list_box">
					<?php
						$posts = get_posts('numberposts=6&orderby=post_date');
						foreach($posts as $post) {
							setup_postdata($post);
							echo '<li class="left_list"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
						}
						$post = $posts[0];
					?>
				</div>
                <!--列表-->
         

               <?php endif; ?>
              </div>
              
              <!--友好-->
              <div class="left_cell" style="height:170px;">
                <img width="298" height="auto" src="<?php bloginfo('template_url'); ?>/style/img/huxinchun.gif">
              </div>
              
              <!--文档归类-->
              <div class="left_cell" style="height: 300px;">
                <div class="ui red ribbon label lmar left_fla" style="background: #d9534f">
                  文章归档
                </div>
                <!--数字-->
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth_sidebar') ) : ?>		
                <!--列表-->
                <div class="data_tag">
                  <?php wp_get_archives('limit=10'); ?>
                </div>
		           <?php endif; ?>
              </div>
              <!--结束-->

              <!--左邻右舍-->
              <div class="left_cell" style="height: 420px;">
                <!--书签标题-->
                  <div class="ui red ribbon label lmar left_fla" style="background: #5cb85c">
                    左邻右舍
                  </div>

                  <div class="left_narbox">
                  <div class="left_narcard">
                    <div class="narcard_img"><img width="49" height="49" src="<?php bloginfo('template_url'); ?>/style/img/logo.jpg"></div>
                    <div class="narcard_name">胡新春博</div>
                  </div>
                
                  </div>
                  <!--更多友联-->
                  <div id="more_friend">
                       <button style="ma" type="button" class="btn btn-info">
                       <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color: #c14442"></span>&nbsp;更多邻居</button>
                  </div>
                   
              </div>
              <!--左邻右舍-->
          </div>
          <!--左侧边栏框结束-->
        </div>
        <!--左侧盒子结束-->


        <!--右侧盒子开始-->
        <div class="col-md-9" style="display: inline-block;">
           <!--右侧框开始-->
              <div class="right_box" >
                 <!--文章列表开始-->
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                  <div class="right_cell">
                    <!--圆圈日期开始-->
                      <div  class="round-date red ">
                        <span class="month"><?php the_time('n月') ?></span>
                        <span class="day"><?php the_time('j日') ?></span>
                      </div>
                    <!--圆圈日期结束-->
                  <div class="page_title"><?php the_title(); ?></div>
                   
                   <!--描述-->
                    <div class="page_content">
                      <div class="page_content_left">
                        <img class="thumb" alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />
                      </div>
                      <div class="page_content_right">
                      文章摘要：<?php the_excerpt(); ?>
                      </div>
                    </div>
              
                    <!--标签开始-->
                    <div class="tag_box">
                        <div class="tag_div"><span class="glyphicon glyphicon-user"></span>&nbsp;作者:<?php the_author(); ?></div>
                        <div class="tag_div"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;时间:<?php the_time('Y年n月j日') ?></div>
                        <div class="tag_div"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;评论:<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></div>
                        <div class="tag_div"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;<?php the_tags('标签:', ', ', ''); ?></div>
                    </div>
                    <!--标签结束-->
                  </div>
                  </a>
                <?php endwhile; ?>

                <?php else : ?>
                  输出找不到文章提示
                <?php endif; ?>
        
                <!--文章列表结束-->

                <!--分页-->
                <div class="right_carnum">
                  <nav aria-label="...">
                    <ul class="pagination">
                      <p class="clearfix"><?php previous_posts_link('<< 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 >>', 0); ?></span></p>
                    </ul>
                  </nav>
                </div>
              </div>
              <!--右侧框结束-->
        </div>
        <!--右侧盒子结束-->
    </div>
    </div>
</div>
<!--主页container结束-->
<!--主体部分结束-->

<?php get_footer(); ?>
