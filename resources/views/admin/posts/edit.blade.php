@extends('admin.layouts.layout')

@section('page-title', 'Редактирование поста')

@section('content')
    
    <div class="content">
     
   

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title">Добавление Поста </h4>
                      </div>
                      <div class="card-body">
                        <form method="post" action="{{ route('posts.update', ['post' => $post->id]) }}"> 
                          @csrf
                          @method('PUT')
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Название</label>
                                <input type="text" class="form-control is-invalid" value="{{ $category->title }}" name="title">
                              </div>
                            </div>
                          </div>
                         
                          <button type="submit" class="btn btn-primary">Сохранить</button>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>


    <script>

        const removeBtn = document.querySelector('.remove-post')
        removeBtn.addEventListener('click', function() {
            return confirm('Вы действительно хотите удалить?')
        })

    </script>

@endsection