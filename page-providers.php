<?php 

get_template_part('templates/parts/title');

$providers = json_decode(file_get_contents(dirname(__FILE__).'/assets/providers.json'))->providers;

for($i=0; $i<count($providers); $i++) {
	//echo $providers[$i]->title.'</br>';
	echo '<img src="' . get_theme_root_uri() . '/owncloudorgnew/assets/img/providers/' . $providers[$i]->imagename . '"/></br>';
}