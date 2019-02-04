<?php include ROOT.'/Views/layout/header.php'?>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Войти в свой акаунт</h2>
                    <form action="#">
                        <input type="text" placeholder="Имя" />
                        <input type="email" placeholder="Email Address" />
                        <span>
								<input type="checkbox" class="checkbox">
								Запомнить меня!
							</span>
                        <button type="submit" class="btn btn-default">Войти</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Создать нового пользователя!</h2>
                    <form action="#"method="post">
                        <input name="name" type="text" placeholder="Имя" value="<?php echo $name ?>"/>
                        <input type="email" name="email" placeholder="Email Address" value=" <?php echo $email?>"/>
                        <input type="password" name="password" placeholder="Пароль" value=" <?php echo $password?>"/>
                        <input type="submit"name="submit" class="btn btn-default">Зарегестрироватся</input>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php include ROOT.'/Views/layout/footer.php'?>