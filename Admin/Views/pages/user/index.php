<?php 

$open = $data["open"];

$users = $data["userList"];

$sotrang = $data["sotrang"];

$p = $data["page"];

$number = $data["number"];

?>    





    <!-- Page Heading NOI DUNG -->


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Danh sách thành viên
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Bảng điều khiển
                            </li>
                            <li class="active">
                                <i class="fa fa-database"></i> Danh sách thành viên
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
                                    <th>Tên thành viên</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Địa chỉ</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=($p-1)*$number+1; foreach ($users as $item) {
                                    # code...
                                 ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $item["name"] ?></td>
                                    <td><?php echo $item["email"] ?></td>
                                    <td><?php echo $item["phone"] ?></td>
                                    
                                    <td><?php echo $item["address"] ?></td>
                                    <td>
                                        
                                        <a class="btn btn-xs btn-danger" href="<?php echo base_url()?>/admin/user/deleteUser/<?php echo $item["id"]; ?>/<?php echo $p ?>"><i class="fa fa-times"></i>Xoá</a>
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
                                        <a href="<?php echo base_url() ?>/admin/User/showUserList/<?php echo $i; ?>"><?php echo $i; ?></a>
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

     
            