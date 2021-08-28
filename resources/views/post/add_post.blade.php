<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    <form action="{{route('post.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            @if ($errors->has('category_id'))
                           <label for="exampleInputEmail1" class="form-label text-danger">{{$errors->first('category_id')}}</label>
                           @else
                           <label for="exampleInputEmail1" class="form-label">Category</label>
                           @endif
                           <select name="category_id" class="form-select" aria-label="Default select example">
                            <option selected>select Category</option>
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                            
                          </select>
                         
                        </div>
                        <div class="mb-3">
                            @if ($errors->has('title'))
                           <label for="exampleInputEmail1" class="form-label text-danger">{{$errors->first('title')}}</label>
                           @else
                           <label for="exampleInputEmail1" class="form-label">Title</label>
                           @endif
                          <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                         
                        </div>
                        <div class="mb-3">
                            @if ($errors->has('description'))
                            <label for="exampleInputEmail1" class="form-label text-danger">{{$errors->first('description')}}</label>
                            @else
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            @endif
                          
                          <textarea name="description"  id="description"></textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'description', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
           
            
        });
       
        </script>

       
</x-app-layout>
