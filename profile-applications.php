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
      <div class="hero-7">
        <div class="profile-5"><img src="<?php echo $avatar_url; ?>" loading="lazy" width="100" height="100" alt="" class="rectangle-7">
          <div class="name-4 tag">
            <div class="text-51"><?php echo $name; ?></div>
            <div class="tags-4">
              <div class="tag-9">
                <div class="text-52">Admin</div>
              </div>
              <div class="tag-8">
                <div class="text-52">VPD</div>
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
      <div class="text-28">Application Status</div>
      <div class="applications-3">
        <div class="table-2">
          <div class="table-3">
            <div class="header">
              <div class="selectmenu">
                <div class="select-white">
                  <div class="text-65">Search...</div>
                </div>
              </div>
            </div>
            <div class="table-4">
              <div class="column-1">
                <div class="tableheaditem">
                  <div class="span">Id</div>
                </div>
                <div class="tablebodyitem">
                  <div class="span-2">4</div>
                </div>
                <div class="tablebodyitem">
                  <div class="span-3">2</div>
                </div>
              </div>
              <div class="column-2">
                <div class="tableheaditem-2">
                  <a href="#" target="_blank" class="button-18">
                    <div class="button-gray">
                      <div class="button-gray-ghost">
                        <div class="button-19">Department</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="tablebodyitem-2">
                  <div class="span-3">Staff</div>
                </div>
                <div class="tablebodyitem-2">
                  <div class="span-3">VPD</div>
                </div>
              </div>
              <div class="column-3">
                <div class="tableheaditem-2">
                  <a href="#" target="_blank" class="button-18">
                    <div class="button-gray">
                      <div class="button-gray-ghost">
                        <div class="button-19">Date</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="tablebodyitem-2">
                  <div class="span-3">8/5/24</div>
                </div>
                <div class="tablebodyitem-2">
                  <div class="span-3">8/12/24</div>
                </div>
              </div>
              <div class="column-4">
                <div class="tableheaditem-2">
                  <a href="#" target="_blank" class="button-18">
                    <div class="button-gray">
                      <div class="button-gray-ghost">
                        <div class="button-19">Reviewer</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="tablebodyitem-2">
                  <div class="span-3">A. Jackson</div>
                </div>
                <div class="tablebodyitem-2">
                  <div class="span-3">A. Jackson</div>
                </div>
              </div>
              <div class="column-5">
                <div class="tableheaditem-2">
                  <div class="span-4">Status</div>
                </div>
                <div class="tablebodyitem-2">
                  <div class="text-66">Accepted</div>
                </div>
                <div class="tablebodyitem-2">
                  <div class="text-67">Denied</div>
                </div>
              </div>
            </div>
            <div class="footer"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66c421ce29ac786db71695aa" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>