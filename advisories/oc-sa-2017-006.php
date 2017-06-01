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
        <h2>Normal user can somehow make admin to delete shared folders (oC-SA-2017-006)</h2>
        <p>31st May 2017</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N">CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/269.html">Improper Privilege Management (CWE-269)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/166581">166581</a></p>
        <h3>Description</h3>
        <p><p>A Attacker is logged in as a normal user and can somehow make admin to delete shared folders</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>10.0.2</strong> (CVE-2017-9340)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>Adjust privileges</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Elamaran Venkatraman - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
