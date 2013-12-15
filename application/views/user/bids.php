<? if(!$user_profile): // Check user exists ?>
<h3>User not found</h3>
<? else: // Get info about user_profile?>
  <h3>Public profil of <strong><?= $user_profile->username;?></strong></h3>

  <dl class="sub-nav">
    <dd><?=HTML::anchor('user/info/'.$user_profile->id,'Personal Information')?></dd>
    <dd><?=HTML::anchor('user/rating/'.$user_profile->id,'Rating')?></dd>
    <dd class="active"><?=HTML::anchor('user/bids/'.$user_profile->id,'Общие заявки')?></dd>
  </dl>

  <? if(!isset($user->id)): ?>
    <p>Чтобы иметь возможность просмотреть общие заявки с этим пользователем - Вам необходимо <?=HTML::anchor('/login','войти в свой аккаунт');?>.</p>
  <? else: ?>
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
                ->and_where('accept_user_id', '=', $user->id)
                ->find();
            ?>
            <td><?=$accept->date_created?></td>
            <td>еще нет</td>
            <td>
              <? // TODO: this is not for view~!
                $rating = ORM::factory('rating')
                  ->where('from_user_id','=',$user->id)
                  ->and_where('to_user_id','=',$user_profile->id)
                  ->and_where('accept_id','=',$accept->id)
                  ->find();
                if($rating->loaded()) {
                  echo HTML::rating($rating->rating);
                  echo '</br><small>'.$rating->date_created.'</small>';
                } else {
                  echo HTML::anchor('/rating/set/'.$bid->id, 'еще нет');
                }
              ?>
            </td>
          </tr>
        <? endforeach; ?>
        </tbody>
      </table>
    <? else: ?>
      <p>Вы НЕ имеете с этим пользователем ни одной общей заявки</p>
    <? endif; ?>
  <? endif; ?>  

<? endif; ?>
