<div class="row">
  <div class="small-6 columns">
    <h3>Reset Password</h3>

    <? if ($error) : ?>
    <div data-alert class="alert-box alert">
      <?= $error; ?>
      <a href="#" class="close">&times;</a>
    </div>
    <? endif; ?>

    <? if ($message) : ?>
    <div data-alert class="alert-box success">
      <?= $message; ?>
      <a href="#" class="close">&times;</a>
    </div>
    <? endif; ?>

    <?= Form::open();?>
    
    <?= Form::label('password', 'Choose A Password');?>
    <?= Form::input('password', null, array('id' => 'password', 'type' => 'password', 'placeholder' => 'Password'));?>

    <?= Form::label('password_confirm', 'Confirm Password');?>
    <?= Form::input('password_confirm', null, array('id' => 'password_confirm', 'type' => 'password', 'placeholder' => 'Confirm Password'));?>

    <?= Form::submit('submit', 'Update Password', array('class' => 'button radius')); ?>
    <?= Form::close();?>
  </div>
</div>