@extends('back.master')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>Customer Question Answer</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/customer/question/answer') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $edit_qustion->id }}">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" readonly class="form-control" value="{{ $edit_qustion->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" readonly class="form-control" value="{{ $edit_qustion->email }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="number" name="phone_number" readonly class="form-control" value="{{ $edit_qustion->phone_number }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Question</label>
                                    <textarea class="form-control" readonly name="question" rows="5">{{ $edit_qustion->question }}</textarea>
{{--                                    <input type="text" value="{{ $edit_qustion->question }}" readonly name="question" required class="form-control" id="question" aria-describedby="emailHelp" placeholder="Enter Question">--}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Answer</label>
                                    <textarea class="form-control" required name="answer" id="editor1" placeholder="Enter Question Answer"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Answer SubmiT">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
