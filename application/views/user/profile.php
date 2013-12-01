<h3><?=__('Profile of user :user', array(':user' => $user->username))?></h3>
<form action="" method="POST">
  <label for="email">Email</label>
  <input type="text" name="email" value="<?=$user->email?>">
  <label for="wmid">WMID</label>
  <input type="text" name="wmid">
  <label for="name">Name/LastName</label>
  <input type="text" name="name">
  <label for="docs">Documents</label>
  <input type="file" name="docs">
  <label for="phone">Phone</label>
  <input type="text" name="phone">
  <label for="icq">ICQ</label>
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
  <input type="text" name="yandex">
  <input type="submit" class="button radius">
</form>