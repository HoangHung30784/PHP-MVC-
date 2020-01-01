<?php
$getProductByAllCate = $data["getProductByAllCate"];

?>

        <section id="slide" class="text-center" >
            <img src="./Frontend/publics/images/slide/sl3.jpg" class="img-thumbnail">
        </section>

    <?php foreach ($getProductByAllCate as $key => $value) { ?> 

        <section class="box-main1" style="float:left;">
                    <h3 class="title-main" style="text-align: left;"><a href="Product/ShowProductByCate/<?php echo $value[0]["category_id"]; ?>"> 
                        <?php echo $key; ?> Máy tính</a> </h3>
                    <div class="showitem">
                        <?php foreach ($value as $item) { ?>
                            <div class="col-md-3 item-product bor">
                                <a href="Product/detail/<?php echo $item['id'] ?>">
                                <img src="./Frontend/publics/uploads/product/<?php echo $item['thumbar'] ?>" class="" width="100%" height="180">
                                </a>
                                <div class="info-item">
                                    <a href="Product/detail/<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                    <p><strike class="sale"><?php echo number_format($item['price'],0,'.',',') ?> đ</strike> <b class="price"><?php echo number_format($item['price']*(1-$item['sale']/100),0,'.',',') ?> đ</b></p>
                                </div>
                                <div class="hidenitem">
                                    <p><a href=""><i class="fa fa-search"></i></a></p>
                                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                                    <p><a href="Cart/addCart/<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
        </section>

    <?php } ?>
                 