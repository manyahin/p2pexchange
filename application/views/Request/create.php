<h3><?=__('Create new request')?></h3>
<div class="row">
  <form action="/request/create" method="POST">
    <div class="small-6 columns">
        <p>Sell</p>
        <div class="row">
          <div class="small-6 columns">
            <label for="sell_sum">Sum</label>
            <input type="number" name="sell_sum">
          </div>
          <div class="small-6 columns">
            <label for="sell_currency">Currency</label>
            <select name="sell_currency" id="sell_currency">
              <option value></option>
              <? 
              foreach($all_currencies as $category_name => $currencies)
              {
                echo '<optgroup label="'.$category_name.'">';
                foreach ($currencies as $cur) {
                  echo '<option value="'.$cur->id.'">'.$cur->name.'</option>';
                }
                echo '</optgroup>';
              }
              ?>
            </select>
          </div>
        </div>
        
        <p>Want:</p>
        <div class="row">
          <div class="small-6 columns">
            <label for="want_sum">Sum</label>
            <input type="number" name="want_sum">
          </div>
          <div class="small-6 columns">
            <label for="want_currency">Currency</label>
            <select name="want_currency" id="want_currency">
              <option value></option>
              <? 
              foreach($all_currencies as $category_name => $currencies)
              {
                echo '<optgroup label="'.$category_name.'">';
                foreach ($currencies as $cur) {
                  echo '<option value="'.$cur->id.'">'.$cur->name.'</option>';
                }
                echo '</optgroup>';
              }
              ?>
            </select>
          </div>
        </div>
        
        <p>Comments</p>
        <textarea name="comment" id="comment"></textarea>
        <button class="button round" type="submit">Create request</button> 
    </div>
    <div class="small-6 columns">
      <? if ($message) : ?>
        <h3 class="message">
          <?= $message; ?>
        </h3>
      <? endif; ?>
      <div id="methods">
        <p>Method of transfer:</p>
        <? foreach($methods as $method): ?>
          <input type="checkbox" name="methods[]" value="<?=$method->id?>"><?=$method->name?></br>
        <? endforeach; ?>
      </div>
      <div id="countries">
        <p>Country:</p>
        <select name="country" id="country">
        <? foreach($countries as $country): ?>
          <option value="<?=$country->id?>"><?=$country->name?></option>
        <? endforeach; ?>  
        </select>
      </div>
    </div>
  </form> 
</div>

<?
// Generate cash currencies obj for js
$pre_all_currencies = array();
foreach ($all_currencies as $category_name => $currencies) 
  foreach ($currencies as $value)
    $pre_all_currencies[$category_name][$value->id] = $value->name;
$json_all_currencies = json_encode($pre_all_currencies); 

?>

<script>

$(function() {

  var currencies = <?=$json_all_currencies?>;
  $('#want_currency, #sell_currency').on('change', function(e){
    var want_sel = $('#want_currency').find(':selected').val();
    var sell_sel = $('#sell_currency').find(':selected').val();
    if(this.id == 'want_currency')
    {
      reGenerate(currencies,'sell',sell_sel);
      $('#sell_currency').find('option[value='+want_sel+']').remove();
    } 
    else
    {
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
    select.append($('<option value></option>'));   
    for(var cat in currencies)
    {
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
