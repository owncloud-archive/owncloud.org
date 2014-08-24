<?php get_template_part('templates/parts/title'); ?>
<div class="sub-nav"><a href="/security/advisories">Security Advisories</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/security/hall-of-fame">Hall of Fame</a></div>
<div class="row">
<div class="span12">
<p><div class="alert alert-danger"><strong>Heads up!</strong> We appreciate every report, however, please notice that our team is very busy and therefore won't respond to reports which we rate as "low" severity or invalid (e.g. DoS in Apache or "X-Powered-By" headers). So do us and yourself a favor: Don't report such things, we will not take them into consideration.</div></p>
<p>If you've discovered a security issue with ownCloud, please read our responsible disclosure policy and contact <strong>security (at) owncloud (dot) com</strong>. Your report should include:
<ul>
	<li>Product version</li>
	<li>A vulnerability description</li>
	<li>Reproduction steps</li>
</ul>
A member of the security team will confirm the vulnerability, determine its impact, and develop a fix. The fix will be applied to the master branch, tested, and packaged in the next security release. The vulnerability will be publicly announced after the release. Finally, your name will be added to the <a href="/security/hall-of-fame">hall of fame</a> as a thank you from the entire ownCloud community.</p>
<h3>PGP Key for Submissions</h3>
In order to facilitate secure submission of security issues, we provide the <a href="https://pgp.mit.edu/pks/lookup?op=get&search=0xDC3F85FE61709BEF">following PGP key</a> for confidential submission:
<ul>
	<li>Key ID: <code>61709BEF</code></li>
	<li>Fingerprint: <code>491F D927 C0D9 E24E 8AD7  C167 DC3F 85FE 6170 9BEF</code></li>
	<li>Expires: <code>2018-02-11</code></li>
</ul>
<div class="alert alert-danger"><strong>Note: </strong>Make sure to not disclose details in the subject, as it will not be encrypted!</div>

<h3>Responsible Disclosure Policy</h3>
The ownCloud community asks that you comply with the following guidelines when researching and reporting security vulnerabilities:
<ul>
	<li>Only test for vulnerabilities on your own install of ownCloud Server</li>
	<li>Confirm the vulnerability applies to a supported product version</li>
	<li>Share vulnerabilities in detail only with the security team</li>
	<li>Allow reasonable time for a response from the security team</li>
	<li>Do not publish information related to the vulnerability until ownCloud has made an announcement to the community</li>
</ul>

<h3>Out of scope</h3>
Usually, the following types of bugs are out of scope from our security program:
<ul>
	<li>User enumeration</li>
	<li>Network level vulnerabilities (e.g. DDoS)</li>
</ul>

<h3>Supported Product Versions</h3>
ownCloud Server:
<ul>
	<li>5.0.x</li>
	<li>6.0.x</li>
	<li>7.0.x</li>
</ul>
ownCloud Desktop Client:
<ul>
	<li>1.5.x</li>
	<li>1.6.x</li>
	<li>1.7.x</li>
</ul>
<h3>Unsupported Product Versions</h3>
ownCloud Server:
<ul>
	<li>1.x to 4.x (We strongly suggest to upgrade to the latest release)</li>
</ul>
ownCloud Desktop Client:
<ul>
	<li>1.0.x to 1.4.x (We strongly suggest to upgrade to the latest release)</li>
</ul>
<h3>3rd party apps</h3>
3rd party app security vulnerabilities should also be reported to the security team. The security team is not responsible for the security of these apps, but will attempt to contact the 3rd party app maintainer and then take proper actions.
</div>
</div>
