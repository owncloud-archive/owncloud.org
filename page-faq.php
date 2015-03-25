<div class="page-header">
	<h1>Frequently Asked Questions</h1>
</div>
<h2>Index</h2>
<h4>Help</h4>
<ul>
	<li><a href="#install">Where do I find information on how to use/install ownCloud Server?</a></li>
	<li><a href="#channels">I have a problem, what do I do?</a></li>
	<li><a href="#chat">Where can I discuss ideas with other ownCloud users?</a></li>
	<li><a href="#upgrade">I want to upgrade my ownCloud installation to the new release, how do I do that?</a></li>
	<li><a href="#upgradeyet">Is it safe to upgrade to the new release?</a></li>
</ul>
<h4>Technology</h4>
<ul>
	<li><a href="#rsync">Why don't you just use rsync?</a></li>
	<li><a href="#language">Why is ownCloud Server written in PHP and not in my favorite language?</a></li>
	<li><a href="#protocol">Why do you use HTTP and not my favorite language?</a></li>
	<li><a href="#android">Why does the calendar/contacts app not work with Android?</a></li>
	<li><a href="#mobilefeatures">Why does the Android/iOS mobile app not support my favorite feature?</a></li>
	<li><a href="#security">How Secure is ownCloud?</a></li>
	<li><a href="#encryption">Are files encrypted during sync?</a></li>
	<li><a href="#encryption2">Does ownCloud support encrypting files on the server?</a></li>
	<li><a href="#conflict">Why do I sometimes get conflict files and messages while syncing?</a></li>
	<li><a href="#partialsyncing">Does ownCloud use delta-sync (only syncing file changes)?</a></li>
	<li><a href="#deduplication">Does ownCloud do file de-duplication?</a></li>
	<li><a href="#syncspeed">Why is ownCloud syncing not faster?</a></li>
	<li><a href="#scaling">Does ownCloud scale to large deployments?</a></li>
	<li><a href="#closedapps">Can I write closed source apps for ownCloud?</a></li>
</ul>
<h4>ownCloud Community</h4>
<ul>
	<li><a href="#communitylocation">Where is the ownCloud community hosted?</a></li>
	<li><a href="#communitysize">How big is the ownCloud Community?</a></li>
	<li><a href="#howitstarted">How did ownCloud get started?</a></li>
	<li><a href="#getinvolved">How can I get involved in the ownCloud Community?</a></li>
	<li><a href="#notechknowledge">But what if I'm not very technical?</a></li>
	<li><a href="#appslocation">Where can I find ownCloud Server apps?</a></li>
	<li><a href="#communityswag">Where can I find ownCloud t-shirts, stickers and other swag?</a></li>
</ul>
<h4>ownCloud for the Enterprise</h4>
<ul>
	<li><a href="#entcomparison">How do the Community and Enterprise compare?</a></li>
	<li><a href="#bestedition">Which Edition is best for me?</a></li>
	<li><a href="#communityandenterprise">How do the Community and Enterprise work together?</a></li>
	<li><a href="#entcustomers">What customers does ownCloud, Inc. have?</a></li>
</ul>

<h2>Help</h2>
<a name="install"></a>
<h3>Where do I find information on how to use/install ownCloud?</h3>
<ul>
	<li>You should start with the <a href="https://doc.owncloud.org" target="_blank">ownCloud Documentation</a></li>
	<li>There are a lot of tutorials and how-to's written for installing and managing ownCloud, to be found all over the internet. We collect a list on <a href="https://github.com/owncloud/core/wiki/Reviews-tutorials-and-videos-of-ownCloud"  target="_blank">this page</a> and our <a href="https://www.youtube.com/playlist?list=PLtZe22ggl2YBi1u2dH0qg9fgnym5DwYbW" target="_blank">YouTube channel collects video tutorials</a> but if what you are looking for is not there, <a href="https://www.google.com/search?q=owncloud+installation+tutorial" target="_blank">Google</a> or another search engine can find them easily.</li>
	<li>The ownCloud forums have a <a href="https://forum.owncloud.org/viewforum.php?f=17" target="_blank">special FAQ page</a> where each topic corresponds to typical mistakes or frequently occurring issues</li>
