        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
               <h3>Judicial Transfer</h3>
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