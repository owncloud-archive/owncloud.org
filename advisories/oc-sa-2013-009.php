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
		<h2>Incomplete blacklist vulnerability (oC-SA-2013-009)</h2>
		<p>14th March 2013</p>
		<p>Risk level: <strong>High</strong></p>
		<h3>Description</h3>
		<p><p>Incomplete blacklist vulnerability in apps/contacts/import.php and apps/contacts/ajax/uploadimport.php in ownCloud before 4.0.13 and 4.5.8 allows an authenticated remote attacker to upload a .htaccess file and therefore the execution of arbitrary PHP code in a standard Apache installation.</p></p>
		<h3>Affected Software</h3>
		<ul>
			<li>ownCloud Server < <strong>4.5.8</strong> (CVE-2013-1850)</li><li>ownCloud Server < <strong>4.0.13</strong> (CVE-2013-1850)</li>
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