<? if(!$user_profile): // Check user exists ?>
<h3>User not found</h3>
<? else: // Get info about user_profile?>
  <h3>Public profil of <strong><?= $user_profile->username;?></strong></h3>

  <dl class="sub-nav">
    <dd><?=HTML::anchor('user/info/'.$user_profile->id,'Personal Information')?></dd>
    <dd><?=HTML::anchor('user/rating/'.$user_profile->id,'Rating')?></dd>
    <dd class="active"><?=HTML::anchor('user/bids/'.$user_profile->id,'Общие заявки')?></dd>
  </dl>

  <? if($merged_bids): ?>
    <p>Вы имеете с этим пользователем такие общие заявки:</p>
    <table>
      <thead>
        <tr>
          <th>№ заявки</th>
          <th>Заявитель</th>
          <th>Акцептант</th>
          <th>Дата акцепта</th>
          <th>вам поставили оценку</th>
          <th>вы поставили оценку</th>
        </tr>
      </thead>
      <tbody>
      <? foreach($merged_bids as $key => $bid): ?>
        <tr>
          <td><?=HTML::anchor('/bid/info/'.$bid->id, $bid->id) ?></td>
          <td><?=HTML::anchor('/user/info/'.$bid->user->id, $bid->user->username) ?></td>
          <td>[Вы]</td>
          <? // TODO: this is not for view!
            $accept = ORM::factory('acceptor')
              ->where('request_id', '=', $bid->id)
              ->and_where('user_id', '=', $user->id)
              ->find();
          ?>
          <td><?=$accept->date_created?></td>
          <td>еще нет</td>
          <td>еще нет</td>
        </tr>
      <? endforeach; ?>
      </tbody>
    </table>
  <? else: ?>
    <p>Вы НЕ имеете с этим пользователем ни одной общей заявки</p>
  <? endif; ?>

<? endif; ?>