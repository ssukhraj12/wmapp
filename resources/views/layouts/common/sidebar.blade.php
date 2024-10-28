<ul class="side-nav overflow-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="iconify" data-icon="ic:round-space-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#side1" aria-expanded="false" aria-controls="side1" class="nav-link">
            <i class="iconify" data-icon="fluent-mdl2:activate-orders"></i>
            <span>Orders</span>
            <span class="menu-arrow">
                <i class="iconify" data-icon="bx:chevron-right"></i>
            </span>
        </a>
        <div class="collapse" id="side1">
            <ul class="side-nav-second-level">
                <li>
                    <a href="{{route('home')}}">All Orders</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#side11" aria-expanded="false" aria-controls="side11" class="nav-link">
            <i class="iconify" data-icon="fluent-mdl2:activate-orders"></i>
            <span>Settings</span>
            <span class="menu-arrow">
                <i class="iconify" data-icon="bx:chevron-right"></i>
            </span>
        </a>
        <div class="collapse" id="side11">
            <ul class="side-nav-second-level">
                <li>
                    <a href="{{route('settings.all')}}">All</a>
                </li>
                <li>
                    <a href="{{route('settings.general')}}">General</a>
                </li>
                <li>
                    <a href="{{route('settings.channels')}}">Channels</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#side21" aria-expanded="false" aria-controls="side21" class="nav-link">
            <i class="iconify" data-icon="fluent-mdl2:activate-orders"></i>
            <span>Products</span>
            <span class="menu-arrow">
                <i class="iconify" data-icon="bx:chevron-right"></i>
            </span>
        </a>
        <div class="collapse" id="side21">
            <ul class="side-nav-second-level">
                <li>
                    <a href="{{route('product.list')}}">All</a>
                </li>
            </ul>
        </div>
    </li>
</ul>
