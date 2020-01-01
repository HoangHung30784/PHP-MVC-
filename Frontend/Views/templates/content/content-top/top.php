 <!--HEADER-->
            <div id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-6" id="header-text">
                                <a>Hoàng Hùng</a><b>I can do it! </b>
                            </div>
                            <div class="col-md-6">
                                <nav id="header-nav-top">
                                    <ul class="list-inline pull-right" id="headermenu">
                                        <?php if(isset($_SESSION['name_user'])): ?>
                                            <li style="color: red;">Xin chào <?php echo $_SESSION['name_user']; ?></li>
                                            <li>
                                            <a href=""><i class="fa fa-user"></i> Tài khoản <i class="fa fa-caret-down"></i></a>
                                            <ul id="header-submenu">
                                                <li><a href="">Thông tin</a></li>
                                                <li><a href="Cart/showCart">Giỏ hàng</a></li>
                                                <li><a href="User/logOut"><i class="fa fa-share-square-o"></i>Thoát</a></li>
                                            </ul>
                                        </li>
                                           <?php else: ?>
                                                <li>
                                                    <a href="User/login"><i class="fa fa-unlock"></i> Đăng nhập</a>
                                                </li>
                                                <li>
                                                    <a href="User/dangki"><i class="fa fa-unlock"></i> Đăng kí</a>
                                                </li>
                                            <?php endif ?>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="header-main">
                        <div class="col-md-5">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label>
                                        <select name="category" class="form-control">
                                            <option> All Category</option>
                                            <option> Dell </option>
                                            <option> Hp </option>
                                            <option> Asuc </option>
                                            <option> Apper </option>
                                        </select>
                                    </label>
                                    <input type="text" name="keywork" placeholder=" input keywork" class="form-control">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="./Frontend/publics/images/logo-default.png">
                            </a>
                        </div>
                        <div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0985310919</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HEADER-->