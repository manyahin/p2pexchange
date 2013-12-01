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
      <th><?=__('Date created')?></th>
      <th><?=__('Run')?></th>
    </tr>
  </thead>
  <tbody>
  <? foreach($requests as $request): ?>
    <tr>
      <td><a href="/request/info/<?=$request->id?>"><?=$request->id?></a></td>
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
      <td><?=date('H:i d.m.Y', strtotime($request->date_created))?></td>
      <td><a href="#">Accept bid!</a></td>
    </tr>
  <? endforeach; ?>
  </tbody>
</table>