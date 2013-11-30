<?php
/*
Template Name: Blog Planet Page
*/
?>

<?php

 
require('/srv/www/owncloud.org/contribook/main/contribook/lib_contribook.php');

?>

<div class="page-header"><h1>ownCloud Planet</h1>
<a href="/blogfeed" class="btn headersearch">RSS</a>
</div>


<div class="row">
	<div class="span3">
		<div class="sidebar">
			<?php 
			//<div class="well">
	//		wp_nav_menu(array('theme_location' => 'dev-nav'));
			//</div>
			?>
		</div>
	</div>
	
	<div class="span9">
		<div class="page-content">
<?php

  $url=explode('/',$_SERVER['REQUEST_URI']);
  if(isset($url[2])) $page= (int) $url[2]; else $page=1;
  if($page<1) $page=1;

  echo('<div id="container" class="transitions-enabled infinite-scroll clearfix">');
  CONTRIBOOK_BLOG::show(($page-1)*5,5);
  echo('</div>');

  echo('
  <nav id="page-nav">
    <a href="/news/2/"></a>
  </nav>
  ');


?>


  <script>
  $(function(){

  var $container = $('#container');

  $container.imagesLoaded(function(){
    $container.masonry({
    itemSelector: '.box',
    columnWidth: 100
    });
  });

  $container.infinitescroll({
    navSelector  : '#page-nav',    // selector for the paged navigation
    nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
    itemSelector : '.box',     // selector for all items you'll retrieve
    loading: {
      finishedMsg: 'No more pages to load.',
      img: 'http://i.imgur.com/6RMhx.gif'
    }
    },
    // trigger Masonry as a callback
    function( newElements ) {
    // hide new items while they are loading
    var $newElems = $( newElements ).css({ opacity: 0 });
    // ensure that images load before adding to masonry layout
    $newElems.imagesLoaded(function(){
      // show elems now they're ready
      $newElems.animate({ opacity: 1 });
      $container.masonry( 'appended', $newElems, true );
    });
    }
  );

  });
</script>




		</div>

	</div>
</div>

