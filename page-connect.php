<div class="row col-md-12">
	<h2 class="conf-location">Connect your ownCloud!</h2>
	<p>Create your own private, secure “Dropbox” with an old laptop and an internet connection with <em>ownCloud Connect</em>.</p>
		<p>Access your files from any device, anywhere at any time, and collaborate with anyone – all in software completely within your control.</p>
</div>
<div class="row">
	<div class="col-lg-4 col-md-5 text-center no-underline">
                <iframe width="100%" height="360" src="https://www.youtube.com/embed/TBD?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="col-lg-8 col-md-7">
		<h2>What is it?</h2>
                <p><strong>ownCloud</strong>: ownCloud is open source software that you install on your computer to provide anytime, anywhere access to your files via mobile devices, desktop sync clients and web browsers. ownCloud is managed by you, entirely within your control, allowing you access to files on your storage, no strings attached. Provided in an easy to install virtual appliance (or as bits to be installed and configured), ownCloud can be up and running on your computer in 3 easy steps: <a href="/install">download the virtual appliance</a>, import it into your preferred hypervisor, and boot.</p>
                <p><strong>ownCloud Connect</strong>: Simply put, ownCloud Connect enables you to take a laptop and an Internet connection, connect to your privately hosted ownCloud from anywhere, without requiring you to make any changes to your local network settings – no router configuration, no DNS entries, no domain name registration. The ownCloud Connect service relies on a partner who provides the service for a fee. Right now, there is one partner, <a href="https://pagekite.net/" target="_blank">pageKite</a>. More are coming!</p>
        </div>
</div>
<div class="row">
	<div class="col-md-12">
		<h2>How does it work?</h2>
		<p>ownCloud Connect is both an app inside ownCloud and a service. The ownCloud Connect app is installed in ownCloud and configured in the ownCloud admin panel. From the ownCloud Connect app, an admin can sign up for an ownCloud Connect account with one of the supported providers. Once the account is confirmed, the ownCloud app initiates and maintains a secure connection to the ownCloud Connect service. The service in turn provides a recognizable URL on the web that, when accessed via ownCloud clients, connects users back to their ownCloud server residing behind their router on a network at home or at work. Once the server is connected, simply download the desktop sync client from ownCloud.org, or get the ownCloud apps from the Apple App Store or Google Play, and get started.</p>
	</div>
</div>
<div class="row">
        <div class="col-md-12">
                Learn more in the ownCloud <a href="<?php echo $DOCUMENTATION_ADMIN; ?>TBD">administrator documentation</a> and in the questions and answers section below.
        </div>
</div>


<div class="row">
	<div class="col-md-12">
        <h2>Questions and answers</h2>
        </div>
        <div class="col-md-12">
        <h3>How about security?</h3>
        <p>All of the security associated with ownCloud are at work when you use the ownCloud Connect service. ownCloud is still run by you, on your computer. You can monitor what is happening, manage accounts, check the logs, use your own SSL certificates, enable automatic updates and more. The appliance pre-configures much of ownCloud for you. All you have to do is start the appliance, complete the setup and log into the web URL it provides. The ownCloud browser wizard at the provided URL will step you through logging in for the first time. Of course, as you configure accounts for others to share on your ownCloud, we recommend you use secure and complex passwords for all accounts.</p>
        <p>However, we want to be completely transparent about the nature of ownCloud Connect. The ownCloud Connect app is distributed and the source code is in the ownCloud repository for review in Github. The ownCloud Connect service is provided by Datto, running in data centers in the United States. All files transferred through the ownCloud Connect service do pass through these data centers, and for a brief time are readable as the ownCloud Connect service transfers incoming requests from SSL to SSH on the way to the private ownCloud Server. In theory, if someone wanted to, all files transferred to and from devices using the ownCloud Connect service could – for that brief instant of time that they are being moved from the SSL terminated connection to the SSH tunnel in memory – read by someone with ownCloud Connect service server access. While the risk is small, and our terms and conditions cover this situation, it is something we wanted to be clear about. However, there is no way for the ownCloud Connect service to access your data on your private server, it can only broker a connection with your private server.</p>
        </div>
        <div class="col-md-12">
        <h3>How are ownCloud Connect and the ownCloud Server Appliance different than ownCloud?</h3>
        <p>The ownCloud Server appliance contains the ownCloud server, an OS and a database, provided in a pre-configured, easy to download, fast to set up package. ownCloud Connect is an app inside the ownCloud appliance that enables an admin to sign up for and manage use of the ownCloud Connect Service. This service is simply a connection broker that connects users outside of a network firewall to an ownCloud instance behind the firewall, with no special configuration required.</p>
        <p>Of course, if you already have ownCloud 8.1 up and running, the ownCloud Connect app is available in <a href="http://apps.owncloud.com">the ownCloud app store</a> and can be installed easily in an existing ownCloud instance to achieve the same overall result.</p>
        </div>
        <div class="col-md-12">
        <h3>What if I Want to Disconnect my ownCloud Connect Account?</h3>
        <p>If, at any time, you want to stop using ownCloud Connect, simply disable the app in the ownCloud admin interface and it will stop working permanently.</p>
        </div>
        <div class="col-md-12">
        <h3>Does ownCloud Connect work with ownCloud Standard or Enterprise Subscriptions?</h3>
        <p>No, the ownCloud Connect app and service are not designed to work with ownCloud subscriptions. The service architecture and bandwidth is intended for smaller ownCloud instances and sized accordingly.</p>
        </div>
        <div class="col-md-12">
        <h3>What if I want to dig a little deeper?</h3>
        <p>While we provide ownCloud Connect and the ownCloud appliance to get you up and running fast, it is in no way limited. If you want to start configuring the components in the appliance for your use case, feel free. If you want to tune the database, or set up your own static IP address and domain name, and disable ownCloud connect? Go for it! And, for a real challenge, why not try an app from apps.owncloud.com, or write your own? ownCloud chat, ownCloud maps, ownCloud video streaming, ownCloud audio streaming – these are all apps built by the community. With ownCloud, the possibilities to explore are endless.</p>
        </div>
        <div class="col-md-12">
        <h3></h3>
        <p></p>
        </div>
        <div class="col-md-12">
        <h3></h3>
        <p></p>
        </div>
        
</div>