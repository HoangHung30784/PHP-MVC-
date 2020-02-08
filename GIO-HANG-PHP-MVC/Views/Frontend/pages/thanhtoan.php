<?php 


$user = $data["user_thanhtoan"];

 
 ?>


                    <div class="col-md-9">
                        <section id="slide" class="text-center" >
                            <h3 class="title-main" style="text-align: center;">
                            	<a href="">Thanh toán đơn hàng</a>
                            </h3>

                            <form action="" method="POST" role="form" class="form-horizontal" style="margin-top: 20px;">
                            		
                            	
                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Tên thành viên</label>
                            			<div class="col-md-8">
                            				<input readonly="" type="text" class="form-control" name="name" placeholder="Nhập tên thành viên" value="<?php echo $user['name'] ?>">
                            				
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Email</label>
                            			<div class="col-md-8">
                            				<input readonly="" type="email" class="form-control" name="email" placeholder="Nhập email" value="<?php echo $user['email'] ?>">
                            				
                            			</div>
                            			
                            		</div>

                            		
                            	
                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Số điện thoại</label>
                            			<div class="col-md-8">
                            				<input readonly="" type="number" class="form-control" name="phone" value="<?php echo $user['phone'] ?>">
                            				
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Địa chỉ</label>
                            			<div class="col-md-8">
                            				<input readonly="" type="text" class="form-control" name="address" value="<?php echo $user['address'] ?>">
                            				
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Số tiền thanh toán</label>
                            			<div class="col-md-8">
                            				<input readonly="" type="text" class="form-control" name="total" value="<?php echo number_format($_SESSION['total'])?>">
                            				
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Ghi chú</label>
                            			<div class="col-md-8">
                            				<input  type="text" class="form-control" name="note" value="Giao hàng tận nơi">
                            				
                            			</div>
                            			
                            		</div>
                            	
                            		<button type="submit" class=" btn btn-primary">Xác nhận</button>
                            	</form>	
                        </section>
               
                