</ul>
<a name="channels"></a>
<h3>I have a problem, what do I do?</h3>
If the <a href="https://doc.owncloud.org" target="_blank">ownCloud Documentation</a> does not help and <a href="https://www.google.com/search?q=owncloud+installation+problem" target="_blank">Google</a> can't solve your problem either, you can ask for help in our community support channels:
<ul>
	<li><a href="https://forum.owncloud.org" target="_blank">the ownCloud Forums</a></li>
	<ul>
		 <li>Note: The ownCloud forums have a <a href="https://forum.owncloud.org/viewforum.php?f=17" target="_blank">special FAQ page</a> where each topic corresponds to typical mistakes or frequently occurring issues</li>
	</ul>
	<li><a href="https://mailman.owncloud.org/mailman/listinfo/user" target="_blank">the ownCloud User mailing list</a></li>
	<li><a href="irc://#owncloud@freenode.net" target="_blank">the ownCloud IRC chat channel</a> on freenode.net, also accessible via <a href="https://webchat.freenode.net/?channels=owncloud" target="_blank">webchat</a></li>
	<li>Finally, you could report a issue in the <a href="https://github.com/owncloud/core/issues" target="_blank">bug tracker</a> if you think you found a problem with ownCloud</li>

</ul>
<p>Please understand that all these channels essentially consist of users like you helping each other out. Consider helping others out where you can, to contribute back for the help you get. This is the only way to keep a community like ownCloud healthy and sustainable!</p>
<p>If you are using ownCloud in a business, educational setting or other professional or large scale deployments, note that the <a href="#entcomparison">ownCloud, Inc.</a> offers support contracts.</p>

<a name="chat"></a>
<h3>Where can I discuss ideas with other ownCloud users?</h3>
The best places for conversation are:
<ul>
	<li><a href="https://forum.owncloud.org" target="_blank">the ownCloud Forums</a></li>
	<li><a href="https://mailman.owncloud.org/mailman/listinfo/user" target="_blank">the ownCloud User mailing list</a></li>
</ul>
<p>If you have a feature request or proposal which you can support with code, <a href="/contribute/" target="_blank">check out our contribute page</a>. You can put feature requests in the <a href="https://github.com/owncloud/core/issues" target="_blank">issue tracker</a> but please be aware that in open source projects like ownCloud, the constraint is rarely ideas or awareness of what can be improved but rather time to work on them. <a href="/contribute/" target="_blank">Contributing</a> is the best way of making change happen!</p>
<p>Note that <a href="https://owncloud.org/blog/introducing-bounty-source-for-owncloud/" target="_blank">Bountysource</a> offers a way of backing feature requests with your wallet.</p>

<a name="upgrade"></a>
<h3>I want to upgrade my ownCloud installation to the new release, how do I do that?</h3>
<ul>
	<li>The manual upgrade process is described in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>/maintenance/upgrade.html" target="_blank">ownCloud Documentation</a>.</li>
	<li>If you installed ownCloud using Linux distribution packages and added the repository, an update will get them. You can also manually grab the new versions from <a href="/install/" target="_blank">owncloud.org/download</a></li>
	<li>The built in Update app will usually have new ownCloud releases available for upgrade some time in the week after a major release.</li>
</ul>

<a name="upgradeyet"></a>
<h3>Is it safe to upgrade to the new release?</h3>
<p>All code entering ownCloud has been reviewed twice as well as tested by both automated means and through the efforts of volunteers. Releases are done only when all issues we are aware of are fixed or can be mitigated easily. In short, ownCloud releases are always as stable as we could make it without <em>your</em> help. If you want the guarantee that it will work in your specific situation, <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>testing">make sure you help test before a release is made</a> so your issue can be fixed in time.</p>
<p><strong>Why do we need your testing?</strong></p>
<p>In short: because ownCloud is <em>yours</em>. ownCloud is an <a href="http://en.wikipedia.org/wiki/Open_source">Open Source</a> product, following an open development model. That means that many different stakeholders, both commercial and private, contribute to its development and share responsibility for the final release. ownCloud is thus neither owned nor controlled by any single entity.</p>
<p>By using ownCloud, <em>you become part of the ownCloud community</em>, sharing both ownership and responsibility for the product we collectively develop. Compare it to your responsibility for the functioning of your car: you regularly have to test it, or hire a garage for a checkup. It is yours, isn't it?</p>

<h2>Technology</h2>
<a name="rsync"></a>
<h3>Why does ownCloud use csync rather than rsync?</h3>
<ul>
	<li>rsync is a one-way syncing protocol. This means that if you have two servers and delete a file on one side, it will pop up again if you use rsync. To ensure old files get removed but new files added, and updated files overwritten, you need a N-to-N sync solution. ownCloud uses csync for syncing, which also deals with conflicts in a smart way.</li>
