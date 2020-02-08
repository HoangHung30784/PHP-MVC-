<?php
$Category = $data["Category"];
?>

<div class="box-left box-menu" >
    <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
    <ul>
        <?php foreach ($Category as $key => $value) { ?> 
        <li>
            <a href="<?php echo base_url ?>/Product/ShowProductByCate/<?php echo $value[0]['category_id']?>"><?php echo $key; ?>
              <span class="badge pull-right"><?php echo count($value);?></span></a>
            
        </li>
       <?php } ?>
    </ul>
</div>