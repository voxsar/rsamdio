<div class="app-sidebar">
	<div class="logo">
		<div class="sidebar-user-switcher user-activity-online">
			<a href="#">
				<span class="activity-indicator"></span>
				<span class="user-info-text">{{auth()->user()->name}}</span>
			</a>
		</div>
	</div>
	<div class="app-menu">
		<ul class="accordion-menu">
			<li class="sidebar-title">
				Dashboard
			</li>
			<li>
				<a href="{{route('profile')}}"><i class="material-icons-two-tone">dashboard</i>My District Profile</a>
			</li>
			<li>
				<a href="{{route('reports.index')}}"><i class="material-icons-two-tone">dashboard</i>My Quarterly Reports<span class="badge rounded-pill badge-danger float-end"></span></a>
			</li>
			<li>
				<a href="{{route('reports.create')}}"><i class="material-icons-two-tone">add</i>Add Quarterly Report<span class="badge rounded-pill badge-danger float-end"></span></a>
			</li>
			@auth()
				@if(auth()->user()->user_type == 'admin')
					<li>
						<a href="{{route('districts.index')}}"><i class="material-icons-two-tone">group</i>Districts<span class="badge rounded-pill badge-danger float-end"></span></a>
					</li>
					<li>
						<a href="{{route('districts.create')}}"><i class="material-icons-two-tone">add</i>Add District<span class="badge rounded-pill badge-danger float-end"></span></a>
					</li>
				@endif
			@endauth
		</ul>
	</div>
</div>