<?php get_template_part('templates/parts/title'); ?>
<div class="sub-nav"><a href="/security/advisories">Security Advisories</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/security/hall-of-fame">Hall of Fame</a></div>
<h2>Security information</h2>
<p>This page hosts our security policies and information with regards to reporting security flaws.</p>

<p>If you are looking for information on encryption, <a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/" target="_blank">see this blog</a>. For more general information around security, see our <a href="/faq#security" target="_blank">FAQ questions around security</a> and follow our development on <a href="https://owncloud.org/news" target="_blank">owncloud.org/news</a> to learn about <a href="https://statuscode.ch/2015/05/security-and-owncloud-8.1/" target="_blank">security improvements like those introduced in ownCloud 8.1</a>. For server owners, our documentation has a section with <a href="<?php echo $DOCUMENTATION_ADMIN; ?>configuration_server/harden_server.html" target="_blank">best practices and tips on securing an ownCloud server</a>.</p>
<div class="row">
<div class="span12">
<p><div class="alert alert-danger"><strong>Heads up!</strong> We appreciate every report, however, please notice that our team is very busy and therefore won't consider reports which we rate as "low" severity or invalid (e.g. DoS in Apache or "X-Powered-By" headers). So do us and yourself a favor: Don't report such things, we will not take them into consideration.</div></p>
<p>If you've discovered a security issue with ownCloud, please read our responsible disclosure guidelines and contact us at <a href="https://hackerone.com/owncloud"><strong>https://hackerone.com/owncloud</strong></a>. Your report should include:
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

<h3>Responsible Disclosure Guidelines</h3>
The ownCloud community kindly requests that you comply with the following guidelines when researching and reporting security vulnerabilities:
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
	<li>7.0.x</li>
	<li>8.0.x</li>
  <li>8.1.x</li>
</ul>
ownCloud Desktop Client:
<ul>
	<li>2.0.x</li>
</ul>
<h3>Unsupported Product Versions</h3>
ownCloud Server:
<ul>
	<li>1.x to 6.x (We strongly suggest to upgrade to the latest release)</li>
</ul>
ownCloud Desktop Client:
<ul>
	<li>1.0.x to 1.8.x (We strongly suggest to upgrade to the latest release)</li>
</ul>
<h3>Third-party apps</h3>
Vulnerabilities in third-party applications should also be reported to the security team. The security team is not responsible for the security of these apps, but will attempt to contact the 3rd party app maintainer and then take proper actions.
</div>
</div>
