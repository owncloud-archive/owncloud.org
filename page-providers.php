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

<p>You can <a href="/install/">run your own ownCloud server</a> but also opt for a hosted solution. The ability to pick a provider and jurisdiction gives you the option to balance cost, convenience, privacy and security. Select below one of the most popular ownCloud providers or <a href="#all" rel="tooltip" title="All providers" id="alltogether1" data-toggle="popover">see them all</a>.</p>

<div class="row col-xs-12">
	<h2>Most popular Providers</h2>
</div>
<p>Here go the most popular providers.</p>
<p><a class="btn btn-default btn-lg" role="button" href="#all" rel="tooltip" title="All providers" id="alltogether2" data-toggle="popover">See all</a> </p>

<hr></hr>
<div class="alert alert-info">If you offer ownCloud Server account hosting, you can be <a href="/providers/apply">listed on this page</a>. To find out more about becoming an enterprise provider with a support contract from <a target="_blank" href="https://owncloud.com">ownCloud Inc</a> please see <a target="_blank" href="https://owncloud.com/products/service-provider">their website</a>.</div>



<div class="installers">
  <div id="all" class="container row PopupProviders">
    <div class="instructions">
      <a href="#" class="close">&times;</a>
      <h2>All providers</h2>
      <div class="row col-xs-12 ">
	  <h3>Supported Providers</h3>
      </div>
      <?php displayProviders($supportedProviders); ?>
      <div class="row col-xs-12">
	  <h3>Free Plans</h3>
      </div>
      <?php displayProviders($freeProviders, true); ?>
      <div class="row col-xs-12">
	  <h3>Other Providers</h3>
      </div>
      <?php displayProviders($otherProviders); ?>
    </div>
  </div>
  <a href="#" class="mask"></a>
</div>
<!-- </div> -->



<?php

function displayProviders($providers, $free=false) {
	$numProviders = count($providers);
		echo '<div class="row">';
		for($provider=0; $provider<$numProviders; $provider++) {
			echo '<div class="col-xs-12 col-sm-6 col-md-4 ">';
			if($free && isset($providers[$provider]->freeurl)) {
				$url = $providers[$provider]->freeurl;
			} else {
				$url = $providers[$provider]->url;
			}
			echo '<a href="' . $url . '" target="_blank" rel="noreferrer" title="' . $providers[$provider]->title . '"><div class="thumbnail">';
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
