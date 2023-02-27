@extends('layout/front/masterCategorie')
@section('content')
    <div id="main" class="site-main full-width box-page">
        <div class="main_inner">
            <div class="main-content-inner full-width">
                <div id="main-content" class="main-content full-width box-page ">
                    <div id="primary" class="content-area">
                        @if (session()->has('panier'))
                            <div id="content" class="site-content" role="main">
                                <article id="post-11" class="post-11 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>

                                            <form class="checkout_coupon woocommerce-form-coupon" method="post"
                                                style="display:none">

                                                <p>If you have a coupon code, please apply it below.</p>

                                                <p class="form-row form-row-first">
                                                    <label for="coupon_code" class="screen-reader-text">Coupon:</label>
                                                    <input type="text" name="coupon_code" class="input-text"
                                                        placeholder="Coupon code" id="coupon_code" value="">
                                                </p>

                                                <p class="form-row form-row-last">
                                                    <button type="submit" class="button" name="apply_coupon"
                                                        value="Apply coupon" style="user-select: auto !important;">Apply
                                                        coupon</button>
                                                </p>

                                                <div class="clear"></div>
                                            </form>
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <form name="checkout" method="post" class="checkout woocommerce-checkout"
                                                action="{{ route('commande.store') }}" enctype="multipart/form-data"
                                                novalidate="novalidate">

                                                @csrf

                                                <div id="customer_details" class="col2-set">
                                                    <div class="col-1">
                                                        <div class="woocommerce-billing-fields">

                                                            <h3 style="background-color: transparent;">Détails de la facture
                                                            </h3>



                                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                                <p class="form-row form-row-first validate-required"
                                                                    id="billing_first_name_field" data-priority="10"><label
                                                                        for="billing_first_name" class="">Nom<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="text" class="input-text "
                                                                            name="nom" id="billing_first_name"
                                                                            placeholder="" value="Mel" required
                                                                            autocomplete="given-name"></span></p>
                                                                <p class="form-row form-row-last validate-required"
                                                                    id="billing_last_name_field" data-priority="20"><label
                                                                        for="billing_last_name"
                                                                        class="">Prénom(s)<abbr class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="text" class="input-text "
                                                                            name="prenom" id="billing_last_name"
                                                                            placeholder="" value="Sardes" required
                                                                            autocomplete="family-name"></span></p>
                                                                <p class="form-row address-field validate-required form-row-wide"
                                                                    id="billing_address_1_field" data-priority="50"><label
                                                                        for="billing_address_1" class="">Code
                                                                        Postal&nbsp;<abbr class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="text" class="input-text "
                                                                            name="code_postal" id="billing_address_1"
                                                                            placeholder="House number and street name"
                                                                            value="622" autocomplete="address-line1"
                                                                            required
                                                                            data-placeholder="House number and street name"></span>
                                                                </p>
                                                                <p class="form-row address-field validate-required form-row-wide"
                                                                    id="billing_address_1_field" data-priority="50"><label
                                                                        for="billing_address_1"
                                                                        class="">Address&nbsp;<abbr class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="text" class="input-text" required
                                                                            name="adresse" id="billing_address_1"
                                                                            autocomplete="address-line1"></span>
                                                                </p>
                                                                <p class="form-row address-field validate-required form-row-wide"
                                                                    id="billing_city_field" data-priority="70"
                                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                                    <label for="billing_city"
                                                                        class="">Ville&nbsp;<abbr class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="text" class="input-text " required
                                                                            name="ville" id="billing_city"
                                                                            placeholder="" value="Libreville"
                                                                            autocomplete="address-level2"></span>
                                                                </p>
                                                                <p class="form-row address-field validate-required validate-state form-row-wide"
                                                                    id="billing_state_field" data-priority="80"
                                                                    data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                                    <label for="billing_state"
                                                                        class="">Localite&nbsp;<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="text" class="input-text " required
                                                                            value="Estuaire" placeholder=""
                                                                            name="localite" id="billing_state"
                                                                            autocomplete="address-level1"
                                                                            data-input-classes=""></span>
                                                                </p>
                                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                                    id="billing_phone_field" data-priority="100"><label
                                                                        for="billing_phone" class="">Téléphone<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="tel" class="input-text " required
                                                                            name="contact" id="billing_phone"
                                                                            placeholder="066157770"
                                                                            autocomplete="tel"></span></p>
                                                                <p class="form-row form-row-wide validate-required validate-email"
                                                                    id="billing_email_field" data-priority="110"><label
                                                                        for="billing_email" class="">Email<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label><span
                                                                        class="woocommerce-input-wrapper">
                                                                        <input type="email" class="input-text " required
                                                                            name="mail" id="billing_email"
                                                                            placeholder="" value="melsardes@gmail.com"
                                                                            autocomplete="email"></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <h3 id="order_review_heading">Votre commande</h3>


                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">Produits</th>
                                                                <th class="product-total">Sous total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $total = 0 @endphp

                                                            @foreach (session('panier') as $key => $chaussure)
                                                                @php $total += $chaussure['prix'] * $chaussure['quantite'] @endphp


                                                                <tr class="cart_item">
                                                                    <td class="product-name">
                                                                        {{ $chaussure['nom_chaussure'] }} &nbsp; <strong
                                                                            class="product-quantity">×&nbsp;{{ $chaussure['quantite'] }}</strong>
                                                                    </td>
                                                                    <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount"><bdi>
                                                                                {{ $chaussure['prix'] * $chaussure['quantite'] }}
                                                                                Fcfa
                                                                            </bdi></span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach


                                                        </tbody>
                                                        <tfoot>

                                                            <tr class="cart-subtotal">
                                                                <th>Sous total</th>
                                                                <td><span
                                                                        class="woocommerce-Price-amount amount"><bdi>{{ $total }}</bdi></span>
                                                                </td>
                                                            </tr>




                                                            <tr class="woocommerce-shipping-totals shipping">
                                                                <th>Transport</th>
                                                                <td data-title="Shipping">
                                                                    <ul id="shipping_method"
                                                                        class="woocommerce-shipping-methods">
                                                                        <li>
                                                                            <input type="hidden"
                                                                                name="shipping_method[0]" data-index="0"
                                                                                id="shipping_method_0_flat_rate1"
                                                                                value="flat_rate:1"
                                                                                class="shipping_method"><label
                                                                                for="shipping_method_0_flat_rate1"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi>5.000
                                                                                        F cfa</bdi></span></label>
                                                                        </li>
                                                                    </ul>


                                                                </td>
                                                            </tr>






                                                            <tr class="order-total">
                                                                <th>Total</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount"><bdi>{{ $total + 5000 }}</bdi></span></strong>
                                                                </td>
                                                            </tr>


                                                        </tfoot>
                                                    </table>

                                                    <div id="payment" class="woocommerce-checkout-payment">

                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Since your browser does not support JavaScript, or it is
                                                                disabled, please ensure you click the <em>Update Totals</em>
                                                                button before placing your order. You may be charged more
                                                                than
                                                                the amount stated above if you fail to do so. <br /><button
                                                                    type="submit" class="button alt"
                                                                    name="woocommerce_checkout_update_totals"
                                                                    value="Update totals">Update totals</button>
                                                            </noscript>

                                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                                <div class="woocommerce-privacy-policy-text"></div>
                                                                <div class="woocommerce-terms-and-conditions"
                                                                    style="display: none; max-height: 200px; overflow: auto;">
                                                                    <p>You should carefully read the following Terms and
                                                                        Conditions. Your purchase or use of our themes
                                                                        implies
                                                                        that you have read and accepted these Terms and
                                                                        Conditions.</p>
                                                                    <h3>Theme License</h3>
                                                                    <p>All our WordPress themes are licensed under the GNU
                                                                        General Public License. You may use your purchased
                                                                        themes on as many websites as you like.</p>
                                                                    <h3>Photoshop Files License</h3>
                                                                    <p>The Photoshop design files for our themes come
                                                                        packaged
                                                                        separately and are not GPL licensed. They are
                                                                        licensed
                                                                        and copyrighted under Our Themes. You are not
                                                                        allowed to
                                                                        redistribute these files in any way.</p>
                                                                    <h3>Update and Compatibility</h3>
                                                                    <p>All WordPress themes sold through our web site are
                                                                        always
                                                                        tested and updated to be compatible with the latest
                                                                        stable version of WordPress. However, we can give no
                                                                        guarantee that current versions of our themes will
                                                                        be
                                                                        compatible with previous versions of WordPress, or
                                                                        that
                                                                        previous versions of our themes will be compatible
                                                                        with
                                                                        the current version of WordPress. We are however
                                                                        committed to doing our best to make all the themes
                                                                        compatible with future releases of WordPress.</p>
                                                                    <h3>Delivery</h3>
                                                                    <p>After we have successfully received payment you can
                                                                        login
                                                                        to your “Member Area” with the provided credentials,
                                                                        you
                                                                        will have instant access to all of your purchased
                                                                        themes
                                                                        from your “My Services” menu.</p>
                                                                    <h3>Subscriptions</h3>
                                                                    <p>Our Themes offers various subscription packages. This
                                                                        subscription will automatically renew at the end of
                                                                        the
                                                                        year, and you will be automatically billed at the
                                                                        end of
                                                                        your term for the next year if your subscription is
                                                                        still active. You can, however, cancel your
                                                                        subscription
                                                                        at any time from your “Member Area”. If you do not
                                                                        cancel by the end of the year, you will be
                                                                        automatically
                                                                        billed for the next year.</p>
                                                                    <h3>Refund Policy</h3>
                                                                    <p>Once You have purchased and downloaded a template
                                                                        from
                                                                        Our Themes we cannot offer a refund, which You are
                                                                        held
                                                                        responsible for understanding upon Your order with
                                                                        Our
                                                                        Themes. The reason for this policy is because we
                                                                        offer
                                                                        intangible irrevocable digital Products and as such,
                                                                        there is no way for our Products to be returned.</p>
                                                                    <h3>Ownership</h3>
                                                                    <p>You may not claim intellectual or exclusive ownership
                                                                        to
                                                                        any of Our Themes’s Products, modified or
                                                                        unmodified.
                                                                        All Products are the sole and exclusive property of
                                                                        Our
                                                                        Themes, it licensors, or Content sources
                                                                        respectively.
                                                                    </p>
                                                                    <h3>Theme Support</h3>
                                                                    <p>Technical Support is provided on our Member area, and
                                                                        you
                                                                        should not expect it via comments, facebook, twitter
                                                                        or
                                                                        any other means. This is the quickest and most
                                                                        efficient
                                                                        way for our members to receive support. Moreover,
                                                                        the
                                                                        support that we offer shall include common issues
                                                                        and
                                                                        bugs that might occur, and not necessarily
                                                                        customization
                                                                        of any themes.</p>
                                                                    <h3>Waranty</h3>
                                                                    <p>Our themes are guaranteed to function on a clean
                                                                        installation of WordPress or when activated without
                                                                        any
                                                                        changes. Once you modify any of the theme files or
                                                                        include third party applications, then we cannot
                                                                        guarantee that the themes will work.</p>
                                                                    <p>We cannot guarantee that themes will function with
                                                                        all
                                                                        3rd party components, plug-ins or web browsers.
                                                                        Browser
                                                                        compatibility should be tested against the
                                                                        demonstration
                                                                        themes on the demo server. Please ensure that the
                                                                        browsers you use will work with the themes.</p>
                                                                </div>
                                                                <p class="form-row validate-required">
                                                                    <label
                                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                        <input type="checkbox"
                                                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                            name="terms" id="terms">
                                                                        <span
                                                                            class="woocommerce-terms-and-conditions-checkbox-text">J'ai
                                                                            lu et j'accepte les <a
                                                                                href="https://demos.coderplace.com/woo/WCM01/WCM01004/terms-conditions/"
                                                                                class="woocommerce-terms-and-conditions-link"
                                                                                target="_blank">termes et contrats
                                                                                d'utilisation</a></span>&nbsp;<abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="hidden" name="terms-field"
                                                                        value="1">
                                                                </p>
                                                            </div>


                                                            <button type="submit" class="button alt"
                                                                name="woocommerce_checkout_place_order" id="place_order"
                                                                value="Place order"
                                                                data-value="Place order">Commander</button>

                                                            <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                                name="woocommerce-process-checkout-nonce"
                                                                value="320c4d6e06"><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/woo/WCM01/WCM01004/?wc-ajax=update_order_review">
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="hidden" name="total" value="{{ $total }}">

                                            </form>

                                        </div>
                                        <div class="inner-container">
                                        </div>
                                        <!-- .inner-container -->
                                    </div>
                                    <!-- .entry-content -->
                                </article><!-- #post-## -->
                            </div> <!-- #content -->
                        @else
                            <div id="content" class="site-content" role="main">
                                <article id="post-10" class="post-10 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="woocommerce-notices-wrapper"></div>
                                            <p class="cart-empty woocommerce-info">Your cart is currently empty.</p>
                                            <p class="return-to-shop">
                                                <a class="button wc-backward" href="../shop/index.html">
                                                    Return to shop </a>
                                            </p>
                                        </div>
                                        <div class="inner-container">
                                        </div>
                                        <!-- .inner-container -->
                                    </div>
                                    <!-- .entry-content -->
                                </article><!-- #post-## -->
                            </div>
                        @endif
                    </div> <!-- #primary -->
                </div><!-- #main-content -->
            </div>
            <!-- .main-content-inner -->
        </div>
        <!-- .main_inner -->
    </div>
@endsection
