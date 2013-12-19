<div class="row">
  <div class="small-6 columns">
    <h3>Create Account</h3>
    <h5>Start using market in minutes</p>

    <? if ($message) : ?>
    <div data-alert class="alert-box alert">
      <?= $message; ?>
      <a href="#" class="close">&times;</a>
    </div>
    <? endif; ?>

    <?= Form::open('register'); ?>

    <div class="row">
      <div class="small-12 columns <?=Arr::get($errors, 'username') ? 'error' : '' ?>">
        <?= Form::label('username', 'Username'); ?>
        <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
        <small><?= Arr::get($errors, 'username'); ?></small>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns <?=Arr::get($errors, 'email') ? 'error' : '' ?>">
        <?= Form::label('email', 'Email Address'); ?>
        <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
        <small><?= Arr::get($errors, 'email'); ?></small>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns <?=Arr::path($errors, '_external.password') ? 'error' : '' ?>">
        <?= Form::label('password', 'Password'); ?>
        <?= Form::password('password'); ?>
        <small><?= Arr::path($errors, '_external.password');?></small>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns <?=Arr::path($errors, '_external.password_confirm') ? 'error' : '' ?>">
        <?= Form::label('password_confirm', 'Confirm Password'); ?>
        <?= Form::password('password_confirm'); ?>
        <small><?= Arr::path($errors, '_external.password_confirm');?></small>
      </div>
    </div>

    <?= Form::submit('create', 'Create an Account', array('class' => 'button')); ?>
    <?= Form::close(); ?>

    <p>Already have an account? <?= HTML::anchor('user/login', 'Login'); ?> </p>
  </div>
</div>