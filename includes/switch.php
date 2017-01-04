<?php
/*
switch.php - will allow us to swap html pieces dynamically
include this file at the top 'top.php'!
*/

//place URL & labels in the variable/array here for navigation:
$nav1['homepage.php'] = "Homepage";
$nav1['services.php'] = "Our Services";
$nav1['map.php'] = "Our Location";
$nav1['gallery.php'] = "Our Photos";
$nav1['about.php'] = "About Us";
$nav1['contact.php'] = "Contact Us";

//this line below identifies the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//--------------END CONFIG AREA --------------------------------
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li class="current"><a href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


#uncomment to test:
/*
echo 'THIS_PAGE is: ' . THIS_PAGE . '<br />';
echo '$myTitle is: ' . $myTitle . '<br />';
echo '$myPageID is: ' . $myPageID . '<br />';
echo '$myPic is: ' . $myPic . '<br />';
echo 'Nav:<br />';
echo makeLinks($nav1);
die;
*/

/*

saved below as the original HTML for the nav:

*/


?>