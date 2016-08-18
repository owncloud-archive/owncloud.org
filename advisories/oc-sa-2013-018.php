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
        <h2>Privilege escalation in the contacts application (oC-SA-2013-018)</h2>
        <p>19th April 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not properly checking the ownership of a single contact, an authenticated attacker is able to download contacts of other users in all ownCloud versions prior to 5.0.5 including the 4.5.x branch.</p>
<p>Note: Successful exploitation of this privilege escalation requires the "contacts" app to be enabled (enabled by default).</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>5.0.5</strong> (CVE-2013-1963)</li>
<li>ownCloud Server &lt; <strong>4.5.10</strong> (CVE-2013-1963)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to ownCloud Server 5.0.5 or 4.5.10.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - ownCloud Inc. (lukas@owncloud.org) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
