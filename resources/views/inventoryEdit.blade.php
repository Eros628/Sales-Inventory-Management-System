@extends('layout')

@section('content')


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
                    <div class="create-new">Add New Item</div>
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
                    @foreach ($old as $old_record)
                        <tr>
                            <td>{{$old_record->product_name}}</td>
                            <td>{{$old_record->category}}</td>
                            <td>{{$old_record->price}}</td>
                            <td>{{$old_record->stock_quantity}}</td>
                            <td> 
                              <a href='/inventoryEdit/{{$old_record->id}}' class="btn btn-success">Edit</a>
                              <a href='/inventoryDelete/{{$old_record->id}}' class="btn btn-danger">Delete</a>
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
                <b class="create-new-order">Edit Inventory</b>
                <form action="/inventoryEdit/{{$new->id}}" method="POST" class="ids">
                  @csrf
                    <div class="orderid">
                        <div class="create-new-order">Product Name</div>
                        <input id="productName" name="product_name" value="{{$new->product_name}}" class="orderid-child" type="text" />
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Category</div>
                        <input id="category" name="category" value="{{$new->category}}"class="orderid-child" type="text" />
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Price</div>
                        <input id="price" name="price" value="{{$new->price}}" class="orderid-child" type="number" />
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Stock Quantity</div>
                        <input id="addedOn" name="stock_quantity" value="{{$new->stock_quantity}}"class="orderid-child" type="number" />
                    </div>
                    <button class="button" id="createButton" type="submit">
                        <div class="create">Update</div>
                    </button>
                </form>
            </div>
        </div>
    </div>

 <script>
         document.addEventListener("DOMContentLoaded", function () {
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

            popup.addEventListener("click", function (e) {
                if (e.target === popup && popup.hasAttribute("closable")) {
                    popupStyle.display = "none";
                }
            });
        });

        var inventory = document.getElementById("inventory");
        if (inventory) {
            inventory.addEventListener("click", function (e) {
                window.location.href = "/inventory";
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

    </script>
@endsection

