<div class="page-header">
	<h1>ownCloud Server Changelog</h1>
</div>
<p>We recommend you follow our <a href="/release-channels">Release Channels</a> to always have the latest ownCloud Server version which fits your needs.</p>


<h3>Version 8.1.1 <small>August 11th 2015</small></h3>
<ul>
<li>Fix infinite loops with propagating etags on reshares</li>
<li>Let the encryption storage wrapper always update the file cache</li>
<li>Only update database on the first run</li> 
<li>Add error handlers for avatar setup</li>
<li>Fix Search box in user management only appears when making the font bigger or smaller</li>
<li>Detect old NSS and OpenSSL versions</li>
<li>Double slash for SMB storage id for compatibility</li>
<li>Encryption migration improvements</li>
<li>Only set is encrypted when encryption is enabled</li>
<li>Adding error handling in case setting the password fails</li>
<li>Fix mount point detection</li>
<li>Allow upgrade of not enabled apps</li>
<li>Ensure groups match filter when using memberOf to read users group</li>
<li>Fixing 'Undefined index: REMOTE_ADDR'</li>
<li>Add repair step for outdated OCS IDs</li>
<li>Do not try clearing locked files in cache folder</li>
<li>Fix "undefined index" and "file_exists() on a non-object" messages</li>
<li>Fixing error logging</li>
<li>Add verbosity check and show repair info & steps</li>
<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2">owncloud-8.1.1.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip">owncloud-8.1.1.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2.md5">owncloud-8.1.1.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip.md5">owncloud-8.1.1.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2.sha256">owncloud-8.1.1.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip.sha256">owncloud-8.1.1.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2.asc">owncloud-8.1.1.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip.asc">owncloud-8.1.1.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.6 <small>August 11th 2015</small></h3>
Several fixes, including:
<ul>
<li>remove duplicate ID in HTML template for public shares</li>
<li>Scan check path correctly</li>
<li>Fix php ldap segfault when some users login</li>
<li>Do not restrict permissions for the original owner</li>
<li>Fix thumbnails on public pages are blurry on high DPI devices</li>
<li>Properly handle NotPermittedException in SabreDAV</li>
<li>Fix version rename with files and folders</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2">owncloud-8.0.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip">owncloud-8.0.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2.md5">owncloud-8.0.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip.md5">owncloud-8.0.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2.sha256">owncloud-8.0.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip.sha256">owncloud-8.0.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2.asc">owncloud-8.0.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip.asc">owncloud-8.0.6.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.8 <small>August 11th 2015</small></h3>
Several fixes, including:
<ul>
<li>Fix runtime caching in ldap's user manager</li>
<li>Fix "undefined index" and "file_exists() on a non-object" messages</li>
<li>Only rescan versions once in trashbin</li>
<li>Return correct user count when the group has none</li>
<li>Several smaller fixes and improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2">owncloud-7.0.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip">owncloud-7.0.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2.md5">owncloud-7.0.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip.md5">owncloud-7.0.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2.sha256">owncloud-7.0.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip.sha256">owncloud-7.0.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2.asc">owncloud-7.0.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip.asc">owncloud-7.0.8.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.1.0 <small>July 6th 2015</small></h3>
<ul>
<li>Much polishing, stability and performance improvements</li>
<li>Encryption 2.0</li>
<li>Updated Documents</li>
<li>New Mount Options for External Storage</li>
<li>Federated Cloud ID</li>
<li>Integrated documentation</li>
<li>LDAP Wizard Improvements</li>
<li>Security Improvements</li>
<li>App store improvements</li>
<li>Release channels</li>
<li>ownCloud API work: 190 new calls, 50 replaced</li>
<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2">owncloud-8.1.0.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip">owncloud-8.1.0.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2.md5">owncloud-8.1.0.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip.md5">owncloud-8.1.0.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2.sha256">owncloud-8.1.0.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip.sha256">owncloud-8.1.0.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2.asc">owncloud-8.1.0.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip.asc">owncloud-8.1.0.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.5 <small>July 6th 2015</small></h3>
Over 30 fixes, including:
<ul>
<li>Upgrade fixes</li>
<li>Dropbox logs error fixes</li>
<li>File scan fixes</li>
<li>Security fixes</li>
<li>OCS API fix</li>
<li>Control bar width no longer overlays scrollbar</li>
<li>Only load commands of enabled apps</li>
<li>Port detection when using LDAP</li>
<li>LDAP wizard improvements</li>
<li>MultiSelect fixes</li>
<li>Upgrade jquery-migrate</li>
<li>Shared file deletion fix</li>
<li>Fix sync from client to external SMB storage</li>
<li>Video streaming fix</li>
<li>File path fix</li>
<li>LDAP user deletion fix</li>
<li>Parsing fix in AppFramework</li>
<li>File overwrite fix for external storage</li>
<li>Disallow cookie auth in API</li>
<li>Fix versions when restoring a deleted file</li>
<li>Fix shares of unavailable users</li>
<li>Unset password of a link share</li>
<li>App store application fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2">owncloud-8.0.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip">owncloud-8.0.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2.md5">owncloud-8.0.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip.md5">owncloud-8.0.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2.sha256">owncloud-8.0.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip.sha256">owncloud-8.0.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2.asc">owncloud-8.0.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip.asc">owncloud-8.0.5.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.7 <small>July 6th 2015</small></h3>
Over 20 fixes, including:
<ul>
<li>Fix port detection when using LDAP</li>
<li>External storage reload fix</li>
<li>Dropbox logs error files</li>
<li>Video streaming fix</li>
<li>Fix sync from client to external SMB storage</li>
<li>DB performance improvement</li>
<li>File path fix</li>
<li>Upgrade fixes</li>
<li>LDAP user deletion fix</li>
<li>Parsing fix in AppFramework</li>
<li>Disallow cookie auth in API</li>
<li>Fix shares of unavailable users</li>
<li>IE8 fixes</li>
<li>App store application fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2">owncloud-7.0.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip">owncloud-7.0.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2.md5">owncloud-7.0.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip.md5">owncloud-7.0.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2.sha256">owncloud-7.0.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip.sha256">owncloud-7.0.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a <li>href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2.asc">owncloud-7.0.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip.asc">owncloud-7.0.7.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 6.0.9 <small>July 6th 2015</small></h3>
Half a dozen fixes, including:
<ul>
<li>Dropbox logs error files</li>
<li>Fix sync from client to external SMB storage</li>
<li>File path fix</li>
<li>App store application fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.9.tar.bz2">owncloud-6.0.9.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.9.zip">owncloud-6.0.9.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.9.tar.bz2.md5">owncloud-6.0.9.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.9.zip.md5">owncloud-6.0.9.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-6.0.9.tar.bz2.sha256">owncloud-6.0.9.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.9.zip.sha256">owncloud-6.0.9.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-6.0.9.tar.bz2.asc">owncloud-6.0.9.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.9.zip.asc">owncloud-6.0.9.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.4 <small>July 6th 2015</small></h3>
<ul>
<li>occ can now optionally run the update routines without disabling all third party apps</li>
<li>Database handling changes which should improve performance on big systems</li>
<li>better support for very old cURL versions (for QNAP users)</li>
<li>Extended X-Accel-Redirect functionality in nginx</li>
<li>Added work-around for file transfers on 32bit systems</li>
<li>Improved quota calculation</li>
<li>Many fixes and improvements to sharing</li>
<li>Several fixes to upgrade process</li>
<li>Fix deleted folders on client not showing up in trash</li>
<li>fix inability to delete files when quota is 0</li>
<li>Change WebDAV error to 500 instead of 403 on denying overwrite of read-only file</li>
<li>Fixed enforcing expiration date</li>
<li>Fix to Provisioning API</li>
<li>Fixing shared document editing by shared LDAP users</li>
<li>IE 8/9 fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2">owncloud-8.0.4.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip">owncloud-8.0.4.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2.md5">owncloud-8.0.4.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip.md5">owncloud-8.0.4.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2.sha256">owncloud-8.0.4.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip.sha256">owncloud-8.0.4.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2.asc">owncloud-8.0.4.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip.asc">owncloud-8.0.4.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.6 <small>June 9th 2015</small></h3>
<ul>
<li>Improve upgrade process</li>
<li>Improved quota calculation</li>
<li>Added work-around for file transfers on 32bit systems</li>
<li>Some fixes to sharing</li>
<li>Fix issue with broken encryption key when deleting file shared by other user</li>
<li>Fix incompatibility bugwith PHP 5.3</li>
<li>Fixed several LDAP and AD issues</li>
<li>Fix movie indexing</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2">owncloud-7.0.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip">owncloud-7.0.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2.md5">owncloud-7.0.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip.md5">owncloud-7.0.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2.sha256">owncloud-7.0.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip.sha256">owncloud-7.0.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2.asc">owncloud-7.0.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip.asc">owncloud-7.0.6.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 6.0.8 <small>June 9th 2015</small></h3>
<ul>
<li>versioning and deletion fix that solves "unable to rename, file is not writeable" bug</li>
<li>fixed the long execution time of the key migration</li>
<li>Remove hacky Substring support for MSSQL</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.8.tar.bz2">owncloud-6.0.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.8.zip">owncloud-6.0.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.8.tar.bz2.md5">owncloud-6.0.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.8.zip.md5">owncloud-6.0.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-6.0.8.tar.bz2.sha256">owncloud-6.0.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.8.zip.sha256">owncloud-6.0.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-6.0.8.tar.bz2.asc">owncloud-6.0.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.8.zip.asc">owncloud-6.0.8.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.3 <small>May 1st 2015</small></h3>
<ul>
<li>Fix several Constrain Violation Exceptions</li>
<li>Fix misleading Maintenance mode message</li>
<li>Timezone fixes for countries with 0.5 and 0.75 offsets</li>
<li>Fix usage of default share folder location</li>
<li>Reenable trashbin after failed rename</li>
<li>Fix disabling of APCu</li>
<li>Do not show update notification on mobile</li>
<li>Fix "Only variables should be passed by reference" error log spam</li>
<li>Add timeout to curl</li>
<li>Makes repair errors and warnings visible for the user when upgrading on the command line or in the web UI</li>
<li>Cron shall not operate in case we are in maintenance mode</li>
<li>Disable the cache updater when doing the encryption migration</li>
<li>Fix "Error while updating app" error</li>
<li>Internal Server Error after attempting to do "occ files:scan" </li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2">owncloud-8.0.3.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip">owncloud-8.0.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2.md5">owncloud-8.0.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip.md5">owncloud-8.0.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2.sha256">owncloud-8.0.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip.sha256">owncloud-8.0.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2.asc">owncloud-8.0.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip.asc">owncloud-8.0.3.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.2 <small>March 11th 2015</small></h3>
<ul>
<li>Prevent DB errors in certain high load situations</li>
<li>Fix installation and updating of apps from the app store</li>
<li>Fix documentation links</li>
<li>Fix file move/copy when out of storage space</li>
<li>Disable 3rd party apps during upgrade to prevent breaking ownCloud if incompatible apps are used</li>
<li>Fix compatibility with certain MariaDB versions</li>
<li>Print app upgrade information to console</li>
<li>Detect broken APC versions</li>
<li>Fix certain incompatibilities with older PHP 5.4 versions</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2">owncloud-8.0.2.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip">owncloud-8.0.2.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2.md5">owncloud-8.0.2.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip.md5">owncloud-8.0.2.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2.sha256">owncloud-8.0.2.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip.sha256">owncloud-8.0.2.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2.asc">owncloud-8.0.2.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip.asc">owncloud-8.0.2.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.5 <small>March 11th 2015</small></h3>
<ul>
<li>LDAP user cleanup</li>
<li>Improved MSSQL compatibility</li>
<li>Add note about external user app to config.sample.php</li>
<li>Fix creation of ghost directories in certain situations</li>
<li>Fixes for password protected links</li>
<li>Fix upgrade with LDAP in certain situations</li>
<li>Fix Server2Server sharing if trailing slashes are missing</li>
<li>add config-option for an image's maximum file size when generating previews</li>
<li>Increase initial user count in user management to 50</li>
<li>Note in config.sample.php that certain previews are not available on Windows</li>
<li>Drop useless "No reuse of etag" log output</li>
<li>Fix retrieval of LDAP user group in certain situations</li>
<li>Better cleanup temporary files</li>
<li>Show spinner on file upload in IE8 and IE9</li>
<li>Fix links to app store</li>
<li>Return real mime type in PROPFIND</li>
<li>Check if files are deletable before trying to delete them</li>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2">owncloud-7.0.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip">owncloud-7.0.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2.md5">owncloud-7.0.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip.md5">owncloud-7.0.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2.sha256">owncloud-7.0.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip.sha256">owncloud-7.0.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2.asc">owncloud-7.0.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip.asc">owncloud-7.0.5.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 6.0.7 <small>March 11th 2015</small></h3>
<ul>
<li>Remove some not needed error log messages</li>
<li>Removes the bogus leading slash in some sharing situations</li>
<li>Better cleanup temporary files</li>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.7.tar.bz2">owncloud-6.0.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.7.zip">owncloud-6.0.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.7.tar.bz2.md5">owncloud-6.0.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.7.zip.md5">owncloud-6.0.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-6.0.7.tar.bz2.sha256">owncloud-6.0.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.7.zip.sha256">owncloud-6.0.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-6.0.7.tar.bz2.asc">owncloud-6.0.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-6.0.7.zip.asc">owncloud-6.0.7.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 5.0.19 <small>March 11th 2015</small></h3>
<ul>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Several smaller fixes</li>
</ul>
<strong>Notice</strong>: this is the last 5.0.x release. Upgrading to a supported major release is highly recommended.</br>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.19.tar.bz2">owncloud-5.0.19.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip">owncloud-5.0.19.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.19.tar.bz2.md5">owncloud-5.0.19.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip.md5">owncloud-5.0.19.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-5.0.19.tar.bz2.sha256">owncloud-5.0.19.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip.sha256">owncloud-5.0.19.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-5.0.19.tar.bz2.asc">owncloud-5.0.19.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip.asc">owncloud-5.0.19.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:5.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.0 <small>Feb 9th 2015</small></h3>
<ul>
<li>Favorites</li>
<li>Federated Cloud sharing (Server 2 Server Sharing Version 2)</li>
<li>Improved apps management page</li>
<li>Improved updater app</li>
<li>Improved search</li>
<li>Direct download support, Broker</li>
<li>More fine grain storage configuration</li>
<li>Provisioning API will be released as part of the community edition</li>
<li>Apps can now specify their dependencies in info.xml</li>
<li>Accessibility improvements</li>
<li>Improved Documents</li>
<li>LDAP/AD: command line functions for creating and deleting LDAP configurations.</li>
<li>LDAP/AD: subtle configuration wizard improvements, including user name attribute detection.</li>
<li>PDF viewer has been updated to a new version of PDF.js</li>
<li>Sharing links are now shorter and "look better"</li>
<li>User management improvements</li>
<li>Better structured settings and admin page</li>
<li>Performance improvements</li>
<li>App container can now automatically resolve dependencies</li>
<li>Various app API deprecations and features</li>
<li>Improved import for contacts</li>
<li>App development tutorial for building a notes app</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.4 <small>Dec 9th 2014</small></h3>
<ul>
<li>Added XMLWriter check</li>
<li>Better deleted outdated previews</li>
<li>Store storage credential in session only if needed</li>
<li>Don't disclose relative directory path for single shared files of user</li>
<li>Password reset fixes</li>
<li>Fix enable app only for a specific group</li>
<li>fixing port configuration in trusted domains</li>
<li>LDAP fixes</li>
<li>Make group search case sensitive</li>
<li>Allow admin to change users display name </li>
<li>ldap performance improvements</li>
<li>config.php can now be read only</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.3 <small>November 13th 2014</small></h3> 
<ul>
<li>Some OS X server fixes</li>
<li>Several external storage fixes and improvements</li>
<li>Close session early to speedup apps page loading</li>
<li>Add overwrite.cli.url config option</li>
<li>Fix finding old versions in special cases</li>
<li>Make versions and encryption aware of copy operations</li>
<li>Force loading encryption app in all needed cases</li>
<li>Better filesystem scanning error messages</li>
<li>LDAP wizard fixes</li>
<li>Add configuration switch to enable preview mimetypes</li>
<li>Create backup of all encryption keys before recovery</li>
<li>Add displayname for admins</li>
<li>Better config.sample documentation</li>
<li>Better apps descriptions</li>
<li>Improve visual feedback if recovery key password gets changed</li>
<li>Fix some object store integration issues</li>
<li>Improved data directory configuration</li>
<li>Fix DAV permissions without create permissions</li>
<li>Fix filepicker home icon being partly hidden</li>
<li>Do only follow http and https redirects</li>
<li>Properly delete old previews</li>
<li>Prevent upgrades between more than one major versions</li>
<li>Several security fixes</li>
<li>Lots of smaller improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 6.0.6 <small>November 13th 2014</small></h3> 
<ul>
<li>Fix finding old versions in special cases</li>
<li>Make versions and encryption aware of copy operations</li>
<li>Force loading encryption app in all needed cases</li>
<li>Better filesystem scanning error messages</li>
<li>LDAP wizard fixes</li>
<li>Add configuration switch to enable preview mimetypes</li>
<li>Create backup of all encryption keys before recovery</li>
<li>Add displayname for admins</li>
<li>Several security fixes</li>
<li>Lots of smaller improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.6.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.6.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.6.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.6.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 5.0.18 <small>November 13th 2014</small></h3> 
<ul>
<li>Only allow http and https redirects</li>
<li>Documentation fixes</li>
<li>Several security fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.18.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.18.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.18.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.18.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:5.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.2 <small>August 28th 2014</small></h3> 
<ul>
<li>App upgrading stability improvements</li>
<li>Make default share folder configurable</li>
<li>Improve readability of error messages</li>
<li>Log failed authentication</li>
<li>S3 key fixes</li>
<li>Fix range requests with encryption</li>
<li>Several LDAP fixes</li>
<li>Remove obsolete 'Download preparing' message for zip downloads</li>
<li>Remove not working checks from code checker</li>
<li>No error if we try to delete a file which no longer exists</li>
<li>Fix detection of system wide mount points</li>
<li>Simplify App navigation</li>
<li>Add group management to public api</li>
<li>Remove confusing 'automatic logon rejected' message</li>
<li>Implement a txt preview fallback for the case that ttf is not support</li>
<li>Fix tiny thumbnail bug</li>
<li>Don't display share permission if resharing was disabled by the admin</li>
<li>Close session right before the download starts</li>
<li>Fix date display in filepicker</li>
<li>Don't touch non-oc tables when doing the InnoDB repair step</li>
<li>Several Documents fixes</li>
<li>Correctly handle public uploads activities</li>
<li>Add better 4 image previews to gallery</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 6.0.5 <small>August 28th 2014</small></h3>
<ul>
<li>Documentation improvements</li>
<li>fix anonymous upload if logged-in </li>
<li>Fix handling of special characters in group names</li>
<li>Fix downloading of big files in special situations</li>
<li>More consistent handling of debug mode</li>
<li>Fix sharing email notifications</li>
<li>Disabling upload button if upload is not possible</li>
<li>Fix detection of system wide mount points</li>
<li>Handle video viewer in sharing links correctly</li>
<li>Update encryption keys recursively if a folder was moved</li>
<li>Enable download button for public folders</li>
<li>Handle exceptions if file to too big for trash-bin correctly</li>
<li>Quota fixes</li>
<li>Avoid unnecessary writing to the DB when preferences are not changed</li>
<li>Disable download button if zip download is disabled</li>
<li>Fix searching for users in special situations</li>
<li>Mount-point handling fixes</li>
<li>Correctly handle storage stats for trash bin</li>
<li>Remove etag warning for trash bin</li>
<li>Hardened SFTP host verification</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.5.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.5.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.5.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.5.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.1 <small>August 4th 2014</small></h3>
<ul>
<li>Set maximum width for notification so they don't overlap the whole header</li>
<li>Don't preload videos on public sharing</li>
<li>Fix preview size calculation under certain conditions</li>
<li>Fix to always show all available versions in the versions dropdown</li>
<li>Support WebDAV copy operation and make encryption aware of it</li>
<li>Make sure to set the expire date if a date is set as default</li>
<li>Improved link icon for better UX</li>
<li>Fix rendering of blank template</li>
<li>Only call exec if is is enabled by PHP</li>
<li>Limit app menu icon size</li>
<li>Show a warning in the personal settings and admin settins if the encyption keys are not yet initialized</li>
<li>Always remove share permission if user is excluded from sharing</li>
<li>Add OCS api call to set expire date for link shares</li>
<li>Improved db schema migration for sqlite</li>
<li>Don't try to execute background jobs that no longer exist</li>
<li>Improve look of search on mobile, save space in top bar</li>
<li>Set core version after a successful update to make upgrade more robust of app upgrades fail</li>
<li>Verify whether download URLs are valid</li>
<li>Fix preview animation on uploading</li>
<li>Prevent cron.php to trigger apps updating</li>
<li>Fix remote share when remote server is installed at the root</li>
<li>Fix files sorting</li>
<li>Fix calendar import</li>
<li>Fix gallery pause icon</li>
<li>Several contacts fixes specifically for PHP 5.3</li>
<li>Make updater more robust</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.0 <small>June 23rd 2014</small></h3>
<ul>
<li>New files view including sorting and endless scrolling</li>
<li>Server to Server sharing</li>
<li>Sharing overview</li>
<li>Improved sharing admin control</li>
<li>No more mandatory Shared folder</li>
<li>Improved ownCloud Documents features</li>
<li>Hugely improved Activity app including email notifications</li>
<li>Mobile optimized webinterface</li>
<li>Password strength indicator</li>
<li>Significant speed improvements</li>
<li>New user-management</li>
<li>Support for Swift object stores</li>
<li>Email configuration wizard</li>
<li>Email template editor</li>
<li>Improved upgrade process</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 6.0.4 <small>June 23rd 2014</small></h3>
<ul>
<li>Fixed a security issue (Will be disclosed two weeks after this release)
<li>Several LDAP fixes and improvements
<li>Add deprecated warning to load function
<li>File scanner fixes
<li>Heart beat fixes
<li>Encryption fixes for some corner cases
<li>Fix conflict dialog translations
<li>Fix button text overflow
<li>Fix search with Oracle
<li>Php upload errors are written to log
<li>OCS status code fixes
<li>Add PostgreSQL version warning
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.4.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.4.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.4.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.4.tar.bz2.md5</a></br>
<h3>Version 5.0.17 <small>June 23rd 2014</small></h3>
<ul>
<li>Fixed a security issue (Will be disclosed two weeks after this release)
<li>Add deprecated warning to load function
<li>Fix button text overflow
<li>Fix search with Oracle
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.17.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.17.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.17.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.17.tar.bz2.md5</a></br>
<h3>Version 6.0.3 <small>April 29th 2014</small></h3>
<ul>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Appframework extensions to improve the compatibility with 3rdparty apps</li>
<li>LDAP performance improvements</li>
<li>Fix updating of email adresses from LDAP</li>
<li>Fix WebDAV timestamp format handling</li>
<li>Disable internet connection check if a proxy is configured</li>
<li>Fix a potential file chunking problem on a server that is running out of storage</li>
<li>Do not expire file chunks while checking their existence</li>
<li>Fix loading of authentication apps in any case</li>
<li>Performance improvements by reducing the number of chmod operations.</li>
<li>Make the trusted domain upgrade feature more robust.</li>
<li>Don't allow creating a "Shared" folder.</li>
<li>Fixed "select all" + download on public page</li>
<li>Fix share as link with email multiple users</li>
<li>Reset time of last update feed polling to fix the updater</li>
<li>Share API fixes</li>
<li>Admin option for public upload with encryption enabled</li>  
<li>Fix CIFS with home shares</li>
<li>Detect a missing "data" directory mount</li>
<li>Fix the filesize calculation of encrypted files</li>
<li>Fixes in the OpenStack support</li>
<li>Fixes in the SWIFT support</li>
<li>Don't block PHP sessions during download</li>
<li>Fix sharing oc addressbooks</li>
<li>Several ownCloud Documents improvements and fixes</li>
<li>Several smaller bugfixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.3.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.3.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.3.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.3.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.16 <small>April 29th 2014</small></h3>
<ul>
<li>Several security fixes</li>
<li>Make the trusted domain upgrade feature more robust.</li>
<li>Fix group restore</li>
<li>Don't block PHP sessions during download</li>
<li>Several smaller bugfixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.16.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.16.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.16.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.16.tar.bz2.md5</a><br />
<br />

