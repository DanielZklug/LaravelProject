<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Public Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex">
                    <div class="flex-1 pr-8">
                        <h1 class="text-5xl text-white">{{ $user->name}}</h1>
                        <div class="dark:text-gray-100 mt-8">
                            @forelse ($posts as $post)
                                <x-post-item :post="$post" />
                            @empty
                                <div class="text-center text-gray-500 py-16">
                                    <p>{{__('No posts available.')}}</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="w-[320px] border-l px-8">
                        <x-user-avatar :user="$user" size="w-24 h-24"></x-user-avatar>
                        <h3 class="text-gray-500">{{$user->name}}</h3>
                        <p class="text-gray-500">26K {{__('followers')}}</p>
                        <p class="text-gray-500">
                            {{$user->bio}}
                        </p>
                        <div class="mt-4">
                            <button class="bg-emerald-600 rounded-full px-4 py-2 text-white hover:bg-emerald-800">{{__('Follow')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
