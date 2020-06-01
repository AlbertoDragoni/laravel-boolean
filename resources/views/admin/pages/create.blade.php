@php
  $categories = [
    [
      'id' => 1,
      'name' => 'Miscellanea'
    ],
    [
      'id' => 2,
      'name' => 'Lorem'
    ],
    [
      'id' => 3,
      'name' => 'Ipsum'
    ],
    [
      'id' => 4,
      'name' => 'Dolor'
    ],
    [
      'id' => 5,
      'name' => 'Sit'
    ]
  ];
@endphp

@extends('layouts.app');
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.pages.index')}}">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-10">
        <div class="row">
          <div class="col-12">
            <h2>Inserisci una nuova pagina</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <form class="" action="index.html" method="POST">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci un titolo">
                @error ('title')
                  <small class="form-text">Errore</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" class="form-control" id="summary" placeholder="Inserisci il sommario">
                @error ('summary')
                  <small class="form-text">Errore</small>
                @enderror
              <div class="form-group">
                <label for="category">Category</label>

                <select class="" name="">
                  @foreach ($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                  @endforeach
  
                </select>
                @error ('category')
                  <small class="form-text">Errore</small>
                @enderror
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
