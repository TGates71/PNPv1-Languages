<?php
######################################################################
# Emporium 2.3.5
######################################################################
# Copyright (c) 2004 by Michael Squires
# http://www.burnwave.com/
######################################################################

/************************************************************************/
/* Platinum Nuke Pro: Expect to be impressed                  COPYRIGHT */
/*                                                                      */
/* Copyright (c) 2004 - 2006 by http://www.techgfx.com                  */
/*     Techgfx - Graeme Allan                       (goose@techgfx.com) */
/*                                                                      */
/* Copyright (c) 2004 - 2006 by http://www.nukeplanet.com               */
/*     Loki / Teknerd - Scott Partee           (loki@nukeplanet.com)    */
/*                                                                      */
/* Copyright (c) 2007 - 2013 by http://www.platinumnukepro.com          */
/*                                                                      */
/* Refer to platinumnukepro.com for detailed information on this CMS    */
/*******************************************************************************/
/* This file is part of the PlatinumNukePro CMS - http://platinumnukepro.com   */
/*                                                                             */
/* This program is free software; you can redistribute it and/or               */
/* modify it under the terms of the GNU General Public License                 */
/* as published by the Free Software Foundation; either version 2              */
/* of the License, or any later version.                                       */
/*                                                                             */
/* This program is distributed in the hope that it will be useful,             */
/* but WITHOUT ANY WARRANTY; without even the implied warranty of              */
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               */
/* GNU General Public License for more details.                                */
/*                                                                             */
/* You should have received a copy of the GNU General Public License           */
/* along with this program; if not, write to the Free Software                 */
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA. */
/*******************************************************************************/

#############################################
# CORE SYSTEM
# DIR: modules/Shopping_Cart/
#############################################
######################################################################
# From file: account.php
######################################################################
define("_EMPORIUM_MODULE_ACCOUNT_USERINFORMATION","User Information");
define("_EMPORIUM_MODULE_ACCOUNT_USERNAME","User Name");
define("_EMPORIUM_MODULE_ACCOUNT_EMAIL","Email");
define("_EMPORIUM_MODULE_ACCOUNT_FIRSTNAME","First Name");
define("_EMPORIUM_MODULE_ACCOUNT_LASTNAME","Last Name");
define("_EMPORIUM_MODULE_ACCOUNT_ADDRESS","Address");
define("_EMPORIUM_MODULE_ACCOUNT_CITY","City");
define("_EMPORIUM_MODULE_ACCOUNT_STATE","State");
define("_EMPORIUM_MODULE_ACCOUNT_POSTALCODE","Zip");
define("_EMPORIUM_MODULE_ACCOUNT_COUNTRY","Country");
define("_EMPORIUM_MODULE_ACCOUNT_DAYPHONE","Day Phone");
define("_EMPORIUM_MODULE_ACCOUNT_EVEPHONE","Eve Phone");
define("_EMPORIUM_MODULE_ACCOUNT_CURRENCY","Currency");
define("_EMPORIUM_MODULE_ACCOUNT_SELECTONE","Select One...");
define("_EMPORIUM_MODULE_ACCOUNT_CARTPREFERENCES","Cart Preferences");
define("_EMPORIUM_MODULE_ACCOUNT_DEFAULT","-Default-");
define("_EMPORIUM_MODULE_ACCOUNT_UPDATEDETAILS","Update User Details");
define("_EMPORIUM_MODULE_ACCOUNT_NLI","You are not logged in!");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_PREVIOUSORDERS","Your Previous Orders");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_NOPREVIOUSORDERS","Your have not made any previous orders!");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_ORDERNUM","Order #");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_ORDERDATE","Date");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_ORDERSTATUS","Status");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_ORDERFUNCTIONS","Functions");
define("_EMPORIUM_MODULE_ACCOUNT_ORDERS_ORDERVIEW","View");

