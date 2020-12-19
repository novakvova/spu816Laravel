@extends("partials.mainLayout")

@section('content')

    <h2 class="text-center mt-4">Реєстрація</h2>

    <form method="POST" action="/register">
        @csrf

        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Ім'я</label>
            <input type="text" class="form-control" id="name"
                   value="{{old('name')}}"
                   name="name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Пошта</label>
            <input type="text" class="form-control" id="email" name="email"
            value="{{old('email')}}">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password"
                   name="password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Підтвердження паролю</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Зареєструватися</button>
    </form>

@endsection
