<? if(!$user): ?>
<h3>User not found</h3>
<? else: ?>
<h3>Info for  user "<?= $user->username; ?>"</h3>

<ul>
  <li>Email: <?= $user->email; ?></li>
  <li>Number of logins: <?= $user->logins; ?></li>
  <li>Last Login: <?= Date::fuzzy_span($user->last_login); ?></li>
</ul>

<?= HTML::anchor('user/logout', 'Logout'); ?>
<? endif; ?>