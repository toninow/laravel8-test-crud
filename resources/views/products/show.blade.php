@extends('layouts.app')
@section('content')
    <h1>{{ $product ->title }} ({{ $product ->id }})</h1>
    <div class="table-responsibe">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>{{ $product ->description }}</td>
                    <td>{{ $product ->price }}</td>
                    <td>{{ $product ->stock }}</td>
                    <td>{{ $product ->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
