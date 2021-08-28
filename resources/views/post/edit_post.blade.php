<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    <form action="{{route('post.update',$post_data->id)}}" method="POST">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            @if ($errors->has('category_id'))
                           <label for="exampleInputEmail1" class="form-label text-danger">{{$errors->first('category_id')}}</label>
                           @else
                           <label for="exampleInputEmail1" class="form-label">Category</label>
                           @endif
                           <select name="category_id" class="form-select" aria-label="Default select example">
                            <option selected value="{{$post_data->category->id}}">{{$post_data->category->title}}</option>
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
                          <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{$post_data->title}}">
                         
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Short Description</label>
                          <textarea name="description" id="description">{{$post_data->description}}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace( 'description', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        </script>
</x-app-layout>
