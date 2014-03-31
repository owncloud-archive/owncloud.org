<div class="row page-content-header">
	<div class="col-md-4">
		<h1>Security Advisories</h1>
		<a href="/security/advisories/feed" class="rss-button">RSS</a>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<h3>ownCloud Server</h3>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-002/">Insecure OpenID implementation</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-003/">Insecure Flash Cross Domain policies</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-004/">Host Header Poisoning</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-005/">LDAP Injection</a>
		<br>
		<h3>Desktop Client</h3>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-003/">Insecure Flash Cross Domain policies</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-004/">Host Header Poisoning</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-008/">Users can mount the local filesystem</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-005/">LDAP Injection</a>
		<br>
		<h3>Mobile Clients</h3>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-002/">Insecure OpenID implementation</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-004/">Host Header Poisoning</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-005/">LDAP Injection</a></br>
		<a href="http://owncloud.org/about/security/advisories/oC-SA-2014-006/">XXE in multiple third party components</a>
		<br><br>
		<a href="/security/advisories">Older advisories</a>
	</div>
	<div class="col-md-9">
		<h2>Host Header Poisoning (oC-SA-2014-004)</h2>
		<p>24th March 2014</p>
		<p>Risk level: <strong>Medium</strong></p>
		<h3>Description</h3>
		<p>Due to trusting user supplied input and interpret it as Host header an attacker is able to craft a password reset mail with a link pointing to his own site. If a user clicks on the link or a software (e.g. antivirus) is accessing the link the attacker is able to reset the user password.</p>
		<h3>Affected Software</h3>
		<ul>
			<li>ownCloud Server <= <strong>6.0.2</strong> (CVE-2014-004)</li>
			<li>ownCloud Server <= <strong>5.0.6</strong> (CVE-2014-005)</li>
		</ul>
		<h3>Action Taken</h3>
		<p>We have provided new components, <code>Zend_Xml_Security</code> in ZF1 and the standalone <code>ZendXml</code>, that scan and load XML documents to prevent the previous attacks. The XXE attack is prevented using the <code>libxml_disable_entity_loader()</code> function to disable the loading of ENTITY nodes. The XXE attack is prevented by checking for the presence of ENTITY elements in the document type declaration; in such cases, we throw an Exception with an error message indicating that we don't accept ENTITY declarations in XML documents for security reasons.</p>
		<p>Example exploit:</p>
		<pre>$example = call_to_bad_function();</pre>
		<h3>Acknowledgements</h3>
		<p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
		<ul>
			<li>Lukas Reschke (lukas@owncloud.org) - for reporting the potential XXE attacks in some components of ZF1, not previously fixed, and to suggest a possible fix for PHP-FPM scenarios</li>
		</ul>
		</br>
	</div>
</div>