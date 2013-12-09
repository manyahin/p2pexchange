<? if(!$user_profile): // Check user exists ?>
<h3>User not found</h3>
<? else: // Get info about user_profile?>
  <h3>Public profil of <strong><?= $user_profile->username;?></strong></h3>

  <dl class="sub-nav">
    <dd class="active"><?=HTML::anchor('user/info/'.$user_profile->id,'Personal Information')?></dd>
    <dd><?=HTML::anchor('user/rating/'.$user_profile->id,'Rating')?></dd>
    <dd><?=HTML::anchor('user/bids/'.$user_profile->id,'Общие заявки')?></dd>
  </dl>

  <? if(!$user): // If not login ?>
  <p>Чтобы иметь возможность просмотреть персональные данные этого пользователя (при условии, что у Вас с ним есть общие заявки кликните для подсказки) - Вам необходимо войти в свой аккаунт.</p>
  <? else: ?>
    
    <? if($merged_bids): // If user_profile and user have merget bids ?>
      <p>Вы имеете с этим пользователем общие заявки кликните для подсказки, поэтому персональные данные этого пользователя для Вас открыты к просмотру:</p>
    <? else: ?>
      <p>Вы НЕ имеете с этим пользователем общих заявок кликните для подсказки, поэтому персональные данные этого пользователя для Вас закрыты к просмотру:</p>
    <? endif; ?>

  <? endif; ?>

  <ul>
    <li>Login: <?= $user_profile->username; ?></li>
    <li>Date of registration: <?= $user_profile->date_registration; ?></li>
    <li>Email: <?= $user_profile->email; ?></li>
    <li>Number of logins: <?= $user_profile->logins; ?></li>
    <li>Last Login: <?= Date::fuzzy_span($user_profile->last_login); ?></li>
  </ul>

<? endif; ?>