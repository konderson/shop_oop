<div class="panel-group category-products" id="accordian"><!--category-productsr-->
    <?php foreach ($categories as $categoryItem ):  ?>
        <div class="panel panel-default">
            <div class="panel-heading">

                <h4 class="panel-title"><a
                        style="<?php if ($categoryId===$categoryItem['id']){echo 'color:#FE980F';}?>"
                        href="/category/<?php echo $categoryItem['id']?>/page-1"><?php echo $categoryItem['name']?></a></h4>
            </div>
        </div>
    <?php endforeach; ?>

</div>
    <!--/category-products-->