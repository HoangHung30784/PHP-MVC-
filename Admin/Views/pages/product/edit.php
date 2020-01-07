<?php 
	$open = $data["open"];

    /**
    * Danh sách danh mục sản phẩm
    */

    $Editproduct = $data["Editproduct"];

    $category = $data["category"];

?>    





    <!-- Page Heading NOI DUNG -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Sửa Sản phẩm
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Bảng điều khiển
                            </li>
                            <li >
                                <i></i> Sửa sản phẩm
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Sửa sản phẩm
                            </li>
                        </ol>

                        <div class="clearfix"></div>
                                   <?php require_once "./partials/notification.php" ?>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                        	<div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Danh mục Sản phẩm</label>
						        <div class="col-sm-8">
						            <select class="form-control col-md-8" name="category_id">
						            	<option value="">-Chọn danh mục sản phẩm-</option>
						            	<?php foreach ($category as $item) {
						            		# code...
						            	 ?>

						            	 <option value="<?php echo $item['id'] ?>" <?php echo $Editproduct['category_id']==$item['id']? "selected = 'selected'":''; ?>><?php echo $item['name'] ?></option>
						            	<?php } ?>
						            </select>
						            <?php if(isset($error["category_id"])): ?>
                                        <p class="text-danger"><?php echo $error['category_id']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên Sản phẩm</label>
						        <div class="col-sm-8">
						            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên sản phẩm" name="name" value="<?php echo $Editproduct['name'] ?>">
						            <?php if(isset($error["name"])): ?>
                                        <p class="text-danger"><?php echo $error['name']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Giá Sản phẩm</label>
						        <div class="col-sm-8">
						            <input type="number" class="form-control" id="inputEmail3" placeholder="9.000.000đ" name="price" value="<?php echo $Editproduct['price'] ?>">
						            <?php if(isset($error["price"])): ?>
                                        <p class="text-danger"><?php echo $error['price']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Số lượng sản phẩm</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="inputEmail3" placeholder="3" name="soluong" value="<?php echo $Editproduct['soluong'] ?>">
                                    <?php if(isset($error["soluong"])): ?>
                                        <p class="text-danger"><?php echo $error['soluong']; ?></p>
                                    <?php endif ?>
                                </div>
                            </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Giảm giá</label>
						        <div class="col-sm-3">
						            <input type="number" class="form-control" id="inputEmail3" placeholder="10%" name="sale" value="<?php echo $Editproduct['sale'] ?>">
						        </div>

						        <label for="inputEmail3" class="col-sm-2 col-form-label">Hình ảnh</label>
						        <div class="col-sm-3">
						            <input type="file" class="form-control" id="thumbar" name="thumbar">
						            <div style="margin-top: 10px;">
						            <img src="<?php echo uploads() ?>/product/<?php echo $Editproduct['thumbar']; ?>" width=50px; height=50px;>
						            </div>
                                    <?php if(isset($error["thumbar"])): ?>
                                        <p class="text-danger"><?php echo $error['thumbar']; ?></p>
                                    <?php endif ?>
						        </div>

						    </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Nội dung</label>
						        <div class="col-sm-8">
						           <textarea class="form-control" name="content" rows="4">
						           	<?php echo $Editproduct['content'] ?>
						           </textarea>
						            <?php if(isset($error["content"])): ?>
                                        <p class="text-danger"><?php echo $error['content']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>
						    						    
						    <div class="form-group row">
						        <div class="col-sm-offset-2 col-sm-8">
						            <button type="submit" class="btn btn-success">Lưu</button>
						        </div>
						    </div>
						</form>
                    </div>
                    
                </div>  
        
            