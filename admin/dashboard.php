<?php



/**
 * Adds the RSS Feed to the imFORZA News Dashboard Widget
 *
 * @access public
 * @return void
 */
function imforza_news_dashboard_widget(){
	echo '<div id="imforza-latest-news" class="rss-widget">';


	wp_widget_rss_output(array(
			'url' => 'https://www.imforza.com/feed/',  //put your feed URL here
			'title' => __('imFORZA - Latest News', 'imforza'), // Your feed title
			'items' => 3, //how many posts to show
			'show_summary' => 1, // 0 = false and 1 = true
			'show_author' => 0,
			'show_date' => 1
		));

	echo "</div>";

}

// Hook into wp_dashboard_setup and add our imFORZA widget
add_action('wp_dashboard_setup', 'imforza_add_news_dashboard_widget');



/**
 * Adds the imFORZA News Dashboard Widget
 *
 * @access public
 * @return void
 */
function imforza_add_news_dashboard_widget(){
	// Add our RSS widget
	wp_add_dashboard_widget( 'imforza-rss', 'Latest News from imFORZA', 'imforza_news_dashboard_widget');
}




