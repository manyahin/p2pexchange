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

  <table>
    <thead>
      <tr>
        <th>№ Заявки</th>
        <th>Кто поставил оценку</th>
        <th>Оценка</th>
        <th>Комментарий</th>
        <th>Дата оценки</th>
      </tr>
    </thead>
    <tbody>
    <? foreach($ratings as $rating): ?>
      <tr>
        <td><?= HTML::anchor('/bid/info/'.$rating->accept->request->id,
          $rating->accept->request->id) ?></td>
        <td><?= HTML::anchor('/user/info/'.$rating->from_user->id, $rating->from_user->username) ?></td>
        <td><?= HTML::rating($rating->rating); ?></td>
        <td><?= $rating->comment; ?></td>
        <td><?= $rating->date_created; ?></td>  
      </tr>
    <? endforeach; ?>
    </tbody>
  </table>

  <p>Итого рейтинг пользователя: <?=$user_profile->rating();?></p>

<? endif; ?>