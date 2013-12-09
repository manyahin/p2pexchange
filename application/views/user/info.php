<? if(!$user_profil): ?>
<h3>User not found</h3>
<? else: ?>
  <h3>Public profil of <strong><?= $user_profil->username;?></strong></h3>

  <dl class="sub-nav">
    <dd class="active"><?=HTML::anchor('user/info/'.$user_profil->id,'Personal Information')?></dd>
    <dd><?=HTML::anchor('user/rating/'.$user_profil->id,'Rating')?></dd>
    <dd><?=HTML::anchor('user/bids/'.$user_profil->id,'Общие заявки')?></dd>
  </dl>

  <? if(!$user): ?>
  <p>Чтобы иметь возможность просмотреть персональные данные этого пользователя (при условии, что у Вас с ним есть общие заявки кликните для подсказки) - Вам необходимо войти в свой аккаунт.</p>
  <? else: ?>


  <? endif; ?>

  <ul>
    <li>Login: <?= $user_profil->username; ?></li>
    <li>Date of registration: <?= $user_profil->date_registration; ?></li>
    <li>Email: <?= $user_profil->email; ?></li>
    <li>Number of logins: <?= $user_profil->logins; ?></li>
    <li>Last Login: <?= Date::fuzzy_span($user_profil->last_login); ?></li>
  </ul>

<? endif; ?>