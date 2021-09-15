@extends('layouts.app')

@section('content')

	@if($fields)
		
		
		{{ $fields['page_sub_title'] }}
		<br/>
		{!! $fields['page_description'] !!}
	@endif	
	@php the_content() @endphp

@endsection