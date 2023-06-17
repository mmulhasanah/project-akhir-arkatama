@extends('layout.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Brand</h1>

            <a class="btn btn-info mb-2" href="{{ route('brand.create') }}" role="button">Create New</a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');"
                                            action="{{ route('brand.destroy', $brand->id) }}" method="POST">
                                            <a href="{{ route('brand.edit', $brand->id) }}"
                                                class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i> Delete</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
