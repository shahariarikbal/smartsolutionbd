@extends('back.master')

@section('content')
    <div class="container">
        @if(Session::get('success'))
            <p class="alert alert-success text-center">{{ Session::get('success') }}</p>
        @endif
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('/save/blog/tag') }}" method="POST" id="blogTag">
                                    @csrf
                                    {{--                            <input type="text" name="user_id" value="{{ Auth::user()->id }}">--}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blog Title</label>
                                        <input type="text" name="tag_name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Blog Title">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        <!-- Modal -->
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col">Tag Name</th>
                <th scope="col">Status</th>
                <th scope="col" width="15%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show_tag as $key => $tag)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $tag->tag_name }}</td>
                    <td>{{ $tag->status == 1 ? 'Active' : 'Pending'}}</td>
                    <td style="text-align: center;">
                        @if($tag->status == 1)
                            <a href="{{ url('/active/blog/tag/'.$tag->id) }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="{{ url('/pending/blog/tag/'.$tag->id) }}" class="btn btn-primary btn-sm">Pending</a>
                        @endif
                        <a href="{{ url('/delete/blog/tag/'.$tag->id) }}" onclick="return confirm('Are You Sure Delete This')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $show_tag->links() }}
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#blogTag").on('submit', function (e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr("action");
                var type = form.attr("method");
                var data = form.serialize();

                $.ajax({
                    url:url,
                    data:data,
                    type:type,
                    dataType:"JSON",
                    success: function (data) {
                        if ( data == "success"){
                            form[0].reset();
                            location.reload();
                        }
                    },
                })
            })
        })
    </script>

@endsection
