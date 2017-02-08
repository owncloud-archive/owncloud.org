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
        <h2>Information disclosure in email field dialog at sharing (oC-SA-2017-002)</h2>
        <p>2nd February 2017</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:L/I:N/A:N">CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/200.html">Information Exposure (CWE-200)</a></p>
        <h3>Description</h3>
        <p><p>An attacker can get sensitive information in the E-Mail share dialog with the autocompletion by default</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.3</strong> ( CVE-2017-5866)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/c27b2b935f940a2c8e2fc1a5d8934407ae85dd57">core/c27b2b935f940a2c8e2fc1a5d8934407ae85dd57</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.7</strong> ( CVE-2017-5866)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/62b1865a301a1ce90f9a3c773f5eb00c33deb581">core/62b1865a301a1ce90f9a3c773f5eb00c33deb581</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.9</strong> ( CVE-2017-5866)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/1b3cef677940286693976aefc49ac5eb7b2e3180">core/1b3cef677940286693976aefc49ac5eb7b2e3180</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.1.11</strong> ( CVE-2017-5866)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/13bd433cd607b678d4765a6c241c24ba2f03c89d">core/13bd433cd607b678d4765a6c241c24ba2f03c89d</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>Add a new option for autocomplete E-Mail Share dialog</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://github.com/xshadow" target="_blank" rel="noreferrer">xshadow - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
    </div>
</div>
