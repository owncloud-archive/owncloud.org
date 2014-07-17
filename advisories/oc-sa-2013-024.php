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
		<h2>Privilege escalation in the calendar application (oc-sa-2013-024)</h2>
		<p>14th May 2013</p>
		<p>Risk level: <strong>Medium</strong></p>
		<h3>Description</h3>
		<p><p>Due to not properly checking the ownership of an calendar, an authenticated attacker is able to download calendars of other users via the “calendar_id” GET parameter to /apps/calendar/ajax/events.php</p><p>Note: Successful exploitation of this privilege escalation requires the “calendar” app to be enabled (enabled by default).</p></p>
		<h3>Affected Software</h3>
		<ul>
			<li>ownCloud Server < <strong>5.0.6</strong> (CVE-2013-2043)</li><li>ownCloud Server < <strong>4.5.11</strong> (CVE-2013-2043)</li>
		</ul>
		<h3>Action Taken</h3>
		<p></p>
		<h3>Acknowledgements</h3>
		<p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
		<ul>
			<li>Mateusz Goik - AliantSoft () - Vulnerability discovery and disclosure.</li>
		</ul>
		</br>
	</div>
</div>