@extends('layouts.app');
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pages</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-10">
        <div class="row">
          <div class="col-6">
            <h2>Pages</h2>
          </div>
          <div class="offset-3 col-3">
            <a href="#">Crea una pagina</a>
          </div>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Tags</th>
              <th colspan="3">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</td>
              <td>Miscellanea</td>
              <td>Tag 1, Tag 2, Tag 3</td>
              <td><a class="btn btn-primary" href="#">Modifica</a></td>
              <td><a class="btn btn-info" href="#">Visualizza</a></td>
              <td>
                <form class="" action="index.html" method="post">
                  <input class="btn btn-danger" type="submit" value="Elimina">
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
