<h3>Accept Bid</h3>
<? if ($message) : ?>
  <div data-alert class="alert-box success">
    <?= $message; ?>
    <a href="#" class="close">&times;</a>
  </div>
<? endif; ?>

<? if($error = Arr::get($errors, 'error')): ?>
  <div data-alert class="alert-box alert">
    <?= $error; ?>
    <a href="#" class="close">&times;</a>
  </div>
<? endif; ?>
<? if($error = Arr::get($errors, 'user_id')): ?>
  <div data-alert class="alert-box alert">
    <?= $error; ?>
    <a href="#" class="close">&times;</a>
  </div>
<? endif; ?>

<? if($user_created): ?>

<ul>
  <li><strong>Login:</strong> <?= $user_created->username; ?></li>
  <li><strong>Date of registration:</strong> <?= ($user_created) ? $user_created->date_registration : 'для вас скрыто'; ?></li>
  <li><strong>Email:</strong> <?= ($user_created) ? $user_created->email : 'для вас скрыто'; ?></li>
  <li><strong>Number of logins:</strong> <?= ($user_created) ? $user_created->logins : 'для вас скрыто'; ?></li>
  <li><strong>Last Login:</strong> <?= ($user_created) ? Date::fuzzy_span($user_created->last_login) : 'для вас скрыто'; ?></li>
  <li><strong>Phone:</strong> <?= ($user_created) ?$user_created->phone : 'для вас скрыто'; ?></li>
</ul>

<? endif; ?>