<?php 
	add_action('init', restrict_user);
	function restrict_user(){
		if( !current_user_can('manage_options') ){
			show_admin_bar(false);
			if( is_admin() ){
				$pageurl = get_author_posts_url( get_current_user_id());
				wp_redirect($pageurl);
			}
			
		}
		
	}

// add_action('init', 'author_base_change');
function author_base_change(){
	global $wp_rewrite;
	$wp_rewrite->author_base = "user";
	$wp_rewrite->flush_rules();
}

add_action("wp_ajax_status", "post_status");
function post_status(){
	$status = $_POST['s'];
	$nonce = $_POST['n'];
	$status = $_POST['status'];
	if(wp_verify_nonce( $nonce, $action)){
		$postart = array(
			"post_title"	=> $status,
			"post_content"	=> $status,
			"post_status"	=> "publish",
			"post_title"	=> get_current_user_id()
		);

	}
}

