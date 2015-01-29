<div class="page-header">
  <h1>ownCloud Desktop Client Changelog</h1>
</div>
<h3>Release 1.7.1 <small>Dec 18th 2014</small></h3>
<ul>
<li>Documentation fixes and updates</li>
<li>Nautilus Python plugin fixed for Python 3</li>
<li>GUI wording fixes plus improved log messages</li>
<li>Fix hiding of the database files in the sync directories</li>
<li>Compare http download size with the header value to avoid broken downloads, bug #2528</li>
<li>Avoid initial ETag fetch job at startup, which is not needed.</li>
<li>Add chunk size http header to PUT requests</li>
<li>Fixed deteteCookie method of our CookieJar, fix for Shibboleth</li>
<li>Added fallback for distros where XDG_RUNTIME_DIR is undefined</li>
<li>Fix the setup wizard, bug #1989, #2264</li>
<li>Fix scheduling of ETag check jobs, bug #2553</li>
<li>Fix to avoid syncing more than one folder at a time, bug #2407</li>
<li>Use fife minutes timeout for all network jobs</li>
<li>Cleanup for Folderwizard wording</li>
<li>Improve journal check: Remove corrupted journal files, bug #2547</li>
<li>Fix item count in progress dialog for deletes, bug #1132</li>
<li>Display correct file count on deletion (#1132)</li>
<li>Fix reinitializing the folder using the wizard in certain cases (#2606)</li>
<li>Mac OS: Fixed branding of the pkg file</li>
<li>Mac OS: Fix display of overlay icons in certain situations (#1132)</li>
<li>Mac OS: Use a bundled version of OpenSSL (#764, #2600, #2510)</li>
<li>Win32: improved filesystem watcher</li>
<li>Win32: Improve threading with shell integration</li>
<li>Win32: Upgraded to OpenSSL 1.0.1j</li>
<li>Win32: Improve reliability of Installer, fix removal of Shell Extensions</li>
</ul>
<h3>Release 1.7.0 <small>Nov 7th 2014</small></h3>
<ul>
<li>oC7 Sharing: Handle new sharing options of ownCloud 7 correctly.</li>
<li>Added Selective sync: Ability to unselect server folders which are</li>
<li>excluded from syncing, plus GUI and setup GUI</li>
<li>Improved local change detection: consider file size, detect files</li>
<li>with ongoing changes and do not upload immediately</li>
<li>Improved HTTP request timeout handler: all successful requests reset the timeout counter</li>
<li>Improvements for syncing command line tool: netrc support, improved SSL support, non interactive mode</li>
<li>Added a socket based API to provide file management shells with status
    information about the sync status of files. That is a prerequisite for the overlay icons in the file managers.</li>
<li>Permission system: ownCloud 7 delivers file and folder permissions, added ability to deal with it for shared folders and more.</li>
<li>Ignore handling: Do not recurse into ignored or excluded directories</li>
<li>Major sync journal database improvements for more stability and performance</li>
<li>New library interface to sqlite3</li>
<li>Improve "resync handling" if errors occur</li>
<li>Blacklist improvements</li>
<li>Improved logging: more useful meta info, removed noise</li>
<li>Updated to latest Qt5 versions on Windows and OS X</li>
<li>OS X: Sparkle update to provide pkg format properly</li>
<li>OS X: Change distribution format from dmg to pkg with new installer.</li>
<li>Win: Fix handling of filenames with trailing dot or space</li>
</ul>

<h3>Release 1.6.4 <small>Oct 23th 2014</small></h3>
<ul>
<li>Fix startup logic, fixes bug #1989</li>
<li>Fix raise dialog on X11</li>
<li>Win32: fix overflow when computing the size of file &gt; 4GiB</li>
<li>Use a fixed function to get files modification time, the original one was broken for certain timezone issues, see core bug #9781 for details</li>
<li>Added some missing copyright headers</li>
<li>Avoid data corruption due to wrong error handling, bug #2280</li>
<li>Do improved request timeout handling to reduce the number of timed out jobs, bug #2155</li>
</ul>

<h3>Release 1.6.3 <small>Sep 3rd 2014</small></h3>
<ul>
<li>Fixed updater on OS X</li>
<li>Fixed memory leak in SSL button that could lead to quick memory draining</li>
<li>Fixed upload problem with files &gt;4 GB</li>
<li>MacOSX, Linux: Bring Settings window to front properly</li>
<li>Branded clients: If no configuration is detected, try to import the data from a previously configured ownCloud Server installation.</li>
</ul>

<h3>Release 1.6.2 <small>Jul 28th 2014</small></h3>
<ul>
<li>Limit the HTTP buffer size when downloading to limit memory consumption.</li>
<li>Another small mem leak fixed in HTTP Credentials.</li>
<li>Fix local file name clash detection for MacOSX.</li>
<li>Limit maximum wait time to ten seconds in network limiting.</li>
<li>Fix data corruption while trying to resume and the server does not support it.</li>
<li>HTTP Credentials: Read password from legacy place if not found.</li>
<li>Shibboleth: Fix the waiting curser that would not disapear (#1915)</li>
<li>Limit memory usage to avoid mem wasting and crashes</li>
<li>Propagator: Fix crash when logging out during upload (#1957)</li>
<li>Propagator_qnam: Fix signal slot connection (#1963)</li>
<li>Use more elaborated way to detect that the server was reconfigured (#1948)</li>
<li>Setup Wizard: Reconfigure Server also if local path was changed (#1948)</li>
</ul>

<h3>Release 1.6.1 <small>Jun 26th 2014</small></h3>

<ul>
<li>Fix 'precondition failed' bug with broken upload</li>
<li>Fix 'precondition failed' bug with broken upload</li>
<li>Fix openSSL problems for windows deployment</li>
<li>Fix syncing a folder with '#' in the name</li>
<li>Fix #1845: do not update parent directory etag before sub directories are removed</li>
<li>Fix reappearing directories if dirs are removed during its upload</li>
<li>Fix app version in settings dialog, General tab</li>
<li>Fix crash in FolderWizard when going offline</li>
<li>Shibboleth fixes</li>
<li>More specific error messages (file remove during upload, open local sync file)</li>
<li>Use QSet rather than QHash in SyncEngine (save memory)</li>
<li>Fix some memory leaks</li>
<li>Fix some thread race problems, ie. wait for neon thread to finish before the propagator is shut down</li>
<li>Fix a lot of issues and warnings found by Coverity</li>
<li>Fix Mac some settings dialog problems</li>
</ul>

<h3>Release 1.6.0 <small>May 30th 2014</small></h3>

<ul>
<li>Minor GUI improvements</li>
<li>Qt5 compile issues fixed</li>
<li>Ignore sync log file in filewatcher</li>
<li>Install libocsync to private library dir and use rpath to localize</li>
<li>Fix reconnect after server disconnect</li>
<li>Fix "unknown action" display in Activity window</li>
<li>Fix memory leaks</li>
<li>Respect XDG_CONFIG_HOME environment var</li>
<li>Handle empty fileids in the journal correctly</li>
<li>Add abilility to compile libowncloudsync without GUI dependendy</li>
<li>Fix SSL error with previously-expired CAs on Windows</li>
<li>Fix incorrect folder pause state after start</li>
<li>Fix a couple of actual potential crashes</li>
<li>Improve Cookie support (e.g. for cookie-based load-balancers)</li>
<li>Introduce a general timeout of 300s for network operations</li>
<li>Improve error handling, blacklisting</li>
<li>Job-based change propagation, enables faster parallel up/downloads (right now only if no bandwidth limit is set and no proxy is used)</li>
<li>Significantly reduced CPU load when checking for local and remote changes</li>
<li>Speed up file stat code on Windows</li>
<li>Enforce Qt5 for Windows and Mac OS X builds</li>
<li>Improved owncloudcmd: SSL support, documentation</li>
<li>Added advanced logging of operations (file .???.log in sync directory)</li>
<li>Avoid creating a temporary copy of the sync database (.ctmp)</li>
<li>Enable support for TLS 1.2 negotiation on platforms that use Qt 5.2 or later</li>
<li>Forward server exception messages to client error messages</li>
<li>Mac OS X: Support Notification Center in OS X 10.8+</li>
<li>Mac OS X: Use native settings dialog</li>
<li>Mac OS X: Fix UI inconsistencies on Mavericks</li>
<li>Shibboleth: Warn if authenticating with a different user</li>
<li>Remove vio abstraction in csync</li>
<li>Avoid data loss when a client file system is not case sensitive</li>
</ul>

<h3>Release 1.5.4 <small>April 11th 2014</small></h3>

<ul>
<li>Fix security issue on Windows and Mac OS X. No functional changes</li>
</ul>

<h3>Release 1.5.3 <small>March 10th 2014</small></h3>

<ul>
<li>Fix usage of proxies after first sync run (#1502, #1524, #1459, #1521)</li>
<li>Do not wipe the credentials from config for reconnect (#1499, #1503)</li>
<li>Do not erase the full account config if an old version of the client stored
    the password (related to above)</li>
<li>Fix layout of the network tab (fixes #1491)</li>
<li>Handle authentication requests by a Shibboleth IdP</li>
<li>Shibboleth: If no connection is available, don't open the login window</li>
<li>[Packaging] Debian/Ubuntu: ship sync-exclude.lst</li>
<li>[Packaging] Fix issues with access to gnome keychain in Fedora and RHEL6</li>
<li>[Packaging] Ensure all sub packages get updated</li>
<li>[Packaging] Fix incorrect path in desktop file (RHEL6/CentOS6)</li>
</ul>

<h3>Release 1.5.2 <small>February 26th 2014</small></h3>

<ul>
<li>Fix behavior when attempting to rename Shared folder</li>
<li>Fix potential endless sync loops on Mac OS (#1463)</li>
<li>Fix potential crash when pausing during update phase (#1442)</li>
<li>Fix handing of shared directories</li>
<li>Fix online state handling (#1441, #1459)</li>
<li>Fix potential crash in c_iconv on Mac OS</li>
<li>Fix certificate chain display in SSLButton</li>
<li>Fix sporadicly appearing multiple auth prompts on sign-in</li>
<li>Show correct state icon in Account Settings right away</li>
<li>Re-fetch content that gets deleted from read only shared directories</li>
<li>Do not store the password in the config file, erase existing ones (#1469)</li>
<li>Shibboleth: Close browser window after login</li>
<li>Shibboleth: Proper invalidation if timeout during sync</li>
<li>Shibboleth: Do not pop up IdP login immediately when modifying account</li>
<li>Shibboleth: Avoid auth on restart by storing cookies in the wallet</li>
<li>Fix license headers</li>
</ul>

<h3>Release 1.5.1 <small>February 14th 2014</small></h3>

<p><small>Please note that for the time being csync and mirall/ownCloud Client (oCC) are going to be released together for now. In the future, separated releases will be possible.</small></p>
<ul>
  <li>Added an auto updater that updates the client if a more recent version was found automatically (Windows, Mac OS X)</li>
  <li>Added a button to the account dialog that gives information about the encryption layer used for communication, plus a certificate information widget</li>
  <li>Preserve the permission settings of local files rather than setting them to a default (Bug #820)</li>
  <li>Handle windows lnk files correctly (Bug #1307)</li>
  <li>Detect removes and renames in read only shares and restore the gone away files. (Bug #1386)</li>
  <li>Fixes sign in/sign out and password dialog. (Bug #1353) <li>Fixed error messages (Bug #1394)</li>
  <li>Lots of fixes for building with Qt5 <li>Changes to network limits are now also applied during a sync run</li>
  <li>Fixed mem leak after via valgrind on Mac</li>
  <li>Imported the ocsync library into miralls repository.  Adopted all build systems and packaging to that.</li>
  <li>Introduce a new linux packaging scheme following the debian upstream scheme</li>
  <li>Use a refactored Linux file system watcher based on inotify, incl. unit tests</li>
  <li>Wizard: Gracefully fall back to HTTP if HTTPS connection fails, issuing a warning</li>
  <li>Fixed translation misses in the propagator</li>
  <li>Fixes in proxy configuration</li>
  <li>Fixes in sync journal handling</li>
  <li>Fix the upload progress if the local source is still changing when the upload begins.</li>
  <li>Add proxy support to owncloud commandline client</li>
  <li>NSIS fixes</li>
  <li>A lot of other fixes and minor improvements</li>
  <li>Improve Qt5 compatability</li>
</ul>

<h3>Release 1.5.0 <small>December 12th 2013</small></h3>

<p>This is a bugfix release with fixes for the 1.5 line. Update is recommended.</p>

<h4>Mirall/ownCloud Client, version 1.5.0</h4>
csync 0.91.4 required
<ul>
<li>New owncloud propagator that skips the vio abstraction layer</li>
<li>Add owncloudcmd to replace the ocsync command line tool</li>
<li>Localize Windows installer</li>
<li>Allow to sign in and out</li>
<li>Ask for password if missing</li>
<li>Introduce activity view</li>
<li>Introduce black list for files which could not be synced</li>
<li>Enabling accessibility by shipping accessibility enables on OS X (#736)</li>
<li>Toggle Settings window when clicking on systray icon on Win and KDE (#896)</li>
<li>FolderWizard: Sanitize error detection (#1201)</li>
<li>Set proper enable state of blacklist button after the dialog was opened</li>
<li>Set proper tooltips in blacklist</li>
<li>Translatable error messages for file errors</li>
<li>Add man page for owncloudcmd (#1234)</li>
<li>Don't close setup wizard when the initial sync run is started</li>
<li>Close the sync journal if a folder gets removed (#1252)</li>
<li>Activity: Avoid horizontal scrollbar (#1213)</li>
<li>Fix crash (#1229)</li>
<li>Resize wizard appropriately (#1130)</li>
<li>Fix account identity test (#1231)</li>
<li>Maintain the file type correctly</li>
<li>Display rename-target in sync protocol action column</li>
<li>Let recursive removal also remove the top dir</li>
<li>If item is a directory, remove its contents from the database as well (#1257)</li>
<li>Install headers for owncloudsync library</li>
<li>Fix opening the explorer with a selected file in Windows (#1249)</li>
<li>Add build number into versioning scheme</li>
<li>Windows: Fix rename of temporary files</li>
<li>Windows: Fix move file operation</li>
</ul>
<h4>ocsync, version 0.91.4, ownCloud release</h4>
<ul>
<li>Fix progress bar on win32</li>
<li>Fix network rate limiting on win32</li>
<li>Do not check for etag during failing requests</li>
<li>Start quota timer only after the predecessor returned</li>
<li>Remove tmp files in case of certain download problems</li>
<li>Some valgrind fixes</li>
<li>Theming fix: button behaviour</li>
<li>Fix a case where a sync loop could happen.</li>
<li>Multi-linguar installer</li>
<li>Fix handling of quotes in etags written by older ownClouds</li>
<li>Fix errno handling in update phase</li>
<li>Make csync compile on FreeBSD</li>
<li>Minor cleanups.</li>
<li>have translatable error message for indiv. file errors.</li>
<li>Use uint64_t for inode on win32 to fix a type glitch.</li>
<li>Add test that directrories are properly moved.</li>
<li>Handle symlinks correctly.</li>
<li>Do not longer recurse into ignored directories in update phase.</li>
<li>Added proper symlink detection for win32 platform.</li>
<li>Close database correctly to fix a potential crash (mirall#1229)</li>
<li>Handle invalid inodes correctly.</li>
<li>Use lstat rather than stat to detect symlinks correctly.  (core#6146)</li>
<li>fix ascii to int conversion for large numbers.</li>
<li>add support for file ids, needed to detect server side moves.</li>
<li>removed unused code, ie. database writing code that went to mirall.</li>
<li>add functions to query the database by fileid.</li>
<li>add functions to read fileids from PUT replies.</li>
<li>add server side move detection.</li>
<li>enhanced test scripts</li>
<li>Remove ne_sock_init and ne_sock_exit from owncloud module (mirall#1115)</li>
<li>Renamed 'md5' to 'etag' in code identifiers to avoid confusion.</li>
<li>add new state EVAL_RENAME </li>
<li>link the owncloud module directly rather than dl-loading it.</li>
<li>add a content type header 'application/octet-stream' to PUTs.</li>
<li>remove -gzip from etag header if its there. (mirall#1195)</li>
<li>Many minor fixes, refactorings and improvements.</li>
</ul>
<hr />
<h4>Mirall/ownCloud Client, version 1.4.2</h4>
csync 0.90.4 required
<ul>
<li>Do not show the warning icon in the tray (#944)</li>
<li>Fix manual proxy support when switching (#1016)</li>
<li>Add folder column to detailed sync protocol (#1037)</li>
<li>Fix possible endless loop in inotify (#1041)</li>
<li>Do not elide the progress text (#1049)</li>
<li>Fix high CPU load (#1073)</li>
<li>Reconnect if network is unavailable after startup (#1080)</li>
<li>Ensure paused folder stays paused when syncing with more than one folder (#1083)</li>
<li>Don't show desktop notification when the user doesn't want to (#1093)</li>
<li>System tray: Avoid quick flickering up of the ok-icon for the sync prepare state</li>
<li>Progress: Do not show progress if nothing is transmitted</li>
<li>Progress: Show number of deletes.</li>
<li>Fix pause/resume behaviour (#1105)</li>
</ul>
<h4>ocsync, version 0.90.4, ownCloud release</h4>
<ul>
<li>Disable comparison of local inode values for the win32 platform, workaround for bug #779</li>
<li>Count renamed and deleted files for progress information.</li>
<li>Do not reset csync internal error state in helper funcs
    and do not overwrite error messages.<br/>
    That fixes error reporting to the client.</li>
<li>Disable check on inodes on all platforms as inodes are not
    reliable.</li>
<li>Fix resuming after user aborting the sync process.</li>
<li>Enabled HBF debugging permanently.</li>
</ul>
<hr />

<h3>Release 1.4.1 September 26th 2013</small></h3>
<p>This is a bugfix release with fixes for the 1.4 line. Update is recommended.</p>

<h4>Mirall/ownCloud Client, version 1.4.1</h4>
csync 0.90.2 required
<ul>
<li>Fixed app name for ownCloud.</li>
<li>Translation and documentation fixes.</li>
<li>Fixed error display in settings/status dialog, displays multi line error messages now correctly.</li>
<li>Wait up to 30 secs before complaining about missing systray Fixes bug #949</li>
<li>Fixed utf8 issues with basic auth authentication, fixes bug #941</li>
<li>Fixed remote folder selector, avoid recursive syncing, fixes bug #962</li>
<li>Handle and display network problems at startup correctly.</li>
<li>Enable and disable the folder watcher during syncs correctly.</li>
<li>Fix setting of thread priority.</li>
<li>Fixed file size display.</li>
<li>Fixed various folder wizard issues, bug #992</li>
<li>Made "Sync started" message optional, fixes bug #934</li>
<li>Fixed shutdown, avoid crashed config on win32, fixes bug #945</li>
<li>Pop up config wizard if no server url is configured, fixes bug #1018</li>
<li>Settings: calculate sidebar width dynamically, fixes bug #1020</li>
<li>Fixed a crash if sync folders were removed, fixes bug #713</li>
<li>Do proper resync after network disconnect, fixes bug #1007</li>
<li>Various minor code fixes</li>
</ul>
<h4>ocsync, version 0.90.2, ownCloud release</h4>
<ul>
<li>Disable comparison of local inode values for the win32 platform, workaround for bug #779</li>
<li>detect if server does not send an etag after an upload completed.</li>
<li>fix crash in case of network timeout, reported as https://github.com/owncloud/mirall/issues/1010</li>
<li>compile and cmake fixes for win32</li>
<li>fixed behaviour of csync_exclude</li>
<li>documentation and spelling fixes.</li>
</ul>
<hr />

<h3>Release 1.4.0 September 4th 2013</small></h3>

<p>This release massively improves user feedback, adds several settings and fixes bugs. Update is recommended.</p>

<h4>Mirall/ownCloud Client, version 1.4.0</h4>
csync 0.90.0 required
<ul>
  <li>New Scheduler: Only sync when there are actual changes in the server</li>
  <li>Add a Settings Dialog, move Proxy Settings there</li>
  <li>Transform folder Status Dialog into Account Settings, provide feedback via context menu</li>
  <li>Add Bandwidth Control</li>
  <li>Add a visual storage/quota indicator (context menu and account settings)</li>
  <li>Add progress indication (context menu and account settings)</li>
  <li>Introduce a sync history, persisting results across syncs</li>
  <li>Move ability to switch to mono icons from a switch to a Settings option</li>
  <li>Add "Launch on System Startup" GUI option</li>
  <li>Add "Show Desktop Nofications" GUI option (enabled by default)</li>
    top optionally disable sync notifications</li>
  <li>Add Help item, pointing to online reference</li>
  <li>Implement graphical selection of remote folders in FolderWizard</li>
  <li>Allow custom ignore patterns</li>
  <li>Add an editor for ingore patterns</li>
  <li>ALlow to flag certain ignore patterns as discardable</li>
  <li>Ensure to ship with all valid translations</li>
  <li>Progress Dialog now preserves the last syncned items across sync runs</li>
  <li>Split Setup Wizard into multiple pages again</li>
  <li>Implement "--logfile -" to log to stdout</li>
  <li>Add preliminary support for Shibboleth authentication</li>
  <li>Linux: Provide more icon sizes</li>
  <li>Linux: Do not trigger notifier on ignored files</li>
  <li>Windows: Reduce priority of CSync thread</li>
  <li>Documentation: Prem. updates to reflect UI changes</li>
  <li>Significant code refactorings</li>
  <li>Require Qt 4.7</li>
  <li>Known issue: Under certain conditions, a file will only get uploaded after up to five minutes</li>
</ul>
<h4>ocsync, version 0.90.0, ownCloud release</h4>
<ul>
  <li>Added API to get progress information from csync.</li>
  <li>Added c_rename function to csync std.</li>
  <li>Fix: Do renames of files before any puts.</li>
  <li>Improved database integrity checks.</li>
  <li>Improvements of database writing efficiendy.</li>
  <li>Fix: stat file on win32 even if its opened by application.</li>
  <li>httpbf: configurable block size and threshold.</li>
  <li>Many fixes found by a Coverity check.</li>
  <li>Fix: use correct stat struct on all platforms</li>
  <li>Fix: download resuming.</li>
  <li>ownCloud module: Bandwith limitation added.</li>
  <li>Added ability to remove ignored files automatically.</li>
  <li>Fix: Use int64_t and friends</li>
  <li>Fix: Removed all compile warnings.</li>
  <li>Left excluded files and links in csync's tree to be able to show.</li>
    them to the user.</li>
  <li>Add OC-Total-Length header for better quota handling.</li>
  <li>Report inbetween progress</li>
</ul>

<hr />

<h3>Release 1.3.0 <small>June 25th 2013</small></h3>
<p>This Release introduces big file handling and resuming and introduces significant improvements and fixes. Update is recommended</p>

<h4>Mirall/ownCloud Client, version 1.3.0</h4>
csync 0.80.0 required
<ul>
  <li>Default proxy port to 8080</li>
  <li>Don't lose proxy settings when changing passwords</li>
  <li>Support SOCKS5 proxy (useful in combination with ssh -D)</li>
  <li>Propagate proxy changes to csync at runtime</li>
  <li>Improve proxy wizard</li>
  <li>Display proxy errors</li>
  <li>Solved problems with lock files</li>
  <li>Warn if for some reason all files are scheduled for removal on either side</li>
  <li>Avoid infinite loop if authentication fails in certain cases</li>
  <li>Fix reading the password from the config in certain cases</li>
  <li>Do not crash when configured sync target disappears</li>
  <li>Make --help work on windows</li>
  <li>Make sync feedback less ambiguous.</li>
  <li>Fix icon tray tooltip sometimes showing repeated content</li>
  <li>More use of native directory separators on Windows</li>
  <li>Remove journal when reusing a directory that used to have a journal before</li>
  <li>Visual clean up of status dialog items</li>
  <li>Wizard: When changing the URL or user name, allow the user to push his data
      to the new location or wipe the folder and start from scratch</li>
  <li>Wizard: Make setting a custom folder as a sync target work again</li>
  <li>Fix application icon</li>
  <li>User-Agent now contains "Mozilla/5.0" and the Platform name (for firewall/proxy compat)</li>
  <li>Server side directory moves will be detected</li>
  <li>New setup wizard, defaulting to root syncing (only for new setups)</li>
  <li>Improved thread stop/termination</li>
</ul>
<h4>csync, version 0.80.0, ownCloud release</h4>
<ul>
  <li>Big file chunking (e.g. up/download of big files should now be no problem anymore)</li>
  <li>Resuming (download of big files will resume)</li>
  <li>Fix false conflicts when database is corrupt/missing</li>
  <li>Fix false conflicts when file is locked</li>
  <li>Put legitimate conflict files only on client side</li>
  <li>Fix unreliable sync after push_file failed</li>
  <li>Fix rename due to inode cast error</li>
  <li>Make chunking work on nginx setups or through nginx proxies</li>
  <li>Improve error reporting in csync_update</li>
  <li>Clean progress database on csync_commit</li>
  <li>Fix issues detected by Coverity</li>
  <li>Fix conflict file appearing when a file cannot be stated</li>
  <li>Do not shadow server errors by not downloading files that have failed to download in the past</li>
</ul>

<hr />

<h3>Release 1.2.5 <small>April 23rd 2013</small></h3>
<p>This is another bugfix release for the 1.2 line, coming with important bug fixes. Update is recommended.</p>
<h4>Mirall/ownCloud Client, version 1.2.5</h4>
csync 0.70.7 required.
<ul>
 <li>[Fixes] NSIS installer fixes.</li>
 <li>[Fixes] Fix crash race by making certificateChain() thread safe.</li>
 <li>[Fixes] Build with older CMake versions (CentOS/RHEL 6).</li>
 <li>[Fixes] Wording in GUI</li>
 <li>[Fixes] Silently ignore "installed = true" status.php</li>
 <li>Set log verbosity before calling csync_init.</li>
 <li>GUI feedback for the statistics copy action.</li>
 <li>Safer approach for detecting duplicate sync runs.</li>
</ul>
<h4>csync, version 0.70.7, ownCloud release</h4>
<ul>
  <li>[Fixes] Resource exhaustion</li>
  <li>Better logging of statedb-related errors</li>
</ul>
<h3>Known Problems</h3>
<ul>
<li>The about dialog displays ocsync version 0.70.6.<br/>
That is <b>wrong</b>, actually the version is 0.70.7 as required, only the display is wrong.</li>
</ul>
<hr/>

<h3>Release 1.2.4 <small>April 11th 2013</small></h3>
<p>This is another bugfix release for the 1.2 line, coming with important bug fixes. Update is recommended.</p>
<h4>Mirall/ownCloud Client, version 1.2.4</h4>
csync 0.70.6 required.
<ul>
  <li>[Fixes] Clarify string in folder wizard</li>
  <li>[Fixes] Fixed some valgrind warnings</li>
  <li>[Fixes] Ensure that only one sync thread can ever run</li>
  <li>[Fixes] Fix default config storage path</li>
  <li>[Fixes] Skip folders with no absolute path</li>
  <li>[Fixes] Allow setting the configuration directory on command line</li>
</ul>
<h4>csync, version 0.70.6, ownCloud release</h4>
<ul>
  <li>[Fixes] Try to avoid to upload incomplete files</li>
  <li>[Fixes] Increase read timeout to 300 seconds</li>
  <li>[Fixes] Handle IGNORE status correctly</li>
  <li>[Fixes] Set path and phash for ignored files</li>
  <li>[Fixes] Fix some issues discovered by Coverity</li>
  <li>[Fixes] Make sure to never allow empty pathes in rmdir</li>
  <li>[Fixes] Fix a crash caused by superfluous free() calls</li>
</ul>
<hr/>
<h3>Release 1.2.3 <small>April 2nd 2013</small></h3>
<p>This is an immediate update superseeding 1.2.2</p>
<h4>Mirall/ownCloud Client, version 1.2.3</h4>
csync 0.70.5 required.
<ul>
<li>[Fixes] Unbreak self-signed certificate handling</li>
</ul>
<hr/>
<h3>Release 1.2.2</h3>
Released <small>April, 2, 2013
<p>This is another bugfix release for the 1.2 line, coming with important bug fixes. Update is recommended.</p>
<h4>Mirall/ownCloud Client, version 1.2.2</h4>
csync 0.70.5 required.
<ul>
<li>[Fixes] Do not crash when local file tree contains symlinks.</li>
<li>[Fixes] Correctly handle locked files on Windows.</li>
<li>[Fixes] Display errors in all members of the SSL chain.</li>
<li>[Fixes] Enable Accessibility features on Windows.</li>
<li>[Fixes] Make setupFavLink work properly on Mac OS.</li>
<li>[Fixes] Ignore temporary files created by MS Office.</l>
<li>[Gui] Support Nautilus in setupFavLink.</li>
</ul>
<h4>csync, version 0.70.5, ownCloud release</h4>
<ul>
<li>[Fixes] detect 'wrong' conflict files on client side.</li>
<li>[Fixes] Give context to module to enable logging (cmd client).</li>
<li>[Fixes] Fix version table contents.</li>
<li>[Fixes] Fix handling of non statable files on Win32.</li>
<li>[Fixes] Fix renames on clientside on read only shares.</li>
<li>[Fixes] Various small fixes and improvements.</li>
</ul>
<hr/>
<h3>Release 1.2.1 <small>February 26th 2013</small></h3>
<p>This is a bugfix release for the 1.2 line</p>
<h4>Mirall/ownCloud Client, version 1.2.1</h4>
csync 0.70.4 required.
<ul>
<li>[Fixes] Leave configured folders on configuration changes.</li>
<li>[Fixes] Do not allow to finish the setup dialog if connection can't be established.</li>
<li>[Fixes] Better handling of credentials in setup dialog.</li>
<li>[Fixes] Do not leak fd's to /dev/null when using gnutls.</li>
<li>[Fixes] Stop sync scheduling when configuration wizard starts.</li>
<li>[Fixes] Clear pending network requests when stepping back in config wizard.</li>
<li>[Fixes] User password dialog asynchronous issues.</li>
<li>[Fixes] Make folderman starting and stoping the scheduling.</li>
<li>[Fixes] Various minor fixes and cleanups.</li>
<li>[Fixes] Crash on pausing sync.</li>
<li>[Fixes] Stale lock file after pausing sync.</li>
<li>[App] Load translations from app dir or bundle as well.</li>
<li>[Platform] Build fixes and simplifications, ie. build only one lib.</li>
<li>[Platform] Added some getter/setters for configuration values.</li>
<li>[Platform] Added man pages.</li>
<li>[Platform] Simplified/fixed credential store usage and custom configs.</li>
<li>[Platform] Added soname version to libowncloudsync.</li>
<li>[Platform] Pull in Qt translations.</li>
<li>[Gui]  Make sync result popups less annoyingq.</li>
<li>[Gui] Fix for result popup.</li>
</ul>
<h4>csync, version 0.70.4, ownCloud release</h4>
<ul>
<lI>[Win32] Ship with up-to-date openssl version to fix SSL problems we saw.</li>
<li>[Fixes] Fix crash during mkdir.</li>
<li>[Fixes] Added workaround for problem that server sometimes does not respond properly to PROPFIND (mirall#285)</li>
<li>[Fixes] Fix handling of deletion of non empty or locked directories.</lI>
<li>[Fixes] Fixed some potential memory leaks.</li>
<li>[Fixes] Files with filenames with unix extensions are ignored now.</li>
</ul>
<hr/>
<h3>Release 1.2.0 <small>January 24th 2013</small></h3>
<p>This is a feature release.</p>
<h4>Mirall/ownCloud Client, version 1.2.0</h4>
csync 0.70.3 required.
<ul>
<li>[GUI] New status dialog to show a detailed list of synced files. </li>
<li>[GUI] New tray notifications about synced files. </li>
<li>[GUI] New platform specific icon set.</li>
<li>[App] Using cross platform QtKeychain library to store credentials crypted.</li>
<li>[App] Use cross platform notification for changes in the local file system rather than regular poll.</li>
<li>[Fixes] Improved SSL Certificate handling and SSL fixes troughout syncing.</li>
<li>[Fixes] Fixed proxy authentication. </li>
<li>[Fixes] Allow brackets in folder name alias.</li>
<li>[Fixes] Lots of other minor fixes.</li>
<li>[Platform] cmake fixes.</li>
<li>[Platform] Improved, more detailed error reporting.</li>
</ul>
<h4>csync, version 0.70.3, ownCloud release</h4>
<ul>
<li>[Platform] Improved module parameter system.</li>
<li>[Platform] New logging framework. Dropped log4c dependency.</li>
<li>[Platform] New API to provide sync progress information.</li>
<li>[Fixes] More efficiency for the ownCloud plugin through less HTTP requests to the server. </li>
<li>[Fixes] ownCloud plugin: Improved upload performance.</li>
<li>[Fixes] Improved error reporting to mirall.</li>
<li>[Fixes] ownCloud plugin: Improved interpretation of HTTP error codes.</li>
<li>[Fixes] ownCloud plugin: Do not abort on errors with individual files any more.</li>
<li>[Fixes] ownCloud plugin: Use renamed session cookie correctly.</li>
<li>[Fixes] Lots of other minor fixes.</li>
<li>[MacOSX] Use libneon with proper big file support. </li>
<li>[Win32] Use libneon with openSSL support now.</li>
</ul>
<hr/>
<h3>Release 1.1.4 <small>December 19th 2012</small></h3>
<p>This is a bugfix release for the 1.1.x line that fixes two significant bugs.</p>
<ul>
<li>No changes to mirall/ownCloud Client source.</li>
<li>[Fixes] csync: Fix encoding issues on MacOSX clients, now the client sends normalized unicode on that platform.</li>
<li>[Fixes] csync:  The client does a more sophisticated handling of server error states which avoids data clearing in some cases. </li>
</ul>
<h3>Known Problems</h3>
<ul>
<li>Files > 2GB size can cause problems.</li>
</ul>
<hr/>
<h3>Release 1.1.3 <small>November 30th 2012</small></h3>
<p>This is a urgent bugfix release for 1.1.2 that fixes two potential crashes.</p>
<ul>
<li>No changes to mirall/ownCloud Client source.</li>
<li>[Fixes] csync: Fix neon resource waste (oc-920)</li>
<li>[Fixes] csync: Fix a crash in error handling code path (github #123)</li>
</ul>
<h3>Known Problems</h3>
<ul>
<li>Mac OSX: Filenames and Directories with composited characters can cause up/download problems.</li>
<li>Syncing of Shared Folders still has issues.</li>
<li>Files > 2GB size can cause problems.</li>
</ul>
<hr/>
<h3>Release 1.1.2 <small>November 26th 2012</small></h3>
<p>This is a bugfix and improvement release which solves some severe bugs in the 1.1.1 release.</p>

<h4>Mirall/ownCloud Client, version 1.1.2</h4>
csync 0.60.2 required.
<ul>
<li>[Fixes] Allow to properly cancel the password dialog.</li>
<li>[Fixes] Share folder name correctly percent encoded with old Qt
            4.6 builds ie. Debian.</li>
<li>[Fixes] If local sync dir is not existing, create it.</li>
<li>[Fixes] lots of other minor fixes.</li>
<li>[GUI] Display error messages in status dialog.</li>
<li>[GUI] GUI fixes for the connection wizard.</li>
<li>[GUI] Show username for connection in statusdialog.</li>
<li>[GUI] Show intro wizard on new connection setup.</li>
<li>[APP] Use CredentialStore to better support various credential
          backends.</li>
<li>[APP] Handle missing local folder more robustly: Create it if
         missing instead of ignoring.</li>
<li>[APP] Simplify treewalk code.</li>
<li>[Platform] Fix Mac building.</li>

<li>[Fixes] csync: Improved cross platform testing and building capabilities</li>
<li>[Fixes] csync: Moved journal database to sync directory.</li>
<li>[Fixes] csync: More memory cleanups and renaming to ocsync issues.</li>
<li>[Fixes] csync: Fixed Daylight Saving Time time issue on Win32.</li>
<li>[Fixes] csync: Fixed inode querie for directories on Win32.</li>
<li>[Fixes] csync: Stricter error checks on HTTP replies from server.</li>
<li>[Fixes] csync: Detect looping in mkdirs to fix sharing.</li>
</ul>
<h3>Known Problems</h3>
<ul>
<li>Mac OSX: Filenames and Directories with composited characters can cause up/download problems.</li>
</ul>
<hr/>

<h3>Release 1.1.1 <small>October 18th 2012</small></h3>
<h4>Mirall/ownCloud Client, version 1.1.1</h4>
csync 0.60.1 required.

<p>This is a bugfix and improvement release which resolves issues that have been found after the initial 1.1.0 release</p>

<ul>
<li>[GUI]   Allow changing folder name in single folder mode</li>
<li>[GUI]   Windows: Add license to installer</li>
<li>[GUI]   owncloud --logwindow will bring up the log window in an already running instance</li>
<li>[Fixes] Make sure SSL errors are always handled</li>
<li>[Fixes] Allow special characters in folder alias</li>
<li>[Fixes] Proper workaround for Menu bug in Ubuntu</li>
<li>[Fixes] csync: Fix improper memory cleanup which could cause memory leaks and crashes</li>
<li>[Fixes] csync: Fix memory leak</li>
<li>[Fixes] csync: Allow single quote (') in file names</li>
<li>[Fixes] csync: Remove stray temporary files</li>
</ul>

<hr/>

<h3>Release 1.1.0 <small>October 10th 2012</small></h3>
<h4>Mirall/ownCloud Client, version 1.1.0</h4>
csync 0.60.0 required.

<p>This is a big feature release for the sync engine ownCloud client is using. It switches to a new, server based uniq Id based approach.</p>

<ul>
<li>[GUI]   Added an about dialog</li>
<li>[GUI]   Improved themeing capabilities of the client.</li>
<li>[GUI]   Minor fixes in folder assistant.</li>
<li>[GUI]   Reworked tray context menu.</li>
<li>[GUI]   Users can now sync the server root folder.</li>
<li>[Fixes] Proxy support: now supports Proxy Auto-Configuration (PAC)
            on Windows, reliability fixes across all OSes.</li>
<li>[Fixes] Url entry field in setup assistant handles http/https correctly.</li>
<li>[Fixes] Button enable state in status dialog.</li>
<li>[Fixes] Crash fixed on ending the client, tray icon related.</li>
<li>[Fixes] Crash through wrong delete operator.</li>
<li>[MacOS] behave correctly on retina displays.</li>
<li>[MacOS] fix focus policy</li>
<li>[MacOS] Packaging improvements.</li>
<li>[MacOS] Packaging improvements.</li>
<li>[Platform] Windows: Setup closes client prior to uninstall.</li>
<li>[Platform] Windows: ownCloud gets added to autorun by default.</li>
<li>[Platform] insert correct version info from cmake.</li>
<li>[Platform] csync conf file and database were moved to the users app data
               directory, away from the .csync dir.</li>
<li>Renamed exclude.lst to sync-exclude.lst and moved it to
            /etc/appName()/ for more clean packaging. From the user path,
            still exclude.lst is read if sync-exclude.lst is not existing.</li>
<li>Placed custom.ini with customization options to /etc/appName()</li>
</ul>

<h4>csync, version 0.60.0, ownCloud release</h4>
<p>The csync ownCloud of ownCloud saw significant changes to support the Id based syncing.<br/>Until these changes appear in csync upstream the ownCloud maintained csync package is renamed to <b>ocsync</b>  to avoid conflicts with the upstream version.</p>
<ul>
 <li>simplification of pac based proxy support.</li>
<li> Renamed ownCloud version of csync to ocsync for ownCloud.</li>
<li>Migration paths for csync database and config.</li>
<li>Fixed that exclude patterns are also tested on files basenames.</li>
<li>Fixed return type for query function if no database exists.</li>
<li>many minor code cleanups and  fixes</li>
<li>Fixed crash by removing a bogus free.</li>
<li>More useful logging.</li>
<li>ownCloud: Maintain the http session by handling the HTTP Cookie.</li>
<li>Fixed strncpy handling (mkdir on windows problem).</li>
<li>extend database with columns uniq id and type.</li>
<li>Use server maintained uniq IDs for update detection instead of mtimes.</li>
<li>Maintain uniq IDs in local database.</li>
<li>Handle change propagation through the file tree locally and remote.</li>
<li>Added module to build a file tree from the local database (dbtree.c).</li>
<li>Added methods to query IDs from the server and maintain it locally.</li>
</ul>
<hr/>
<h3>Release 1.0.5 <small>August 14th 2012</small></h3>
<h4>Mirall/ownCloud Client, version 1.0.5</h4>
csync 0.50.8 required (no change over 1.0.4).
<p>This is a pure bugfix release for release 1.0.4. Update is recommended.</p>
<ul>
<li>[Fixes] Really configure https if the checkbox is activated in setup wizard.</li>
</ul>
<hr/>
<h3>Release 1.0.4 <small>August 10th 2012</small></h3>

<h4>csync, version 0.50.8, ownCloud release</h4>
<p>This is a feature and bugfix release.</p>
<ul>
<li>Inode equivalent support for Win32 platforms to support rename.</li>
<li>ownCloud supports propagates renames from local to webdav MOVE.</li>
<li>ownCloud module works with proxy, settings from mirall.</li>
<li>improved CMake modules (openSSL)</li>
<li>Fixed namespace for lastmodified propset.</li>
<li>Added cmocka based tests for ownCloud module.</li>
<li>Added a config_test.h config header file.</li>
<li>Fix link handling: Ignore symlinks.</li>
<li>Modules can now report their capabilities to csync core.</li>
<li>A lot of minor fixes and improvements.</li>
</ul>
<h4>Mirall/ownCloud Client, version 1.0.4</h4>
csync 0.50.8 required.
<ul>
<li>[APP] ownCloud is now a single instance app, can not start twice any more.</li>
<li>[APP] Proxy support.</li>
<li>[APP] Handle HTTP redirection correctly, note new url.</li>
<li>[APP] More relaxed handling of read only directories in the sync paths.</li>
<li>[APP] Started to split off a library with sync functionality, eg for KDE.</li>
<li>[APP] Make ownCloud Info class a singleton, more robust.</li>
<li>[GUI] New, simplified connection wizard.</li>
<li>[GUI] Added ability for customized theming.</li>
<li>[GUI] Improved icon size handling.</li>
<li>[GUI] Removed Log Window Button, log available through command line.</li>
<li>[GUI] Proxy configuration dialog added.</li>
<li>[GUI] Added Translations to languages Slovenian, Polish, Catalan,
          Portuguese (Brazil), German, Greek, Spanish, Czech, Italian, Slovak,
          French, Russian, Japanese, Swedish, Portuguese (Portugal)
          all with translation rate >90%.</lI>
<li>[Fixes] Loading of self signed certs into Networkmanager (#oc-843)</li>
<li>[Fixes] Win32: Handle SSL dll loading correctly.</li>
<li>[Fixes] Many other small fixes and improvements</li>
</ul>
<h3>Known Problems</h3>
<ul></ul>
<hr/>
<h3>Release 1.0.3 <small>June 22nd 2012</small></h3>

<h4>csync, version 0.50.7, ownCloud release</h4>
<p>This is a bugfix and improvement release fixing again encoding issues and streamlining the ownCloud syncing.
</p>
<ul>
<li>Added ability to log to a callback to let an application catch the log output for a log file or window.</li>
<li>Added push to remote without pushing to temp file first which decreases the number of requests per sync file.</li>
<li>Fixed file copy function to use wide character (win32).</li>
<li>Fixed loading of statedb if user has special char (win32).</li>
</ul>
<h4>Mirall/ownCloud Client, version 1.0.3</h4>
csync 0.50.7 required.
<ul>
 <li>[GUI] Added a log window which catches the logging if required and allows to save for information.</li>
<li>[CMI] Added options --help, --logfile and --logflush</li>
<li>[APP] Allow to specify sync frequency in the config file.</li>
<li>[Fixes] Do not use csync database files from a sync before.
</li>
<li>[Fixes] In Connection wizard, write the final config onyl if the user really accepted. Also remove the former database.
</li>
<li>[Fixes] Allow special characters in the sync directory names.</li>
<li>[Fixes] Win32: Fixed directory removal with special character dirs.</li>
<li>[Fixes] MacOS: Do not flood the system log any more.</li>
<li>[Fixes] MacOS: Put app translations to correct places.</li>
<li>[Fixes] Win32: Fix loading of csync state db.</li>
<li>[Fixes] Improved some english grammar.</li>
<li>[Platform] Added krazy2 static code checks.</li>
</ul>
<h3>Known Problems</h3>
<ul>
<li>MacOS log lacks the information of the dynamic loaded csync owncloud module.</li>
<li>The log window drags down the client if its open for long. Better use the --logfile option to catch full logs.</li>
</ul>
<hr/>
<h3>Release 1.0.2 <small>May 18th 2012</small></h3>

<h4>csync, version 0.50.6, ownCloud release</h4>
<p>
This release is a bugfix release and fixes encoding problems of file and directory names happening cross platform, in particular windows.
</p>
<ul>
<li>Fixed: Directories with 'strange' characters broke sync. (oC bug #613)</li>
<li>Fixed: Special characters in Windows did not sync correctly. (oC bug #478)</li>
<li>Make neon handling redirects properly.</li>
<li>Switch logging off on Apple to not fill the syslog. (oC bug #622)</li>
</ul>

<h4>Mirall/ownCloud Client, version 1.0.2</h4>
csync 0.50.6 required.

This version comes with the first iteration of a new icon set for the ownCloud desktop client and comes with a bunch of bug fixes.

<ul>
<li>[GUI] New icon set for ownCloud client.</li>
<li>[GUI] No splashscreen any more.(oC Bug #498)</li>
<li>[GUI] Russian translation added.</li>
<li>[GUI] Added 'open ownCloud' to traymenu</li>
<li>[GUI] "Pause" and "Resume" instead of Enable/Disable.</li>
<li>[Fixes] Long running syncs can be interrupted now.</li>
<li>[Fixes] Dialogs comes to front on click.</li>
<li>[Fixes] Open local sync folder from tray and status for win32.</li>
<li>[Fixes] Load exclude.lst correctly on MacOSX.</li>
</ul>

<h3>Known Problems</h3>
none so far.
<hr/>
<h3>Release 1.0.1 <small>April 24th 2012</small></h3>

<h4>csync, version 0.50.5, ownCloud release:</h4>

This release reflects our efforts to further improve the platform support of csync and oCC - this release brings us a big step nearer to a MacOSX release in addition to Linux and Windows.

Moreover, in the csync library we improved the error detection and reporting to be able to give the user correct error messages through oCC and avoid unpleasant wrong error message situations.

<ul>
<li>removed arpg lib dependency</li>
<li>simplified and fixed CMake files</li>
<li>MacOS porting efforts</li>
<li>more granular error reports</li>
<li>fixed thread savity with error reporting</li>
</ul>

<h4>Mirall/ownCloud Client, version 1.0.1</h4>
csync 0.50.5 required.

With this release we deliver the barely missed SSL support to the users, along with a long line of bugfixes and improvements.

SSL support was added, together with a decent certificate warning dialog to warn users about not trusted SSL connections and certificates.
The password is not longer stored in clear text, yet its still not securely encrypted (which seems not to be possible at all). For those who put security over convenience we added the option to not store the password at all, but enter at startup.

Bugfixes in the following areas also went in: Expect a more robust startup of the app, with more detailed and correct error messages. The sync status display does now display the status faster and and scheduling was fixed.

Also work was done to provide oCC on the MacOSX palatform. The cmake based build system was improved to also create mac dmg packages. Yet to release.

Finally translations were fixed for the Windows platform. Currently German and English are provided.

Detailed list:
<ul>
<li>[Security] Support SSL Connections</li>
<li>[Security] SSL Warning dialog</li>
<li>[Security] Do not store password in clear text anymore</li>
<li>[Security] Restrict credentials to the configured host</li>
<li>[Security] Added ability to forbid local password storage.</li>
<li>[Fixes] Various fixes of the startup behaviour.</li>
<li>[Fixes] Various fixes in sync status display</li>
<li>[GUI] Various error messages for user display improved.</li>
<li>[GUI] fixed terms and Translations</li>
<li>[GUI] fixed translation loading</li>
<li>[Intern] Migrate old credentials to new format</li>
<li>[Intern] Some code refactorings, got rid of rotten QWebDav lib</li>
<li>[Intern] lots of cmake cleanups</li>
<li>[Intern] Backport to Qt Version 4.6 for compat. with older distros.</li>
<li>[Platform] MacOSX porting efforts</li>
<li>[Platform] MacOSX Bundle creation added</li>
<li>[Platform] Enabled translations on Windows.</li>
</ul>

<h3>Known Problems</h3>
<ul>
<li>After the installation on Windows, ownCloud client directly started from the installation program fails to sync. After a restart everything works fine.</li>
<li>Folders containing special characters in the filename cause problems on the windows platforms.</li>
</ul>

<h3>Release 1.0.0 <small>April 3rd 2012</small></h3>

First release working on Linux and Windows platforms.
