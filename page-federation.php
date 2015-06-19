<script>
  function owncloudHash(){
    var hash = 'An example Federation ID is <strong>username@owncloudserver/owncloud';
    if(window.location.hash) {
        hash = 'My Federation ID is <strong>'+window.location.hash.substring(1); //Puts hash in variable, and removes the # character
    }  
   return hash;
  }
</script>
<div class="row col-md-12">
	<h2 class="conf-location">Share across ownClouds!</h2>
</div>
<div class="row conf-info">
	<div class="col-lg-4 col-md-5 text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/federation/federation.gif" alt="in action" /><br />
	</div>
	<div class="col-lg-8 col-md-7">
		<p>Sharing files across ownCloud servers is as easy as sending an email from a Gmail address to a Yahoo account! Instead of an email address, you use a <em>Federation ID</em>.</p>
		<p class="federation-id"><script>document.write(owncloudHash());</script></strong></p>
		<p>To share a file, enter the Federation ID in the 'share' dialog. A notification will pop up on the ownCloud server of the recipient.</p>
		<p>You can find your own Federation ID in your user settings. Give it to your friends so they can share files with you!</p>
	</div>
</div>
<div class="row conf-partners-title">
	<div class="col-md-12">
		<h2>More details</h2>
	</div>
</div>
<div     class="row">
        <div class="col-md-6 col-md-offset-3">
                Watch <a href="http://youtube.com/ownClouders" target="_blank">this YouTube video</a> to learn more or check out the <a href="https://doc.owncloud.org/server/8.1/user_manual/files/federated_cloud_sharing.html" target="_blank">user documentation</a>. Find <a href="http://owncloud.com/introducing-federation" target="_blank">technical details here</a>.
        </div>
</div>




