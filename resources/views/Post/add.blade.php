<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý khách hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('records.index') }}">Home</a>
            </div>
        </nav>
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
                                <!-- Thêm CSRF token để bảo mật form -->
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
                                <a type="button" href="{{ route('post.index') }}" class="btn btn-secondary">Exit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>

</html>