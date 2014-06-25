<h1>ownCloud Seven Features</h1>
Jump to improvements for: <a href="#user">User</a> | <a href="#admin">Admin</a> | <a href="#developer">Developer</a></br>
<a name="user"></a>
<h2>Improvements for Users</h2>
<div class="panel-group" id="accordionUser">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <i class="icon-globe"></i>&nbsp;&nbsp;Improved Sharing
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
The sharing code has been dramatically enhanced, streamlined and improved, making sharing more flexible, faster and accessible via the ownCloud API. These improvements include:</br></br>
		<ul>
			<li><strong>Sharing by group</strong> – Turn sharing off/on based on group.  
			<li><strong>File Filters</strong> – See “files shared with me”, “files I shared”, and “files shared with link” from the file view in the web browser. 
			<li><strong>Shared file owner</strong> – The file owner’s name is displayed on the file browser when a file is shared with you
			<li><strong>Force Password</strong> – Admins can force users to set a password when they create shared links which can ensure that files shared outside of ownCloud are properly secured.
			<li><strong>Share Link Default and Max Expiration</strong> – Admins can require users to set a password or an expiration date for the link.
			<li><strong>No more Shared Folder</strong> – The “Shared” folder has been removed; instead, shared files are identified with the overlay icon representing “shared with me”. (If users are upgrading, they can continue to use the Shared folder they already have.)
		</ul>
		<div class="row">
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/adminoptions.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/sharedby.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/sharedviews.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
			<div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/sharing/permissions.png" style="width: 100%" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <i class="icon-list"></i>&nbsp;&nbsp;New Files View
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
		The files view in the web browser has an updated UI for an improved user experience including:</br></br>
		<ul>
			<li><strong>Lazy loading files</strong> – Files are loaded using “lazy loading” which loads files as you scroll down the page, providing faster and more responsive access.</li>
			<li><strong>File Sorting</strong> – Files can be sorted in the web browser by name, size and last modified time as well as clear identification of shared files.</li>
			<li><strong>Sorting by Storage</strong> –  An “external storage” filter enables users to filter files based on external storage location, such as ftp, S3, Swift, Dropbox, Google Drive and more.</li>
		</ul>
		<div class="row">
			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/files/newview.png" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <i class="icon-lightbulb-o"></i>&nbsp;&nbsp;File Notifications
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
		Select the activities you want to record in your activity stream and set preferences for email notifications if:</br></br>
		<ul>
			<li>A file or folder is shared with you</li>
			<li>A new file or folder is created inside a shared folder</li>
			<li>A file or folder is changed inside a shared folder</li>
			<li>A file or folder has been deleted from inside a shared folder</li>
		</ul>
		</br>
		Emails be sent to you on a daily, weekly or monthly schedule.
		<div class="row">
			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/activity/options.png" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
          <i class="icon-file-text-o"></i>&nbsp;&nbsp;Improved Documents Capabilities
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
      	In addition to the existing ability to collaboratively edit .odt files within the web browser, you can now convert Microsoft Word documents 
      	on the fly for online editing; open a Word doc online, edit it live with other users in the browser, and close it again – 
      	it will convert back to Word. And, it will be saved back to your desktop with the changes embedded.
      </div>
    </div>
  </div>
  
 
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
          <i class="icon-sitemap"></i>&nbsp;&nbsp;Server to Server Sharing
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
		A user on one ownCloud instance can share files with a user on a separate ownCloud installation, without using share links.  
		(Great for large installations.)      
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
          <i class="icon-mobile"></i>&nbsp;&nbsp;Mobile Web Browser Support
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
      	ownCloud can now be used on most tablet and mobile browsers. This provides support for devices that don’t have a native app – 
      	like Microsoft and Blackberry – as well as providing extra options for accessing files stored in ownCloud.
      	<div class="row">
			<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/files/mobileview.png" alt="..." class="img-thumbnail"></div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
          <i class="icon-fast-forward"></i>&nbsp;&nbsp;Significant Speed Improvements
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse">
      <div class="panel-body">
      	ownCloud web pages render and load faster with new static CSS and JavaScript files. And, ownCloud clients sync faster with 
      	the new parallel upload and download mechanism. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
          <i class="icon-lock"></i>&nbsp;&nbsp;Password Strength Indicator
        </a>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse">
      <div class="panel-body">
      	When setting up a password in ownCloud, a password strength indicator helps users choose stronger, more secure passwords.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
          Many More Features
        </a>
      </h4>
    </div>
    <div id="collapseTwelve" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
