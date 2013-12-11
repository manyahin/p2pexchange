<h3>Set rating</h3>

<?= Form::open('/rating/'.$bid->id); ?>

  <?= Form::label('rating', 'Rating:'); ?>
  <?= Form::select('rating', array(2 => '2 (Very good)', 1 => '1 (Good)', -1 => '-1 (Bad)', -2 => '-2 (Very bad)')); ?>

  <?= Form::label('comment', 'Comment:'); ?>
  <?= Form::textarea('comment'); ?>

  <?= Form::button('submit', 'Submit', array('class' => 'button small round', 'type' => 'submit')); ?>

<?= Form::close(); ?>