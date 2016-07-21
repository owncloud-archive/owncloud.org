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
        <h2>Content-Spoofing in files app (oC-SA-2016-013)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 0 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:N">AV:N/AC:L/PR:N/UI:N/S:U/C:N/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/451.html">User Interface (UI) Misrepresentation of Critical Information (CWE-451)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/146046">146046</a></p>
        <h3>Description</h3>
        <p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.0.4</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/c92c234059f8b1dc7d53122985ec0d398895a2cf">core/c92c234059f8b1dc7d53122985ec0d398895a2cf</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The passed parameter is now verified.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/meshahriyar" target="_blank" rel="noreferrer">Md. Ishrat Shahriyar - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
    </div>
</div>
