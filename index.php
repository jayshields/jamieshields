<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Full-stack web developer based in Leeds. Available for short-term contract work and freelance projects." />
    <meta name="keywords" content="Jamie Shields, Shields, James Shields, PHP, MySQL, Developer, Designer, Web, Website, Leeds, Portfolio, Twitter, Facebook, jQuery, Javascript, HTML, ZCE, BSc, Zend Certified" />

    <title>Jamie Shields - Freelance Web Developer</title>

    <meta name="theme-color" content="#222222">

    <meta property="og:title" content="Jamie Shields - Freelance Web Developer" />
    <meta property="og:site_name" content="jamieshields.co.uk"/>
    <meta property="og:url" content="http://jamieshields.co.uk" />
    <meta property="og:description" content="Full-stack web developer based in Leeds. Available for short-term contract work and freelance projects." />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:image" content="http://jamieshields.co.uk/assets/images/social-og.jpg" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@jayshields">
    <meta name="twitter:creator" content="@jayshields">
    <meta name="twitter:title" content="Jamie Shields - Freelance Web Developer">
    <meta name="twitter:description" content="Full-stack web developer based in Leeds. Available for short-term contract work and freelance projects.">
    <meta name="twitter:image:src" content="http://jamieshields.co.uk/assets/images/social-og.jpg">
    
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

    <link href="assets/css/style.min.css?v=2" rel="stylesheet">
  </head>
  <body>
    <a name="home"></a>

    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>

    <div id="overlay-menu" class="overlay-menu">

      <a href="javascript:void(0);" id="overlay-menu-hide" class="navigation-hide">&times;</a>

      <div class="overlay-menu-inner">
        <nav class="overlay-menu-nav">
          <ul id="nav">
            <li><a href="#home" class="section-scroll">Home</a></li>
            <li><a href="#about" class="section-scroll">About</a></li>
            <li><a href="#contact" class="section-scroll">Contact</a></li>
          </ul>
        </nav>
      </div>

      <div class="overlay-navigation-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <p class="copyright font-alt m-b-0">&copy; <?php echo date('Y'); ?> Jamie Shields, All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="wrapper">
      <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand section-scroll" href="#home">
              <img src="assets/images/jamieshields-logo.png" alt="Jamie Shields" />
            </a>
          </div>

          <ul id="icons-navbar" class="nav navbar-nav navbar-right">
            <li>
              <a href="javascript:void(0);" id="toggle-menu" class="show-overlay" title="Menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
            </li>
          </ul>

          <ul class="extra-navbar nav navbar-nav navbar-right">
            <li>
              <a href="#home" title="Menu" class="section-scroll">
                Home
              </a>
            </li>
            <li>
              <a href="#about" title="Menu" class="section-scroll">
                About
              </a>
            </li>
            <li>
              <a href="#contact" title="Menu" class="section-scroll">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <section id="hero" class="module-hero module-parallax module-full-height bg-dark-60" style="margin-bottom: 70px;" data-background="assets/images/hero.jpg">
        <div class="hero-caption">
          <div class="hero-text">
            <h1 class="mh-line-size-1 font-alt m-b-50">Jamie Shields</h1>
            <h2 class="mh-line-size-4 font-alt">Freelance web developer</h2>
          </div>
        </div>
      </section>

      <div class="container">
        <a name="about"></a>
        <div class="row module" style="padding-top: 70px; padding-bottom: 70px;">
          <div class="col-md-6">
            <h4 class="font-alt m-t-0 m-b-20">A bit about me</h4>
            <p>I'm a full-stack web developer based in Leeds and I love building fast, scalable and usable websites and web applications.</p>
            <p>I have over <?php echo date('Y') - 2009; ?> years commercial experience in startups and <a href="http://www.stickyeyes.com" target="_blank">award winning digital agencies</a>.</p>
            <p>I'm a published <a href="http://www.sitepoint.com/author/jshields/" target="_blank">SitePoint author</a> in PHP and JavaScript.</p>
          </div>

          <?php if (false): //Hide brands section for now ?>
            <div class="col-md-4">
              <h4 class="font-alt m-t-0 m-b-20">Brands I've worked on</h4>
              <img src="assets/images/hertz-grey.jpg" alt="Hertz" style="width: 40%; max-width: 200px; margin: 4%;" onmouseover="$(this).attr('src', 'assets/images/hertz-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/hertz-grey.jpg');" />
              <img src="assets/images/ladbrokes-grey.jpg" alt="Ladbrokes" style="width: 40%; max-width: 200px; margin: 4%;" onmouseover="$(this).attr('src', 'assets/images/ladbrokes-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/ladbrokes-grey.jpg');" />
              <img src="assets/images/maximuscle-grey.jpg" alt="Maximuscle" style="width: 40%; max-width: 200px; margin: 4%;" onmouseover="$(this).attr('src', 'assets/images/maximuscle-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/maximuscle-grey.jpg');" />
              <img src="assets/images/motors-grey.jpg" alt="Motors" style="width: 40%; max-width: 200px; margin: 4%;" onmouseover="$(this).attr('src', 'assets/images/motors-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/motors-grey.jpg');" />
              <img src="assets/images/gsk-grey.jpg" alt="GSK" style="width: 40%; max-width: 200px; margin: 4%;" onmouseover="$(this).attr('src', 'assets/images/gsk-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/gsk-grey.jpg');" />
              <img src="assets/images/very-grey.jpg" alt="Very" style="width: 40%; max-width: 200px; margin: 4%;" onmouseover="$(this).attr('src', 'assets/images/very-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/very-grey.jpg');" />
            </div>
          <?php endif; ?>

          <div class="col-md-6">
            <h4 class="font-alt m-t-0 m-b-20">My Certifications</h4>
            <a href="http://www.zend.com/en/yellow-pages/ZEND022306" target="_blank"><img src="assets/images/zend-grey.jpg" alt="Zend Certified PHP Engineer" onmouseover="$(this).attr('src', 'assets/images/zend-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/zend-grey.jpg');" style="width: 40%; max-width: 200px; margin: 4%;" /></a>
            <a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=458&get_params=p_track_id:MYSQL5" target="_blank"><img src="assets/images/oracle-grey.jpg" alt="Oracle Certified MySQL Associate" onmouseover="$(this).attr('src', 'assets/images/oracle-colour.jpg');" onmouseout="$(this).attr('src', 'assets/images/oracle-grey.jpg');" style="width: 40%; max-width: 200px; margin: 4%;" /></a>
          </div>
        </div>

        <a name="contact"></a>
        <div class="row module" style="padding-top: 70px;">
          <div class="col-md-6 col-md-offset-3">
            <h4 class="font-alt m-t-0 m-b-20">Get in touch with me</h4>
            <p>Looking for a quote? Want to read a full CV? Just want to chat?</p>
            <form id="contact-form" role="form">
              <div class="form-group">
                <label for="cname" class="sr-only">Name</label>
                <input type="text" id="cname" class="form-control" name="cname" placeholder="Name*" autocomplete="name" required />
              </div>
              <div class="form-group">
                <label for="cemail" class="sr-only">Email</label>
                <input type="email" id="cemail" name="cemail" class="form-control" placeholder="Email*" autocomplete="email" required />
              </div>
              <div class="form-group">
                <label for="cmessage" class="sr-only">Message</label>
                <textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message*" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" id="csubmit" class="btn btn-block btn-round btn-d">Submit</button>
              </div>
            </form>
            <div id="contact-response" class="ajax-response font-alt"></div>
          </div>
        </div>
      </div>

      <footer class="module bg-light">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="social-text-links font-alt text-center m-b-20">
                <li><a href="https://twitter.com/jayshields" target="_blank">Twitter</a></li>
                <li><a href="https://uk.linkedin.com/in/jamieshields1988" target="_blank">Linkedin</a></li>
                <li><a href="https://github.com/jayshields/" target="_blank">GitHub</a></li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <p class="copyright text-center m-b-0">&copy; <?php echo date('Y'); ?> <a href="#">Jamie Shields</a>, All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>

    </div>

    <div class="scroll-up">
      <a href="#totop">^</a>
    </div>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22403269-1']);
      _gaq.push(['_trackPageview']);

      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <script src="assets/js/script.min.js" async></script>
  </body>
</html>