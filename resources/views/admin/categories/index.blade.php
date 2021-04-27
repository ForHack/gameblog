@extends('admin.layouts.layout')

@section('page-title', 'Страница категорий')



@section('content')

    
    <div class="content">

        <div class="links-group d-flex align-items-center">
        <a href="{{ route('categories.create') }}" class="btn btn-primary d-inline-block">Добавить категорию</a>
        <a href="{{ route('basket.category') }}" class="btn btn-primary d-inline-block ml-3">Корзинка</a>
        </div>

        <div class="card">
            @if (count($categories))
             <div class="card-header card-header-primary">
                <h4 class="card-title ">Таблица категорий</h4>
                <p class="card-category">Данные об категорий</p>
              </div>
              <div class="card-body">
                      <div class="table-responsive">
                          <table class="table">
                          <thead class=" text-primary">
                              <tr><th>
                              ID
                              </th>
                              <th>
                              Название категорий
                              </th>
                              <th>
                              SLUG категория
                              </th>
                              <th>
                              Действия
                              </th>
                          </tr></thead>
                          <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->id }}
                                    </td>
                                    <td>
                                        {{ $category->title }}
                                    </td>
                                    <td>
                                        {{ $category->slug }}
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">
                                            <span class="material-icons">
                                                edit_off
                                            </span>
                                        </a>
                                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
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
                <h4 class="card-title ">Категорий пока нет</h4>
              </div>
            @endif
          </div>

          {{ $categories->links("pagination::bootstrap-4") }}

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