<a name="admin"></a>
<h2>Improvements for Administrators</h2>
<div class="panel-group" id="accordionAdmin">
	 <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNineAdmin">
          <i class="icon-chain-broken"></i>&nbsp;&nbsp;Webhooks
        </a>
      </h4>
    </div>
    <div id="collapseNineAdmin" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTenAdmin">
          <i class="icon-exclamation-triangle"></i>&nbsp;&nbsp;Antivirus Action Updates
        </a>
      </h4>
    </div>
    <div id="collapseTenAdmin" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
	<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEightAdmin">
          <i class="icon-cloud"></i>&nbsp;&nbsp;External Storage
        </a>
      </h4>
    </div>
    <div id="collapseEightAdmin" class="panel-collapse collapse">
      <div class="panel-body">
      	The external storage app provides faster, more responsive access to storage locations including FTP, Dropbox, Google Drive, sFTP, 
      	Swift, S3, WebDAV, SMB/CIFS and more. Admins can specify which storage type can be added by end users in their personal tab, 
      	providing more granular control over external storage mounts. 
      	<div class="row">
				<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/files/addstorage.png" alt="..." class="img-thumbnail"></div>
			</div>
      </div>
    </div>
  </div> 
	<div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneAdmin">
	          <i class="icon-group"></i>&nbsp;&nbsp;New User Management
	        </a>
	      </h4>
	    </div>
	    <div id="collapseOneAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Admins have improved capabilities which make it easier to manage users:</br></br>
	      	<ul>
	      		<li>View all ownCloud users in a single scrolling window</li>
	      		<li>Search by user display name using the new text filter</li>
	      		<li>Filter user lists by group</li>
	      		<li>See user attributes including the storage location and last login time</li>
	      		<li>Add new groups with a click of a button.</li>
	      		<li>Add or edit users and user attributes ( i.e. group memberships, quota, and group admin rights) 
	      			with improved ease and speed</li>
	      	</ul>
	      	<div class="row">
				<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/settings/usermanagement.png" alt="..." class="img-thumbnail"></div>
			</div>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoAdmin">
	          <i class="icon-wrench"></i>&nbsp;&nbsp;SMTP Config Wizard
	        </a>
	      </h4>
	    </div>
	    <div id="collapseTwoAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
			It is now simpler than ever to connect ownCloud to an email server in a simple GUI config wizard, enabling ownCloud 
			to send automated messages to users – such as the notifications above. ownCloud can connect via PHP or using standard 
			SMTP.
			<div class="row">
				<div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/seven/settings/mailserversettings.png" alt="..." class="img-thumbnail"></div>
			</div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThreeAdmin">
	          <i class="icon-user"></i>&nbsp;&nbsp;AD / LDAP Enhancements
	        </a>
	      </h4>
	    </div>
	    <div id="collapseThreeAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Several improvements have been made to the LDAP and Active Directory plug in application, improving both the performance 
	      	of the application as well as the compatibility with openLDAP, AD and other vendors. For example, the plug-in can now manage 
	      	paginated responses to handle tens of thousands of users that are part of a single flat OU.
	      </div>
	    </div>
	  </div>
	   <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourAdmin">
	          <i class="icon-database"></i>&nbsp;&nbsp;Object Stores as Primary Storage
	        </a>
	      </h4>
	    </div>
	    <div id="collapseFourAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	ownCloud can now leverage SWIFT object stores as primary storage for ownCloud files. Now users can choose the best option 
	      	for their specific need: local storage, network filesystem mounts, or SWIFT object stores.
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFiveAdmin">
	          <i class="icon-inbox"></i>&nbsp;&nbsp;Editable email templates
	        </a>
	      </h4>
	    </div>
	    <div id="collapseFiveAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	      	Edit the email templates that ownCloud sends for lost password recovery (if using the ownCloud user management), as well 
	      	as the template for sending shared files and share links. 
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixAdmin">
	          <i class="icon-dashboard"></i>&nbsp;&nbsp;Quota Improvements
	        </a>
	      </h4>
	    </div>
	    <div id="collapseSixAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSevenAdmin">
	          <i class="icon-code"></i>&nbsp;&nbsp;Upgrade / Migration Routine Script
	        </a>
	      </h4>
	    </div>
	    <div id="collapseSevenAdmin" class="panel-collapse collapse">
	      <div class="panel-body">
	        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	      </div>
	    </div>
	  </div>
	</div>
<h2>Improvements for Developers</h2>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordionDeveloper" href="#collapseOneDev">
          <i class="icon-exchange"></i>&nbsp;&nbsp;Overlay Icon API
        </a>
      </h4>
    </div>
    <div id="collapseOneDev" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>