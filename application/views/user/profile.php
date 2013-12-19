<h3><?=__('Your account', array(':user' => $user->username))?></h3>
<? if ($message) : ?>
  <h5 class="message">
    <?= $message; ?>
  </h5>
<? endif; ?>

<dl class="sub-nav">
  <dd class="active"><?=HTML::anchor('user/profile','Profile')?></dd>
  <dd><?=HTML::anchor('user/ratings/','Ratings')?></dd>
  <dd><?=HTML::anchor('user/settings/','Settings')?></dd>
  <dd><?=HTML::anchor('user/status/','Status')?></dd>
  <dd><?=HTML::anchor('user/bids/','Bids')?></dd>
  <dd><?=HTML::anchor('user/subscription/','Subscription')?></dd>
</dl>

<?= Form::open()?>
  <?= Form::label('username', 'Username')?>
  <?= Form::input('username', $user->username, array('disabled' => 'disabled'))?>
  <?= Form::label('email', 'Email')?>
  <?= Form::input('email', $user->email, array('disabled' => 'disabled'))?>
<!--   <label for="wmid">WMID</label>
  <input type="text" name="wmid"> -->
  <!-- <label for="name">Name/LastName</label>
  <input type="text" name="name"> -->
  <!-- <label for="docs">Documents</label>
  <input type="file" name="docs"> -->
  <?= Form::label('phone', 'Phone (Hidden)')?>
  <?= Form::input('phone', $user->phone)?>
  <!-- <label for="icq">ICQ</label>
  <input type="text" name="icq">
  <label for="site">Web Site</label>
  <input type="text" name="site">
  <label for="skype">Skype (I can verify it?)</label> 
  <input type="text" name="skype">
  <label for="paypal">PayPal</label>
  <input type="text" name="paypal">
  <label for="qiwi">Qiwi</label>
  <input type="text" name="qiwi">
  <label for="yandex">Yandex.Money (Do not use in Israel?)</label>
  <input type="text" name="yandex"> -->
  <?= Form::button('submit', 'Save profile', array('class' => 'button', 'type' => 'submit')); ?>
<?= Form::close()?>