<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>


<ul class="nav nav-list">
    <li class="{{ (Request::route()->getName() == 'dash.index') ? 'active' : '' }}">
        <a href="{{ route('admin.index') }}">

            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text">Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>
     <li class="{{ (Request::route()->getName() == 'users.index') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}">

            <i class="menu-icon fa fa-tag"></i>
            <span class="menu-text">Users </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="{{ (Request::route()->getName() == 'users.soft') ? 'active' : '' }}">
        <a href="{{ route('users.soft') }}">

            <i  class="menu-icon   fa fa-trash-o"></i>
          <span class="menu-text active" >Trash </span>

        </a>

        <b class="arrow"></b>
    </li>

</ul><!-- /.nav-list -->

<!-- #section:basics/sidebar.layout.minimize -->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<!-- /section:basics/sidebar.layout.minimize -->
<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>
