@extends('layout/front/masterCategorie')
@section('content')
    <div id="main" class="site-main full-width box-page">
        <div class="main_inner">
            <div class="main-content-inner full-width">
                <div id="main-content" class="main-content full-width box-page ">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            @if (session()->has('message'))
                                <div class="alert alert-info">{{ session('message') }}</div>
                            @endif

                            <article id="post-10" class="post-10 page type-page status-publish hentry">
                                <div class="entry-content">
                                    @if (session()->has('panier'))
                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>

                                            <table
                                                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="product-remove">
                                                            <span class="screen-reader-text">Remove item</span>
                                                        </th>
                                                        <th class="product-thumbnail">
                                                            <span class="screen-reader-text">Thumbnail image</span>
                                                        </th>
                                                        <th class="product-name">Chaussure</th>
                                                        <th class="product-price">Prix</th>
                                                        <th class="product-quantity">Quantité</th>
                                                        <th class="product-subtotal">Sous Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $total = 0 @endphp

                                                    @foreach (session('panier') as $key => $item)
                                                        @php $total += $item['prix'] * $item['quantite'] @endphp

                                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                                            <td>{{ $loop->iteration }}</td>

                                                            <td class="product-remove">
                                                                <a href="{{ route('panier.remove', $key) }}" class="remove"
                                                                    aria-label="Remove this item" data-product_id="11894"
                                                                    data-product_sku="VMB102">×</a>
                                                            </td>

                                                            <td class="product-thumbnail">
                                                                <a href="{{ route('chaussure.show', $key) }}"><img
                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/05.jpg"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="" loading="lazy" width="967"
                                                                        height="1000"></a>
                                                            </td>

                                                            <td class="product-name" data-title="Product">
                                                                <strong>
                                                                    <a href="{{ route('chaussure.show', $key) }}"
                                                                        title="Afficher le produit">
                                                                        {{ $item['nom_chaussure'] }}
                                                                    </a>
                                                                </strong>
                                                            </td>

                                                            <td class="product-price" data-title="Price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>{{ $item['prix'] }}Fcfa</bdi>
                                                                </span>
                                                            </td>

                                                            <td class="product-quantity" data-title="Quantity">
                                                                <form method="POST"
                                                                    action="{{ route('panier.add', $key) }}"
                                                                    class="form-inline d-inline-block">

                                                                    {{ csrf_field() }}
                                                                    <div class="quantity">

                                                                        <label class="screen-reader-text"
                                                                            for="quantite">Quantité</label>
                                                                        <input class="quantity-btn minus" type="button"
                                                                            value="-"
                                                                            style="user-select: auto !important;">
                                                                        <input type="number" step="1" min="0"
                                                                            max="699" name="quantite"
                                                                            value="{{ $item['quantite'] }}" title="Qty"
                                                                            placeholder="Quantité" inputmode="numeric">
                                                                        <input class="quantity-btn plus" type="button"
                                                                            value="+"
                                                                            style="user-select: auto !important;">

                                                                    </div>
                                                                    <button type="submit" class="button" name="update_cart"
                                                                        value="Update cart"
                                                                        style="user-select: auto !important;">
                                                                        Mettre à jour le panier
                                                                    </button>
                                                                </form>

                                                            </td>

                                                            <td class="product-subtotal" data-title="Subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>
                                                                        {{ $item['prix'] * $item['quantite'] }} Fcfa
                                                                    </bdi>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>


                                            <div class="cart-collaterals">
                                                <div class="cart_totals ">


                                                    <h2>Cart totals</h2>

                                                    <table class="shop_table shop_table_responsive" cellspacing="0">

                                                        <tbody>

                                                            <tr class="cart-subtotal">
                                                                <th>Sous total</th>
                                                                <td data-title="Subtotal"><span
                                                                        class="woocommerce-Price-amount amount"><bdi>{{ $total }}</bdi></span>
                                                                </td>
                                                            </tr>




                                                            <tr class="woocommerce-shipping-totals shipping">
                                                                <th>Transport</th>
                                                                <td data-title="Shipping">
                                                                    <ul id="shipping_method"
                                                                        class="woocommerce-shipping-methods">
                                                                        <li>
                                                                            <label for="shipping_method_0_flat_rate1">
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount">5.000
                                                                                    Fcfa</bdi></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>

                                                                </td>
                                                            </tr>






                                                            <tr class="order-total">
                                                                <th>Total</th>
                                                                <td data-title="Total"><strong><span
                                                                            class="woocommerce-Price-amount amount">{{ $total + 5000 }}
                                                                            F cfa</span></strong>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>

                                                    <div class="wc-proceed-to-checkout">
                                                        <a href="{{ route('commande.precommande') }}"
                                                            class="checkout-button button alt wc-forward">
                                                            Commander
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="cross-sells">
                                                <h2>You may be interested in…</h2>

                                                <ul class="products columns-4 owl-carousel owl-theme"
                                                    style="opacity: 1; display: block;">


                                                    <div class="owl-wrapper-outer">
                                                        <div class="owl-wrapper"
                                                            style="width: 4032px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                            <div class="owl-item" style="width: 288px;">
                                                                <li
                                                                    class="post-10361 product type-product status-publish has-post-thumbnail product_cat-lita product_cat-hiking-boots product_cat-laced-bootie product_cat-chuck-taylor product_cat-steel-toe-boots product_cat-running-shoes product_tag-constituto product_tag-converse product_brand-quality product_brand-retros first instock featured shipping-taxable purchasable product-type-simple">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/low-top-sneaker-shoe/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/10.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/15.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-10361  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="10361"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:10361,&quot;parent_product_id&quot;:10361,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=10361&amp;_wpnonce=1144ac2caa"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="10361"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="10361"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                                    <span>Add to
                                                                                                        wishlist</span>
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=10361"
                                                                                                class="compare button"
                                                                                                data-product_id="10361"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="10361">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Not yet rated"><span
                                                                                            style="width:0%"><strong
                                                                                                class="rating">0</strong>
                                                                                            out
                                                                                            of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/low-top-sneaker-shoe/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(0)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/low-top-sneaker-shoe/">
                                                                                    <h3 class="product-name">Low Top
                                                                                        Sneaker
                                                                                        Shoe</h3>
                                                                                </a>

                                                                                <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>221.00</bdi></span></span>
                                                                                <div class="price-block"></div> <a
                                                                                    href="?add-to-cart=10361"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="10361"
                                                                                    data-product_sku="NOMP1"
                                                                                    aria-label="Add “Low Top Sneaker Shoe” to your cart"
                                                                                    rel="nofollow">Add to cart</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="10361">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item" style="width: 288px;">
                                                                <li
                                                                    class="post-11741 product type-product status-publish has-post-thumbnail product_cat-laced-bootie product_cat-combat-boots product_cat-derby-shoes product_cat-monk-straps product_cat-running-shoes product_cat-climbing-shoes product_tag-augue product_brand-quality product_brand-retros  instock featured shipping-taxable purchasable product-type-simple">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/white-cool-sport-shoe/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/08.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/13.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-11741 exists wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="11741"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:11741,&quot;parent_product_id&quot;:11741,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <!-- BROWSE WISHLIST MESSAGE -->
                                                                                            <div class="yith-wcwl-wishlistexistsbrowse"
                                                                                                data-product-id="11741"
                                                                                                data-original-product-id="11741">
                                                                                                <span class="feedback">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart"></i>
                                                                                                    The product is already
                                                                                                    in
                                                                                                    your wishlist! </span>
                                                                                                <a href="https://demos.coderplace.com/woo/WCM01/WCM01004/wishlist/"
                                                                                                    rel="nofollow"
                                                                                                    data-title="Browse wishlist">
                                                                                                    Browse wishlist </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=11741"
                                                                                                class="compare button"
                                                                                                data-product_id="11741"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="11741">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Not yet rated"><span
                                                                                            style="width:0%"><strong
                                                                                                class="rating">0</strong>
                                                                                            out
                                                                                            of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/white-cool-sport-shoe/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(0)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/white-cool-sport-shoe/">
                                                                                    <h3 class="product-name">White Cool
                                                                                        Sport
                                                                                        Shoe</h3>
                                                                                </a>

                                                                                <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>151.00</bdi></span></span>
                                                                                <div class="price-block"></div> <a
                                                                                    href="?add-to-cart=11741"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="11741"
                                                                                    data-product_sku="MND785"
                                                                                    aria-label="Add “White Cool Sport Shoe” to your cart"
                                                                                    rel="nofollow">Add to cart</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="11741">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item" style="width: 288px;">
                                                                <li
                                                                    class="post-11946 product type-product status-publish has-post-thumbnail product_cat-lita product_cat-hiking-boots product_cat-old-skool product_cat-sneakers product_cat-derby-shoes product_cat-monk-straps product_cat-climbing-shoes product_cat-desert-boots product_cat-ankle-boots product_cat-heels product_tag-lingerie product_brand-premium product_brand-quality product_brand-retros product_brand-studios product_brand-urbans  instock featured shipping-taxable purchasable product-type-simple">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/cool-sport-red-shoe/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/14.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/19.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-11946  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="11946"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:11946,&quot;parent_product_id&quot;:11946,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=11946&amp;_wpnonce=1144ac2caa"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="11946"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="11946"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                                    <span>Add to
                                                                                                        wishlist</span>
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=11946"
                                                                                                class="compare button"
                                                                                                data-product_id="11946"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="11946">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Rated 3.00 out of 5"><span
                                                                                            style="width:60%"><strong
                                                                                                class="rating">3.00</strong>
                                                                                            out of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/cool-sport-red-shoe/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(1)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/cool-sport-red-shoe/">
                                                                                    <h3 class="product-name">Cool Sport Red
                                                                                        Shoe</h3>
                                                                                </a>

                                                                                <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>701.00</bdi></span></span>
                                                                                <div class="price-block"></div> <a
                                                                                    href="?add-to-cart=11946"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="11946"
                                                                                    data-product_sku="CJC789"
                                                                                    aria-label="Add “Cool Sport Red Shoe” to your cart"
                                                                                    rel="nofollow">Add to cart</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="11946">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item active" style="width: 288px;">
                                                                <li
                                                                    class="post-11742 product type-product status-publish has-post-thumbnail product_cat-chuck-taylor product_cat-steel-toe-boots product_cat-climbing-shoes product_tag-audire product_brand-quality product_brand-studios last instock featured shipping-taxable purchasable product-type-simple">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/black-reebo-white-platform-shoes/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/16.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/01.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-11742  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="11742"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:11742,&quot;parent_product_id&quot;:11742,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=11742&amp;_wpnonce=1144ac2caa"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="11742"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="11742"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                                    <span>Add to
                                                                                                        wishlist</span>
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=11742"
                                                                                                class="compare button"
                                                                                                data-product_id="11742"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="11742">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Rated 3.00 out of 5"><span
                                                                                            style="width:60%"><strong
                                                                                                class="rating">3.00</strong>
                                                                                            out of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/black-reebo-white-platform-shoes/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(1)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/black-reebo-white-platform-shoes/">
                                                                                    <h3 class="product-name">Black Reebo
                                                                                        White
                                                                                        Platform Shoes</h3>
                                                                                </a>

                                                                                <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>90.00</bdi></span></span>
                                                                                <div class="price-block"></div> <a
                                                                                    href="?add-to-cart=11742"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="11742"
                                                                                    data-product_sku="DMI410"
                                                                                    aria-label="Add “Black Reebo White Platform Shoes” to your cart"
                                                                                    rel="nofollow">Add to cart</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="11742">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item" style="width: 288px;">
                                                                <li
                                                                    class="post-10357 product type-product status-publish has-post-thumbnail product_cat-old-skool product_cat-combat-boots product_cat-running-shoes product_cat-stilettos product_tag-constituto product_tag-converse product_brand-premium product_brand-quality product_brand-retros product_brand-studios product_brand-urbans product_brand-vintages first instock shipping-taxable purchasable product-type-simple">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/labbin-casual-canvas-fabric/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/02.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/07.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-10357  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="10357"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:10357,&quot;parent_product_id&quot;:10357,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=10357&amp;_wpnonce=1144ac2caa"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="10357"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="10357"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                                    <span>Add to
                                                                                                        wishlist</span>
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=10357"
                                                                                                class="compare button"
                                                                                                data-product_id="10357"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="10357">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Rated 4.00 out of 5"><span
                                                                                            style="width:80%"><strong
                                                                                                class="rating">4.00</strong>
                                                                                            out of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/labbin-casual-canvas-fabric/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(1)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/labbin-casual-canvas-fabric/">
                                                                                    <h3 class="product-name">Labbin Casual
                                                                                        Canvas Fabric</h3>
                                                                                </a>

                                                                                <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>120.00</bdi></span></span>
                                                                                <div class="price-block"></div> <a
                                                                                    href="?add-to-cart=10357"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="10357"
                                                                                    data-product_sku="EHRM52"
                                                                                    aria-label="Add “Labbin Casual Canvas Fabric” to your cart"
                                                                                    rel="nofollow">Add to cart</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="10357">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item" style="width: 288px;">
                                                                <li
                                                                    class="post-10352 product type-product status-publish has-post-thumbnail product_cat-laced-bootie product_cat-climbing-shoes product_cat-desert-boots product_tag-bibendum product_brand-premium product_brand-quality product_brand-retros product_brand-studios  instock shipping-taxable product-type-grouped">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/fil-white-sneaker/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/17.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/02.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-10352  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="10352"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:10352,&quot;parent_product_id&quot;:10352,&quot;product_type&quot;:&quot;grouped&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=10352&amp;_wpnonce=1144ac2caa"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="10352"
                                                                                                    data-product-type="grouped"
                                                                                                    data-original-product-id="10352"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                                    <span>Add to
                                                                                                        wishlist</span>
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=10352"
                                                                                                class="compare button"
                                                                                                data-product_id="10352"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="10352">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Not yet rated"><span
                                                                                            style="width:0%"><strong
                                                                                                class="rating">0</strong>
                                                                                            out
                                                                                            of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/fil-white-sneaker/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(0)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/fil-white-sneaker/">
                                                                                    <h3 class="product-name">Fil White
                                                                                        Sneaker
                                                                                    </h3>
                                                                                </a>

                                                                                <div class="price-block"></div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/fil-white-sneaker/"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_grouped"
                                                                                    data-product_id="10352"
                                                                                    data-product_sku="QND896"
                                                                                    aria-label="View products in the “Fil White Sneaker” group"
                                                                                    rel="nofollow">View products</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="10352">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                            <div class="owl-item" style="width: 288px;">
                                                                <li
                                                                    class="post-10359 product type-product status-publish has-post-thumbnail product_cat-lita product_cat-hiking-boots product_cat-laced-bootie product_cat-combat-boots product_cat-running-shoes product_cat-ankle-boots product_tag-converse product_brand-premium product_brand-quality product_brand-retros product_brand-studios product_brand-urbans product_brand-vintages  instock featured shipping-taxable purchasable product-type-simple">
                                                                    <div class="container-inner">
                                                                        <div class="product-block-inner">
                                                                            <div class="image-block"><a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/black-low-top-sneakers-shoe/">
                                                                                    <img src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/09.jpg"
                                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"><img
                                                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/14.jpg"
                                                                                        class="secondary-image attachment-shop-catalog"
                                                                                        alt="" loading="lazy"
                                                                                        width="967" height="1000"></a>
                                                                                <div class="product-button-hover">
                                                                                    <div
                                                                                        class="product-button-hover-inner">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-10359  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="10359"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:10359,&quot;parent_product_id&quot;:10359,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=10359&amp;_wpnonce=1144ac2caa"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-product-id="10359"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="10359"
                                                                                                    data-title="Add to wishlist"
                                                                                                    rel="nofollow">
                                                                                                    <i
                                                                                                        class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                                    <span>Add to
                                                                                                        wishlist</span>
                                                                                                </a>
                                                                                            </div>

                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                        <div
                                                                                            class="woocommerce product compare-button">
                                                                                            <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=10359"
                                                                                                class="compare button"
                                                                                                data-product_id="10359"
                                                                                                rel="nofollow">Compare</a>
                                                                                        </div><a href="#"
                                                                                            class="button yith-wcqv-button"
                                                                                            data-product_id="10359">Quick
                                                                                            View</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-detail-wrapper">
                                                                                <div class="product-review-block">
                                                                                    <div class="star-rating"
                                                                                        title="Rated 4.00 out of 5"><span
                                                                                            style="width:80%"><strong
                                                                                                class="rating">4.00</strong>
                                                                                            out of 5</span></div> <a
                                                                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/black-low-top-sneakers-shoe/#reviews"
                                                                                        class="woocommerce-review-link"
                                                                                        rel="nofollow">(1)</a>
                                                                                </div> <a
                                                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product/black-low-top-sneakers-shoe/">
                                                                                    <h3 class="product-name">Black Low Top
                                                                                        Sneakers Shoe</h3>
                                                                                </a>

                                                                                <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>191.00</bdi></span></span>
                                                                                <div class="price-block"></div> <a
                                                                                    href="?add-to-cart=10359"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="10359"
                                                                                    data-product_sku="LEDF01"
                                                                                    aria-label="Add “Black Low Top Sneakers Shoe” to your cart"
                                                                                    rel="nofollow">Add to cart</a><a
                                                                                    href="#"
                                                                                    class="button yith-wcqv-button"
                                                                                    data-product_id="10359">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>













                                                    <div class="owl-controls clickable">
                                                        <div class="owl-buttons">
                                                            <div class="owl-prev">prev</div>
                                                            <div class="owl-next">next</div>
                                                        </div>
                                                    </div>
                                                </ul>

                                            </div>
                                        </div>
                                    @else
                                        <div class="alert alert-info">Aucun produit au panier</div>
                                    @endif
                                    <div class="inner-container">
                                    </div>
                                    <!-- .inner-container -->
                                </div>
                                <!-- .entry-content -->
                            </article><!-- #post-## -->
                        </div> <!-- #content -->
                    </div> <!-- #primary -->
                    <div id="secondary" class="left-col">
                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                            <aside id="woocommerce_product_categories-3"
                                class="widget woocommerce widget_product_categories">
                                <div class="title-outer">
                                    <h3 class="widget-title">Product Categories</h3>
                                </div>
                                <ul class="product-categories toggle-block sidebar-category-inner treeview-list treeview">
                                    <li class="cat-item cat-item-44 cat-parent expandable">
                                        <div
                                            class="hitarea cat-item-hitarea cat-item-44-hitarea cat-parent-hitarea expandable-hitarea">
                                        </div><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/lita/">Lita</a>
                                        <ul class="children toggle-block" style="display: none;">
                                            <li class="cat-item cat-item-15 cat-parent expandable lastExpandable">
                                                <div
                                                    class="hitarea cat-item-hitarea cat-item-15-hitarea cat-parent-hitarea expandable-hitarea lastExpandable-hitarea">
                                                </div><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/lita/hiking-boots/">Hiking
                                                    Boots</a>
                                                <ul class="children toggle-block" style="display: none;">
                                                    <li class="cat-item cat-item-83"><a
                                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/lita/hiking-boots/old-skool/">Old
                                                            Skool</a></li>
                                                    <li class="cat-item cat-item-71 last"><a
                                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/lita/hiking-boots/sneakers/">Sneakers</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-item-39 cat-parent expandable">
                                        <div
                                            class="hitarea cat-item-hitarea cat-item-39-hitarea cat-parent-hitarea expandable-hitarea">
                                        </div><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/laced-bootie/">Laced
                                            Bootie</a>
                                        <ul class="children toggle-block" style="display: none;">
                                            <li class="cat-item cat-item-82"><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/laced-bootie/chuck-taylor/">Chuck
                                                    Taylor</a></li>
                                            <li class="cat-item cat-item-38 last"><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/laced-bootie/steel-toe-boots/">Steel-toe
                                                    Boots</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-item-43 cat-parent expandable">
                                        <div
                                            class="hitarea cat-item-hitarea cat-item-43-hitarea cat-parent-hitarea expandable-hitarea">
                                        </div><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/combat-boots/">Combat
                                            boots</a>
                                        <ul class="children toggle-block" style="display: none;">
                                            <li class="cat-item cat-item-60"><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/combat-boots/derby-shoes/">Derby
                                                    shoes</a></li>
                                            <li class="cat-item cat-item-80 last"><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/combat-boots/monk-straps/">Monk
                                                    straps</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-item-59 cat-parent expandable">
                                        <div
                                            class="hitarea cat-item-hitarea cat-item-59-hitarea cat-parent-hitarea expandable-hitarea">
                                        </div><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/running-shoes/">Running
                                            shoes</a>
                                        <ul class="children toggle-block" style="display: none;">
                                            <li class="cat-item cat-item-56"><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/running-shoes/climbing-shoes/">Climbing
                                                    shoes</a></li>
                                            <li class="cat-item cat-item-49 last"><a
                                                    href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/running-shoes/desert-boots/">Desert
                                                    boots</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-item-93"><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/ankle-boots/">Ankle
                                            Boots</a></li>
                                    <li class="cat-item cat-item-95"><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/court-shoes/">Court
                                            Shoes</a></li>
                                    <li class="cat-item cat-item-94"><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/heels/">Heels</a>
                                    </li>
                                    <li class="cat-item cat-item-72 last"><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-category/stilettos/">Stilettos</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside id="woocommerce_product_tag_cloud-2"
                                class="widget woocommerce widget_product_tag_cloud">
                                <div class="title-outer">
                                    <h3 class="widget-title">Product Tags</h3>
                                </div>
                                <div class="tagcloud toggle-block"><a
                                        href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-tag/audire/"
                                        class="tag-cloud-link tag-link-32 tag-link-position-1" style="font-size: 12pt;"
                                        aria-label="Audire (3 products)">Audire</a>
                                    <a href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-tag/augue/"
                                        class="tag-cloud-link tag-link-33 tag-link-position-2"
                                        style="font-size: 15.333333333333pt;" aria-label="Augue (4 products)">Augue</a>
                                    <a href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-tag/bibendum/"
                                        class="tag-cloud-link tag-link-35 tag-link-position-3" style="font-size: 8pt;"
                                        aria-label="Bibendum (2 products)">Bibendum</a>
                                    <a href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-tag/constituto/"
                                        class="tag-cloud-link tag-link-40 tag-link-position-4" style="font-size: 22pt;"
                                        aria-label="Constituto (7 products)">Constituto</a>
                                    <a href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-tag/converse/"
                                        class="tag-cloud-link tag-link-41 tag-link-position-5"
                                        style="font-size: 15.333333333333pt;"
                                        aria-label="Converse (4 products)">Converse</a>
                                    <a href="https://demos.coderplace.com/woo/WCM01/WCM01004/product-tag/lingerie/"
                                        class="tag-cloud-link tag-link-52 tag-link-position-6" style="font-size: 12pt;"
                                        aria-label="Lingerie (3 products)">Lingerie</a>
                                </div>
                            </aside>
                        </div>
                        <!-- #primary-sidebar -->
                    </div><!-- #secondary -->
                </div><!-- #main-content -->
            </div>
            <!-- .main-content-inner -->
        </div>
        <!-- .main_inner -->
    </div>
@endsection
