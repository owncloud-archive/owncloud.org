<?php 

get_template_part('templates/parts/title');

$providers = json_decode(file_get_contents(dirname(__FILE__).'/assets/providers.json'))->providers;

$supportedProviders = array();
$freeProviders = array();
$otherProviders = array();

// Sort supported providers from non and free providers
foreach($providers as $provider) {
	if($provider->supported) {
		$supportedProviders[] = $provider;
	} else {
		$otherProviders[] = $provider;
	}
	if($provider->freeplans) {
		$freeProviders[] = $provider;
	}
}

?>


<div class="row col-xs-12">
	<h2>Supported Providers</h2>
</div>
<?php displayProviders($supportedProviders); ?>
<div class="row col-xs-12">
	<h2>Free Plans</h2>
</div>
<?php displayProviders($freeProviders); ?>
<div class="row col-xs-12">
	<h2>Other Providers</h2>
</div>
<?php displayProviders($otherProviders); ?>
<?php

function displayProviders($providers) {
	$numProviders = count($providers);
		echo '<div class="row">';
		for($provider=0; $provider<$numProviders; $provider++) {
			echo '<div class="col-xs-12 col-sm-6 col-md-4 ">';
			echo '<a href="' . $providers[$provider]->url . '" title="' . $providers[$provider]->title . '"><div class="thumbnail">';
			echo '<div class="bannerhead">';
			foreach($providers[$provider]->flags as $flag) {
				echo '<img class="flag" src="' . get_template_directory_uri() . '/assets/img/flags/' . $flag . '.gif"/>';
			}
			if($providers[$provider]->freeplans) {
				echo '<span class="text-primary freeplans">Free plans!</span>';
			}
			echo '</div>';
			echo '<img class="banner" src="' . get_template_directory_uri() . '/assets/img/providers/' . $providers[$provider]->imagename . '"/>';

			echo '</a><div class="bannerfoot">';
			if(!empty($providers[$provider]->supports)) {
				echo '<span>Ideal for: </span>';
				echo '<ul class="list-unstyled list-inline">';
			foreach($providers[$provider]->supports as $supporting) {
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