######################################################################
# From file: cart.php
######################################################################
define("_EMPORIUM_MODULE_CART_YOURCART","Your Cart Contents");
define("_EMPORIUM_MODULE_CART_DELETE","Delete");
define("_EMPORIUM_MODULE_CART_UPDATE","Update");
define("_EMPORIUM_MODULE_CART_PRODUCTNAME","Product");
define("_EMPORIUM_MODULE_CART_QTY","Qty.");
define("_EMPORIUM_MODULE_CART_PRODCOST","Unit Cost");
define("_EMPORIUM_MODULE_CART_TOTAL","Total");
define("_EMPORIUM_MODULE_CART_NOITEMS","There is nothing in your Shopping Cart");
define("_EMPORIUM_MODULE_CART_SUBTOTAL","SubTotal");
define("_EMPORIUM_MODULE_CART_SUBTOTALINFO","SubTotal does not include shipping/handling charge or tax.");
define("_EMPORIUM_MODULE_CART_EMPTYCART","Empty Cart");
define("_EMPORIUM_MODULE_CART_BROWSESTORE","Continue Shopping");
define("_EMPORIUM_MODULE_CART_CHECKOUT","CheckOut");

######################################################################
# From file: checkout.php
######################################################################
define("_EMPORIUM_MODULE_CHECKOUT_CANCEL","Cancel Order");
define("_EMPORIUM_MODULE_CHECKOUT_CONTINUE","Continue");
define("_EMPORIUM_MODULE_CHECKOUT_EDITORDER","Edit Order");
define("_EMPORIUM_MODULE_CHECKOUT_SUBMITORDER","Submit Order");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_PRODUCTNAME","Product");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_QTY","Qty.");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_PRODCOST","Unit Cost");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_TOTAL","Total");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_PRODUCTTOTAL","Product Total");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_SHIPPINGHANDLING","Shipping/Handling Charge");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_TAX","Tax");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_SUBTOTAL","Subtotal");
define("_EMPORIUM_MODULE_CHECKOUT_CARTITEMS_GRANDTOTAL","Total");
define("_EMPORIUM_MODULE_CHECKOUT_NODEFAULTSHIPPINGMETHOD","There is not a default shipping method. Please contact admin!");
define("_EMPORIUM_MODULE_CHECKOUT_NOSHIPPINGMETHODS","There aren't any activated shipping methods. Please contact admin!");
define("_EMPORIUM_MODULE_CHECKOUT_NOTVALIDSHIPPING","The selected shipping method does not exist or is not active!");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPPINGMETHODSELECTION","Shipping Method Selection");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPPINGDETAILS","Shipping Details");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPPINGADDRESS","Shipping Address");
define("_EMPORIUM_MODULE_CHECKOUT_USECONTACTADDRESS","Use my contact address.");
define("_EMPORIUM_MODULE_CHECKOUT_USESHIPPINGADDRESS","Use my shipping address.");
define("_EMPORIUM_MODULE_CHECKOUT_FIRSTNAME","First Name");
define("_EMPORIUM_MODULE_CHECKOUT_LASTNAME","Last Name");
define("_EMPORIUM_MODULE_CHECKOUT_ADDRESS","Address");
define("_EMPORIUM_MODULE_CHECKOUT_CITY","City");
define("_EMPORIUM_MODULE_CHECKOUT_STATE","State/Province");
define("_EMPORIUM_MODULE_CHECKOUT_POSTALCODE","Zip");
define("_EMPORIUM_MODULE_CHECKOUT_COUNTRY","Country");
define("_EMPORIUM_MODULE_CHECKOUT_DAYPHONE","Daytime Phone");
define("_EMPORIUM_MODULE_CHECKOUT_EVEPHONE","Evening Phone");
define("_EMPORIUM_MODULE_CHECKOUT_EMAILADDRESS","Email Address");
define("_EMPORIUM_MODULE_CHECKOUT_SELECTONE","Select One...");
define("_EMPORIUM_MODULE_CHECKOUT_NOPAYMENTMETHODS","There aren't any activated payment methods. Please contact admin!");
define("_EMPORIUM_MODULE_CHECKOUT_NOTVALIDPAYMENT","The selected payment method does not exist or is not active!");
define("_EMPORIUM_MODULE_CHECKOUT_PAYMENTMETHODSELECTION","Payment Method Selection");
define("_EMPORIUM_MODULE_CHECKOUT_BILLINGDETAILS","Billing Details");
define("_EMPORIUM_MODULE_CHECKOUT_BILLINGADDRESS","Billing Address");
define("_EMPORIUM_MODULE_CHECKOUT_BILLINGADDRESSINFO","Your Billing address must be entered in case of contact and/or as it appears on your statement. Please check your statement to avoid delays in processing your order.");
define("_EMPORIUM_MODULE_CHECKOUT_CONFIRMORDER","Confirm Order");
define("_EMPORIUM_MODULE_CHECKOUT_BILLTO","Bill To:");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPTO","Ship To:");
define("_EMPORIUM_MODULE_CHECKOUT_PAYMENTMETHOD","Payment Method");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPPINGMETHOD","Shipping Method");
define("_EMPORIUM_MODULE_CHECKOUT_ORDERRECEIPT","Order Receipt");
define("_EMPORIUM_MODULE_CHECKOUT_ORDERNUM","Order #");
define("_EMPORIUM_MODULE_CHECKOUT_ORDERDATE","Order Date");
define("_EMPORIUM_MODULE_CHECKOUT_ENTERREQUIREDINFO","*** Please enter all required information! ***");
define("_EMPORIUM_MODULE_CHECKOUT_EMAILCOPY","A copy of this receipt has been emailed to you at: ");
define("_EMPORIUM_MODULE_CHECKOUT_PRINTCOPY","Print a copy of this receipt for future references.");
define("_EMPORIUM_MODULE_CHECKOUT_TRACKORDER","You can track your purchase status by visiting the following link: ");
define("_EMPORIUM_MODULE_CHECKOUT_RECEIPT","Receipt");
define("_EMPORIUM_MODULE_CHECKOUT_ACCOUNTADDRESS","Account Address");
define("_EMPORIUM_MODULE_CHECKOUT_USEADDRESS","Use Saved Address");
define("_EMPORIUM_MODULE_CHECKOUT_UPDATE","Update");

