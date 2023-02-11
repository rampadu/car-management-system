 @php
     $prefix = Request::route()->getprefix();
     $route = Route::current()->getName();
 @endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>CRM</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">   
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href="{{route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} ">
          <a href="#">
            <i data-feather="users"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
		  
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}" >
          <a href="#">
            <i data-feather="grid"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.view')}}"><i class="ti-more"></i>Your Profile</a></li>
            <li><a href="{{ route('password.view')}}"><i class="ti-more"></i>Change Password </a></li>
            
          </ul>
        </li>
		   
        <li class="treeview {{ ($prefix == '/setups')?'active':'' }}" >
          <a href="#">
            <i data-feather="credit-card"></i> <span>Setup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('car.class.view')}}"><i class="ti-more"></i>Car Class</a></li>
            <li><a href="{{ route('car.year.view')}}"><i class="ti-more"></i>Car Year Model</a></li>
            <li><a href="{{ route('car.year.view')}}"><i class="ti-more"></i>Car Models</a></li>
            <li><a href="{{ route('car.year.view')}}"><i class="ti-more"></i>Car Brand List</a></li>
            <li><a href="{{ route('car.year.view')}}"><i class="ti-more"></i>Car Type </a></li>
            <li><a href="{{ route('car.year.view')}}"><i class="ti-more"></i>Car Specification</a></li>
            <li><a href="{{ route('fee.category.view')}}"><i class="ti-more"></i>Fee Category</a></li>
            <li><a href="{{ route('fee.amount.view')}}"><i class="ti-more"></i>Fee Category Amount</a></li>
            
            
          </ul>
        </li>

        <li class="treeview" >
          <a href="#">
            <i data-feather="hard-drive"></i> <span>Car Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Car Listing</a></li>
            <li><a href="#><i class="ti-more"></i>Fee Category</a></li>
            <li><a href="#"><i class="ti-more"></i>Fee Category Amount</a></li>
          </ul>
        </li>


        <li class="treeview" >
              <a href="#">
                <i data-feather="package"></i> <span>Employee Management</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="ti-more"></i>Employee Registration</a></li>
                <li><a href="#"><i class="ti-more"></i>Employee Salary</a></li>
                <li><a href="#"><i class="ti-more"></i>Employee Leave</a></li>
                <li><a href="#"><i class="ti-more"></i>Employee Attendance</a></li>
                <li><a href="#"><i class="ti-more"></i>Employee Monthly Salary</a></li>            
          </ul>
        </li>


        <li class="treeview" >
          <a href="#">
            <i data-feather="pie-chart"></i> <span>Accounts Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Registration Fee</a></li>
            <li><a href="#"><i class="ti-more"></i>Employee Salary</a></li>
            <li><a href="#"><i class="ti-more"></i>Other Cost</a></li> 
         </ul>
        </li>

		 
        <li class="header nav-small-cap">Report Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Reports Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Rental Transaction </a></li>
            <li><a href="components_alerts.html"><i class="ti-more"></i>Monthly-Yearly Profit </a></li>
            
          </ul>
        </li>
		
		
		  
		 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>