@extends('admin.layouts.layout')

@section('page-title', 'Страница Корзины : Категории')


@section('content')

<div class="content">

<div class="card">
                 <div class="card-header card-header-primary">
        <h4 class="card-title ">Удаленные категории</h4>
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
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                                <td class="d-flex">
                                    <form action=" method="post">
                                        <button  class="btn btn-primary" type="submit">
                                            Восстановить
                                        </button>
                                    </form>
                                    <!-- <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger remove-post">
                                               Удалить
                                            </button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                  </table>
              </div>



      </div>
              </div>

  

</div>
    
@endsection