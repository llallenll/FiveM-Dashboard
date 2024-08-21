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
  <title>FIVEM SITE</title>
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
        <div class="text">Home</div>
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
          <div class="text-2">Recruitment</div>
        </div>
        <nav class="nav-dropdown-list shadow-three mobile-shadow-hide w-dropdown-list">
          <a href="departments.php" class="text-2 w-dropdown-link">Departments</a>
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
  <div class="body">
    <div class="content-6">
      <div class="w-layout-blockcontainer page w-container">
        <div class="hero-12"><img src="images/Rectangle-4.png" loading="lazy" width="100" height="100" alt="" class="rectangle-5">
          <div class="text-45">Welcome To Lake County</div>
          <div class="text-46">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.</div>
        </div><img src="images/Image.png" loading="lazy" width="1116" height="608" alt="" srcset="images/Image-p-500.png 500w, images/Image-p-800.png 800w, images/Image-p-1080.png 1080w, images/Image.png 1124w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, (max-width: 991px) 728px, 73vw" class="image">
        <div class="action">
          <div class="text-5">Lörem ipsum</div>
          <div class="text-4">Lörem ipsum vynas tatapp ifall latyse. Plarar mas balektiga tism inte hexahet.</div>
          <a href="#" target="_blank" class="button-2">
            <div class="text-6">Button</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66c421ce29ac786db71695aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>