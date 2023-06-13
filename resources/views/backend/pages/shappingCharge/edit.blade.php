@extends('backend.layouts.master')
@section('admin_title', 'Edit Coupon')
@push('admin_style')
@endpush

@section('admin_content')
    @php
        use App\Models\ChippingCharge;
        $shipping_charge = ChippingCharge::findOrFail(1);
    @endphp
    <div class="row">
        <div class="col-md-12">

        </div>
        <div class="col-md-6 m-auto">
            <h2>Shipping Charge</h2>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('shapping.charge.update', $shipping_charge->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <input type="hidden" name="shipping_charge_id" value="{{ $shipping_charge->id }}"> --}}
                        <div class="mb-3">
                            <label for="in_side_dhaka" class="form-label">In Side Dhaka</label>
                            <input value="{{ $shipping_charge->in_side_dhaka }}" type="text"
                                class="form-control @error('in_side_dhaka')
                                is-invalid
                            @enderror"
                                name="in_side_dhaka" id="in_side_dhaka" placeholder="Enter shipping charge">
                            @error('in_side_dhaka')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="out_side_dhaka" class="form-label">Out Side Dhaka</label>
                            <input type="number" value="{{ $shipping_charge->out_side_dhaka }}"
                                class="form-control @error('out_side_dhaka')
                                is-invalid
                            @enderror"
                                name="out_side_dhaka" id="out_side_dhaka" placeholder="Enter shapping chage">
                            @error('out_side_dhaka')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
@endpush
