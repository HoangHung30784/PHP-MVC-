<?php 
	$open = 'admin';
    require_once __DIR__."/../../autoload/autoload.php";

    /**
    * Danh sách quản trị viên
    */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$data = 
    	[
    		"name" => postInput("name"),
    		"email" => postInput("email"),
            "password" =>postInput("password"),
            "phone" =>postInput("phone"),
            "address" =>postInput("address"),
            "level"=>postInput("level")
    	];

    	$error = [];

    	if(postInput("name") == '')
    	{
    		$error['name'] = "Bạn chưa nhập tên quản trị viên";
    	}

        if(postInput("email") == '')
        {
            $error['email'] = "Bạn chưa nhập email";
        }

        if(postInput("password") == '')
        {
            $error['password'] = "Bạn chưa nhập password";
        }

        if(postInput("address") == '')
        {
            $error['address'] = "Bạn chưa nhập địa chỉ";
        }    
        

         
    	if(empty($error))
    	{
           

                $id_insert = $db->insert("admin",$data);
                if($id_insert>0)
                {
                    $_SESSION["success"] = "Thêm mới thành công";
                    redirectAdmin("admin");
                }
                else
                {
                    $_SESSION["error"] = "Thêm mới thất bại";
                    redirectAdmin("admin");
                }
            
        }
    		
    }
    

?>    





    <!-- Page Heading NOI DUNG -->
<?php require_once __DIR__."/../../layouts/header.php"; ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Thêm mới quản trị viên
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Bảng điều khiển
                            </li>
                            <li >
                                <i></i> Danh sách quản trị viên
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Thêm mới
                            </li>
                        </ol>

                        <div class="clearfix"></div>
                                   <?php require_once __DIR__."/../../../partials/notification.php" ?>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="" method="post" >

                        	
						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Họ và tên</label>
						        <div class="col-sm-8">
						            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên quản trị viên" name="name">
						            <?php if(isset($error["name"])): ?>
                                        <p class="text-danger"><?php echo $error['name']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
						        <div class="col-sm-8">
						            <input type="Email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
						            <?php if(isset($error["email"])): ?>
                                        <p class="text-danger"><?php echo $error['email']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="inputEmail3" placeholder="3" name="phone">
                                    <?php if(isset($error["phone"])): ?>
                                        <p class="text-danger"><?php echo $error['phone']; ?></p>
                                    <?php endif ?>
                                </div>
                            </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
						        <div class="col-sm-3">
						            <input type="Password" class="form-control" id="inputEmail3" placeholder="*******" name="password" >
						            <?php if(isset($error["password"])): ?>
                                        <p class="text-danger"><?php echo $error['password']; ?></p>
                                    <?php endif ?>
						        </div>

						       
						    </div>

						    <div class="form-group row">
						        
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Password Again</label>
						        <div class="col-sm-3">
						            <input type="Password" class="form-control" name="Password Again" required="true">
                                    
						        </div>
						    </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
						        <div class="col-sm-8">
						            <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="address">
						            <?php if(isset($error["address"])): ?>
                                        <p class="text-danger"><?php echo $error['address']; ?></p>
                                    <?php endif ?>
						        </div>
						    </div>

						    <div class="form-group row">
						        <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
						        <div class="col-sm-8">
						           <select class = "form-control" name="level" id="lavel">
						           	<option>-Chọn level-</option>
						           	<option value="1">CTV</option>
						           	<option value="2">Admin</option>
						           </select>
						        </div>
						    </div>
						    						    
						    <div class="form-group row">
						        <div class="col-sm-offset-2 col-sm-8">
						            <button type="submit" class="btn btn-success">Thêm</button>
						        </div>
						    </div>
						</form>
                    </div>
                    
                </div>  

<?php require_once __DIR__."/../../layouts/footer.php" ;?>               
            