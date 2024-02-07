<!-- Скрипт для валидации формы -->
<?=HTML::script($dir_js.'jquery.validate.min.js')?>
<?=HTML::script($dir_js.'messages_ru.min.js')?>

<div class="feedback row text-center">
	<div class="text-left" style="margin-bottom: 1em;">
		<h5>
			<?= HTML::anchor(
				$dir_docs . 'vopros.pdf',
				"Часто задаваемые вопросы",
				['target' => '_blank', 'style' => 'text-decoration: underline']
			) ?>
		</h5>
	</div>

  <?=Form::open('/feedback')?>
    <div class="col-sm-8 col-xs-12">
      <div class="form-group">
        <?=Form::textarea('letter', $letter->letter, array('class' => 'form-control', 'placeholder' => 'Вы можете задать интересующий Вас вопрос, внести предложения или оставить отзыв о работе филиала', 'autofocus'))?>
      </div>
    </div>
      
    <div class="col-sm-4 col-xs-12">
      <div class="form-group">
        <?=Form::input('from_name', $letter->from_name, array('class' => 'form-control', 'placeholder' => 'ФИО отправителя'))?>
      </div>

      <div class="form-group">
        <?=Form::input('from_email', $letter->from_email, array('class' => 'form-control', 'placeholder' => 'E-mail для обратной связи'))?>
      </div>

      <div class="form-group">
        <?=Form::input('from_phone', $letter->from_phone, array('class' => 'form-control', 'placeholder' => 'Телефон (необязательно)'))?>
      </div>

      <div class="form-group">
        <?=Form::input('theme', $letter->theme, array('class' => 'form-control', 'placeholder' => 'Тема письма'))?>
      </div>

      <div class="form-group text-center">
        <?=Form::label('captcha', 'Введите текст с картинки', array('class' => 'col-xs-12'))?>
        <div class="col-xs-offset-2 col-xs-4">
          <?=$captcha?>
        </div>
        <div class="col-xs-4">
          <?=Form::input('captcha', '', array('id' => 'captcha', 'class' => 'form-control text-uppercase'))?>
        </div>
      </div>

      <div class="captcha-error col-xs-12"><?=$captcha_error?></div>
      
      <?=Form::submit('send', 'Отправить письмо', array('class' => 'btn btn-primary '.($mode == 'normal' ? 'btn-sm' : 'btn-lg').' col-xs-offset-3 col-xs-6'))?>
    </div>
  <?=Form::close()?>

  <div class="status col-xs-12"><?=$status?></div>
</div>

<script>
	$(document).ready(function(){
    $('input[name=captcha]').blur(function() {
      $('div.captcha-error').html('');
    });
    
    $(".feedback form").validate({
      rules:{
        from_name:{
          required: true,
          minlength: 7
        },
        from_email:{
          required: true,
          email: true
        },
        theme:{
          required: true,
          minlength: 4
        },
        letter:{
          required: true,
          minlength: 15
        },
        captcha:{
          required: true,
          minlength: 4,
          maxlength: 4
        }
      }
    });      
	});
</script>
