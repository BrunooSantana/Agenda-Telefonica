@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-sucess" role="alert">
                  {{ session('status') }}
              </div>
              @endif

              <create-component></create-component>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection