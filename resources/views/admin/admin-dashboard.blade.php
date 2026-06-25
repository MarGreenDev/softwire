@extends('layouts.admin')

@section('title')
SoftWire Admin
@endsection

@section('content')

<div class="col-span-3">
    @include('partials.admin.widgets.users')
</div>


<div
    id="modal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-xs">
    <div class="widget">
        <div class="widget-header">
            Header
        </div>
        <table class="w-full border-collapse">

            <thead class="bg-pink-300 font-bold">
                <tr>
                    <th class="p-2 text-left">User ID</th>
                    <th class="p-2 text-left">User name</th>
                </tr>
            </thead>

            @foreach($users as $user)

            <tr class="hover:bg-pink-200">
                <td class="p-2 border-t border-pink-300">{{ $user->id }}</td>
                <td class="p-2 border-t border-pink-300">{{ $user->name }}</td>
            </tr>

            @endforeach

        </table>
    </div>
</div>
@endsection