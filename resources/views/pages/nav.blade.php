@user
    <div class="col-12 vh-100 sidebar my-2">
        <div class="main-menu">
            <div class="nav-menu">
                <ul>

                    <li class="menu-item">
                        <a href="{{ route('dashboard.home') }}" class="menu-item-link">
                            <span>
                                <i class="bi bi-house-fill"></i>
                                Home
                            </span>
                        </a>
                    </li>

                    {{--                <li class="menu-spacer"></li> --}}
                </ul>
            </div>
            <div class="nav-menu">
                <ul>
                    <li class="menu-title">
                        <span>Manage Items</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('item.create') }}" class="menu-item-link">
                            <span>
                                <i class="bi bi-box2-fill"></i>
                                Create Items
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('item.index') }}" class="menu-item-link">
                            <span>
                                <i class="bi bi-list"></i>
                                Item Lists
                            </span>
                            <span class="badge badge-pill bg-white text-primary shadow-sm p-1">
                            </span>
                        </a>

                    <li class="menu-title">
                        <span>Manage Category</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('category.create') }}" class="menu-item-link">
                            <span>
                                <i class="bi bi-bag-fill"></i>
                                Create Category
                            </span>
                            {{--                        <span class="badge badge-pill bg-white text-primary shadow-sm p-1"> --}}
                            {{--                            --}}
                            {{--                        </span> --}}
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('category.index') }}" class="menu-item-link">
                            <span>
                                <i class="bi bi-list"></i>
                                Category Lists
                            </span>
                            {{--                        <span class="badge badge-pill bg-white text-primary shadow-sm p-1"> --}}

                            {{--                        </span> --}}
                        </a>
                    </li>

                    <li class="menu-spacer"></li>
                    <li class="menu-item">
                        <form action="{{ route('auth.logout') }}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-danger w-100">
                                <span>
                                    <i class="bi bi-lock-fill"></i>
                                    Log Out
                                </span>
                            </button>
                        </form>
                    </li>

                </ul>
            </div>
        @enduser
    </div>
</div>
