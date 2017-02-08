<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>User enumeration with error messages (oC-SA-2017-001)</h2>
        <p>2nd February 2017</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 3.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/CVSS:3.0/AV:N/AC:H/PR:N/UI:N/S:U/C:L/I:N/A:N">CVSS:3.0/AV:N/AC:H/PR:N/UI:N/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/203.html">Information Exposure Through Discrepancy (CWE-203)</a></p>
        <h3>Description</h3>
        <p><p>This issue occurs at sending a password reset E-Mail, where a difference in error messages could allow an attacker to determine if the username is valid or not</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.3</strong> (CVE-2017-5865)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/d2f47acb38675d2798fe9e9b6294981f24613d40">core/d2f47acb38675d2798fe9e9b6294981f24613d40</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.7</strong> (CVE-2017-5865)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/108c8131abf3c9e4728908475c2afc4ec5f0651e">core/108c8131abf3c9e4728908475c2afc4ec5f0651e</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.9</strong> (CVE-2017-5865)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/f36952f4d1a2dbeac43fd9c2760c7a23035537c2">core/f36952f4d1a2dbeac43fd9c2760c7a23035537c2</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.1.11</strong> (CVE-2017-5865)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/cc616a79398a2be5beb64bcf52511f75833629ca">core/cc616a79398a2be5beb64bcf52511f75833629ca</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>Hide sensitive information in error messages</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://rhinosecuritylabs.com/" target="_blank" rel="noreferrer">Thorsten - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
    </div>
</div>
