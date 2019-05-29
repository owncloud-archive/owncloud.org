<?php /* Template Name: Download */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>

<article class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <aside class="col-md-4 order-md-2">
            <nav class="table-of-contents" id="table-of-contents">
                <h4>Table of contents</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" href="#owncloud-server">ownCloud Server</a>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#owncloud-server-tar-ball">Tarball</a>
                        <a class="nav-link" href="#owncloud-server-docker">Docker</a>
                        <a class="nav-link" href="#owncloud-server-appliance">Appliance</a>
                        <a class="nav-link" href="#owncloud-server-linux-packages">Linux packages</a>
                    </nav>

                    <a class="nav-link" href="#owncloud-desktop-client">ownCloud desktop client</a>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#owncloud-desktop-client-macos">Mac OS</a>
                        <a class="nav-link" href="#owncloud-desktop-client-windows">Windows</a>
                        <a class="nav-link" href="#owncloud-desktop-client-linux">Linux</a>
                    </nav>

                    <a class="nav-link" href="#owncloud-mobile-apps">ownCloud mobile apps</a>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#owncloud-mobile-apps-ios">iOS</a>
                        <a class="nav-link" href="#owncloud-mobile-apps-android">Android</a>
                    </nav>

                    <a class="nav-link" href="#owncloud-marketplace">ownCloud marketplace</a>
                </nav>

                <!--
                    <li><a href="#owncloud-mobile-apps">ownCloud mobile Apps</a>
                        <ul>
                            <li><a href="#owncloud-mobile-apps-ios">iOS</a></li>
                            <li><a href="#owncloud-mobile-android">Android</a></li>
                        </ul>
                    </li>
                </ul> -->
            </nav>
        </aside>

        <div class="col-md-8 order-md-1">
            <section>
            <?php the_content(); ?>
            </section>

            <section id="owncloud-server">
                <h1>ownCloud Server</h1>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        $image = get_field('server_image');
                        ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />
                    </div>

                    <div class="col-md-8">
                        <?php the_field('server_description'); ?>
                    </div>
                </div>

                <?php
                if( have_rows('server_documentation') ): ?>
                    <h2>Documentation</h2>
                    <?php
                    while ( have_rows('server_documentation') ) : the_row(); ?>
                        <a target="_blank" rel="no-follow" class="documentation" href="<?php the_sub_field('server_docs_link'); ?>"><i class="fa fa-file-text-o"></i><?php the_sub_field('server_docs_title'); ?></a>
                    <?php
                    endwhile;
                endif;
                ?>

                <h2>Resources</h2>

                <h3 id="owncloud-server-tar-ball">Tarball</h3>
                <p><?php the_field('tarball_description'); ?></p>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">release channel</th>
                      <th scope="col">version</th>
                      <th scope="col">release date</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php if( have_rows('tarball_production_downloads') ): ?>
                      <?php while( have_rows('tarball_production_downloads') ): the_row(); ?>
                        <tr>
                          <td>Production</td>
                          <td><?php the_sub_field('tarball_production_version'); ?></td>
                          <td><?php the_sub_field('tarball_production_release_date'); ?></td>
                          <td>
                            <a href="<?php the_sub_field('tarball_production_resource_tar'); ?>" class="button-oc">Download Tar<i class="fa fa-download" aria-hidden="true"></i></a>
                            <div class="smallfont d-flex justify-content-around">
                              <a href="<?php the_sub_field('tarball_production_resource_tar'); ?>.md5" target="_blank">md5</a>
                              <a href="<?php the_sub_field('tarball_production_resource_tar'); ?>.sha256" target="_blank">sha256</a>
                              <a href="<?php the_sub_field('tarball_production_resource_tar'); ?>.asc" target="_blank">asc</a>
                            </div>
                          </td>
                          <td>
                            <a href="<?php the_sub_field('tarball_production_resource_zip'); ?>" class="button-oc">Download Zip<i class="fa fa-download" aria-hidden="true"></i></a>
                            <div class="smallfont d-flex justify-content-around">
                              <a href="<?php the_sub_field('tarball_production_resource_zip'); ?>.md5" target="_blank">md5</a>
                              <a href="<?php the_sub_field('tarball_production_resource_zip'); ?>.sha256" target="_blank">sha256</a>
                              <a href="<?php the_sub_field('tarball_production_resource_zip'); ?>.asc" target="_blank">asc</a>
                            </div>
                          </td>
                        </tr>
                      <?php
                      endwhile;
                    endif;
                    ?>


                    <?php if (get_field('tarball_fresh_is_available') == 1) : ?>
                    <tr>
                        <td>fresh</td>
                        <td><?php the_field('tarball_fresh_version'); ?></td>
                        <td><?php the_field('tarball_fresh_release_date'); ?></td>
                        <td><a href="<?php the_field('tarball_fresh_link'); ?>" class="button-oc">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (get_field('tarball_techpreview_is_available') == 1) : ?>
                    <tr>
                      <td>Testing</td>
                      <td><?php the_field('tarball_techpreview_version'); ?></td>
                      <td><?php the_field('tarball_techpreview_release_date'); ?></td>
                      <td><a href="<?php the_field('tarball_techpreview_link'); ?>" class="button-oc">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>

                <h3 id="owncloud-server-docker">Docker</h3>
                <p><?php the_field('docker_description'); ?></p>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">release channel</th>
                      <th scope="col">version</th>
                      <th scope="col">release date</th>
                      <th scope="col" colspan="2">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if( have_rows('docker_production_resources') ): ?>
                      <?php while( have_rows('docker_production_resources') ): the_row(); ?>
                        <tr>
                          <td>production</td>
                          <td><?php the_sub_field('docker_production_version'); ?></td>
                          <td><?php the_sub_field('docker_production_release_date'); ?></td>
                          <td><a href="<?php the_sub_field('docker_production_resource'); ?>" target="_blank" class="button-oc">Install instructions<i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                        </tr>
                      <?php
                      endwhile;
                    endif;
                    ?>
                  </tbody>
                </table>

                <h3 id="owncloud-server-appliance">Appliance</h3>
                <p><?php the_field('appliance_description'); ?></p>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">release channel</th>
                      <th scope="col">version</th>
                      <th scope="col">release date</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>production</td>
                      <td><?php the_field('appliance_production_version'); ?></td>
                      <td><?php the_field('appliance_production_release_date'); ?></td>
                      <td>
                        <a href="<?php the_field('appliance_production_esx'); ?>" class="button-oc stacked piwik_download">Download ESX image<i class="fa fa-download" aria-hidden="true"></i>
