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
        <h2>Insecure Direct Object References in Gallery (oC-SA-2016-010)</h2>
        <p>13th July 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 5 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:L/Au:N/C:P/I:N/A:N)">AV:N/AC:L/Au:N/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/932.html">Insecure Direct Object References (CWE-932)</a></p>
        <h3>Description</h3>
        <p><p>ownCloud was vulnerable to a insecure direct object reference. Any unauthenticated user would be able to download any image from the server if the gallery app is enabled.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>8.2.6</strong> (CVE-2016-5876)</li>
<ul>
<li><a href="https://github.com/owncloud/gallery/commit/2e8f1f2509d15876ab09396dfe6c463aacdf5c5b">gallery/2e8f1f2509d15876ab09396dfe6c463aacdf5c5b</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.3</strong> (CVE-2016-5876)</li>
<ul>
<li><a href="https://github.com/owncloud/gallery/commit/e3021ab6cc4e37eccb27eab6374722632c85eed7">gallery/e3021ab6cc4e37eccb27eab6374722632c85eed7</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The share token is verified.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
