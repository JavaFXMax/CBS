 <nav class="navbar-default navbar-static-side" role="navigation" id="wrap">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-group"></i>Members <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav" id="side-menu">
                     <li>
                            <a href="{{ URL::to('members/create') }}">
                                <i class="fa fa-plus"></i> 
                                New Member
                            </a>
                        </li>        
                       <li>
                            <a href="{{ URL::to('portal') }}"><i class="fa fa-group"></i>
                                Members
                            </a>
                        </li>                                                    
                    </ul>                 
            </li>                       
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tags"></i>Loans <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ URL::to('matrices') }}">
                            <i class="fa fa-gavel"></i> 
                            Guarantor Matrix
                        </a>
                    </li> 
                    <li>
                        <a href="{{ URL::to('disbursements') }}">
                            <i class="fa fa-random"></i> 
                            Disbursement Options
                        </a>
                    </li>                    
                    <li>
                        <a href="{{ URL::to('loans') }}"><i class="glyphicon glyphicon-pencil fa-fw"></i> Loan Applications</a>
                    </li>                    
                    <li>
                        <a href="{{ URL::to('loanproducts') }}"><i class="glyphicon glyphicon-tags fa-fw"></i> Loan Products</a>
                    </li>  
                    </ul>                 
            </li>
            <li>
                <a href="{{ URL::to('savingproducts') }}"><i class="fa fa-random"></i>
                  Saving Products
                </a>
            </li>            
            <li>
                <a href="{{ URL::to('shares/show/1') }}"><i class="fa fa-suitcase"></i>
                  Manage Shares
                </a>
            </li> 
            <li>
               <a href="{{ URL::to('monthlyremittances/show/1') }}">
               <i class="fa fa-pie-chart"></i>
                 Monthly Remittance
               </a>
            </li>
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-sliders"></i>Vendors <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ URL::to('vendors/create') }}">
                                <i class="fa fa-plus"></i> 
                                New Vendor
                            </a>
                        </li> 
                        <li>
                            <a href="{{ URL::to('vendors') }}"><i class="fa fa-sliders"></i>
                                Vendors
                            </a>
                        </li> 
                    </ul>                 
            </li>                                       
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-briefcase fa-fw"></i>Investments <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ URL::to('investmentscats') }}"><i class="fa fa-plus"></i>
                                New Category
                            </a>
                        </li>                            
                        <li>
                            <a href="{{ URL::to('saccoinvestments') }}"><i class="fa fa-pencil"></i>
                                Investments
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('projects') }}"><i class="fa fa-paw"></i>
                                Projects
                            </a>
                        </li>                            
                        <li>
                            <a href="{{ URL::to('projects/orders/show') }}"><i class="fa fa-pie-chart"></i>
                                Project Orders
                            </a>
                        </li>    
                    </ul>                 
            </li>                                    
            <li>
                <a href="{{ URL::to('products') }}"><i class="fa fa-shopping-basket"></i>
                    Products
                </a>
            </li>
            <li>
                <a href="{{ URL::to('orders') }}"><i class="fa fa-archive"></i>
                    Orders
                </a>
            </li>
            <li>
                <a  href="{{ URL::to('reports')}}">
                    <i class="fa fa-file fa-fw"></i>
                      {{{ Lang::get('messages.nav.reports') }}}
                </a>    
            </li> 
            <li>
                <a  href="{{ URL::to('transaudits')}}">
                    <i class="fa fa-gears"></i>
                      Transactions
                </a>    
            </li> 
       </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->