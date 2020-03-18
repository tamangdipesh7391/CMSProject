<!-- <header class="header-desktop desktop-view">
      <a href="<?=base_url('logout.php');?>" style="float: right;margin-top: 10px;
    margin-right: 12px;"> <button class="btn btn-warning btn-lg" >Logout</button></a>
    </header> -->

            <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
               <h3>Free <span>Paid</span></h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="<?=base_url('index.php');?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <!-- <li>
                                    <a href="login.php">Login</a>
                                </li> -->
                                <li>
                                    <a href="<?=base_url('f-members.php');?>">Create Group</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('transfer.php');?>">Transfer Member</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

         <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
               
            </header>
        </div>