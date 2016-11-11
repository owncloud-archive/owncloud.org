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
        <h2>Stored XSS in CardDAV image export (oC-SA-2016-018)</h2>
        <p>10th November 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 5.4 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:N">AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/79.html">Improper Neutralization of Input During Web Page Generation ('Cross-site Scripting') (CWE-79)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/163338">163338</a></p>
        <h3>Description</h3>
        <p><p>The CardDAV image export functionality as implemented in ownCloud allows the download of images stored within a vCard. Due to not performing any kind of verification on the image content this is prone to a stored Cross-Site Scripting attack.</p>
<p><b>Note:</b>ownCloud employs a very strict Content Security Policy on the DAV endpoints. This is thus only exploitable on browsers that don't support Content Security Policy.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.2</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/6bf3be3877d9d9fda9c66926fe273fe79cbaf58e">core/6bf3be3877d9d9fda9c66926fe273fe79cbaf58e</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.6</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/b5a5be24c418033cb2ef965a4f3f06b7b4213845">core/b5a5be24c418033cb2ef965a4f3f06b7b4213845</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The mimetype of the exported image is now compared with a whitelist as well as download disposition headers have been set on the response.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://nextcloud.com/" target="_blank" rel="noreferrer">Lukas Reschke - Nextcloud GmbH - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/><small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>. Original source: <a href="https://nextcloud.com/security/advisory/?id=NC-SA-2016-008">nextcloud.com</a></small>
    </div>
</div>
