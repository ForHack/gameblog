@extends('admin.layouts.layout')

@section('page-title', 'Страница тегов')



@section('content')

    
    <div class="content">

        <div class="links-group d-flex align-items-center">
        <a href="{{ route('tags.create') }}" class="btn btn-primary d-inline-block">Добавить Тег</a>
        </div>

        <div class="card">
            @if (count($tags))
             <div class="card-header card-header-primary">
                <h4 class="card-title ">Таблица тегов</h4>
                <p class="card-category">Данные об тегов</p>
              </div>
              <div class="card-body">
                      <div class="table-responsive">
                          <table class="table">
                          <thead class=" text-primary">
                              <tr><th>
                              ID
                              </th>
                              <th>
                              Название тегов
                              </th>
                              <th>
                              SLUG тега
                              </th>
                              <th>
                              Действия
                              </th>
                          </tr></thead>
                          <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        {{ $tag->id }}
                                    </td>
                                    <td>
                                        {{ $tag->title }}
                                    </td>
                                    <td>
                                        {{ $tag->slug }}
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}" class="btn btn-primary">
                                            <span class="material-icons">
                                                edit_off
                                            </span>
                                        </a>
                                        <form action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" method="post">
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
                <h4 class="card-title ">Тегов пока нет</h4>
              </div>
            @endif
          </div>

          {{ $tags->links("pagination::bootstrap-4") }}

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