######################################################################
# From file: category.php
######################################################################
//No definitions available.

######################################################################
# From file: copyright.php
######################################################################
//No definitions available.

######################################################################
# From file: index.php
######################################################################
//No definitions available.

######################################################################
# From file: orders.php
######################################################################
define("_EMPORIUM_MODULE_ORDERS_ORDERRECEIPT","Order Receipt");
define("_EMPORIUM_MODULE_ORDERS_BILLTO","Bill To:");
define("_EMPORIUM_MODULE_ORDERS_SHIPTO","Ship To:");
define("_EMPORIUM_MODULE_ORDERS_PAYMENTMETHOD","Payment Method:");
define("_EMPORIUM_MODULE_ORDERS_SHIPPINGMETHOD","Shipping Method:");
define("_EMPORIUM_MODULE_ORDERS_ORDER","Order");
define("_EMPORIUM_MODULE_ORDERS_ORDERDATE","Order Date:");
define("_EMPORIUM_MODULE_ORDERS_STATUS","Status:");
define("_EMPORIUM_MODULE_ORDERS_STATUSDATE","Status Date:");
define("_EMPORIUM_MODULE_ORDERS_PRODUCT","Product");
define("_EMPORIUM_MODULE_ORDERS_QTY","Qty.");
define("_EMPORIUM_MODULE_ORDERS_COST","Cost");
define("_EMPORIUM_MODULE_ORDERS_TOTAL","Total");
define("_EMPORIUM_MODULE_ORDERS_PRODUCTTOTAL","Product Total:");
define("_EMPORIUM_MODULE_ORDERS_SHIPPINGHANDLING","Shipping/Handling Charge:");
define("_EMPORIUM_MODULE_ORDERS_TAX","Tax:");
define("_EMPORIUM_MODULE_ORDERS_GRANDTOTAL","Total:");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_TITLE","Order Receipt ");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_ORDERRECEIPT","Order Receipt");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_ORDERID","Order ID");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_DATEPRINTED","Date Printed");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_ORDERDATE","Order Date");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_SHIPPINGINFO","Shipping Information");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_BILLINGINFO","Billing Information");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_SHIPPINGMETHOD","Shipping Method:");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_BILLINGMETHOD","Payment Method:");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_PRODUCTDETAILS","Product Details");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_PRODUCTCODE","SKU");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_PRODUCTNAME","Product");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_QTY","Qty.");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_PRICE","Price");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_TOTAL","Total");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_PRODUCTTOTAL","Product Total:");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_SHIPPINGHANDLING","Shipping/Handling Charge:");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_TAX","Tax:");
define("_EMPORIUM_MODULE_ORDERS_RECEIPT_GRANDTOTAL","Total:");

