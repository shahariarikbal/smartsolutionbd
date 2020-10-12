@extends('back.master')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Support
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
                        <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/save/support') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Question</label>
                                <input type="text" name="question" required class="form-control" id="question" aria-describedby="emailHelp" placeholder="Enter Question">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Answer</label>
                                <textarea class="form-control" required name="answer" id="editor1" placeholder="Enter Question Answer"></textarea>
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
                <th scope="col">Question</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col" width="15%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show_support as $key => $support)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $support->question }}</td>
                    <td>{!! substr($support->answer,0,50) !!}...</td>
                    <td>{{ $support->status == 1 ? 'Active' : 'Pending'}}</td>
                    <td style="text-align: center;">
                        @if($support->status == 1)
                            <a href="{{ url('/active/support/'.$support->id) }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="{{ url('/pending/support/'.$support->id) }}" class="btn btn-primary btn-sm">Pending</a>
                        @endif
                        <a href="{{ url('/delete/support/'.$support->id) }}" onclick="return confirm('Are You Sure Delete This')" class="btn btn-danger btn-sm">Delete</a>
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
