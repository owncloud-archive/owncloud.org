<div class="page-header">
  <h1><a href="/events">Events</a> > Contact</h1>
</div>
<div class="sub-nav">
  <a href="/events/meetups">Meetups</a>&nbsp;&nbsp;
  |&nbsp;&nbsp;<a href="/events/conference-program">Conference Program</a>
  |&nbsp;&nbsp;Contact
</div></br>
<p>Inform us about your release party, conference or meetup, request materials or ask for help.</p>
<p><strong>Note:</strong> if you request materials, use the <a href="<?php echo get_template_directory_uri(); ?>/assets/files/request_form.pdf">request form</a> and make sure you fill in as many details as possible!</p>
<form action="#" method="post" id="messageform">
  <div class="form-group">
    <label for="author">Name</label>
    <input type="text" class="form-control" name="author" id="author" value="" size="22" required aria-required="true">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="" size="22" required aria-required="true">
  </div>
  <div class="form-group">
    <label for="comment">Message</label>
    <textarea name="message" id="message" class="form-control" rows="5" required aria-required="true"></textarea>
  </div>
  <p>
    <input name="submit" class="btn btn-primary" type="submit" id="submit" value="Send Message">
  </p>    
</form>
