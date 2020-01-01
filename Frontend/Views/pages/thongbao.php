<section id="slide" class="text-center" >
                            <h3 class="title-main" style="text-align: left;">
                            	<a href="">Thông báo thanh toán</a>
                            </h3>

                            <?php if(isset($_SESSION['success'])): ?>
                            	<div class="alert alert-success">
                            		<strong><?php echo $_SESSION['success']; unset($_SESSION['success'])?></strong> 
                            	</div>
                            <?php endif ?>

                            <a href="index.php"> Trở về trang chủ</a>
</section>