<h3>Version 6.0.2 <small>March 3rd 2014</small></h3>
<ul>
<li>Several security fixes</li>
<li>Improved trash bin performance for deleting lots of files</li>
<li>Mobile interface improvements</li>
<li>Fix key problems in encryption mode in rare situations</li>
<li>Smaller LDAP improvements</li>
<li>Fix the keep-alive ping for non standard php session lifetimes</li>
<li>Cleanup storage table when deleting an entry</li>
<li>Fix compatibility with xsendfile mode</li>
<li>Fix file size calculation in encryption mode</li>
<li>Fix image previews in trash bin </li>
<li>Fix public upload with enabled enryption</li>
<li>Added APC enabled check</li>
<li>Correctly localise date in notification emails</li>
<li>Improve compatibility with some CIFS servers</li>
<li>Fix shared files and Gallery</li>
<li>Several Contacts compatibility improvements</li>
<li>Several Documents improvements</li>
<li>A lot of smaller bug fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.2.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.2.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.2.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.2.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.15 <small>March 3rd 2014</small></h3>
<ul>
<li>Several security fixes</li>
<li>Improved trash bin performance for deleting lots of files</li>
<li>Mobile interface improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.15.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.15.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.15.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.15.tar.bz2.md5</a><br />
<br />

<h3>Version 6.0.1 <small>Jan 22th 2014</small></h3>
<ul>
<li>Fix handling of encryption keys</li>
<li>Disable xcache in case admin auth is disabled</li>
<li>Speed DB improvements in user home directory location fetching</li>
<li>Fix some APC configuration problems </li>
<li>Fix duplicate .exe mime-type detection</li>
<li>Support DECIMAL DB schema statement</li>
<li>Fix some API response code problems</li>
<li>Added download workaround for some Android versions.</li> 
<li>Turn off not working mod_pagespeed extension</li>
<li>Command line tool option to show user number</li>
<li>Some LDAP fixes for certain configurations</li>
<li>Fix previews for reshared files</li>
<li>Fix unshare on delete behaviour</li>
<li>Fix a CIFS mounting timezone problem</li>
<li>File Trash handling fixes</li>
<li>Fix potential data corruption problem during massive parallel uploads of the same file</li>
<li>Fix versions expiration logic</li>
<li>Fix public upload progress bar</li>
<li>Fix issues with intermittent "Insufficient Storage" message when quota is enabled</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.1.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.1.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.1.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.1.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.14a <small>Dec 17th 2013</small></h3>
<ul>
<li>Fix bug that triggers a regeneration of the etags and redownload of files</li>
<li>Don't check migration status if a file is accessed by a public link</li>
<li>Fix unsharing of files</li>
<li>Several external filesystem improvements and fixes</li>
<li>A lot of quota calculation fixes</li>
<li>Login cookie handling fixes</li>
<li>Fix WebDAV url</li>
<li>Fix updating of cached permissions</li>
<li>Reverse proxy fixes</li>
<li>Fix handling of touch for external filesystems</li>
<li>Fix setting of display names</li>
<li>IIS fixes</li>
<li>Fix some Oracle corner cases</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.14a.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.14a.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.14a.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.14a.tar.bz2.md5</a><br />
<br />


