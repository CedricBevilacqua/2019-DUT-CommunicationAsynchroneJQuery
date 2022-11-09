<?php

/**
* Returns the styles containing the character string contained in $_GET["term"];
*
*/
function return_styles()
{
    $styletab = array("disco",
                      "bluzz",
                      "edm",
                      "funk",
                      "jazz",
                      "metal",
                      "pop",
                      "rock",);

    if (isset($_GET['term'])) {
        $searchQuery = "/".strtolower($_GET["term"])."/";
        $result=preg_grep($searchQuery, $styletab); 
        echo json_encode($result);
    }
}

return_styles();
