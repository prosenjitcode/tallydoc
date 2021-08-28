<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    @if ($posts->count() > 0)
                    <div class="table w-full p-2">
                        <table class="w-full border">
                            <thead>
                                <tr class="bg-gray-50 border-b">
                                   
                                   
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class="flex items-center justify-center">
                                            Title
                                          
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class="flex items-center justify-center">
                                            Description
                                           
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class="flex items-center justify-center">
                                            Category
                                          
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class="flex items-center justify-center">
                                            Action
                                           
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                    <td class="p-2 border-r">{{$post->title}}</td>
                                    <td class="p-2 border-r">{{Str::limit($post->description, 80, '...')}}</td>
                                    <td class="p-2 border-r">{{$post->category->title}}</td>
                                    <td class="inline-flex m-2 xs:mt-0">
                                        <a href="{{route('post.edit',$post->id)}}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin mr-2">Edit</a>
                                        <form action="{{route('post.destroy',$post->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <input type="submit" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin" value="Remove" />
                                        </form>
                                       
                                    </td>
                                </tr>
                                @endforeach
                               
                                
                            </tbody>
                        </table>
                    </div>
                            {{$posts->links()}}

                            @else
                            No data available.
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