<h3>Version 6.0.0a <small>Dec 14th 2013</small></h3>
<ul>
<li>Remove wrong warnings from logfile</li>
<li>Fix LDAP authentication</li>
<li>Fix LDAP configuration</li>
<li>Fix Share dialog</li>
<li>Fix migration under certain conditions</li>
<li>Fix database encoding for old PHP versions</li>
<li>Fix select all checkbox</li>
<li>Fix migration with lucene search enabled</li>
<li>Fix migration for postgresql</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.0a.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.0a.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.0a.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.0a.tar.bz2.md5</a><br />
<br />

<h3>Version 6.0.0 <small>Dec 11th 2013</small></h3>
<ul>
<li>User Avatars</li>
<li>Previews in files app and other places</li>
<li>Updated design, less clutter and more whitespace</li>
<li>Public gallery sharing</li>
<li>Activities</li>
<li>Better file conflict handling dialog</li>
<li>Improved public App API</li>
<li>Sharing API</li>
<li>Example Files</li>
<li>Share Email Notifications</li>
<li>New Doctrine based database layer</li>
<li>Plural translations</li>
<li>Refactored OC.dialogs (both code and design wise)</li>
<li>Priorize often used languages in personal-settings language selection</li>
<li>Update jquery to 1.10.0 and add jquery-migrate 1.2.1</li>
<li>Show a summary as the last filelist entry</li>
<li>Improve app-management (more verbose error-messages)</li>
<li>Show 'More apps' link to app administration directly in app navigation</li>
<li>Templates for newly created files</li>
<li>Add MB indicator to size column</li>
<li>Google Drive external storage uses a new library</li>
<li>New icons for shared and external folders</li>
<li>File uploads conflicts dialog</li>
<li>Possibility to prepopulate a new users home with a skeleton</li>
<li>Public upload with encryption enabled</li>
<li>Users now can decrypt the files again if their encryption app was enabled</li>
<li>Many quota related fixes</li>
<li>Total used space (with quota) now only counts user's own files</li>
<li>Many external storage fixes, improved performance</li>
<li>Improved file navigation performance by using Ajax calls (no full page reload for each folder)</li>
<li>The file owner can now also restore deleted shared files</li>
<li>New version drop-down with previews and the ability to downloading versions directly</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-6.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-6.0.0.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-6.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-6.0.0.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.13 <small>Nov 8th 2013</small></h3>
<ul>
<li>SECURITY: Fix a possible security bypass on admin page under certain circumstances and MariaDB</li>
<li>Correctly update database schema during app update</li>
<li>Fix automatic login rejecion error message</li>
<li>Several Oracle fixes</li>
<li>Fixing serverroot/webroot calculation</li>
<li>Adding detection for aborted uploads for chunked uploads</li>
<li>Fixing directory handling that end with a space</li>
<li>Fixing home storage handling</li>
<li>Allow to share a file/folder as public link also if one of it parents was already shared as link</li>
<li>Fix search in shared folders</li>
<li>Fix check for uploads into Shared folder</li>
<li>Several Shared folder handling fixes</li>
<li>Prefere them PNGs over core SVGs</li>
<li>Fall back to default log file of specified logfile doesn't exist</li>
<li>Several IE fixes</li>
<li>Fix LDAP login for certain circumstances</li> 
<li>Fixed chunk size calculation for encrypted files</li>
<li>Fix recursive delete for smb</li>
<li>Fix using touch for creating files for smb</li>
<li>Support OCS Share API</li>
<li>Fix updating ETAGs</li>
<li>Don't write user passwords into logfile</li>
<li>Enable configuration of timezones for logfile timestamps</li>
<li>Cleanup share database table for files that no longer exist</li>
<li>Adding privilege check on move and rename operations</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.13.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.13.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.13.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.13.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.12 <small>Oct 4th 2013</small></h3>
<ul>
<li>Usermanagement interface fixes</li>
<li>Allow numeric group names</li>
<li>Improved IE compatibiliy</li>
<li>Fix database upgrade error</li>
<li>Sharing permission interface fixes</li>
<li>Small visual fixes</li>
<li>File scanner fixes to handle deleted files correctly</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.12.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.12.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.12.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.12.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.11 <small>Sep 10th 2013</small></h3>
<ul>
<li>Fixing upload in shared folders with create privileges</li>
<li>Making ldap more robust in certain situations</li>
<li>Handing quota violation earlier to make the desktop clients more robust</li>
<li>Several quota fixes</li>
<li>Fix issues with certain file names like 0 or false</li>
<li>Disable smb in files_External on windows servers</li>
<li>Enable user to decrypt files again after encryption app was disabled</li>
<li>Improved Encryption messages</li>
<li>Add a searchByMime call to API</li>
<li>Fix multiselects for Firefox on Mac in groups management</li>
<li>Reduce the number of ldap connections</li>
<li>Show a "password incorrect" notice when used shared password is wrong</li>
<li>Switch to the completely new Google Drive SDK.</li>
<li>Scanner: additional tests for reusing etags during scanning</li>
<li>Fix accessing files that are newly created by setting the right mime type</li>
<li>Several Calendar bugfixes</li>
<li>Fixed "Show on Map" in Contacts</li>
<li>A lof of Contacts fixes</li>
<li>Several "Tasks" fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.11.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.11.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.11.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.11.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.10 <small>Aug 12th 2013</small></h3>
<ul>
<li>Configurable logfile date format</li>
<li>Several Oracle fixes</li>
<li>Several MSSQL fixes</li>
<li>Make default language configurable</li>
<li>New CLI upgrade script</li>
<li>Correctly calculate folder size</li>
<li>Fix display of search results</li>
<li>Database upgrade fixes</li>
<li>Smaller filesystem cache fixes</li>
<li>Remember password fixes</li>
<li>Encryption fixes</li>
<li>Fix problems with german "Umlauts" in folder name</li>
<li>IE fixes</li>
<li>Improved upgrade logging</li>
<li>Improved external storage status display</li>
<li>Flicker free versions dropdown</li>
<li>Don't create empty versions</li>
<li>Less noisy debug logfile</li>
<li>Don't show firstrunwizard during upgrade</li>
<li>Several Calendar fixes</li>
<li>Contacts fixes</li>
<li>Fixes for Gallery</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.10.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.10.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.10.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.10.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.9 <small>July 15th 2013</small></h3>
<ul>
 <li>Fixes for mounting an WebDAV into an ownCloud</li>
 <li>Improved expiration of older versions in the case of a full storage</li>
 <li>IE8 fixes</li>
 <li>Increased speed when syncing shared files</li>
 <li>Oracle compatibility fixes</li>
 <li>Make upgrade routine more robust</li>
 <li>Fix gallery for certain php configurations</li>
 <li>Fix pdf viewer close button</li>
 <li>user_external fixes</li>
 <li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.9.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.9.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.9.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.9.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.8 <small>July 10th 2013</small></h3>
