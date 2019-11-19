
<li class="{{ Request::is('home') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-edit"></i><span>Home</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('divisions*') ? 'active' : '' }}">
    <a href="{!! route('divisions.index') !!}"><i class="fa fa-edit"></i><span>Divisions</span></a>
</li>

<li class="{{ Request::is('subdivisions*') ? 'active' : '' }}">
    <a href="{!! route('subdivisions.index') !!}"><i class="fa fa-edit"></i><span>Subdivisions</span></a>
</li>

<li class="{{ Request::is('quarters*') ? 'active' : '' }}">
    <a href="{!! route('quarters.index') !!}"><i class="fa fa-edit"></i><span>Quarters</span></a>
</li>

<li class="{{ Request::is('mechanicWorkshops*') ? 'active' : '' }}">
    <a href="{!! route('mechanicWorkshops.index') !!}"><i class="fa fa-edit"></i><span>Mechanic Workshops</span></a>
</li>

