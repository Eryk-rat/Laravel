<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{{ route('tests.index') }}"><i class="fa fa-edit"></i><span>Tests</span></a>
</li>



