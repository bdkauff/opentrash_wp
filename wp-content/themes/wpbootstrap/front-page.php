<?php get_header(); ?>

<div class="row">
	<h3 class="tagline">Empowering Citizens to Study Urban Waste</h3>
	<div class="span4 content-container">
		<!-- Widget pipes in posts under the following categories: 'featured1' , 'featured2' and 'featured3'. Takes other args if needed-->
		<?php echo do_shortcode('[catlist 
									name=featured1
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>
	</div>
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist
									name=featured2
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>	</div>
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist
									name=featured3
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>
	</div>
</div>

<!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD-->

 <!-- Little divider belt-->
<div class="colorbelt"></div>

<div class="row"> 
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist 
							name=featured1
							excerpt=no
							excerpt_size=20
							thumbnail=yes
							thumbnail_size=large
							thumbnail_class=frontpage_projects]'); ?>
	</div>
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist 
							name=featured1
							excerpt=no
							excerpt_size=20
							thumbnail=yes
							thumbnail_size=large
							thumbnail_class=frontpage_participate]'); ?>
	</div>
	<div class="span2" style="background: gray; min-height: 265px;">
		<p>social mediea, mailing letter, etc.</p>
	</div>
	<div class="span2 content-container">
		<!-- Make a list of the most recent posts. Takes args if needed-->
		<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
	</div>
</div>

<div class="row">
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist 
							name=featured1
							excerpt=no
							excerpt_size=20
							thumbnail=yes
							thumbnail_size=full
							thumbnail_class=frontpage_projects]'); ?>
	</div>
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist 
							name=featured1
							excerpt=no
							excerpt_size=20
							thumbnail=yes
							thumbnail_size=full
							thumbnail_class=frontpage_participate]'); ?>
	</div>
	<div class="span2 content-container" style="max-height:250px">
		<!-- Widget pipes in latest post under the 'waste fact checker' category-->
		<?php echo do_shortcode('[catlist
									name=waste-fact-checker
									excerpt=yes
									thumbnail=yes
									date=yes]'); ?>
	</div>

	<div class="span2 content-container" style="max-height:250px">
		<!-- Widget pipes in list tags, the length of which is arbitrary-->
		<?php echo do_shortcode('[catlist
									name=waste-fact-checker
									excerpt=yes
									thumbnail=yes
									date=yes]'); ?>

	</div>
</div>
<div class="row">
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist 
							name=featured1
							excerpt=no
							excerpt_size=20
							thumbnail=yes
							thumbnail_size=full
							thumbnail_class=frontpage_projects]'); ?>
	</div>
	<div class="span4 content-container">
		<?php echo do_shortcode('[catlist 
							name=featured1
							excerpt=no
							excerpt_size=20
							thumbnail=yes
							thumbnail_size=full
							thumbnail_class=frontpage_participate]'); ?>
	</div>
</div>



<?php get_footer(); ?>