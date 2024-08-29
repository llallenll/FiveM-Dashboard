<?php include 'auth/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <meta content="Profile" property="og:title">
  <meta content="Profile" property="twitter:title">
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
  <div class="body-3">
    <div class="content-6">
      <div class="hero-15">
        <div class="profile-9"><img src="<?php echo $avatar_url; ?>" loading="lazy" width="48" height="48" alt="" class="rectangle-1">
          <div class="name-6 tag">
            <div class="text-70"><?php echo $name; ?></div>
            <div class="tags-6">
              <div class="tag-11">
                <div class="text-71">Admin</div>
              </div>
              <div class="tag-12">
                <div class="text-71">VPD</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-2">
        <a href="profile.php" class="link-block w-inline-block">
          <div class="text-15">Information</div>
        </a>
        <a href="profile-applications.php" class="link-block w-inline-block">
          <div class="text-14">My Applications</div>
        </a>
        <a href="profile-settings.php" class="link-block w-inline-block">
          <div class="text-15">Settings</div>
        </a>
      </div>
      <div class="text-74">Application Status</div>
      <div class="applications-4">
        <div class="table-5">
          <div class="table-6">
            <div class="header-2">
              <div class="selectmenu-2">
                <div class="select-white-2">
                  <div class="text-75">Search...</div>
                </div>
              </div>
            </div>
            <div class="table-7">
              <div class="column-6">
                <div class="tableheaditem-3">
                  <div class="span-5">Id</div>
                </div>
                <div class="tablebodyitem-3">
                  <div class="span-6">4</div>
                </div>
                <div class="tablebodyitem-3">
                  <div class="span-7">2</div>
                </div>
              </div>
              <div class="column-7">
                <div class="tableheaditem-4">
                  <a href="#" target="_blank" class="button-20">
                    <div class="button-gray-2">
                      <div class="button-gray-ghost-2">
                        <div class="button-21">Department</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="tablebodyitem-4">
                  <div class="span-7">Staff</div>
                </div>
                <div class="tablebodyitem-4">
                  <div class="span-7">VPD</div>
                </div>
              </div>
              <div class="column-8">
                <div class="tableheaditem-4">
                  <a href="#" target="_blank" class="button-20">
                    <div class="button-gray-2">
                      <div class="button-gray-ghost-2">
                        <div class="button-21">Date</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="tablebodyitem-4">
                  <div class="span-7">8/5/24</div>
                </div>
                <div class="tablebodyitem-4">
                  <div class="span-7">8/12/24</div>
                </div>
              </div>
              <div class="column-9">
                <div class="tableheaditem-4">
                  <a href="#" target="_blank" class="button-20">
                    <div class="button-gray-2">
                      <div class="button-gray-ghost-2">
                        <div class="button-21">Reviewer</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="tablebodyitem-4">
                  <div class="span-7">A. Jackson</div>
                </div>
                <div class="tablebodyitem-4">
                  <div class="span-7">A. Jackson</div>
                </div>
              </div>
              <div class="column-10">
                <div class="tableheaditem-4">
                  <div class="span-8">Status</div>
                </div>
                <div class="tablebodyitem-4">
                  <div class="text-76">Accepted</div>
                </div>
                <div class="tablebodyitem-4">
                  <div class="text-77">Denied</div>
                </div>
              </div>
            </div>
            <div class="footer-2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66c421ce29ac786db71695aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>