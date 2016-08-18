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
        <h2>Open Redirector involving user interaction (oC-SA-2016-007)</h2>
        <p>13th July 2016</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 4.3 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N">AV:N/AC:L/PR:N/UI:R/S:U/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/601.html">URL Redirection to Untrusted Site ('Open Redirect') (CWE-601)</a></p>
        <h3>Description</h3>
        <p>The 'Import root certificate' ability that users are able to use once files_external is enabled allows users to import their own root certificates for connections. (e.g. server-to-server shares to servers using a self-signed certificate or external storages)<br>The functionality was using the PHP OpenSSL parsing functions for parsing these certificate files. Namely, `openssl_pkey_get_public` and `openssl_x509_parse`. It turned out that these internally call `php_openssl_x509_from_zval` which allow passing in a file:///<br>Therefore an attacker could pass a file beginning with `file://` and ownCloud would try to parse the corresponding file. This leads to a disclosure of arbitrary certificate files if the adversary can guess the correct path.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>7.0.14</strong> (CVE-2016-xxxx)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/9d5005c795c99ba1ef516035542e15157931292a">core/9d5005c795c99ba1ef516035542e15157931292a</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.0.12</strong> (CVE-2016-xxxx)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/9cdb8817258e62917c78765efc127247eb181b87">core/9cdb8817258e62917c78765efc127247eb181b87</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.1.7</strong> (CVE-2016-xxxx)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/80db6c60a3916175feee775970988c8cc8c0f49f">core/80db6c60a3916175feee775970988c8cc8c0f49f</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.4</strong> (CVE-2016-xxxx)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/d3f585c329c0291b208dc54d75b4aecb7118ff8d">core/d3f585c329c0291b208dc54d75b4aecb7118ff8d</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.2</strong> (CVE-2016-xxxx)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/830a080f0e4b67d6265ba09ab578060945f28916">core/830a080f0e4b67d6265ba09ab578060945f28916</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>ownCloud is now preventing files that being with 'file://' from being parsed.</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