</a>
                        <a href="<?php the_field('appliance_production_virtualbox'); ?>" class="button-oc stacked piwik_download">Download VirtualBox image<i class="fa fa-download" aria-hidden="true"></i>
</a>
                        <a href="<?php the_field('appliance_production_qcow2'); ?>" class="button-oc stacked piwik_download">Download QCOW2 image<i class="fa fa-download" aria-hidden="true"></i>
</a>
                        <a href="<?php the_field('appliance_production_vmware'); ?>" class="button-oc stacked piwik_download">Download VMware image<i class="fa fa-download" aria-hidden="true"></i>
</a>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <h3 id="owncloud-server-linux-packages">Linux Distribution Packages</h3>
                <p><?php the_field('linux_packages_description'); ?></p>
                <a href="<?php the_field('linux_packages_link'); ?>" target="_blank" class="button-oc">Go to packages<i class="fa fa-external-link" aria-hidden="true"></i></a>

                <h4>Looking for a hosted ownCloud?</h4>
                <p>Many hosting providers are offering an automated ownCloud installation in your own web hosting.</p>
                <a href="<?php echo get_page_link(407); ?>" class="button-oc">See our hosting partners here<i class="fa fa-external-link" aria-hidden="true"></i></a>
            </section>

            <section>
                <h1 id="owncloud-desktop-client">ownCloud Desktop Client</h1>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        $image = get_field('desktop_image');
                        ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />
                    </div>

                    <div class="col-md-8">
                        <?php the_field('desktop_description'); ?>
                    </div>
                </div>

                <?php
                if( have_rows('desktop_documentation') ): ?>
                    <h2>Documentation</h2>
                    <?php
                    while ( have_rows('desktop_documentation') ) : the_row(); ?>
                        <a target="_blank" rel="no-follow" class="documentation" href="<?php the_sub_field('desktop_docs_link'); ?>"><i class="fa fa-file-text-o"></i><?php the_sub_field('desktop_docs_title'); ?></a>
                    <?php
                    endwhile;
                endif;
                ?>

                <h2>Resources</h2>

                <h3 class="d-flex align-items-center" id="owncloud-desktop-client-macos"><i class="fa fa-apple fa-2x"></i>ownCloud desktop client for MacOS</h3>
                <p>
                  System requirements: <?php echo get_field('desktop_mac_system_req'); ?>
                </p>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">release channel</th>
                      <th scope="col">version</th>
                      <th scope="col">release date</th>
                      <th scope="col" colspan="2">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>production</td>
                      <td><?php the_field('desktop_mac_production_version'); ?></td>
                      <td><?php the_field('desktop_mac_production_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_mac_production_link'); ?>" class="button-oc piwik_download">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>

                    <?php if (get_field('desktop_mac_techpreview_is_available') == 1) : ?>
                    <tr>
                      <td>technical preview</td>
                      <td><?php the_field('desktop_mac_techpreview_version'); ?></td>
                      <td><?php the_field('desktop_mac_techpreview_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_mac_techpreview_link'); ?>" class="button-oc piwik_download">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (get_field('desktop_mac_testpilot_is_available') == 1) : ?>
                    <tr>
                      <td>Testpilot cloud</td>
                      <td><?php the_field('desktop_mac_testpilot_version'); ?></td>
                      <td><?php the_field('desktop_mac_testpilot_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_mac_testpilot_link'); ?>" class="button-oc piwik_download">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>

                <h3 class="d-flex align-items-center" id="owncloud-desktop-client-windows"><i class="fa fa-windows fa-2x"></i>ownCloud desktop client for Windows</h3>
                <p>
                  System requirements: <?php echo get_field('desktop_windows_system_req'); ?>
                </p>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">release channel</th>
                      <th scope="col">version</th>
                      <th scope="col">release date</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>production</td>
                      <td><?php the_field('desktop_windows_production_version'); ?></td>
                      <td><?php the_field('desktop_windows_production_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_windows_production_link'); ?>" class="button-oc piwik_download">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>

                    <?php if (get_field('desktop_windows_techpreview_is_available') == 1) : ?>
                    <tr>
                      <td>technical preview</td>
                      <td><?php the_field('desktop_windows_techpreview_version'); ?></td>
                      <td><?php the_field('desktop_windows_techpreview_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_windows_techpreview_link'); ?>" class="button-oc piwik_download">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (get_field('desktop_windows_testpilot_is_available') == 1) : ?>
                    <tr>
                      <td>Testpilot cloud</td>
                      <td><?php the_field('desktop_windows_testpilot_version'); ?></td>
                      <td><?php the_field('desktop_windows_testpilot_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_windows_testpilot_link'); ?>" class="button-oc piwik_download">Download<i class="fa fa-download" aria-hidden="true"></i>
