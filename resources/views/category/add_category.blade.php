<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            @if ($errors->has('title'))
                           <label for="exampleInputEmail1" class="form-label text-danger">{{$errors->first('title')}}</label>
                           @else
                           <label for="exampleInputEmail1" class="form-label">Title</label>
                           @endif
                          <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                         
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Short Description</label>
                          <textarea name="description" class="form-control" rows="4" id="floatingTextarea"></textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
