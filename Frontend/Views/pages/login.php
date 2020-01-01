<?php 
 
$error = $data["error"];
 
 ?>


                    
                        <section id="slide" class="text-center" >
                        	<?php if(isset($_SESSION['success'])): ?>
                            	<div class="alert alert-success">
                            		<strong><?php echo $_SESSION['success']; unset($_SESSION['success'])?></strong> 
                            	</div>
                            <?php endif ?>
                            <?php if(isset($_SESSION['error'])): ?>
                            	<div class="alert alert-danger">
                            		<strong><?php echo $_SESSION['error']; unset($_SESSION['error'])?></strong> 
                            	</div>
                            <?php endif ?>
                            <h3 class="title-main" style="text-align: left;">
                            	<a href="">Đăng nhập</a>
                            </h3>

                            

                            <form action="" method="POST" role="form" class="form-horizontal" style="margin-top: 20px;">
                            		
                            	
                            		
                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Email</label>
                            			<div class="col-md-8">
                            				<input type="email" class="form-control" name="email" placeholder="Nhập email">
                            				<?php  if(isset($error['email'])):?>
	                            				<p class="text-danger"><?php echo $error['email'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>

                            		<div class="form-group">
                            			<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Password</label>
                            			<div class="col-md-8">
                            				<input type="Password" class="form-control" name="password">
                            				<?php  if(isset($error['password'])):?>
	                            				<p class="text-danger"><?php echo $error['password'] ?></p>
	                            			<?php endif ?>
                            			</div>
                            			
                            		</div>
                            	
                            		
                            	
                            		<button type="submit" class=" btn btn-primary">Đăng nhập</button>
                            	</form>	
                        </section>
                        
                   
 
                