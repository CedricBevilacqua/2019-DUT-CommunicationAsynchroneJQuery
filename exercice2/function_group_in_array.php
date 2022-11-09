<?php

/**
* Check if the character string is present in the table.
*
* @param  	string	$group_music_user	user wanted group
* @return 	bool	if group present in the table.
*/
function verif_group_in_array($group_music_user)
{
    $group_in_array = false;

    $music_group = array("nirvana",
    "pink floyd",
    "acdc",
    "muse",
    "radiohead",
    "u2",
    "coldplay",
    "the rolling stones",);

    if (in_array(strtolower($group_music_user), $music_group)) {
        $group_in_array = true;
    }

    return $group_in_array;
}

?>