<div class="d-flex align-items-stretch">
<nav id="sidebar">
    <!-- Sidebar Header-->

    <!-- Sidebar Navidation Menus-->
    <ul class="list-unstyled">
        <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>Category </a></li>
    
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Books</a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="{{url('add_book')}}">Add Books</a></li>
            <li><a href="{{url('show_book')}}">Show Books</a></li>
          </ul>
        </li>
        <li><a href="{{url('borrow_request')}}"> <i class="icon-logout"></i>Borrow Request </a></li>
</ul>
</nav>
