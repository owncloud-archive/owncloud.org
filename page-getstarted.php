<div class="page-header">
  <h1>Get Started!</h1>
</div>
<hr class="wide"></hr>
<div class="row">
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">1</div>
    <h3><i class="icon-download"></i> Download ownCloud</h3>
    <p>Set up a server, buy one or find a provider:</p>
    <div class="btn-group">
      <a class="btn btn-default btn-lg" role="button" href="#instructions-server" rel="tooltip" title="Install instructions" data-toggle="popover">Download</a>
      <a class="btn btn-default btn-lg" role="button" href="/hardware-TBD">Servers</a>
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
    <p>Browse hundreds of free ownCloud apps and connect services you already use to ownCloud:</p>
     <div class="btn-group">
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/owncloud/core/wiki/Apps" target="_blank">Apps</a>
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/owncloud/core/wiki/Apps#integration-efforts" target="_blank">3rd party apps</a>
      </div>
  </div>
</div>
<h2>Keep going!</h2>
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
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">5</div>
    <h3><i class="icon-comment"></i> Support channels</h3>
    <p></p>
    <ul>
      <li><a href=""http://forums.owncloud.org" target="_blank">Forum</a></li>
      <li><a href="https://forum.owncloud.org/viewforum.php?f=17" target="_blank">FAQ</a></li>
    </ul>
    <p>By e-mail:</p>  
    <ul>
        <li><a href="https://mailman.owncloud.org/mailman/listinfo/user" target="_blank">User mailing list</a></li>
        <li><a href="https://owncloud.com/contact/" target="_blank">Enterprise support</a></li>
    </ul>
    <p>On IRC:</p>
    <ul>
        <li><a href="irc://#owncloud@freenode.net" target="_blank">IRC channel</a></li>
        <li><a href="http://webchat.freenode.net/?channels=owncloud" target="_blank">Webchat</a></li>
    </ul>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">6</div>
    <h3><i class="icon-rocket"></i> Get involved</h3>
    <p>Consider joining our contributors network: <a href="http://insiders.owncloud.com/welcome/Spicehead">ownCloud Insiders</a>.</p>
    <p>Our server is in constant development and help is always needed in developing and testing:</p>
    <ul>
        <li><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" target="_blank">Daily build</a></li>
        <li><a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" target="_blank">Linux Packages</a></li>
        <li><a href="https://github.com/owncloud/mirall/issues" target="_blank">Bug Traker</a></li>
    </ul>
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