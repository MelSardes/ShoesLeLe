@extends('layout/front/masterCategorie')

@section('content')
    <div id="main" class="site-main">
        <div class="main_inner">
            <div class="main-content">
                <div class="main-content-inner ">
                    <div id="main-content" class="main-content  ">
                        <div class="content-area">


                            <div id="primary" class="content-area">
                                <main id="content" class="site-main-inner">
                                    <nav class="woocommerce-breadcrumb"><span><a
                                                href="https://demos.coderplace.com/woo/WCM01/WCM01004">Home</a></span>
                                        &raquo; <span>Shop</span></nav>
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <p class="woocommerce-result-count">
                                        Showing 1&ndash;16 of 20 results</p>
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="menu_order" selected='selected'>Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                        <input type="hidden" name="paged" value="1" />
                                    </form>
                                    <nav class="gridlist-toggle"><a href="#" id="grid" title="Grid view"><span
                                                class="dashicons dashicons-grid-view"></span> <em>Grid
                                                view</em></a><a href="#" id="list" title="List view"><span
                                                class="dashicons dashicons-exerpt-view"></span> <em>List
                                                view</em></a></nav>
                                    <ul class="products columns-4">
                                        @foreach ($chaussures as $chaussure)
                                            <li
                                                class="post-11946 product type-product status-publish has-post-thumbnail product_cat-ankle-boots product_cat-climbing-shoes product_cat-derby-shoes product_cat-desert-boots product_cat-heels product_cat-hiking-boots product_cat-lita product_cat-monk-straps product_cat-old-skool product_cat-sneakers product_tag-lingerie product_brand-premium product_brand-quality product_brand-retros product_brand-studios product_brand-urbans last instock featured shipping-taxable purchasable product-type-simple">
                                                <div class="container-inner">
                                                    <div class="product-block-inner">
                                                        <div class="image-block"><a
                                                                href="../product/cool-sport-red-shoe/index.html">
                                                                <img width="967" height="1000"
                                                                    src="{{ asset('front/wp-content/uploads/2022/02/14.jpg') }}"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    alt="" loading="lazy" /><img width="967"
                                                                    height="1000"
                                                                    src="{{ asset('front/wp-content/uploads/2022/02/19.jpg') }}"
                                                                    class="secondary-image attachment-shop-catalog"
                                                                    alt="" loading="lazy" /></a>
                                                            <div class="product-button-hover">
                                                                <div class="product-button-hover-inner">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-11946  wishlist-fragment on-first-load"
                                                                        data-fragment-ref="11946"
                                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:11946,&quot;parent_product_id&quot;:11946,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                        <!-- ADD TO WISHLIST -->

                                                                        <div class="yith-wcwl-add-button">
                                                                            <a href="index002c.html?add_to_wishlist=11946&amp;_wpnonce=c93c806a11"
                                                                                class="add_to_wishlist single_add_to_wishlist"
                                                                                data-product-id="11946"
                                                                                data-product-type="simple"
                                                                                data-original-product-id="11946"
                                                                                data-title="Add to wishlist" rel="nofollow">
                                                                                <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                                <span>Ajouter à la liste des souhaits</span>
                                                                            </a>
                                                                        </div>

                                                                        <!-- COUNT TEXT -->

                                                                    </div>
                                                                    <div class="woocommerce product compare-button"><a
                                                                            href="https://demos.coderplace.com/woo/WCM01/WCM01004?action=yith-woocompare-add-product&amp;id=11946"
                                                                            class="compare button" data-product_id="11946"
                                                                            rel="nofollow">Compare</a></div><a
                                                                        href="#" class="button yith-wcqv-button"
                                                                        data-product_id="11946">Quick View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail-wrapper">
                                                            <a href="../product/cool-sport-red-shoe/index.html">
                                                                <h3 class="product-name">
                                                                    {{ $chaussure->nom_chaussure }}
                                                                </h3>
                                                            </a>

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{ $chaussure->prix }}</bdi></span></span>
                                                            <div class="price-block"></div>

                                                            <div class="gridlist-buttonwrap"><a
                                                                    href="indexb6e1.html?add-to-cart=11946"
                                                                    data-quantity="1"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                    data-product_id="11946" data-product_sku="CJC789"
                                                                    aria-label="Add &ldquo;Cool Sport Red Shoe&rdquo; to your cart"
                                                                    rel="nofollow">Ajouter au panier</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </main>
                            </div>


                            <div id="secondary" class="left-col">
                                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                                    <aside id="woocommerce_product_categories-3"
                                        class="widget woocommerce widget_product_categories">
                                        <h3 class="widget-title">Toutes les categories</h3>
                                        <ul class="product-categories">
                                            @foreach ($categories as $categorie)
                                                <li class="cat-item cat-item-44 cat-parent"><a
                                                        href="{{ route('front.categorie.show', $categorie) }}">{{ $categorie->nom_categorie }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </aside>

                                    </aside>
                                </div>
                                <!-- #primary-sidebar -->
                            </div><!-- #secondary -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