######################################################################
# From file: plugin.php
######################################################################
define("_EMPORIUM_MODULE_PLUGIN_ERROR","Error!");

######################################################################
# From file: product.php
######################################################################
//No definitions available.

######################################################################
# From file: search.php
######################################################################
define("_EMPORIUM_MODULE_SEARCH_RESULTS","Search results for: ");
define("_EMPORIUM_MODULE_SEARCH_CATEGORIES","Categories");
define("_EMPORIUM_MODULE_SEARCH_PRODUCTS","Products");
define("_EMPORIUM_MODULE_SEARCH_NOMATCHES","No matches found.");
define("_EMPORIUM_MODULE_SEARCH_SELECTPAGE","Select Page:");
define("_EMPORIUM_MODULE_SEARCH_PREV","PREV");
define("_EMPORIUM_MODULE_SEARCH_NEXT","NEXT");
define("_EMPORIUM_MODULE_SEARCH_SEARCH","Search");
define("_EMPORIUM_MODULE_SEARCH_SEARCHSTORE","Search Store");



#############################################
# MAIL FUNCTIONS
# DIR: modules/Shopping_Cart/mail/
#############################################
######################################################################
# From file: receipts.php
######################################################################
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_ORDER","Order");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_THANKYOU","Thank you for purchasing from");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_TRACKPURCHASE","You can track your purchase status by visiting the following link:");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_ORDERDETAILS","Order Details");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_ORDERNUMBER","Order Number");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_ORDERDATE","Order Date");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_PRODUCTSORDERED","Products Ordered");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_PRODUCTTOTAL","Product Total");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_SHIPPINGHANDLING","Shipping/Handling Charge");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_TAX","Tax");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_GRANDTOTAL","Total");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_BILLINGADDRESS","Billing Address");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_PAYMENTMETHOD","Payment Method");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_SHIPPINGADDRESS","Shipping Address");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_USER_SHIPPINGMETHOD","Shipping Method");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_NOTIFICATION","Notification");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_ORDER","Order");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_ORDERCOPY","This is a copy of an order made at");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_ORDERDETAILS","Order Details");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_ORDERNUMBER","Order Number");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_ORDERDATE","Order Date");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_USERNAME","User Name/ID");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_USERTYPE","User Type");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_PRODUCTSORDERED","Products Ordered");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_PRODUCTTOTAL","Product Total");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_SHIPPINGHANDLING","Shipping/Handling Charge");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_TAX","Tax");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_GRANDTOTAL","Total");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_BILLINGADDRESS","Billing Address");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_PAYMENTMETHOD","Payment Method");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_SHIPPINGADDRESS","Shipping Address");
define("_EMPORIUM_MODULE_MAIL_RECEIPTS_ADMIN_SHIPPINGMETHOD","Shipping Method");




#############################################
# PAYMENT METHODS
# DIR: modules/Shopping_Cart/payments/
#############################################
######################################################################
# From file: 2checkout.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_2CHECKOUT_CLICKTO","Click on the following button to pay through 2CheckOut (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_2CHECKOUT_CONTINUETO","Continue to 2CheckOut");

######################################################################
# From file: authorize.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_AUTHORIZE_CLICKTO","Click on the following button to pay through Authorize.net (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_AUTHORIZE_CONTINUETO","Continue to Authorize.net");

######################################################################
# From file: bankofamerica.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_ENTERALLINFO","*** Please enter all required credit card information! ***");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CCINFORMATION","Credit Card Information");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CCNUMBER","Credit Card Number:");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CCEXPIRYDATE","Credit Card Expiry Date:");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CCCHECKNUMBER","Credit Card Checknumber:");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CCCNLOCATED"," (located at the back of the credit card)"); 
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_PAYMENTAPPLIEDTO","This purchase will be applied to credit card: ");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CLICKTO","Click on the following button to pay through Bank of America (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_BANKOFAMERICA_CONTINUETO","Submit to Bank of America");

