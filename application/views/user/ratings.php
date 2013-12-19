<h3>Ratings</h3>

<dl class="sub-nav">
  <dd><?=HTML::anchor('user/','Profile')?></dd>
  <dd class="active"><?=HTML::anchor('user/ratings','Ratings')?></dd>
  <dd><?=HTML::anchor('user/settings','Settings')?></dd>
  <dd><?=HTML::anchor('user/status','Status')?></dd>
  <dd><?=HTML::anchor('user/bids','Bids')?></dd>
  <dd><?=HTML::anchor('user/subscription','Subscription')?></dd>
</dl>

<table>
  <thead>
    <th>№ заявки</th>
    <th>Заявитель</th>
    <th>Акцептант</th>
    <th>Дата акцепта</th>
    <th>Вам поставили оценку</th>
    <th>Вы поставили оценку</th>
  </thead>
  <tbody>
    <? foreach ($acceptions as $key => $accept): ?>
    <tr>
      <td><?=HTML::anchor('/bid/info/'.$accept->request->id,$accept->request->id)?></td>
      <td>
        <?
          if($accept->request->user->id != $user->id)
            echo HTML::anchor('/user/info/'.$accept->request->user->id,$accept->request->user->username);
          else
            echo '[Вы]';
        ?>
      </td>
      <td>
        <?
          if($accept->accept_user->id != $user->id)
            echo HTML::anchor('/user/info/'.$accept->accept_user->id, $accept->accept_user->username);
          else
            echo '[Вы]';
        ?>
      </td>
      <td><?=date('d.m.Y', strtotime($accept->date_created))?></td>
      <td><?=$accept->self_rating($user->id);?></td>
      <td><?=$accept->you_set_rating($user->id);?></td>
    </tr>
    <? endforeach; ?>
  </tbody>
</table>

<p>Итого ваш рейтинг: <?=$user->rating();?></p>