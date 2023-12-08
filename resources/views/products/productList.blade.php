@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0">All Products</h5>
                        <p class="text-sm mb-0">
                            This is the list of all products available in the shop
                        </p>
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                            <a href="/admin/productAdd" class="btn bg-gradient-primary btn-sm mb-0"
                                target="_blank">+&nbsp; New Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-container">
                            <table class="table table-flush dataTable-table" id="products-list">
                                <thead class="thead-light">
                                    <tr>
                                        <th data-sortable="" style="width: 34.3633%;"><a href="#"
                                                class="dataTable-sorter">Product</a></th>
                                        <th data-sortable="" style="width: 8.42697%;"><a href="#"
                                                class="dataTable-sorter">Price</a></th>
                                        <th data-sortable="" style="width: 11.1423%;"><a href="#"
                                                class="dataTable-sorter">Description</a></th>
                                        <th data-sortable="" style="width: 9.17603%;"><a href="#"
                                                class="dataTable-sorter">Quantity</a></th>
                                        <th data-sortable="" style="width: 12.7341%;"><a href="#"
                                                class="dataTable-sorter">Status</a></th>
                                        <th data-sortable="" style="width: 13.2022%;"><a href="#"
                                                class="dataTable-sorter">Action</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check my-auto">
                                                    <input class="form-check-input" type="checkbox" id="customCheck1"
                                                        checked="">
                                                </div>
                                                <img class="w-15 ms-3" src="{{ asset('storage/' . $item->image_path) }}" alt="hoodie">
                                                <h6 class="ms-3 my-auto">{{ $item->name }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-sm">
                                            {{ $item->price }}
                                        </td>
                                        <td class="text-sm">
                                            {{ $item->description }}
                                        </td>
                                        <td class="text-sm">
                                            {{ $item->stock }}
                                        </td>
                                        <td class="text-sm">
                                            {{ $item->status == 1 ? 'True' : 'False' }}
                                        </td>
                                        <td class="text-sm">
                                            <a href="/admin/productEdit/{{ $item->id}}" class="btn bg-gradient-primary btn-sm mb-0"
                                                target="_blank">&nbsp; Update Product</a>
                                            <a href="/admin/productDelete/{{ $item->id}}" class="btn bg-gradient-primary btn-sm mb-0"
                                                >&nbsp; Delete Product</a>

                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck1"
                                                            checked="">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/adidas-hoodie.jpg"
                                                        alt="hoodie">
                                                    <h6 class="ms-3 my-auto">BKLGO Full Zip Hoodie</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Clothing</td>
                                            <td class="text-sm">$1,321</td>
                                            <td class="text-sm">243598234</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck2"
                                                            checked="">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/macbook-pro.jpg"
                                                        alt="mac">
                                                    <h6 class="ms-3 my-auto">MacBook Pro</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Electronics</td>
                                            <td class="text-sm">$1,869</td>
                                            <td class="text-sm">877712</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck3">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/metro-chair.jpg"
                                                        alt="metro-chair">
                                                    <h6 class="ms-3 my-auto">Metro Bar Stool</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$99</td>
                                            <td class="text-sm">0134729</td>
                                            <td class="text-sm">978</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck10">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/alchimia-chair.jpg"
                                                        alt="alchimia">
                                                    <h6 class="ms-3 my-auto">Alchimia Chair</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$2,999</td>
                                            <td class="text-sm">113213</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck5">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/fendi-coat.jpg"
                                                        alt="fendi">
                                                    <h6 class="ms-3 my-auto">Fendi Gradient Coat</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Clothing</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck6">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/off-white-jacket.jpg"
                                                        alt="off_white">
                                                    <h6 class="ms-3 my-auto">Off White Cotton Bomber</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Clothing</td>
                                            <td class="text-sm">$1,869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck7"
                                                            checked="">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/yohji-yamamoto.jpg"
                                                        alt="yohji">
                                                    <h6 class="ms-3 my-auto">Y-3 Yohji Yamamoto</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Shoes</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">In Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection