<title><?=$page_title.' - '.$site_name?></title>

<?=HTML::style($dir_css.'bootstrap.css')?>
<?=HTML::style($dir_css.'skfbgtu_auth.css')?>

<div class="auth col-lg-offset-5 col-lg-2 col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8 text-center">
  <h3>Авторизация</h3>
  <?=Form::open()?>
    <div class="form-group">
      <?=Form::input('user', $user, array('class' => 'form-control', 'placeholder' => 'Имя', 'autofocus'))?>
    </div>
    <div class="form-group">
      <?=Form::password('password', '', array('class' => 'form-control', 'placeholder' => 'Пароль'))?>
    </div>
    
    <? if (isset($error)): ?>
      <div class="error text-danger text-center"><?=$error?></div>
    <? endif ?>
    
    <?=Form::submit('login', 'Войти', array('class' => 'btn btn-primary btn-lg'))?>
  </form>
</div>
