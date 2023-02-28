@extends('layout/front/masterCategorie')
@section('content')
    <div id="main" class="site-main full-width ">
        <div class="main_inner">
            <div class="main-content-inner ">
                <div class="main-content ">
                    <div class="main-content-inner-full single-product-full">
                        <div id="primary" class="content-area">
                            <main id="content" class="site-main-inner">
                                <nav class="woocommerce-breadcrumb"><span><a
                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004">Home</a></span> »
                                    <span><a href="../../product-category/running-shoes/index.html">Running shoes</a></span>
                                    » <span><a
                                            href="../../product-category/running-shoes/climbing-shoes/index.html">Climbing
                                            shoes</a></span> » <span>Adi Pattern ShoeLeLE</span>
                                </nav>

                                <div id="product-11951"
                                    class="has-post-thumbnail product type-product post-11951 status-publish first instock product_cat-chuck-taylor product_cat-climbing-shoes product_cat-court-shoes product_cat-derby-shoes product_cat-heels product_cat-laced-bootie product_cat-monk-straps product_cat-steel-toe-boots product_tag-lingerie sale featured shipping-taxable purchasable product-type-simple">



                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                        data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                        <div class="flex-viewport"
                                            style="overflow: hidden; position: relative; height: 395.25px;">
                                            <figure class="woocommerce-product-gallery__wrapper"
                                                style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <div data-thumb="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/15.jpg"
                                                    data-thumb-alt=""
                                                    class="woocommerce-product-gallery__image flex-active-slide"
                                                    style="width: 382.2px; margin-right: 0px; float: left; display: block; position: relative; overflow: hidden;">
                                                    <a href="{{ asset('front/wp-content/uploads/2022/02/15.jpg') }}"><img
                                                            src="{{ asset('/'.$chaussure-> image) }}"
                                                            class="wp-post-image" alt="" loading="lazy"
                                                            title="15" data-caption=""
                                                            data-src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/15.jpg"
                                                            data-large_image="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/15.jpg"
                                                            data-large_image_width="967" data-large_image_height="1000"
                                                            draggable="false" width="600" height="620"></a><img
                                                        role="presentation" alt=""
                                                        src="https://demos.coderplace.com/woo/WCM01/WCM01004/wp-content/uploads/2022/02/15.jpg"
                                                        class="zoomImg"
                                                        style="position: absolute; top: -280.406px; left: -492.306px; opacity: 0; width: 967px; height: 1000px; border: medium none; max-width: none; max-height: none;">
                                                </div>
                                                {{-- <span class="onsale">- 17%</span> --}}
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="summary entry-summary">
                                        <h1 class="product_title entry-title">{{ $chaussure->nom_chaussure }}</h1>

                                        <div class="woocommerce-product-rating">


                                            <p class="price"><ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{ $chaussure->prix }}
                                                            Fcfa</bdi></span></ins>
                                                {{-- <del><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>301.00</bdi></span></del> --}}
                                            </p>
                                            <p class="stock in-stock">{{ $chaussure->nombre_disponible }} en stock</p>


                                            <form class="cart" action="{{ route('panier.add', $chaussure) }}"
                                                method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="quantity">
                                                    <label class="screen-reader-text" for="quantite">Quantité</label>
                                                    {{-- <input class="quantity-btn minus" type="button" value="-"
                                                        style="user-select: auto !important;"> --}}
                                                    <input type="number" step="1" min="1" max="500"
                                                        name="quantite" placeholder="">
                                                    {{-- <input class="quantity-btn plus" type="button" value="+"
                                                        style="user-select: auto !important;"> --}}
                                                </div>

                                                <button type="submit" name="add-to-cart" value="11951"
                                                    class="single_add_to_cart_button button alt"
                                                    style="user-select: auto !important;">Ajouter au panier</button>

                                            </form>



                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-11951 exists wishlist-fragment on-first-load"
                                                data-fragment-ref="11951"
                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:true,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:11951,&quot;parent_product_id&quot;:11951,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                <!-- ADD TO WISHLIST -->

                                                <!-- BROWSE WISHLIST MESSAGE -->
                                                {{-- <div class="yith-wcwl-wishlistexistsbrowse" data-product-id="11951"
                                                data-original-product-id="11951">
                                                <span class="feedback">
                                                    <i class="yith-wcwl-icon fa fa-heart"></i> The product is already in
                                                    your wishlist! </span>
                                                <a href="../../wishlist/index.html" rel="nofollow"
                                                    data-title="Browse wishlist">
                                                    Browse wishlist </a>
                                            </div> --}}

                                                <!-- COUNT TEXT -->

                                            </div>
                                            {{-- <a href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=11951"
                                            class="compare button" data-product_id="11951" rel="nofollow">Compare</a>
                                        <div class="product_meta"> --}}


                                            <form action="{{ route('panier.show', $chaussure) }}" method="post">


                                                <span class="posted_in">Categorie: <a
                                                        href="{{ route('categorie.show', $chaussure->nom_chaussure) }}"
                                                        rel="tag">{{-- {{ $chaussure->categorie->nom_categorie }} --}}</a>
                                                </span>
                                                <span class="brand">
                                                    <span class="label">Marque:</span>
                                                    <span>
                                                        {{ $chaussure->marque }}
                                                    </span>
                                                </span>

                                        </div>
                                    </div>
                                    </form>

                                    <div class="woocommerce-tabs wc-tabs-wrapper">

                                        <ul class="tabs wc-tabs" role="tablist">
                                            <li class="description_tab active" id="tab-title-description" role="tab"
                                                aria-controls="tab-description">
                                                <a href="#tab-description">Description</a>
                                            </li>
                                        </ul>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                            id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

                                            <h2>Description</h2>

                                            <p>{{ $chaussure->description }}</p>
                                        </div>

                                    </div>

                                    <section class="up-sells upsells products">
                                        <h2>Vous pourriez aussi aimer</h2>

                                        <ul class="products columns-4 owl-carousel owl-theme"
                                            style="opacity: 1; display: block;">


                                            <div class="owl-wrapper-outer">
                                                <div class="owl-wrapper"
                                                    style="width: 980px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                    <div class="owl-item" style="width: 245px;">
                                                        <li
                                                            class="post-11741 product type-product status-publish has-post-thumbnail product_cat-climbing-shoes product_cat-combat-boots product_cat-derby-shoes product_cat-laced-bootie product_cat-monk-straps product_cat-running-shoes product_tag-augue product_brand-quality product_brand-retros first instock featured shipping-taxable purchasable product-type-simple">
                                                            <div class="container-inner">
                                                                <div class="product-block-inner">
                                                                    <div class="image-block"><a
                                                                            href="../white-cool-sport-shoe/index.html">
                                                                            <img src="../../wp-content/uploads/2022/02/08.jpg"
                                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                alt="" loading="lazy"
                                                                                width="967" height="1000"><img
                                                                                src="../../wp-content/uploads/2022/02/13.jpg"
                                                                                class="secondary-image attachment-shop-catalog"
                                                                                alt="" loading="lazy"
                                                                                width="967" height="1000"></a>
                                                                        <div class="product-button-hover">
                                                                            <div class="product-button-hover-inner">
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
                                                                                            The product is already in your
                                                                                            wishlist! </span>
                                                                                        <a href="../../wishlist/index.html"
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
                                                                                    data-product_id="11741">Quick View</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-detail-wrapper">
                                                                        <div class="product-review-block">
                                                                            <div class="star-rating"
                                                                                title="Not yet rated"><span
                                                                                    style="width:0%"><strong
                                                                                        class="rating">0</strong> out of
                                                                                    5</span></div> <a
                                                                                href="../white-cool-sport-shoe/index.html#reviews"
                                                                                class="woocommerce-review-link"
                                                                                rel="nofollow">(0)</a>
                                                                        </div> <a
                                                                            href="../white-cool-sport-shoe/index.html">
                                                                            <h3 class="product-name">White Cool Sport Shoe
                                                                            </h3>
                                                                        </a>

                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>151.00</bdi></span></span>
                                                                        <div class="price-block"></div> <a
                                                                            href="indexdfda.html?add-to-cart=11741"
                                                                            data-quantity="1"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                            data-product_id="11741"
                                                                            data-product_sku="MND785"
                                                                            aria-label="Add “White Cool Sport Shoe” to your cart"
                                                                            rel="nofollow">Add to cart</a><a
                                                                            href="#" class="button yith-wcqv-button"
                                                                            data-product_id="11741">Quick View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>

                                    </section>


                                </div>

                            </main>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .main-content-inner -->
        </div>
        <!-- .main_inner -->
    </div>
@endsection
