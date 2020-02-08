<section id="ft-bottom">
                    <p class="text-center">Copyright © 2020 . Design by  Hoàng Hùng !!! </p>
                </section>
            </div>
            </div>      
    </div>
            </div>      
        </div>
    <script  src="<?php echo __PUBLICS ?>/js/slick.min.js"></script>

    </body>

    <script type="text/javascript">
        $(function() {
            $hidenitem = $(".hidenitem");
            $itemproduct = $(".item-product");
            $itemproduct.hover(function(){
                $(this).children(".hidenitem").show(100);
            },function(){
                $hidenitem.hide(500);
            })
        });




        $(function(){
            $updatecart = $(".updatecart");
            $updatecart.click(function(e){

                e.preventDefault();
                $qty = $(this).parents("tr").find("#qty").val();

                $key = $(this).attr("data-key");
               
                //alert($qty);
               // location.href='http://hoc-php.local/PHP-MVC-02/Cart/updateCart/'+$key+'/'+$qty;
                
                $.ajax({
                    url: 'http://hoc-php.local/PHP-MVC-02/Cart/updatecart',
                    type:'POST',
                    data: {'qty':$qty, 'key':$key},
                    success:function(data)
                    {
                        if(data == 1)
                        {
                            alert("Cập nhật thành công");
                            location.href='http://hoc-php.local/PHP-MVC-02/Cart/showCart';
                        }
                    }
                });        
                
            });

        });
    </script>
        
</html>

