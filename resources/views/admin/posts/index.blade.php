@extends('admin.layouts.layout')

@section('page-title', 'Страница Постов')



@section('content')

    
    <div class="content">

        <div class="links-group d-flex align-items-center">
        <a href="{{ route('posts.create') }}" class="btn btn-primary d-inline-block">Добавить Пост</a>
        </div>

        <div class="card">
            @if (count($posts))
             <div class="card-header card-header-primary">
                <h4 class="card-title ">Таблица Постов</h4>
                <p class="card-category">Данные об постах</p>
              </div>
              <div class="card-body">
                      <div class="table-responsive">
                          <table class="table">
                          <thead class=" text-primary">
                              <tr>
                                <th>ID</th>
                                <th> Название поста </th>
                                <th> Категория </th>
                                <th> Теги </th>
                                <th> Дата </th>
                                <th> Действия </th>
                          </tr></thead>
                          <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                        {{ $post->category->title }}
                                    </td>
                                    <td>
                                        {{ $post->tags }}
                                    </td>
                                    <td>
                                        {{ $post->created_at }}
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">
                                            <span class="material-icons">
                                                edit_off
                                            </span>
                                        </a>
                                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger remove-post">
                                                <span class="material-icons">
                                                    restore_from_trash
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                          </table>
                      </div>
  
  
  
              </div>
            @else
             <div class="card-header card-header-primary">
                <h4 class="card-title ">Постов пока нет</h4>
              </div>
            @endif
          </div>

          {{ $posts->links("pagination::bootstrap-4") }}

        </div>


    <script>

        const removeBtns = document.querySelectorAll('.remove-post')
        removeBtns.forEach(removeBtn => {
                removeBtn.addEventListener('click', function(e) {
                let isProved = confirm('Вы действительно хотите удалить?') 
                return isProved ? true : e.preventDefault()
            })
        })

    </script>

@endsection