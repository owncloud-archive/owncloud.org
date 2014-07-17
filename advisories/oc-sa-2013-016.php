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
		<h2>Local file disclosure when running on Windows (oc-sa-2013-016)</h2>
		<p>11th April 2013</p>
		<p>Risk level: <strong>High</strong></p>
		<h3>Description</h3>
		<p><p>Due to not rejecting “\” as path separator in all ownCloud versions prior to 5.0.4 including the 4.x branch an authenticated remote attacker is able to download arbitrary files from the server when running under Windows.</p><p>This vulnerability exists inside our used DAV implementation “SabreDAV” and was found by the ownCloud security team. SabreDAV released fixed versions to address this problem.</p></p>
		<h3>Affected Software</h3>
		<ul>
			<li>ownCloud Server < <strong>5.0.4</strong> (CVE-2013-1939)</li><li>ownCloud Server < <strong>4.5.9</strong> (CVE-2013-1939)</li><li>ownCloud Server < <strong>4.0.14</strong> (CVE-2013-1939)</li>
		</ul>
		<h3>Action Taken</h3>
		<p></p>
		<h3>Acknowledgements</h3>
		<p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
		<ul>
			<li>Lukas Reschke - ownCloud Inc. (lukas@owncloud.org) - Vulnerability discovery and disclosure.</li>
		</ul>
		</br>
	</div>
</div>