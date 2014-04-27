<!doctype html>
<html class="no-js" lang="he" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title><?=$title;?></title>
  <meta name="description" content="<?=$description;?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <? foreach($styles as $style): ?>
    <?= HTML::style('public/css/'.$style.'.css'); ?>
  <? endforeach; ?>
  <?= HTML::script('public/js/modernizr.js'); ?>
  <?= HTML::script('public/js/vendor/jquery.js'); ?>
</head>
<body>

  <div id="container">
    <div class="row">
      <div class="small-12 large-12 columns">
        <h1><?=__('Welcome to P2P Exchange service')?></h1>
      </div>

      <div class="small-12 large-12 columns">

        <? if ($message) : ?>
        <div data-alert class="alert-box success">
          <?= $message; ?>
          <a href="#" class="close">&times;</a>
        </div>
        <? endif; ?>
        
        <p>
        <?php
        if(isset($user)) {
          echo __('Hello :user', array(':user' => $user->username));
        } else { 
          echo __('Please make login for create bid');
        } 
        ?>
        </p>
      </div>
      <div class="small-12 large-12 columns">
        <ul class="inline-list">
          <li><a href="/"><?=__('Index')?></a></li>
          <li><a href="/about" class="about"><?=__('About')?></a></li>
          <? if(isset($user)): ?>
            <li><a href="/user/"><?=__('Profile')?></a></li>
            <li><a href="/bid/create" class="request"><?=__('New bid')?></a></li>
            <li><a href="/logout"><?=__('Logout')?></a></li>
          <? else: ?>
            <li><a href="/login" class="login"><?=__('Login')?></a></li>
            <li><a href="/register" class="register"><?=__('Register')?></a></li>
          <? endif; ?>
          
          <li><?=__('Lang')?>: <a class="lang_name" href="?lang=en">EN</a>/<a class="lang_name" href="?lang=he">HE</a></li>
        </ul>
      </div>
      <div class="small-12 large-12 columns">
        <?=$content;?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
    </br></br>
      <div class="panel">
        <small>loading time in seconds: <?=(microtime(true) - KOHANA_START_TIME)/6;?></small></br>
        <small>memory usage: <?=(memory_get_usage() - KOHANA_START_MEMORY)?></small>
      </div>  
    </div>
  </div>
  <?= HTML::script('public/js/foundation/foundation.js'); ?>
  <?= HTML::script('public/js/foundation/foundation.alert.js'); ?>
  <?= HTML::script('public/js/foundation/foundation.reveal.js'); ?>
  <script>
    $(document).foundation();
  </script>
</body>
</html>