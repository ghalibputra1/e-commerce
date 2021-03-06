<?php include('../../function/helper.php') ?>
<?php include('../../layout/head.php') ?>
<?php include('../../layout/header.php') ?>


<div class="page home page-template-default">
<div id="content" class="site-content" tabindex="-1">
 <div class="container">

   <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Laptops &amp; Computers</nav>

   <div id="primary" class="content-area">


     <main id="main" class="site-main">

               <div class="row">

                 <div class="col-md-12">
                     <!-- Awal content -->
                     <div class="container">


                     <div id="primary" class="content-area">
                           <main id="main" class="site-main">
                             <article class="page type-page status-publish hentry">
                               <header class="entry-header"><h1 itemprop="name" class="entry-title">Cart</h1></header><!-- .entry-header -->

                               <form>

                         <table class="shop_table shop_table_responsive cart">
                             <thead>
                                 <tr>
                                     <th class="product-remove">&nbsp;</th>
                                     <th class="product-thumbnail">&nbsp;</th>
                                     <th class="product-name">Product</th>
                                     <th class="product-price">Price</th>
                                     <th class="product-quantity">Quantity</th>
                                     <th class="product-subtotal">Total</th>
                                 </tr>
                             </thead>
                             <tbody>

                                 <tr class="cart_item">

                                     <td class="product-remove">
                                         <a class="remove" href="#">×</a>
                                     </td>

                                     <td class="product-thumbnail">
                                         <a href="single-product.html"><img width="180" height="180" src="<?php echo base_url."assets/"; ?>assets/images/products/2.jpg" alt=""></a>
                                     </td>

                                     <td data-title="Product" class="product-name">
                                         <a href="single-product.html">Wireless Audio System Multiroom 360</a>
                                     </td>

                                     <td data-title="Price" class="product-price">
                                         <span class="amount">$1,999.00</span>
                                     </td>

                                     <td data-title="Quantity" class="product-quantity">
                                         <div class="quantity buttons_added"><input type="button" class="minus" value="-">
                                             <label>Quantity:</label>
                                             <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="cart[92f54963fc39a9d87c2253186808ea61][qty]" max="29" min="0" step="1">
                                             <input type="button" class="plus" value="+">
                                         </div>
                                     </td>

                                     <td data-title="Total" class="product-subtotal">
                                         <span class="amount">$1,999.00</span>
                                     </td>
                                 </tr>
                                 <tr class="cart_item">

                                     <td class="product-remove">
                                         <a data-product_sku="5487FB8/26" data-product_id="2606" title="Remove this item" class="remove" href="#">×</a>
                                     </td>

                                     <td class="product-thumbnail">
                                         <a href="single-product.html"><img width="180" height="180" alt="LaptopYoga" class="wp-post-image" src="<?php echo base_url."assets/"; ?>assets/images/products/1.jpg"></a>
                                     </td>

                                     <td data-title="Product" class="product-name">
                                         <a href="single-product.html">Tablet White EliteBook  Revolve 810 G2</a>
                                     </td>

                                     <td data-title="Price" class="product-price">
                                         <span class="amount">$1,300.00</span>
                                     </td>

                                     <td data-title="Quantity" class="product-quantity">
                                         <div class="quantity buttons_added"><input type="button" class="minus" value="-">
                                             <label>Quantity:</label>
                                             <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="cart[a431d70133ef6cf688bc4f6093922b48][qty]" max="30" min="0" step="1">
                                             <input type="button" class="plus" value="+">
                                         </div>
                                     </td>

                                     <td data-title="Total" class="product-subtotal">
                                         <span class="amount">$1,300.00</span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="actions" colspan="6">

                                         <div class="coupon">

                                             <label for="coupon_code">Coupon:</label> <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">

                                         </div>

                                         <input type="submit" value="Update Cart" name="update_cart" class="button">

                                         <div class="wc-proceed-to-checkout">

                                             <a class="checkout-button button alt wc-forward" href="<?php echo base_url."konten/checkout.php"; ?>">Proceed to Checkout</a>
                                         </div>

                                         <input type="hidden" value="1eafc42c5e" name="_wpnonce" id="_wpnonce"><input type="hidden" value="/electro/cart/" name="_wp_http_referer">
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                      </form>
                               <div class="cart-collaterals">

                         <div class="cart_totals ">

                             <h2>Cart Totals</h2>

                             <table class="shop_table shop_table_responsive">

                                 <tbody>
                                     <tr class="cart-subtotal">
                                         <th>Subtotal</th>
                                         <td data-title="Subtotal"><span class="amount">$3,299.00</span></td>
                                     </tr>


                                     <tr class="shipping">
                                         <th>Shipping</th>
                                         <td data-title="Shipping">Flat Rate: <span class="amount">$300.00</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]">

                                             <form method="post" action="http://transvelo.github.io/electro-html/cart.html" class="woocommerce-shipping-calculator">

                                                 <p><a data-toggle="collapse" aria-controls="calculator" href="#calculator" aria-expanded="false" class="shipping-calculator-button">Calculate Shipping</a></p>

                                                 <div id="calculator" class="shipping-calculator-form collapse">
                                                     <p id="calc_shipping_country_field" class="form-row form-row-wide">
                                                         <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                                             <option value="">Select a country…</option>
                                                             <option value="AX">Åland Islands</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">CuraÇao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option selected="selected" value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="IE">Republic of Ireland</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US">United States (US)</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="WS">Western Samoa</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                                                         </select>
                                                     </p>

                                                     <p id="calc_shipping_state_field" class="form-row form-row-wide validate-required">
                                                         <span>
                                                             <select id="calc_shipping_state" name="calc_shipping_state"><option value="">Select an option…</option><option value="AP">Andhra Pradesh</option><option value="AR">Arunachal Pradesh</option><option value="AS">Assam</option><option value="BR">Bihar</option><option value="CT">Chhattisgarh</option><option value="GA">Goa</option><option value="GJ">Gujarat</option><option value="HR">Haryana</option><option value="HP">Himachal Pradesh</option><option value="JK">Jammu and Kashmir</option><option value="JH">Jharkhand</option><option value="KA">Karnataka</option><option value="KL">Kerala</option><option value="MP">Madhya Pradesh</option><option value="MH">Maharashtra</option><option value="MN">Manipur</option><option value="ML">Meghalaya</option><option value="MZ">Mizoram</option><option value="NL">Nagaland</option><option value="OR">Orissa</option><option value="PB">Punjab</option><option value="RJ">Rajasthan</option><option value="SK">Sikkim</option><option value="TN">Tamil Nadu</option><option value="TS">Telangana</option><option value="TR">Tripura</option><option value="UK">Uttarakhand</option><option value="UP">Uttar Pradesh</option><option value="WB">West Bengal</option><option value="AN">Andaman and Nicobar Islands</option><option value="CH">Chandigarh</option><option value="DN">Dadar and Nagar Haveli</option><option value="DD">Daman and Diu</option><option value="DL">Delhi</option><option value="LD">Lakshadeep</option><option value="PY">Pondicherry (Puducherry)</option></select>
                                                         </span>
                                                     </p>

                                                     <p id="calc_shipping_postcode_field" class="form-row form-row-wide validate-required">
                                                         <input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / ZIP" value="" class="input-text">
                                                     </p>

                                                     <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>

                                                     <input type="hidden" value="1eafc42c5e" name="_wpnonce"><input type="hidden" value="/electro/cart/" name="_wp_http_referer">
                                                 </div>
                                             </form>
                                         </td>
                                     </tr>

                                     <tr class="order-total">
                                         <th>Total</th>
                                         <td data-title="Total"><strong><span class="amount">$3,599.00</span></strong> </td>
                                     </tr>
                                 </tbody>
                             </table>

                             <div class="wc-proceed-to-checkout">

                                 <a class="checkout-button button alt wc-forward" href="checkout.html">Proceed to Checkout</a>
                             </div>
                         </div>
                      </div>
                             </article>
                           </main><!-- #main -->
                         </div>
                         </div>
                     <!-- Akhir Conten -->


               </div>

     </main>
   </div><!-- #primary -->


 </div><!-- .container -->
</div><!-- #content -->
</div>

<?php include('../../layout/sidebar.php') ?>
<?php include('../../layout/footer.php') ?>
