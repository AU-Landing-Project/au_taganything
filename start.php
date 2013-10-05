<?php
/**
 * Allows any user to add tags to anything
 * author: Jon Dron
 * licence: GPLv2
 */

elgg_register_event_handler('init', 'system', 'au_taganything_init');

function au_taganything_init() {

	//action
	elgg_register_action("au_taganything/annotation/addtags",dirname(__FILE__) . "/actions/annotation/addtags.php");

	// Extend the comment view to allow tags
	elgg_extend_view('page/elements/comments', 'au_taganything/forms/comments/addtag',400);
	
	

}

