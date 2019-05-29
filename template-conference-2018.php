<?php /* Template Name: Conference */
get_header('conference');

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $date = new DateTime("2018-09-18");

        $secs = $date->format("U") - time();

        $days = floor($secs / 86400);
        $secs = $secs % 86400;

        $hours = floor($secs / 3600);
        $secs = $secs % 3600;

        $minutes = floor($secs / 60);
        $secs = $secs % 60;
        ?>

<article>
  <header style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);">
    <img class="geo blue back" src="<?php echo get_template_directory_uri(); ?>/img/conference/blue.png" />
    <img class="geo blue" src="<?php echo get_template_directory_uri(); ?>/img/conference/blue.png" />

    <img class="geo pink back" src="<?php echo get_template_directory_uri(); ?>/img/conference/pink.png" />
    <img class="geo pink" src="<?php echo get_template_directory_uri(); ?>/img/conference/pink.png" />

    <img class="geo yellow back" src="<?php echo get_template_directory_uri(); ?>/img/conference/yellow.png" />
    <img class="geo yellow" src="<?php echo get_template_directory_uri(); ?>/img/conference/yellow.png" />

    <img class="geo green back" src="<?php echo get_template_directory_uri(); ?>/img/conference/green.png" />
    <img class="geo green" src="<?php echo get_template_directory_uri(); ?>/img/conference/green.png" />


    <div class="wrapper container">
      <h1><?php the_title(); ?></h1>
      <h2>September 18 - 21, 2018, Nuremberg</h2>
      <div class="cta d-none d-sm-block">
        <a href="https://streaming.media.ccc.de/occon18/" target="_blank" class="button-oc occon-pink">See the livestream<i class="fa  fa-video-camera"></i></a>
        <a href="#justify" class="button-oc occon-blue">Why you should attend<i class="fa fa-exclamation"></i></a>
      </div>
    </div>
  </header>

  <section class="container">
    <h2>What is the ownCloud Conference?</h2>
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-conference-people.jpg" class="img-fluid" />
      </div>

      <div class="col-md-8">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <?php
  /*
  <section style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-speakers.jpg);" class="speakers">
    <img class="geo blue" src="<?php echo get_template_directory_uri(); ?>/img/conference/blue.png" />
    <img class="geo pink" src="<?php echo get_template_directory_uri(); ?>/img/conference/pink.png" />
    <img class="geo yellow" src="<?php echo get_template_directory_uri(); ?>/img/conference/yellow.png" />
    <img class="geo green" src="<?php echo get_template_directory_uri(); ?>/img/conference/green.png" />

    <div class="container">
      <h2 class="text-center">Who's speaking?</h2>
      <div class="d-flex justify-content-md-center">
        <div class="speaker">
            <div class="image-wrap">
              <img class="img-fluid" src="http://demo.themeum.com/wordpress/eventum/wp-content/uploads/2015/09/10-2-458x458.jpg" alt="WILLIAM  JOHN">
              <ul class="social-links-4 clean">
                <li class="social-1"><a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-2"><a target="_blank" class="github" href="#"><i class="fa fa-github"></i></a></li>
                <li class="social-3"><a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-4"><a target="_blank" class="vk" href="#"><i class="fa fa-vk"></i></a></li>
              </ul>
            </div>
          <h4 class="speaker-title">Super Man</h4>
          <p class="speaker-designation">Producer, CSI:Cyber</p><p class="speaker-designation"></p>
        </div>

        <div class="speaker">
            <div class="image-wrap">
              <img class="img-fluid" src="http://demo.themeum.com/wordpress/eventum/wp-content/uploads/2015/09/10-2-458x458.jpg" alt="WILLIAM  JOHN">
              <ul class="social-links-4 clean">
                <li class="social-1"><a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-2"><a target="_blank" class="github" href="#"><i class="fa fa-github"></i></a></li>
                <li class="social-3"><a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-4"><a target="_blank" class="vk" href="#"><i class="fa fa-vk"></i></a></li>
              </ul>
            </div>
          <h4 class="speaker-title">Super Man</h4>
          <p class="speaker-designation">Producer, CSI:Cyber</p><p class="speaker-designation"></p>
        </div>

        <div class="speaker">
            <div class="image-wrap">
              <img class="img-fluid" src="http://demo.themeum.com/wordpress/eventum/wp-content/uploads/2015/09/91-2-458x458.jpg" alt="WILLIAM  JOHN">
              <ul class="social-links-4 clean">
                <li class="social-1"><a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-2"><a target="_blank" class="github" href="#"><i class="fa fa-github"></i></a></li>
                <li class="social-3"><a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-4"><a target="_blank" class="vk" href="#"><i class="fa fa-vk"></i></a></li>
              </ul>
            </div>
          <h4 class="speaker-title">Super Man</h4>
          <p class="speaker-designation">Producer, CSI:Cyber</p><p class="speaker-designation"></p>
        </div>

        <div class="speaker">
            <div class="image-wrap">
              <img class="img-fluid" src="http://demo.themeum.com/wordpress/eventum/wp-content/uploads/2015/09/1-2-458x458.jpg" alt="WILLIAM  JOHN">
              <ul class="social-links-4 clean">
                <li class="social-1"><a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-2"><a target="_blank" class="github" href="#"><i class="fa fa-github"></i></a></li>
                <li class="social-3"><a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-4"><a target="_blank" class="vk" href="#"><i class="fa fa-vk"></i></a></li>
              </ul>
            </div>
          <h4 class="speaker-title">Super Man</h4>
          <p class="speaker-designation">Producer, CSI:Cyber</p><p class="speaker-designation"></p>
        </div>

        <div class="speaker">
            <div class="image-wrap">
              <img class="img-fluid" src="http://demo.themeum.com/wordpress/eventum/wp-content/uploads/2015/09/2-2-458x458.jpg" alt="WILLIAM  JOHN">
              <ul class="social-links-4 clean">
                <li class="social-1"><a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-2"><a target="_blank" class="github" href="#"><i class="fa fa-github"></i></a></li>
                <li class="social-3"><a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-4"><a target="_blank" class="vk" href="#"><i class="fa fa-vk"></i></a></li>
              </ul>
            </div>
          <h4 class="speaker-title">Super Man</h4>
          <p class="speaker-designation">Producer, CSI:Cyber</p><p class="speaker-designation"></p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="schedule container text-center">
    <h2>Event schedules</h2>
    <div class="days">
      <a href="#" class="button-oc occon-pink bold active" data-day="18">Tue, 18.09.<div class="triangle"></div></a>
      <a href="#" class="button-oc occon-green bold" data-day="19">Wed, 19.09.<div class="triangle"></div></a>
      <a href="#" class="button-oc occon-yellow bold" data-day="20">Thu, 20.09.<div class="triangle"></div></a>
      <a href="#" class="button-oc occon-blue bold" data-day="21">Fri, 21.09.<div class="triangle"></div></a>
    </div>

    <div class="table-responsive">
      <table class="table table-striped text-left active" data-day="18">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Session</th>
            <th scope="col">Speaker(s)</th>
            <th scope="col">Time</th>
            <th scope="col">Venue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Opening Remarks
            <p>
              A brief history about blaslcknsdj hasdkfj skldjlasd jkbfas djblasdjb ljsabdfljasdlfj
            </p></td>
            <td>Holger Dyroff</td>
            <td>09:00 AM</td>
            <td>Entrance hall</td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>ownCloud 10.0.8 - We love Hotfixes</td>
            <td>Patrick Jahns</td>
            <td>09:30 AM</td>
            <td>Room 1</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>How I got banned on Twitter</td>
            <td>Florian Lenz</td>
            <td>10:00 AM</td>
            <td>Room 2</td>
          </tr>

          <tr>
            <th scope="row">4</th>
            <td>... only without salary</td>
            <td>Emil Lefherz</td>
            <td>10:30 AM</td>
            <td>Room 1</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped text-left" data-day="19">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Session</th>
            <th scope="col">Speaker(s)</th>
            <th scope="col">Time</th>
            <th scope="col">Venue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Opening Remarks</td>
            <td>Holger Dyroff</td>
            <td>09:00 AM</td>
            <td>Entrance hall</td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>ownCloud 10.0.8 - We love Hotfixes</td>
            <td>Patrick Jahns</td>
            <td>09:30 AM</td>
            <td>Room 1</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>How I got banned on Twitter</td>
            <td>Florian Lenz</td>
            <td>10:00 AM</td>
            <td>Room 2</td>
          </tr>

          <tr>
            <th scope="row">4</th>
            <td>... only without salary</td>
            <td>Emil Lefherz</td>
            <td>10:30 AM</td>
            <td>Room 1</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped text-left" data-day="20">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Session</th>
            <th scope="col">Speaker(s)</th>
            <th scope="col">Time</th>
            <th scope="col">Venue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Opening Remarks</td>
            <td>Holger Dyroff</td>
            <td>09:00 AM</td>
            <td>Entrance hall</td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>ownCloud 10.0.8 - We love Hotfixes</td>
            <td>Patrick Jahns</td>
            <td>09:30 AM</td>
            <td>Room 1</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>How I got banned on Twitter</td>
            <td>Florian Lenz</td>
            <td>10:00 AM</td>
            <td>Room 2</td>
          </tr>

          <tr>
            <th scope="row">4</th>
            <td>... only without salary</td>
            <td>Emil Lefherz</td>
            <td>10:30 AM</td>
            <td>Room 1</td>
          </tr>
        </tbody>
      </table>

      <table class="table table-striped text-left" data-day="21">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Session</th>
            <th scope="col">Speaker(s)</th>
            <th scope="col">Time</th>
            <th scope="col">Venue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Opening Remarks</td>
            <td>Holger Dyroff</td>
            <td>09:00 AM</td>
            <td>Entrance hall</td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>ownCloud 10.0.8 - We love Hotfixes</td>
            <td>Patrick Jahns</td>
            <td>09:30 AM</td>
            <td>Room 1</td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>How I got banned on Twitter</td>
            <td>Florian Lenz</td>
            <td>10:00 AM</td>
            <td>Room 2</td>
          </tr>

          <tr>
            <th scope="row">4</th>
            <td>... only without salary</td>
            <td>Emil Lefherz</td>
            <td>10:30 AM</td>
            <td>Room 1</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="text-left">
      <p>
        You are an expert on your own and want to host your own talk? We're looking for speakers.
      </p>
      <a href="<?php echo get_page_link(14556); ?>" class="button-oc occon-yellow">Submit your idea here<i class="fa fa-bullhorn"></i></a>
    </div>

  </section>
  
  */
  ?>
  <section name="justify" class="justify" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-conference-justify-my-trip.jpg);">
    <img class="geo blue" src="<?php echo get_template_directory_uri(); ?>/img/conference/blue.png" />
    <img class="geo pink" src="<?php echo get_template_directory_uri(); ?>/img/conference/pink.png" />
    <img class="geo yellow" src="<?php echo get_template_directory_uri(); ?>/img/conference/yellow.png" />
    <img class="geo green" src="<?php echo get_template_directory_uri(); ?>/img/conference/green.png" />
    <div class="container">
      <h2 class="text-center">Justify my trip</h2>
      <p>
        If you're not sure, why you should attend the ownCloud conference, here are some powerful arguments.
      </p>
      <h3>Up-to-date and up-to-speed</h3>
      <p>
        ownCloud Conference 2018 is the must-attend event for ownCloud admins, users and, developers.
        The event provides them with the opportunity to share their expertise, listen to the best in the field, learn best practices, see results in action, and try out new ideas on the ownCloud platform. See exciting new use cases and opportunities around ownCloud.
      </p>

      <h3>Expert help and business contacts</h3>
      <p>
        Speakers, participants, and sponsors at ownCloud Conference 2018 represent technical solutions around the ownCloud platform. Find help, meet the developers and connect to the business platform around ownCloud. Learn about scaling owncloud. You will find key influencers and business representatives to talk to, if you need expert advice.
      </p>

      <h3>Key take-aways</h3>
      <p>
        Armed with a boost in know-how and productivity, attendees of the ownCloud Conference 2018 event will afterwards be able to help their companies to:
      </p>
      <ul>
        <li>
          Introduce up-to-date approaches and best practices in all areas of ownCloud deployments and business models
        </li>
        <li>
          Boost reliability, versatility and sustainability of their owncloud deployment
        </li>
        <li>
          Speed up development
        </li>
        <li>
          Reach the market faster than the competition
        </li>
        <li>
          And last but not least, keep your developers and admins happy and productive
        </li>
      </ul>

      <div class="text-center cta">
          <a href="#register" class="button-oc occon-pink">Register now! <i class="fa fa-rocket"></i></a>
      </div>
    </div>
  </section>

  <section class="register" name="register">
    <div class="container">
      <h2>Register now</h2>
      <div class="row">
        <div class="col-md-5">
        <p>
          Save your ticket now and become a part of the ownCloud open source universe. <b>The conference is free</b> to attend but registering is needed to help us planning.
        </p>
        <p>
          If you are interested in supporting the conference we offer various sponsorship packets from micro sponsorings (= buying a ticket) to gold sponsorings.
        </p>
        <a href="<?php echo get_page_link(14922); ?>" class="button-oc">See the sponsoring possibilities<i class="fa fa-handshake-o"></i></a>
      </div>
        <div class="col-md-6 offset-md-1">
          <?php
          if(!isset($_GET['e'])) :
          ?>
          <form action="#" novalidate id="register">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" id="firstname">
              <label class="mdl-textfield__label" for="firstname">Your firstname *</label>
              <span class="help">Please fill out your firstname</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" id="lastname">
              <label class="mdl-textfield__label" for="lastname">Your lastname *</label>
              <span class="help">Please fill out your lastname</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="email" id="email">
              <label class="mdl-textfield__label" for="email">Your email address *</label>
              <span class="help">Please provide a valid email address</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" id="country" list="countries">
              <label class="mdl-textfield__label" for="company">Your country * (for anonymous statistics)</label>
              <datalist id="countries">
                <option>Åland Islands</option>
                <option>Afghanistan (‫افغانستان‬‎)</option>
                <option>Albania (Shqipëri)</option>
                <option>Algeria (‫الجزائر‬‎)</option>
                <option>American Samoa</option>
                <option>Andorra</option>
                <option>Angola</option>
                <option>Anguilla</option>
                <option>Antigua and Barbuda</option>
                <option>Argentina</option>
                <option>Armenia (Հայաստան)</option>
                <option>Aruba</option>
                <option>Australia</option>
                <option>Austria (Österreich)</option>
                <option>Azerbaijan (Azərbaycan)</option>
                <option>Bahamas</option>
                <option>Bahrain (‫البحرين‬‎)</option>
                <option>Bangladesh (বাংলাদেশ)</option>
                <option>Barbados</option>
                <option>Belarus (Беларусь)</option>
                <option>Belgium (België)</option>
                <option>Belize</option>
                <option>Benin (Bénin)</option>
                <option>Bermuda</option>
                <option>Bhutan (འབྲུག)</option>
                <option>Bolivia</option>
                <option>Bosnia and Herzegovina (Босна и Херцеговина)</option>
                <option>Botswana</option>
                <option>Brazil (Brasil)</option>
                <option>British Indian Ocean Territory</option>
                <option>British Virgin Islands</option>
                <option>Brunei</option>
                <option>Bulgaria (България)</option>
                <option>Burkina Faso</option>
                <option>Burundi (Uburundi)</option>
                <option>Cambodia (កម្ពុជា)</option>
                <option>Cameroon (Cameroun)</option>
                <option>Canada</option>
                <option>Cape Verde (Kabu Verdi)</option>
                <option>Caribbean Netherlands</option>
                <option>Cayman Islands</option>
                <option>Central African Republic (République centrafricaine)</option>
                <option>Chad (Tchad)</option>
                <option>Chile</option>
                <option>China (中国)</option>
                <option>Christmas Island</option>>
                <option>Cocos (Keeling) Islands</option>
                <option>Colombia</option>
                <option>Comoros (‫جزر القمر‬‎)</option>
                <option>Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option>
                <option>Congo (Republic) (Congo-Brazzaville)</option>
                <option>Cook Islands</option>
                <option>Costa Rica</option>
                <option>Côte d’Ivoire</option>
                <option>Croatia (Hrvatska)</option>
                <option>Cuba</option>
                <option>Curaçao</option>
                <option>Cyprus (Κύπρος)</option>
                <option>Czech Republic (Česká republika)</option>
                <option>Denmark (Danmark)</option>
                <option>Djibouti</option>
                <option>Dominica</option>
                <option>Dominican Republic (República Dominicana)</option>
                <option>Ecuador</option>
                <option>Egypt (‫مصر‬‎)</option>
                <option>El Salvador</option>
                <option>Equatorial Guinea (Guinea Ecuatorial)</option>
                <option>Eritrea</option>
                <option>Estonia (Eesti)</option>
                <option>Ethiopia</option>
                <option>Falkland Islands (Islas Malvinas)</option>
                <option>Faroe Islands (Føroyar)</option>
                <option>Fiji</option>
                <option>Finland (Suomi)</option>
                <option>France</option>
                <option>French Guiana (Guyane française)</option>
                <option>French Polynesia (Polynésie française)</option>
                <option>Gabon</option>
                <option>Gambia</option>
                <option>Georgia (საქართველო)</option>
                <option>Germany (Deutschland)</option>
                <option>Ghana (Gaana)</option>
                <option>Gibraltar</option>
                <option>Greece (Ελλάδα)</option>
                <option>Greenland (Kalaallit Nunaat)</option>
                <option>Grenada</option>
                <option>Guadeloupe</option>
                <option>Guam</option>
                <option>Guatemala</option>
                <option>Guernsey</option>
                <option>Guinea (Guinée)</option>
                <option>Guinea-Bissau (Guiné Bissau)</option>
                <option>Guyana</option>
                <option>Haiti</option>
                <option>Honduras</option>
                <option>Hong Kong (香港)</option>
                <option>Hungary (Magyarország)</option>
                <option>Iceland (Ísland)</option>
                <option>India (भारत)</option>
                <option>Indonesia</option>
                <option>Iran (‫ایران‬‎)</option>
                <option>Iraq (‫العراق‬‎)</option>
                <option>Ireland</option>
                <option>Isle of Man</option>
                <option>Israel (‫ישראל‬‎)</option>
                <option>Italy (Italia)</option>
                <option>Jamaica</option>
                <option>Japan (日本)</option>
                <option>Jersey</option>
                <option>Jordan (‫الأردن‬‎)</option>
                <option>Kazakhstan (Казахстан)</option>
                <option>Kenya</option>
                <option>Kiribati</option>
                <option>Kosovo</option>
                <option>Kuwait (‫الكويت‬‎)</option>
                <option>Kyrgyzstan (Кыргызстан)</option>
                <option>Laos (ລາວ)</option>
                <option>Latvia (Latvija)</option>
                <option>Lebanon (‫لبنان‬‎)</option>
                <option>Lesotho</option>
                <option>Liberia</option>
                <option>Libya (‫ليبيا‬‎)</option>
                <option>Liechtenstein</option>
                <option>Lithuania (Lietuva)</option>
                <option>Luxembourg</option>
                <option>Macau (澳門)</option>
                <option>Macedonia (FYROM) (Македонија)</option>
                <option>Madagascar (Madagasikara)</option>
                <option>Malawi</option>
                <option>Malaysia</option>
                <option>Maldives</option>
                <option>Mali</option>
                <option>Malta</option>
                <option>Marshall Islands</option>
                <option>Martinique</option>
                <option>Mauritania (‫موريتانيا‬‎)</option>
                <option>Mauritius (Moris)</option>
                <option>Mayotte</option>
                <option>Mexico (México)</option>
                <option>Micronesia</option>
                <option>Moldova (Republica Moldova)</option>
                <option>Monaco</option>
                <option>Mongolia (Монгол)</option>
                <option>Montenegro (Crna Gora)</option>
                <option>Montserrat</option>
                <option>Morocco (‫المغرب‬‎)</option>
                <option>Mozambique (Moçambique)</option>
                <option>Myanmar (Burma) (မြန်မာ)</option>
                <option>Namibia (Namibië)</option>
                <option>Nauru</option>
                <option>Nepal (नेपाल)</option>
                <option>Netherlands (Nederland)</option>
                <option>New Caledonia (Nouvelle-Calédonie)</option>
                <option>New Zealand</option>
                <option>Nicaragua</option>
                <option>Niger (Nijar)</option>
                <option>Nigeria</option>
                <option>Niue</option>
                <option>Norfolk Island</option>
                <option>North Korea (조선 민주주의 인민 공화국)</option>
                <option>Northern Mariana Islands</option>
                <option>Norway (Norge)</option>
                <option>Oman (‫عُمان‬‎)</option>
                <option>Pakistan (‫پاکستان‬‎)</option>
                <option>Palau</option>
                <option>Palestine (‫فلسطين‬‎)</option>
                <option>Panama (Panamá)</option>
                <option>Papua New Guinea</option>
                <option>Paraguay</option>
                <option>Peru (Perú)</option>
                <option>Philippines</option>
                <option>Poland (Polska)</option>
                <option>Portugal</option>
                <option>Puerto Rico</option>
                <option>Qatar (‫قطر‬‎)</option>
                <option>Réunion (La Réunion)</option>
                <option>Romania (România)</option>
                <option>Russia (Россия)</option>
                <option>Rwanda</option>
                <option>Saint Barthélemy</option>
                <option>Saint Helena</option>
                <option>Saint Kitts and Nevis</option>
                <option>Saint Lucia</option>
                <option>Saint Martin (Saint-Martin (partie française))</option>
                <option>Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option>
                <option>Saint Vincent and the Grenadines</option>
                <option>Samoa</option>
                <option>San Marino</option>
                <option>São Tomé and Príncipe (São Tomé e Príncipe)</option>
                <option>Saudi Arabia (‫المملكة العربية السعودية‬‎)</option>
                <option>Senegal (Sénégal)</option>
                <option>Serbia (Србија)</option>
                <option>Seychelles</option>
                <option>Sierra Leone</option>
                <option>Singapore</option>
                <option>Sint Maarten</option>
                <option>Slovakia (Slovensko)</option>
                <option>Slovenia (Slovenija)</option>
                <option>Solomon Islands</option>
                <option>Somalia (Soomaaliya)</option>
                <option>South Africa</option>
                <option>South Korea (대한민국)</option>
                <option>South Sudan (‫جنوب السودان‬‎)</option>
                <option>Spain (España)</option>
                <option>Sri Lanka (ශ්‍රී ලංකාව)</option>
                <option>Sudan (‫السودان‬‎)</option>
                <option>Suriname</option>
                <option>Svalbard and Jan Mayen</option>
                <option>Swaziland</option>
                <option>Sweden (Sverige)</option>
                <option>Switzerland (Schweiz)</option>
                <option>Syria (‫سوريا‬‎)</option>
                <option>Taiwan (台灣)</option>
                <option>Tajikistan</option>
                <option>Tanzania</option>
                <option>Thailand (ไทย)</option>
                <option>Timor-Leste</option>
                <option>Togo</option>
                <option>Tokelau</option>
                <option>Tonga</option>
                <option>Trinidad and Tobago</option>
                <option>Tunisia (‫تونس‬‎)</option>
                <option>Turkey (Türkiye)</option>
                <option>Turkmenistan</option>
                <option>Turks and Caicos Islands</option>
                <option>Tuvalu</option>
                <option>U.S. Virgin Islands</option>
                <option>Uganda</option>
                <option>Ukraine (Україна)</option>
                <option>United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</option>
                <option>United Kingdom</option>
                <option>United States</option>
                <option>Uruguay</option>
                <option>Uzbekistan (Oʻzbekiston)</option>
                <option>Vanuatu</option>
                <option>Vatican City (Città del Vaticano)</option>
                <option>Venezuela</option>
                <option>Vietnam (Việt Nam)</option>
                <option>Wallis and Futuna (Wallis-et-Futuna)</option>
                <option>Western Sahara (‫الصحراء الغربية‬‎)</option>
                <option>Yemen (‫اليمن‬‎)</option>
                <option>Zambia</option>
                <option>Zimbabwe</option>
             </datalist>
             <span class="help">Please select your country</span>
            </div>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" id="company">
              <label class="mdl-textfield__label" for="company">Your company</label>
            </div>

            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="newsletter">
              <input type="checkbox" id="newsletter" class="mdl-checkbox__input" checked>
              <span class="mdl-checkbox__label">Yes, subscribe to the monthly ownCloud newsletter</span>
            </label>

            <button type="submit" class="button-oc">Submit registration<i class="fa fa-send"></i><i class="spinner fa fa-circle-o-notch fa-spin fa-fw"></i></button>

            <div class="success">
              <p>Your registration was successful. Please see you mail inbox to confirm your attendance.</p>
            </div>
          </form>

          <p class="smallfont">
            GDPR Disclaimer: By submitting this form, you are granting ownCloud GmbH permission to contact you. You can revoke permission any time using the unsubscribe link found at the bottom of every email or by sending an email to info@owncloud.com
          </p>
          <?php

          else:
          ?>
          <div class="confirm d-flex justify-content-center align-items-center">
            <div class="text-center">
              <h3 class="waiting">Waiting for confirmation...</h3>
              <h3 class="confirmed">Congratulations! Your registration was successful!</h3>
              <p class="confirmed">
                We're looking forward meeting you at ocCon18. <br />
                In the meantime, check your email inbox for further details.
              </p>
              <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
              <i class="fa fa-check hide" aria-hidden="true"></i>

              <h3 class="error">Uh oh... </h3>
              <img class="error" src="<?php echo get_template_directory_uri(); ?>/img/conference/emergency.gif" />
              <p class="error">
                We couldn't complete your registration. Maybe you confirmed already?<br />
                For help write us an email to <a href="mailto:community@owncloud.com">community@owncloud.com</a>.
              </p>
            </div>
          </div>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="becomeaspeaker" name="becomeaspeaker" id="becomeaspeaker">
    <div class="text-center header">
      <img src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-speaker.png" />
      <h2>Become a conference speaker!</h2>
    </div>

    <div class="container">
      <div class="row topics justify-content-center">
        <div class="col-md-6 text-center">
          <p>
            The ownCloud conference is from the community for the
            community. We know that there are many experts out there
            who can provide valuable insights.
            While some slots are reserved for booked speakers from
            industry and leading companies ownCloud values
            contributions from community members very much.
            <br />
            <br />
          </p>

          <p>
            This years topics include:
          </p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-4 topic">
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxwYXRoIGQ9Ik0xMi41LDI0aDI1YzAuNTUyLDAsMS0wLjQ0OCwxLTFzLTAuNDQ4LTEtMS0xaC0yNWMtMC41NTIsMC0xLDAuNDQ4LTEsMVMxMS45NDgsMjQsMTIuNSwyNHoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik0xMi41LDE2aDEwYzAuNTUyLDAsMS0wLjQ0OCwxLTFzLTAuNDQ4LTEtMS0xaC0xMGMtMC41NTIsMC0xLDAuNDQ4LTEsMVMxMS45NDgsMTYsMTIuNSwxNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik0xMi41LDMyaDI1YzAuNTUyLDAsMS0wLjQ0OCwxLTFzLTAuNDQ4LTEtMS0xaC0yNWMtMC41NTIsMC0xLDAuNDQ4LTEsMVMxMS45NDgsMzIsMTIuNSwzMnoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik0yOS41LDM4aC0xN2MtMC41NTIsMC0xLDAuNDQ4LTEsMXMwLjQ0OCwxLDEsMWgxN2MwLjU1MiwwLDEtMC40NDgsMS0xUzMwLjA1MiwzOCwyOS41LDM4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTI2LjUsNDZoLTE0Yy0wLjU1MiwwLTEsMC40NDgtMSwxczAuNDQ4LDEsMSwxaDE0YzAuNTUyLDAsMS0wLjQ0OCwxLTFTMjcuMDUyLDQ2LDI2LjUsNDZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8cGF0aCBkPSJNNDguNSwzNC4zNjNWMTQuNTg2TDMzLjkxNCwwSDEuNXY2MGg0NGM3LjE2OCwwLDEzLTUuODMyLDEzLTEzQzU4LjUsNDAuODY2LDU0LjIyNCwzNS43MjMsNDguNSwzNC4zNjN6IE0zNC41LDMuNDE0ICAgTDQ1LjA4NiwxNEgzNC41VjMuNDE0eiBNMzguNTc4LDU4SDMuNVYyaDI5djE0aDE0djE4LjA0NEM0Ni4xNTgsMzQuMDE1LDQ1LjgyNiwzNCw0NS41LDM0Yy03LjE2OCwwLTEzLDUuODMyLTEzLDEzICAgYzAsMC4zOTksMC4wMjUsMC43OTIsMC4wNiwxLjE4M2MwLjAwOCwwLjA5MSwwLjAxNywwLjE4MSwwLjAyNywwLjI3MmMwLjA0MywwLjM4MiwwLjA5OCwwLjc2LDAuMTczLDEuMTMxICAgYzAuMDA5LDAuMDQ0LDAuMDIxLDAuMDg3LDAuMDMsMC4xMzFjMC4wNzIsMC4zMzgsMC4xNTksMC42NywwLjI1NywwLjk5OGMwLjAyNSwwLjA4MiwwLjA0OCwwLjE2NSwwLjA3NCwwLjI0NiAgIGMwLjExMywwLjM1MiwwLjIzOSwwLjY5OCwwLjM4LDEuMDM3YzAuMDI3LDAuMDY0LDAuMDU3LDAuMTI2LDAuMDg0LDAuMTg5YzAuMTI5LDAuMjk2LDAuMjY5LDAuNTg1LDAuNDE5LDAuODY5ICAgYzAuMDM2LDAuMDY4LDAuMDcsMC4xMzcsMC4xMDcsMC4yMDVjMC4xNzUsMC4zMTcsMC4zNjMsMC42MjYsMC41NjQsMC45MjdjMC4wNDYsMC4wNjksMC4wOTQsMC4xMzUsMC4xNDEsMC4yMDMgICBjMC4xODMsMC4yNjQsMC4zNzUsMC41MjEsMC41NzYsMC43N2MwLjAzOCwwLjA0NywwLjA3NCwwLjA5NiwwLjExMywwLjE0M2MwLjIzMSwwLjI3OCwwLjQ3NSwwLjU0NCwwLjcyOCwwLjgwMSAgIGMwLjA2MiwwLjA2MywwLjEyNSwwLjEyNCwwLjE4OSwwLjE4NmMwLjI0NSwwLjIzOSwwLjQ5NiwwLjQ3MSwwLjc1OSwwLjY5YzAuMDIzLDAuMDIsMC4wNDUsMC4wNDEsMC4wNjksMC4wNiAgIGMwLjI4MiwwLjIzMiwwLjU3NywwLjQ0OSwwLjg3OSwwLjY1OGMwLjA3MywwLjA1MSwwLjE0NywwLjEsMC4yMjEsMC4xNDlDMzguNDI3LDU3Ljg5NywzOC41MDEsNTcuOTUxLDM4LjU3OCw1OHogTTQ1LjUsNTggICBjLTYuMDY1LDAtMTEtNC45MzUtMTEtMTFzNC45MzUtMTEsMTEtMTFjMC4zMTIsMCwwLjYyLDAuMDIxLDAuOTI2LDAuMDQ3YzAuMjkxLDAuMDI4LDAuNTkyLDAuMDY2LDAuOTA5LDAuMTE5bDAuNDQzLDAuMDc0ICAgQzUyLjc1MywzNy4yOTMsNTYuNSw0MS43MTYsNTYuNSw0N0M1Ni41LDUzLjA2NSw1MS41NjUsNTgsNDUuNSw1OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik01MC42NzksNDEuNDI5bC01LjU5Niw4LjA0bC0zLjk0OS0zLjI0MmMtMC40MjYtMC4zNTEtMS4wNTctMC4yODgtMS40MDcsMC4xMzljLTAuMzUxLDAuNDI3LTAuMjg5LDEuMDU3LDAuMTM5LDEuNDA3ICAgbDQuNzg2LDMuOTI5YzAuMTgsMC4xNDcsMC40MDQsMC4yMjcsMC42MzQsMC4yMjdjMC4wNDUsMCwwLjA5MS0wLjAwMywwLjEzNy0wLjAwOWMwLjI3Ni0wLjAzOSwwLjUyNC0wLjE5LDAuNjg0LTAuNDE5bDYuMjE0LTguOTI5ICAgYzAuMzE1LTAuNDUzLDAuMjA0LTEuMDc3LTAuMjUtMS4zOTJDNTEuNjE3LDQwLjg2Myw1MC45OTUsNDAuOTc2LDUwLjY3OSw0MS40Mjl6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
          <p>
            Best Practices in ownCloud Deployments.
          </p>
        </div>

        <div class="col-md-4 topic">
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDM0MCAzNDAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM0MCAzNDA7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMTk5LjcxMiwxMjguNTJsLTE4LjQtMTAuNDhjMC41NzYtNS4zMTgsMC41NzYtMTAuNjgyLDAtMTZsMTguNC0xMC42NGMxMC4wMDktNS43ODQsMTMuNDQ1LTE4LjU4LDcuNjgtMjguNmwtOS4wNC0xNS42NCAgICBjLTUuNzk3LTkuOTctMTguNTU5LTEzLjM4NS0yOC41Ni03LjY0bC0xOC40NCwxMC41MmMtNC4yODYtMy4xNTQtOC44OTktNS44MzYtMTMuNzYtOFYyMC45MiAgICBDMTM3LjU3LDkuMzc1LDEyOC4yMTcsMC4wMjIsMTE2LjY3MiwwaC0xOC4wNGMtMTEuNTQ1LDAuMDIyLTIwLjg5OCw5LjM3NS0yMC45MiwyMC45MnYyMS4xMmMtNC44NjEsMi4xNjMtOS40NzUsNC44NDYtMTMuNzYsOCAgICBsLTE4LjQtMTAuNjRjLTEwLjAyLTUuNzY1LTIyLjgxNi0yLjMyOS0yOC42LDcuNjhsLTkuMDQsMTUuNjRjLTUuNzM4LDEwLjAxMS0yLjMwNSwyMi43NzcsNy42OCwyOC41NmwxOC40LDEwLjc2ICAgIGMtMC41NzYsNS4zMTgtMC41NzYsMTAuNjgyLDAsMTZsLTE4LjQsMTAuNjRjLTEwLjAwOSw1Ljc4NC0xMy40NDUsMTguNTgtNy42OCwyOC42bDkuMDQsMTUuNjQgICAgYzUuNzk4LDkuOTk0LDE4LjU5LDEzLjQxMiwyOC42LDcuNjRsMTguNC0xMC42NGM0LjI4NiwzLjE1Myw4Ljg5OSw1LjgzNSwxMy43Niw4djIxLjI0YzAuMDIyLDExLjU0NSw5LjM3NSwyMC44OTgsMjAuOTIsMjAuOTIgICAgaDE4LjA0YzExLjU0NS0wLjAyMiwyMC44OTgtOS4zNzUsMjAuOTItMjAuOTJ2LTIxLjRjNC44Ni0yLjE2Niw5LjQ3My00Ljg0OCwxMy43Ni04bDE4LjQsMTAuNjQgICAgYzEwLjAyLDUuNzY1LDIyLjgxNiwyLjMyOSwyOC42LTcuNjhsOS4wNC0xNS42NEMyMTMuMTMsMTQ3LjA2OSwyMDkuNjk3LDEzNC4zMDMsMTk5LjcxMiwxMjguNTJ6IE0yMDAuMzEyLDE1My4wNGwtOS4wNCwxNS42NCAgICBjLTMuNTAxLDYuMDE0LTExLjIxNCw4LjA1MS0xNy4yMjgsNC41NWMtMC4wMTctMC4wMS0wLjAzNC0wLjAyLTAuMDUyLTAuMDNsLTIwLjgtMTJjLTEuNDg0LTAuOTU1LTMuNDE4LTAuODI1LTQuNzYsMC4zMiAgICBjLTUuMDIxLDMuOTkyLTEwLjYsNy4yMjctMTYuNTYsOS42Yy0xLjY3LDAuNi0yLjc0NSwyLjIyOS0yLjY0LDR2MjRjMCw2Ljk1OS01LjY0MSwxMi42LTEyLjYsMTIuNmgtMTguMDQgICAgYy02Ljk1OSwwLTEyLjYtNS42NDEtMTIuNjAxLTEyLjU5OWMwLTAuMDQsMC0wLjA4LDAuMDAxLTAuMTIxdi0yNGMwLjEwNS0xLjc3MS0wLjk3LTMuNC0yLjY0LTQgICAgYy01Ljk2LTIuMzczLTExLjUzOS01LjYwOC0xNi41Ni05LjZjLTEuMzc3LTEuMTI3LTMuMzM0LTEuMjA5LTQuOC0wLjJsLTIwLjgsMTJjLTYuMDIxLDMuNDczLTEzLjcxNywxLjQxNS0xNy4yLTQuNmwtOS4wNC0xNS42NCAgICBjLTMuNDczLTYuMDIxLTEuNDE1LTEzLjcxNyw0LjYtMTcuMmwyMC44LTEyYzEuNTExLTAuODE3LDIuMzMyLTIuNTA3LDIuMDQtNC4yYy0wLjM2MS0zLjE2LTAuNDk1LTYuMzQxLTAuNC05LjUyICAgIGMtMC4wMDMtMy4yMTIsMC4yMjQtNi40MiwwLjY4LTkuNmMwLjI5Mi0xLjY5My0wLjUyOS0zLjM4My0yLjA0LTQuMmwtMjAuOC0xMmMtNS45OTYtMy40OTgtOC4wNS0xMS4xNzYtNC42LTE3LjJsOS4wNC0xNS42NCAgICBjMy40ODMtNi4wMTUsMTEuMTc5LTguMDczLDE3LjItNC42bDIwLjgsMTJjMS40NzQsMC45MDQsMy4zNjIsMC43NTksNC42OC0wLjM2YzUuMDIzLTMuOTc5LDEwLjYwMi03LjIsMTYuNTYtOS41NiAgICBjMS42Ny0wLjYsMi43NDUtMi4yMjksMi42NC00di0yNGMwLTYuOTU5LDUuNjQxLTEyLjYsMTIuNi0xMi42aDE4LjA0YzYuOTU5LDAsMTIuNiw1LjY0MSwxMi42LDEyLjZ2MjQgICAgYy0wLjEwNSwxLjc3MSwwLjk3LDMuNCwyLjY0LDRjNS45NiwyLjM3MiwxMS41NCw1LjYwNiwxNi41Niw5LjZjMS4zMTgsMS4xMTksMy4yMDYsMS4yNjQsNC42OCwwLjM2bDIwLjgtMTIgICAgYzYuMDI0LTMuNDUsMTMuNzAyLTEuMzk2LDE3LjIsNC42bDkuMDQsMTUuNjRjMy40NzMsNi4wMjEsMS40MTUsMTMuNzE3LTQuNiwxNy4ybC0yMC44LDEyYy0xLjUxMSwwLjgxNy0yLjMzMiwyLjUwNy0yLjA0LDQuMiAgICBjMC45MjUsNi4zNTMsMC45MjUsMTIuODA3LDAsMTkuMTZjLTAuMjkyLDEuNjkzLDAuNTI5LDMuMzgzLDIuMDQsNC4ybDIwLjgsMTJDMjAxLjcyNywxMzkuMzIzLDIwMy43ODUsMTQ3LjAxOSwyMDAuMzEyLDE1My4wNHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xMDcuNjMyLDY0LjY4Yy0yNS4wMDcsMC00NS4yOCwyMC4yNzMtNDUuMjgsNDUuMjhjMCwyNS4wMDcsMjAuMjczLDQ1LjI4LDQ1LjI4LDQ1LjI4YzI0Ljk3NiwwLDQ1LjIzNi0yMC4yMjQsNDUuMjgtNDUuMiAgICBDMTUyLjkzNCw4NS4wMSwxMzIuNjYyLDY0LjcwMiwxMDcuNjMyLDY0LjY4eiBNMTA3LjYzMiwxNDYuOTJ2LTAuMDRjLTIwLjQxMiwwLTM2Ljk2LTE2LjU0OC0zNi45Ni0zNi45NiAgICBjMC0yMC40MTIsMTYuNTQ4LTM2Ljk2LDM2Ljk2LTM2Ljk2YzIwLjQxMiwwLDM2Ljk2LDE2LjU0OCwzNi45NiwzNi45NmMwLDAuMDQsMCwwLjA4LDAsMC4xMiAgICBDMTQ0LjU0OCwxMzAuNDIxLDEyOC4wMTMsMTQ2LjkyLDEwNy42MzIsMTQ2LjkyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMwMC44NzIsMjY4LjA4bC0xMy42NC04YzAtMS44OCwwLjI4LTMuNzYsMC4yOC01LjZjMC0xLjg0LDAtMy43Ni0wLjI4LTUuNmwxMy42NC04YzMuOTE1LTIuMjYsNi43NjYtNS45ODksNy45Mi0xMC4zNiAgICBjMS4xOTQtNC4zNzEsMC41ODktOS4wMzgtMS42OC0xMi45NmwtNi45Ni0xMmMtNC43MzUtOC4xMzktMTUuMTUzLTEwLjkyNy0yMy4zMi02LjI0bC0xMy42NCw4Yy0zLjA1LTIuMTktNi4zMDUtNC4wNzktOS43Mi01LjY0ICAgIFYxODUuOGMwLTkuNDMzLTcuNjQ3LTE3LjA4LTE3LjA4LTE3LjA4aC0xMy44OGMtOS40MzMsMC0xNy4wOCw3LjY0Ny0xNy4wOCwxNy4wOHYxNS43NmMtMy40MTMsMS41NDgtNi42NjksMy40MjMtOS43Miw1LjYgICAgbC0xMy42NC04Yy04LjE2Ny00LjY4Ny0xOC41ODUtMS44OTktMjMuMzIsNi4yNGwtNi45NiwxMmMtNC43OSw4LjEyNi0yLjA4NiwxOC41OTcsNi4wNDEsMjMuMzg3ICAgIGMwLjA1MywwLjAzMSwwLjEwNiwwLjA2MiwwLjE1OSwwLjA5M2wxMy42NCw4YzAsMS44OC0wLjI4LDMuNzYtMC4yOCw1LjZjMCwxLjg0LDAsMy43NiwwLjI4LDUuNmwtMTMuNjQsOCAgICBjLTguMTM5LDQuNzM1LTEwLjkyNywxNS4xNTMtNi4yNCwyMy4zMmw2Ljk2LDEyYzQuNzc0LDguMDcyLDE1LjE1NCwxMC44LDIzLjI4LDYuMTJsMTMuNjQtOGMzLjA1LDIuMTksNi4zMDUsNC4wNzksOS43Miw1LjY0ICAgIHYxNS43NmMwLDkuNDMzLDcuNjQ3LDE3LjA4LDE3LjA4LDE3LjA4aDEzLjk2YzkuNDMzLDAsMTcuMDgtNy42NDcsMTcuMDgtMTcuMDh2LTE1LjY4YzMuNDE0LTEuNTQ3LDYuNjY5LTMuNDIyLDkuNzItNS42bDEzLjY0LDggICAgYzguMTY3LDQuNjg3LDE4LjU4NSwxLjg5OSwyMy4zMi02LjI0bDYuOTYtMTJDMzExLjc5OSwyODMuMjMzLDMwOS4wMTEsMjcyLjgxNSwzMDAuODcyLDI2OC4wOHogTTI5OS45OTIsMjg2Ljg0bC02Ljk2LDEyICAgIGMtMi40MTQsNC4xOTMtNy43NjksNS42MzUtMTEuOTYyLDMuMjIyYy0wLjAxMy0wLjAwNy0wLjAyNS0wLjAxNS0wLjAzOC0wLjAyMmwtMTYtOS4yOGMtMS40NzQtMC45MDQtMy4zNjItMC43NTktNC42OCwwLjM2ICAgIGMtMy43OTcsMy4wMTMtOC4wMTUsNS40NTItMTIuNTIsNy4yNGMtMS42NywwLjYtMi43NDUsMi4yMjktMi42NCw0djE4LjUyYzAsNC44MzgtMy45MjIsOC43Ni04Ljc2LDguNzZjMCwwLDAsMCwwLDBoLTEzLjk2ICAgIGMtNC44MzgsMC04Ljc2LTMuOTIyLTguNzYtOC43NnYtMTguNGMwLjEwNS0xLjc3MS0wLjk3LTMuNC0yLjY0LTRjLTQuNTA1LTEuNzg4LTguNzIzLTQuMjI3LTEyLjUyLTcuMjQgICAgYy0xLjMyOS0xLjAxMy0zLjE0Ny0xLjA5Mi00LjU2LTAuMmwtMTYsOS4yOGMtNC4xOTksMi40MTktOS41NjMsMC45ODktMTItMy4ybC02Ljk2LTEyYy0yLjQxOS00LjE5OS0wLjk4OS05LjU2MywzLjItMTJsMTYtOS4yOCAgICBjMS41MTEtMC44MTcsMi4zMzItMi41MDcsMi4wNC00LjJjLTAuNjk3LTQuODAyLTAuNjk3LTkuNjc5LDAtMTQuNDhjMC4yOTItMS42OTMtMC41MjktMy4zODMtMi4wNC00LjJsLTE2LTkuMjQgICAgYy00LjE5My0yLjQxNC01LjYzNS03Ljc2OS0zLjIyMi0xMS45NjJjMC4wMDctMC4wMTMsMC4wMTUtMC4wMjUsMC4wMjItMC4wMzhsNi45Ni0xMmMyLjQzNy00LjE4OSw3LjgwMS01LjYxOSwxMi0zLjJsMTYsOS4yOCAgICBjMS40NzQsMC45MDQsMy4zNjIsMC43NTksNC42OC0wLjM2YzMuNzk4LTMuMDExLDguMDE2LTUuNDUsMTIuNTItNy4yNGMxLjY3LTAuNiwyLjc0NS0yLjIyOSwyLjY0LTR2LTE4LjQgICAgYzAtNC44MzgsMy45MjItOC43Niw4Ljc2LTguNzZjMCwwLDAsMCwwLDBoMTMuOGM0LjgzOCwwLDguNzYsMy45MjIsOC43Niw4Ljc2YzAsMCwwLDAsMCwwdjE4LjUyYy0wLjEwNSwxLjc3MSwwLjk3LDMuNCwyLjY0LDQgICAgYzQuNTA1LDEuNzg4LDguNzIzLDQuMjI3LDEyLjUyLDcuMjRjMS4zMTgsMS4xMTksMy4yMDYsMS4yNjQsNC42OCwwLjM2bDE2LTkuMjRjNC4xODEtMi40MzQsOS41NDQtMS4wMTksMTEuOTc4LDMuMTYyICAgIGMwLjAwNywwLjAxMywwLjAxNSwwLjAyNSwwLjAyMiwwLjAzOGw2Ljk2LDEyYzIuNDE5LDQuMTk5LDAuOTg5LDkuNTYzLTMuMiwxMmwwLjA0LTAuMmwtMTYsOS4yNCAgICBjLTEuNTExLDAuODE3LTIuMzMyLDIuNTA3LTIuMDQsNC4yYzAuMzQ4LDIuMzk4LDAuNTIyLDQuODE3LDAuNTIsNy4yNGMtMC4wMDEsMi40MjMtMC4xNzUsNC44NDItMC41Miw3LjI0ICAgIGMtMC4yMDMsMS42MjUsMC42MDUsMy4yMSwyLjA0LDRsMTYsOS4yNEMzMDAuOTgxLDI3Ny4yNzcsMzAyLjQxMSwyODIuNjQxLDI5OS45OTIsMjg2Ljg0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIyOS40MzIsMjE4LjU2Yy0xOS44ODIsMC0zNiwxNi4xMTgtMzYsMzZzMTYuMTE4LDM2LDM2LDM2czM2LTE2LjExOCwzNi0zNlMyNDkuMzE0LDIxOC41NiwyMjkuNDMyLDIxOC41NnogICAgIE0yMjkuNDcyLDI4Mi4wNGMtMC4wMTMsMC0wLjAyNywwLTAuMDQsMHYtMC4xMmMtMTUuMTk5LDAtMjcuNTItMTIuMzIxLTI3LjUyLTI3LjUyYzAtMTUuMTk5LDEyLjMyMS0yNy41MiwyNy41Mi0yNy41MiAgICBjMTUuMTk5LDAsMjcuNTIsMTIuMzIxLDI3LjUyLDI3LjUyQzI1Ni45OTYsMjY5LjYyMSwyNDQuNjkzLDI4MS45OTYsMjI5LjQ3MiwyODIuMDR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzM0Ljg3MiwxMTAuMDRsLTAuMTYtOS45NmMtMC4xMzEtNy4zMzUtNi4xMDQtMTMuMjE5LTEzLjQ0LTEzLjI0aC0wLjJoLTEwLjZjLTEuMDAyLTIuMDM3LTIuMTY1LTMuOTktMy40OC01Ljg0ICAgIGw1LjE2LTkuMjRjMy41ODgtNi40ODcsMS4yNjUtMTQuNjUzLTUuMi0xOC4yOGwtOC45Ni00LjY4Yy02LjQ2LTMuNDc0LTE0LjUxMS0xLjE0NS0xOC4xMiw1LjI0bC01LjEyLDkuMiAgICBjLTIuMjYzLTAuMTc5LTQuNTM3LTAuMTc5LTYuOCwwbC01LjQ0LTkuMDhjLTMuODIzLTYuMzU3LTEyLjA2NC04LjQzLTE4LjQ0LTQuNjRsLTguNiw1LjE2Yy02LjM1NywzLjgyMy04LjQzLDEyLjA2NC00LjY0LDE4LjQ0ICAgIGw1LjQ0LDkuMDhjLTAuNjQsMC45Ni0xLjIyNywxLjkzMy0xLjc2LDIuOTJjLTAuNTYsMS0xLjA4LDItMS41MiwzLjA0aC0xMC42Yy03LjQ0MywwLjE1MS0xMy4zNTUsNi4zMDgtMTMuMjAzLDEzLjc1MSAgICBjMC4wMDEsMC4wNDMsMC4wMDIsMC4wODYsMC4wMDMsMC4xMjl2MTBjMC4wMjUsMy41NTMsMS40NjQsNi45NTEsNCw5LjQ0YzIuNTYxLDIuNDc3LDUuOTk3LDMuODQzLDkuNTYsMy44aDEwLjYgICAgYzEuMDAzLDIuMDM2LDIuMTY3LDMuOTg5LDMuNDgsNS44NGwtNS4xNiw5LjI0Yy0zLjU4OCw2LjQ4Ny0xLjI2NSwxNC42NTMsNS4yLDE4LjI4bDkuMTIsNC43NmMxLjk4MiwxLjEwMiw0LjIxMiwxLjY4MSw2LjQ4LDEuNjggICAgYzEuMjU4LDAuMDAxLDIuNTEtMC4xNzQsMy43Mi0wLjUyYzMuNDExLTAuOTg1LDYuMjktMy4yODgsOC02LjRsNS4xNi05LjI0YzIuMjYzLDAuMTg2LDQuNTM3LDAuMTg2LDYuOCwwbDUuNCw5LjEyICAgIGMzLjgyMyw2LjM1NywxMi4wNjQsOC40MywxOC40NCw0LjY0bDguNTYtNS4xNmM2LjM1Ny0zLjgyMyw4LjQzLTEyLjA2NCw0LjY0LTE4LjQ0bC01LjQ0LTkuMDRjMC42NC0wLjk2LDEuMjQtMS45MiwxLjc2LTIuOTIgICAgYzAuNTItMSwxLjA4LTIsMS41Mi0zLjA0aDEwLjZjNy40NDQtMC4xMjYsMTMuMzc2LTYuMjYzLDEzLjI1LTEzLjcwNkMzMzQuODgsMTEwLjI2MiwzMzQuODc3LDExMC4xNTEsMzM0Ljg3MiwxMTAuMDR6ICAgICBNMzI2LjM5MiwxMTAuMmMwLjA2OCwyLjc4My0yLjA5OSw1LjExLTQuODgsNS4yNGwtMTMuMzIsMC4yYy0xLjc4Mi0wLjA5OS0zLjQxNCwwLjk5NC00LDIuNjggICAgYy0wLjU5NiwxLjU2OS0xLjMwNSwzLjA5My0yLjEyLDQuNTZjLTAuODE4LDEuNDc3LTEuNzQsMi44OTQtMi43Niw0LjI0Yy0xLjA2MiwxLjMzNy0xLjE1OSwzLjIwMS0wLjI0LDQuNjRsNi45MiwxMS40NCAgICBjMS4zNDYsMi4zNjQsMC42MDgsNS4zNjktMS42OCw2Ljg0bC04LjU2LDUuMTJjLTIuNDMyLDEuNDQxLTUuNTcyLDAuNjU2LTcuMDQtMS43NmwtNi43Mi0xMS4zNiAgICBjLTAuODQ1LTEuNDk2LTIuNTUyLTIuMjg1LTQuMjQtMS45NmMtMy4zNDIsMC40ODktNi43MzgsMC40ODktMTAuMDgsMGMtMS42NDMtMC4xODgtMy4yMzMsMC42NTQtNCwyLjEybC02Ljc2LDExLjg0ICAgIGMtMS4zODQsMi40NTYtNC40ODMsMy4zNDctNi45NiwybC04Ljc2LTQuOGMtMi40NzQtMS4zNjktMy4zNy00LjQ4NS0yLjAwMS02Ljk1OWMwLDAsMC0wLjAwMSwwLjAwMS0wLjAwMWw2LjQ4LTExLjY0ICAgIGMwLjg3NC0xLjQ3MywwLjcxMy0zLjMzOC0wLjQtNC42NGMtMi4xMy0yLjYxNC0zLjg2OS01LjUyNS01LjE2LTguNjRjLTAuNjI4LTEuNjM4LTIuMjUtMi42NzYtNC0yLjU2bC0xMy4zMiwwLjIgICAgYy0xLjM1MiwwLTIuNjU0LTAuNTE1LTMuNjQtMS40NGMtMC45ODEtMC45NDMtMS41NDMtMi4yNC0xLjU2LTMuNnYtMTBjLTAuMDQ1LTIuODI3LDIuMjExLTUuMTU1LDUuMDM5LTUuMmMwLDAsMC4wMDEsMCwwLjAwMSwwICAgIGwxMy4zMi0wLjJjMS43ODIsMC4wOTksMy40MTQtMC45OTQsNC0yLjY4YzAuNTY5LTEuNTgsMS4yNTEtMy4xMTcsMi4wNC00LjZjMC44MTQtMS40NzksMS43MzctMi44OTYsMi43Ni00LjI0ICAgIGMxLjA5NC0xLjMzNiwxLjIwNi0zLjIyMywwLjI4LTQuNjhsLTcuMDQtMTEuNGMtMS4zODQtMi40MDMtMC42MDQtNS40NywxLjc2LTYuOTJsOC41Ni01LjEyYzIuNDIyLTEuNDYsNS41NjgtMC42ODEsNy4wMjgsMS43NDEgICAgYzAuMDA0LDAuMDA2LDAuMDA4LDAuMDEzLDAuMDEyLDAuMDE5bDYuODQsMTEuMzZjMC44NDUsMS40OTYsMi41NTIsMi4yODUsNC4yNCwxLjk2YzMuMzI5LTAuNDg4LDYuNzExLTAuNDg4LDEwLjA0LDAgICAgYzEuNjQzLDAuMTg4LDMuMjMzLTAuNjU0LDQtMi4xMmw2LjY4LTExLjg0YzEuMzY5LTIuNDc0LDQuNDg1LTMuMzcsNi45NTktMi4wMDFjMCwwLDAuMDAxLDAsMC4wMDEsMC4wMDFsOC43Miw0Ljg4ICAgIGMyLjQ1NiwxLjM4NCwzLjM0Nyw0LjQ4MywyLDYuOTZsLTYuNDQsMTEuNjRjLTAuODc0LDEuNDczLTAuNzEzLDMuMzM4LDAuNCw0LjY0YzIuMTMyLDIuNjEzLDMuODcxLDUuNTI0LDUuMTYsOC42NCAgICBjMC42MjgsMS42MzgsMi4yNSwyLjY3Niw0LDIuNTZsMTMuMzItMC4yYzIuNzk3LDAsNS4wNzYsMi4yNDQsNS4xMiw1LjA0VjExMC4yeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI4NS40MjcsODIuNzM1Yy0wLjEwNS0wLjA1OS0wLjIxLTAuMTE4LTAuMzE1LTAuMTc1Yy0xMi45OTctNy4yMi0yOS4zODUtMi41MzgtMzYuNjA2LDEwLjQ1OSAgICBzLTIuNTM4LDI5LjM4NiwxMC40NTksMzYuNjA2YzEyLjk4Myw3LjIxMywyOS4zNTUsMi41NDgsMzYuNTg3LTEwLjQyNUMzMDIuODI1LDEwNi4zMzUsMjk4LjI5Miw5MC4wMDksMjg1LjQyNyw4Mi43MzV6ICAgICBNMjg4LjI3MiwxMTUuMTZMMjg4LjI3MiwxMTUuMTZjLTUuMDE1LDguOTY1LTE2LjM0OCwxMi4xNjctMjUuMzEzLDcuMTUyYy04Ljk2NS01LjAxNS0xMi4xNjctMTYuMzQ4LTcuMTUyLTI1LjMxMyAgICBjMi4zOTYtNC4yODMsNi4zODgtNy40NDYsMTEuMTA1LTguNzk5YzEuNjY1LTAuNDc2LDMuMzg4LTAuNzE4LDUuMTItMC43MmMxMC4yOTUsMC4wMzQsMTguNjEzLDguNDA2LDE4LjU3OSwxOC43MDEgICAgQzI5MC42LDEwOS4zMjMsMjg5Ljc5NiwxMTIuNDEyLDI4OC4yNzIsMTE1LjE2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
          <p>
            Tweaking ownCloud and optimizations around ownCloud.
          </p>
        </div>

        <div class="col-md-4 topic">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/conference/icon-chart.png" /> -->
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ4OC4zOTksNDkyaC0yMS45MzNWMTczLjUzNmMwLTE0LjgyMy0xMi4wNi0yNi44ODItMjYuODgyLTI2Ljg4MkgzOTAuNTZjLTE0LjgyMywwLTI2Ljg4MiwxMi4wNi0yNi44ODIsMjYuODgyVjQ5MiAgICBoLTU1LjY5MlYzMTcuODI1YzAtMTQuODIzLTEyLjA1OS0yNi44ODItMjYuODgyLTI2Ljg4MkgyMzIuMDhjLTE0LjgyMywwLTI2Ljg4MiwxMi4wNi0yNi44ODIsMjYuODgyVjQ5MmgtNTUuNjkydi05MC4yMDQgICAgYzAtMTQuODIzLTEyLjA2LTI2Ljg4Mi0yNi44ODItMjYuODgySDczLjU5OWMtMTQuODIzLDAtMjYuODgyLDEyLjA2LTI2Ljg4MiwyNi44ODJWNDkySDIzLjYwMWMtNS41MjMsMC0xMCw0LjQ3Ny0xMCwxMCAgICBzNC40NzcsMTAsMTAsMTBoNDY0Ljc5OGM1LjUyMywwLDEwLTQuNDc3LDEwLTEwUzQ5My45MjIsNDkyLDQ4OC4zOTksNDkyeiBNMTI5LjUwNCw0OTJINjYuNzE2di05MC4yMDQgICAgYzAtMy43OTUsMy4wODctNi44ODIsNi44ODItNi44ODJoNDkuMDI0YzMuNzk1LDAsNi44ODIsMy4wODcsNi44ODIsNi44ODJWNDkyeiBNMjg3Ljk4NSw0OTJoLTYyLjc4OFYzMTcuODI1ICAgIGMwLTMuNzk1LDMuMDg3LTYuODgyLDYuODgyLTYuODgyaDQ5LjAyNGMzLjc5NCwwLDYuODgyLDMuMDg3LDYuODgyLDYuODgyVjQ5MnogTTQ0Ni40NjYsNDkyaC02Mi43ODhWMTczLjUzNiAgICBjMC0zLjc5NSwzLjA4Ny02Ljg4Miw2Ljg4Mi02Ljg4Mmg0OS4wMjRjMy43OTUsMCw2Ljg4MiwzLjA4Nyw2Ljg4Miw2Ljg4MlY0OTJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDY2LjQ0MiwxMC41MTZjMC4xNC0yLjcyOS0wLjgyLTUuNTA0LTIuOTA0LTcuNTg4Yy0yLjA4NC0yLjA4NC00Ljg1OS0zLjA0NS03LjU4OC0yLjkwNCAgICBDNDU1Ljc4OSwwLjAxNyw0NTUuNjMsMCw0NTUuNDY2LDBoLTYwLjVjLTUuNTIzLDAtMTAsNC40NzctMTAsMTBzNC40NzcsMTAsMTAsMTBoMzcuMzU3bC05OC44NTcsOTguODU4bC0zNy4yOC0zNy4yOCAgICBjLTEuODc1LTEuODc1LTQuNDE5LTIuOTI5LTcuMDcxLTIuOTI5Yy0yLjY1MiwwLTUuMTk2LDEuMDU0LTcuMDcxLDIuOTI5bC0xNzkuNzY5LDE3OS43N2MtMy45MDUsMy45MDUtMy45MDUsMTAuMjM3LDAsMTQuMTQzICAgIGMxLjk1MywxLjk1MSw0LjUxMiwyLjkyNyw3LjA3MSwyLjkyN3M1LjExOS0wLjk3Niw3LjA3MS0yLjkyOUwyODkuMTE1LDEwMi43OWwzNy4yOCwzNy4yOGMzLjkwNSwzLjkwNSwxMC4yMzcsMy45MDUsMTQuMTQzLDAgICAgTDQ0Ni40NjYsMzQuMTQzdjMzLjgxYzAsNS41MjMsNC40NzcsMTAsMTAsMTBzMTAtNC40NzcsMTAtMTBWMTFDNDY2LjQ2NiwxMC44MzcsNDY2LjQ0OSwxMC42NzgsNDY2LjQ0MiwxMC41MTZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8Y2lyY2xlIGN4PSI3NS42NCIgY3k9IjMwMy4zMSIgcj0iMTAiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
          <p>
            Automating and Scaling ownCloud
          </p>
        </div>

        <div class="col-md-4 topic">
          <svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.19 45.32"><defs><style>.cls-1{fill:none;stroke:#1c283c;stroke-miterlimit:10;stroke-width:2px;}.cls-2{fill:#1c283c;}</style></defs><title>file</title><circle class="cls-1" cx="24.25" cy="7.51" r="6.51"/><circle class="cls-1" cx="7.51" cy="37.68" r="6.51"/><circle class="cls-1" cx="40.68" cy="37.82" r="6.51"/><circle class="cls-2" cx="24.25" cy="26" r="4.44"/></svg>
          <p>
            Terraform, Kubernetes, Docker, Windows Network Drive, ADFS, ownCloud Phoenix and modularization efforts.
          </p>
        </div>

        <div class="col-md-4 topic">
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAxIDUxMi4wMDEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDEgNTEyLjAwMTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01MTIuMDAxLDg5Ljc1NFYwaC04OS43NTR2MzYuOTQ3SDMwMC44NzhWMGgtODkuNzU0djM2Ljk0N0g4OS43NTVWMEgwLjAwMXY4OS43NTRoMzYuOTQ3djMzMi40OTJIMC4wMDF2ODkuNzU0aDg5Ljc1NCAgICB2LTMxLjY2OWgxMjEuMzY4djMxLjY2OWg4OS43NTR2LTMxLjY2OWgxMjEuMzY4djMxLjY2OWg4OS43NTR2LTg5Ljc1NGgtMzYuOTQ3Vjg5Ljc1NEg1MTIuMDAxeiBNMjI2Ljk4NSwxNS44NjFoNTguMDMydjU4LjAzMiAgICBoLTU4LjAzMlYxNS44NjF6IE0xNS44NjIsNzMuODkzVjE1Ljg2MWg1OC4wMzJ2NTguMDMySDE1Ljg2MnogTTczLjg5NCw0OTYuMTM5SDE1Ljg2MnYtNTguMDMyaDU4LjAzMlY0OTYuMTM5eiBNMjg1LjAxNiw0OTYuMTM5ICAgIGgtNTguMDMydi01OC4wMzJoNTguMDMyVjQ5Ni4xMzl6IE00MjIuMjQ3LDQ2NC40N0gzMDAuODc4di00Mi4yMjRoLTg5Ljc1NHY0Mi4yMjRIODkuNzU1di00Mi4yMjRINTIuODA4Vjg5Ljc1NGgzNi45NDdWNTIuODA4ICAgIGgxMjEuMzY4djM2Ljk0N2g4OS43NTRWNTIuODA4aDEyMS4zNjh2MzYuOTQ3aDM2Ljk0NXYzMzIuNDkxaC0zNi45NDRWNDY0LjQ3eiBNNDk2LjEzOSw0MzguMTA3djU4LjAzMmgtNTguMDMydi01OC4wMzJINDk2LjEzOXogICAgIE00MzguMTA4LDczLjg5M1YxNS44NjFoNTguMDMydjU4LjAzMkg0MzguMTA4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHJlY3QgeD0iMzQuMzIxIiB5PSIzNi45NDciIHdpZHRoPSIyMS4xMTMiIGhlaWdodD0iMTUuODYxIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIzNC4zMjEiIHk9IjQ1OS4xODgiIHdpZHRoPSIyMS4xMTMiIGhlaWdodD0iMTUuODYxIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIyNDUuNDQiIHk9IjQ1OS4xODgiIHdpZHRoPSIyMS4xMTMiIGhlaWdodD0iMTUuODYxIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIyNDUuNDQiIHk9IjM2Ljk0NyIgd2lkdGg9IjIxLjExMyIgaGVpZ2h0PSIxNS44NjEiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxyZWN0IHg9IjQ1Ni41NjYiIHk9IjM2Ljk0NyIgd2lkdGg9IjIxLjExMyIgaGVpZ2h0PSIxNS44NjEiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxyZWN0IHg9IjQ1Ni41NjYiIHk9IjQ1OS4xODgiIHdpZHRoPSIyMS4xMTMiIGhlaWdodD0iMTUuODYxIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzA5LjA0LDEyMi40NTNIMjAyLjk2MUwxMDIuMTMsMzk2Ljk0aDk2LjM2NGwyNi4zOS04NC40NDloNjIuMjMzbDI2LjM5LDg0LjQ0OWg5Ni4zNjNMMzA5LjA0LDEyMi40NTN6IE0yOTguNzc4LDI5Ni42MyAgICBoLTg1LjU1M2wtMjYuMzksODQuNDQ5aC02MS45NzlsODkuMTc5LTI0Mi43NjRoODMuOTMzbDg5LjE3OSwyNDIuNzY0aC02MS45NzlMMjk4Ljc3OCwyOTYuNjN6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjc3LjU1MSwxODUuNzloLTQzLjFsLTI2LjQsNzkuMTk4aDk1Ljg5OEwyNzcuNTUxLDE4NS43OXogTTI0NS44ODMsMjAxLjY1MWgyMC4yMzdsMTUuODI1LDQ3LjQ3NWgtNTEuODg4ICAgIEwyNDUuODgzLDIwMS42NTF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
          <p>
            Only Office and Collabora integrations in ownCloud
          </p>
        </div>

        <div class="col-md-4 topic">
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0OTIuMzA4IDQ5Mi4zMDgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5Mi4zMDggNDkyLjMwODsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zNzkuNzUsMTI0Ljc3NGMtMy4wMS0wLjIyNi02LjAxOS0wLjMzMi04LjI4OS0wLjMwOGMtMC45MTMtMC4wNzctOTYuNDcxLTcuMTA2LTEzNC43MzEsMTE4LjgyNyAgICBjLTMzLjQ0MiwxMTAuMDgyLTExMC45MTMsMTA1LjE5Ny0xMTUuMDEsMTA0Ljg4OWMtMS41MjksMC0zLjA2Ny0wLjAzNC00LjYwNi0wLjEwNmMtNTQuNjI1LTIuNDIzLTk3LjQyMy00Ny4xOTItOTcuNDIzLTEwMS45MjMgICAgYzAtNTYuMjYsNDUuNzY5LTEwMi4wMzQsMTAyLjAyOS0xMDIuMDM0YzM0Ljg3NSwwLDY2Ljk4MSwxNy41MzgsODUuODg1LDQ2LjkxOGwxNi41NTgtMTAuNjU0ICAgIGMtMjIuNTM4LTM1LjAzOC02MC44MzctNTUuOTU3LTEwMi40NDItNTUuOTU3QzU0LjYwNiwxMjQuNDI4LDAsMTc5LjAzNCwwLDI0Ni4xNTRjMCw2NS4yOTMsNTEuMDU4LDExOC43MDcsMTE2LjIzMSwxMjEuNTk2ICAgIGMxLjgxNywwLjA4MiwzLjYzNSwwLjExMSw0LjYxNSwwLjA4NmMwLjA5NiwwLjAxLDEuMjUsMC4wOTYsMy4yNjksMC4wOTZjMTcuMTgzLDAsOTcuMjIxLTYuMjMxLDEzMS40NjItMTE4LjkxOCAgICBjMzMuNDQyLTExMC4wOTEsMTEwLjkzMy0xMDUuMTczLDExNS4wMS0xMDQuODk0YzIuNTg3LDAsNS4xNjQsMC4xMDEsNy43MDIsMC4yODhjNTIuODk0LDMuOTQyLDk0LjMyNyw0OC42Myw5NC4zMjcsMTAxLjc0NSAgICBjMCw1Ni4yNi00NS43NjksMTAyLjAyOS0xMDIuMDI5LDEwMi4wMjljLTM0Ljg3NSwwLTY2Ljk3MS0xNy41MzgtODUuODc1LTQ2LjkxOGwtMTYuNTU4LDEwLjY1NCAgICBjMjIuNTM4LDM1LjAzOCw2MC44MjcsNTUuOTU3LDEwMi40MzMsNTUuOTU3YzY3LjExNSwwLDEyMS43MjEtNTQuNjA2LDEyMS43MjEtMTIxLjcyMSAgICBDNDkyLjMwOCwxODIuNzg5LDQ0Mi44NjUsMTI5LjQ3MiwzNzkuNzUsMTI0Ljc3NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
          <p>
            DevOps Culture
          </p>
        </div>

        <div class="col-md-4 topic">
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ0NC41OTIgNDQ0LjU5MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDQ0LjU5MiA0NDQuNTkyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTM4OS45OTIsMzgyLjI2NWgtMjYuNnYtMTg0LjkyYzI0LjAzNS0zLjQ4Niw0Mi45MTQtMjIuMzY1LDQ2LjQtNDYuNGgyNy4xMmM0LjIxOS0wLjAyNiw3LjYxOS0zLjQ2Nyw3LjU5My03LjY4NyAgICBjLTAuMDE2LTIuNjE4LTEuMzcyLTUuMDQ2LTMuNTkzLTYuNDMzbC0yMTQuNi0xMzUuNTZjLTIuNTIxLTEuNjI1LTUuNzU5LTEuNjI1LTguMjgsMGwtMjEzLjkyLDEzNS4yICAgIGMtMy43NTYsMS45NzEtNS4yMDIsNi42MTQtMy4yMywxMC4zN2MxLjMyNSwyLjUyNCwzLjkzOSw0LjEwNyw2Ljc5LDQuMTFoMjcuMTJjMy40ODYsMjQuMDM1LDIyLjM2NSw0Mi45MTQsNDYuNCw0Ni40djE4NC45MiAgICBoLTI2LjU2Yy0zMC4xMTgsMC4wODgtNTQuNTEyLDI0LjQ4Mi01NC42LDU0LjZjMCw0LjI0MiwzLjQzOCw3LjY4LDcuNjgsNy42OGg0MjkuMmM0LjI0MiwwLDcuNjgtMy40MzgsNy42OC03LjY4ICAgIEM0NDQuNTA0LDQwNi43NDcsNDIwLjExLDM4Mi4zNTMsMzg5Ljk5MiwzODIuMjY1eiBNNDEuOTkyLDEzNS41ODVoLTAuMDRoLTcuNjRsMTg4LTExOC44OGwxODgsMTE4Ljg4SDQxLjk5MnogTTYxLjE1MiwxNzAuOTg1ICAgIGgwLjA0Yy01LjQ3Ni01LjQ2My05LjIxOS0xMi40Mi0xMC43Ni0yMGgzNDRjLTMuNzMzLDE4LjMwNi0xOS43OTcsMzEuNDgyLTM4LjQ4LDMxLjU2SDg4Ljg3MiAgICBDNzguNDYzLDE4Mi41MjksNjguNDg4LDE3OC4zNyw2MS4xNTIsMTcwLjk4NXogTTM0OC4wNzIsMTk3Ljg2NXYxODQuNGgtMzEuNnYtMTg0LjRIMzQ4LjA3MnogTTMwMS4xNTIsMTk3Ljg2NXYxODQuNGgtNDcuNjggICAgdi0xODQuNEgzMDEuMTUyeiBNMjM4LjExMiwxOTcuODY1djE4NC40aC0zMS42di0xODQuNEgyMzguMTEyeiBNMTkxLjE5MiwxOTcuODY1djE4NC40aC00Ny42OHYtMTg0LjRIMTkxLjE5MnogTTEyOC4xNTIsMTk3Ljg2NSAgICB2MTg0LjRoLTMxLjZ2LTE4NC40SDEyOC4xNTJ6IE0xNi4xNTIsNDI5LjE4NWMzLjcxNi0xOC4zMjIsMTkuNzg1LTMxLjUxOCwzOC40OC0zMS42aDMzNS4zNiAgICBjMTguNjk1LDAuMDgyLDM0Ljc2NCwxMy4yNzgsMzguNDgsMzEuNkgxNi4xNTJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
          <p>
            Government and Compliance
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
          <p>
            We encourage you to hold a presentation and share your knowledge! Submit your topics you want to present to the ownCloud community by filling out the form. Our conference team will contact you to talk about details.
          </p>

          <a href="https://cfp.owncloud.com/occon18/login?next=/occon18/me/submissions" class="button-oc occon-pink bold">Submit your proposal<i class="fa fa-bullhorn" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div id="map">

    </div>
  </section>

  <section class="travel container">
    <h2 class="text-center">Travel information</h2>
    <div class="row">
      <div class="col-md-4 text-center venue">
        <i class="fa fa-map-marker"></i>
        <h3>Venue</h3>
        <p>
          TH Nürnberg<br />
          Bahnhofstraße 90 <br />
          90402 Nürnberg
        </p>
      </div>

      <div class="col-md-4 text-center transport">
        <i class="fa fa-train"></i>
        <h3>Transport</h3>
        <p>
          Tramway line 5, S-Bahn S1, S2, S3 <br />
          Bus Line 36 to station “Dürrenhof”
        </p>
      </div>

      <div class="col-md-4 text-center accomodation">
        <i class="fa fa-bed"></i>
        <h3>Accomodation</h3>
        <p>
          Multiple possibilities nearby, for every budget
        </p>
      </div>
    </div>
  </section>
  
  <section class="sponsors container text-center">
    <h2>Our Sponsors</h2>
    <p>
      See who makes this awesome event possible.
    </p>
    <h3>Gold Sponsors</h3>
    <div class="d-flex justify-content-around">
      <?php
      echo '<a href="https://www.suse.com/" target="_blank">' . wp_get_attachment_image( 15868, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';

      echo '<a href="https://www.univention.com/" target="_blank">' . wp_get_attachment_image( 15864, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';
      ?>
      
    </div>

    <h3>Silver Sponsors</h3>
    <div class="d-flex justify-content-around">
      <?php
      echo '<a href="https://www.boxcryptor.com/de/" target="_blank">' . wp_get_attachment_image( 16096, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';

      echo '<a href="https://kopano.com/" target="_blank">' . wp_get_attachment_image( 16097, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';
      ?>
      
    </div>

    <a href="<?php echo get_page_link(14922); ?>" class="button-oc occon-pink bold">Become a sponsor too!<i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>

    <h3>Media Partners</h3>
    <div class="d-flex justify-content-around">
      <?php
      echo '<a href="https://www.oreilly.de/" target="_blank">' . wp_get_attachment_image( 15862, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';

      echo '<a href="https://www.dpunkt.de/" target="_blank">' . wp_get_attachment_image( 15861, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';

      ?>
      </div>
      <div class="d-flex justify-content-around">
        <?php
      echo wp_get_attachment_image( 15870, 'full', false, array('class' => 'vc_single_image-img attachment-full') );

      echo '<a href="https://c3voc.de/" target="_blank">' . wp_get_attachment_image( 15869, 'full', false, array('class' => 'vc_single_image-img attachment-full') ) . '</a>';
      ?>
    </div>
  </section>
  
  <section class="newsletter">
    <img class="geo pink" src="<?php echo get_template_directory_uri(); ?>/img/conference/pink.png" />
    <img class="geo yellow" src="<?php echo get_template_directory_uri(); ?>/img/conference/yellow.png" />

    <div class="container">
      <h2 class="text-center">Stay up-to-date and subscribe to our newsletter!</h2>
      <form class="newsletter-subscribe row" novalidate>
        <div class="col-sm-6 text-right">
          <input type="email" name="email" placeholder="Enter your email address" />
        </div>

        <div class="col-sm-6">
          <button class="button-oc occon-blue" type="submit">Submit<i class="fa fa-envelope"></i><i class="spinner fa fa-circle-o-notch fa-spin fa-fw"></i></button>
          <p class="success">
            You successfully signed up for the ownCloud newsletter. Please check your inbox to confirm your registration.
          </p>
        </div>
      </form>
    </div>
  </section>
</article>

<?php
    endwhile;
endif;

if(is_user_logged_in()) {
  // echo do_shortcode('[contact-form-7 id="15591" title="oCCon Call for Papers"]');
}

?>


<?php
get_footer();
?>
