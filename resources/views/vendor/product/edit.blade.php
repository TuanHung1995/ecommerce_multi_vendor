@extends('vendor.layouts.master')

@section('content')
    <!--=============================
                                                            DASHBOARD START
                                                          ==============================-->
    <section id="ecom__dashboard">
        <div class="container-fluid">
            @include('vendor.layouts.sidebar')

            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="far fa-user"></i> Products</h3>
                        <div class="ecom__dashboard_profile">
                            <div class="ecom__dash_pro_area">

                                <form action="{{ route('vendor.products.update', $product->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group ecom__input">
                                        <label>Preview</label>
                                        <br>
                                        <img src="{{ asset($product->thumb_image) }}" style="width:200px" alt="">
                                    </div>
                                    <div class="form-group ecom__input">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                    <div class="form-group ecom__input">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $product->name }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ecom__input">
                                                <label for="inputState">Category</label>
                                                <select id="inputState" class="form-control main-category" name="category">
                                                    <option value="0">Select</option>
                                                    @foreach ($categories as $category)
                                                        <option
                                                            {{ $category->id == $product->category_id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ecom__input">
                                                <label for="inputState">Sub Category</label>
                                                <select id="inputState" class="form-control sub-category"
                                                    name="sub_category">
                                                    <option value="">Select</option>
                                                    @foreach ($subCategories as $subCategory)
                                                        <option
                                                            {{ $subCategory->id == $product->sub_category_id ? 'selected' : '' }}
                                                            value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ecom__input">
                                                <label for="inputState">Child Category</label>
                                                <select id="inputState" class="form-control child-category"
                                                    name="child_category">
                                                    <option value="">Select</option>
                                                    @foreach ($childCategories as $childCategory)
                                                        <option
                                                            {{ $childCategory->id == $product->child_category_id ? 'selected' : '' }}
                                                            value="{{ $childCategory->id }}">{{ $childCategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Brand</label>
                                        <select name="brand" class="form-control" id="">
                                            <option value="">Select</option>
                                            @foreach ($brands as $brand)
                                                <option {{ $product->brand_id == $brand->id ? 'selected' : '' }}
                                                    value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">SKU</label>
                                        <input type="text" name="sku" id="sku" class="form-control"
                                            value="{{ $product->sku }}">
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Price</label>
                                        <input type="text" name="price" id="price" class="form-control"
                                            value="{{ $product->price }}">
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Offer Price</label>
                                        <input type="text" name="offer_price" id="offer_price" class="form-control"
                                            value="{{ $product->offer_price }}">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ecom__input">
                                                <label for="">Offer Start Date</label>
                                                <input type="text" name="offer_start_date" id="offer_start_date"
                                                    class="form-control datepicker"
                                                    value="{{ $product->offer_start_date }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ecom__input">
                                                <label for="">Offer End Date</label>
                                                <input type="text" name="offer_end_date" id="offer_end_date"
                                                    class="form-control datepicker" value="{{ $product->offer_end_date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Stock Quantity</label>
                                        <input type="number" min="0" name="qty" id="qty"
                                            class="form-control" value="{{ $product->qty }}">
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Video Link</label>
                                        <input type="text" name="video_link" id="video_link" class="form-control"
                                            value="{{ $product->video_link }}">
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Short Description</label>
                                        <textarea name="short_description" id="short_description" class="form-control">{!! $product->short_description !!}</textarea>
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Long Description</label>
                                        <textarea name="long_description" id="long_description" class="form-control summernote">{!! $product->long_description !!}</textarea>
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Product Type</label>
                                        <select name="product_type" class="form-control" id="">
                                            <option {{ $product->product_type == '0' ? 'selected' : '' }} value="0">
                                                Select</option>
                                            <option {{ $product->product_type == 'new_arrival' ? 'selected' : '' }}
                                                value="new_arrival">New Arrival</option>
                                            <option {{ $product->product_type == 'featured_product' ? 'selected' : '' }}
                                                value="featured_product">Featured</option>
                                            <option {{ $product->product_type == 'top_product' ? 'selected' : '' }}
                                                value="top_product">Top Product</option>
                                            <option {{ $product->product_type == 'best_product' ? 'selected' : '' }}
                                                value="best_product">Best Product</option>
                                        </select>
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Seo Title</label>
                                        <input type="text" name="seo_title" id="seo_title" class="form-control"
                                            value="{{ $product->seo_title }}">
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Seo Description</label>
                                        <textarea name="seo_description" id="seo_description" class="form-control">{!! $product->seo_description !!}</textarea>
                                    </div>

                                    <div class="form-group ecom__input">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option {{ $product->status == 1 ? 'selected' : '' }} value="1">Active
                                            </option>
                                            <option {{ $product->status == 0 ? 'selected' : '' }} value="0">Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                            DASHBOARD START
                                                          ==============================-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.main-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('vendor.product.get-subcategories') }}",
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
                    url: "{{ route('vendor.product.get-child-categories') }}",
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
