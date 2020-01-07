<?php 
	$open = $data["open"];
    $EditCategory = $data["EditCategory"];

?>    




    <!-- Page Heading NOI DUNG -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Sửa Danh mục
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li >
                                <i></i> Danh mục
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Sửa danh mục
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="" method="post">
						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh mục</label>
						        <div class="col-sm-8">
						            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên danh mục" name="name" value="<?php echo $EditCategory['name'] ?>">
                                    <div class="clearfix"></div>
                                     <?php if(isset($error["name"])): ?>
                                        <p class="text-danger"><?php echo $error['name']; ?></p>
                                    <?php endif ?>
						           <?php require_once "./partials/notification.php" ?>	
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
           
            