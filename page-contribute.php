<?php get_template_part('templates/parts/title'); ?>
<p>ownCloud is an <strong>open source project</strong>. That means that not only do you have access to the source
so you <em>can</em> change it, we <em>want</em> you to change it. And once you have, you can take that change
and make it part of ownCloud, so everybody benefits from the improvement!</p>
<p>Do you want to get a certain <strong>improvement</strong> in ownCloud? Did you find a <strong>problem</strong>?
Do you want to <strong>help</strong> translate, promote or document ownCloud?</p>
<a href="https://owncloud.org/blog/owncloud-7-beta-is-out-help-us-test-it" class="btn btn-lg btn-default">Join the Beta Program</a></br></br>
<h2>How to make ownCloud awesome:</h2>

<div class="panel-group" id="accordionContribute">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapseCoding">
          <i class="icon-thumbs-up"></i>&nbsp;&nbsp;Help improve ownCloud!
        </a>
      </h4>
    </div>
    <div id="collapseCoding" class="panel-collapse collapse.in">
      <div class="panel-body">
      	<ul>
          <li>Develop your own ownCloud app</li>
      	  <li>Get a bug fixed</li>
      	  <li>Improve the ownCloud Core</li>
      	  <li>Learn to write ownCloud code.</li>
        </ul>
      	<h2>Contribution guidelines</h2>
      	<p>To find out how to write ownCloud code, check out our <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">developer documentation here</a>.
      	Talk to us <a href="irc://#owncloud-dev@freenode.net">on IRC</a> and on our 
      	<a href="http://mailman.owncloud.org/mailman/listinfo/devel">mailing list</a>!</p>
      	<ul>
          <li>We use <a href="https://github.com/owncloud">Github</a>, please get an account there and clone the repositories you want to work on</li>
		      <li>Ideally, discuss your plans on the <a href="http://mailman.owncloud.org/mailman/listinfo/devel">mailing list</a>
		      to see if others want to work with you on it</li>
		      <li><strong>Fixes</strong> go directly to master, nevertheless they need to be tested thoroughly</li>
		      <li><strong>New features</strong> are always developed in a branch and only merged to master once they are fully done</li>
		      <li>When you are finished, use the merge request function on Github. The other developers will look at
		      it and give you feedback. Ideally also post your merge request to the mailing list to let people know.</li>
		      <li>Decisions are <a href="http://blog.jospoortvliet.com/2013/05/consensus-decision-making.html">made by consensus</a>.
      		We strive for making the best technical decisions and as nobody can know everything, we collaborate.
      		That means a first negative comment might not be the final word, neither is positive feedback an immediate <em>GO</em>.
      		ownCloud is built out of modular pieces (apps) and maintainers have a strong influence. In case of
      		disagreement we consult other seasoned contributors.</li>
        </ul>

        <p><em>TIP</em>: If you are new to git, do the <a href="http://git-scm.com/course/svn.html">git crash course</a>.
        We use <a href="http://github.com/owncloud">github</a> for our collaborative development, and they have an excellent
        series of tutorials on <a href="https://help.github.com/">help.github.com</a>. Try the <em>'Set Up git'</em>,
        <em>'Fork a Repo'</em> and <em>'Be Social'</em> tutorials!</p>

        <p><em>TIP</em>: For an easy way to get involved, try to implement one of our
        <strong><a href="https://github.com/owncloud/core/issues?labels=Junior+Job&state=open/">Junior Jobs</a></strong>
        and see the <a href="https://github.com/owncloud/core/wiki/Project-ideas#coding">project ideas page</a>
        (and don't hesitate to contact the mentor of the project you're interested in!)</p>
     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapseIssues">
          <i class="icon-refresh"></i>&nbsp;&nbsp;Help test ownCloud
        </a>
      </h4>
    </div>
    <div id="collapseIssues" class="panel-collapse collapse">
      <div class="panel-body">
      	<p>Testing upcoming ownCloud releases is the best way of making sure the new release can do what you need it 
      	to do. And of course, only if you report a problem to us we know about it and can fix it!</p>
      	<p>Find the <a href="https://github.com/owncloud/core/blob/master/CONTRIBUTING.md">issue guidelines here</a>. 
      	They explain where to look for existing issues and how to submit a new one.</p>
      	<h2>How to test</h2>
      	Testing follows these steps:
	      <ol>
		      <li>Set up your testing environment</li>
		      <li>Pick something to test</li>
		      <li>Test it</li>
		      <li>Back to 2 until something unexpected/bad happens</li>
		      <li>Check if what you found is really a bug</li>
		      <li>File the bug</li>
	      </ol>
	      <h3>Installing ownCloud</h3>
	      <p>Testing starts with setting up a testing environment. We urge you to not put your production data on testing
	      releases unless you have a backup somewhere!</p>

	      <p>Start by installing ownCloud, either on real hardware or in a VM.</p>

	      <p>You can find <a href="<?php echo $DOCUMENTATION_ADMIN; ?>#installation">instructions for installation in the documentation</a>.
	      Please note that we are still working on the documentation and if you bump into a problem, you can 
	      <a href="https://github.com/owncloud/documentation">help us fix it</a>. You can edit straight on github,
	      no need to install anything!</p>
	      <h3>The Real Testing</h3>
	      <p>Testing is a matter of trying out some scenarios you decide to test, for example, sharing a folder
	      and mounting it on another ownCloud instance. If it works – awesome, move on. If it doesn't, find out
	      as much as you can about why it doesn't and use that for a bug report.</p>

	      <p>This is the stage where you should see if your issue is already reported by checking the issue
	      tracker. It might even be fixed, sometimes! It can also be fruitful to contact the 
	      <a href="irc://freenode/#owncloud-dev">developers on irc</a>. Tell them you're testing ownCloud 7
	      and share what problem you bumped into. Depending on many factors including time of day (even 
	      ownCloud developers need sleep!) and the stars, you'll get an answer sooner or later.</p>

	      <p>Finally, if the issue you bump into is a clear bug and the developers are not aware of it, file it as a new issue.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapseTranslate">
          <i class="icon-book"></i>&nbsp;&nbsp;Help translate ownCloud
        </a>
      </h4>
    </div>
    <div id="collapseTranslate" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Translate ownCloud to your language. Go to <a href="https://www.transifex.com/projects/p/owncloud/">Transifex</a> and get going!</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapseWebsite">
          <i class="icon-desktop"></i>&nbsp;&nbsp;Help with the ownCloud website
        </a>
      </h4>
    </div>
    <div id="collapseWebsite" class="panel-collapse collapse">
      <div class="panel-body">
      	Help out with the <a href="https://github.com/owncloud/www/blob/master/README.md">website</a> and
      	<a href="https://github.com/owncloud/documentation/blob/stable6/CONTRIBUTING.rst">write
      	documentation</a> (contact tpn or deryo in the <a href="irc://#owncloud-dev@freenode.net">irc channel</a>)
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapseDesign">
          <i class="icon-pencil"></i>&nbsp;&nbsp;Help with designing ownCloud!
        </a>
      </h4>
    </div>
    <div id="collapseDesign" class="panel-collapse collapse">
      <div class="panel-body">
      	Help out with ownCloud user interaction design or graphic design! Get involved on 
      	<a href="contribute/design/">the design page</a>!
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapseMoney">
          <i class="icon-money"></i>&nbsp;&nbsp;Help with bounties!
        </a>
      </h4>
    </div>
    <div id="collapseMoney" class="panel-collapse collapse">
      <div class="panel-body">
        Support ownCloud development by offering some money on features you would like to have!
        <a href="https://www.bountysource.com/teams/owncloud">Check our bountysource page</a>!
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionContribute" href="#collapsePromote">
          <i class="icon-bullhorn"></i>&nbsp;&nbsp;Help promote ownCloud
        </a>
      </h4>
    </div>
    <div id="collapsePromote" class="panel-collapse collapse">
      <div class="panel-body">
        Spread the word, tell your friends about it, write a blog post! Or <a href="/events">organize ownCloud events</a> 
        like meetups and talks or a booth at tradeshows.
      </div>
    </div>
  </div>
</div>

<h1>Let's make ownCloud Rock!</h1>  
<p>If you have any questions, <a href="/contact/">we are happy to help you</a>.</p>