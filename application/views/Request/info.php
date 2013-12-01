<? if(!$request): ?>
<h3>Requests not found</h3>
<? else: ?>
<h3>Details of request <strong><?=$request->id?></strong></h3>
<ul>
  <li>User: <?=$request->user->username?></li>
  <li>Sell: <?=$request->sell_sum?> <?=$request->sell_currency_name->name?></li>
  <li>Want: <?=$request->want_sum?> <?=$request->want_currency_name->name?></li>
  <li>Comment: <?=$request->comment?></li>
</ul>
<button class="button small success">Approve</button>
<? endif; ?>

