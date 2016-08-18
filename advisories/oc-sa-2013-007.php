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
        <h2>Privilege escalation in the calendar application (oC-SA-2013-007)</h2>
        <p>20th February 2013</p>
        <p>Risk level: <strong>Medium</strong></p>
        
        
        <h3>Description</h3>
        <p><p>Due to not properly checking the ownership of an calendar, an authenticated attacker is able to download calendars of other users via the "calid" GET parameter to export.php in /apps/calendar/</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>4.5.7</strong> (CVE-2013-0304)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to ownCloud Server 4.5.8.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Romain Severin - Intrinsec - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
