<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a style="margin-left: 0.5em;" href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>Credentials potentially leaked to other configured ownCloud instance (oC-SA-2015-013)</h2>
        <p>3rd August 2015</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v2 Base Score: 2.6 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:N/AC:H/Au:N/C:P/I:N/A:N)">AV:N/AC:H/Au:N/C:P/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/201.html">Information Exposure Through Sent Data (CWE-201)</a></p>
        <h3>Description</h3>
        <p><p>A bug in the ownCloud iOS application below version 3.4.4 may leak credentials as well as cookies used for authentication purposes to other configured ownCloud instances.</p><p>Specifically, the ownCloud iOS application allows users to connect to multiple ownCloud instances offering an easy way to switch between different accounts on different instances. An user may for example configure their hosted ownCloud by a third-party provider as well as their company ownCloud instance.</p><p>In some cases when switching the accounts in the iOS applications the application is not properly handling the state switch and will continue to send the previous authentication headers to the other instance. Thus a malicious administrator on another configured ownCloud instance may gain access to the user' credentials on the other instance.</p></p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Mobile &lt; <strong>iOS 3.4.4</strong> (CVE assignment pending)</li>
        </ul>
        <h3>Action Taken</h3>
        <p><p>The iOS application is now properly handling credentials as well as cookies and will send these only to the correct domains.</p></p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - ownCloud Inc. (lukas@owncloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>