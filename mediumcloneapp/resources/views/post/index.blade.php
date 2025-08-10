<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <x-category-tabs>
                        <div class="text-center text-gray-500">
                            {{__('No categories available.')}}
                        </div>
                    </x-category-tabs>
                </div>
            </div>
            <div class="mt-10 text-gray-900">
                <div class="dark:text-gray-100">
                    @forelse ($posts as $post)
                        <x-post-item :post="$post" />
                    @empty
                        <div class="text-center text-gray-500 py-16">
                            <p>{{__('No posts available.')}}</p>
                        </div>
                    @endforelse
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
