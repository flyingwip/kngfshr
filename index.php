<?php

?>

<?php get_header(); ?>

<a id="home"></a>
<header>
  <img src="<?php echo get_template_directory_uri()  ;?>/images/home_logo.png"  >
  <?php wp_nav_menu(  ); ?> 
  

  <div class="flags" >
    <? 
    //qtranxf_generateLanguageSelectCode(array('type' => 'dropdown'));?>
    <ul class="switcher">
    <a href="<?php echo site_url(); ?>/nl/"><li class="flag"><img src="<?php echo get_template_directory_uri() ; ?>/images/flags/nl.gif" width="36px" height="24px;"></li></a>        	
    <a href="<?php echo site_url(); ?>/en/" ><li class="flag"><img src="<?php echo get_template_directory_uri() ; ?>/images/flags/gb.png" width="36px" height="24px;"></li></a>
    </ul>

    
    

</div>

  </header>
<section class="intro">

	<div class="details">

			SINCE 1999
			<hr/>

		<div class="open">
			<img src="<?php echo get_template_directory_uri() ; ?>/images/times_open.png">	
		</div>
	</div>
</section>


<section class="images">
		
			<?php
			
			//one, eleven, seven, four, eight, ten
			$blaat = array('one','eleven','seven','four','eight','ten');
			$kul = array(1,11,7,4,8,10);
			for($i=0;$i<6;$i++){
				
         
				echo '<li class="gallery__item '.$blaat[$i].'"><a href="'.get_template_directory_uri().'/images/home/FullSizeRender-'.$kul[$i].'.jpg" class="fancybox" data-fancybox-group="gallery1"  ><img src="'.get_template_directory_uri().'/images/home/FullSizeRender-'.$kul[$i].'.jpg"></a></li>';
				//echo '<li style="background:#'.random_color().';height:640px;">Yo</li>';		
			}
			?>	
			
</section>



<a id="food"></a>
<section class="breakfast">
	
	<div class="container">

		<hr class="single">
		<h2 class="extra_width">Breakfast [till:13.00] </h2>
		<?php 
		$args = array(
		  'post_type'   => 'breakfast'
		);
		query_posts($args);
		?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3 class="lunch_title"><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3></li>
		        
		<?php endwhile;?>
		</ul>
	</div>
</section>		
<section class="lunch">
	
	<div class="container">

		<hr class="single">
		<h2>Lunch [till:16.00]</h2>
		<!-- <h3>10.00 - 16.00</h3> -->
		<?php 
		// $args = array(
		//   'post_type'   => 'lunch',
		//   'tax_query' => array(
		// 		array(
		// 			'taxonomy' => 'category',
		// 			'field' => 'slug',
		// 			'terms' => 'cheesetoast'
		// 		)
		// 	)
		// );
		//query_posts($args);
		?>
		 <ul>
		<!-- <?php while (have_posts()) : the_post(); ?>
		        <li><h3 class="lunch_title"><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3></li>
		        
		<?php endwhile;?> -->

		<li><span>Italiaanse bol</span><br/>
		<span class="lunch_sub"><?php echo __("<!--:nl-->Wit of waldkorn<!--:--><!--:en-->italian roll, white or whole wheat<!--:-->"); ?></span>
			<ul>
				<li>Item 1</li>
			</ul>
		</li>
		<li><span>Pita's</span><br/>
		<span class="lunch_sub"><?php echo __("<!--:nl-->Wit of bruin<!--:--><!--:en-->italian roll,Pita's white or light wheat<!--:-->"); ?></span>
			<ul>
				<li>Item 1</li>
			</ul>
		</li>
		<li><span>Sandwiches</span><br/>
		<span class="lunch_sub"><?php echo __("<!--:nl-->twee sneden volkorenbrood<!--:--><!--:en-->sandwiches two slices whole wheat bread<!--:-->"); ?></span>
			<ul>
				<li>Item 1</li>
			</ul>
		</li>
		<li><span>Club sandwiches</span><br/>
		<span class="lunch_sub"><?php echo __("<!--:nl-->drie sneden op toast <!--:--><!--:en-->Club sandwiches, three slices toast<!--:-->"); ?></span>
			<ul>
				<li>Item 1</li>
			</ul>
		</li>

		</ul>
<!-- 		<p class="note"><?php echo __("<!--:nl-->Keuze uit een witte of volkoren pita<!--:--><!--:en-->A choice of white or wholemeat pita<!--:-->"); ?></p>
		<hr class="seperator">
		
		<?php 
		$args = array(
		  'post_type'   => 'lunch',
		  'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'pita'
				)
			)
		);
		query_posts($args);
		?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3 class="lunch_title"><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3></li>
		        <li class="description"><?php the_content(); ?></li>
		<?php endwhile;?>
		</ul>
		<p class="note"><?php echo __("<!--:nl-->Keuze uit een witte of volkoren pita<!--:--><!--:en-->A choice of white or wholemeat pita<!--:-->"); ?></p>
		<hr class="seperator">
		
		<?php 
		$args = array(
		  'post_type'   => 'lunch',
		  'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'sandwich'
				)
			)
		);
		query_posts($args);
		?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3 class="lunch_title"><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3></li>
		        <li class="description"><?php the_content(); ?></li>
		<?php endwhile;?>
		</ul>
		<p class="note"><?php echo __("<!--:nl-->Twee sneden grof volkoren brood<!--:--><!--:en-->Two slices of whole wheat bread<!--:-->"); ?></p>
		<hr class="seperator">
		
		<?php 
		$args = array(
		  'post_type'   => 'lunch',
		  'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'broodje'
				)
			)
		);
		query_posts($args);
		?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3 class="lunch_title"><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3></li>
		        <li><?php the_content(); ?></li>
		<?php endwhile;?>
		</ul>
		<p class="note"><?php echo __("<!--:nl-->Keuze uit een witte bol<!--:--><!--:en-->A choice of a white or whole wheat roll.<!--:-->"); ?></p>
		<hr class="seperator">
		<?php 
		$args = array(
		  'post_type'   => 'lunch',
		  'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'special'
				)
			)
		);
		query_posts($args);
		?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
				<li><?php the_content(); ?></li>
		<?php endwhile;?>
		</ul> -->
		


		
	</div>	
	
	
