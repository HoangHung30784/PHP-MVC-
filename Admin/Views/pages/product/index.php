<?php 
    $open = $data["open"];

    $p = $data["page"];

    $product = $data["productList"];

    $sotrang = $data["sotrang"];   

    $number = $data["number"];


?>    





    <!-- Page Heading NOI DUNG -->


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Danh sách Sản phẩm
                            <a href="<?php echo base_url()?>/admin/product/addNewProduct" class="btn btn-success">Thêm mới</a>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Bảng điều khiển
                            </li>
                            <li class="active">
                                <i class="fa fa-database"></i> Danh sách sản phẩm
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
                                    <th>Danh mục</th>
                                    <th>Hình ảnh</th>
                                    <th>Thông tin sản phẩm</th>
                                    <th>Giảm giá</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=($p-1)*$number+1; foreach ($product as $item) {
                                    # code...
                                 ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $item["name"] ?></td>
                                    <td><?php echo $item["slug"] ?></td>
                                    <td><?php echo $item["namecate"] ?></td>
                                    <td><img src="<?php echo uploads() ?>product/<?php echo $item['thumbar'] ?>" width="80px" height="80px"></td>
                                    <td>
                                        <ul>
                                            <li>Giá sản phẩm: <?php echo $item['price'] ?></li>
                                            <li>Số lượng: <?php echo $item['soluong'] ?></li>
                                        </ul>
                                    </td>
                                    <td><?php echo $item["sale"] ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="<?php echo base_url()?>/admin/product/editProduct/<?php echo $item["id"]; ?>/<?php echo $p?>"><i class="fa fa-edit"></i>Sửa</a>
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url()?>/admin/product/deleteProduct/<?php echo $item["id"]; ?>"><i class="fa fa-times"></i>Xoá</a>
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
                                        <a href="<?php echo base_url()?>/admin/product/showProductList/<?php echo $i; ?>"><?php echo $i; ?></a>
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

         
            