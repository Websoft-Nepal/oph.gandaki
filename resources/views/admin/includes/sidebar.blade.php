<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ route('admin_dashboard') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('slider.index') }}" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">{{ __('Silder') }}</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('leaders.index') }}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Leader</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('staff.index') }}" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Staff</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('newscategory.index') }}" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">News Category</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('news.index') }}" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu">News</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('gallery.index') }}" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu">Gallery</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('reports.index') }}" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu">Report</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('chiefmsg.index') }}" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu">Chief Message</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                </li>
            </ul>
            <div class="text-center m-t-30">
                <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn-info hidden-md-down"> Logout</a>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>