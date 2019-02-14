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


                                    }  } if ($result_mail==true) {

                                    echo "<li style='font-size: 14px;color: #cf4514'>Cообщение отправлено ! Мы ответим Вам на укзанный email.</li>";
                                }?>
                                <div class="signup-form"><!--sign up form-->
                                    <h2>Обратная связь</h2>
                                    <h5>Есть вопрос? Напиши нам</h5>
                                    <form class="form_edit"  method="post">
                                        <input class="form_edit"   name="email" type="email" placeholder="Ваша почта" value="<?php if (isset($userEmail))echo $userEmail?>"/>
                                        <input  type="text" name="msg" placeholder="Ваше сообщение" value="<?php if (isset($userText))  echo $userText?>"/>
                                        <input type="submit"name="mail_send" class="btn btn-default" value="Отправить"/>
                                    </form>
                                </div><!--/sign up form-->
                            </center>
                        </div>
                    </div>
                </div>
    </section><!--/form-->

<?php include ROOT.'/Views/layout/footer.php'?>