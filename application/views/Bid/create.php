<?
  // var_dump( Arr::get($values, 'sell_currency') );
  // var_dump($errors);
?>
<h3><?=__('Create new bid')?></h3>
<? if ($message) : ?>
  <div data-alert class="alert-box alert">
    <?= $message; ?>
    <a href="#" class="close">&times;</a>
  </div>
<? endif; ?>
<div class="row">
  <?= Form::open('bid/create'); ?>
    <div class="large-6 columns">

      <p>What do selling?</p>
      <div class="row">
        <div class="small-12 large-6 columns <?=Arr::get($errors, 'sell_sum') ? 'error' : '' ?>">
          <?= Form::label('sell_sum', 'Sum'); ?>
          <?= Form::input('sell_sum', HTML::chars(Arr::get($values, 'sell_sum')), array('type' => 'number')); ?>
          <small><?= Arr::get($errors, 'sell_sum'); ?></small>
        </div>
        <div class="small-12 large-6 columns <?=Arr::get($errors, 'sell_currency') ? 'error' : '' ?>">
          <?= Form::label('sell_currency', 'Currency'); ?>
          <?= Form::select('sell_currency', $all_currencies, Arr::get($values, 'sell_currency'), array('id' => 'sell_currency')) ?>
          <small><?= Arr::get($errors, 'sell_currency'); ?></small>
        </div>
      </div>

      <p>What do want?</p>
      <div class="row">
        <div class="small-12 large-6 columns <?=Arr::get($errors, 'want_sum') ? 'error' : '' ?>">
          <?= Form::label('want_sum', 'Sum'); ?>
          <?= Form::input('want_sum', HTML::chars(Arr::get($values, 'want_sum')), array('type' => 'number')); ?>
          <small><?= Arr::get($errors, 'want_sum'); ?></small>
        </div>
        <div class="small-12 large-6 columns <?=Arr::get($errors, 'want_currency') ? 'error' : '' ?>">
          <?= Form::label('want_currency', 'Currency'); ?>
          <?= Form::select('want_currency', $all_currencies, Arr::get($values, 'want_currency'), array('id' => 'want_currency')) ?>
          <small><?= Arr::get($errors, 'want_currency'); ?></small>
        </div>
      </div>

      <?= Form::label('comment', 'Comment'); ?>
      <?= Form::textarea('comment', Arr::get($values, 'comment')); ?>
      <?= Form::button('submit', 'Create request', array('class' => 'button small round', 'type' => 'submit')); ?>
    </div>
    <div class="large-6 columns">
      <div id="countries">
        <?= Form::label('country', 'Country'); ?>
        <?= Form::select('country', $countries, Arr::get($values, 'country')); ?>
      </div>
      <div id="methods">
        <?= Form::label('methods', 'Method of transfer'); ?>
        <? foreach($methods as $method): ?>
          <? 
            $methods = array(); 
            if(Arr::get($values, 'methods')) 
              $methods = Arr::get($values, 'methods');
          ?>
          <?= Form::checkbox('methods[]', $method->id, in_array($method->id, $methods) ? TRUE : FALSE ); ?>
          <?= Form::label($method->id, $method->name); ?>
          </br>
        <? endforeach; ?>
        <div class="error">
          <?= Arr::get($errors, 'methods'); ?>
        </div>
      </div>
    </div>
  <?= Form::close(); ?>
</div>

<?
// Generate cash currencies obj for js
$currencies = array();
foreach ($all_currencies as $cat => $cur) 
  if(is_array($cur))
    foreach ($cur as $key => $name)
      $currencies[$cat][$key] = $name;
  else
    $currencies[$cat] = $cur;
?>

<script>

$(function() {

  <?
  if(array_key_exists(Arr::get($values,'want_currency'), $currencies['Cash'])
    || array_key_exists(Arr::get($values,'sell_currency'), $currencies['Cash'])) 
  {
    echo "$('#methods, #countries').show();";
  }
  ?>

  // Some magic
  var currencies = <?=json_encode($currencies)?>;
  $('#want_currency, #sell_currency').on('change', function(e){
    var want_sel = $('#want_currency').find(':selected').val();
    var sell_sel = $('#sell_currency').find(':selected').val();
    if(this.id == 'want_currency')
    {
      $('#want_currency').find('option[value=-1]').remove();
      if(sell_sel != -1)
        reGenerate(currencies,'sell',sell_sel);
      $('#sell_currency').find('option[value='+want_sel+']').remove();
    } 
    else
    {
      $('#sell_currency').find('option[value=-1]').remove();
      if(want_sel != -1)
        reGenerate(currencies,'want',want_sel);
      $('#want_currency').find('option[value='+sell_sel+']').remove();
    }
    if(currencies['Cash'][want_sel] != undefined 
      || currencies['Cash'][sell_sel] != undefined)
    {
      $('#methods, #countries').show();
    }
    else
    {
      $('#methods, #countries').hide();
    }
  })

  function reGenerate(currencies, type, selected_key)
  {
    var select = $('#'+type+'_currency').empty();  
    for(var cat in currencies)
    {
      if(cat == -1) continue; // Not render empty
      var group = $('<optgroup label="'+cat+'"></optgroup>');
      for(var cur_id in currencies[cat])
      {
        if(selected_key > 0 && selected_key == cur_id){
          group.append('<option value="'+cur_id+'" selected="selected">'+currencies[cat][cur_id]+'</option>');
        }
        else
          group.append('<option value="'+cur_id+'">'+currencies[cat][cur_id]+'</option>');
      }
      select.append(group);
    }
  }

});

</script>
