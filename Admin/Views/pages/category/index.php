<?php 
    $open = $data["open"];
   
    $category = $data["categoryList"];
    
    $p = $data['page'];

    $sotrang = $data["sotrang"];

    $number = $data["number"];

?>    



    <!-- Page Heading NOI DUNG -->


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Danh mục sản phẩm
                            <a href="<?php echo base_url()?>/admin/category/addNewCategory" class="btn btn-success">Thêm mới</a>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Danh mục
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                        <?php require_once "./partials/notification.php" ?>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Home</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt =($p-1)*$number+1; foreach ($category as $item) {
                                    # code...
                                 ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $item["name"] ?></td>
                                    <td><?php echo $item["slug"] ?></td>
                                    <td>
                                        <a href="<?php echo base_url()?>/admin/category/updateHome/<?php echo $item['id'] ?>/<?php echo $p ?>" class=
                                            "btn btn-xs <?php echo $item['home']==0 ? 'btn-default': 'btn-info' ?>">
                                            <?php echo $item['home']==0 ? "Không" : "Hiển thị" ?>
                                            
                                        </a>
                                    </td>
                                    <td><?php echo $item["created_at"] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?php echo base_url()?>/admin/category/editCategory/<?php echo $item["id"]; ?>"><i class="fa fa-edit"></i>Sửa</a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url()?>/admin/category/deleteCategory/<?php echo $item["id"]; ?>"><i class="fa fa-times"></i>Xoá</a>
                                    </td>
                                </tr>
                                <?php $stt++; } ?>
                            </tbody>
                        </table>

                       <div class="pull-right">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php for($i=1;$i<=$sotrang;$i++): ?>
                                       
                                    <li class="<?php echo ($i==$p) ? 'active' : '' ?>">
                                        <a href="<?php echo base_url()?>/admin/category/showCategoryList/<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                    <?php endfor ?>
                                    <li>    
                                        <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        
                    </div>
                    </div>
                    
                </div>  

