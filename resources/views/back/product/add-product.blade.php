@extends('back.master')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Product
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
                        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/save/product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Slider Image Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Price</label>
                                <input type="number" name="price" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Short Description</label>
                                <textarea class="form-control" required name="short_description" id="" placeholder="Enter Product Short Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea class="form-control" required name="description" id="editor1" placeholder="Enter Product Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bangla Description</label>
                                <textarea class="form-control" required name="ban_description" id="editor2" placeholder="Enter Product Description"></textarea>
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
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col" width="15%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show_product as $key => $product)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td width="20%">
                        <img src="{{ asset('/product-images/'.$product->image) }}" height="50" width="140" alt="img">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>TK.{{ number_format($product->price,2) }}</td>
                    <td>{!! substr($product->description,0,50) !!}...</td>
                    <td>{{ $product->status == 1 ? 'Active' : 'Pending'}}</td>
                    <td style="text-align: center;">
                        @if($product->status == 1)
                            <a href="{{ url('/active/product/'.$product->id) }}" class="btn btn-success btn-sm">Active</a>
                        @else
                            <a href="{{ url('/pending/product/'.$product->id) }}" class="btn btn-primary btn-sm">Pending</a>
                        @endif
                        <a href="{{ url('/delete/product/'.$product->id) }}" onclick="return confirm('Are You Sure Delete This')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    </script>
@endsection
