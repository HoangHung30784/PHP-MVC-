<?php
$PayProduct = $data["PayProduct"];

?>

 <div class="box-left box-menu">
    <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm bán chạy </h3>
    <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
    <ul>
        <?php foreach($PayProduct as $item){ ?>
        <li class="clearfix">
            <a href="http://hoc-php.local/PHP-MVC-02/Product/detail/<?php echo $item['id']?>">
                <img src="<?php echo $Pub_upload;?>/product/<?php echo $item["thumbar"];?>" class="img-responsive pull-left" width="80" height="80">
                <div class="info pull-right">
                    <p class="name"><?php echo $item['name'] ?></p >
                    <?php if($item['sale']>0){  ?>
                    <b class="price">Giảm giá: <?php echo number_format($item['price']*(1-$item['sale']/100),0,'.',',') ?> đ</b><br>
                    <b class="sale">Giá gốc: <?php echo number_format($item['price'],0,'.',',') ?> đ</b><br>
                    <?php }else{ ?>
                        <b class="price">Giá: <?php echo number_format($item['price'],0,'.',',') ?> đ</b><br>
                    <?php } ?>
                    <span class="view"><i class="fa fa-eye"></i> 100000 : <i class="fa fa-heart-o"></i> 10</span>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
    <!-- </marquee> -->
</div>