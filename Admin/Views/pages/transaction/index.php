<?php 
    $open = $data["open"];
    $p = $data["page"];
    $transaction = $data["transactionList"];
    $sotrang = $data["sotrang"];
    $number = $data["number"];

?>    





    <!-- Page Heading NOI DUNG -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                                Danh sách đơn hàng
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Bảng điều khiển
                            </li>
                            <li class="active">
                                <i class="fa fa-database"></i> Danh sách đơn hàng
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
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th> Trạng thái</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $stt=($p-1)*$number+1; foreach ($transaction as $item) {
                                    # code...
                                 ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><?php echo $item["nameuser"] ?></td>
                                    <td><?php echo $item["phoneuser"] ?></td>
                                    <td>
                                        <a href="<?php echo base_url()?>/admin/transaction/editTransactionStatus/<?php echo $item['id'] ?>/<?php echo $p?>" class="btn btn-xs <?php echo $item["status"]==0 ? 'btn-danger' : 'btn-success' ?>"><?php echo $item["status"]==0 ? 'Chưa xử lý' : 'Đã xử lý' ?></a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url()?>/admin/transaction/deleteTransaction/<?php echo $item['id'] ?>" class="btn btn-xs btn-danger">Xoá</a>
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
                                        <a href="<?php echo base_url()?>/admin/Transaction/showTransactionList/<?php echo $i; ?>"><?php echo $i; ?></a>
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

