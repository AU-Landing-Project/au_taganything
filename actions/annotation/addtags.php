<?php
// keep out bad people
	action_gatekeeper();

// save entered tags

	$tagged_entity_guid=get_input('guid');
	$tags=get_input('tags');
	$user = elgg_get_logged_in_user_entity();

	//make sure we have an entity to tag
	if(!empty($tagged_entity_guid) && $entity=get_entity($tagged_entity_guid)){
		//get the existing tags
		$oldtags = $entity->tags;					
		// if we have new ones, add them
		if(!empty($tags)) {
			//first, make sure that the user has not used any of these tags before
			
			
			//prepare tags for saving and append to existing ones
			$newtags = string_to_tag_array($tags);
			$savetags = array_merge($oldtags,$newtags);
			if ($entity->tags = $savetags){
				system_message(elgg_echo('au_taganything:saved'));
				// notify if poster wasn't owner
				if ($entity->owner_guid != $user->guid) {				
					notify_user($entity->owner_guid,
								$user->guid,
								elgg_echo('au_taganything:email:subject'),
								elgg_echo('au_taganything:email:body', array(
									$entity->title,
									$user->name,
									$tags,
									$entity->getURL(),
									$user->name,
									$user->getURL()
								))
							);
				}

								
			}else{
				system_message(elgg_echo('au_taganything:notsaved'));
			}
			forward(REFERER);		
		}
	}else{
		
		system_message(elgg_echo('au_taganything:noownerentity'));
		
	}


	forward(REFERER);