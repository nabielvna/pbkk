@extends('layout.base')

@section('title', 'Even Odd')

@section('content')
    <div class="container">
        <h1 class="mb-4">Masukkan Angka</h1>

        <!-- Post Request Card -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Post Request</h5>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="n_post">Enter a number (n):</label>
                        <input type="number" class="form-control" name="n" id="n_post" min="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>

        <!-- Get Request Card -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white">
                <h5 class="card-title mb-0">Get Request</h5>
            </div>
            <div class="card-body">
                <form action="#" method="GET">
                    <div class="form-group">
                        <label for="n_get">Enter a number (n):</label>
                        <input type="number" class="form-control" name="n" id="n_get" min="1" required>
                    </div>
                    <button type="submit" class="btn btn-secondary mt-3">Submit</button>
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
                    @foreach ($numberDetails as $detail)
                        <tr>
                            <td>{{ $detail['number'] }}</td>
                            <td>{{ $detail['type'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
