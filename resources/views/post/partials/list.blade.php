    @extends('post.home')
    @section('title', 'List')
    @section('content')
        <div class="container">
            <div class="col-12 col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        List-Post
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <a class="btn btn-success mb-2" href="{{ route('post.create') }}">ADD</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Content</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post as $key => $post)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td> {{ $post->name }} </td>
                                            <td> {{ $post->slug }} </td>
                                            <td> {{ $post->description }} </td>
                                            <td> {{ $post->content }} </td>
                                            <td>
                                                <form method="post" action="{{ route('post.delete', $post->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                                <a href="{{ route('post.edit', $post->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td> </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