######################################################################
# From file: check.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_CHECK_MAILTO","Mail your check to:");

######################################################################
# From file: creditcard.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_ENTERALLINFO","*** Please enter all required credit card information! ***");
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_CCINFORMATION","Credit Card Information");
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_CCTYPE","Credit Card Type:");
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_CCNUMBER","Credit Card Number:");
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_CCEXPIRYDATE","Credit Card Expiry Date:");
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_CCCHECKNUMBER","Credit Card Checknumber:");
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_CCCNLOCATED"," (located at the back of the credit card)"); 
define("_EMPORIUM_MODULE_PAYMENT_CREDITCARD_PAYMENTAPPLIEDTO","This purchase will be applied to credit card: ");

######################################################################
# From file: directdeposit.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_DIRECTDEPOSIT_DDINFORMATION","Direct Deposit Information");
define("_EMPORIUM_MODULE_PAYMENT_DIRECTDEPOSIT_BANKNAME","Bank Name:");
define("_EMPORIUM_MODULE_PAYMENT_DIRECTDEPOSIT_ROUTINGNUMBER","Routing Number:");
define("_EMPORIUM_MODULE_PAYMENT_DIRECTDEPOSIT_BRANCHNUMBER","Branch Number:");
define("_EMPORIUM_MODULE_PAYMENT_DIRECTDEPOSIT_ACCOUNTNUMBER","Account Number:");
define("_EMPORIUM_MODULE_PAYMENT_DIRECTDEPOSIT_ACCOUNTNAME","Account Name:");

######################################################################
# From file: moneyorder.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_MONEYORDER_MAILTO","Mail your money order to:");

######################################################################
# From file: nochex.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_NOCHEX_CLICKTO","Click on the following button to pay through NoChex.");
define("_EMPORIUM_MODULE_PAYMENT_NOCHEX_ORDER","Order");

######################################################################
# From file: paymate.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_PAYMATE_CLICKTO","Click on the following button to pay through PayMate (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_PAYMATE_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_PAYMATE_CONTINUETO","Pay via PayMate");

######################################################################
# From file: paypal.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_PAYPAL_CLICKTO","Click on the following button to pay through PayPal (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_PAYPAL_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_PAYPAL_CONTINUETO","Pay via PayPal");

######################################################################
# From file: paypal.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_PAYSYSTEMS_CLICKTO","Click on the following button to pay through PaySystems (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_PAYSYSTEMS_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_PAYSYSTEMS_CONTINUETO","Pay via PaySystems");

######################################################################
# From file: psigate.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_PSIGATE_CLICKTO","Click on the following button to pay through PSiGate (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_PSIGATE_CONTINUETO","Pay via PSiGate");

######################################################################
# From file: secpay.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_SECPAY_CLICKTO","Click on the following button to pay through SecPay (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_SECPAY_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_SECPAY_CONTINUETO","Continue to SecPay");

######################################################################
# From file: stormpay.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_STORMPAY_CLICKTO","Click on the following button to pay through StormPay (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_STORMPAY_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_STORMPAY_CONTINUETO","Pay via StormPay");

######################################################################
# From file: verisign.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_VERISIGN_CLICKTO","Click on the following button to pay through Verisign (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_VERISIGN_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_VERISIGN_CONTINUETO","Continue to Verisign");

######################################################################
# From file: worldpay.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_WORLDPAY_CLICKTO","Click on the following button to pay through WorldPay (Credit Cards Accepted).");
define("_EMPORIUM_MODULE_PAYMENT_WORLDPAY_ORDER","Order");
define("_EMPORIUM_MODULE_PAYMENT_WORLDPAY_CONTINUETO","Continue to WorldPay");




#############################################
# SHIPPING METHODS
# DIR: modules/Shopping_Cart/shipping/
#############################################
//No definitions available.




