@extends('layouts.home')

@section('title',"User Panel")
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">My Account</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- My Account Start -->
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include("home.userpanel")
                <div class="col-md-9">
                <x-app-layout>
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Profile') }}
                        </h2>
                    </x-slot>

                    <div>
                        <div class="max-w-7xl mx-auto py-7 sm:px-6 lg:px-8">
                            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                @livewire('profile.update-profile-information-form')

                                <x-jet-section-border />
                            @endif

                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.update-password-form')
                                </div>

                                <x-jet-section-border />
                            @endif

                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.two-factor-authentication-form')
                                </div>

                                <x-jet-section-border />
                            @endif

                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.logout-other-browser-sessions-form')
                            </div>

                            <x-jet-section-border />

                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.delete-user-form')
                            </div>
                        </div>
                    </div>
                </x-app-layout>
                </div>
            </div>
        </div>
    </div>



@endsection