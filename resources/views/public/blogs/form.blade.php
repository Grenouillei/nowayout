

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($blog)
                        <h1>{{$blog->title}}</h1>
                        <p>{!! $blog->text !!}</p>
                        <p>{{$blog->created_at}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

