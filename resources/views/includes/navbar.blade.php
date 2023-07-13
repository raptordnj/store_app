<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}" data-toggle="tooltip" data-original-title="{{ setting('company_name') }}">
                @if (setting('company_logo'))
                <img alt="{{ setting('company_name') }}"
                    height="45"
                    class="navbar-brand-img"
                    src="{{ asset(setting('company_logo')) }}">
                @else
                {{ substr(setting('company_name'), 0, 15) }}...
                @endif
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}" href="{{route('home')}}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
{{--                     @can('update-settings')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('settings*')) ? 'active' : '' }}" href="{{route('settings.index')}}">
                                <i class="ni ni-settings-gear-65 text-primary"></i>
                                <span class="nav-link-text">Manage Settings</span>
                            </a>
                        </li>
                    @endcan --}}

                    <!-- Super Admin -->

                    @canany(['create-permission', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Super Admin</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('create-permission')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Sub-Admin Add</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Pending</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Sub-Admin</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add Capital</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Total Capital</span></a>
                                    </li>
                                    @endcan
{{--                                     @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                    </li>
                                    @endcan --}}
                                </ul>
                            </div>
                        </li>

                    @endcan

                    
                    @canany(['create-permission', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Investors</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('create-permission')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Pending</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Investors</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Withdraw Request</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Withdraw History</span></a>
                                    </li>
                                    @endcan
{{--                                     @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                    </li>
                                    @endcan --}}
                                </ul>
                            </div>
                        </li>

                    @endcan


                                       
                    @canany(['create-permission', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Investors</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('create-permission')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Pending</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Investors</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Withdraw Request</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Withdraw History</span></a>
                                    </li>
                                    @endcan
{{--                                     @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                    </li>
                                    @endcan --}}
                                </ul>
                            </div>
                        </li>

                    @endcan

                                                          
                    @canany(['create-permission', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Affliate</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('create-permission')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Pending</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Affliate</span></a>
                                    </li>
                                  
                                    @endcan
{{--                                     @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                    </li>
                                    @endcan --}}
                                </ul>
                            </div>
                        </li>

                    @endcan

                                                                             
                    @canany(['create-permission', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Service</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('create-permission')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Pending</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Service</span></a>
                                    </li>
                                  
                                    @endcan
{{--                                     @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                    </li>
                                    @endcan --}}
                                </ul>
                            </div>
                        </li>

                    @endcan 

                    @canany(['create-permission', 'create-category'])
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                            <i class="fas text-primary fa-list-alt"></i>
                            <span class="nav-link-text">SMS</span>
                        </a>
                        <div class="collapse" id="navbar-category">
                            <ul class="nav nav-sm flex-column">
                             @can('create-permission')
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">SMS Sent</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">SMS Payment Requests</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All History</span></a>
                                </li>
                              
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Total Balance</span></a>
                                </li>
                              
                              
                                @endcan
{{--                                     @can( 'create-category')
                                <li class="nav-item">
                                    <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                </li>
                                @endcan --}}
                            </ul>
                        </div>
                    </li>

                @endcan

                
                @canany(['create-permission', 'create-category'])
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                        <i class="fas text-primary fa-list-alt"></i>
                        <span class="nav-link-text">Payment</span>
                    </a>
                    <div class="collapse" id="navbar-category">
                        <ul class="nav nav-sm flex-column">
                         @can('create-permission')
                            <li class="nav-item">
                                <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Pending</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All History</span></a>
                            </li>
                          
                 
                          
                            @endcan
{{--                                     @can( 'create-category')
                            <li class="nav-item">
                                <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                            </li>
                            @endcan --}}
                        </ul>
                    </div>
                </li>

            @endcan


                            
            @canany(['create-permission', 'create-category'])
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                    <i class="fas text-primary fa-list-alt"></i>
                    <span class="nav-link-text">Accounts</span>
                </a>
                <div class="collapse" id="navbar-category">
                    <ul class="nav nav-sm flex-column">
                     @can('create-permission')
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Create Income</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Income</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Income Category</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Create Expense</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Expenses</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Expense Category</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Report</span></a>
                        </li>
                      
             
                      
                        @endcan
{{--                                     @can( 'create-category')
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                        </li>
                        @endcan --}}
                    </ul>
                </div>
            </li>

        @endcan


                                  
        @canany(['create-permission', 'create-category'])
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                <i class="fas text-primary fa-list-alt"></i>
                <span class="nav-link-text">Settings</span>
            </a>
            <div class="collapse" id="navbar-category">
                <ul class="nav nav-sm flex-column">
                 @can('create-permission')
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">System Setting</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">SMS</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Show Room Rent Fee</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Show Room Register Fee</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Affliate Fee</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Payment Gateway</span></a>
                    </li>


                  
         
                  
                    @endcan

                </ul>
            </div>
        </li>

    @endcan

                        <!-- Super Admin End -->


                        <!-- Owner Start -->
                              
                        @canany(['owner-permission', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Product</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Purchase</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Supplier</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Sales</span>
                            </a>
                        </li> 
   
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Accounts</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('owner-permission')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Create Income</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Income</span></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Income Category</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Create Expense</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Expenses</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Expense Category</span></a>
                                    </li>
                
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Report</span></a>
                                    </li>
                
                
                                  
                         
                                  
                                    @endcan
                
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Report</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">User</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Employee</span>
                            </a>
                        </li> 

                        
                        <li class="nav-item">
                            <a class="nav-link active active-pro" href="javascript:void(0)">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Show Room Profile</span>
                            </a>
                        </li> 
                
                    @endcan
                
                        <!-- Owner End -->



    








    <li class="nav-item">
        <a class="nav-link active active-pro" href="javascript:void(0)">
            <i class="ni ni-send text-primary"></i>
            <span class="nav-link-text">Profile</span>
        </a>
    </li> 






                  {{--   @canany(['view-post', 'create-post'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('post*')) ? 'active' : '' }}" href="#navbar-post"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-post">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Posts</span>
                            </a>
                            <div class="collapse" id="navbar-post">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-post')
                                    <li class="nav-item">
                                        <a href="{{route('post.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Posts</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-post')
                                    <li class="nav-item">
                                        <a href="{{route('post.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Post</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan --}}
                    @canany(['view-user', 'create-user'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('users*')) ? 'active' : '' }}" href="#navbar-users"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-users">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Users</span>
                            </a>
                            <div class="collapse" id="navbar-users">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-user')
                                    <li class="nav-item">
                                        <a href="{{route('users.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Users</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('users.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New User</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan

                    @canany(['view-permission', 'create-permission'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('permissions*')) ? 'active' : '' }}" href="{{route('permissions.index')}}">
                                <i class="fas fa-lock-open text-primary"></i>
                                <span class="nav-link-text">Manage Permissions</span>
                            </a>
                        </li>
                    @endcan
                    @canany(['view-role', 'create-role'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('roles*')) ? 'active' : '' }}" href="{{route('roles.index')}}">
                                <i class="fas fa-lock text-primary"></i>
                                <span class="nav-link-text">Manage Roles</span>
                            </a>
                        </li>
                    @endcan


{{-- 
                    @canany(['media'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('media*')) ? 'active' : '' }}" href="{{route('media.index')}}">
                                <i class="fas fa-images text-primary"></i>
                                <span class="nav-link-text">Manage Media</span>
                            </a>
                        </li>
                    @endcan --}}
{{--                     @canany(['view-activity-log'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('activity-log*')) ? 'active' : '' }}" href="{{route('activity-log.index')}}">
                                <i class="fas fa-history text-primary"></i>
                                <span class="nav-link-text">Activity Log</span>
                            </a>
                        </li>
                    @endcan --}}
{{--                     <li class="nav-item">
                        <hr class="my-3">
                    </li>
                    <li class="nav-item">
                            <a class="nav-link active active-pro" href="{{route('components')}}">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Components</span>
                            </a>
                        </li> --}}
                </ul>
            </div>
        </div>
    </div>
</nav>
