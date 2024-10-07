<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>

    <div class="cart-container">
        <h2>Your Cart (4 items)</h2>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="item-info">
                            <img src="pi_pizza_oven.jpg" alt="Pi Pizza Oven">
                            <div class="item-details">
                                <p class="item-title">Pi Pizza Oven</p>
                                <p class="item-shipping">Estimated Ship Date: June 6th</p>
                                <p class="item-sub">Fuel Source: Wood Only</p>
                                <a href="#" class="change-item">Change</a>
                            </div>
                        </div>
                    </td>
                    <td>$469.99</td>
                    <td>
                        <div class="quantity">
                            <button class="decrease" disabled>-</button>
                            <input type="text" value="1" class="quantity-input" readonly>
                            <button class="increase" disabled>+</button>
                        </div>
                    </td>
                    <td class="item-total">$469.99</td>
                </tr>

                <tr>
                    <td>
                        <div class="item-info">
                            <img src="grill_bundle.jpg" alt="Grill Ultimate Bundle">
                            <div class="item-details">
                                <p class="item-title">Grill Ultimate Bundle</p>
                                <p class="item-protection">Add accident protection for $29.99</p>
                            </div>
                        </div>
                    </td>
                    <td>$549.99</td>
                    <td>
                        <div class="quantity">
                            <button class="decrease" disabled>-</button>
                            <input type="text" value="1" class="quantity-input" readonly>
                            <button class="increase" disabled>+</button>
                        </div>
                    </td>
                    <td class="item-total">$549.99</td>
                </tr>

                <tr>
                    <td>
                        <div class="item-info">
                            <img src="starters.jpg" alt="Starters (4 pack)">
                            <div class="item-details">
                                <p class="item-title">Starters (4 pack)</p>
                            </div>
                        </div>
                    </td>
                    <td>$0.00</td>
                    <td>
                        <div class="quantity">
                            <input type="text" value="1" class="quantity-input" readonly disabled>
                        </div>
                    </td>
                    <td class="item-total">$0.00</td>
                </tr>

                <tr>
                    <td>
                        <div class="item-info">
                            <img src="charcoal_pack.jpg" alt="Charcoal Grill Pack">
                            <div class="item-details">
                                <p class="item-title">Charcoal Grill Pack</p>
                            </div>
                        </div>
                    </td>
                    <td>$0.00</td>
                    <td>
                        <div class="quantity">
                            <input type="text" value="1" class="quantity-input" readonly disabled>
                        </div>
                    </td>
                    <td class="item-total">$0.00</td>
                </tr>
            </tbody>
        </table>

        <div class="cart-summary">
            <p>Subtotal: <span>$1,019.98</span></p>
            <p>Sales Tax: <span>$102.00</span></p>
            <p>Coupon Code: <a href="#">Add Coupon</a></p>
            <p class="grand-total">Grand total: <span>$1,121.98</span></p>
            <button class="checkout-button">Check out</button>
        </div>

    </div>

</body>
</html>
