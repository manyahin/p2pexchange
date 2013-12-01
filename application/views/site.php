<!doctype html>
<html class="no-js" lang="he" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>P2P Exchange</title>
  <link rel="stylesheet" href="/public/css/normalize.css"></link>
  <? if($language == 'he'): ?>
    <link rel="stylesheet" href="/public/css/foundation.he.css"></link>
  <? else: ?>
    <link rel="stylesheet" href="/public/css/foundation.css"></link>
  <? endif; ?>
  <link rel="stylesheet" href="/public/css/app.css"></link>
  <script src="/public/js/vendor/jquery.js"></script>
</head>
<body>
  <div id="container">
    <div class="row">
      <div class="small-12">
        <h1><?=__('Welcome to P2P Exchange service')?></h1>
      </div>
      <div class="small-12">
        <p>
        <? if(isset($user)): ?>
          <?=__('Hello :user', array(':user' => $user->username))?>
        <? else: ?>
          <?=__('Please make login for create bid')?>
        <? endif; ?>
        </p>
      </div>
      <div class="small-12">
        <ul class="inline-list">
          <li><a href="/"><?=__('Index')?></a></li>
          <? if(isset($user)): ?>
            <li><a href="/user/"><?=__('Profile')?></a></li>
            <li><a href="/request/create" class="request"><?=__('New bid')?></a></li>
            <li><a href="/user/logout"><?=__('Logout')?></a></li>
          <? else: ?>
            <li><a href="/user/login" class="login"><?=__('Login')?></a></li>
            <li><a href="/user/create" class="registration"><?=__('Registration')?></a></li>
          <? endif; ?>
          <li><?=__('Lang')?>: <a class="lang_name" href="?lang=en">EN</a>/<a class="lang_name" href="?lang=he">HE</a></li>
        </ul>
      </div>
      <div class="small-12">
        <?=$content;?>
      </div>
    </div>
  </div>
</body>
</html>