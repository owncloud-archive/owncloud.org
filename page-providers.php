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


<div class="row">
	<h2>Supported Providers</h2>
</div>
<?php displayProviders($supportedProviders); ?>
<div class="row">
	<h2>Free Plans</h2>
</div>
<?php displayProviders($freeProviders); ?>
<div class="row">
	<h2>Other Providers</h2>
</div>
<?php displayProviders($otherProviders); ?>
<?php

function displayProviders($providers) {
	$numProviders = count($providers);
	$rows = ceil($numProviders/3);
	$provider = 0;

	for($i=0; $i<$rows; $i++) {
		echo '<div class="row 3-column-lg-md-sm">';
		for($j=0; $j<3; $j++) {
			// Check for remaining providers
			if(($numProviders - (($i*3)+$j)) > 0) {
				echo '<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">';
				echo '<div class="thumbnail">';
				echo '<img src="' . get_template_directory_uri() . '/assets/img/providers/' . $providers[$provider]->imagename . '"/>';
				echo '</div>';
				echo '</div>';
				$provider++;
			}
		}
		echo '</div>';
	}
}

?>