<?php
session_start();

$logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];

if ($logged_in) {
    if (isset($_SESSION['userData'])) {
        extract($_SESSION['userData']);
        $avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";
    }
} else {
    $avatar_url = '';
    $name = '';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Departments</title>
  <meta content="Departments" property="og:title">
  <meta content="Departments" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/fivem-site.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body-2">
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
  <div class="body-3">
    <div class="content-6">
      <div class="hero-9">
        <div class="text-35">Department Applications</div>
        <div class="error-2006eee1-e11a-88fb-1bf3-ff4966de8fbe">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.
        </div>
      </div>
      <div class="departments">
        <div class="item-2"><img src="images/Rectangle-2.png" loading="lazy" width="100" height="100" alt="" class="rectangle-2">
          <div class="text-32">Vespucci PD</div>
          <div class="error-2006eee1-e11a-88fb-1bf3-ff4966de8fbe">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.
          </div>
          <a href="#" target="_blank" class="button-7">
            <div class="text-33">Closed</div>
          </a>
        </div>
        <div class="item-2"><img src="images/Rectangle-2_1.png" loading="lazy" width="100" height="100" alt="" class="rectangle-2">
          <div class="text-32">Merrillville Fire Dept.</div>
          <div class="error-2006eee1-e11a-88fb-1bf3-ff4966de8fbe">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.
          </div>
          <a href="#" target="_blank" class="button-8">
            <div class="text-33">Apply</div>
          </a>
        </div>
        <div class="item-2"><img src="images/Rectangle-2_2.png" loading="lazy" width="100" height="100" alt="" class="rectangle-2">
          <div class="text-32">State Police</div>
          <div class="error-2006eee1-e11a-88fb-1bf3-ff4966de8fbe">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.
          </div>
          <a href="#" target="_blank" class="button-8">
            <div class="text-33">Apply</div>
          </a>
        </div>
      </div>
      <div class="frame-2">
        <div class="action-3">
          <div class="text-34">Already Applied</div>
          <div class="error-2006eee1-e11a-88fb-1bf3-ff4966de8fbe">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.</div>
          <a href="#" target="_blank" class="button-9">
            <div class="text-33">View Applications</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66c421ce29ac786db71695aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>