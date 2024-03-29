@extends('backend.layouts.master')
@section('admin_title', 'Create Testimonial')
@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('admin_content')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex">
                <a class="btn btn-primary" href="{{ route('testimonial.index') }}">
                    <i class="fa fa-backward" aria-hidden="true"></i>
                    Slider List</a>
            </div>
        </div>
        <div class="col-md-6 m-auto">
            <h2>Create Slider</h2>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Slider Name</label>
                            <input type="text"
                                class="form-control @error('client_name')
                                is-invalid
                            @enderror"
                                name="client_name" id="client_name" placeholder="Enter Slider Name">
                            @error('client_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="client_designation" class="form-label">Client Designation</label>
                            <input type="text" class="form-control @error('client_designation')
                                is-invalid
                            @enderror" name="client_designation" id="client_designation" placeholder="Enter a Client Designation">
                            @error('client_designation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_message" class="form-label">Client Message</label>
                            <textarea class="form-control" name="client_message" id="client_message" cols="30" rows="5"></textarea>
                            @error('client_message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="client_image" class="form-label">Client Image</label>
                            <input type="file" name="client_image" class="dropify" />
                            @error('client_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="is_active"
                                class="form-check-input @error('is_active')
                                is-invalid
                            @enderror"
                                role="switch" id="is_active" checked>
                            <label for="is_active" class="form-check-label">Active or Inactive</label>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Store</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drag a file here or click',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush
