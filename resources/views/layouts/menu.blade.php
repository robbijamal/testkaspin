<ul class="accordion-menu">
   <li class="{{ (\Request::getRequestUri()=='/audience') ? 'active-page' : '' }}">
        <a href="{{ url('/barang') }}">
            <i class="menu-icon icon-database"></i>
            <span>Data Barang</span>
        </a>
    </li>
    @if(Auth::user()->privilege_id==0)
    <li class="{{ (\Request::getRequestUri()=='/audience/create') ? 'active-page' : '' }}">
        <a href="{{ url('/logbarang') }}">
            <i class="menu-icon icon-cog"></i>
            <span>Log Barang</span>
        </a>
    </li>
    @endif
    
    
</ul>
