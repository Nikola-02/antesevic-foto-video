<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <h1 class="text-2xl">Admin panel</h1>
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{asset('assets/images') ."/". auth()->user()->image}}" alt="" width="35" height="35"
                            class="profile-img"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                         aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="javascript:void(0)"
                               class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-user fs-6"></i>
                                <p class="mb-0 fs-3">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</p>
                            </a>
                            <a href="javascript:void(0)"
                               class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-badge fs-6"></i>
                                <p class="mb-0 fs-3">{{ucfirst(auth()->user()->role->name)}}</p>
                            </a>
                            <a href="/"
                               class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>