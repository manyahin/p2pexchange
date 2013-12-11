<h3><?=__('List of requests')?></h3>
<small><?=__('Count of requests:').' '.$count?></small>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th><?=__('User')?></th>
      <th><?=__('Want Sum')?></th>
      <th><?=__('Want Currency')?></th>
      <th><?=__('Sell Sum')?></th>
      <th><?=__('Sell Currency')?></th>
      <th><?=__('Comment')?></th>
      <th><?=__('Methods')?></th>
      <th><?=__('Country')?></th>
      <th><?=__('Date created')?></th>
      <th><?=__('Run')?></th>
    </tr>
  </thead>
  <tbody>
  <? foreach($requests as $request): ?>
    <tr>
      <td><a href="/bid/info/<?=$request->id?>"><?=$request->id?></a></td>
      <td><a href="/user/info/<?=$request->user->id?>"><?=$request->user->username?></a></td>
      <td><?=$request->want_sum?></td>
      <td><?=$request->want_currency_name->name?></td>
      <td><?=$request->sell_sum?></td>
      <td><?=$request->sell_currency_name->name?></td>
      <td><?=$request->comment?></td>
      <td>
      <?
        $methods = $request->methods->find_all();
        if(count($methods)>0) {
          foreach ($methods as $key => $method) {
            echo $method->name.'</br>';
          }
        }
      ?>
      </td>
      <td><?=$request->country->name?></td>
      <td><?=date('H:i d.m.Y', strtotime($request->date_created))?></td>
      <td>
        <?
          // TODO: This is not for view!
          $accept = false;
          if(isset($user) && $user->id) {
            $accept_orm = ORM::factory('acceptor')
              ->where('request_id','=',$request->id)
              ->and_where('user_id','=',$user->id)
              ->find(); 
            if($accept_orm->loaded())
              $accept = true;
          } elseif (isset($user) && $request->user->id === $user->id) {
            
          } else {
            
          }
        ?>
        <?=($accept) ? HTML::anchor('/user/info/'.$request->user->id,'Show user') : HTML::anchor('/bid/accept/'.$request->id,'Accept bid') ?>
      </td>
    </tr>
  <? endforeach; ?>
  </tbody>
</table>