<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('category.index') }}" class="btn btn-success text-bold h6">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update',$category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="btn btn-success  text-white h6 for=" name">Category Name </label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="eg. Politics"
                            value="{{ $category->name }}">
                    </div>
                    <button type="submit" class="btn btn-success text-bold h6">Update</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
