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
        <h2>SMB User Authentication Bypass (oC-SA-2016-017)</h2>
        <p>10th November 2016</p>
        <p>Risk level: <strong>High</strong></p>
        <p>CVSS v3 Base Score: 7.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:N/UI:N/S:U/C:H/I:H/A:N">AV:N/AC:H/PR:N/UI:N/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/303.html">Incorrect Implementation of Authentication Algorithms (CWE-303)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/148151">148151</a></p>
        <h3>Description</h3>
        <p><p>ownCloud includes an optional and not by default enabled SMB authentication component that allows to authenticate users against an SMB server. This backend is implemented in a way that it tries to connect to a SMB server and if that succeeded consider the user logged-in. The backend did not properly take into account SMB servers that any kind of anonymous auth configured. This is the default on SMB servers nowadays and allows an unauthenticated attacker to gain access to an account without valid credentials.</p>
<p><b>Note:</b> The SMB backend is disabled by default and requires manual configuration in the ownCloud config file. If you have not configured the SMB backend then you're not affected by this vulnerability.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.2</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/apps/commit/5d47e7b52646cf79edadd78ce10c754290cbb732">apps/5d47e7b52646cf79edadd78ce10c754290cbb732</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.6</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/apps/commit/16cbccfc946c8711721fa684d78135ca1fb64791">apps/16cbccfc946c8711721fa684d78135ca1fb64791</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.9</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/apps/commit/a0e07b7ddd5a5fd850a6e07f8457d05b76a300b3">apps/a0e07b7ddd5a5fd850a6e07f8457d05b76a300b3</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The SMB backend is now performing an additional authentication attempt with invalid credentials. If that succeeds as well it assumes that anonymous authentications are enabled and denies the login attempt.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://rhinosecuritylabs.com/" target="_blank" rel="noreferrer">Dwight Hohnstein - Rhino Security Labs - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/><small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>. Original source: <a href="https://nextcloud.com/security/advisory/?id=NC-SA-2016-006">nextcloud.com</a></small>
    </div>
</div>
