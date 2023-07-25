  @extends('category.home')
  @section('title', 'List')
  @section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-2">
            <div class="col-12 col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        Edit
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <form method="post" action="{{ route('category.update', $category->id) }}">
                                @method('PUT')
                                @csrf
                                <!-- Thêm CSRF token để bảo mật form -->
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $category->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control"
                                        value="{{ $category->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description"
                                        value="{{ $category->email }}"required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <input type="text" class="form-control" name="content"
                                        value="{{ $category->address }}"required>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <a type="button" href="{{ route('category.index') }}" class="btn btn-secondary">Quay
                                    lại</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

