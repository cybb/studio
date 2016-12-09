<?php  

get_header(); 


while(have_posts()):the_post();?>


<div class="uslugi">
  <h2><?php the_title();?></h2>
  <div class="contents__uslugi"><?php the_content(); ?></div> 
</div>






 







<?php endwhile;
















//get_template_part('banner');  
//get_template_part('features'); 
//get_template_part('main');  

get_footer();


?>
