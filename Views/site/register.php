<?php include ROOT.'/Views/layout/header.php'?>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                     <?php
                if (isset($errors_sign)) {
                    if (count($errors_sign) > 0) {
                        foreach ($errors_sign as $error) {
                            echo "<li style='font-size: 14px;color: #cf4514'>$error</li>";
                        }
                    }
                }
                    ?>
                    <h2>Войти в свой акаунт</h2>
                    <form action="/login"  method="post">
                        <input  type="email" name="email" placeholder="Email Address" />
                        <input type="text" name="password" placeholder="Пароль" />
                        <span>
								<input type="checkbox" class="checkbox">
								Запомнить меня!
							</span>
                        <input type="submit" name="login" class="btn btn-default"  value="Войти" />
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <?php
                if (isset($errors))
                {
                if(count($errors)>0) {
                    foreach ($errors as $error) {
                        echo "<li style='font-size: 14px;color: #cf4514'>$error</li>";
                    }

                    if (isset($result)) {
                        echo "<li style='font-size: 14px;color: #cf4514'>Вы зарегестрировались</li>";
                    }
                }  }?>
                <div class="signup-form"><!--sign up form-->
                    <h2>Создать нового пользователя!</h2>
                    <form action="/register" method="post">
                        <input name="name" type="text" placeholder="Имя" value="<?php if(isset($name))echo $name ?>"/>
                        <input type="email" name="email" placeholder="Email Address" value="<?php  echo $email?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password?>"/>
                        <input type="submit"name="submit" class="btn btn-default" value="Зарегестрироватся"/>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php include ROOT.'/Views/layout/footer.php'?>