</a></td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>

                <h3 class="d-flex align-items-center" id="owncloud-desktop-client-linux"><i class="fa fa-linux fa-2x"></i>ownCloud desktop client for Linux</h3>
                <p>
                  For Linux distributions, we support, if technically feasible, the latest 2 versions per platform and the previous LTS.
                </p>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">release channel</th>
                      <th scope="col">version</th>
                      <th scope="col">release date</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>production</td>
                      <td><?php the_field('desktop_linux_production_version'); ?></td>
                      <td><?php the_field('desktop_linux_production_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_linux_production_link'); ?>" target="_blank" class="button-oc">Install instructions<i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                    </tr>

                    <?php if (get_field('desktop_linux_techpreview_is_available') == 1) : ?>
                    <tr>
                      <td>technical preview</td>
                      <td><?php the_field('desktop_linux_techpreview_version'); ?></td>
                      <td><?php the_field('desktop_linux_techpreview_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_linux_techpreview_link'); ?>" target="_blank" class="button-oc">Install instructions<i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php endif; ?>

                    <?php if (get_field('desktop_linux_testpilot_is_available') == 1) : ?>
                    <tr>
                      <td>Testpilot cloud</td>
                      <td><?php the_field('desktop_linux_testpilot_version'); ?></td>
                      <td><?php the_field('desktop_linux_testpilot_release_date'); ?></td>
                      <td><a href="<?php the_field('desktop_linux_testpilot_link'); ?>" target="_blank" class="button-oc">Install instructions<i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
            </section>

            <section>
                <h1 id="owncloud-mobile-apps">ownCloud Mobile Apps</h1>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        $image = get_field('mobile_image');
                        ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />
                    </div>

                    <div class="col-md-8">
                        <?php the_field('mobile_description'); ?>
                    </div>
                </div>

                <?php

                if( have_rows('mobile_documentation') ): ?>
                    <h2>Documentation</h2>
                    <?php
                    while ( have_rows('mobile_documentation') ) : the_row(); ?>
                        <a target="_blank" rel="no-follow" class="documentation" href="<?php the_sub_field('mobile_docs_link'); ?>"><i class="fa fa-file-text-o"></i><?php the_sub_field('mobile_docs_title'); ?></a>
                    <?php
                    endwhile;
                endif;
                ?>

                <div class="row">
                    <div class="col-md-6 d-flex flex-column">
                      <h3 class="d-flex align-items-center" id="owncloud-mobile-apps-ios"><i class="fa fa-apple fa-2x"></i>iOS</h3>
                      <p>Download the ownCloud mobile app on iTunes (iOS)</p>
                      <a class="appstore-link mx-auto text-center" href="<?php the_field('mobile_ios_link'); ?>" target="_blank">
                        <img class="img-fluid d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/img/owncloud-qr-code-ios-app-store-itunes.svg" alt="ownCloud mobile app on apple itunes" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/owncloud-ios-app-store-itunes.png" alt="ownCloud mobile app on Apple iTunes" /></a>
                    </div>

                    <div class="col-md-6 d-flex flex-column">
                      <h3 class="d-flex align-items-center" id="owncloud-mobile-apps-android"><i class="fa fa-android fa-2x"></i>Android</h3>
                        <p>Download the ownCloud mobile app on Google Play store (Android)</p>

                        <a class="appstore-link mx-auto text-center" href="<?php the_field('mobile_android_link'); ?>" target="_blank">
                          <img class="img-fluid d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/img/owncloud-qr-code-google-play.svg" alt="ownCloud mobile app on google play store" />

                          <img src="<?php echo get_template_directory_uri(); ?>/img/owncloud-google-play-store.png" alt="ownCloud mobile app on Google Play store" />
                        </a>
                    </div>
                </div>
            </section>

            <section>
                <h1 id="owncloud-marketplace">ownCloud Marketplace</h1>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        $image = get_field('marketplace_image');
                        ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>" />
                    </div>

                    <div class="col-md-8">
                        <p><?php the_field('marketplace_description'); ?></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</article>

<?php
    endwhile;
endif;
get_footer();
?>
