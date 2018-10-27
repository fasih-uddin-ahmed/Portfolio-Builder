<div class="list-group">
    <a class="list-group-item list-group-item-action {{request()->is('*profile*') ? 'active': ''}}" href="{{route('profile_view')}}"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Profile</a>
    <a class="list-group-item list-group-item-action" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add Project</a>
    <a class="list-group-item list-group-item-action" href="#"><i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; List Projects</a>
    <a class="list-group-item list-group-item-action" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
</div>
