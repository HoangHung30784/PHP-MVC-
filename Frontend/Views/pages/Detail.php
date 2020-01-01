<?php 
 
$id = $data["id_sanpham"];

//chi tiết sản phẩm
$product = $data["product_detail"];

//sản phẩm kèm theo


$sanphamkemtheo = $data["sanphamkemtheo"];

 
 ?>


                        <h3 class="title-main" style="text-align: left;"><a href=""> Thông tin chi tiết của sản phẩm </a> </h3>
                        
                        <section class="box-main1" >
                            <div class="col-md-6 text-center">
                                <img src="./Frontend/publics/uploads/product/<?php echo $product['thumbar'] ?>" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="images/16-270x270.png">
                                
                                <ul class="text-center bor clearfix" id="imgdetail">
                                    <li>
                                        <img src="./Frontend/publics/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                                    </li>
                                    <li>
                                        <img src="./Frontend/publics/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                                    </li>
                                    <li>
                                        <img src="./Frontend/publics/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                                    </li>
                                    <li>
                                        <img src="./Frontend/publics/images/16-270x270.png" class="img-responsive pull-left" width="80" height="80">
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
                               <ul id="right">
                                    <li><h3> <?php echo $product['name'] ?> </h3></li>
                                    
                                    <li><p>
                                    		<?php if($product['sale']>0): ?>
                                    	<strike class="sale">
                                    	<?php echo number_format($product['price']) ?>đ
                                    	</strike> 
                                    		<?php endif ?>
                                    	<b class="price"><?php echo number_format($product['price']*(1-$product['sale']/100)) ?> đ
                                    	</b>
                                   		 </p>
                                    </li>
                                    <li><a href="Cart/addCart/<?php echo $product["id"]; ?>" class="btn btn-default"> <i class="fa fa-shopping-basket"></i>Add TO Cart</a></li>
                               </ul>
                            </div>

                        </section>


                        <div class="col-md-12" id="tabdetail">
                            <div class="row">
                                    
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
                                    <li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
                                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h3>Nội dung</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3> Thông tin khác </h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <h3>Menu 3</h3>
                                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                        	<section class="box-main1" style="float:left;">
                                    <h3 class="title-main" style="text-align: left;"><a href=""> Sản phẩm liên quan </a> </h3>
                        	<div class="showitem">
                                        <?php foreach ($sanphamkemtheo as $item) { 
                                        		if($item['id']!=$product['id']):
                                        	?>
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
                                                    <p><a href="Cart/addCart/<?php echo $item['id']; ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                                </div>
                                            </div>
                                            <?php endif ?>
                                        <?php } ?>
                            </div>
                            </section>
                        </div>		

                 
           