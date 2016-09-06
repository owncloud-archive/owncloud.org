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
        <h2>Local Code Injection (oC-SA-2016-016)</h2>
        <p>17th August 2016</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v2 Base Score: 4.1 (<a href="https://nvd.nist.gov/cvss.cfm?calculator&version=2&vector=(AV:L/AC:M/Au:S/C:C/I:P/A:N/E:F/RL:OF/RC:C)">AV:L/AC:M/Au:S/C:C/I:P/A:N/E:F/RL:OF/RC:C</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/114.html">Process Control (CWE-114)</a></p>
        <h3>Description</h3>
        <p><p>The ownCloud Client was vunerable to a local code injection attack. A malicious local user could create a special path where the client would load libraries from during startup. As on Windows, everyone by default has the permission to write to the <code>C:</code> drive and create arbitrary directories and subdirectories, this attack is practically feasible in any non-hardened Windows environment. This could lead to injecting code into other users' ownCloud Client.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Desktop &lt; <strong>2.2.3</strong> (CVE-2016-7102)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>To protect our users ownCloud has issued the 2.2.3 client which no longer loads code from this location.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Florian Bogner - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