<ul>
<li>SECURITY: XSS vulnerability in "Share Interface" (<a href="/security/advisory/?id=oC-SA-2013-029">oC-SA-2013-029</a>)</li>
<li>SECURITY: Authentication bypass in "user_webdavauth" (<a href="/security/advisory/?id=oC-SA-2013-030">oC-SA-2013-030</a>)</li>
<li>New anonymous upload feature</li>
Fix syncing of external filesystems</li>
<li>External filesystems performance improvements</li>
<li>Improve compatibility with Oracle</li>
<li>Improved and simplified theming</li>
<li>Internet explorer 8 fixes</li>
<li>Fixes for partial file uploads</li>
<li>LDAP: fix handling of User and Group Bases</li>
<li>Improved and more robust upgrade system</li>
<li>A lot of encryption system fixes</li>
<li>Do not add groups if user has no groups</li>
<li>Several Contacts fixes</li>
<li>A lot of smaller bugfixes all over the place</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.8.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.8.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.8.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.8.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.13 <small>July 10th 2013</small></h3>
<ul>
<li>SECURITY: Authentication bypass in "user_webdavauth" (<a href="/security/advisory/?id=oC-SA-2013-030">oC-SA-2013-030</a>)</li>
<li>Fixed deleting old files versions</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.5.13.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.13.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.5.13.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.13.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.7 <small>June 6th 2013</small></h3>
<ul>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-028">oC-SA-2013-028</a>)</li>
<li>New encryption app as preview included. WARNING: This is not yet ready for production use but testing and feedback is welcome.</li>
<li>Several LDAP compatibility fixes</li>
<li>Several performance improvements of file handling</li>
<li>Trashbin fixes for Safari</li>
<li>Internet Explorer fixes</li>
<li>Several Contacts fixes</li>
<li>New check for magic_quotes</li>
<li>External Filesystem fixes</li>
<li>Add support for copying/moving folders between storages</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.7.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.7.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.7.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.7.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.12 <small>June 6th 2013</small></h3>
<ul>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-028">oC-SA-2013-028</a>)</li>
<li>Several Contacts fixes</li>
<li>Several Calendar fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.5.12.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.12.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.5.12.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.12.tar.bz2.md5</a><br />
<br />

