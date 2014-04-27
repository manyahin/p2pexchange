<div class="row">
  <div class="small-6 columns">
    <h3>Forgot password?</h3>

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

    <?= Form::label('email', 'Your Email');?>
    <?= Form::input('email', Arr::get($values, 'email'), array('id' => 'email', 'type' => 'email'));?>
    
    <?= Form::submit('reset', 'Reset Password', array('class' => 'button radius')); ?>
    
    <?= Form::close();?>

    <p>Are you sure you already have an account using that email? If not you can <?=HTML::anchor('/register', 'Register Account');?></p>
    <p>Already have an account and remember your password? <?=HTML::anchor('/login', 'Login');?></p>
  </div>
</div>