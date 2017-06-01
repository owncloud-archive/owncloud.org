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
        <h2>XSS in search dialogue (oC-SA-2017-007)</h2>
        <p>31st May 2017</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 2.6 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/CVSS:AV:N/AC:H/PR:L/UI:R/S:U/C:L/I:N/A:N">CVSS:AV:N/AC:H/PR:L/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting')a (CWE-79)</a></p>
        <h3>Description</h3>
        <p><p>Inadequate escaping lead to XSS vulnerability in the search module. To be exploitable an user has to write or paste malicious content into the search dialogue.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>10.0.2</strong> (CVE-2017-9338)</li>
<li>ownCloud Server &lt; <strong>9.1.6</strong> (CVE-2017-9338)</li>
<li>ownCloud Server &lt; <strong>9.0.10</strong> (CVE-2017-9338)</li>
<li>ownCloud Server &lt; <strong>8.2.12</strong> (CVE-2017-9338)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>Escape output</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Ahsan Khan - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