</ul>
<a name="language"></a>
<h3>Why is ownCloud Server written in PHP?</h3>
ownCloud is for everybody. We picked PHP because:
<ul>
	<li>PHP runs anywhere and is supported everywhere. Even the cheapest hosting provider should support ownCloud and PHP makes that possible.</li>
	<li>PHP is easy to learn which makes it easy for people to contribute. The ease of PHP also allows you to check the code that runs your ownCloud and make changes that you need.</li>
</ul>
In short, PHP lowers the barrier for using, auditing, modifying and contributing to ownCloud. And that is important!<br />
See more details in <a href="http://karlitschek.de/2014/10/a-possible-future-for-php/" target="_blank">this blog by ownCloud founder Frank Karlitschek</a>.
<a name="protocol"></a>
<h3>Why do you use HTTP and not $PROTOCOL?</h3>
<ul>
	<li>HTTP goes through every firewall and proxy.</li>
</ul>
<a name="android"></a>
<h3>Why does the calendar/contacts app not work with Android?</h3>
<ul>
	<li>iOS has native ical/caldav support, Android does not. You have to use an Android app that does but unfortunately almost all apps we're aware of that support caldav/ical are paid. One open source client is <a href="https://github.com/rfc2822/davdroid" target="_blank">DAVdroid</a>. You can find a list of <a href="https://github.com/owncloud/core/wiki/Apps" target="_blank">3rd-party apps which work with ownCloud here</a>.</li>
</ul>
<a name="mobilefeatures"></a>
<h3>Why does the Android/iOS mobile app not support my favorite feature?</h3>
<ul>
	<li>The Android mobile app has automatic picture and video upload. Both mobile clients and give access to your files and include selective sync for keeping some of your files up to date on the device. Other features are under development or provided by other apps (like calendar and contacts, see <a href="#android">previous FAQ item</a>). If you'd like to add features to the Android or iOS client, find the <a href="https://github.com/owncloud/android/" target="_blank">Android sources here</a> and the <a href="https://github.com/owncloud/ios" target="_blank">iOS sources here</a>. Legal notes: the Android app is under the GPLv2, the iOS app under the GPLv3. To contribute to either, you have to <a href="https://owncloud.org/contribute/agreement/" target="_blank">sign a contributor agreement</a> or contribute your code under the <a href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>. For testing, we provide a <a href="https://owncloud.org/contribute/iOS-license-exception/" target="_blank">iOS license exception</a> so you can run the iOS app on up to 100 devices.</li>
</ul>
<a name="security"></a>
<h3>How Secure is ownCloud?</h3>
<ul>
	<li>ownCloud supports HTTPS and offers server-side encryption. ownCloud Server automatically generates a 4096-bit strong private/public key-pair for each user. Private keys are encrypted with the user’s login password and thus nobody can get at your data if you are not logged in on your ownCloud server.</li>
	<li>ownCloud is an open source project so all code is visible. We are committed to building secure code. We employ a full-time security expert and do regular security audits on the code. We always welcome fixes to security issues, see <a href="https://owncloud.org/security" target="_blank">owncloud.org/security</a>.</li>
	<li>To learn a bit more about ownCloud security, watch <a href="https://www.youtube.com/watch?v=iLJbMrLgowk&index=25&list=PLtZe22ggl2YCfEzrHbFCylXGLGYtsHm96" target="_blank">this technical talk at the ownCloud Contributor Conference</a> and read <a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/" target="_blank">this article about ownCloud and encryption</a>.</li>
</ul>
<a name="encryption"></a>
<h3>Are files encrypted during sync?</h3>
<ul>
	<li>Yes, we use TLS for sending and receiving files over the network so they are encrypted during transmission.</li>
</ul>
<a name="encryption2"></a>
<h3>Does ownCloud support file encryption on the server?</h3>
<ul>
	<li>Yes, but the Encryption app is designed to protect your data on external storage, rather than on the server ownCloud runs on. In the current design, the server always has the keys to the data. They are encrypted by your password, but you can't trust that it is as secure as client-side encryption. ownCloud does not do client-side encryption because you can not have a web interface if the server can't read the files and the web interface (and sharing abilities!) are very central to ownCloud. So you will always need to be able to trust the server if you want to 'own' your data. Read more <a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/" target="_blank">in this article</a>.</li>
	<li>If you really want client-side encryption, we recommend you look for other solutions. Of course, if you are sufficiently knowledgeable and skilled, you would be more than welcome to improve on the file encryption technology. If you are interested in supporting or working on this feature, check out <a href="https://github.com/owncloud/mirall/issues/275" target="_blank">github</a> for the latest state on the discussion about it and check out <a href="/contribute/" target="_blank">owncloud.org/contribute</a> to get started.</li>
