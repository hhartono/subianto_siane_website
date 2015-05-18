
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="<?php echo (isset($dashboardactive))? $dashboardactive: '' ;?>" href="/administrator">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

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
                    <li class="<?php echo (isset($categoryaddactive))? $categoryaddactive: '' ;?>"><a href="">Add New Category</a></li>
                    <li class="<?php echo (isset($categoryactive))? $categoryactive: '' ;?>"><a href="">All Category</a></li>
                </ul>
            </li>


            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-envelope"></i>
                    <span>Message</span>
                </a>
                <ul class="sub">
                    <li><a href="messagecenter">Inbox</a></li>
                    <li><a href="">Inbox Details</a></li>
                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->