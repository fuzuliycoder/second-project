@extends('sections.adminsection')

  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


  <br>
  <div>
    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
          <label for="">Type a new Post</label>
          <input type="text" name="title" value="{{$post->title}}">
          <label for="">Choose or change tags</label>
          
          <select name="tag_id[]" id="" class="form-control" multiple>
           @foreach ($tags as $item )
           <option
                 @foreach ($post->tags as $t)
                        @if ($item->id==$t->id)
                            selected
                        @endif
                 @endforeach  value="{{$item->id}}">{{$item->name}}
            </option>
           @endforeach
          </select>
           <div class="card-footer">
                <button type="submit" class="btn btn-primary">Send</button>   
           </div>
     </form>
 </div>