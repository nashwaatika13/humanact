<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" style="background-color: white">
                <a href="#">
                    <img src="{{asset('admin/images//icon/freedom.jpeg')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="{{ route ('home')}}">
                                <i class=""></i>Dashboard</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list"></ul>
                        </li>
                        <li>
                                <a href="{{ route ('contacts.index')}}">
                                    <i class=""></i>Tasks Detail</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>