#############################################
# TEMPLATES
# DIR: modules/Shopping_Cart/templates/
#############################################
######################################################################
# From file: category.Amazon_Clone.php
######################################################################
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_PAGE","Page:");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_PRICE","Price: ");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_VIEWPRODUCT","View Product");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_CUSTOMIZE","Customize");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_NOPRODUCTS","There are currently no products in this category.");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_SORTBY","Sort by:");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_PRODUCTNAME","Product Name");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_PRODUCTID","Product ID");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_POPULARPRODUCTS","Popular Products");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_SEARCH","Search:");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_CATEGORY","Category: ");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_MAIN","Main");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_SUBCATEGORIES","Sub Categories:");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_WELCOME","Welcome ");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_OPTIONS","Options");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_PREVIOUSORDERS","Previous Orders");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_VIEWCART","View Cart");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_CHECKOUT","Checkout");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_GUEST","Guest");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_REGISTER","Register/Login?");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_NOTDEFCURR","<B>Please Note :</B> You are not currently viewing our online catalogue using the currency we entered our prices in.<br />The price you are seeing is an approximation only - the final charge which appears on your account may vary slightly.");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_AMAZONCLONE_AVERAGERATING","Avg. Customer Rating");

######################################################################
# From file: category.Emporium_Basic.php
######################################################################
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_SELECTPAGE","Select Page:");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_PREV","PREV");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_NEXT","NEXT");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_NOPRODUCTS","There are currently no products in this category.");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_SEARCH","Search");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_MAIN","Main");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_RANDOM","Random Product");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_CATEGORY","Category: ");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_ORDER","Order");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_EDIT","Edit");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_DELETE","Delete");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_WELCOME","Welcome ");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_OPTIONS","Options");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_PREVIOUSORDERS","Previous Orders");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_VIEWCART","View Cart");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_CHECKOUT","Checkout");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_GUEST","Guest");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_REGISTER","Register/Login?");
define("_EMPORIUM_MODULE_TEMPLATE_CATEGORY_EMPORIUMBASIC_NOTDEFCURR","<B>Please Note :</B> You are not currently viewing our online catalogue using the currency we entered our prices in.<br />The price you are seeing is an approximation only - the final charge which appears on your account may vary slightly.");

######################################################################
# From file: product.Emporium_Basic.php
######################################################################
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_SELECTPAGE","Select Page:");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_PREV","PREV");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_NEXT","NEXT");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_NOPRODUCTS","There are currently no products in this category.");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_SEARCH","Search");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_MAIN","Main");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_RANDOM","Random Product");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_CATEGORY","Category: ");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_ORDER","Order");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_EDIT","Edit");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_DELETE","Delete");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_MODEL","Model: ");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_PRODUCTSECTIONS","Product Sections:");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_ADDLINFO","Additional Information");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_PRODUCTOPTIONS","Product Options");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_PRODUCTCOST","Product Cost :");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_WELCOME","Welcome ");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_OPTIONS","Options");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_PREVIOUSORDERS","Previous Orders");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_VIEWCART","View Cart");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_CHECKOUT","Checkout");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_GUEST","Guest");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_REGISTER","Register/Login?");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_NOTDEFCURR","<B>Please Note :</B> You are not currently viewing our online catalogue using the currency we entered our prices in.<br />The price you are seeing is an approximation only - the final charge which appears on your account may vary slightly.");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_REVIEWS","Reviews");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_CUSTOMERREVIEWS","Customer Reviews");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_AVGREVIEWS","Avg. Customer Review");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_WRITEREVIEW","Write an online review and share your thoughts with other customers.");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_NOREVIEWS","There are no reviews for this product.");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_FIRSTWRITEREVIEW","Be the first person to review this item!");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_REVIEWER","Reviewer");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_ALLREVIEWS","See all");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_ALLREVIEWS2","customer reviews...");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_PRODUCTRATING","Product Rating");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_REVIEWTITLE","Review Title");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_STARS","Stars");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_REVIEW","Review");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_SUBMITREVIEW","Submit Review");
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_REVIEWTHANKS","Thank you. Your review has been submitted and will be published by our team.");

