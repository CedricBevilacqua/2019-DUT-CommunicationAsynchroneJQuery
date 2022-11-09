<?php

/**
* Check if the character string is present in the table.
*
* @param  	string	$group_music_user	user wanted group
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

    if (in_array($group_music_user, $music_group)) {
        $group_in_array = true;
    }

    echo json_encode($group_in_array);

    return $group_in_array;
}

$group_music_user = $_GET['groupe_music'];

verif_group_in_array($group_music_user);

?>