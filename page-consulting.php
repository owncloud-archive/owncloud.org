<?php 

get_template_part('templates/parts/title');

$consultants = json_decode(file_get_contents(dirname(__FILE__).'/assets/consultants.json'))->consultants;

$supportedConsultant = array();
$HostingConsultants = array();
$otherConsultants = array();

// Sort supported consultants from non and hosting consultants
foreach($consultants as $consultant) {
	if($consultant->supported) {
		$supportedConsultants[] = $consultant;
	} else {
		$otherConsultants[] = $consultant;
	}
	if($consultant->hosting) {
		$HostingConsultants[] = $consultant;
	}
}

?>
<p>ownCloud consultants help organizations with deployment, maintenance and integration of ownCloud in their workflow. Find ownCloud consulting that fits your needs.</p>

<div class="row col-xs-12">
	<h2>Certified consultants</h2>
</div>
<?php displayConsultants($supportedConsultants); ?>
<div class="row col-xs-12">
	<h2>With hosted offerings</h2>
</div>
<?php displayConsultants($HostingConsultants, true); ?>
<div class="row col-xs-12">
	<h2>Other consultants</h2>
</div>
<?php displayConsultants($otherConsultants); ?>
<?php

function displayConsultants($consultants, $free=false) {
	$numConsultants = count($consultants);
		echo '<div class="row">';
		for($consultant=0; $consultant<$numConsultants; $consultant++) {
			echo '<div class="col-xs-12 col-sm-6 col-md-4 ">';
			if($free && isset($consultants[$consultant]->freeurl)) {
				$url = $consultants[$consultant]->freeurl;
			} else {
				$url = $consultants[$consultant]->url;
			}
			echo '<a href="' . $url . '" target="_blank" rel="noreferrer" title="' . $consultants[$consultant]->title . '"><div class="thumbnail">';
			echo '<div class="bannerhead">';
			foreach($consultants[$consultant]->flags as $flag) {
				echo '<img class="flag" src="' . get_template_directory_uri() . '/assets/img/flags/' . $flag . '.gif"/>';
			}
			if($consultants[$consultant]->hosting) {
				echo '<span class="text-primary freeplans">Hosted options available</span>';
			}
			echo '</div>';
			echo '<img class="banner" src="' . get_template_directory_uri() . '/assets/img/consultants/' . $consultants[$consultant]->imagename . '"/>';

			echo '</a><div class="bannerfoot">';
			if(!empty($consultants[$consultant]->supports)) {
				echo '<span>Ideal for organizations which are: </span>';
				echo '<ul class="list-unstyled list-inline">';
				foreach($consultants[$consultant]->supports as $supporting) {
					echo '<li class="text-primary">' . $supporting . '</li>';
				}
				echo '</ul>';
			}
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		echo '</div>';

}

?>
<div class="alert alert-info">If you offer ownCloud Consulting, you can be <a href="/consultants/apply">listed on this page</a>. To find out more about becoming an enterprise consultant with a support contract from <a target="_blank" href="https://owncloud.com">ownCloud Inc</a> please see <a target="_blank" href="https://owncloud.com/products/XXXXXXXXXXXXXX">their website</a>.</div>

