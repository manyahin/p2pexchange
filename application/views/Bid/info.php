<? if(!$request): ?>
<h3>Bid not found</h3>
<? else: ?>
<h3>Details of request <strong><?=$request->id?></strong></h3>
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
      <td><a href="/bid/accept/<?=$request->id?>">Accept bid!</a></td>
    </tr>
  </tbody>
</table>

<? endif; ?>

