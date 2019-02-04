


<?php include ROOT.'/Views/layout/header.php'?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>

                    <?php include ROOT.'/Views/layout/sidebar.php'?>
                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->



                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>

                    <?php foreach ($categoryProducts as $productItem): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src='/template/images/home/<?php echo $productItem['image']?>'  alt="" />
                                        <h2><?php echo $productItem['price']?></h2>
                                        <a href="/product/<?php echo $productItem['id']?>">  <p><?php echo $productItem['id'].' : '.$productItem['name']?></p></a>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в карзину</a>
                                    </div>

                                    <?php if ($productItem['is_new']==1){
                                        echo '<img src="/template/images/home/new.png" class="new" alt="">';
                                    } ?>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Добавить в понравившееся</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Купить</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                   <center> <?php echo $pagination->get();?> </center>

                </div>
            </div>

        </div><!--features_items-->





    </div>
    </div>
    </div>
</section>
<?php include ROOT.'/Views/layout/footer.php'?>