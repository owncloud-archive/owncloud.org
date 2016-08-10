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
        <h2>Incorrect setup of external storage (oC-SA-2016-009)</h2>
        <p>13th July 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 7.5 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:L/UI:N/S:U/C:H/I:H/A:H">AV:N/AC:H/PR:L/UI:N/S:U/C:H/I:H/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/538.html">File and Directory Information Exposure (CWE-538)</a></p>
        <h3>Description</h3>
        <p><p>The external storage functionality as implemented in ownCloud 9.0.x before 9.0.2 is improperly setting up external storages when multiple groups have been granted access to an external storage and a user is member of both groups.</p>
<p>The storage class is setup without any setup information, leading to multiple issues, including:</p>
<p>Unavailability of the external storage</p>
<p>Access to files that are not supposed to be shared (only if the 'Local' storage type is used)</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.0.2</strong> (CVE-2016-xxxx)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/d436326e19b8df1594f781e74e8c50151f003ea5">core/d436326e19b8df1594f781e74e8c50151f003ea5</a></li>
<li><a href="https://github.com/owncloud/core/commit/b375086c473f7117d6ee8b61cf0c6e24350b113a">core/b375086c473f7117d6ee8b61cf0c6e24350b113a</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>The storage code has been reviewed and been patched to properly setup the storage. Furthermore several hardenings have been added to ownCloud which will highly reduce the change of a successful exploitation of similar vulnerabilities in the future.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
