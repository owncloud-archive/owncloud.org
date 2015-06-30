<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Tracking ownCloud Releases</h1>
</div>
<p>With millions of ownCloud users, there is a wide variety of needs and requirements. To give our users more flexibility in choosing an ownCloud version which fits their needs, we offer Release Channels. Below you can find and pick the best Channel for you. We recommend using Linux packages if possible.</p>
  <table class="table table-striped">
    <tr>
      <td class="warning" style="min-width:250px; max-widt:250px"><i class="icon-sitemap"></i>&nbsp;&nbsp;Release channel</td>
      <td class="info" style="min-width:300px"><i class="icon-briefcase"></i>&nbsp;&nbsp;Use case</td>
      <td class="info" style="min-width:300px"><i class="icon-archive"></i>&nbsp;&nbsp;Get it here</td>
    </tr>
    <tr>
      <td class="warning"><h1>Production</h1></td>
      <td class="info">This channel delivers versions that have proven their stability for some time.</br>
That does not imply that these release are bug free, but issues are known and can be worked around. The downside of this channel is that the releases are behind in terms of features and performance.</td>
            <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_PRODUCTION_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_PRODUCTION_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_PRODUCTION; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
    <tr>
      <td class="warning"><h1>Stable</h1></td>
      <td class="info">This channel delivers the latest feature releases ready for home users at minimal risk.</td>
            <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
    <tr>
      <td class="warning"><h1>Beta</h1></td>
      <td class="info">Betas and release candidates are the version of choice for testers in preparation of a ownCloud release. Grab these to make sure the upcoming release works well on your infrastructure.</td>
      <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_BETA_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_BETA_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_BETA; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
    <tr>
      <td class="warning"><h1>Daily</h1></td>
      <td class="info">Daily builds are meant to to reproduce bugs and enable testers to follow the development of the nest major version.</td>
      <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
  </table>
<p>If you are looking to track a specific version, you can find our <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_OBS_HOME; ?>">Linux package repositories here</a> and older tarballs are available in our <a href="/changelog">changelog</a>.</p>
<p><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
