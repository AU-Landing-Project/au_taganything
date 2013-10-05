<?php

/* adds tag field to the comments form

*/

//check that user is logged in

//show the tag form

$formbody="<div>";
$thisentity=$vars['entity'];
$guid=$thisentity->guid;
$formbody.= elgg_view('input/hidden',array('name'=> 'guid', 'value'=>$guid));
$formbody .= elgg_echo('au_taganything:tagadd');
$formbody.= elgg_view ('input/tags',array('name' => 'tags', 'value' => ''));
$formbody .= elgg_view('input/submit', array('value' => elgg_echo('save')));
$formbody .="</div>";
$form = elgg_view('input/form', array(
						'id' => 'au_taganything_addtags', 
						'name' 	=> 'au_taganything_addtags', 
						'action' => '/action/au_taganything/annotation/addtags', 
						'enctype' => 'multipart/form-data', 
						'body' => $formbody
									)
				);
echo $form;