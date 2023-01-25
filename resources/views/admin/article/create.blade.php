<x-app-layout>
    <div class="container-fluid ">
        <div class="card ">
            <div class="card-header">
                <a href="{{ route('article.index') }}" class="btn btn-success text-bold h6">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="btn btn-success  text-white h6">Article Title </label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="btn btn-success  text-white h6" for="category_id">Choose Category</label>
                        <select id="category_id" class="form-control select2  " name="category_id[]" multiple>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="btn btn-success  text-white h6" for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="btn btn-success  text-white h6" for="featured">Featured Image</label>
                        <input id="featured" class="form-control" type="text" name="featured">
                    </div>
                    <div class="form-group">
                        <label class="btn btn-success  text-white h6" for="meta_word">Meta Word (Optional)</label>
                        <textarea id="meta_word" class="form-control" name="meta_word" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="btn btn-success  text-white h6" for="meta_description">Meta Description
                            (Optional)</label>
                        <textarea id="meta_description" class="form-control" name="meta_description"
                            rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success float-right text-bold h6">Save Article</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
