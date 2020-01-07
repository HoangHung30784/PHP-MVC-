<?php 
    $open = $data["open"];

$admin = $data["adminList"];
$p = $data['page'];
$sotrang = $data["sotrang"];
$number = $data["number"];


    


?>    



                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Danh sách quản trị viên
                            
                        </h1>
                       
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
                                    <th>Tên thành viên</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Địa chỉ</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=($p-1)*$number+1; foreach ($admin as $item) {
                                    # code...
                                 ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $item["name"] ?></td>
                                    <td><?php echo $item["email"] ?></td>
                                    <td><?php echo $item["phone"] ?></td>
                                    
                                    <td><?php echo $item["address"] ?></td>
                                    <td>
                                        
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url()?>/admin/admin/deleteAdmin/<?php echo $item["id"]; ?>"><i class="fa fa-times"></i>Xoá</a>
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
                                        <a href="<?php echo base_url()?>/admin/admin/showAdminList/<?php echo $i; ?>"><?php echo $i; ?></a>
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

         
            