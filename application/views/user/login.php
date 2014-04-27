<div class="row">
  <div class="small-6 columns">
    <h3><?=__('Login')?></h3>
    <? if ($message) : ?>
      <h3 class="message">
        <?= $message; ?>
      </h3>
    <? endif; ?>

    <?= Form::open('user/login'); ?>

    <?= Form::label('username', 'Username'); ?>
    <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>

    <?= Form::label('password', 'Password'); ?>
    <?= Form::password('password'); ?>

    <?= Form::checkbox('remember', null, false, array('id' => 'remember')); ?>
    <?= Form::label('remember', 'Remember Me'); ?>

    <p>(Remember Me keeps you logged in for 2 weeks)</p>

    <?= Form::submit('login', 'Login', array('class' => 'button')); ?>
    <?= Form::close(); ?>

    <p><?= HTML::anchor('/user/forgot_password', 'Forgot password?'); ?> · Don't have an account? <?= HTML::anchor('register', 'Create a new'); ?></p>
  </div>
</div>