@extends('main-index')
@section('sidebar')
<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text">
        Creative Tim
    </a>
</div>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="nc-icon nc-chart-pie-35"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="nc-icon nc-single-02"></i>
            <span class="no-icon">User</span>
        </a>
        <div class="p-0 dropdown-menu bg-secondary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/user">All User</a>
            <a class="dropdown-item" href="/receiver">Receiver</a>
            <a class="dropdown-item" href="/collector">Collector</a>
            <div class="divider"></div>
        </div>
    </li>

</ul>
@endsection