</section>

<section class="dinner">
	<div class="container">

		<hr class="single">
		<h2>Dinner</h2>
		<h3>18.00 - 10.00</h3>
		
		<?php query_posts( array( 'post_type' => array('dinner') ) ); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3> </li>
		        <li><?php the_content(); ?></li>
		        <li>&nbsp;</li>
		<?php endwhile;?>
		</ul>
		
	</div>	
</section>

<section class="snacks">
	<div class="container">
		<hr class="single">
		<h2>Snacks</h2>
		<h3>16.00 - 23.00</h3>
		<?php query_posts( array( 'post_type' => array('snacks') ) ); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3> </li>
		        <li><?php the_content(); ?></li>
		        <li>&nbsp;</li>
		<?php endwhile;?>
		</ul>
		
		
	</div>		
</section>

<a id="beers"></a>
<section class="beer">
	<img src="<?php echo get_template_directory_uri()  ;?>/images/logo_grey.png" >
	<div class="container">
		<hr class="single">
		<h2><?php echo __("<!--:nl-->Bier<!--:--><!--:en-->Beer<!--:-->"); ?></h2>

		<?php query_posts( array( 'post_type' => array('beer'), 'posts_per_page'=>20 ) ); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li>
		        	
		        	<img src="<?php echo get_field('image'); ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" >
					<h3><?php the_title(); ?></h3>	
		        	<?php the_content(); ?>
		        </li>
		        
		<?php endwhile;?>
		</ul>
		
		
	</div>		
</section>

<a id="wine"></a>
<section class="wine">
	<div class="container">
		<hr class="single">
		<h2><?php echo __("<!--:nl-->Wijn<!--:--><!--:en-->Wine<!--:-->"); ?></h2>
		<!-- <h3><?php echo __("<!--:nl-->witte wijn<!--:--><!--:en-->white wine<!--:-->"); ?></h3> -->
		<?php
		$args = array(
		  'post_type'   => 'wine',
		  'tax_query' => array(
				array(
					'taxonomy' => 'color',
					'field' => 'slug',
					'terms' => 'white wines'
				)
			)
		);
		query_posts($args);
		?>		
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li>

		        	<img src="<?php echo get_field('image'); ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" >
		        	<h3><?php the_title(); ?></h3>
		        	<?php the_content(); ?>
		        </li>
		        
		<?php endwhile;?>
		</ul>
		
		<hr class="single">		
		<h2>&nbsp;</h2>

		<!-- <h3><?php echo __("<!--:nl-->rode wijn<!--:--><!--:en-->red wine<!--:-->"); ?></h3> -->

		
		<?php
		$args = array(
		  'post_type'   => 'wine',
		  'tax_query' => array(
				array(
					'taxonomy' => 'color',
					'field' => 'slug',
					'terms' => 'red wines'
				)
			)
		);
		query_posts($args);
		?>		
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li>

		        	<img src="<?php echo get_field('image'); ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>" >
		        	<h3><?php the_title(); ?></h3>
		        	<?php the_content(); ?>
		        </li>
		        
		<?php endwhile;?>
		</ul>
		
	</div>		
</section>


<a id="cocktails"></a>
<section class="cocktails">
	<img src="<?php echo get_template_directory_uri()  ;?>/images/logo_grey_transparant.png" >
	<div class="container">
		<hr class="single">
		<h2>COCKTAILS</h2>
		<?php query_posts( array( 'post_type' => array('cocktails') ) ); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li><h3><?php the_title(); ?> €<?php echo get_field('price') ; ?></h3> </li>
		        <li><?php the_content(); ?></li>
		        <li>&nbsp;</li>
		<?php endwhile;?>
		</ul>
		

	</div>
</section>


<a id="gallery"></a>
<section class="images">
		
			<?php
			
			$blaat = array('eightteen','twenty-three','zero','three','twenty-two','twenty-one');
			$kul = array(18,23,0,3,22,21);

			for($i=0;$i<6;$i++){
				echo '<li class="gallery__item '.$blaat[$i].'"><a href="'.get_template_directory_uri().'/images/home/FullSizeRender-'.$kul[$i].'.jpg" class="fancybox" data-fancybox-group="gallery1"  ><img src="'.get_template_directory_uri().'/images/home/FullSizeRender-'.$kul[$i].'.jpg"></a></li>';
				//echo '<li style="background:#'.random_color().';height:640px;">Yo</li>';		
			}


			?>	
			
</section>


<a id="shirts"></a>
<section class="shirts">
	<div class="container">
		<hr class="single">
		<h2>SHIRTS</h2>	
		<h1 >ARE YOU DOWN WITH THE KING?</h1>
		<?php query_posts( array( 'post_type' => array('shirts') ) ); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		        <li>
		        	
					<img src="<?php echo get_field('shirt'); ?>">	
					

		        </li>
		        
		<?php endwhile;?>
		</ul>
		
<a href="mailto:info@kingfisher.nl?subject=Order Shirts">		
<div class="price-container">
  <div class="price">
    <span class="label">Buy</span>
    <span class="number">€20,-</span>
    <span class="label">Now</span>
  </div>
</div>
</a>
		
		
		
	</div>		
</section>



<?php get_footer(); ?>