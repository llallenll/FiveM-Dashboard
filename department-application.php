<?php include 'auth/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Department Application</title>
  <meta content="Department Application" property="og:title">
  <meta content="Department Application" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/fivem-site.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body-14">
<div class="nav-links">
    <div class="pages">
      <a href="index.php" class="link-block w-inline-block">
        <div class="text-2">Home</div>
      </a>
      <a href="information.php" class="link-block w-inline-block">
        <div class="text-2">Information</div>
      </a>
      <a href="news.php" class="link-block w-inline-block">
        <div class="text-2">News</div>
      </a>
      <?php if ($logged_in): ?>
      <div data-hover="false" data-delay="0" class="nav-dropdown w-dropdown">
        <div class="nav-dropdown-toggle w-dropdown-toggle">
          <div class="text">Recruitment</div>
        </div>
        <nav class="nav-dropdown-list shadow-three mobile-shadow-hide w-dropdown-list">
          <a href="departments.php" class="text w-dropdown-link">Departments</a>
          <a href="#" class="text-2 w-dropdown-link">Server Management</a>
        </nav>
      </div>
      <?php endif; ?>
    </div>
    <?php if (!$logged_in): ?>
      <div class="button-wrapper">
        <a href="auth/init-oauth.php" class="button">
          <div class="text-2">Login</div>
        </a>
      </div>
    <?php endif; ?>
    <?php if ($logged_in): ?>
      <a href="profile.php" style="text-decoration:none;">
      <div class="profile">
        <img src="<?php echo $avatar_url; ?>" loading="lazy" width="48" height="48" alt="" class="rectangle-1">
        <div class="text-7"><?php echo $name; ?></div>
      </div>
    </a>
    <?php endif; ?>
  </div>
  <div class="body-13">
    <div class="content-9">
      <div class="hero-14">
        <div class="text-68">VPD Application</div><img src="images/Rectangle-2.png" loading="lazy" width="100" height="100" alt="" class="rectangle-10">
      </div>
      <div class="application">
        <div class="question-1">
          <div class="text-69">What is your legal date of birth?</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891093c5217da0c7852_Vectors-Wrapper.svg" loading="lazy" width="418" height="44" alt="" class="vectors-wrapper-8">
        </div>
        <div class="question-1">
          <div class="text-69">What is your timezone?</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891093c5217da0c7852_Vectors-Wrapper.svg" loading="lazy" width="418" height="44" alt="" class="vectors-wrapper-8">
        </div>
        <div class="question-1">
          <div class="have-you-ever-been-warned kicked banned-within-the-lake-county-indiana-rp-community">Have you ever been warned / kicked / banned within the Lake County Indiana RP Community?</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891093c5217da0c7852_Vectors-Wrapper.svg" loading="lazy" width="418" height="44" alt="" class="vectors-wrapper-8">
        </div>
        <div class="question-1">
          <div class="text-69">What is your legal date of birth?</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891093c5217da0c7852_Vectors-Wrapper.svg" loading="lazy" width="418" height="44" alt="" class="vectors-wrapper-8">
        </div>
        <div class="question-1">
          <div class="text-69">Why are you wanting to be apart of the Cedar Lake Police Department? (Please answer this question with full detail + 50 words or more)</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891c9d4d26508b96363_Vectors-Wrapper.svg" loading="lazy" width="418" height="150" alt="" class="vectors-wrapper-9">
        </div>
        <div class="question-1">
          <div class="text-69">Why do you think you should be accepted over other CLPD Applicants? (Please answer this question with full detail + 50 words or more)</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891c9d4d26508b96363_Vectors-Wrapper.svg" loading="lazy" width="418" height="150" alt="" class="vectors-wrapper-9">
        </div>
        <div class="question-1">
          <div class="text-69">What do you think you could bring into the Department of Cedar Lake? (Please answer this question with full detail + 50 words or more)</div><img src="https://uploads-ssl.webflow.com/66c421ce29ac786db71695aa/66c58891c9d4d26508b96363_Vectors-Wrapper.svg" loading="lazy" width="418" height="150" alt="" class="vectors-wrapper-9">
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66c421ce29ac786db71695aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>