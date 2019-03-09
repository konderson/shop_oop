<?php include ROOT.'/Views/layout/header.php'?>

    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="login-form"><!--login form-->

                        <div class="col-sm-12">
                            <center>
                                <?php if($result):?>

                                <p>Заказ оформлен успешно.Наш консультант перезвонит Вам!</p>
                                <?php else: ?>
                                <p>Выбрано товаров <?php echo $totalQuantity; ?>  на сумму : <?php  echo $totalPrice;?> сом  </p>

                           <?php if(isset($errors)) : ?>
                           <?php foreach ($errors as $error) :?>
                           <li style="color:red;font-size: 19px;"><?php echo $error; ?></li>
                           <?php endforeach ?>

                           <?php endif; ?>
                                    <div class="signup-form"><!--sign up form-->
                                    <h2>Оформить заказ!</h2>
                                    <form class="form_edit"  method="post" action="order">
                                        <input class="form_edit"   name="userName" type="text" placeholder="Имя" value="<?php if(isset($userName))echo $userName ?>"/>
                                        <input class="form_edit"   name="userPhone" type="text" placeholder="Номер телефона" value="<?php if(isset($userPhone))echo $userPhone ?>"/>
                                        <input class="form_edit"   name="userComment" type="text" placeholder="Коментарий к заказу" value="<?php if(isset($userComment))echo $userComment ?>"/>


                                        <input type="submit"name="submit" class="btn btn-default" value="Заказать"/>
                                    </form>
                                </div><!--/sign up form-->
                           <?php endif;?>
                            </center>

                        </div>
                    </div>
                </div>
    </section><!--/form-->

<?php include ROOT.'/Views/layout/footer.php'?>