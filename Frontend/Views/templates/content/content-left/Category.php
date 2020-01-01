<?php
$Category = $data["Category"];
$total_product_byName = $data["total_product_byName"];
?>

<div class="box-left box-menu" >
    <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
    <ul>
        <?php foreach ($Category as $key => $value) { ?> 
        <li>
            <a href="Product/ShowProductByCate/<?php echo $value['id']?>"><?php echo $value['name']; ?>
              <span class="badge pull-right"><?php echo $total_product_byName[$value['name']];?></span></a>
            
        </li>
       <?php } ?>
    </ul>
</div>