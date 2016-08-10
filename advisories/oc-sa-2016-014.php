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
        <h2>Edit permission check not enforced on WebDAV COPY action (oC-SA-2016-014)</h2>
        <p>19th July 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N">AV:N/AC:H/PR:L/UI:N/S:U/C:N/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/275.html">Permission Issues (CWE-275)</a></p>
<p>HackerOne report: <a href="https://hackerone.com/reports/145950">145950</a></p>
        <h3>Description</h3>
        <p><p>The WebDAV endpoint was not properly checking the permission on a WebDAV "COPY" action. This allowed an authenticated attacker with access to a read-only share to put new files in there. It was not possible to modify existing files.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.0.4</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/121a3304a0c37ccda0e1b63ddc528cba9121a36e">core/121a3304a0c37ccda0e1b63ddc528cba9121a36e</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.7</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/c0a4b7b3f38ad2eaf506484b3b92ec678cb021c9">core/c0a4b7b3f38ad2eaf506484b3b92ec678cb021c9</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.1.9</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/0622e635d97cb17c5e1363e370bb8268cc3d2547">core/0622e635d97cb17c5e1363e370bb8268cc3d2547</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.0.14</strong> (CVE-2016-????)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/acbbadb71ceee7f01da347f7dcd519beda78cc47">core/acbbadb71ceee7f01da347f7dcd519beda78cc47</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The permission check is now also performed on "COPY" actions</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="http://www.ksaurabh.net" target="_blank" rel="noreferrer">Kumar Saurabh - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
    </div>
</div>
