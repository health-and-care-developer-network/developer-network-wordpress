<?php
// update to use transient
//$myPages = get_transient('hdn:tree_nav_pages');

//if (!$myPages) {
    $myPages = wp_list_pages('echo=0&title_li=&post_type=library&depth=0');
    $var1 = '<a';
    $var2 = '<a href="" class="closed"></a><a';
    $myPages = str_replace($var1, $var2, $myPages);
    //set_transient('hdn:tree_nav_pages', $myPages, 86400);
//}

?>
<nav class="tree_nav">
	<ul>
		<?php 
		    echo $myPages;
		?>
	</ul>
</nav><!--end tree nav-->