<header id="page-topbar">
            <div class="navbar-header">
                <div class="top-bar-sets">
                    <div class="top-bar-setting"><img src="{{asset('assets/images/settings.svg')}}"></div>
                    <div class="top-bar-notification"><img src="{{asset('assets/images/notification.svg')}}">
                        <div class="notify-number">5</div>
                    </div>
                    <!-- <div class="top-bar-avatar"><img src="{{asset('assets/images/avatar.png')}}"></div> -->
                    <div class="btn-group">
                        <div class="top-bar-avatar dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('assets/images/avatar.png')}}"></div>
                        <!-- <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button> -->
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>