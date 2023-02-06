@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <form class="row g-3 needs-validation" novalidate>

                <div class="col-md-4">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        @error('category_id')
                            <ul>
                                @foreach ($errors->get('category_id') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @enderror
                    </div>
                </div>



                  <div class="col-md-4">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="image" name="image">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label for="content" class="form-label">Contenuto</label>
                   <input type="text" class="form-control" id="content" name="content">
                    <div class="valid-feedback">
                      Looks good!
                    </div>

                    <div class="col-md-4">
                        <label for="excerpt" class="form-label">Riassunto</label>
                       <input type="text" class="form-control" id="excerpt" name="excerpt">
                        <div class="valid-feedback">
                          Looks good!
                    </div>

                  </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Crea</button>
                </div>
              </form>
        </form>
    </div>
@endsection
