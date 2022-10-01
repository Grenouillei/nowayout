
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('admin.blogs.create')}}">
                    <x-button class="ml-4" >
                        {{ __('Create') }}
                    </x-button>
                </a>
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($blogs)
                        @foreach($blogs as $blog)
                            <div style="border: 4px double black;">
                                <h1>{{$blog->title}}</h1>
                                <p>{{$blog->created_at}}</p>
                            <a href="{{route('admin.blogs.edit',$blog->id)}}">
                                <x-button class="ml-4" >
                                    {{ __('Edit') }}
                                </x-button>
                            </a>
                            </div><br>
                        @endforeach

                    @endif
                </div>
            </div>
            {{ $blogs->appends(request()->input())->links() }}
        </div>
    </div>
</x-app-layout>
