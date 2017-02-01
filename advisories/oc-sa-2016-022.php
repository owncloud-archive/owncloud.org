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
        <h2>Bypass received read-only share permissions using read-write reshare (oC-SA-2016-022)</h2>
        <p>20th December 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 6.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:R/S:C/C:L/I:H/A:N">AV:N/AC:H/PR:L/UI:R/S:C/C:L/I:H/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
        <h3>Description</h3>
        <p><p>User can upload and modify the link share contents even though the original sharer has only read-only access.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.2.*</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/1309dfdcc88ee92bb4deb4d1e87a7120956e24c6">core/1309dfdcc88ee92bb4deb4d1e87a7120956e24c6</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.1.*</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/c7c1b61e10514fe4d8efbaf1156501dd795e7ac1">core/c7c1b61e10514fe4d8efbaf1156501dd795e7ac1</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.*</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/65af3785ab5e1d780598874b3553c93767447f1f">core/65af3785ab5e1d780598874b3553c93767447f1f</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>Make share permission check work correctly from share manager.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Sergio Bertolin - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
