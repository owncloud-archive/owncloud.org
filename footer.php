    
    <footer>
        <div class="container">
            <div class="row">
                <nav class="col-md-4">
                    <h3>About ownCloud</h3>
                    <ul>
                    <?php
                    foreach(wp_get_nav_menu_items('about ownCloud') as $item) {
                        if ($item->target !== '')
                            $target = ' target="' . $item->target . '"';
                        else
                            $target = '';
                        echo '<li><a href="' . $item->url . '"' . $target . ' title="' . $item->title . '">' . $item->title . '</a></li>';
                    }
                    ?>
                    </ul>
                </nav>

                <nav class="col-md-4">
                    <h3>Resources</h3>
                    <ul>
                    <?php
                    foreach(wp_get_nav_menu_items('Resources') as $item) {
                        if ($item->target !== '')
                            $target = ' target="' . $item->target . '"';
                        else
                            $target = '';
                        echo '<li><a href="' . $item->url . '"' . $target . ' title="' . $item->title . '">' . $item->title . '</a></li>';
                    }
                    ?>
                    </ul>
                </nav>

                <nav class="col-md-4">
                    <h3>Interact</h3>
                    <ul>
                    <?php
                    foreach(wp_get_nav_menu_items('Interact') as $item) {
                        if ($item->target !== '')
                            $target = ' target="' . $item->target . '"';
                        else
                            $target = '';
                        echo '<li><a href="' . $item->url . '"' . $target . ' title="' . $item->title . '">' . $item->title . '</a></li>';
                    }
                    ?>
                    </ul>
                </nav>
            </div>

            <div class="text-center footer-subline">
                © <?php echo date('Y'); ?> ownCloud
            </div>
        </div>
    </footer>

    <?php wp_footer(); 

    if (!is_user_logged_in()) :?>

        <!-- Piwik -->
        <script type="text/javascript">
          var _paq = _paq || [];
          /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u="//piwik.owncloud.com/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '2']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/'; s.parentNode.insertBefore(g,s);
          })();
        </script>
        <!-- End Piwik Code -->
    <?php
    endif;
    ?>
    </body>
</html>