</ul>
<a name="conflict"></a>
<h3>Why do I sometimes get conflict files and messages while syncing?</h3>
<ul>
	<li>A conflict may be caused by two or more users editing the same files at the same time or while on the road before the files are synced. We do not merge changes to files like version control systems like git do; we don't modify user files, ever. So you will get two files, the one that was synced to the server first and the one you had locally modified in the same time. You can compare the file changes by hand and delete the local file once you're sure you did not lose data.</li>
</ul>
<a name="partialsyncing"></a>
<h3>Does ownCloud use delta-sync (only syncing file changes)?</h3>
<ul>
	<li>We introduced chunked, parallel up- and download with ownCloud 7 and the ownCloud 1.6 client. Syncing only file changes needs much deeper changes. It is on our roadmap, but won't be done soon. Find some <a href="https://dragotin.wordpress.com/2015/02/09/incremental-sync-in-owncloud/" target="_blank">background on that decision here</a>. If you want to speed up the development of this feature by working on it, see <a href="https://github.com/owncloud/mirall/issues/179" target="_blank">the github discussion</a>. If you really want this feature and would like to specifically fund work on it, see <a href="https://www.bountysource.com/issues/905030-sync-only-the-file-change-not-entire-file" target="_blank">the Bountysource page</a>.</li>
</ul>
<a name="deduplication"></a>
<h3>Does ownCloud do file de-duplication?</h3>
<ul>
	<li>No, we think that that is the job of the file system. We do maintain versions of files as they are replaced and you may revert to older versions at any time.</li>
</ul>
<a name="syncspeed"></a>
<h3>Why is ownCloud syncing not faster?</h3>
<ul>
	<li>The design of ownCloud is constrained by two important features: scalability and reliability.
	<ul>
		<li>ownCloud is designed to be very scalable, and be independent of the used storage system. We want it to work with terabytes of data and tens of thousands of users - and it does, organizations like CERN in Switzerland and big universities run ownCloud with such amounts of data and users. The downside of this is that it is hard use 'checksums' to see if files are changed: imagine doing that on terabytes of data on an external storage! What is fast for a few gigabyte or a few thousand files is would break entirely once you add a large movie- or music database, or start pumping scientific data through the system.</li>
		<li>A second design goal of ownCloud is reliability. We would rather be slower, but ensure no files are lost, than risk going fast-and-loose with user data. For example, the file-change-notifications on Linux and Windows are not 100% reliable in all cases, so just-to-be-sure we run a full file system scan every few minutes. Yes, that eats battery life, but it does ensure you do not lose any of your files!</li>
	</ul>
	This does not mean there is no room for improvement, we work very hard to make ownCloud faster and every release introduces many performance improvements. Also, help is always welcome. Check out the <a href="https://github.com/owncloud/mirall/" target="_blank">client code on github</a> if you are interested in the challenges of fast, scalable and reliable file syncing! See <a href="/contribute/" target="_blank">the contribute pages</a> for more information about getting involved.</li>
</ul>

<a name="scaling"></a>
<h3>Does ownCloud scale to large deployments?</h3>
<ul>
	<li>ownCloud can run on Raspberry Pi like development boards but is certainly not limited to low-end hardware. Worlds' largest on-premise cloud deployment services <a href="https://owncloud.com/sciebo-germanys-largest-cloud-project-500000-users-launches-today/" target="_blank">500,000 students on ownCloud</a> and terabytes of data are shared through ownCloud at organizations like the  <a href="http://cernbox.web.cern.ch/" target="_blank">atom smashers at CERN</a>. ownCloud founder Frank Karlitschek wrote a <a href="http://karlitschek.de/2015/03/scaling/" target="_blank">post about the scalability of ownCloud</a>.</li>
	<li>Of course, it does require some tuning to adopt ownCloud for large deployments. See our on documentation on <a href="<?php echo $DOCUMENTATION_ADMIN; ?>/configuration_server/performance_tuning.html">performance tuning</a> and the pages on <a href="<?php echo $DOCUMENTATION_ADMIN; ?>/operations/scaling_multiple_machines.html">scaling across multiple machines</a>. See also <a href="https://owncloud.com/whitepapers/">owncloud.com/whitepapers</a> and you can find excellent resources online, like <a href="http://www.severalnines.com/blog/high-availability-file-sync-and-share-deploying-owncloud-galera-cluster-mysql-and-glusterfs" target="_blank">this blog about a High Availability cluster with Galera for MySQL and glusterFS</a>, and this <a href="http://zdevops.tumblr.com/post/53590343974/glustercloud-running-owncloud-with-a-glusterfs" target="_blank">glusterFS and ownCloud blog</a>.</li>
	<li>Check out the <a href="https://github.com/owncloud/core/" target="_blank">core code on github</a> if you are interested in the challenges of fast, scalable and reliable file syncing! See <a href="/contribute/" target="_blank">the contribute pages</a> for more information about getting involved.</li>
