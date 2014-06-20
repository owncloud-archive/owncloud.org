<?php get_template_part('templates/parts/title'); ?>
<p>You want to get an <strong>improvement</strong> in ownCloud? Found a <strong>problem</strong>?
Want to <strong>help</strong> translate, promote or document ownCloud?</p>
<p><strong>That is awesome, we look forward to your contribution!</strong> Let's get you started.</p>
<h2>How to make ownCloud awesome:</h2>
<ul>
	<li>Get your code in ownCloud! See below.</li>
	<li><a href="https://github.com/owncloud/core/issues">Report an issue on our bug tracker</a></li>
	<li><a href="https://www.transifex.com/projects/p/owncloud/">Translate ownCloud to your language</a></li>
	<li>Learn to write ownCloud code. We have <a href="https://github.com/owncloud/core/issues?labels=Junior+Job&state=open/">Junior Jobs</a>
	and a <a href="https://github.com/owncloud/core/wiki/Project-ideas#coding">project ideas page</a> with mentors.
	See below for how to get started.</li>
	<li>Develop your own ownCloud app, see below and check the <a href="<?php echo $DOCUMETNATION_DEVELOPER; ?>">developer documentation</a></li>
	<li>Help out with the <a href="https://github.com/owncloud/www/blob/master/README.md">website</a> and
	<a href="https://github.com/owncloud/documentation/blob/stable6/CONTRIBUTING.rst">write
	documentation</a> (contact tpn or deryo in the <a href="irc://#owncloud-dev@freenode.net">irc channel</a>)</li>
	<li>Spread the word, tell your friends about it, write a blog post!</li>
</ul>
<p>If you have any questions, <a href="/contact/">we are happy to help you</a>.</p>
<h2>Get started with ownCloud coding</h2>
<p>To work on ownCloud code, you need to set a few things up.</p>
<h3>Set up your development environment</h3>
<ol>
	<li>Install git, for example by:<pre>sudo apt-get install git</pre></li>
	<li>The following folder structure is suggested:<br />
<code>/path/to/webserver/owncloud - core repo<br />
/path/to/webserver/apps - apps repo<br />
/path/to/webserver/3rdparty - 3rdparty repo</code><br />
Open a terminal and:<br />
<pre>cd /path/to/webserver<br />
git clone https://github.com/owncloud/core ./owncloud<br />
git clone https://github.com/owncloud/apps<br />
git clone https://github.com/owncloud/3rdparty</pre>
ownCloud will automatically detect the 3rdparty folder if it's either in <code>/path/to/webserver/owncloud</code>
or in <code>/path/to/webserver/.</code></li>
	<li>If you want to use an app from the app repository, you have to 
	<a href="<?php echo $DOCUMETNATION_ADMIN; ?>configuration/configuration_apps.html#parameters">setup
	multiple app directories</a> or symlink each app like e.g.
<pre>ln -s /path/to/webserver/apps/news /path/to/webserver/owncloud/apps/news</pre></li>
	<li><a href="<?php echo $DOCUMETNATION_ADMIN; ?>">Install ownCloud</a> and get it running</li>
	<li>Dive into the code!</li>
