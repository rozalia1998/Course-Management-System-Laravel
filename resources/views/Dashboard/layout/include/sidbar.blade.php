<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>

<?php


  if (isset($_SERVER['REQUEST_URI'])) {
    $active_page = $_SERVER['REQUEST_URI'];
  }
?>

<ul class="nav nav-list">
    <li ">
        <a href="">
          
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text">Dashboard </span>
            
        </a>

        <b class="arrow"></b>
    </li>
    <li <?php if ($active_page == '/course') { echo ' class="active"';}?>>
        <a href="course" >
          
            <i  class="menu-icon  fa fa-pencil-square-o"></i>
            <span class="menu-text">Courses </span>
            
        </a>

        <b class="arrow"></b>
    </li>
    
    <li <?php if ($active_page == '/soft') { echo ' class="active"';}?>>
        <a href="soft">
          
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

<script>
    $(document).ready(function() {
  $(".menu-link").click(function() {
    // Remove the "active" class from all menu links
    $(".menu-link").removeClass("active");
    
    // Add the "active" class to the clicked menu link
    $(this).addClass("active");
  });
});
</script>