</ul>

<a name="closedapps"></a>
<h3>Can I write closed source apps for ownCloud?</h3>
<ul>
	<li>Yes, but only under the <a href="https://www.owncloud.com" target="_blank">ownCloud Enterprise Edition</a>, which supports integration with proprietary technologies.</li>
</ul>
<h2>ownCloud Community</h2>
<a name="communitylocation"></a>
<h3>Where is the ownCloud community hosted?</h3>
<ul>
	<li>The ownCloud code can be found at <a href="https://github.com/owncloud" target="_blank">github.com/ownCloud</a> and our website is on <a href="https://owncloud.org" target="_blank">owncloud.org</a></li>
</ul>
<a name="communitysize"></a>
<h3>How big is the ownCloud Community?</h3>
<ul>
	<li>ownCloud has over 2 million users and over 360 programmers contributed code in the last 12 months. Tens of thousands participate on our forums, mailing lists, translation and documentation tools, and IRC channels in testing, discussions, translation, documentation and so on. See <a href="http://blog.jospoortvliet.com/2014/08/owncloud-numbers.html" target="_blank">this blog</a> for an analysis and dig into the statistics <a href="https://owncloud.org/blog/announcing-owncloud-community-statistics-provided-by-bitergia/" target="_blank">on Bitergia</a> so you can judge the health of our community yourself.</li>
</ul>
<a name="howitstarted"></a>
<h3>How did ownCloud get started?</h3>
<ul>
	<li>ownCloud started with a keynote by Frank Karlitschek at Camp KDE’10 where he talked about the need of a self-controlled free and open source cloud. Two years later, Frank announced the start of ownCloud, Inc. which is headquartered in Lexington, Massachusetts in the United States and Nuremburg, Germany. Find out more on <a href="/contribute/" target="_blank">our history page</a>.</li>
</ul>
<a name="getinvolved"></a>
<h3>How can I get involved in the ownCloud Community?</h3>
<ul>
	<li>The best way to get started is to visit <a href="/contribute/" target="_blank">owncloud.org/contribute</a>.</li>
</ul>
<a name="notechknowledge"></a>
<h3>But what if I'm not very technical?</h3>
<ul>
	<li>There are lots of ways you can contribute to ownCloud. We have a need for developers, designers, event organizers, speakers, QA and more. It is all <a href="/contribute/" target="_blank">on the <em>contribute</em> page</a>!</li>
</ul>
<a name="appslocation"></a>
<h3>Where can I find ownCloud apps?</h3>
<ul>
	<li>There is a large selection of built in and community-approved apps available for download from within the App management screen in your ownCloud installation. Featuring apps like the Music app, the Calendar app and so on you can watch your movies, share your pictures and keep your bookmarks synced. Download is seamless (just 'enable' the app and wait while it is downloaded, installed and enabled) and upgrading is easy from the same screen.</li>
	<li>If the built in and approved apps are not enough, you can get more than 200 community and enterprise-developed ownCloud apps at <a href="https://apps.owncloud.com/" target="_blank">apps.owncloud.com</a> that have been developed with our open API. You can find apps in all categories: multimedia, PIM, productivity, games, tools and more. Note that unlike the apps available for download from the App Management screen in ownCloud, the apps on <a href="https://apps.owncloud.com/" target="_blank">apps.owncloud.com</a> are not extensively checked for safety and compatibility, so you should be careful with them. For this reason, we do not support automatic download and installation for these, but require users to download the apps and install them in their ownCloud by hand.</li>
	<li>If you are looking for third-party apps that integrate ownCloud in mobile and desktop applications, see our <a href="https://github.com/owncloud/core/wiki/Apps" target="_blank">3rd-party apps</a> page.</li>
	<li>Building a new ownCloud app is easy. If you're interested in developing your own ownCloud app, see <a href="/contribute/" target="_blank">the contribute page</a>, where you can find a link to the latest App Development documentation.</li>
