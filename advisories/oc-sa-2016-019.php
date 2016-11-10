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
        <h2>Content-Spoofing in "files" app (oC-SA-2016-019)</h2>
        <p>10th November 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/451.html">User Interface (UI) Misrepresentation of Critical Information (CWE-451)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/154827">154827</a></p>
        <h3>Description</h3>
        <p><p>The location bar in the files app was not verifying the passed parameters. An attacker could craft an invalid link to a fake directory structure and use this to display an attacker-controlled error message to the user.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.2</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/768221fcf3c526c65d85f62b0efa2da5ea00bf2d">core/768221fcf3c526c65d85f62b0efa2da5ea00bf2d</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.6</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/e7acbce27fa0ef1c6fe216ca67c72d86484919a4">core/e7acbce27fa0ef1c6fe216ca67c72d86484919a4</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The passed parameter is now verified.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://hackerone.com/lmx" target="_blank" rel="noreferrer">lmx - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/><small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>. Original source: <a href="https://nextcloud.com/security/advisory/?id=NC-SA-2016-010">nextcloud.com</a></small>
    </div>
</div>
