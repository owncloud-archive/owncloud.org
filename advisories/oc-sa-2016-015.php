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
        <h2>Read-only share recipient can restore old versions of file (oC-SA-2016-015)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/146067">146067</a></p>
        <h3>Description</h3>
        <p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.0.4</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/c93eca49c32428ece03dd67042772d5fa62c8d6e">core/c93eca49c32428ece03dd67042772d5fa62c8d6e</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.7</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/3b056fa68ce502ceb0db9b446dab3b9e7b10dd13">core/3b056fa68ce502ceb0db9b446dab3b9e7b10dd13</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.1.9</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/23383080731d092e079986464a8c4c9ffcb79f4c">core/23383080731d092e079986464a8c4c9ffcb79f4c</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.0.14</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/d31720b6f1e8c8dfeb5e8805ab35ad7c8000b2f1">core/d31720b6f1e8c8dfeb5e8805ab35ad7c8000b2f1</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The permission check is now also performed on restore actions.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Rudra Pratap Singh  - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
