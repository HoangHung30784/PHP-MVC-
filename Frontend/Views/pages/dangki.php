<?php 
$info = $data["info"];
$error = $data["error"];

 ?>


                 
                        <section id="slide" class="text-center" >
                            <h3 class="title-main" style="text-align: left;">
                            	<a href="">Đăng ký thành viên</a>
                            </h3>
                            <form action="" method="POST" role="form" class="form-horizontal" style="margin-top: 20px;">
                            		
                            	
                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Tên thành viên</label>
                            			<div class="col-md-8">
                            				<input type="text" class="form-control" name="name" placeholder="Nhập tên thành viên" value="<?php echo $info['name'] ?>">
                            				<?php  if(isset($error['name'])):?>
	                            				<p class="text-danger"><?php echo $error['name'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Email</label>
                            			<div class="col-md-8">
                            				<input type="email" class="form-control" name="email" placeholder="Nhập email" value="<?php echo $info['email'] ?>">
                            				<?php  if(isset($error['email'])):?>
	                            				<p class="text-danger"><?php echo $error['email'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Password</label>
                            			<div class="col-md-8">
                            				<input type="Password" class="form-control" name="password" >
                            				<?php  if(isset($error['password'])):?>
	                            				<p class="text-danger"><?php echo $error['password'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>
                            	
                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Số điện thoại</label>
                            			<div class="col-md-8">
                            				<input type="number" class="form-control" name="phone" value="<?php echo $info['phone'] ?>">
                            				<?php  if(isset($error['phone'])):?>
	                            				<p class="text-danger"><?php echo $error['phone'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Địa chỉ</label>
                            			<div class="col-md-8">
                            				<input type="text" class="form-control" name="address" value="<?php echo $info['address'] ?>">
                            				<?php  if(isset($error['address'])):?>
	                            				<p class="text-danger"><?php echo $error['address'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>
                            	
                            		<button type="submit" class=" btn btn-primary">Đăng ký</button>
                            	</form>	
                        </section>
                        
                   