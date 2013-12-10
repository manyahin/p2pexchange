<? if(!$user_profile): // Check user exists ?>
<h3>User not found</h3>
<? else: // Get info about user_profile?>
  <h3>Public profil of <strong><?= $user_profile->username;?></strong></h3>

  <dl class="sub-nav">
    <dd><?=HTML::anchor('user/info/'.$user_profile->id,'Personal Information')?></dd>
    <dd class="active"><?=HTML::anchor('user/rating/'.$user_profile->id,'Rating')?></dd>
    <dd><?=HTML::anchor('user/bids/'.$user_profile->id,'Общие заявки')?></dd>
  </dl>

  <p>Здесь показаны все оценки, которые этот пользователь получил от других пользователей.</p>

  <i>In progress...<i>

<? endif; ?>