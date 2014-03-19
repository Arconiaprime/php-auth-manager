@extends('layouts.dashboard')

@section('sidebar-nav-menu')
<li class="active"><a href="{{ URL::route('applications') }} ">Your Applications</a></li>
<li><a href="{{ URL::to('applications/create') }}">Create Application</a></li>
<li><a href="#">Analytics</a></li>
<li><a href="#">Export</a></li>
@stop

@section('sidebar-subnav-menu')
<ul id="sub-nav" class="nav nav-sidebar">
	<li><a href="{{ URL::to('applications/'.$application->id.'/update') }}">Update</a></li>
	<li><a href="{{ URL::to('applications/'.$application->id.'/delete') }}">Delete</a></li>
</ul><!-- ul#subnav -->
@overwrite

@section('content-body')

	<h1>Application Name</h1>
		<p>{{ $application->name }}</p> 

	<h1>Application URL</h1>
		<p>{{ $application->application_url }}</p>

	<h1>Callback URL</h1>
			<p>{{ $application->callback_url }}</p>

@overwrite