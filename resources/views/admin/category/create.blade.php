<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('category.index') }}" class="btn btn-success text-bold h6">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="btn btn-success  text-white h6">Category Name </label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="eg. Politics">
                    </div>
                    <button type="submit" class="btn btn-success float-right text-bold h6">Save Category</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
