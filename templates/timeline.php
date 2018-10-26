<?php
/**
 * Have a look at wp-content/plugins/wp-timeliner/classes/models/timeline.php
 * to see all the available methods to retrieve data from a timeline.
 */
?>

<h4>Timeline</h4>
<?php var_dump( $timeline ); ?>

<section class="wpt-timeline wpt-theme-custom">
	<?php 
	foreach ( $achievements as $achievement ) {
		$this->display_achievement( $achievement, $timeline );
	}
	?>
</section>