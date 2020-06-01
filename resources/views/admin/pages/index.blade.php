@extends('layouts.app');
@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pages</li>
    </ol>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="row">
          <div class="col-6">
            <h2>Pages</h2>
          </div>
          <div class="offset-3 col-3">
            <a href="#">Crea una pagina</a>
          </div>
        </div>
        <table>

        </table>
      </div>
    </div>
  </div>
@endsection
