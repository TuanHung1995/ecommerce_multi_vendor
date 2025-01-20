@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="thumb_image">Image</label>
                                    <input type="file" name="thumb_image" id="thumb_image" class="form-control"
                                        value="{{ old('thumb_image') }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="category" class="form-control main-category" id="">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Sub Category</label>
                                            <select name="sub_category" class="form-control sub-category" id="">
                                                <option value=0"">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Child Category</label>
                                            <select name="child_category" class="form-control child-category" id="">
                                                <option value="0">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Brand</label>
                                    <select name="brand" class="form-control" id="">
                                        <option value="">Select</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control"
                                        value="{{ old('sku') }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" name="price" id="price" class="form-control"
                                        value="{{ old('price') }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Offer Price</label>
                                    <input type="text" name="offer_price" id="offer_price" class="form-control"
                                        value="{{ old('offer_price') }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Offer Start Date</label>
                                            <input type="text" name="offer_start_date" id="offer_start_date"
                                                class="form-control datepicker" value="{{ old('offer_start_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Offer End Date</label>
                                            <input type="text" name="offer_end_date" id="offer_end_date"
                                                class="form-control datepicker" value="{{ old('offer_end_date') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Stock Quantity</label>
                                    <input type="number" min="0" name="qty" id="qty"
                                        class="form-control" value="{{ old('qty') }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Video Link</label>
                                    <input type="text" name="video_link" id="video_link" class="form-control"
                                        value="{{ old('video_link') }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Short Description</label>
                                    <textarea name="short_description" id="short_description" class="form-control"
                                        value="{{ old('short_description') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Long Description</label>
                                    <textarea name="long_description" id="long_description" class="form-control summernote"
                                        value="{{ old('long_description') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Product Type</label>
                                    <select name="product_type" class="form-control" id=""
                                        value="{{ old('product_type') }}">
                                        <option value="0">Select</option>
                                        <option value="new_arrival">New Arrival</option>
                                        <option value="featured_product">Featured</option>
                                        <option value="top_product">Top Product</option>
                                        <option value="best_product">Best Product</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Seo Title</label>
                                    <input type="text" name="seo_title" id="seo_title" class="form-control"
                                        value="{{ old('seo_title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Seo Description</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" value="{{ old('seo_description') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control" id=""
                                        value="{{ old('status') }}">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.main-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.product.get-subcategories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('.sub-category').html('<option value="0">Select</option>');
                        $.each(data, function(i, item) {
                            $('.sub-category').append(
                                `<option value="${item.id}">${item.name}</option>`);
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    }
                })
            });
            // Get child categories
            $('body').on('change', '.sub-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.product.get-child-categories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('.child-category').html('<option value="0">Select</option>');
                        $.each(data, function(i, item) {
                            $('.child-category').append(
                                `<option value="${item.id}">${item.name}</option>`);
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    }
                })
            });
        });
    </script>
@endpush
