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
        <h2>Code execution in /lib/migrate.php (oC-SA-2012-004)</h2>
        <p>20th December 2012</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Incomplete blacklist vulnerability in lib/migrate.php in ownCloud before 4.5.2 allows authenticated remote attackers to execute arbitrary code by uploading a crafted mount.php file in an imported ZIP file.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>4.0.10</strong> (CVE-2013-5665)</li>
<li>ownCloud Server &lt; <strong>4.5.5</strong> (CVE-2013-5665)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to ownCloud Server 4.5.5 or 4.0.10.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Felix Richter - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
