<x-app-layout>
    <div class="container-flex">
        <div class="card">
            <div class="card-header badge badge-success square rounded p-1 justify-content-center">
                <h3>Categories</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover ">
                    <thead class="bg bg-success ">
                        <tr>
                            <th class="text-white h5">SN</th>
                            <th class="text-white h5">Category Name</th>
                            <th class="text-white h5">Slug</th>
                            <th class="text-white h5">Action </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $index => $item)
                            <tr>
                                <td class="text-bold h6">{{ ++$index }}</td>
                                <td class="text-bold h6">{{ $item->name }}</td>
                                <td class="text-bold h6">{{ $item->slug }}</td>
                                <td class="text-bold h6">
                                    <a href="{{ route('category.edit', $item->id) }}"
                                        class="badge badge-success">Edit</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer ">
                <a href="{{ route('category.create') }}" class="btn btn-success float-right text-bold h6">Add
                    Category</a>
            </div>
        </div>
    </div>
</x-app-layout>
