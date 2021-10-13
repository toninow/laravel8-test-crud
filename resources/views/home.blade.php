@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div align="center">
<h1 class="text-xl-center">
    ACCESOS DISPONIBLES
</h1>

<div class="card text-center" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">PRODUCTOS</h5>
      <i class="bi bi-shop-window"></i>
      <a class="btn btn-info text-white ml-3" href="{{ route('products.index') }}">Acceder</a>
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
