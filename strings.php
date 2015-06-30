<?php
// Strings used throughout ownCloud.org.

/* VERSIONS */
$VERSIONS_SERVER_MAJOR_STABLE = '8';
$VERSIONS_SERVER_FULL_STABLE = '8.0.4';
$VERSIONS_SERVER_MAJOR_DEVELOPMENT = '8.1';
$VERSIONS_SERVER_MAJOR_DEV_DOCS = '8'; // Used in dev docs links
$VERSIONS_CLIENT_DESKTOP_STABLE_FULL = '1.8.3';
$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT = '1.8'; // For use in documentation link
$VERSIONS_CLIENT_DESKTOP_TESTING = '';

/* DOCUMENTATION */
$DOCUMENTATION_BASE = 'https://doc.owncloud.org';
$DOCUMENTATION_DEVELOPER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_DEV_DOCS.'.0/developer_manual/';
$DOCUMENTATION_ADMIN = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'.0/admin_manual/';
$DOCUMENTATION_USER = $DOCUMENTATION_BASE.'/server/'.$VERSIONS_SERVER_MAJOR_STABLE.'.0/user_manual/';
$DOCUMENTATION_CLIENT_DESKTOP = $DOCUMENTATION_BASE.'/desktop/'.$VERSIONS_CLIENT_DESKTOP_STABLE_SHORT;

/* DOWNLOADS */
$OWNCLOUD_GPG = 'https://owncloud.org/owncloud.asc';

// Desktop client
$DOWNLOAD_CLIENT_DESKTOP_BASE = 'https://download.owncloud.com/desktop/stable/';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-1.8.3.5213-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC = $DOWNLOAD_CLIENT_DESKTOP_BASE.'ownCloud-1.8.3.2458.pkg';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:desktop&package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES = $DOWNLOAD_CLIENT_DESKTOP_BASE.'owncloudclient-1.8.3.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES.'.asc';
$DOWNLOAD_CLIENT_DESKTOP_TEST_BASE= 'https://download.owncloud.com/desktop/testing/';
$DOWNLOAD_CLIENT_DESKTOP_TEST_WIN = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-1.8.3.5212rc3-setup.exe';
$DOWNLOAD_CLIENT_DESKTOP_TEST_MAC = $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'ownCloud-1.8.3.2457rc3.pkg';
$DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&package=owncloud-client';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES= $DOWNLOAD_CLIENT_DESKTOP_TEST_BASE.'owncloudclient-1.8.3rc3.tar.xz';
$DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP = $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES.'.asc';

// Server
$DOWNLOAD_SERVER_BASE = 'https://download.owncloud.org/community/';
$DOWNLOAD_SERVER_PACKAGES_OBS_HOME = 'https://build.opensuse.org/project/subprojects/isv:ownCloud';

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

// Beta
$DOWNLOAD_SERVER_BETA_TAR = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2';
$DOWNLOAD_SERVER_BETA_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2.md5';
$DOWNLOAD_SERVER_PACKAGES_BETA = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:testing&package=owncloud';

// Production
$DOWNLOAD_SERVER_PRODUCTION_TAR = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2';
$DOWNLOAD_SERVER_PRODUCTION_TAR_MD5 = $DOWNLOAD_SERVER_BASE.'daily/owncloud-daily-master.tar.bz2.md5';
$DOWNLOAD_SERVER_PACKAGES_PRODUCTION = 'https://software.opensuse.org/download/package?project=isv:ownCloud:community:productiony&package=owncloud';

// web installer
$DOWNLOAD_SERVER_WEB_INSTALLER = 'https://download.owncloud.com/download/community/setup-owncloud.php';

// Mobile clients
$DOWNLOAD_CLIENT_MOBILE_IOS = 'https://itunes.apple.com/us/app/owncloud/id543672169?ls=1&mt=8';
$DOWNLOAD_CLIENT_MOBILE_ANDROID = 'https://play.google.com/store/apps/details?id=com.owncloud.android';
$DOWNLOAD_CLIENT_MOBILE_BLACKBERRY = 'https://appworld.blackberry.com/webstore/content/59955931/';
?>
