<div class="row">
<div class="span8 install-title-block">
<h2>Install ownCloud Server</h2>
<h3>Latest stable version: 5.0.13</h3>
</div>
<div class="span4 install-buttons">
 <a style="margin-top: 40px;" data-placement="left" class="btn btn-primary btn-large" href="#downloadModal" role="button"data-toggle="modal" rel="tooltip" title="For server owners"><i class="icon-archive"></i> Tar or Zip File</a>
  <a class="btn btn-inverse btn-large" data-placement="left" href="#webInstallerModal" role="button"data-toggle="modal" rel="tooltip" title="Best for shared hosting"><i class="icon-code"></i> Web Installer</a>
  <a class="btn btn-inverse btn-large" data-placement="left" href="#repoModal" role="button"data-toggle="modal" rel="tooltip" title="Provides automated updates"><i class="icon-linux"></i> Linux packages</a>
</div>
</div>
<div class="row grey">
<div class="span8 install-mobile-clients">
<h3 class="clients">Install the Mobile Sync Clients</h3>
<a target="_blank" href="http://itunes.apple.com/us/app/owncloud/id543672169?ls=1&amp;mt=8" id="appstore">
<img src="https://owncloud.com/wp-content/themes/owncloud/img/appstore.png"></a>
<a target="_blank" href="https://play.google.com/store/apps/details?id=com.owncloud.android" id="googleplay">
<img src="https://owncloud.com/wp-content/themes/owncloud/img/googleplay.png"></a><br>
<small>Looking for the <a href="https://github.com/owncloud/android">Android Sources</a>?</small>
</div>
<div class="span4">
<img style="z-index: 1; position: absolute; width: auto; height: 400px; margin-top: 30px; margin-left: -80px;" src="https://owncloud.com/wp-content/uploads/2012/07/android1.png"/>
</div>
</div>
<div class="row" style="z-index: 2; position: absolute; background-color: white;">
<div class="span8">
<h3 class="clients" style="margin-top: 20px;">Install the Desktop Sync Clients</h3>
<img style="height: auto; width: 60%; margin-left: 100px; margin-top: 10px;" src="http://owncloud.org/wp-content/uploads/2013/11/macsyncclient.png" />
</div>
<div class="span4 install-buttons">
<a href="http://owncloud.org/sync-clients/#windows" style="margin-top: 55px;" class="btn btn-large btn-primary btn-default"><i class="icon-windows"></i>  Windows</a>
<a href="http://owncloud.org/sync-clients/#mac" class="btn btn-large btn-primary btn-default"><i class="icon-apple"></i> Mac</a>
<a href="http://owncloud.org/sync-clients/#linux" class="btn btn-large btn-primary btn-default"><i class="icon-linux"></i> Linux</a>
<small>Looking for the <a href="http://owncloud.org/sync-clients/#sources">Sources</a>?</small>
</div>
</div>
<div class="row grey" style="margin-top: 230px; z-index: 3; position: absolute;">
<div class="span12">
<h2>Production Builds</h2>
</div>
</div>
<div class="row" style="margin-top: 460px;">
<div class="span12">
<h2>Help with testing ownCloud</h2>
<p>Test the latest and greatest ownCloud features in ownCloud 6.</p>
</div>
</div>


<!-- Modals -->
<div id="downloadModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="downloadModalLabel">Install ownCloud</h3>
  </div>
  <div class="modal-body">
    <p>The .tar archive is the classic way of installing ownCloud server. It provides the server and all immediate 3rd party PHP libraries.</p>

    <ol>
      <li>Download <a href="http://download.owncloud.org/community/owncloud-5.0.13.tar.bz2">Unix</a> (<tt>.tar.bz2</tt>) or <a href="http://download.owncloud.org/community/owncloud-5.0.13.zip">Windows</a> (<tt>.zip</tt>) archive.</li>
      <li>Check package integrity using the MD5 sum: <a href="http://download.owncloud.org/community/owncloud-5.0.13.tar.bz2.md5">Unix</a> / <a href="http://download.owncloud.org/community/owncloud-5.0.13.zip.md5">Windows</a>
      <li>Follow the <a href="http://doc.owncloud.org/server/5.0/admin_manual/installation.html">ownCloud Admin Manuals'</a> installation chapter</li>
    </ol> 
  <p><small>Note: To receive information about updates and security issues, we recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>. The public ownCloud <a href="https://owncloud.org/owncloud.asc">GPG key</a></small>.
 </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<div id="webInstallerModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="webInstallerModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="webInstallerModalLabel">Install ownCloud using the Web Installer</h3>
  </div>
  <div class="modal-body">
    <p>
    The Web Installer is the easiest way for novice users to install ownCloud on their web space. It checks the dependencies,
    download the newest ownCloud from the official server, unpacks it with the right permissions and the right user account.
    Finally, you will be redirected to the ownCloud installer.
    </p>
    <ol>
    <li>Right-click <a href="https://download.owncloud.com/download/community/setup-owncloud.php">here</a> and save the file to your computer</li>
    <li>Upload <tt>setup-owncloud.php</tt> to your web space</li>
    <li>Point your web browser to <tt>setup-owncloud.php</tt> on your webspace</li>
    <li>Follow the instructions and configure ownCloud</a>
    <li>Login to your newly created ownCloud instance!</li>
    </ol>

    <p>You can find further instructions in the <a href="http://doc.owncloud.org/server/4.5/admin_manual/">
    ownCloud Admin Manual</a>.</p>

    <p><small>Note: Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="https://owncloud.org/owncloud.asc">GPG key</a></small></p>
</div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<div id="repoModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="repoModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="repoModalLabel">Install ownCloud using Linux packages</h3>
  </div>
  <div class="modal-body">
        <p>ownCloud provides ready-to-deploy packages for popular Linux distributions such as Debian, Ubuntu,
           Fedora, RedHat Enterprise Linux, CentOS and openSUSE.
        </p>
        <p>Clicking on "Continue" will forward you to the ownCloud community page at the
           <a href="http://build.opensuse.org/" target="_blank">openSUSE Build Service</a>, which hosts the repositories
           for all distributions. Further instructions on how to install ownCloud for your distribution are also
           provided there. For setup instructions, please follow the ownCloud Admin manual.
        </p>
        <p>The repositories allow you to stay on an up-to-date version of ownCloud using your distributions'
           update mechanism, with packages maintained by the ownCloud community.</p>

        <p>You can find further instructions in the <a href="http://doc.owncloud.org/server/4.5/admin_manual/">
        ownCloud Admin Manual</a>.</p>	

        <p><small>Note: New updates will be made available in the repository on every release. To learn about changes
        and security issues, we additionally recommend a subscription on our low-traffic
        <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a></small></p>
  </div>
  <div class="modal-footer">
    <button class="btn " data-dismiss="modal" aria-hidden="true">Close</button>
    <a class="btn btn-primary" href="http://software.opensuse.org/download/package?project=isv:ownCloud:community&amp;package=owncloud"" aria-hidden="true">Continue</a>
  </div>
</div>
