
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <!-- <li>
                <a class="<?php echo (isset($dashboardactive))? $dashboardactive: '' ;?>" href="/administrator">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li> -->

            <li class="sub-menu">
                <a href="javascript:;" class="<?php echo (isset($projectactive) || isset($projectaddactive))? 'active' : '' ;?>">
                    <i class="fa fa-book"></i>
                    <span>Projects</span>
                </a>
                <ul class="sub">
                    <li class="<?php echo (isset($projectaddactive))? $projectaddactive : '' ;?>"><a href="/administrator/projectadd">Add New Project</a></li>
                    <li class="<?php echo (isset($projectactive))? $projectactive : '' ;?>"><a href="/administrator/project">All Projects</a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;"  class="<?php echo (isset($categoryactive) || isset($categoryaddactive))? 'active' : '' ;?>">
                    <i class="fa fa-tags"></i>
                    <span>Category</span>
                </a>
                <ul class="sub">
                    <li class="<?php echo (isset($categoryaddactive))? $categoryaddactive: '' ;?>"><a href="/administrator/categoryadd">Add New Category</a></li>
                    <li class="<?php echo (isset($categoryactive))? $categoryactive: '' ;?>"><a href="/administrator/category">All Category</a></li>
                </ul>
            </li>

            <li>
                <a class="<?php echo (isset($aboutactive))? $aboutactive: '' ;?>" href="/administrator/about">
                    <i class="fa fa-user"></i>
                    <span>About</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="<?php echo (isset($randomactive))? 'active' : '' ;?>" >
                    <i class=" fa fa-picture-o"></i>
                    <span>Photo</span>
                </a>
                <ul class="sub">
                    <li class="<?php echo (isset($randomactive))? $randomactive : '' ;?>"><a href="/administrator/randomsidebar">Random Sidebar</a></li>
                    
                </ul>
            </li>

            <li class="sub-menu">
                <a class="<?php echo (isset($photohomeactive))? 'active' : '' ;?>" href="/administrator/photohome">
                    <i class=" fa fa-picture-o"></i>
                    <span>Photo Home</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="<?php echo (isset($messageactive))? 'active' : '' ;?>" >
                    <i class=" fa fa-envelope"></i>
                    <span>Message</span>
                </a>
                <ul class="sub">
                    <li class="<?php echo (isset($messageactive))? $messageactive : '' ;?>"><a href="/administrator/messagecenter">Inbox</a></li>
                    <!-- <li><a href="">Inbox Details</a></li> -->
                </ul>
            </li>
                
            

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->