</ul>
<a name="communityswag"></a>
<h3>Where can I find ownCloud t-shirts, stickers and other swag?</h3>
<p>ownCloud has a store on <a href="http://www.cafepress.com/owncloudshop" target="_blank">this page</a> where you can find posters, mugs, stickers, magnets, buttons, t-shirts and much more.</p>
<p>If you are looking for materials for an ownCloud event or to use to promote ownCloud at a conference or trade show, see our <a href="/events" target="_blank">events pages</a> for information on what is available.</p>

<h2>ownCloud for the Enterprise</h2>
<a name="entcomparison"></a>
<h3>How do the Community and Enterprise compare?</h3>
<ul>
	<li>The Community Edition which you can get from <a href="/install" target="_blank">owncloud.org</a> is perfect for home users and small businesses. This edition is optimized for stand alone functionality. It comes with a large number of supported apps (see the ownCloud apps question) and offers a fast release cycle and community support.</li>
	<li>The Enterprise Edition available for purchase from <a href="https://owncloud.com/"  target="_blank"> owncloud.com</a> is perfect for medium and large enterprises. This edition is optimized for reliability, scalability and integration in an enterprise environment. It comes with enterprise certified applications, as well as integration with enterprise services like SharePoint, Windows network drives, Amazon S3,Oracle SQL and SAML/Shibboleth authentication as well as audit and control tools. ownCloud, Inc. offers enterprise support, deployment tools and consulting.</li>
	<li>You can find a comparison table of Community and Enterprise features on <a href="https://owncloud.com/lp/community-or-enterprise/" target="_blank">this page</a>.</li>
</ul>
<a name="bestedition"></a>
<h3>Which Edition is best for me?</h3>
<ul>
	<li>As home or small business user, you benefit from the rich functionality of the Community Edition. Many apps you'd want in a home or small office situation like the Music player, Calendar, Contacts, Mail, Password Manager and so on are available for this edition.</li>
	<li>As a general rule, with more than 50 users and large amounts of data, Enterprise Edition becomes a better choice. ownCloud Enterprise Edition is designed to scale for larger deployments, offers Enterprise-only integrations (see above) and is offered with 12x5 or 24x7 global support, a dedicated Deployment Manager and more.</li>
	<li><a href="http://vimeo.com/107631039" target="_blank">Watch the Community and Enterprise Edition Webinar</a> to find out what edition is best for you.</li>
</ul>
<a name="communityandenterprise"></a>
<h3>How do the Community and Enterprise work together?</h3>
<ul>
	<li>The company makes it possible for developers to work full time on ownCloud, organizing ownCloud events, marketing ownCloud to a wider audience and supporting companies, governments and schools in their ownCloud deployments.</li>
	<li>The business model of ownCloud, Inc. is very similar to other successful Open Source companies, offering services and support around ownCloud for the enterprise. The company is dedicated to working entirely in the open, accelerating development in the areas of its customers' needs while enabling a completely open development process where everybody can contribute.</li>
	<li>The Enterprise Edition is built on the same code as the Community Edition. It undergoes additional testing and the addition of <a href="https://owncloud.com/features/" target="_blank">enterprise features</a>. ownCloud develops in the open; this is neither an open-core nor a dump-your-code-over-the-wall model. Read what the Free Software Foundation says about it: <a href="http://www.gnu.org/philosophy/selling-exceptions.html" target="_blank">gnu.org/philosophy/selling-exceptions</a>.</li>
</ul>
Check out <a href="https://owncloud.com" target="_blank">owncloud.com</a> and <a href="/contribute" target="_blank">owncloud.org/history</a> for more information.
<a name="entcustomers"></a>
<h3>What customers does ownCloud, Inc. have?</h3>
<ul>
	<li>ownCloud works with several large enterprises across financial services, energy, government, healthcare, education and more. Some of our marquis customers include TU Berlin, CERN, Joy Global, Wind River, Rush Medical, TERENA, De'Longhi, TTX, Dutch Ministry of Defense as well as other large financial services and telco companies we cannot name. Check out <a href="https://owncloud.com" target="_blank">owncloud.com</a> for more information.</li>
</ul>

