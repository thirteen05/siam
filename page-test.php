<?php get_header(); ?>
<div class="container-full">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php wp_title( $sep, $display, $seplocation ); ?>
</div>
<div class="container">
    <div class="col-lg-12">
        <section class="entry-content">
            <?php the_content(); ?>
            
            <?php 

$image = get_field('test');

if( !empty($image) ): 

	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'thumbnail';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];

	if( $caption ): ?>

		<div class="wp-caption">

	<?php endif; ?>

	<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

	</a>

	<?php if( $caption ): ?>

			<p class="wp-caption-text"><?php echo $caption; ?></p>

		</div>

	<?php endif; ?>

<?php endif; ?>
        </section>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>