<!-- <?php get_template_part('templates/parts/title'); ?> -->
<div class="page-header">
	<h1>Tracking ownCloud Releases</h1>
</div>

<div class="row">
      <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
	      <p>With millions of ownCloud users, there are a wide variety of needs and requirements. We offer Release Channels to give our users more flexibility in choosing an ownCloud version to meet their needs. Below you can find and pick the best Channel for you.</p>
	      <p>You can choose a channel of your preference in the Administrator settings in your ownCloud instance if you have installed ownCloud from an archive. If you prefer using Linux packages, you can pick a repository for a specific version, a repository with daily snapshots or follow the repository which always has the latest stable feature release.</p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
	      <a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels.png" title="Update Channel selection in Updater app" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a>
      </div>
</div>

<table class="table table-striped">
    <tr>
      <td class="warning" style="min-width:250px; max-widt:250px"><i class="icon-sitemap"></i>&nbsp;&nbsp;Release channel</td>
      <td class="info" style="min-width:300px"><i class="icon-briefcase"></i>&nbsp;&nbsp;Use case</td>
      <td class="info" style="min-width:300px"><i class="icon-archive"></i>&nbsp;&nbsp;Get it here</td>
    </tr>
    <tr>
      <td class="warning"><h1>Production</h1></td>
      <td class="info">This channel delivers the latest fully tested release of ownCloud.</br>
		      That does not imply that these release are bug free. The issues are known and can be worked around. The downside of this channel is that the releases are behind in terms of features and performance.</td>
            <td class="info">Older archives and links to older stable series repositories are available from our <a href="/changelog">changelog</a>.</td>
    </tr>
    <tr>
      <td class="warning"><h1>Stable</h1></td>
      <td class="info">This channel delivers the latest feature releases ready for home users at minimal risk.</td>
            <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
    <tr>
      <td class="warning"><h1>Beta</h1></td>
      <td class="info">Betas and release candidates are the versions of choice for testers in preparation for an ownCloud release. Grab these to make sure the upcoming release works well on your infrastructure.</td>
      <td class="info">Follow our <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/testing/index.html">testpilots mailing list</a> to get the latest test version.</td>
    </tr>
    <tr>
      <td class="warning"><h1>Daily</h1></td>
      <td class="info">Daily builds are meant to reproduce bugs as well as to enable testers to follow the development of the next major version.</td>
      <td class="info"><a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Archive File</a> (<a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR_MD5; ?>">MD5</a>)<br />
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a></td>
    </tr>
</table>
<p>If you are looking to grab a archive of a specific version, you can find links to them in our <a href="/changelog">changelog</a>.</p>
<p><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
