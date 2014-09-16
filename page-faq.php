<div class="page-header">
	<h1>Frequently Asked Questions</h1>
</div>
<h2>Technology</h2>
<h3>Why don't you just use rsync?</h3>
<ul>
	<li>rsync is a one-way syncing protocol. For example, if you have two server and you delete a file on one side, and you run rsync, it will pop up again. You need N-to-N sync, which only csync does. Moreover, csync handles conflicts (and not just by always just overwriting one of the files, but with smart algorithms).</li>
</ul>
<h3>Why PHP?</h3>
ownCloud is for everybody. We picked PHP because:
<ul>
	<li>PHP runs anywhere and is supported everywhere. Even the cheapest hosting provider should support ownCloud and PHP makes that possible.</li>
	<li>PHP is easy to learn which makes it easy for people to contribute. The ease of PHP also allows you to check the code that runs your ownCloud and make changes that you need.</li>
</ul>
In short, PHP lowers the barrier for using, auditing, modifying and contributing to ownCloud. And that is important!
<h3>Why do you use HTTP?</h3>
<ul>
	<li>HTTP goes through every firewall and proxy and it can be done fast (and we do).</li>
</ul>
<h3>Why does calendar stuff not work on Android?</h3>
<ul>
	<li>iOS has native ical/caldav support, Android does not. You have to use an app that works but unfortunately all apps we're aware of that support caldav/ical are paid. You can find the apps in our documentation.</li>
</ul>
<h3>Why does $MOBILEAPP not support $Feature?</h3>
<ul>
	<li>The Android and Mac OS X apps have auto-picture-and-video-upload and give access to your files but. Most other features are either under development, are be provided by other apps (like calendar and contacts) or we'd welcome your patches.</li>
</ul>
<h3>How Secure is ownCloud?</h3>
<ul>
	<li>ownCloud supports HTTPS and offers server-side encryption. ownCloud automatically generates a 4096-bit strong private/public key-pair for each user. Private keys are encrypted with the user’s login password</li>
	<li>ownCloud is an open source project so all code is visible. We are committed to building secure code and have a full-time developer who is just focused on security. We always welcome fixes to security issues, see owncloud.org/security</li>
	<li>To learn a bit more about ownCloud security, watch <a href="https://www.youtube.com/watch?v=iLJbMrLgowk&index=25&list=PLtZe22ggl2YCfEzrHbFCylXGLGYtsHm96">this technical talk at the ownCloud Contributor Conference</a>.</li>
</ul>
<h3>Are files encrypted during sync?</h3>
<ul>
	<li>We use SSL for sharing files... So they are encrypted during transmission. No need for an extra layer.</li>
</ul>
<h3>Does ownCloud support encrypting files on the server?</h3>
<ul>
	<li>Yes, but the server always has the keys. You can't have a web interface if the server can't read the files and the web interface (and sharing abilities!) are very central to ownCloud. So you will always need to be able to trust the server if you want to 'own' your data. Read more <a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/">in this article</a></li>
</ul>
<h3>Why do I sometimes get conflict file messages with syncing?</h3>
<ul>
	<li>A conflict may be caused by two or more users editing the same files at the same time or before they are synced. We do not merge changes to files like systems like git do; we don't modify user files, ever.</li>
</ul>
<h3>Does ownCloud use partial file syncing (only syncing changes, eg only metadata of movie)?</h3>
<ul>
	<li>This is in development. We introduced chunked, parallel up- and download with ownCloud 7 and the ownCloud 1.6 client already. Help is welcome, see GitHub!</li>
</ul>
<h3>Does ownCloud do file de-duplication?</h3>
<ul>
	<li>No, we think that that is the job of the file system. We do maintain versions of files as they are replaced and you may revert to older versions at any time.</li>
</ul>
<h3>Can I write proprietary apps for ownCloud?</h3>
<ul>
	<li>Yes, under the license for ownCloud Enterprise Edition. The deal is simple: either contribute in code (follow the AGPL license) or purchase ownCloud Enterprise Edition which is issued under the ownCloud commercial license.</li>
