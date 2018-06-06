<a class="nav-link dropdown-toggle link" data-toggle="dropdown">
    <span>{{ currentUserName() }}</span>
    <img src="{{ asset('plugins/template/img/users/admin-image.png') }}" alt="image" />
</a>
<div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
    <div class="dropdown-arrow"></div>
    <div class="dropdown-header">
        <div class="admin-avatar">
            <img src="{{ asset('plugins/template/img/users/admin-image.png') }}" alt="image" />
        </div>
        <div>
            <h5 class="font-strong text-white">{{ currentUserName() }}</h5>
            <div>
                <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
            </div>
        </div>
    </div>
    <div class="admin-menu-features">
        <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
            <span>PROFILE</span>
        </a>
        <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
            <span>SUPPORT</span>
        </a>
        <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
            <span>SETTINGS</span>
        </a>
    </div>
    <div class="admin-menu-content">
        <form method="POST" action="{{ route('logout') }}" >
            {{ csrf_field() }}
            <div class="form-group">
                <button type="submit" class="btn btn-danger pull-right">
                    Salir<i class="ti-shift-right ml-2 font-20"></i>
                </button>
                <br>
            </div>
        </form>
    </div>
</div>