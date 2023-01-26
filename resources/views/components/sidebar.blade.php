<div>
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand ">
            <a href="index.html"> <img alt="image" src="/otika/assets/img/logo.png" class="header-logo" />
                <span class="logo-name">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Services</li>
            <li class="dropdown ">
                <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('category.index') }}" class="nav-link"><i
                        data-feather="command"></i><span>Category</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('article.index') }}" class="nav-link"><i
                        data-feather="command"></i><span>Article</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Master
                        Entry</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Company Setup</a></li>
                </ul>
            </li>


        </ul>
    </aside>
</div>
