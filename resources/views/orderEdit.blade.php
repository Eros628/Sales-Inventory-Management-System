@extends('layout')
@section('content')
    <div class="order3">
        <div class="frame-div">
            <div class="logo3">
                <img class="logo-icon3" alt="" src="{{ asset('/pics/logo2x.png') }}" />
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
                <b class="orders">Orders</b>
                <button class="cn-button" id="cNButton">
                    <div class="create-new">Create New</div>
                </button>
            </div>
            <div class="vector-parent">
                <div class="product-summary1">Product Summary</div>
            
                <table border="1" style="width: 100%;">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                
                    @foreach($older as $old) 
                        <tr>
                           <td> {{$old->id}} </td>
                           <td> {{$old->name}} </td>
                           <td> {{$old->product_name}} </td>
                           <td> {{$old->quantity}} </td>
                           <td> 
                              <a href='/orderedit/{{$old->id}}' class="btn btn-success">Edit</a>
                              <a href='/delete/{{$old->id}}' class="btn btn-danger">Delete</a>
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
                <b class="create-new-order" >Edit Order</b>
                <form action="/orderUpdate/{{$orders->id}}" method="POST" class="ids">
                    @csrf
        
                    <div class="orderid">
                        <div class="create-new-order">Customer Name</div>
                        <input id="customerID" name="name" value="{{$orders->name}}" class="orderid-child" type="text" required/>
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Product Name</div>
                        <input id="orderDate" name="product_name" value="{{$orders->product_name}}" class="orderid-child" list="products"  type="text"required />
                        <datalist id="products"> 
                    @foreach($products as $product)
                         @if ($product->stock_quantity > 0)
                          <option value= "{{ $product->product_name }}"> (Stock: {{ $product->stock_quantity }})</option>
                         @endif
                    @endforeach

                        </datalist>
                    </div>
                    <div class="orderid">
                        <div class="create-new-order">Quantity</div>
                        <input id="quantity" name="quantity" value="{{$orders->quantity}}" class="orderid-child" pattern="[1-9][0-9]*" type="number" required/>
        
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

        var productInput = document.getElementById('orderDate');
        var datalist = document.getElementById('products').getElementsByTagName('option');

        productInput.addEventListener('input', function() {
            var inputValue = this.value;
            var valid = false;
            // Check if input value matches any option value in datalist
            for (var i = 0; i < datalist.length; i++) {
                if (inputValue === datalist[i].value) {
                    valid = true;
                    break;
                }
            }
            // If input value is not valid, reset input
            if (!valid) {
                this.value = '';
                alert('Please select a product from the list.');
            }
        });

</script>
@endsection

