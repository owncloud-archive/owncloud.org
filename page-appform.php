<div class="page-header">
	<h1>Thanks for creating an ownCloud app!</h1>
</div>
<p>With this form, you submit your app for review to the ownCloud app review team. Make sure to read the <a href="<?php echo $DOCUMENTATION_DEVEL; ?>general/publishing.html" target="_blank">Publishing documentation</a> very carefully. Once you feel your app fullfills the requirements for approval, enter the details below to submit the app for review.</p>
<p>You will be automatically subscribed to the <a href="https://mailman.owncloud.org/mailman/listinfo/appsreview">app review mailing list</a>. You will receive a confirmation link in your inbox, please make sure to <strong>confirm the subscription as soon as possible</strong> so you do not miss any important replies to your submission.</p>
<form name="contactform" method="post" action="appformsubmit">
<div class="row">
    <div class="col-md-10">
        <table width="100%">
        <tr>
        <td valign="top">
        <label for="first_name">Your First Name</label>
        </td>
        <td valign="top">
        <input  type="text" name="first_name" maxlength="50" size="40">
        </td>
        </tr>
        <tr>
        <td valign="top"">
        <label for="last_name">Your Last Name</label>
        </td>
        <td valign="top">
        <input  type="text" name="last_name" maxlength="50" size="40">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="email">Your Email Address</label>
        </td>
        <td valign="top">
        <input  type="text" name="email" maxlength="80" size="40">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="appstoreurl">Link to your app on <a href="http://apps.owncloud.com">the appstore</a></label>
        </td>
        <td valign="top">
        <input  type="text" name="appstoreurl" maxlength="120" size="40">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="appdevurl">Link to the public repository</label><br /> where the app is developed (github for example)
        </td>
        <td valign="top">
        <input  type="text" name="appdevurl" maxlength="120" size="40">
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="collaborators">Other authors</label> <br />Who else works or has worked with you on the app? Names, ideally also urls to profiles.        
        </td>
        <td valign="top">
        <textarea  type="text" name="collaborators" maxlength="1000" cols="40" rows="4"></textarea>
        </td>
        </tr>
        <tr>
        <td valign="top">
        <label for="comments">Why is the app ready for users</label> <br />
        Please note how you applied <a href="<?php echo $DOCUMENTATION_DEVEL; ?>general/publishing.html#app-guidelines">the app guidelines</a> and share your thoughts on why the app would be a great addition for the ownCloud ecosystem.
        </td>
        <td valign="top">
        <textarea  name="comments" maxlength="1000" cols="40" rows="6"></textarea>
        </td>
        </tr>
        <tr>
        <td colspan="2" style="text-align:center">
        <br /><input type="submit" value="Submit">
        </td>
        </tr>
        </table>
        </form>
    </div>
</div>