<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h1>
                <div class="flex gap-4">
                    @if($post->user->image)
                        <img src="{{$post->user->imageUrl()}}" alt="{{$post->user->name}}" class="w-12 h-12 rounded-full">
                    @else
                        <img src="{{$post->user->imageUrl()}}" alt="{{$post->user->name}}" class="w-12 h-12 rounded-full">
                    @endif

                    <div>
                        <div class="flex gap-2 text-gray-500">
                            <a href="{{route('profile.show', $post->user)}}" class="hover:underline">{{$post->user->name}}</a href="{{route('profile.show', $post->user)}}">
                            &middot;
                            <a href="#" class="text-emerald-600">{{__('Follow')}}</a>
                        </div>
                        <div class="flex gap-2 text-sm text-gray-500">
                            {{$post->readTime() }} {{__("min read")}}
                            &middot;
                            {{ __($post->created_at->format('M d, Y')) }}
                        </div>
                        <div></div>
                        
                    </div>
                </div>
                <x-clap-button class="mt-4" />
                <div class="mt-8">
                    <img src="{{$post->imageUrl()}}" alt="{{$post->title}}">
                    <div class="mt-4 mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <p>{{$post->content}}</p>
                    </div>
                </div>
                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-400 text-gray-800 rounded-full">
                        {{$post->category->name}}
                    </span>
                </div>
                <x-clap-button class="mt-4" />
            </div>
        </div>
    </div>
</x-app-layout>
