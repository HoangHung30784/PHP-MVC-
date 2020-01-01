<?php 
 
$sum = 0;

 ?>
<?php 
 
 ?>

                    
                        <section id="slide" class="text-center" >
                            <h3 class="title-main" style="text-align: left;">
                            	<a href="">Giỏ hàng của bạn</a>
                            </h3>

                            <?php if(isset($_SESSION['success'])): ?>
                                <div class="alert alert-success">
                                    <strong><?php echo $_SESSION['success']; unset($_SESSION['success'])?></strong> 
                                </div>
                            <?php endif ?>
                            <table class="table table-hover" style="text-align: left;" >
                            	<thead>
                            		<tr>
                            			<th >STT</th>
                            			<th >Tên sản phẩm</th>
                            			<th >Hình ảnh</th>
                            			<th>Số lượng</th>
                            			<th >Đơn giá</th>
                            			<th >Thành tiền</th>
                            			<th >Thao tác</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            		<?php $stt=1; foreach ($_SESSION['cart'] as $key => $value):		?>
                            			
                            		<tr>
                            			<td><?php echo $stt ?></td>
                            			<td><?php echo $value['name'] ?></td>
                            			<td>
                            				<img src="<?php echo uploads()?>product/<?php echo $value['thumbar'] ?>" width=80px; height=80px;>                            					
                            			</td>
                            			<td>
                            				<input type="number" name="qty" id="qty" value="<?php echo $value['qty']?>" class="form-control" style="width: 60px;" min='0'/>
                            			</td>
                            			
                            			<td><?php echo number_format($value['price'],0,',','.') ?></td>
                            			<td><?php echo  number_format($value['qty']*$value['price'],0,',','.')?></td>
                            			<td>
                            				<a href="Cart/removeCart/<?php echo $key; ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Remove</a>
                            				<a href="" class="btn btn-xs btn-info updatecart" data-key = <?php echo $key ?>><i class="fa fa-refresh"></i>Update</a>
                            			</td>
                            		</tr>
                            			<?php $sum += $value['qty']*$value['price']; $_SESSION['tongtien']=$sum; ?>
                            		<?php  $stt++; endforeach ?>
                            	</tbody>

                            </table>


                            <div class="col-md-5 pull-right" style="text-align: left;">
                            	<ul class="list-group">
                            		<li class="list-group-item">
                            			<h3>Thông tin đơn hàng</h3>
                            		</li>
                            		<li class="list-group-item">
                            			Số tiền
                            			<span class="badge"><?php echo number_format($_SESSION['tongtien']) ?></span>

                            		</li>
                            		<li class="list-group-item">
                            			Thuế VAT
                            			<span class="badge">10%</span>

                            		</li>
                            		
                            		<li class="list-group-item">
                            			Tổng tiền thanh toán
                            			<span class="badge"><?php $_SESSION['total']=$_SESSION['tongtien']*110/100; echo number_format($_SESSION['total']) ?></span>

                            		</li>
                            		<li class="list-group-item">
                            			<a href="index.php" class="btn btn-success">Tiếp tục mua hàng</a>
                            			<a href="http://hoc-php.local/PHP-MVC-02/DonHang/thanhtoan" class="btn btn-success">Thanh toán</a>

                            		</li>
                            	</ul>
                            </div>

                        </section>
                        
                   

