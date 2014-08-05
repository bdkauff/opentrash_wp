<?php get_header(); ?>

<div class="row">
	<div class="span3"></div>
	<div class="span6 tagline">
		<h3>Empowering Citizens to Study Urban Waste</h3>
	</div>
		<div class="span3"></div>
</div>

<div class="row">
	<div class="span4">
		<h4>FEATURED PROJECTS</h4>
	</div>
</div>
<div class="row">
	<div class="span4">
		<!-- Widget pipes in posts under the following categories: 'featured1' , 'featured2' and 'featured3'. Takes other args if needed-->
		<?php echo do_shortcode('[catlist 
									name=featured1
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>
	</div>
	<div class="span4">
		<?php echo do_shortcode('[catlist
									name=featured2
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>	</div>
	<div class="span4">
		<?php echo do_shortcode('[catlist
									name=featured3
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>
	</div>
</div>

<!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD--> <!-- THIS IS THE FOLD--><!-- THIS IS THE FOLD-->

 <!-- Little divider belt-->

<div class="row">
	<div id="orange" class="span4 colorbelt-strip"></div>
	<div id="blue"class="span4 colorbelt-strip"></div>
	<div id="green"class="span4 colorbelt-strip"></div>
</div>
		<div class="row">
			<div class="span4">
				<h4> RESEARCH PROJECTS </h4>
			</div>
			<div class="span4">
				<h4> PARTICIPATE </h4>
			</div>
			<div class="span4">
				<h4> BLOG </h4>
			</div>
		</div>
		<div class="row"> 
			<div class="span4">
				<?php echo do_shortcode('[catlist 
									name=research1
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=large
									thumbnail_class=frontpage_projects]'); ?>
			</div>
			<div class="span4">
				<?php echo do_shortcode('[catlist 
									name=participate1
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=large
									thumbnail_class=frontpage_participate]'); ?>
			</div>
			<div class="span2 homepageblog" style="background:white; min-height: 265px;">
				<br>
				<br>
				<img id="twitterlogo" src="/opentrash_local_dev/wp-content/wpbootstrap/bootstrap/img/Twitter_logo_blue.png" width="60">
			</div>
			<div class="span2 homepageblog">
				<!-- Make a list of the most recent posts. Takes args if needed-->
				<?php the_widget( 'WP_Widget_Recent_Posts', 'title=RECENT POSTS' ); ?>
			</div>
		</div>

		<div class="row">
			<div class="span4">
				<?php echo do_shortcode('[catlist 
									name=research2
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=frontpage_projects]'); ?>
			</div>

			<div class="span4">
				<?php echo do_shortcode('[catlist 
									name=participate2
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=frontpage_participate]'); ?>
			</div>

			<div class="span2 homepageblog" style="max-height:250px">
				<!-- Widget pipes in latest post under the 'waste fact checker' category-->
				<?php echo do_shortcode('[catlist
											name=waste-fact-checker
											excerpt=yes
											thumbnail=yes
											date=yes]'); ?>
			</div>

			<div class="span2 homepageblog" style="max-height:250px">
				<!-- Widget pipes in list tags, the length of which is arbitrary-->
				<?php echo do_shortcode('[catlist
											name=waste-fact-checker
											excerpt=yes
											thumbnail=yes
											date=yes]'); ?>

			</div>
		</div>

		<div class="row">
			<div class="span4">
				<?php echo do_shortcode('[catlist 
									name=research3
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=frontpage_projects]'); ?>
			</div>
			<div class="span4">
				<?php echo do_shortcode('[catlist 
									name=participate3
									excerpt=no
									excerpt_size=20
									thumbnail=yes
									thumbnail_size=full
									thumbnail_class=featuredphoto]'); ?>
			</div>
		</div>

<?php get_footer(); ?>











