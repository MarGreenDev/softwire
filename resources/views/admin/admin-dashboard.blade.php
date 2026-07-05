@extends('layouts.admin')

@section('title')
SoftWire Admin
@endsection

@section('content')

<div class="col-span-3">
    @include('partials.admin.widgets.users')
</div>


<x-modal id="user-modal" class="hidden">
    <x-slot:title>
        Users
    </x-slot:title>

    <table class="w-full border-collapse" id="usersTable">

        <thead class="bg-pink-300 font-bold">
            <tr>
                <th class="p-2 text-left">User ID</th>
                <th class="p-2 text-left">Username</th>
                <th class="p-2 text-left">E-mail</th>
                <th class="p-2 text-left">Join date</th>
                <th class="p-2 text-left">Actions</th>
            </tr>
        </thead>

        @foreach($users as $user)
            <tr class="hover:bg-pink-200">
                <td class="p-2 border-t border-pink-300">{{ $user->id }}</td>
                <td class="p-2 border-t border-pink-300">{{ $user->name }}</td>
                <td class="p-2 border-t border-pink-300">{{ $user->email }}</td>
                <td class="p-2 border-t border-pink-300">{{ $user->created_at }}</td>
                <td class="p-2 border-t border-pink-300">
                    <a href="{{ route('profile.admin', $user) }}" target="_blank">View profile</a>
                </td>
            </tr>
        @endforeach

    </table>
</x-modal>
@endsection