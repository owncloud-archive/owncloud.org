<?php
// Strings used throughout ownCloud.org.

/* VERSIONS */
$VERSIONS_SERVER_MAJOR_STABLE = '8.1';
$VERSIONS_SERVER_FULL_STABLE = '8.1.1';
$VERSIONS_SERVER_MAJOR_DEVELOPMENT = '8.2';
$VERSIONS_SERVER_MAJOR_DEV_DOCS = '8.2'; // Used in dev docs links
$VERSIONS_CLIENT_DESKTOP_STABLE_FULL = '2.0.0';
$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT = '2.0'; // For use in documentation link
$VERSIONS_CLIENT_DESKTOP_TESTING = '';

/* DOCUMENTATION */
$DOCUMENTATION_BASE = 'https://doc.owncloud.org';
$DOCUMENTATION_DEVELOPER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_DEV_DOCS.'/developer_manual/';
$DOCUMENTATION_ADMIN = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'/admin_manual/';
$DOCUMENTATION_USER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'/user_manual/';
$DOCUMENTATION_CLIENT_DESKTOP = $DOCUMENTATION_BASE.'/desktop/'.$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT;

/* DOWNLOADS */
$OWNCLOUD_GPG = 'https://owncloud.org/owncloud.asc';

// Desktop client stable
$DOWNLOAD_CLIENT_DESKTOP_BASE = 'https://download.owncloud.com/desktop/stable/';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.0.0.5423-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-2.0.0.2666.pkg';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:desktop&package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES = $DOWNLOAD_CLIENT_DESKTOP_BASE.'owncloudclient-2.0.0.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES.'.asc';

// Desktop client testing
$DOWNLOAD_CLIENT_DESKTOP_TEST_BASE= 'https://download.owncloud.com/desktop/testing/';
$DOWNLOAD_CLIENT_DESKTOP_TEST_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-2.0.0.5415rc2-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TEST_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-2.0.0.2658rc2.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'testpilotcloud-2.0.0.5416rc2-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud%20Testpilot%20Edition-2.0.0.2659rc2.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&package=testpilotcloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES= $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'owncloudclient-2.0.0rc2.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES.'.asc';

// Server
$DOWNLOAD_SERVER_BASE = 'https://download.owncloud.org/community/';

// stable
$DOWNLOAD_SERVER_STABLE_TAR = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2';
$DOWNLOAD_SERVER_STABLE_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.md5';
$DOWNLOAD_SERVER_STABLE_TAR_SHA256 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.sha256';
$DOWNLOAD_SERVER_STABLE_TAR_PGP = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.tar.bz2.asc';
$DOWNLOAD_SERVER_PACKAGES_STABLE = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community&package=owncloud';
$DOWNLOAD_SERVER_STABLE_ZIP = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip';
$DOWNLOAD_SERVER_STABLE_ZIP_MD5 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.md5';
$DOWNLOAD_SERVER_STABLE_ZIP_SHA256 = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.sha256';
$DOWNLOAD_SERVER_STABLE_ZIP_PGP = $DOWNLOAD_SERVER_BASE.'owncloud-'.$VERSIONS_SERVER_FULL_STABLE.'.zip.asc';

// Daily
$DOWNLOAD_SERVER_DAILY_TAR = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2';
$DOWNLOAD_SERVER_DAILY_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2.md5';
$DOWNLOAD_SERVER_PACKAGES_DAILY = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:nightly&package=owncloud';

// Testing
$DOWNLOAD_SERVER_PACKAGES_TESTING = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&package=owncloud';

// web installer
$DOWNLOAD_SERVER_WEB_INSTALLER = 'https://download.owncloud.com/download/community/setup-owncloud.php';

// Mobile clients
$DOWNLOAD_CLIENT_MOBILE_IOS = 'https://itunes.apple.com/us/app/owncloud/id543672169?ls=1&mt=8';
$DOWNLOAD_CLIENT_MOBILE_ANDROID = 'https://play.google.com/store/apps/details?id=com.owncloud.android';
$DOWNLOAD_CLIENT_MOBILE_BLACKBERRY = 'https://appworld.blackberry.com/webstore/content/59955931/';
?>
