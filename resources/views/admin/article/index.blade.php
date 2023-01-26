<x-app-layout>
    <div class="container-flex">
        <div class="card">
            <div class="card-header badge badge-success square rounded p-1 justify-content-center">
                <h3>Articles</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover ">
                    <thead class="bg bg-success ">
                        <tr>
                            <th class="text-white h5">SN</th>
                            <th class="text-white h5">Title</th>
                            <th class="text-white h5">Description</th>
                            <th class="text-white h5">Posted</th>
                            <th class="text-white h5">Action </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $index=>$item)
                        <tr>
                            <td class="text-bold h6">{{ ++$index }}</td>
                            <td class="text-bold h6">{{ $item->title }}</td>
                            <td class="text-bold h6">{!! Str::words($item->description, 100, '...') !!}</td>
                            <td class="text-bold h6">{{ $item->created_at->diffForHumans() }}</td>
                            <td class="text-bold h6">
                                <a href="{{ route('article.edit',$item->id) }}" class="badge badge-success">Edit</a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer ">
                <a href="{{ route('article.create') }}" class="btn btn-success float-right text-bold h6">Post
                    Article</a>
            </div>
        </div>
    </div>
</x-app-layout>