<h3>Version 4.0.16 <small>June 6th 2013</small></h3>
<ul>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-028">oC-SA-2013-028</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.0.16.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.16.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.0.16.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.16.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.6 <small>May 14th 2013</small></h3>
<ul>
<li>SECURITY: SQL Injection (<a href="/security/advisory/?id=oC-SA-2013-019">oC-SA-2013-019)</a></li>
<li>SECURITY: Multiple directory traversals (<a href="/security/advisory/?id=oC-SA-2013-020">oC-SA-2013-020</a>)</li>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-021">oC-SA-2013-021</a>)</li>
<li>SECURITY: Open redirector (<a href="/security/advisory/?id=oC-SA-2013-022">oC-SA-2013-022</a>)</li>
<li>SECURITY: Password autocompletion (<a href="/security/advisory/?id=oC-SA-2013-023">oC-SA-2013-023</a>)</li>
<li>SECURITY: Privilege escalation in the calendar application (<a href="/security/advisory/?id=oC-SA-2013-024">oC-SA-2013-024</a>)</li>
<li>SECURITY: Privilege escalation and CSRF in the API (<a href="/security/advisory/?id=oC-SA-2013-025">oC-SA-2013-025</a>)</li>
<li>SECURITY: Incomplete blacklist vulnerability (<a href="/security/advisory/?id=oC-SA-2013-026">oC-SA-2013-026</a>)</li>
<li>SECURITY: Information disclosure: CSRF token + username (<a href="/security/advisory/?id=oC-SA-2013-027">oC-SA-2013-027</a>)</li>
<li>Fix renaming of shared files</li>
<li>Fix UUID handling with LDAP</li>
<li>Fix several undelete files issues</li>
<li>Fix LDAP cachekey handling</li>
<li>Several OCS API fixes</li>
<li>Dropbox mounting fixes</li>
<li>Remove ldap group name restrictions</li>
<li>Fix fetching of the userlist with multiple user backends</li>
<li>Turn off password autocompletion</li>
<li>Translation fixes of the Shared folder</li>
<li>Fix the fileactions order for filetypes</li>
<li>Allow to ship a default theme</li>
<li>Disallow URLs containing "@"</li>
<li>Smaller layout improvemens</li>
<li>Log an upgrade warning</li>
<li>Log a trash bin cleanup message</li> 
<li>Improved quota calculation</li>
<li>Allow to set Quota to zero</li>
<li>Fix performance regression for uploading of big files</li>
<li>Several Calendar fixes</li>
<li>Use displaynames in contacts</li>
<li>Check for existing address books during migrate->import</li>
<li>Texteditor fixes</li>
<li>Increase the SQLite database timeout</li>
<li>Order images in Gallery</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.6.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.6.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.6.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.6.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.11 <small>May 14th 2013</small></h3>
<ul>
<li>SECURITY: SQL Injection (<a href="/security/advisory/?id=oC-SA-2013-019">oC-SA-2013-019</a>)</li>
<li>SECURITY: Multiple directory traversals (<a href="/security/advisory/?id=oC-SA-2013-020">oC-SA-2013-020</a>)</li>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-021">oC-SA-2013-021</a>)</li>
<li>SECURITY: Privilege escalation in the calendar application (<a href="/security/advisory/?id=oC-SA-2013-024">oC-SA-2013-024</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.5.11.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.11.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.5.11.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.11.tar.bz2.md5</a><br />
<br />

<h3>Version 4.0.15 <small>May 14th 2013</small></h3>
<ul>
<li>SECURITY: Multiple directory traversals (<a href="/security/advisory/?id=oC-SA-2013-020">oC-SA-2013-020</a>)</li>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-021">oC-SA-2013-021</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.0.15.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.15.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.0.15.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.15.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.5 <small>April 19th 2013</small></h3>
<ul>
<li>Fix navigation hover effect</li>
<li>Fix database migration</li>
<li>Add a warning in the logfile when doing a migration</li>
<li>Fix renaming of shared files</li>
<li>Improved quota calculation</li>
<li>Fix free space calculation</li>
<li>Several layout fixes</li>
<li>Better save mode check</li>
<li>Cleanup database after user deletion</li>
<li>Fix touch for creating new files</li>
<li>Several trash bin fixes</li>
<li>Update MediaElement.js</li>
<li>Fix double address book problem</li>
<li>Fix layout problem triggered by impress</li>
<li>Several smaller fixes</li>
<li>Security: XSS in flashmediaelement.swf (<a href="/security/advisory/?id=oC-SA-2013-017">oC-SA-2013-017</a>)</li>
<li>Security: Authentication bypass in Contacts (<a href="/security/advisory/?id=oC-SA-2013-018">oC-SA-2013-018</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.5.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.5.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.5.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.5.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.10 <small>April 19th 2013</small></h3>
<ul>
<li>Security: XSS in flashmediaelement.swf (<a href="/security/advisory/?id=oC-SA-2013-017">oC-SA-2013-017</a>)</li>
<li>Security: Authentication bypass in calendar (<a href="/security/advisory/?id=oC-SA-2013-018">oC-SA-2013-018</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.5.10.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.10.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.5.10.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.10.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.4 <small>April 11th 2013</small></h3>
<ul>
<li>Fix file renames</li>
<li>Improved compatibility with PostgreSQL</li>
<li>Fixed upgrade for PostgreSQL users</li>
<li>Improved LDAP compatibility</li>
<li>Fix the upgrade hint</li>
<li>Make upgrade more robust fix maintainance mode</li> 
<li>Smaller CSS fixes</li>
<li>Fix internet check for proxy users</li> 
<li>Manually disable files_archive app to fix upgrade</li>
<li>Fix touch() for local storage</li>
<li>Fix versioning check to allow installation of 3rd party apps</li>
<li>Fix default quota</li>
<li>Several contacts fixes</li>
<li>Several calendar fixes</li>
<li>Fixed ampache support in media player</li>
<li>Improve mail function in antivirus app</li>
<li>Fix setting of user quotas</li>
<li>Fix deleted files size calculation</li>
<li>Fix "You do not have write permissions here" warning</li>
<li>Fix asynchronous loading of users</li>
<li>Fix notice from the nullbyte check</li>
<li>XSS vulnerability in jPlayer (<a href="/security/advisory/?id=oC-SA-2013-014">oC-SA-2013-014</a>)</li>
<li>PostgreSQL: Insecure database password generator (<a href="/security/advisory/?id=oC-SA-2013-015">oC-SA-2013-015)</a></li>
<li>Windows: Local file disclosure (<a href="/security/advisory/?id=oC-SA-2013-016">oC-SA-2013-016</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.4.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.4.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.4.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.4.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.9 <small>April 11th 2013</small></h3>
<ul>
<li>Fix public sharing</li>
<li>Improved LDAP error reporting</li>
<li>Don't show share action for Shared folder</li>
<li>XSS vulnerability in jPlayer (<a href="/security/advisory/?id=oC-SA-2013-014">oC-SA-2013-014</a>)</li>
<li>PostgreSQL: Insecure database password generator (<a href="/security/advisory/?id=oC-SA-2013-015">oC-SA-2013-015)</a></li>
<li>Windows: Local file disclosure (<a href="/security/advisory/?id=oC-SA-2013-016">oC-SA-2013-016</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.5.9.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.9.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.5.9.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.9.tar.bz2.md5</a><br />
<br />

<h3>Version 4.0.14 <small>April 11th 2013</small></h3>
<ul>
<li>XSS vulnerability in jPlayer (<a href="/security/advisory/?id=oC-SA-2013-014">oC-SA-2013-014</a>)</li>
<li>PostgreSQL: Insecure database password generator (<a href="/security/advisory/?id=oC-SA-2013-015">oC-SA-2013-015)</a></li>
<li>Windows: Local file disclosure (<a href="/security/advisory/?id=oC-SA-2013-016">oC-SA-2013-016</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.0.14.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.14.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.0.14.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.14.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.3 <small>April 3th 2013</small></h3>
<ul>
<li>Correctly handle .part files</li>
<li>Improve PostgreSQL support</li>
<li>Fix database upgrading from old versions</li>
<li>Improved app styles</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.3.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.3.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.3.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.3.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.2 <small>April 2th 2013</small></h3>
<ul>
<li>Fix versioning string</li>
<li>Fix compatibility with older MySQL versions</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.2.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.2.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.2.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.2.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.1 <small>April 2th 2013</small></h3>
<ul>
<li>Fixed classnames and improved autoloaded to improve compatibility with older PHP versions</li>
<li>Show a warning if an insecure PHP version is used</li>
<li>Filesizes are displayed correctly</li>
<li>Fixed groups in usermanagement</li>
<li>Several Internet Explorer fixes</li>
<li>Use display-names in more places</li>
<li>Fix upgrading of cache</li>
<li>Fix navigation scrollbar for lots of apps</li>
<li>Fixed ETag handling to prevent wrong conflict files</li>
<li>Fix public link handling</li>
<li>Better indexes to improve performance</li>
<li>Several Windows server fixes</li>
<li>Fix renames of shared files</li>
<li>Fix PostgreSQL compatibility</li>
<li>Improve error reporting for app installation</li>
<li>Improved compatibility with Novell eDirectory</li>
<li>Several LDAP fixes</li>
<li>Improved sorting in usermanagement</li>
<li>Improved background jobs</li>
<li>Several CardDAV contacts fixes</li>
<li>Several mediaplayer fixes</li> 
<li>Fixes for text editor</li>
<li>Several lucene search fixes</li>
<li>Several smaller fixes</li>
<li>Contacts: SQL Injection (<a href="/security/advisory/?id=oC-SA-2013-012">oC-SA-2013-012</a>)</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-011">oC-SA-2013-011</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.1.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.1.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.1.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.1.tar.bz2.md5</a><br />


<h3>Version 5.0.0 <small>March 14th 2013</small></h3>
<ul>
<li>New design</li>
<li>Restore deleted files</li> 
<li>New fulltext search</li>
<li>Display names</li>
<li>New photo gallery</li>
<li>Improved calendar and contacts</li>
<li>Improved bookmarks</li>
<li>New documentation system</li>
<li>Improved file cache</li>
<li>Improved security checks</li>
<li>Security hardening in templates</li> 
<li>Security hardening: Implemented Content Security Policy</li>
<li>Better versioning of better autoexpire</li>
<li>Extended external storage</li>
<li>New OCS REST API support</li>
<li>Improved apps management</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-5.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.0.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-5.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.0.tar.bz2.md5</a><br />

<h3>Version 4.5.8 <small>March 14th 2013</small></h3>
<ul>
<li>Fix foldersize checks to validate zip input size</li>
<li>Offer download of shared dir as zip only if zip size limit is not exceeded</li>
<li>Escape more characters for LDAP search</li>
<li>Fix versioning together with real home directories</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-008">oC-SA-2013-008</a>)</li>
<li>Contacts: Bypass of file blacklist (<a href="/security/advisory/?id=oC-SA-2013-009">oC-SA-2013-009</a>)</li>
<li>user_migrate: Local file  disclosure (<a href="/security/advisory/?id=oC-SA-2013-010">oC-SA-2013-010</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.5.8.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.8.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.5.8.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.8.tar.bz2.md5</a><br />


<h3>Version 4.0.13 <small>March 14th 2013</small></h3>
<ul>
<li>Contacts: Bypass of file blacklist (<a href="/security/advisory/?id=oC-SA-2013-009">oC-SA-2013-009)</a></li>
<li>user_migrate: Local file  disclosure (<a href="/security/advisory/?id=oC-SA-2013-010">oC-SA-2013-010</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-4.0.13.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.13.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/owncloud-4.0.13.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.13.tar.bz2.md5</a><br />




<h3>Version 4.5.7 <small>Feb 20th 2013</small></h3>
<ul>
<li>Fix for 3rd party apps dropping the database</li>
<li>Fix SubAdmins management</li>
<li>Fix PHP warnings</li>
<li>Fix compatibility with some CIFS shares</li>
<li>More robust apps management</li>
<li>Remove not needed AWS tests</li>
<li>Improved mime type parsing</li>
<li>Several sharing fixes</li>
<li>Offer the option to change the password only supported by the backend</li>
<li>More robust auto language detection</li>
<li>Revoke DB rights on install only if the db is newly created</li>
<li>Fix rendering of database connection error page</li>
<li>LDAP: update quota more often</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-003">oC-SA-2013-003</a>)</li>
<li>Multiple CSRF vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-004">oC-SA-2013-004</a>)</li>
<li>PHP settings disclosure (<a href="/security/advisory/?id=oC-SA-2013-005">oC-SA-2013-005</a>)</li>
<li>Multiple code executions (<a href="/security/advisory/?id=oC-SA-2013-006">oC-SA-2013-006</a>)</li>
<li>Privilege escalation in the calendar application (<a href="/security/advisory/?id=oC-SA-2013-007">oC-SA-2013-007</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2.md5</a><br />



<h3>Version 4.0.12 <small>Feb 20th 2013</small></h3>
<ul>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-003">oC-SA-2013-003</a>)</li>
<li>Multiple CSRF vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-004">oC-SA-2013-004</a>)</li>
<li>Multiple code executions (<a href="/security/advisory/?id=oC-SA-2013-006">oC-SA-2013-006</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2.md5</a><br />


<h3>Version 4.5.6 <small>Jan 22th 2013</small></h3>
<ul>
<li>Improved language detection</li>
<li>Improved translations</li>
<li>Fix link to bugtracker</li>
<li>Several IE 6/7/8 fixes</li>
<li>SabreDAV updated to 1.6.6</li>
<li>Improved error reporting</li>
<li>Support special characters in mountpoint</li>
<li>Interpret https 403 and 401 as not authorized in user_webdavauth</li>
<li>Several fixes for special characters in files and folders</li>
<li>Improved PostgreSQL support</li>
<li>Check database names for valid characters</li>
<li>Fix default email address calculation</li>
<li>Remove debug output on send password page</li>
<li>Add SMTP port configuration option</li>
<li>Only show the max possible upload of 2GB on a 32 bit system</li>
<li>Show progress during file downloads</li>
<li>Security: Fix multiple XSS problems: <a href="/security/advisory/?id=oC-SA-2013-001">CVE-2013-0201,  CVE-2013-0202, CVE-2013-0203</a></li>
<li>Security: Fix Code execution in external storage: <a href="/security/advisory/?id=oc-sa-2013-002">CVE-2013-0204</a></li>
<li>Security: Removed remoteStorage app because of unfixed security problems.</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2.md5</a><br />


<h3>Version 4.0.11 <small>Jan 22th 2013</small></h3>
<ul>
<li>Security: Fix multiple XSS problems: <a href="/security/advisory/?id=oC-SA-2013-001">CVE-2013-0201,  CVE-2013-0202, CVE-2013-0203</a></li>
<li>Security: Removed remoteStorage app because of unfixed security problems.</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2.md5</a><br />

<h3>Version 4.5.5 <small>Dec 20th 2012</small></h3>
<ul>
<li>Show drag and drop shadow for Firefox</li>
<li>Fix Knowledgebase under certain conditions</li>
<li>Fix setting of sharing password</li>
<li>Fix setting of sharing password</li>
<li>Several sharing fixes</li>
<li>Fixversioning during sharing</li>
<li>Fix mounting of external filesystems especially CIFS</li>
<li>Fix several PHP warnings</li>
<li>Show /Shared as standard directory</li>
<li>Fix session management for running several ownClouds on the same host</li>
<li>Fix WebDAV quota enforement</li>
<li>Fix CalDAV with LDAP users</li>
<li>Better warning about missing dependencies</li>
<li>Add warning about conflicting WebDAV auth and LDAP backend</li>
<li>Restore send sharing link my email</li>
<li>Fix encoding problem with mounting of CIFS filesystems</li>
<li>Fix mimetype icons for new files</li>
<li>Fix the folder size calculation</li>
<li>Fix for deleting multiple files</li>
<li>Fix for controling the data dir with LDAP</li>
<li>Security: Auth bypass in user_webdavauth and user_ldap (<a href="/security/advisory/?id=oC-SA-2012-006">oC-SA-2012-006)</li>
<li>Security: XSS vulnerability in bookmarks (<a href="/security/advisory/?id=oC-SA-2012-007">oC-SA-2012-007)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2.md5</a>

<h3>Version 4.0.10 <small>Dec 20th 2012</small></h3>
<ul>
<li>Security: Auth bypass in user_webdavauth and user_ldap (<a href="/security/advisory/?id=oC-SA-2012-006">oC-SA-2012-006)</li>
<li>Security: XSS vulnerability in bookmarks (<a href="/security/advisory/?id=oC-SA-2012-007">oC-SA-2012-007)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2.md5</a>

<h3>Version 4.5.4 <small>Dec 3th 2012</small></h3>
<ul>
<li>Fix a regression for system where output buffering is disabled</li>
<li>Fix a problem with old file versions stored in the filesystem cache</li> 
<li>Fix group and subadmin ajax bug</li>
<li>Important LDAP fix</li>
<li>Improved Updater</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2.md5</a>


<h3>Version 4.5.3 <small>Nov 27th 2012</small></h3>
<ul>
<li>Fix the new from url button</li>
<li>Fix a memory overflow with downloading of big files via WebDAV</li>
<li>Better error output in case of DB problems</li>
<li>Fix problems with uploading files who have special characters in the name</li>
<li>Improved reverse proxy and load balancer support</li>
<li>Fix wrong folder size calculation</li>
<li>Improved share link generation</li>
<li>Fix the syncing of the Shared folder</li>
<li>Fix Sharing by link from within Shared folder</li>
<li>Several LDAP integration fixes</li>
<li>Fix support for PostgreSQL </li>
<li>Several WebDAV fixes</li>
<li>Fix drag and drop uploading</li>
<li>Improved translations</li>
<li>Several Gallery fixes</li>
<li>Several Contacts fixes</li>
<li>Smaller fixes</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2.md5</a>

<h3>Version 4.5.2 <small>Nov 14th 2012</small></h3>
<ul>
<li>Fix syncing of shared folder</li>
<li>Various sharing bugs fixed</li>
<li>Fix bug with deleting users</li>
<li>Fix check if resharing is allowed</li>
<li>Fix webdavauth app</li>
<li>Several ldap fixes</li>
<li>Fix data migration</li>
<li>Fix folder uploads</li>
<li>Fix generatino of etags</li>
<li>Fix user specific mount configuration</li>
<li>Several PostgreSQL fixes</li>
<li>Improved performance of file updates</li>
<li>Fix some php warnings</li>
<li>Fix filesize calculation</li>
<li>Add visual feedback if password is set</li>
<li>Various smaller fixes</li>
<li>Several critical security fixes</li>
<li>XSS vulnerability in user_webdavauth (<a href="/security/advisory/?id=oC-SA-2012-003">oC-SA-2012-003</a>)</li>
<li>Code Execution in /lib/migrate.php (<a href="/security/advisory/?id=oC-SA-2012-004">oC-SA-2012-004</a>)</li>
<li>Code Execution in /lib/filesystem.php (<a href="/security/advisory/?id=oC-SA-2012-005">oC-SA-2012-005</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2.md5</a>

<h3>Version 4.0.9 <small>Nov 14th 2012</small></h3>
<ul>
<li>Several critical security fixes</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2012-001">oC-SA-2012-001</a>)</li>
<li>Timing attack in the "Lost Password" implementation (<a href="/security/advisory/?id=oC-SA-2012-002">oC-SA-2012-002</a>)</li>
<li>Code Execution in /lib/migrate.php (<a href="/security/advisory/?id=oC-SA-2012-004">oC-SA-2012-004</a>)</li>
<li>Code Execution in /lib/filesystem.php (<a href="/security/advisory/?id=oC-SA-2012-005">oC-SA-2012-005</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2.md5</a>

<h3>Version 4.5.1 <small>Oct 24th 2012</small></h3>
<ul>
	<li>Fix path encoding in breadcrumb</li>
	<li>Fix sharing of files with special characters</li>
	<li>Fix upercase/lowercase probelm in usernames with WebDAV</li>
	<li>Fix LDAP plugin with Postgres</li>
	<li>Fix userID migration</li>
	<li>Fix sharing of mounted Files</li>
	<li>Delete userfiles after deleting a user</li>
	<li>Make Webinterface work with nonstandard path</li>
	<li>Fix retrieval of Quota, Email via LDAP</li>
	<li>Show a warning in installer if .htaccess is not working</li>
	<li>Fix Shared folder caching</li>
	<li>Increase security by using openssl random number generator</li>
	<li>Fix syncing of rollback files</li>
	<li>Fix the swift files backend</li>
	<li>Disallow user to delete own account</li>
	<li>Security: Fix multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2012-001">oC-SA-2012-001</a>)</li>
	<li>Security: Fix a timing attack in the "Lost Password" implementation (<a href="/security/advisory/?id=oC-SA-2012-002">oC-SA-2012-002</a>)</li>
	<li>Various smaller fixes</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2.md5</a>
<h3>Version 4.5.0 <small>Oct 10th 2012</small></h3>
<ul>
	<li>Faster Syncing</li>
	<li>Sub Administrators</li>
	<li>GUI for mounting of external storage</li>
	<li>Improved File Versioning</li>
	<li>Enhanced Sharing</li>
	<li>Reworked LDAP</li>
	<li>Big File Chunking</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2.md5</a>
<h3>Version 4.0.8 <small>Oct 10th 2012</small></h3>
<ul>
	<li>Show Login Button when user and password are autocompleted</li>
	<li>Sanitize LDAP base, user and groups</li>
	<li>Security: Fix for insufficiently Random Values (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2008-4107&type=Code">CVE-2008-4107</a>)</li>
	<li>Security: Fixed multiple XSS vulnerabilities (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-5056&type=Code">CVE-2012-5056</a>)</li>
	<li>Security: Fixed a https header injection (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-5057&type=Code">CVE-2012-5057</a>)</li>
	<li>Security: Fixed an Auth bypass in /lib/base.php (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-5336&type=Code">CVE-2012-5336</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2.md5</a>
<h3>Version 4.0.7 <small>Aug 15th 2012</small></h3>
<ul>
	<li>Show Login Button when user and password are auto-completed</li>
	<li>Sanitize LDAP base, user and groups</li>
	<li>Fix non active Adressbooks</li>
	<li>Calendar: Remove double html encoding</li>
	<li>Fix label for versioning in admin settings</li>
	<li>Add parent directory into filecache if it doesn't exist</li>
	<li>Handle non writable files correctly</li>
	<li>Disable webfinger completely if not activated</li>
	<li>Security: Disable user listings in DAV (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4390&type=Code">CVE-2012-4390</a>)</li>
	<li>Security: Check file blacklist for file renames (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4389&type=Code">CVE-2012-4389</a>)</li>
	<li>Security: CSRF fix for appconfig.php (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4391&type=Code">CVE-2012-4391</a>)</li>
	<li>Security: Validate cookie to prevent auth bypasses (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4392&type=Code">CVE-2012-4392</a>)</li>
	<li>Special thanks to Julien Cayssol for reporting several security problems</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2.md5</a>
<h3>Version 4.0.6 <small>Aug 1th 2012</small></h3>
<ul>
	<li>More robust LDAP integration during unexpected collisions</li>
	<li>Fix sharing for users with @ in username</li>
	<li>Additional error handling for emailing of private links</li>
	<li>Cleanup old session files</li>
	<li>Fix user space calculation</li>
	<li>Fix Ampache authentication</li>
	<li>Remove delete tipsy if file is deleted</li>
	<li>Don't delete lot's of session files during DAV requests</li>
	<li>Fix error when no adressbook is created</li>
	<li>Check if php-ldap is installed</li>
	<li>Security: Check for Admin user in appconfig.php (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4752&type=Code">CVE-2012-4752</a>)</li>
	<li>Security: Several CSRF security fixes (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4393&type=Code">CVE-2012-4393</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2.md5</a>
<h3>Version 4.0.5 <small>July 20th 2012</small></h3>
<ul>
	<li>Fix remember the username and autologin</li>
	<li>Offer an option to allow sharing outside the group.</li>
	<li>Fix for birthday format</li>
	<li>Fixes for several encoding fixes for unicode characters</li>
	<li>Fix invalid filesystem cache in the sharing folder</li>
	<li>Several calendar and contacts fixes</li>
	<li>Fix sending of emails</li>
	<li>Several fixes in the system log</li>
	<li>Several fixes for the external filesystem feature</li>
	<li>Security: Fix a reflected XSS (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4394&type=Code">CVE-2012-4394</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2.md5</a>
<h3>Version 4.0.4 <small>June 28th 2012</small></h3>
<ul>
	<li>Fix assigning several groups to a user.</li>
	<li>Fix LDAP connector with AD servers</li>
	<li>Conserve some memory in Contacts App</li>
	<li>Fix a warning in Gallery when deleting files</li>
	<li>Fix a bug in the music scanner</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2.md5</a>
<h3>Version 4.0.3 <small>June 23rd 2012</small></h3>
<ul>
	<li>Added a check if the .htaccess file is working and the data directory is protected or not.</li>
	<li>Added a check if a user is allowed to edit a bookmark or not.</li>
	<li>Fix the bookmarklet</li>
	<li>Fix the timezone in the datepicker</li>
	<li>Fix mimetype detection for cdr files</li>
	<li>Fix the filecache for the /Shared folder</li>
	<li>Fix a potential data corruption bug in the encryption app</li>
	<li>Don't show other users filenames during filesystem cache rebuild</li>
	<li>Security: Fix several XSS bugs (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4395&type=Code">CVE-2012-4395</a>)</li>
	<li>Performance improvements for WebDAV and Desktop Syncing</li>
	<li>Fix quota calculation</li>
	<li>Improve the LDAP integration and group management</li>
	<li>Fix problems with the pdf viewer</li>
	<li>Fix user account migration</li>
	<li>Implement several CSRF security checks</li>
	<li>Fix a gallery bug where first picture is repeated in the last picture.</li>
	<li>Lot's of calendar fixes</li>
	<li>Fix problem with "/" in filenames</li>
	<li>Updated translations</li>
	<li>Several fixes in Contacts</li>
	<li>Lot's of fixes in the Tasks App</li>
	<li>Fix a bug in the filesystem cache with ghost entries</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2.md5</a>
<h3>Version 4.0.2 <small>June 11th 2012</small></h3>
<ul>
	<li>Lot's of gallery fixes</li>
	<li>More 3rd party apps visible</li>
	<li>Fixed update notifications</li>
	<li>Several calendar fixes</li>
	<li>Several XSS fixes in calendar (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4396&type=Code">CVE-2012-4396)</a></li>
	<li>Several improvements in contacts</li>
	<li>Fix infinite redirect during setup for windows hosts</li>
	<li>Several XSS fixes in contacts (<a href="httpss://github.com/owncloud/security-advisories/search?q=CVE-2012-4396&type=Code">CVE-2012-4396</a>)</li>
	<li>New user password salting</li>
	<li>Several LDAP fixes</li>
	<li>Fix duplicate emails in sharing</li>
	<li>Improved compatibility with Android browser</li>
	<li>Fixed calendar links</li>
	<li>Fixed logging</li>
	<li>Allow "/" in filenames</li>
	<li>Updated translations</li>
	<li>Fixed reverse proxy and custom hosts configuration</li>
	<li>Fix contact photo editing</li>
	<li>Don't allow renaming, deleting and resharing of shared folder</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2.md5</a>
<h3>Version 4.0.1 <small>June 4th 2012</small></h3>
<ul>
	<li>Verify if user exists when loggin (oc-863)</li>
	<li>More efficient log file handling</li>
	<li>PDO requirement check</li>
	<li>Check if apps folder is writable</li>
	<li>prevent division by zero problem during output of free space</li>
	<li>better mysql error message</li>
	<li>correctly configure ldap group backend (oc-887)</li>
	<li>sort users and groups (oc-779)</li>
	<li>LDAP. correctly handle group filter (oc-867)</li>
	<li>try to switch magic quotes of globally</li>
	<li>fix ategory error reporting (oc-874)</li>
	<li>correctly handle reverse proxy / load balancer httpss handling</li>
	<li>prevent session already started warning</li>
	<li>fix the files breadcrumb</li>
	<li>don't try to use smtp auth if config files says no</li>
	<li>fix versioning path</li>
	<li>security: fix a XSS problem in calendar</li>
	<li>make LDAP pqsql compatible</li>
	<li>fix pqsql database migration</li>
	<li>fix ldap config interface</li>
	<li>support for LDAP "member"</li>
	<li>don't hardcode /tmp</li>
	<li>fix potential security problem for requested apps parameter</li>
	<li>fix notes in contacts properly</li>
	<li>fix timezone detection</li>
	<li>fix interti_id in calendar</li>
	<li>set DB prefix for pqsql</li>
	<li>security: fix a XSS problem in contacts</li>
	<li>correctly encode caldav link</li>
	<li>allow longer path in gallery</li>
	<li>disable not compatible apps during upgrade</li>
	<li>fix HEAD request for downloads</li>
	<li>fix private link sharing via email</li>
	<li>use UTC as default timezone</li>
	<li>style fixes for tasks app</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2.md5</a>
<h3>Version 4.0.0 <small>May 22nd 2012</small></h3>
<ul>
	<li>File Encryption</li>
	<li>File Versioning</li>
	<li>Mounting of external Filesystems (experimental)</li>
	<li>TODOs App</li>
	<li>Drag &amp; Drop File Uploading</li>
	<li>Shared Calendars</li>
	<li>Calendar categories</li>
	<li>Hugely improved contacts app including groups</li>
	<li>Improved WebDAV, CalDAV, CardDAV compatibility</li>
	<li>Movable Apps</li>
	<li>Improved External App</li>
	<li>Improved Sharing of Files</li>
	<li>Overall Performance Improvements</li>
	<li>System/User Exporting/Importing</li>
	<li>User/Groups support via LDAP/AD</li>
	<li>Viewer for ODF Files</li>
	<li>Improved Photo Gallery</li>
	<li>Improved installation of 3rd Party Apps</li>
	<li>Logging via syslog</li>
	<li>New public API for App developers</li>
	<li>Lots of bug fixes, smaller enhancements and UX improvements.</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-4.0.0.tar.bz2">https://owncloud.org/releases/owncloud-4.0.0.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-4.0.0.tar.bz2.md5">https://owncloud.org/releases/owncloud-4.0.0.tar.bz2.md5</a>
<h3>Version 3.0.3 <small>April 27th 2012</small></h3>
<ul>
	<li>Security: Several CSRF fixes</li>
	<li>Security: .htaccess uploading blacklist</li>
	<li>Backport link in the Help center to the online documentatio</li>
	<li>Backport link in the Help center to the "Big Files" howto</li>
	<li>Check if JSon module is installed</li>
	<li>Check if GD module is installed</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.3.tar.bz2">https://owncloud.org/releases/owncloud-3.0.3.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.3.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.3.tar.bz2.md5</a>
<h3>Version 3.0.2 <small>April 11th 2012</small></h3>
<ul>
	<li>Drag and Drop fixed</li>
	<li>Fixed Sharing for LDAP Users</li>
	<li>Fix loading of LDAP Plugin</li>
	<li>Security: Make password hashes more random</li>
	<li>Security: Fix a XXS problem</li>
	<li>Multiple bugfixes</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.2.tar.bz2">https://owncloud.org/releases/owncloud-3.0.2.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.2.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.2.tar.bz2.md5</a>
<h3>Version 3.0.1 <small>April 3rd 2012</small></h3>
<ul>
	<li>Fixes for big file uploads</li>
	<li>Performance improvements for WebDAV</li>
	<li>IE8 fixes</li>
	<li>Several small bugfixes</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.1.tar.bz2">https://owncloud.org/releases/owncloud-3.0.1.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.1.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.1.tar.bz2.md5</a>
<h3>Version 3.0 <small>January 31st 2012</small></h3>
<ul>
	<li>Text editor</li>
	<li>Improved photo gallery</li>
	<li>Improved calendar view</li>
	<li>PDF viewer</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.tar.bz2">https://owncloud.org/releases/owncloud-3.0.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.tar.bz2.md5</a>
