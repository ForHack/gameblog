@extends('admin.layouts.register')


@section('content')
  
  <div class="container">
    <div class="row justify-content-center">
       <div class="col-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Регистрация </h4>
            </div>
            <div class="card-body">
              <form method="post" action="{{ route('register.store') }}"> 
                @csrf                   
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Имя</label>
                      <input type="text" value="{{ old('name') }}" class="form-control is-invalid" name="name">
                    </div>

                   
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Почта</label>
                      <input type="email" value="{{ old('email') }}" class="form-control is-invalid" name="email">
                    </div>

                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Пароль</label>
                      <input type="password" class="form-control is-invalid" name="password">
                    </div>

                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Повторить пароль</label>
                      <input type="password" class="form-control is-invalid" name="password_confirmation">
                    </div>

                

                  </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Регистрация</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection