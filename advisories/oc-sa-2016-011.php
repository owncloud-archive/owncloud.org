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
        <h2>Stored XSS in gallery application (oC-SA-2016-011)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 6.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:H/A:N">AV:N/AC:H/PR:L/UI:R/S:U/C:H/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/145355">145355</a></p>
        <h3>Description</h3>
        <p>Due to a recent migration of the Gallery app to the new sharing endpoint a parameter changed from an integer to a string value. This value wasn't sanitized before and was thus now vulnerable to a Cross-Site-Scripting attack.</p>
<p>To exploit this vulnerability an authenticated attacker has to share a folder with someone else, get them to open the shared folder in the Gallery app and open the sharing window there.</p>
<p>Since ownCloud employs a strict Content-Security-Policy this vulnerability is only exploitable in browsers not supporting Content-Security-Policy. You can check at <a href="http://caniuse.com/#feat=contentsecuritypolicy">caniuse.com</a> whether your browser supports CSP.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.0.4</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/gallery/commit/6933d27afe518967bd1b60e6a7eacd88288929fc">gallery/6933d27afe518967bd1b60e6a7eacd88288929fc</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The user input is now properly sanitised before being provided back to the user.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://www.detectify.com" target="_blank" rel="noreferrer">Frans Rosen - Detectify - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/><small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>. Original source: <a href="https://nextcloud.com/security/advisory/?id=nc-sa-2016-001">nextcloud.com</a></small>
    </div>
</div>
