  @extends('category.home')
  @section('title', 'List')
  @section('sidebar')
      @parent
  @endsection
  @section('content')
      <div class="col-12 col-md-12 mt-2">

          <div class="card">
              <div class="card-header">
                  List Category
              </div>
              <div class="card-body">
                  <div class="col-12">
                      <a class="btn btn-success mb-2" href="{{ route('category.create') }}">ADD</a>
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>STT</th>
                                  <th>Name</th>
                                  <th>Slug</th>
                                  <th>Description</th>
                                  <th>Content</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($categories as $key => $category)
                                  <tr>
                                      <td> {{ ++$key }} </td>
                                      <td> {{ $category->name }} </td>
                                      <td> {{ $category->slug }} </td>
                                      <td> {{ $category->description }} </td>
                                      <td> {{ $category->content }} </td>
                                      <td>
                                          <form method="post" action="{{ route('category.delete', $category->id) }}">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                          </form>
                                          <a href="{{ route('category.edit', $category->id) }}"
                                              class="btn btn-primary btn-sm">Edit</a>
                                          <a href="{{ route('post.index',['categoryId'=>$category->id]) }}"
                                              class="btn btn-primary btn-sm">Show</a>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  @endsection
