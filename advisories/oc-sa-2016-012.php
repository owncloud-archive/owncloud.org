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
        <h2>Log pollution can potentially lead to local HTML injection (oC-SA-2016-012)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/209.html">Information Exposure Through an Error Message (CWE-209)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/146278">146278</a></p>
        <h3>Description</h3>
        <p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>8.1.9</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/044ee072a647636b1a17c89265c7233b35371335">core/044ee072a647636b1a17c89265c7233b35371335</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.7</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/b7fa2c5dc945b40bc6ed0a9a0e47c282ebf043e1">core/b7fa2c5dc945b40bc6ed0a9a0e47c282ebf043e1</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.4</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/efa35d621dc7ff975468e636a5d1c153511296dc">core/efa35d621dc7ff975468e636a5d1c153511296dc</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The file is now delivered with a content-type of "application/octet-stream".</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Alejo Popovici - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
