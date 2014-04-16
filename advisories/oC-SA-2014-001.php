<div class="row page-content-header">
	<div class="col-md-4">
		<h1>Security Advisory</h1>
		<a href="/security/advisories/feed" class="rss-button">RSS</a>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<?php get_template_part('advisories/single-side-list'); ?>
	</div>
	<div class="col-md-9">
		<h2>Session Fixation (oC-SA-2014-001)</h2>
		<p>25th March 2014</p>
		<p>Risk level: <strong>Medium</strong></p>
		<h3>Description</h3>
		<p>Due to authenticating a user without invalidating any existing session identifier an attacker has the opportunity to steal authenticated sessions. A successful exploit requires that PHP is configured to accept session parameters via &lt;code&gt;GET&lt;/code&gt;.>></p>
		<h3>Affected Software</h3>
		<ul>
			&lt;li&gt;ownCloud Server &lt; &lt;strong&gt;6.0.2&lt;/strong&gt; (CVE-2014-2047)&lt;/li&gt;
		</ul>
		<h3>Action Taken</h3>
		<p>...</p>
		<h3>Acknowledgements</h3>
		<p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
		<ul>
			&lt;li&gt;Lukas Reschke - ownCloud Inc (lukas@owncloud.org) - Vulnerability discovery and disclosure.&lt;/li&gt;
		</ul>
		</br>
	</div>
</div>