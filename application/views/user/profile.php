<h3><?=__('Your account', array(':user' => $user->username))?></h3>
<? if ($message) : ?>
  <h5 class="message">
    <?= $message; ?>
  </h5>
<? endif; ?>

<dl class="sub-nav">
  <dd class="active"><?=HTML::anchor('user/profile','Profile')?></dd>
  <dd><?=HTML::anchor('user/ratings/','Ratings')?></dd>
  <dd><?=HTML::anchor('user/settings/','Settings')?></dd>
  <dd><?=HTML::anchor('user/status/','Status')?></dd>
  <dd><?=HTML::anchor('user/bids/','Bids')?></dd>
  <dd><?=HTML::anchor('user/subscription/','Subscription')?></dd>
</dl>

<?= Form::open('', array('id' => 'profile_form'))?>
  <?= Form::label('username', 'Username')?>
  <?= Form::input('username', $user->username, array('disabled' => 'disabled'))?>
  <?= Form::label('email', 'Email')?>
  <?= Form::input('email', $user->email, array('disabled' => 'disabled'))?>
<!--   <label for="wmid">WMID</label>
  <input type="text" name="wmid"> -->
  <!-- <label for="name">Name/LastName</label>
  <input type="text" name="name"> -->
  <!-- <label for="docs">Documents</label>
  <input type="file" name="docs"> -->
  <?= Form::label('phone', 'Phone (Hidden)')?>
  <?= Form::input('phone', $user->phone, array('id' => 'phone'))?>
  <?if(!$user->phone_verified):?>
    <div class="form_error"><?=__('Phone number is not verified')?></div>
    <div class="verification_phone_form panel">  
      <div class="send_code">
        <?= Form::label('send_code', 'Phone verification code')?>
        <?= Form::button('send_code', 'Send code', array('id' => 'send_code', 'class' => 'tiny button', 'href' => '/user/phone_code/')); ?>
      </div>
      <div class="receive_code" style="display: none;">
        <p>Sms code are send, please type it here when receive. If you don't receive code, try resend it.</p>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <?= Form::input('phone_code', null, array('id' => 'phone_code'))?>
          </div>
          <div class="small-12 medium-6 columns">
            <?= Form::button('check_code', 'Check code', array('id' => 'check_code', 'class' => 'tiny button', 'href' => '/user/phone_code/')); ?>
            <?= Form::button('resend_code', 'Resend code', array('id' => 'resend_code', 'class' => 'tiny button', 'href' => '/user/phone_verification/')); ?>
          </div>
        </div>
      </div>  
      <div class="message">
        <div id="phone_code_error" style="display: none;" class="form_error"></div> 
      </div>  
    </div>    
  <?endif;?>
  <!-- <label for="icq">ICQ</label>
  <input type="text" name="icq">
  <label for="site">Web Site</label>
  <input type="text" name="site">
  <label for="skype">Skype (I can verify it?)</label> 
  <input type="text" name="skype">
  <label for="paypal">PayPal</label>
  <input type="text" name="paypal">
  <label for="qiwi">Qiwi</label>
  <input type="text" name="qiwi">
  <label for="yandex">Yandex.Money (Do not use in Israel?)</label>
  <input type="text" name="yandex"> -->
  <?= Form::button('submit', 'Save profile', array('class' => 'button', 'type' => 'submit')); ?>
<?= Form::close()?>

<script>
$(function(){

  $('.verification_phone_form').on('click', '#send_code, #check_code', function(e) {
    e.preventDefault();
    var phone_number = $('#phone').val();
    var error_input = $('#phone_code_error');
    var code = $('#phone_code').val();
    error_input.html('').hide();
    if(phone_number.length < 1)
    {
      error_input.html('Phone number must be filled!');
      error_input.show();
      return false;
    }
    if(code.length > 0)
    {
      if(!check_phone_code(code))
      {
        error_input.html('Wrong code!');
        error_input.show();
        return false;
      }
    }
    $.ajax({
      url: $(this).attr('href'),
      dataType: "json",
      type: "POST",
      data: {
        'number': phone_number,
        'code': code,
      },
      success: function(data) {
        if(data.error) {
          error_input.html(data.error);
          error_input.show();
        }
        if(data.result == 'Ok')
        {
          $('.send_code').hide();
          $('.receive_code').show();
        }
        if(data.result == 'verified')
        {
          window.location.reload(false);
        }
      }
    })
  });

  // $('#profile_form').on('click', '#send_code', function(e) {
  //   e.preventDefault();
  //   var phone_code = $('#phone_code').val();
  //   var error_input = $('#phone_code_error');
  //   error_input.html('').hide();
  //   if(!check_phone_code(phone_code))
  //   {
  //     error_input.html('Wrong code!');
  //     error_input.show();
  //     return false;
  //   }
  //   $.ajax({
  //     url: $(this).attr('href'),
  //     dataType: "json",
  //     type: "POST",
  //     data: {
  //       'number': phone_code,
  //     },
  //     success: function(data) {
  //       if(data.error)
  //         console.log('error!');
  //       if(data.result)
  //         console.log('result!');
  //     }
  //   })
  // })

  function check_phone_code(number)
  {
    if(number.length != 6) return false;
    if(!/^\d+$/.test(number)) return false;
    return true;
  }
})
</script>