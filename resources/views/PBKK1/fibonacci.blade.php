@extends('layout.base')

@section('title', 'Fibonacci')

@section('content')
<div class="container">
    <h1 class="mb-4">Masukkan Angka</h1>
    
    <!-- Fibonacci Form -->
    <div class="card mb-4">
        <div class="card-header bg-info text-white">
            <h5 class="card-title mb-0">Fibonacci Sequence Generator</h5>
        </div>
        <div class="card-body">
            <form action="#" method="GET">
                <div class="form-group">
                    <label for="n">Enter a number (n):</label>
                    <input type="text" class="form-control" name="n" id="n" min="1" required>
                </div>
                <button type="submit" class="btn btn-info mt-3">Submit</button>
            </form>
        </div>
    </div>

    <!-- Result Table -->
    @if (isset($numberDetails) && count($numberDetails) > 0)
        <h2 class="mb-3">Hasil</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nomor Urut</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($numberDetails as $detail)
                    <tr>
                        <td>{{ $detail['number'] }}</td>
                        <td>{{ $detail['result'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
