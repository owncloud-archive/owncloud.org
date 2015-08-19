<?php get_template_part('templates/parts/title'); ?>
If you want to talk to ownCloud users, contributors and fans, join the <a href="/promote" target="_blank">community conversation</a> over social media, the forums and other places. Most of our contributors are active in <a href="irc://#owncloud-devel@freenode.net" target="_blank">the ownCloud development IRC channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=owncloud-devel" target="_blank">webchat</a>. If you are looking for answers to questions, see <a href="/faq" target="_blank">the ownCloud FAQ</a> and our <a href="/support" target="_blank">support page</a>.

For the latest news, subscribe to our <a href="https://owncloud.org/feed/">RSS feed</a>.</p>

<p>For reporting vulnerabilities, read <a href="https://owncloud.org/security">Security</a>.</p>

<h2>Active contributors on the <a href="../news">ownCloud blog roll</a>:</h2>

<?php
if(CONTRIBOOK) {

	require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');

	$users=CONTRIBOOK_USER::getusers();
	echo('<table>');
	foreach($users as $user) {
		$data = CONTRIBOOK_USER::getuser($user);
		echo('<tr><td style="padding:5px;">');
		if(empty($data['picture_50'])) { $data['picture_50'] = 'blogger_50.png'; }

		echo('<span class="contribook_microbloguserpicture"><a href="/user/?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');

		echo('</td><td style="padding:5px;">');

		echo('<a href="/user/?user='.$user.'">'.$data['name'].'</a><br />');
		echo($data['role']);

		echo('</td></tr>');
	}

	echo('</table>');

}
?>
Note that, unfortunately, most of our contributors have not (yet) set up a blog and and added themselves here. You can find a much more complete list of past and present ownCloud contributors on <a href="https://github.com/orgs/owncloud/people">github</a>, which is where we develop ownCloud.

If you want to be added to the blog roll, please ping the ownCloud community manager on IRC (nick: jospoortvliet) or via <a href="https://plus.google.com/117563705675081959469">G+</a>, <a href="https://twitter.com/jospoortvliet">twitter</a> or <a href="https://pod.geraspora.de/u/jospoortvliet">diaspora</a>.
