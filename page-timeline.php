<?php get_template_part('templates/parts/title'); ?>

<!-- need to have this in-line css due to the php templating of the image -->
<style>
div.neutral {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/neutral.svg") no-repeat 1px 2px;
    }
div.inc {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/inc.svg") no-repeat 1px 2px;
    }
div.org {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/org.svg") no-repeat 1px 2px;
    }
div.release {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/release.svg") no-repeat 1px 2px;
    }
div.meeting {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/meeting.svg") no-repeat 1px 2px;
    }
div.press {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/press.svg") no-repeat 1px 2px;
    }
div.mobile {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/mobile.svg") no-repeat 1px 2px;
    }
div.desktop {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/desktop.svg") no-repeat 1px 2px;
    }
div.money {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/money.svg") no-repeat 1px 2px;
    }
div.github {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/github.svg") no-repeat 1px 2px;
    }
div.code {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/code.svg") no-repeat 1px 2px;
      }
div.office {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/office.svg") no-repeat 1px 2px;
    }

/** new-timeline box structure **/
.new-timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
 
.new-timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 5px;
  background-color: #d7e4ed;
  left: 50%;
  margin-left: -2.5px;
}
 
.tldate {
  display: block;
  margin: 0 auto;
  padding: 3px 0;
  font-weight: bold;
  text-align: center;
  margin-left:17px;
}
 
.new-timeline li {
  margin-bottom: 25px;
  position: relative;
  clear: both;
}
.new-timeline li::before, .new-timeline li::after {
    content: " ";
    display: table;
}

/** new-timeline panels **/
.new-timeline li .new-timeline-panel {
  width: 46%;
  border: 1px solid #d4d4d4;
  padding: 20px;
  float: left;
  position: relative;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
}

/** panel arrows **/
.new-timeline li .new-timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
 
.new-timeline li .new-timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.new-timeline li .new-timeline-panel.noarrow:before, .new-timeline li .new-timeline-panel.noarrow:after {
  top:0;
  right:0;
  display: none;
  border: 0;
}
 
.new-timeline li.new-timeline-inverted .new-timeline-panel {
  float: right;
}
 
.new-timeline li.new-timeline-inverted .new-timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
 
.new-timeline li.new-timeline-inverted .new-timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

/** the icon **/

.new-timeline li .tl-circ {
    position: absolute;
    top: 22px;
    left: 50%;
    text-align: center;
    width: 45px;
    height: 45px;
    margin-left: -21px;
    z-index: 99999;
}

/** media queries **/
@media (max-width: 991px) {
  .new-timeline li .new-timeline-panel {
    width: 44%;
  }
}
 
@media (max-width: 700px) {
  .page-header h1 { font-size: 1.8em; }
 
  ul.new-timeline:before {
    left: 40px;
  }
 
  .tldate { width: 140px; }
 
  ul.new-timeline li .new-timeline-panel {
    width: calc(100% - 90px);
    width: -moz-calc(100% - 90px);
    width: -webkit-calc(100% - 90px);
  }
 
  ul.new-timeline li .tl-circ {
    top: 22px;
    left: 22px;
    margin-left: 0;
  }

  ul.new-timeline > li > .tldate {
    margin: 0;
  }
 
  ul.new-timeline > li > .new-timeline-panel {
    float: right;
  }
 
  ul.new-timeline > li > .new-timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }
 
  ul.new-timeline > li > .new-timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }
}

</style>

<div class="row">
<ul class="new-timeline">
  <li><div class="tldate"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2014.svg" alt="Picture"></div></li>
  <li class="new-timeline-inverted">
    <div class="tl-circ desktop"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Desktop Client 2.0 released</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introduces multiaccount support (<a href="https://owncloud.org/blog/owncloud-desktop-client-2-0-is-out-with-multi-account-support-and-more/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li>
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud, Inc. introduces Security Bug Bounty program</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p>(<a href="https://owncloud.com/introducing-the-owncloud-security-bug-bounty-program/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ meeting"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>Second ownCloud Contributor Conference</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p>Almost 140 participants (<a href="https://owncloud.org/blog/owncloud-contributor-conference-well-underway/">overview blog</a>)</p>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2015.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conference/grouppic2015_wee.jpg" style="width: 95%" alt="group photo" class="img-responsive" /></a>
      </div>
    </div>
  </li>
  <li>
    <div class="tl-circ code"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud Federated Cloud Sharing API available</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> August 2015</small></p>
      </div>
      <div class="tl-body">
        <p>(<a href="https://owncloud.com/announcing-the-federated-cloud-sharing-api/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 8.1 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> July 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introducing improved Documents, Release Channels, Encryption 2.0 (<a href="https://owncloud.org/blog/owncloud-8-1-raising-the-bar-on-security-and-performance/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li>
    <div class="tl-circ release"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud 8 launched</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2015</small></p>
      </div>
      <div class="tl-body">
        <p>introducing Federated Cloud Sharing, improved search and favorites (<a href="https://owncloud.org/blog/faster-easier-file-sync-and-share-with-federated-self-hosted-owncloud-8-0/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li class="new-timeline-inverted">
    <div class="tl-circ inc"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>SCIEBO launches</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2015</small></p>
      </div>
      <div class="tl-body">
        <p>aiming for up to 500,000 ownCloud users (<a href="https://owncloud.com/sciebo-germanys-largest-cloud-project-500000-users-launches-today/">announcement</a>)</p>
      </div>
    </div>
  </li>
  <li>
    <div class="tl-circ press"></div>
    <div class="new-timeline-panel">
      <div class="tl-heading">
        <h4>ownCloud rocked at FOSDEM and SCALE</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2015</small></p>
      </div>
      <div class="tl-body">
        <p>(<a href="https://owncloud.org/blog/owncloud-at-fosdem-2015-and-scale13x/">events blogpost</a>)</p>
      </div>
    </div>
  </li>
</ul>
</div>