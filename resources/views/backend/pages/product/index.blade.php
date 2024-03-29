@extends('backend.layouts.master')
@section('admin_title', 'Product List')

@push('admin_style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
@endpush

@section('admin_content')
    <div class="row">
        <h2>Product List</h2>
        <div class="col-md-12 pb-3">
            <div class="d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus-circle"></i>
                    Add New Product
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <table id="dataTable" class="display">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Offer Price</th>
                        <th>Stock/Alert</th>
                        <th>Rating</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $products->firstItem() + $loop->index }}</td>
                            <td>{{ $product->category->title }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                <img class="w-20 h-20" src="{{ asset('uploads/product') }}/{{ $product->product_image }}"
                                    alt="">
                            </td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_offer_price }}</td>
                            <td>
                                <span class="badge bg-success">{{ $product->product_stock }}</span>/
                                <span class="badge bg-info">{{ $product->alert_quentity }}</span>
                            </td>
                            <td>{{ $product->product_rating }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        setting
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('products.edit', $product->product_slug) }}">
                                                <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('products.destroy', $product->product_slug) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item show_confirm">
                                                    <i class="fa fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('admin_script')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                pagingType: 'numbers',
            });
        });

        $('.show_confirm').click(function(event) {
            let form = $(this).closest('form')
            event.preventDefault()

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit()
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
@endpush
