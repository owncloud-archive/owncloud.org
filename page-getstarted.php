<div class="page-header">
  <h1>Get Started!</h1>
</div>
<hr class="wide"></hr>
<div class="row">
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">1</div>
    <h3><i class="icon-download"></i> Download ownCloud</h3>
    <p>Set up a server yourself, deploy to the cloud or find a provider:</p>
    <div class="btn-group">
      <a class="btn btn-default btn-lg" role="button" href="#instructions-server" rel="tooltip" title="Install instructions" id="server" data-toggle="popover">Download</a>
<!--       <a class="btn btn-default btn-lg" role="button" href="/hardware-TBD">Servers</a> - disabled for now, until we have a page like that... -->
      <a class="btn btn-default btn-lg" role="button" href="/providers">Providers</a>
    </div>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">2</div>
    <h3><i class="icon-refresh"></i> Sync</h3>
    <p>Connect to your ownCloud with our clients:</p>
    <div class="btn-group">
      <a class="btn btn-default btn-lg" role="button" href="#install-clients" rel="tooltip" id="desktop" data-toggle="popover" title="Desktop Clients">Desktop clients</a>
      <a class="btn btn-default btn-lg" role="button" href="#install-clients" rel="tooltip" id="mobile" data-toggle="popover" title="Mobile Clients">Mobile clients</a>
    </div>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">3</div>
    <h3><i class="icon-globe"></i> Extend</h3>
    <p>Browse hundreds of free ownCloud apps and connect services you use to ownCloud:</p>
     <div class="btn-group">
        <a class="btn btn-default btn-lg" role="button" href="https://apps.owncloud.com" target="_blank">ownCloud Apps</a>
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/owncloud/core/wiki/Apps" target="_blank">3rd party apps</a>
      </div>
  </div>
</div>
<h1>Get more out of ownCloud!</h1>
<hr class="wide"></hr>
<div class="row">
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">4</div>
    <h3><i class="icon-book"></i> Documentation</h3>
    <p>Manuals are provided in HTML and PDF form:</p>
    <ul>
      <li><a href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank">Users</a></li>
      <li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank">Admins</a></li>
      <li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank">Developers</a></li>
      <li> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/" target="_blank">Testers</a></li>
    </ul>
    <p>If you have other questions about ownCloud, read our <a href="/faq" target="_blank">ownCloud FAQ</a>.</p>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">5</div>
    <h3><i class="icon-comment"></i> Support channels</h3>
    <p>Discuss using, installing or maintaining ownCloud in our community support channels.</p>
    <ul>
      <li><a href="http://forum.owncloud.org" target="_blank">Forum</a> (<a href="https://forum.owncloud.org/viewforum.php?f=17" target="_blank">Forum FAQ</a>)</li>
      <li><a href="https://mailman.owncloud.org/mailman/listinfo/user" target="_blank">User mailing list</a></li>
      <li><a href="irc://#owncloud@freenode.net" target="_blank">IRC channel</a> (<a href="http://webchat.freenode.net/?channels=owncloud" target="_blank">Webchat</a>)</li>
    </ul>
    <p>Find <a href="/support" target="_blank">more support resources here</a>.</p>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">6</div>
    <h3><i class="icon-rocket"></i> Get involved</h3>
    <p><a href="/promote" target="_blank">Join the conversation</a> around ownCloud!</p>
    <p>If you want to help out with <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank">developing</a> and <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>testing/index.html" target="_blank">testing</a>, grab a daily build or beta packages.</p>
    <p><a class="btn btn-default btn-lg" role="button" href="#testing-development" rel="tooltip" title="Contribute" id="testing" data-toggle="popover">testing packages</a></p>
    <p>See more <a href="/contribute" target="_blank">ways to get involved</a>!</p>
  </div>
</div> 
<hr></hr>
<script>
    $('#mobile').click(function () {
        $("#tab-desktop").removeClass("active");
        $("#tab-mobile").addClass("active");
    });
    $('#desktop').click(function () {
        $("#tab-mobile").removeClass("active");
        $("#tab-desktop").addClass("active");
    });
</script>
