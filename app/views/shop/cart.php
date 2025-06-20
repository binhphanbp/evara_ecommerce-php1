<!--=============== MAIN ===============-->
<main class="main">
    <!--=============== BREADCRUMB ===============-->
    <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
            <li><a href="index.html" class="breadcrumb__link">Home</a></li>
            <li><span class="breadcrumb__link"></span></li>
            <li><span class="breadcrumb__link">Shop</span></li>
            <li><span class="breadcrumb__link"></span></li>
            <li><span class="breadcrumb__link">Cart</span></li>
        </ul>
    </section>

    <!--=============== CART ===============-->
    <section class="cart section--lg container">
        <div class="table__container">
            <table class="table">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <div class="cart__actions">
            <a href="#" class="btn flex btn__md" onclick="cart.render()">
                <i class="fi-rs-shuffle"></i> Update Cart
            </a>
            <a href="index.html" class="btn flex btn__md">
                <i class="fi-rs-shopping-bag"></i> Continue Shopping
            </a>
        </div>

        <div class="divider">
            <i class="fi fi-rs-fingerprint"></i>
        </div>

        <div class="cart__group grid">
            <div>
                <div class="cart__shipping">
                    <h3 class="section__title">Calculate Shipping</h3>
                    <form action="" class="form grid">
                        <input
                                type="text"
                                class="form__input"
                                placeholder="State / Country"
                        />
                        <div class="form__group grid">
                            <input type="text" class="form__input" placeholder="City"/>
                            <input
                                    type="text"
                                    class="form__input"
                                    placeholder="PostCode"
                            />
                        </div>
                        <div class="form__btn">
                            <button class="btn flex btn--sm">
                                <i class="fi-rs-shuffle"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
                <div class="cart__coupon">
                    <h3 class="section__title">Apply Coupon</h3>
                    <form action="" class="coupon__form form grid">
                        <div class="form__group grid">
                            <input
                                    type="text"
                                    class="form__input"
                                    placeholder="Enter Your Coupon"
                            />
                            <div class="form__btn">
                                <button class="btn flex btn--sm">
                                    <i class="fi-rs-label"></i> Apply
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="cart__total">
                <h3 class="section__title">Cart Totals</h3>
                <table class="cart__total-table">
                    <tr>
                        <td><span class="cart__total-title">Cart Subtotal</span></td>
                        <td><span class="cart__total-price">$0.00</span></td>
                    </tr>
                    <tr>
                        <td><span class="cart__total-title">Shipping</span></td>
                        <td><span class="cart__total-price">$10.00</span></td>
                    </tr>
                    <tr>
                        <td><span class="cart__total-title">Total</span></td>
                        <td><span class="cart__total-price">$0.00</span></td>
                    </tr>
                </table>
                <a href="checkout.html" class="btn flex btn--md">
                    <i class="fi fi-rs-box-alt"></i> Proceed To Checkout
                </a>
            </div>
        </div>
    </section>