######################################################################
# From file: promo.Emporium_Basic.php
######################################################################
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_SELECTPAGE","Select Page:");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_PREV","PREV");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_NEXT","NEXT");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_NOPRODUCTS","There are currently no products in this category.");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_SEARCH","Search");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_MAIN","Main");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_MAINCATEGORY","Main Category");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_MOREFROMCAT","More Products in this Category");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_RANDOM","Random Product");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_CATEGORY","Category: ");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_ORDER","Order");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_EDIT","Edit");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_DELETE","Delete");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_WELCOME","Welcome ");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_OPTIONS","Options");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_PREVIOUSORDERS","Previous Orders");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_VIEWCART","View Cart");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_CHECKOUT","Checkout");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_GUEST","Guest");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_REGISTER","Register/Login?");
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_NOTDEFCURR","<B>Please Note :</B> You are not currently viewing our online catalogue using the currency we entered our prices in.<br />The price you are seeing is an approximation only - the final charge which appears on your account may vary slightly.");




#############################################
# BLOCKS
# DIR: blocks/
#############################################
######################################################################
# From file: block-Emporium_Categories.php
######################################################################
define("_EMPORIUM_BLOCK_CATEGORIES_NOCATEGORIES","There are no categories.");

######################################################################
# From file: block-Emporium_Contents.php
######################################################################
define("_EMPORIUM_BLOCK_CONTENTS_CARTISEMPTY","Your cart is empty.");
define("_EMPORIUM_BLOCK_CONTENTS_BROWSECATALOG","Browse");
define("_EMPORIUM_BLOCK_CONTENTS_YOUHAVE","You have: ");
define("_EMPORIUM_BLOCK_CONTENTS_CARTITEMS"," item(s).");
define("_EMPORIUM_BLOCK_CONTENTS_PRODUCTTOTAL","Total: ");
define("_EMPORIUM_BLOCK_CONTENTS_CARTVIEW","View");
define("_EMPORIUM_BLOCK_CONTENTS_CHECKOUT","Checkout");
define("_EMPORIUM_BLOCK_CONTENTS_EMPTYCART","Empty");

######################################################################
# From file: block-Emporium_Currencies.php
######################################################################
define("_EMPORIUM_BLOCK_CURRENCIES_DEFAULTCURRENCY","-Default-");

######################################################################
# From file: block-Emporium_Random_Product.php
######################################################################
define("_EMPORIUM_BLOCK_RANDOMPRODUCT_NOPRODUCTS","There are no products.");

######################################################################
# From file: block-Emporium_Random_Promo.php
######################################################################
define("_EMPORIUM_BLOCK_RANDOMPROMO_NOPROMOS","There are no promotional products.");

######################################################################
# From file: block-Emporium_Search.php
######################################################################
define("_EMPORIUM_BLOCK_SEARCH_SEARCH","Search");










###############################
# Emporium 2.3.5 Lang Changes
# ---------------------------
# This is for translators
###############################
######################################################################
# From file: virtualtiendas.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_VIRTUALTIENDAS_CLICKTO","Click on the following button to pay through VirtualTiendas.");
define("_EMPORIUM_MODULE_PAYMENT_VIRTUALTIENDAS_CONTINUETO","Pay via VirtualTiendas");
######################################################################
# From file: promo.Emporium_Basic.php
######################################################################
define("_EMPORIUM_MODULE_TEMPLATE_PROMO_EMPORIUMBASIC_LISTPRICE","List Price");
######################################################################
# From file: product.Emporium_Basic.php
######################################################################
define("_EMPORIUM_MODULE_TEMPLATE_PRODUCT_EMPORIUMBASIC_SKU","SKU");
######################################################################
# From file: checkout.php
######################################################################
define("_EMPORIUM_MODULE_CHECKOUT_SHIPCHARGES","Shipping Charges");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPPINGCOST","Shipping Cost");
define("_EMPORIUM_MODULE_CHECKOUT_HANDLINGCOST","Handling Cost");
define("_EMPORIUM_MODULE_CHECKOUT_SHIPSUBTOTALCOST","Shipping Subtotal");
######################################################################
# From file: shipping.ups.php
######################################################################
define("_EMPORIUM_MODULE_PAYMENT_UPS_UPSSERVICE","Selected UPS Service");

?>
