<?php

/*
Plugin Name: Do The harlem Shake
Plugin URI: http://qnimate.com
Description: Animates website when someone searches for "do the harlem shake"
Version: 1.0
Author: Narayan Prusty
Author URI: http://qnimate.com
*/

function do_the_harlem_shake_script() 
{
	if(is_search())
	{
		$search_query = get_search_query();

		if($search_query == "do the harlem shake")
		{
			wp_enqueue_script("harlem_script", plugins_url("/do-the-harlem-shake.js" , __FILE__), array());
		}
	}
}

add_action("wp_enqueue_scripts", "do_the_harlem_shake_script");