<h3>Accept Bid</h3>
<? if ($message) : ?>
  <h5 class="message">
    <?= $message; ?>
  </h5>
<? endif; ?>

<? if($error = Arr::get($errors, 'error')): ?>
  <div class="error"><?=$error?></div>
<? endif; ?>
<? if($error = Arr::get($errors, 'user_id')): ?>
  <div class="error"><?=$error?></div>
<? endif; ?>

<?
echo $request->id.'</br>';
echo $user->username.'</br>';
echo $message.'</br>';
?>

<p>Here info about user, who create bid</p>