
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
                    @if($blogs)
                        @foreach($blogs as $blog)
                            <div>
                                <a href="{{route('blogs.show',$blog->alias)}}"><h1>{{$blog->title}}</h1></a>
                                <p>{!! $blog->text !!}</p>
                                <p>{{$blog->created_at}}</p>
                            </div>
                            <br>
                        @endforeach

                    @endif
                </div>
            </div>
            {{ $blogs->appends(request()->input())->links() }}
        </div>
    </div>
</x-app-layout>
