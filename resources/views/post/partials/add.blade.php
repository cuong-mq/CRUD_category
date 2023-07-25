    @extends('post.home')
    @section('title', 'List')
    @section('content')
        <div class="container">
            <div class="col-12 col-md-12 mt-2">
                <div class="col-12 col-md-12 mt-2">
                    <div class="card">
                        <div class="card-header">
                            Add Post
                        </div>

                        <div class="card-body">
                            <div class="col-12">
                                <form method="post" action="{{ route('post.store') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="itemName form-control select2" id="category_id" name="category_id"
                                            autocomplete="off" validate="true" validate-pattern="required" label="category">
                                            <option value=""></option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <div id="error_category"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content</label>
                                        <input type="text" class="form-control" name="content" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a type="button" href="{{ route('post.index',['categoryId'=>$category->id]) }}"
                                        class="btn btn-secondary">Exit</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
