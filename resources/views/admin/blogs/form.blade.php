

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="p-6 bg-white border-b border-gray-200">

                    <form @if(isset($blog->id)) method="put" @else method="post" @endif class="js-blogs-form" action="{{(isset($blog)) ? route('admin.blogs.update',$blog->id) : route('admin.blogs.store') }}">
                        @csrf

                            <div class="mt-4">
                                <x-label for="title" :value="__('Title')" />

                                <x-input id="title" class="block mt-1 w-full"
                                         type="text"
                                         name="title"
                                         required  value="{{$blog->title ?? old('title')}}" />
                                <label id="title_error" class="error text-red-600"></label>
                            </div>

                            <div class="mt-4">
                                <x-label for="text" :value="__('Text')" />

                                <x-input id="text" class="block mt-1 w-full"
                                         type="text"
                                         name="text"
                                         value="{{$blog->text ?? old('text')}}" />
                                <label id="text_error" class="error text-red-600"></label>
                            </div>

                            @if(isset($blog->id))
                                <div class="mt-4">
                                    <x-label for="created_at" :value="__('Created at')" />

                                    <x-input id="created_at" class="block mt-1 w-full"
                                             type="text"
                                             readonly  value="{{$blog->created_at ?? old('created_at')}}" />
                                </div>
                            @endif

                        <x-button class="ml-4" type="submit">Save</x-button>
                        @if(isset($blog->id))
                            <x-button class="ml-4 js-blogs-delete" type="submit" data-route="{{route('admin.blogs.destroy',$blog->id)}}">Delete</x-button>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

