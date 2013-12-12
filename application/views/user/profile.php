<h3><?=__('Your account', array(':user' => $user->username))?></h3>
<? if ($message) : ?>
  <h5 class="message">
    <?= $message; ?>
  </h5>
<? endif; ?>

<dl class="sub-nav">
  <dd class="active"><?=HTML::anchor('my/profile','Profile')?></dd>
  <dd><?=HTML::anchor('my/ratings/','Ratings')?></dd>
  <dd><?=HTML::anchor('my/settings/','Settings')?></dd>
  <dd><?=HTML::anchor('my/status/','Status')?></dd>
  <dd><?=HTML::anchor('my/bids/','Bids')?></dd>
  <dd><?=HTML::anchor('my/subscription/','Subscription')?></dd>
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
  <?= Form::button('submit', 'Save profil', array('class' => 'button small round', 'type' => 'submit')); ?>
<?= Form::close()?>