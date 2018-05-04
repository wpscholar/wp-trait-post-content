<?php

namespace wpscholar\WordPress\Traits;

/**
 * Class PostContent
 *
 * @package wpscholar\WordPress\Traits
 *
 * @property \WP_Post $post
 */
trait PostContent {

	/**
	 * Get course content.
	 *
	 * @return string
	 */
	public function postContent() {
		return apply_filters( 'the_content', $this->post->post_content );
	}

}
