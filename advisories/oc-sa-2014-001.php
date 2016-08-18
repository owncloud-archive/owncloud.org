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
        <h2>Session Fixation (oC-SA-2014-001)</h2>
        <p>3rd July 2014</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to authenticating a user without invalidating any existing session identifier an attacker has the opportunity to steal authenticated sessions. A successful exploit requires that PHP is configured to accept session parameters via <code>GET</code>.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>6.0.2</strong> (CVE-2014-2047)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The session is now regenerated after a successful login.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - ownCloud Inc. (lukas@owncloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
