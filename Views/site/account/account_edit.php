<?php include ROOT.'/Views/layout/header.php'?>

    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="login-form"><!--login form-->

                <div class="col-sm-12">
                    <center>
                    <?php
                    if (isset($errors))
                    {
                        print_r($errors);
                        if(count($errors)>0) {
                            foreach ($errors as $error) {
                                echo "<li style='font-size: 14px;color: #cf4514'>$error</li>";
                            }


                        }  } if (isset($result_edit)) {

                        echo "<li style='font-size: 14px;color: #cf4514'>Данные сохранены</li>";
                    }?>
                    <div class="signup-form"><!--sign up form-->
                        <h2>Редактировать данные  пользователя!</h2>
                        <form class="form_edit"  method="post">
                            <input class="form_edit"   name="name" type="text" placeholder="Имя" value="<?php if(isset($name))echo $name ?>"/>
                            <input  type="email" name="email" placeholder="Email Address" value="<?php  echo $email?>"/>
                            <input  type="password" name="password" placeholder="Пароль"  value="<?php echo $password?>"/>
                            <input type="submit"name="edit" class="btn btn-default" value="Cохранить"/>
                        </form>
                    </div><!--/sign up form-->
                    </center>
                </div>
            </div>
        </div>
    </section><!--/form-->

<?php include ROOT.'/Views/layout/footer.php'?>