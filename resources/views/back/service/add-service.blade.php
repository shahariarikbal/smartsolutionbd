@extends('back.master')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add service
        </button>
        @if(Session::get('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <br/>
        <br/>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/save/service') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Slider Image Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea class="form-control" required name="description" id="editor1" placeholder="Enter Product Description"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" required name="image">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col" width="20%">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col" width="15%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show_service as $key => $service)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td width="20%">
                        <img src="{{ asset('/service-images/'.$service->image) }}" height="50" width="140" alt="img">
                    </td>
                    <td>{{ $service->name }}</td>
                    <td>{!! substr($service->description,0,50) !!}...</td>
                    <td>{{ $service->status == 1 ? 'Active' : 'Pending'}}</td>
                    <td style="text-align: center;">
                        @if($service->status == 1)
                            <a href="{{ url('/active/service/'.$service->id) }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="{{ url('/pending/service/'.$service->id) }}" class="btn btn-primary btn-sm">Pending</a>
                        @endif
                        <a href="{{ url('/delete/service/'.$service->id) }}" onclick="return confirm('Are You Sure Delete This')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
