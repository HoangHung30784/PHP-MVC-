<?php 


$id = $data["id_product"];

$getCateById = $data["getCateById"];

$p = $data["page"];
 
$productByCate = $data["ProductByCate"];

if(isset($productByCate['page']))
{
    $sotrang = $productByCate['page'];
    unset($productByCate['page']);

}


$path = $_SERVER['SCRIPT_NAME'];
 
 ?>

                        <section id="slide" class="text-center" >
                            <h3 class="title-main" style="text-align: left;">
                            	<a><?php echo $getCateById["name"] ?></a>
                            </h3>
                            <div class="showitem clearfix">
                            	<?php foreach ($productByCate as $item) { ?>
                                            <div class="col-md-3 item-product bor">
                                                <a href="Product/detail/<?php echo $item['id'] ?>">
                                                <img src="./Frontend/publics/uploads/product/<?php echo $item['thumbar'] ?>" class="" width="100%" height="180" >
                                                </a>
                                                <div class="info-item">
                                                    <a href="Product/detail/<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                                    <p>
                                                    	<?php if($item['sale']>0): ?>
				                                    	<strike class="sale">
				                                    	<?php echo number_format($item['price'],0,'.',',') ?>đ
				                                    	</strike> 
				                                    		<?php endif ?>
                                                    	<b class="price"><?php echo number_format($item['price']*(1-$item['sale']/100),0,'.',',') ?> đ
                                                    	</b>
                                                    </p>
                                                </div>
                                                <div class="hidenitem">
                                                    <p><a href=""><i class="fa fa-search"></i></a></p>
                                                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                                                    <p><a href="Cart/addCart/<?php echo $item['id']?>"><i class="fa fa-shopping-basket"></i></a></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                            </div>	
                            
                        <nav class="text-center">
                        	<ul class="pagination">
							 <?php for($i=1;$i<=$sotrang;$i++): ?>
                                       
                                    <li class="<?php echo ($i==$p) ? 'active' : '' ?>">
                                        <a href="Product/ShowProductByCate/<?php echo $id ?>/<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                    <?php endfor ?>
							</ul>
                        </nav>
                        </section>

                        
                        
                   


                