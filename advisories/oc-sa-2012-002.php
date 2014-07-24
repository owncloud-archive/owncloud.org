<div class="row page-content-header">
	<div class="col-md-4">
		<h1>Security Advisory</h1>
		<a style="margin-left: 0.5em;" href="/security/advisories/">Back to advisories</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<?php get_template_part('advisories/advisory-side'); ?>
	</div>
	<div class="col-md-8">
		<h2>Timing attack on the password reset (oC-SA-2012-002)</h2>
		<p>24th August 2012</p>
		<p>Risk level: <strong>Medium</strong></p>
		<h3>Description</h3>
		<p><p>The “Lost Password” implementation is vulnerable to a Remote Timing Attack. The token used to secure the password reset is fetched from the database and compared to the user-specified value using the equals operator. An attacker successfully rebuilding the token can then specify an arbitrary password in POST which will overwrite the old password.</p><p>Please note that actual exploitation would require an attacker to be on the same LAN as the ownCloud server.</p></p>
		<h3>Affected Software</h3>
		<ul>
			<li>ownCloud Server < <strong>4.5.1</strong> (CVE-2012-5607)</li><li>ownCloud Server < <strong>4.0.9</strong> (CVE-2012-5607)</li>
		</ul>
		<h3>Action Taken</h3>
		<p></p>
		<h3>Acknowledgements</h3>
		<p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
		<ul>
			<li>Andreas Fischer - ownCloud Inc. (bantu@owncloud.com) - Vulnerability discovery and disclosure.</li>
		</ul>
		</br>
	</div>
</div>