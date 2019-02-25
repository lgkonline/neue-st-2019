<?php

if (!function_exists("neue_st_post_thumbnail")) {
	function neue_st_post_thumbnail() {
		if ( ! twentynineteen_can_show_post_thumbnail() ) {
			return;
		}
		return the_post_thumbnail();
	}
}