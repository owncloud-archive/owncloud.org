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
        <h2>Content-Spoofing in "dav" app (oC-SA-2016-021)</h2>
        <p>10th November 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:N/UI:R/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/451.html">User Interface (UI) Misrepresentation of Critical Information (CWE-451)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/149798">149798</a></p>
        <h3>Description</h3>
        <p><p>The exception message displayed on the DAV endpoints contained partially user-controllable input leading to a potential misrepresentation of information.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.2</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/96b8afe48570bc70088ccd8f897e9d71997d336e">core/96b8afe48570bc70088ccd8f897e9d71997d336e</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.6</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/bcc6c39ad8c22a00323a114e9c1a0a834983fb35">core/bcc6c39ad8c22a00323a114e9c1a0a834983fb35</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The user-controlled content has been removed from the exception message.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://twitter.com/YoKoAcc" target="_blank" rel="noreferrer">YoKo Kho - MII CAS - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/><small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>. Original source: <a href="https://nextcloud.com/security/advisory/?id=NC-SA-2016-011">nextcloud.com</a></small>
    </div>
</div>