</ul>
<h2>ownCloud Community</h2>
<h3> Where is the ownCloud community hosted?</h3>
<ul>
	<li>The	ownCloud code can be found at <a href="http://github.com/owncloud">github.com/ownCloud</a> and our website is on <a href="http://owncloud.org">owncloud.org</a></li>
</ul>
<h3>How big is the ownCloud Community?</h3>
<ul>
	<li>ownCloud has over 1.8 million users and about 300 programmers contributed code in the last 12 months. Tens of thousands participate on our forums, mailing lists, translation and documentation tools, and IRC channels in testing, discussions, translation, documentation and so on.</li>
</ul>
<h3> How did ownCloud get started?</h3>
<ul>
	<li>ownCloud started with a keynote by Frank Karlitschek at Camp KDE’10 where he talked about the need of a self-controlled free and open source cloud. Two years later, Frank announced the start of ownCloud Inc. which is headquartered in Lexington, Massachusetts in the United States and Nuremburg, Germany. Find out more on <a href="http://owncloud.org/history">owncloud.org/history</a>.</li>
</ul>
<h3>How can I get involved in the ownCloud Community?</h3>
<ul>
	<li>The	best way to get started is to visit <a href="http://owncloud.org/contribute">owncloud.org/contribute</a>.</li>
</ul>
<h3>But what if I'm not very technical?</h3>
<ul>
	<li>There are lots of ways you can contribute to ownCloud. We have a need for developers, designers, event organizers, speakers, QA and more.</li>
</ul>
<h3> Where can I find ownCloud apps?</h3>
<ul>
	<li>We offer over 180 community and enterprise-developed apps at <A HREF="http://apps.owncloud.com/">apps.owncloud.com</A> that have been developed with our open API and mobile libraries. You can find apps in all categories: multimedia, PIM, productivity, games, tools and more.</li>
</ul>
<h2>ownCloud for the Enterprise</h2>
<h3>How do the Community and Enterprise work together?</h3>
<ul>
	<li>The company makes it possible for developers to work full time on ownCloud, organizing ownCloud events, marketing ownCloud to a wider audience and supporting companies, governments and schools in their ownCloud deployments.</li>
	<li>The business model of ownCloud Inc. is very similar to other successful Open Source companies, offering services and support around ownCloud for the enterprise. The company is dedicated to working entirely in the open, accelerating development in the areas of its customers' needs while enabling a completely open development process where everybody can contribute.</li>
	<li>The Enterprise Edition is built off the same code as the Community Edition. We do all our development in the open; this is neither an open-core model, nor a dump-your-code-over-the-wall model. Read what the Free Software Foundation says about it: <A HREF="http://www.gnu.org/philosophy/selling-exceptions.html">gnu.org/philosophy/selling-exceptions</A>.</li>
</ul>
Check out <a href="http://owncloud.com">owncloud.com</a> and <a href="http://owncloud.org/history">owncloud.org/history</a> for more information.
<h3>What customers does ownCloud Inc. have?</h3>
<ul>
	<li>ownCloud works with several large enterprises across financial services, energy, government, healthcare, education and more. Some of our marquis customers include TU Berlin, CERN, Joy Global, Wind River, Rush Medical, TERENA, De'Longhi, TTX, Dutch Ministry of Defense as well as other large financial services and telco companies we cannot name. Check out <a href="http://owncloud.com">owncloud.com</a> for more information.</li>
</ul>
<h3>What features does Enterprise Edition have that are different from the Community Edition?</h3>
<ul>
	<li>ownCloud Enterprise Edition is designed for those organizations that require support and enterprise-only features such as: File Firewall, Home Directory Mounts, Logging/Auditing, Jive Integration, MS SQL support, Oracle DB support, Provisioning APIs and certified ownCloud plugins. You can learn more on <a href="https://owncloud.com/lp/file-sharing-under-your-control/">this page</a>.</li>
</ul>


