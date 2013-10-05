<?php
/**
 * language settings for au_taganything
 */

$mapping = array(
	'au_taganything:tagadd' => 'Add your own tags',
	'au_taganything:yourtaggeditems' => 'Posts you have tagged',
	'au_taganything:yourtags' => 'Tags you have used',
	'au_taganything:saved' => 'Tags saved successfully',
	'au_taganything:notsaved' => 'Tags not saved',
	'au_taganything:noownerentity' => 'No post to tag',
	'au_taganything:email:subject' => 'Someone tagged your post',
	'au_taganything:email:body' => "Your post \"%s\" has been tagged by %s with the tag(s):

%s


You may remove any tags you do not want by editing your post. To view the original item, click here:

%s

To view %s's profile, click here:

%s

You cannot reply to this email.",

	
);

add_translation('en', $mapping);
