<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('adminHome') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#subjects-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Subjects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('subject.index') }}">
              <i class="bi bi-circle"></i><span>Subjects</span>
            </a>
          </li>
          <li>
            <a href="{{ route('subject.add') }}">
              <i class="bi bi-circle"></i><span>Add Subjects</span>
            </a>
          </li>
        </ul>
      </li><!-- End Subject Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sub-subjects-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sub Subjects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sub-subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('sub-subject.index') }}">
              <i class="bi bi-circle"></i><span>All Sub-Subjects</span>
            </a>
          </li>
          <li>
            <a href="{{ route('sub-subject.add') }}">
              <i class="bi bi-circle"></i><span>Add Sub-Subjects</span>
            </a>
          </li>
        </ul>
      </li><!-- End Sub-Subject Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#book-type-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Book Type</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="book-type-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('book-type.index') }}">
              <i class="bi bi-circle"></i><span>Book Types</span>
            </a>
          </li>
          <li>
            <a href="{{ route('book-type.add') }}">
              <i class="bi bi-circle"></i><span>Add Book Type</span>
            </a>
          </li>
        </ul>
      </li><!-- End BookType Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#publication-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Publication</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="publication-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('publication.index') }}">
              <i class="bi bi-circle"></i><span>Publications</span>
            </a>
          </li>
          <li>
            <a href="{{ route('publication.add') }}">
              <i class="bi bi-circle"></i><span>Add Publications</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#author-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Author</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="author-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('author.index') }}">
              <i class="bi bi-circle"></i><span>Authors</span>
            </a>
          </li>
          <li>
            <a href="{{ route('author.add') }}">
              <i class="bi bi-circle"></i><span>Add Author</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#book-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Book</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="book-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('book.index') }}">
              <i class="bi bi-circle"></i><span>All Books</span>
            </a>
          </li>
          <li>
            <a href="{{ route('book.add') }}">
              <i class="bi bi-circle"></i><span>Add Book</span>
            </a>
          </li>
        </ul>
      </li><!-- End book Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('user.index') }}">
              <i class="bi bi-circle"></i><span>All Users</span>
            </a>
          </li>
          <li>
            <a href="{{ route('user.add') }}">
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
          </li>
        </ul>
      </li><!-- End user Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Order Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="order-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Admin.order.index') }}">
              <i class="bi bi-circle"></i><span>All Orders</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Deleveri Charge</span>
            </a>
          </li>
        </ul>
      </li><!-- End user Nav -->
     
    </ul>

  </aside><!-- End Sidebar-->