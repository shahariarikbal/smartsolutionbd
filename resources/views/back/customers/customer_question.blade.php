@extends('back.master')

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col" width="5%">Status</th>
                <th scope="col" width="20%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show_question as $key => $question)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $question->name }}</td>
                    <td>{{ $question->question }}</td>
                    <td>{!! substr($question->answer,0,50) !!}...</td>
                    <td>{{ $question->status == 1 ? 'Active' : 'Pending'}}</td>
                    <td style="text-align: center;" width="20%">
                        @if($question->status == 1)
                            <a href="{{ url('/active/customer/question/'.$question->id) }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="{{ url('/pending/customer/question/'.$question->id) }}" class="btn btn-primary btn-sm">Pending</a>
                        @endif
                        <a href="{{ url('/edit/customer/question/'.$question->id) }}" class="btn btn-info btn-sm">Ans</a>
                        <a href="{{ url('/delete/customer/question/'.$question->id) }}" onclick="return confirm('Are You Sure Delete This')" class="btn btn-danger btn-sm">Delete</a>
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