</ol>
<p><em>TIP</em>: For an easy way to get involved, check the <a href="https://github.com/owncloud/core/issues?labels=Junior+Job&state=open/">Junior Jobs</a>
and check out the <a href="https://github.com/owncloud/core/wiki/Project-ideas#coding">project ideas page</a>
(and don't hesitate to contact the mentor of the project you're interested in!)</p>
<p><em>TIP</em>: If you are new to git, do the <a href="http://git-scm.com/course/svn.html">git crash course</a>.
We use <a href="http://github.com/owncloud">github</a> for our collaborative development, and they have an excellent
series of tutorials on <a href="https://help.github.com/">help.github.com</a>. Try the <em>'Set Up git'</em>,
<em>'Fork a Repo'</em> and <em>'Be Social'</em> tutorials!</p>
<h2>Getting your code in ownCloud</h2>
<p>Once you have written or improved a piece of ownCloud code, you can submit it to the community for review and inclusion.
Read the Contribution, Design and Coding guidelines below to get an idea of what we are looking for and how it works.</p>
<p>in short, the steps are:</p>
<ol><li><em>(optional)</em> check if somebody is already doing something like this or look for others to work with you
- this prevents duplication of efforts! Just ask around on the 
<a href="http://mailman.owncloud.org/mailman/listinfo/devel">development mailing list</a></li>
<li>Write the code!</li>
<li>Create a pull request on <a href="http://github.com/owncloud">github</a></li>
<li>Work with the reviewers in getting the code in good shape until you have agreement that it is ready to go in</li>
<li>Get your code merged and to our millions of users!</li>
</ol>
<h3>Contribution guidelines</h3>
<ul>
	<li>We use <a href="https://github.com/owncloud">Github</a>, please get an account there and
	clone the repositories you want to work on</li>
	<li>Ideally please communicate your ideas to the <a href="http://mailman.owncloud.org/mailman/listinfo/devel">mailing list</a></li>
	<li>Fixes go directly to master, nevertheless they need to be tested thoroughly</li>
	<li>New features are always developed in a branch and only merged to master once they are fully done</li>
	<li>When you are finished, use the merge request function on Github. The other developers will look at
	it and give you feedback. Ideally also post your merge request to the mailing list to let people know.</li>
	<li>Decisions are <a href="http://blog.jospoortvliet.com/2013/05/consensus-decision-making.html">made by consensus</a>.
	We strive for making the best technical decisions and as nobody can know everything, we collaborate.
	That means a first negative comment might not be the final word, neither is positive feedback an immediate <em>GO</em>.
	ownCloud is built out of modular pieces (apps) and maintainers have a strong influence. In case of
	disagreement we consult other seasoned contributors.</li>
	<li>When you <code>git pull</code>, always use <code>--rebase</code> to not generate extra commits like:
	<em>merged master into master</em></li>
	<li>We need a signed contributor agreement from you to commit into the core repository. But no worries.
	It&#39;s a nice one. ;-) All the information is <a href="/contribute/agreement/">here</a>.</li>
</ul>
<h3>Design guidelines</h3>
<ul>
	<li>Software should work. Only put features into master when they are complete.
	It’s better to not have a feature instead of having one that works poorly.</li>
	<li>Software should get out of the way. Do things automatically instead of offering configuration options.</li>
	<li>Software should be easy to use. Show only the most important elements.
	Secondary elements only on hover or via »Advanced« function.</li>
	<li>User data is sacred. Provide undo instead of asking for confirmation – 
	<a href="http://www.alistapart.com/articles/neveruseawarning/">which might be dismissed</a>.</li>
	<li>The state of the application should be clear. If something loads, provide feedback.</li>
	<li>Do not adapt broken concepts (for example design of desktop apps) 
	just for the sake of »consistency«. We provide a better interface.</li>
	<li>Regularly reset your installation to see how the first-run experience is like. And improve it.</li>
	<li>Ideally do <a href="http://jancborchardt.net/usability-in-free-software">usability testing</a>
	to know how people use the software.</li>
	<li>For further UX principles, read <a href="http://uxmag.com/articles/quantifying-usability">Alex Faaborg from Mozilla</a>.</li>
</ul>
<h3>Coding guidelines</h3>
<ul>
	<li>Use tabs, not spaces</li>
	<li>Java doc style documentation always required!</li>
	<li>Function names in camelCase starting with a lower character</li>
	<li>Class names are CamelCase starting with an upper case character</li>
	<li>Opening brackets in the same line as the statement</li>
	<li>Closing brackets in a separate line</li>
	<li>No global variables</li>
	<li>No global functions</li>
	<li>Double quotes in HTML, single quotes in JavaScript &amp; PHP</li>
	<li>HTML should be HTML5 compliant</li>
	<li>CSS in single-line notation</li>
	<li>Provide unit tests</li>
	<li>Some database tips <a href="http://mailman.owncloud.org/pipermail/devel/2014-June/000262.html">here</a></li>
</ul>
