<div class="row">
  <div class="small-6 columns">
    <h3>Please Verify Your Email Address</h3>
    
    <? if ($message) : ?>
    <div data-alert class="alert-box success">
      <?= $message; ?>
      <a href="#" class="close">&times;</a>
    </div>
    <? endif; ?>

    <? if ($error) : ?>
    <div data-alert class="alert-box alert">
      <?= $error; ?>
      <a href="#" class="close">&times;</a>
    </div>
    <? endif; ?>

    <p>We just sent a verification email to <?=$email?>. Click the link in the email to get started!</p>

    <p><a href="#" class="toggle">Email didn't arrive or want to use a different email?</a></p>
    <ul style="display: none;">
      <li>Check your spam folder and if it's there mark the message as "Not Spam".</li>
      <li>To use a different email address on your account, enter it below:
        <?=Form::open();?>
        <div class="row collapse">
          <div class="small-8 columns">
            <?=Form::input('email', $email);?>
          </div>
          <div class="small-4 columns">
            <?=Form::button('submit','Update Email', array('class' => 'button postfix'));?>
          </div>
        </div>
        <?=Form::close();?>
      </li>
      <li>Or try <?=HTML::anchor('/login', 'login')?> using your other email address.</li>
    </ul>

  </div>
</div>

<script>
$(function(){
  $('a.toggle').on('click', function(e){
    e.preventDefault();
    $(this).parent().next('ul').toggle();
  })
})
</script>