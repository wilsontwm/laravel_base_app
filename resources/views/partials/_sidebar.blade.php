<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Home -->
    <li class = "treeview {{ (Request::is('home') ? 'active' : '') }}">{!! link_to_route_html('home', '<i class="fa fa-home"></i> <span>Home</span>', array()) !!}</li>
    <!-- People -->
    <li class = "treeview {{ (Request::is('users*') ? 'active' : '') }}">{!! link_to_route_html('user.list', '<i class="fa fa-users"></i> <span>People</span>', array()) !!}</li>

</ul>