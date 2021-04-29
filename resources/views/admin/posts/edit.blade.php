@extends('admin.layouts.layout')

@section('page-title', 'Редакторвание Поста')

@section('content')
    
    <div class="content">
     
   

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title">Редактирование поста </h4>
                      </div>
                      <div class="card-body">
                        <form method="post" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data"> 
                          @csrf
                          @method('PUT')
                          <div class="row">

                            <div class="col-md-12">

                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Название</label>
                                <input type="text" value="{{ $post->title }}" class="form-control is-invalid" name="title">
                              </div>

                              <div class="form-group bmd-form-group">
                                <label for="description" class="bmd-label-floating">Цитата</label>
                                <textarea class="form-control" row="3" name="description" id="description">{{$post->description}}</textarea>
                              </div>

                              <div class="form-group bmd-form-group">
                                <label for="content" class="bmd-label-floating">Контент...</label>
                                <textarea class="form-control" row="3" name="content" id="content">{{ $post->content }}</textarea>
                              </div>

                              <div class="form-group bmd-form-group form-select">
                                <label for="category_id">Категории</label>
                                <select name="category_id" class="form-control" name="category_id" id="category_id">
                                  @foreach ($categories as $k => $v)
                                    <option value="{{ $k }}" @if($k == $post->category_id) selected @endif >{{ $v }}</option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group bmd-form-group form-select">
                                <label for="tags">Теги</label>
                                <select name="tags[]" style="height: 80px;" class="form-control" size="4" multiple  id="tags">
                                    @foreach ($tags as $k => $v)
                                      <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="thumbnail">Выбрать изображения</label>
                                <input type="file" id="thumbnail" name="thumbnail" class="form-control">

                                <div class="mt-2">
                                  <img class="img-thumbnail w-100" src="{{ $post->getImage() }}" alt="">
                                </div>
                              </div>

                            </div>

                          </div>
                         
                          <button type="submit" class="btn btn-primary">Обновить</button>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>



@endsection