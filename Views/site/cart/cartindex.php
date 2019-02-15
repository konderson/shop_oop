<?php include ROOT.'/Views/layout/header.php'?>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Категории</h2>

                        <?php include ROOT.'/Views/layout/sidebar.php'?>

                </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Товары в корзине</h2>
                        <?php
                        if($productsInCart):?>
                        <p>Список товаров :</p>
                        <table class="table-bordered table-striped table">
                            <tr>

                                <th>Код товаров </th>
                                <th>Название</th>
                                <th>Стоимость , сом</th>
                                <th>Количество ,шт</th>

                            </tr>


                        </table>

<?php else: ?>
                        <p>Корзина пуста</p>
<?php endif;?>
                    </div>
                </div>







        </div>

        </div>
    </section>

<?php include ROOT.'/Views/layout/footer.php'?>