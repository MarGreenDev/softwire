@extends('layouts.admin')

@section('title')
    SoftWire Admin
@endsection

@section('content')

<div class="col-span-3">
    @include('partials.admin.widgets.users')
</div>

@endsection