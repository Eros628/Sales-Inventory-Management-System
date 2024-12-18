@extends('layout')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="order3">
        <div class="frame-div">
            <div class="logo3">
                <img class="logo-icon3" alt="" src="{{ asset('/pics/logo2x.png')}}" />
                <div class="thebikeplace3">TheBikePlace</div>
            </div>
            <div class="dashboard-parent1">
                <button class="dashboard3" id="order">
                    <img class="vector-icon6" alt="" src="{{ asset('/pics/vector.svg') }}" />
                    <div class="order4">Order</div>
                </button>
                <button class="inventory8" id="inventory">
                    <img class="vector-icon7" alt="" src="{{ asset('/pics/vector.svg') }}" />
                    <div class="order4">Inventory</div>
                </button>
                <button class="inventory8" id="logout">
                    <div class="order4">Logout</div>
                </button>
            </div>
        </div>
        <div class="frame-parent1">
            <div class="orders-parent">
                <b class="orders">Inventory</b>
                <button class="cn-button" id="cNButton">
                    <div class="create-new">Add Item</div>
                </button>
            </div>
            <div class="vector-parent">
                <div class="product-summary1">Product Summary</div>
            
                <table border="1">
                    <tr>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock Quantity</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock_quantity}}</td>
                            <td> 
                              <a href='/inventoryEdit/{{$product->id}}' class="btn btn-success">Edit</a>
                              <a href='/inventoryDelete/{{$product->id}}' class="btn btn-danger">Delete</a>
                           </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div id="framePopup" class="popup-overlay" style="display: none">
        <div class="frame-parent">
            <div class="create-new-order-parent">
                <b class="create-new-order">Add Items</b>
                <form action="/inventory" method="POST" class="ids">
                  @csrf
                    <div class="orderid">
                        <div class="create-new-order">Product Name</div>
                        <input id="productName" name="product_name" class="orderid-child" type="text" />
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Category</div>
                        <input id="category" name="category" class="orderid-child" type="text" />
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Price</div>
                        <input id="price" name="price" class="orderid-child" type="number" />
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Stock Quantity</div>
                        <input id="addedOn" name="stock_quantity" class="orderid-child" type="number" />
                    </div>
                    <button class="button" id="createButton" type="submit">
                        <div class="create">Create</div>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        var cNButton = document.getElementById("cNButton");
        if (cNButton) {
            cNButton.addEventListener("click", function () {
                var popup = document.getElementById("framePopup");
                if (!popup) return;
                var popupStyle = popup.style;
                if (popupStyle) {
                    popupStyle.display = "flex";
                    popupStyle.zIndex = 100;
                    popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
                    popupStyle.alignItems = "center";
                    popupStyle.justifyContent = "center";
                }
                popup.setAttribute("closable", "");

                var onClick =
                    popup.onClick ||
                    function (e) {
                        if (e.target === popup && popup.hasAttribute("closable")) {
                            popupStyle.display = "none";
                        }
                    };
                popup.addEventListener("click", onClick);
            });
        }

        var inventory = document.getElementById("inventory");
        if (inventory) {
            inventory.addEventListener("click", function (e) {
                window.location.href = "/inventory";
            });
        }

        var order = document.getElementById("order");
        if (order) {
            order.addEventListener("click", function (e) {
                window.location.href = "/order";
            });
        }

        var logout = document.getElementById("logout");
        if (logout) {
            logout.addEventListener("click", function (e) {
                window.location.href = "/";
            });
        }

        setTimeout(function() {
        var flashMessage = document.querySelector('.alert-success');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 2000);

       
    </script>
@endsection
