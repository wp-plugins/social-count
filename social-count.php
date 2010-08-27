<?php
/*
Plugin Name: Social Count
Plugin URI: http://www.htmlremix.com/projects/social-count-wordpress-plugin
Description: Displays number of shares or bookmarks in popular social media sites.
Version: 2.0
Author: Remiz Rahnas
Author URI: http://www.htmlremix.com

Copyright 2010  Creative common  (email: mail@htmlremix.com)

This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

You are allowed to use, change and redistibute without any legal issues. I am not responsible for any damage caused by this program. Use at your own risk
Tested with Wordpress 3.0. Works normal settings
You will need to put <?php social_count(); ?> in your theme file where you want to show social media share icons with count.
*/



function social_count() { ?>
<style type="text/css">
ul.social_count {
list-style-image:none;
list-style-position:outside;
list-style-type:none;
margin:10px 0 5px;
padding:0;
}
ul.social_count li {
display:inline;
margin-right:20px;
}
</style>
<ul class="social_count">
					<li><span class="comments"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="remiz">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></span></li>
<li><a title="Post on Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="small-count" data-locale="en_IN"></a>
<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script></li>
<li><a name="fb_share" type="button_count" share_url="<?php the_permalink();?>"></a>
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
<li><a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&noui&jump=close&url='+encodeURIComponent('<?php the_permalink() ?>')+'&title='+encodeURIComponent('<?php the_title() ?>'),'delicious', 'toolbar=no,width=550,height=550'); return false;"><img src="http://cdn.iconfinder.net/data/icons/socialmediamini/PNG/delicious.png" height="15" width="16" border="0" alt="Delicious" align="absmiddle" /> </a><span class="fb_share_count  fb_share_count_right"><span class="fb_share_count_inner" id="bydelbutton">0</span></span>
<script type='text/javascript'>
function displayURL(data) {
var urlinfo = data[0];
if (!urlinfo.total_posts) return;
document.getElementById("bydelbutton").innerHTML = urlinfo.total_posts;
}
</script> 
<script src='http://badges.del.icio.us/feeds/json/url/data?url=<?php the_permalink() ?>&callback=displayURL'></script></li>
					<li><a href="#comments"><?php comments_number('No comment','Comment (1)', 'Comments (%)');	?></a></li>
					</ul>

<?php 
}
?>