<?php

get_template_part('templates/parts/title');

$consultants = json_decode(file_get_contents(dirname(__FILE__).'/assets/consultants.json'))->consultants;

$supportedConsultant = array();
$otherConsultants = array();

// Sort supported consultants from unsupported consultants
foreach($consultants as $consultant) {
	if($consultant->supported) {
		$supportedConsultants[] = $consultant;
	}
	$otherConsultants[] = $consultant;
}


?>
<p>While most ownCloud users are able to install and use ownCloud without any help or with assistance of volunteers in our community support channels, some deployments, especially by corporate users, may have more complex requirements that require professional services. This page lists individuals and companies offering services with regards to deployment, maintenance and integration of ownCloud in your workflow.
</p>

<div class="alert alert-info">If you offer ownCloud Consulting, you can be <a href="/consultants/apply">listed on this page</a>. To find out more about becoming an enterprise consultant with a support contract from <a target="_blank" href="https://owncloud.com">ownCloud Inc</a> please see <a target="_blank" href="https://owncloud.com/partner/">the partner page on ownCloud.com</a>.</div>

<div class="row col-xs-12">
	<h2>Partners</h2>
	<p>For any projects where ownCloud is mission critical, ownCloud partners provide subscription based offerings from ownCloud and consulting as well as development services backed up by ownCloud, Inc. full-time support personal, engineers and expert knowledge.</p>
</div>
<?php displayConsultants($supportedConsultants); ?>

<div class="row col-xs-12">
	<h2>Independent consultants</h2>
	<p>The following individuals and firms offer ownCloud related services that may be of interest. The information provided here was provided by the entities named, and is not verified or endorsed by the ownCloud community or ownCloud, Inc. We offer this listing as a service to the ecosystem.</p>
</div>
<!-- <?php displayConsultants($supportedConsultants); ?>-->
<?php displayConsultants($otherConsultants); ?>
<!-- TODO: add code to sort consultants on property "github-score":"X" where X can be 0 and up. -->

<?php

function displayConsultants($consultants) {

	$numConsultants = count($consultants);
		echo '<div class="row">';
		for($consultant=0; $consultant<$numConsultants; $consultant++) {
			echo '<div class="col-xs-12 col-sm-6 col-md-4 ">';
			echo '<div class="consulting thumbnail"><div class="bannerhead">';
			echo '<a href="' . $url . '" target="_blank" rel="noreferrer" title="' . $consultants[$consultant]->title . '">';
			echo '<img class="logo" src="' . get_template_directory_uri() . '/assets/img/consultants/' . $consultants[$consultant]->imagename . '"/>';

			echo '</a><br \>';
			if($free && isset($consultants[$consultant]->freeurl)) {
				$url = $consultants[$consultant]->freeurl;
			} else {
				$url = $consultants[$consultant]->url;
			}
			echo  $consultants[$consultant]->title;
			foreach($consultants[$consultant]->flags as $flag) {
				echo '<img class="flag" src="' . get_template_directory_uri() . '/assets/img/flags/' . $flag . '.gif"/>';
			}
			
			echo '<br \></div>';
			echo '<div class="bannerfoot">';
			if(!empty($consultants[$consultant]->supports)) {
				echo '<span>Ideal for organizations: </span>';
				echo '<ul class="list-unstyled list-inline">';
				foreach($consultants[$consultant]->supports as $supporting) {
					echo '<li class="text-primary">' . $supporting . '</li>';
				}
				echo '</ul>';
			}
			if(!empty($consultants[$consultant]->specializes)) {
				echo '<ul class="list-unstyled list-inline">';
				foreach($consultants[$consultant]->specializes as $specialization) {
					echo '<li class="text-primary">' . $specialization . '</li>';
				}
				echo '</ul>';
			}
			if($consultants[$consultant]->hosting) {
				echo '<span class="hosting">Provides hosting</br></span>';
			} else {
			echo '<br/>';
			}
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		echo '</div>';

}

?>


