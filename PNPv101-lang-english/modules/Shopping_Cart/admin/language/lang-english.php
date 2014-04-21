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
# DIR: admin/modules/emporium/
#############################################
######################################################################
# Emporium Global Admin Definitions
######################################################################
define("_EMPORIUM_ADMIN_GOBACK","[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]");
define("_EMPORIUM_ADMIN_YES","Yes");
define("_EMPORIUM_ADMIN_NO","No");
define("_EMPORIUM_ADMIN_ON","On");
define("_EMPORIUM_ADMIN_OFF","Off");
define("_EMPORIUM_ADMIN_UPDATE","Update");
define("_EMPORIUM_ADMIN_OPTIONS","Options");
define("_EMPORIUM_ADMIN_FUNCTIONS","Functions");
define("_EMPORIUM_ADMIN_EDIT","Edit");
define("_EMPORIUM_ADMIN_REMOVE","Remove");
define("_EMPORIUM_ADMIN_DELETE","Delete");
define("_EMPORIUM_ADMIN_ACTIVATE","Activate");
define("_EMPORIUM_ADMIN_DEACTIVATE","Deactivate");
define("_EMPORIUM_ADMIN_FIX","Fix");
define("_EMPORIUM_ADMIN_MISC","Misc");
define("_EMPORIUM_ADMIN_CANCEL","Cancel");
define("_EMPORIUM_ADMIN_ADD","Add");
define("_EMPORIUM_ADMIN_POS","Pos.");
define("_EMPORIUM_ADMIN_REPLACE","Replace");
define("_EMPORIUM_ADMIN_UPLOAD","Upload");
define("_EMPORIUM_ADMIN_VIEW","View");
define("_EMPORIUM_ADMIN_SORT","Sort");
define("_EMPORIUM_ADMIN_INSTALL","Install");

######################################################################
# From file: brands.php
######################################################################
define("_EMPORIUM_ADMIN_BRANDS_BRANDLIST","Brand List");
define("_EMPORIUM_ADMIN_BRANDS_BMAN","Brands/Manufacturers");
define("_EMPORIUM_ADMIN_BRANDS_BRAND","Brand");
define("_EMPORIUM_ADMIN_BRANDS_FUNCTIONS","Functions");
define("_EMPORIUM_ADMIN_BRANDS_EDIT","Edit");
define("_EMPORIUM_ADMIN_BRANDS_DELETE","Delete");
define("_EMPORIUM_ADMIN_BRANDS_BRANDOS","Brand Options/Statistics");
define("_EMPORIUM_ADMIN_BRANDS_ADDPRODUCT","Add Product");
define("_EMPORIUM_ADMIN_BRANDS_ADDBRAND","Add Brand");
define("_EMPORIUM_ADMIN_BRANDS_EDITBRAND","Edit Brand");
define("_EMPORIUM_ADMIN_BRANDS_BRANDPRODUCTS","Products");
define("_EMPORIUM_ADMIN_BRANDS_TOTALBRANDS","Total Brands");
define("_EMPORIUM_ADMIN_BRANDS_NOBRANDS","There are currently no brands.");
define("_EMPORIUM_ADMIN_BRANDS_NOPIB","There are currently no products by this brand.");
define("_EMPORIUM_ADMIN_BRANDS_ACTIVATE","Activate");
define("_EMPORIUM_ADMIN_BRANDS_DEACTIVATE","Deactivate");
define("_EMPORIUM_ADMIN_BRANDS_BRANDNAME","Brand Name");
define("_EMPORIUM_ADMIN_BRANDS_BRANDURL","Web Site");
define("_EMPORIUM_ADMIN_BRANDS_BRANDESC","Description");
define("_EMPORIUM_ADMIN_BRANDS_ADD","Add Brand");
define("_EMPORIUM_ADMIN_BRANDS_UPDATE","Update Brand");
define("_EMPORIUM_ADMIN_BRANDS_CNDB","ERROR! You can not delete brand's that are being used by products.");

######################################################################
# From file: categories.php
######################################################################
define("_EMPORIUM_ADMIN_CATEGORIES_DEFAULT","*DEFAULT*");
define("_EMPORIUM_ADMIN_CATEGORIES_CATEGORY","Category");
define("_EMPORIUM_ADMIN_CATEGORIES_MAINCATEGORY","Main Category");
define("_EMPORIUM_ADMIN_CATEGORIES_ADDEDITCATS","Add / Edit Categories");
define("_EMPORIUM_ADMIN_CATEGORIES_ADDMAINCAT","Add a Main Category");
define("_EMPORIUM_ADMIN_CATEGORIES_ADDSUBCAT","Add a Sub Category");
define("_EMPORIUM_ADMIN_CATEGORIES_CATNAME","Category Name");
define("_EMPORIUM_ADMIN_CATEGORIES_CATTEMPLATE","Category Template");
define("_EMPORIUM_ADMIN_CATEGORIES_CATDESC","Category Description");
define("_EMPORIUM_ADMIN_CATEGORIES_CATEXTDESC","Category Extended Description");
define("_EMPORIUM_ADMIN_CATEGORIES_CATADD","Add Category");
define("_EMPORIUM_ADMIN_CATEGORIES_SAVE","Save Changes");
define("_EMPORIUM_ADMIN_CATEGORIES_DELETE","Delete Category");
define("_EMPORIUM_ADMIN_CATEGORIES_MODIFYCAT","Modify Category");
define("_EMPORIUM_ADMIN_CATEGORIES_NEERROR","Error. This category can not be deleted because it contains products.");

######################################################################
# From file: config.php
######################################################################
define("_EMPORIUM_ADMIN_CONFIG_CARTOPTIONS","Emporium Configuration");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYINFO","Company Information");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYNAME","Company Name");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYDESC","Description");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYLOGO","Logo");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYADDRESS","Street Address");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYCITY","City");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYSTATE","State/Province");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYCOUNTRY","Country");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYZIP","Postal Code");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYPHONE","Phone");
define("_EMPORIUM_ADMIN_CONFIG_COMPANYFAX","Fax");
define("_EMPORIUM_ADMIN_CONFIG_SETTINGS","Emporium Settings");
define("_EMPORIUM_ADMIN_CONFIG_MODULETITLE","Module Title");
define("_EMPORIUM_ADMIN_CONFIG_DOMPROT","Domain Protocol / URL");
define("_EMPORIUM_ADMIN_CONFIG_ADMINEMAIL","Administrative Email");
define("_EMPORIUM_ADMIN_CONFIG_PROMOTEMPLATE","Promo Template");
define("_EMPORIUM_ADMIN_CONFIG_CATTEMPLATE","Category Template [Default]");
define("_EMPORIUM_ADMIN_CONFIG_PRODTEMPLATE","Product Template [Default]");
define("_EMPORIUM_ADMIN_CONFIG_DISPLAYRBC","Display Right Block Column");
define("_EMPORIUM_ADMIN_CONFIG_EMRCUSTOMER","Email Receipt to Customer");
define("_EMPORIUM_ADMIN_CONFIG_EMRADMIN","Email Receipt to Admin");
define("_EMPORIUM_ADMIN_CONFIG_AUTOREMSTOCK","Auto Remove Stock by Orders");
define("_EMPORIUM_ADMIN_CONFIG_GUESTOPTIONS","Guest Shopping Options");
define("_EMPORIUM_ADMIN_CONFIG_SESSIONMANAGER","Session Manager");
define("_EMPORIUM_ADMIN_CONFIG_GADDITEMS","Guests Can Add Items to Cart");
define("_EMPORIUM_ADMIN_CONFIG_GCHECKOUT","Guests Can Checkout");
define("_EMPORIUM_ADMIN_CONFIG_IMAGESETTINGS","Emporium Image Settings");
define("_EMPORIUM_ADMIN_CONFIG_THUMBDIR","Thumbnail Directory");
define("_EMPORIUM_ADMIN_CONFIG_MEDIADIR","Media Directory");
define("_EMPORIUM_ADMIN_CONFIG_THUMBWIDTH","Thumbnail Width");
define("_EMPORIUM_ADMIN_CONFIG_THUMBICM","Thumbnail Conversion Method");
define("_EMPORIUM_ADMIN_CONFIG_ICMPATH","Conversion Software Path");
define("_EMPORIUM_ADMIN_CONFIG_CURRENCIES","Currencies");
define("_EMPORIUM_ADMIN_CONFIG_UPDATE","Update Emporium Settings");
define("_EMPORIUM_ADMIN_CONFIG_TAXOPTIONS","Taxing Options");

######################################################################
# From file: currencies.php
######################################################################
define("_EMPORIUM_ADMIN_CURRENCIES_CURRENCY","Currency");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRENCYID","Currency ID");
define("_EMPORIUM_ADMIN_CURRENCIES_ADDCURR","Add Currency");
define("_EMPORIUM_ADMIN_CURRENCIES_EDITCURR","Edit Currency");
define("_EMPORIUM_ADMIN_CURRENCIES_UPDATECURR","Update Currency");
define("_EMPORIUM_ADMIN_CURRENCIES_CURROPTIONS","Currency Options");
define("_EMPORIUM_ADMIN_CURRENCIES_LAUNCHCURRTABLE","Launch Currency Table");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRINFO","Currency Information");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRCODE","Currency Code");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRNAME","Currency Name");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRDESC","Description");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRRV","Relative Value");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRAP","Price Adjustment");
define("_EMPORIUM_ADMIN_CURRENCIES_ACTCURR","Activate Currency");
define("_EMPORIUM_ADMIN_CURRENCIES_CURROUTPUT","Currency Output");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRDECPOINT","Decimal Point");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRDECPLACES","Decimal Places");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRTHPOINT","Thousands Point");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRSYMLEFT","Symbol Left");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRSYMRIGHT","Symbol Right");
define("_EMPORIUM_ADMIN_CURRENCIES_DEFCURR","Default Currency");
define("_EMPORIUM_ADMIN_CURRENCIES_ERRORDEFCURR","ERROR! You must have a default currency.");
define("_EMPORIUM_ADMIN_CURRENCIES_CURRLIST","Currency List");
define("_EMPORIUM_ADMIN_CURRENCIES_CURROPTSTATS","Currency Options/Statistics");
define("_EMPORIUM_ADMIN_CURRENCIES_TOTALCURR","Total Currencies");
define("_EMPORIUM_ADMIN_CURRENCIES_DEFAULT","Default");
define("_EMPORIUM_ADMIN_CURRENCIES_NOCURR","There are no currencies. You need to add a currency!");
define("_EMPORIUM_ADMIN_CURRENCIES_UPDATEXR","Automated Currency Conversion");
define("_EMPORIUM_ADMIN_CURRENCIES_BASECURRENCY","Base Currency");

######################################################################
# From file: index.php
######################################################################
define("_EMPORIUM_ADMIN_INDEX_BRANDS","Brands");
define("_EMPORIUM_ADMIN_INDEX_BRANDSDESC","Manage product brands.");
define("_EMPORIUM_ADMIN_INDEX_CATEGORIES","Categories");
define("_EMPORIUM_ADMIN_INDEX_CATEGORIESDESC","Manage store categories.");
define("_EMPORIUM_ADMIN_INDEX_CURRENCIES","Currencies");
define("_EMPORIUM_ADMIN_INDEX_CURRENCIESDESC","Manage store currencies.");
define("_EMPORIUM_ADMIN_INDEX_PRODUCTS","Products");
define("_EMPORIUM_ADMIN_INDEX_PRODUCTSDESC","Manage store products.");
define("_EMPORIUM_ADMIN_INDEX_PRODUCTOPTIONS","Options");
define("_EMPORIUM_ADMIN_INDEX_REVIEWOPTIONS","Reviews");
define("_EMPORIUM_ADMIN_INDEX_PRODUCTMEDIA","Media");
define("_EMPORIUM_ADMIN_INDEX_ORDERS","Orders");
define("_EMPORIUM_ADMIN_INDEX_ORDERSDESC","Manage orders.");
define("_EMPORIUM_ADMIN_INDEX_STORECONFIG","General Settings");
define("_EMPORIUM_ADMIN_INDEX_STORECONFIGDESC","Make changes to store configuration.");
define("_EMPORIUM_ADMIN_INDEX_LOCATIONS","Locations");
define("_EMPORIUM_ADMIN_INDEX_LOCATIONSDESC","Manage countries and states.");
define("_EMPORIUM_ADMIN_INDEX_COUNTRIES","Countries");
define("_EMPORIUM_ADMIN_INDEX_STATES","States");
define("_EMPORIUM_ADMIN_INDEX_PAYMENTS","Payment Methods");
define("_EMPORIUM_ADMIN_INDEX_PAYMENTSDESC","Configure payment methods.");
define("_EMPORIUM_ADMIN_INDEX_SHIPPING","Shipping Methods");
define("_EMPORIUM_ADMIN_INDEX_SHIPPINGDESC","Configure shipping methods.");
define("_EMPORIUM_ADMIN_INDEX_TAXES","Taxes");
define("_EMPORIUM_ADMIN_INDEX_TAXESDESC","Manage tax classes.");
define("_EMPORIUM_ADMIN_INDEX_COPYRIGHT","© 2002, 2003 <B>Emporium</B> || <a href=\"http://www.burnwave.com\"><b>Burnwave, Ltd.</b></a>");

######################################################################
# From file: locations.php
######################################################################
define("_EMPORIUM_ADMIN_LOCATIONS_COUNTRYLIST","Country List");
define("_EMPORIUM_ADMIN_LOCATIONS_LOCATIONSLIST","Location List");
define("_EMPORIUM_ADMIN_LOCATIONS_COUNTRIES","Countries");
define("_EMPORIUM_ADMIN_LOCATIONS_STATES","States/Provinces");
define("_EMPORIUM_ADMIN_LOCATIONS_COUNTRYOPTSTAT","Country Options/Statistics");
define("_EMPORIUM_ADMIN_LOCATIONS_ADDCOUNTRY","Add Country");
define("_EMPORIUM_ADMIN_LOCATIONS_TOTALCOUNTRIES","Total Countries");
define("_EMPORIUM_ADMIN_LOCATIONS_ERRNOCOUNTRIES","There are no countries! YOU NEED TO ADD A COUNTRY!");
define("_EMPORIUM_ADMIN_LOCATIONS_COUNTRYNAME","Country Name");
define("_EMPORIUM_ADMIN_LOCATIONS_COUNTRYCODE","Country Code");
define("_EMPORIUM_ADMIN_LOCATIONS_EDITCOUNTRY","Edit Country");
define("_EMPORIUM_ADMIN_LOCATIONS_UPDATECOUNTRY","Update Country");
define("_EMPORIUM_ADMIN_LOCATIONS_STATELIST","State List");
define("_EMPORIUM_ADMIN_LOCATIONS_STATEOPTSTAT","State Options/Statistics");
define("_EMPORIUM_ADMIN_LOCATIONS_ADDSTATE","Add State");
define("_EMPORIUM_ADMIN_LOCATIONS_STATENAME","State Name");
define("_EMPORIUM_ADMIN_LOCATIONS_STATECODE","State Code");
define("_EMPORIUM_ADMIN_LOCATIONS_TOTALSTATES","Total States");
define("_EMPORIUM_ADMIN_LOCATIONS_ERRNOSTATES","There are no states.");
define("_EMPORIUM_ADMIN_LOCATIONS_EDITSTATE","Edit State");
define("_EMPORIUM_ADMIN_LOCATIONS_UPDATESTATE","Update State");

######################################################################
# From file: orders.php
######################################################################
define("_EMPORIUM_ADMIN_ORDERS_ACTIVEORDERS","Active Orders");
define("_EMPORIUM_ADMIN_ORDERS_FILEDORDERS","Filed Orders");
define("_EMPORIUM_ADMIN_ORDERS_ORDERSTATS","Order Statistics");
define("_EMPORIUM_ADMIN_ORDERS_ORDERLIST","Order List");
define("_EMPORIUM_ADMIN_ORDERS_TOTALORDERS","Total Orders");
define("_EMPORIUM_ADMIN_ORDERS_ORDERACTIVE","Active");
define("_EMPORIUM_ADMIN_ORDERS_ORDERFILED","Filed");
define("_EMPORIUM_ADMIN_ORDERS_NEWORDER","New");
define("_EMPORIUM_ADMIN_ORDERS_ORDERSTATUS","Order Status");
define("_EMPORIUM_ADMIN_ORDERS_INVOICENUM","Order Invoice");
define("_EMPORIUM_ADMIN_ORDERS_ORDERID","Order ID");
define("_EMPORIUM_ADMIN_ORDERS_DATEPRINTED","Date Printed");
define("_EMPORIUM_ADMIN_ORDERS_ORDERDATE","Order Date");
define("_EMPORIUM_ADMIN_ORDERS_SHIPINFO","Shipping Information");
define("_EMPORIUM_ADMIN_ORDERS_BILLINFO","Billing Information");
define("_EMPORIUM_ADMIN_ORDERS_SHIPMETHOD","Shipping Method");
define("_EMPORIUM_ADMIN_ORDERS_PAYMETHOD","Payment Method");
define("_EMPORIUM_ADMIN_ORDERS_PRODCODE","SKU");
define("_EMPORIUM_ADMIN_ORDERS_PRODNAME","Product");
define("_EMPORIUM_ADMIN_ORDERS_QUANTITY","Qty.");
define("_EMPORIUM_ADMIN_ORDERS_PRODPRICE","Price");
define("_EMPORIUM_ADMIN_ORDERS_TOTAL","Total");
define("_EMPORIUM_ADMIN_ORDERS_TAX","Tax");
define("_EMPORIUM_ADMIN_ORDERS_PRODTOTAL","Product Total");
define("_EMPORIUM_ADMIN_ORDERS_SHIPHANDLING","Shipping/Handling Charge");
define("_EMPORIUM_ADMIN_ORDERS_VIEW","View");
define("_EMPORIUM_ADMIN_ORDERS_FILE","File");
define("_EMPORIUM_ADMIN_ORDERS_UNFILE","Unfile");
define("_EMPORIUM_ADMIN_ORDERS_FLAG","Flag");
define("_EMPORIUM_ADMIN_ORDERS_UNFLAG","Unflag");
define("_EMPORIUM_ADMIN_ORDERS_NOACTORDERS","There are no active orders.");
define("_EMPORIUM_ADMIN_ORDERS_NOFILEDORDERS","There are no filed orders.");
define("_EMPORIUM_ADMIN_ORDERS_DISPLAYING","Displaying");
define("_EMPORIUM_ADMIN_ORDERS_TO","to");
define("_EMPORIUM_ADMIN_ORDERS_OF","of");
define("_EMPORIUM_ADMIN_ORDERS_PAGE","Page");
define("_EMPORIUM_ADMIN_ORDERS_ORDERINFO","Order Information");
define("_EMPORIUM_ADMIN_ORDERS_PRINTINVOICE","Print Invoice");
define("_EMPORIUM_ADMIN_ORDERS_ORDERNOTES","Order Notes");
define("_EMPORIUM_ADMIN_ORDERS_NOTIFYCUSTOMER","Notify Customer");
define("_EMPORIUM_ADMIN_ORDERS_STATUSUPDATED","Status Updated");
define("_EMPORIUM_ADMIN_ORDERS_DAYPHONE","Day Phone");
define("_EMPORIUM_ADMIN_ORDERS_EVENINGPHONE","Evening Phone");
define("_EMPORIUM_ADMIN_ORDERS_EMAIL","Email Address");
define("_EMPORIUM_ADMIN_ORDERS_NA","N/A");
define("_EMPORIUM_ADMIN_ORDERS_NONE","-- None --");

######################################################################
# From file: payments.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENTS_PMLIST","Payment Method List");
define("_EMPORIUM_ADMIN_PAYMENTS_PMOPTSTATS","Payment Options/Statistics");
define("_EMPORIUM_ADMIN_PAYMENTS_DEFAULTPM","Default Payment Method");
define("_EMPORIUM_ADMIN_PAYMENTS_TOTALPM","Total Payment Methods");
define("_EMPORIUM_ADMIN_PAYMENTS_NOPMERROR","There are no payment methods available! YOU NEED TO INSTALL A PAYMENT MODULE!");
define("_EMPORIUM_ADMIN_PAYMENTS_NODEFPMERROR","Error! You must have a default payment method.");
define("_EMPORIUM_ADMIN_PAYMENTS_GENERALOPTIONS","General Options");
define("_EMPORIUM_ADMIN_PAYMENTS_PMNAME","Payment Method Name");
define("_EMPORIUM_ADMIN_PAYMENTS_CDNAME","Cart Display Name");
define("_EMPORIUM_ADMIN_PAYMENTS_CDINFO","Cart Display Info");
define("_EMPORIUM_ADMIN_PAYMENTS_DEFPM","Default Payment");
define("_EMPORIUM_ADMIN_PAYMENTS_ACTIVEPM","Payment Active");
define("_EMPORIUM_ADMIN_PAYMENTS_INSTALLMODULE","Install Payment Module");
define("_EMPORIUM_ADMIN_PAYMENTS_UPDATEPM","Update Payment Method Options");

######################################################################
# From file: products.php
######################################################################
define("_EMPORIUM_ADMIN_PRODUCTS_CATPRODLIST","Category/Product List");
define("_EMPORIUM_ADMIN_PRODUCTS_CURRENTCAT","Current Category");
define("_EMPORIUM_ADMIN_PRODUCTS_ROOT","root");
define("_EMPORIUM_ADMIN_PRODUCTS_ROOTCAT","Root Category");
define("_EMPORIUM_ADMIN_PRODUCTS_VIEWCAT","View Category");
define("_EMPORIUM_ADMIN_PRODUCTS_VIEWBRAND","View Brand");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODVIEWS","Product Views");
define("_EMPORIUM_ADMIN_PRODUCTS_CATSTATSOPS","Category Options/Statistics");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODSTATSOPS","Product Options/Statistics");
define("_EMPORIUM_ADMIN_PRODUCTS_ADDPRODUCT","Add Product");
define("_EMPORIUM_ADMIN_PRODUCTS_DELPRODUCT","Delete Product");
define("_EMPORIUM_ADMIN_PRODUCTS_EDITPRODUCT","Edit Product");
define("_EMPORIUM_ADMIN_PRODUCTS_ADDMAINCAT","Add Main Category");
define("_EMPORIUM_ADMIN_PRODUCTS_ADDSUBCAT","Add Sub Category");
define("_EMPORIUM_ADMIN_PRODUCTS_MAINCATS","Main Categories");
define("_EMPORIUM_ADMIN_PRODUCTS_NOMAINCATS","There are no main categories.");
define("_EMPORIUM_ADMIN_PRODUCTS_SUBCATS","Sub Categories");
define("_EMPORIUM_ADMIN_PRODUCTS_NOSUBCATS","There are no sub categories.");
define("_EMPORIUM_ADMIN_PRODUCTS_TOTALCATS","Total Categories");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODUCT","Product");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODUCTS","Products");
define("_EMPORIUM_ADMIN_PRODUCTS_TOTALPRODUCTS","Total Products");
define("_EMPORIUM_ADMIN_PRODUCTS_ACTIVE","Active");
define("_EMPORIUM_ADMIN_PRODUCTS_INACTIVE","Inactive");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMOPRODUCTS","Promotional Products");
define("_EMPORIUM_ADMIN_PRODUCTS_NOPROMOPRODUCTS","There are no promotional products.");
define("_EMPORIUM_ADMIN_PRODUCTS_NOPRODUCTS","There are no products.");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODID","Product ID");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODINFO","Product Information");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODNAME","Product Name");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODSKU","Product SKU");
define("_EMPORIUM_ADMIN_PRODUCTS_BRANDNAME","Brand Name");
define("_EMPORIUM_ADMIN_PRODUCTS_NONE","-----------");
define("_EMPORIUM_ADMIN_PRODUCTS_DEFAULT","*-DEFAULT-*");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODMODEL","Model / Version");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODCAT","Category");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODSDESC","Short Description");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODDESC","Description");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODXDESC","Extended Description");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODMEDIA","Product Media");
define("_EMPORIUM_ADMIN_PRODUCTS_ADDMEDIA","Add Media");
define("_EMPORIUM_ADMIN_PRODUCTS_MEDIANAME","Media Name");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODREVIEWS","Product Reviews");
define("_EMPORIUM_ADMIN_PRODUCTS_ADDREVIEW","Add Review");
define("_EMPORIUM_ADMIN_PRODUCTS_AVGREVIEWRATING","Average Review Rating");
define("_EMPORIUM_ADMIN_PRODUCTS_PENDINGREVIEWS","Pending Reviews");
define("_EMPORIUM_ADMIN_PRODUCTS_NOREVIEWS","No Reviews Added");
define("_EMPORIUM_ADMIN_PRODUCTS_REVIEWNAME","Review Name");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMOINFO","Promotional Information");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMONAME","Promo Name");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMODESC","Promo Description");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMOCOST","Promo Cost");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMOENABLED","Promo Enabled");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMOSTARTD","Start Date");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMOENDD","End Date");
define("_EMPORIUM_ADMIN_PRODUCTS_MONTH","Month");
define("_EMPORIUM_ADMIN_PRODUCTS_DAY","Day");
define("_EMPORIUM_ADMIN_PRODUCTS_YEAR","Year");
define("_EMPORIUM_ADMIN_PRODUCTS_PROMONOEXP","For no Start/Expiration date, leave all values at '--'.");
define("_EMPORIUM_ADMIN_PRODUCTS_DISPLAYPROD","Display Product");
define("_EMPORIUM_ADMIN_PRODUCTS_UNITCOSTS","Unit Costs");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODRETAIL","Price");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODMSRP","MSRP");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODWHOLESALE","Wholesale");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODTAXCLASS","Tax Class");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODTEMPLATE","Product Template");
define("_EMPORIUM_ADMIN_PRODUCTS_SHIPINFO","Shipping Info");
define("_EMPORIUM_ADMIN_PRODUCTS_SHIPBASECOST","Base Cost");
define("_EMPORIUM_ADMIN_PRODUCTS_SHIPWEIGHT","Weight");
define("_EMPORIUM_ADMIN_PRODUCTS_SHIPHANDLINGCOST","Handling Cost");
define("_EMPORIUM_ADMIN_PRODUCTS_STOCKINFO","Stock Info");
define("_EMPORIUM_ADMIN_PRODUCTS_STOCKMANAGE","Manage Stock");
define("_EMPORIUM_ADMIN_PRODUCTS_STOCKQTY","Quantity");
define("_EMPORIUM_ADMIN_PRODUCTS_NOCATS","You don't have any categories! Please create a category before adding products.");
define("_EMPORIUM_ADMIN_PRODUCTS_NOMEDIA","No Media Added");
define("_EMPORIUM_ADMIN_PRODUCTS_PRODOPTIONS","Product Options");
define("_EMPORIUM_ADMIN_PRODUCTS_ADDOPTION","Add Option");
define("_EMPORIUM_ADMIN_PRODUCTS_OPTIONNAME","Option Name");
define("_EMPORIUM_ADMIN_PRODUCTS_NOOPTIONS","No Options");
define("_EMPORIUM_ADMIN_PRODUCTS_NOTHUMB","No thumbnail present.");
define("_EMPORIUM_ADMIN_PRODUCTS_THUMBNAIL","Thumbnail");
define("_EMPORIUM_ADMIN_PRODUCTS_ULRETHUMB","Upload/Replace Thumbnail");
define("_EMPORIUM_ADMIN_PRODUCTS_DELCONFIRM","Are you certain you want to delete this product?");

######################################################################
# From file: products_media.php
######################################################################
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIA","Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIAID","Media ID");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIALIST","Media List");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIAOPTSTATS","Media Options/Statistics");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_ADDMEDIA","Add Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_TOTALMEDIA","Total Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_NOMEDIA","There are no product media.");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_PRODID","Product ID");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_PRODUSINGMEDIA","Product ID(s) Using Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIAINFO","Media Information");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIANAME","Media Name");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIADESC","Media Description");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIATYPE","Media Type");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIAUPLOAD","Upload Media Locally");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_VIEWCURRENT","View Current");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_REMOTENOTE","*If no media is uploaded locally, remote is used.*");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_REMOTEADDRESS","Remote Address");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_GLOBAL","Global (Reusable)");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_REUSEGMEDIA","Reuse Global Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_MEDIAIDNAME","Media ID/Name");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_EDITMEDIA","Edit Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_UPDATEMEDIA","Update Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_DELETEMEDIA","Delete Media");
define("_EMPORIUM_ADMIN_PRODUCTSMEDIA_DELMEDIANOTE","Are you sure you want to delete this media and all product references?");

######################################################################
# From file: products_options.php
######################################################################
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONLIST","Product Options List");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_PRODOPTIONS","Product Options Functions/Stats");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_ADDOPTION","Add Option");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_TOTALOPTIONS","Total Options");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_GLOBAL","Global");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_NOOPTIONS","There are no product options.");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_PRODUCT","Product");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_ADDPRODOPTION","Add Product Option");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_PRODID","Product ID");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_BACKTOPROD","Back to Product");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONNAME","Option Name");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONINFO","Option Information");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONDESC","Option Description");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONTYPE","Option Type");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONSTATS","Option Stats");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_DROPDOWN","Drop Down");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_RADIOBUTTONS","Radio Buttons");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SINGLESEL","Single Selection");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_CHECKBOX","Check Box");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_MULTIDROPDOWN","Multi-Drop Down");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_MULTISEL","Multiple Selections");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_TEXTFIELD","Text Field");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_TEXTAREA","Text Area");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_CUSTOMINPUT","Custom Input");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_INCLUSIONS","Inclusions");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_FIXEDSEL","Fixed Selections");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELROWS","Selection Rows");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_REUSABLE","Global (Reusable)");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_REUSEGO","Reuse Global Option");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTIONIDNAME","Option ID/Name");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_ERRORDEFSELDEL","Default selections may not be deleted!");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_EDITOPSNSEL","Edit Option / Selections");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTION","Option");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_OPTSELS","Option Selections");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELFUNCTIONS","Selection Functions");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_ADDSEL","Add Selection Rows");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_PRODIDUSEOPTION","Product ID(s) Using Option");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_NONE","None");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_TOTALSELROWS","Total Selection Rows");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELNAME","Selection Name");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELINFO","Information");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELACTION","Action");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELVALUE","Value");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_SELDEF","Default");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_NOSELS","There are no selections to edit!");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_DELOPTION","Delete Option");
define("_EMPORIUM_ADMIN_PRODUCTSOPTIONS_DELOPTIONANDREF","Are you sure you want to delete this option and all product references?");

######################################################################
# From file: products_reviews.php
######################################################################
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWSLIST","Reviews List");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PENDINGREVIEWSLIST","Pending Reviews List");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISHEDREVIEWSLIST","Published Reviews List");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWOPTSTATS","Reviews Options/Stats");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_TOTALREVIEWS","Total Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISHED","Published");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISHEDREVIEWS","Published Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PENDING","Pending");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PENDINGREVIEWS","Pending Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_NOPENDING","There are no pending reviews.");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_NOPUBLISHED","There are no published reviews.");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PRODUCT","Product");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PRODUCTREVIEW","Product Review");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_SUBMITTED","Submitted");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_MODIFIED","Modified");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_VIEWEDIT","View/Edit");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISH","Publish Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISHALL","Publish All Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_DELETE","Delete Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_DELETEALL","Delete All Reviews");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_WITHSELECTED","With Selected");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_ADDREVIEW","Add Review");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_EDITREVIEW","Edit Review");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWINFO","Product Review Information");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWID","Review ID");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PRODUCTID","Product ID");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWAUTHOR","User");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWTITLE","Review Title");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWRATING","Review Rating");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWCONTENT","Review Content");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_REVIEWOPTIONS","Product Review Options/Stats");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_DELETEREVIEW","Delete Review");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_ACTIVEREVIEW","Active Review");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISHREVIEW","Publish Review");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_AUTHOR","Author");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_ANONMYOUS","Anonymous");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PUBLISHEDDATE","Published Date");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_STARS","Stars");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_GO","Go");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_ASC","ASC");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_DESC","DESC");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_PAGE","Page");
define("_EMPORIUM_ADMIN_PRODUCTSREVIEWS_OF","of");

######################################################################
# From file: shipping.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_SMLIST","Shipping Method List");
define("_EMPORIUM_ADMIN_SHIPPING_SMOPTSTATS","Shipping Options/Statistics");
define("_EMPORIUM_ADMIN_SHIPPING_DEFAULTSM","Default Shipping Method");
define("_EMPORIUM_ADMIN_SHIPPING_TOTALSM","Total Shipping Methods");
define("_EMPORIUM_ADMIN_SHIPPING_NOSMERROR","There are no shipping methods available! YOU NEED TO INSTALL A SHIPPING MODULE!");
define("_EMPORIUM_ADMIN_SHIPPING_NODEFSMERROR","Error! You must have a default shipping method.");
define("_EMPORIUM_ADMIN_SHIPPING_GENERALOPTIONS","General Options");
define("_EMPORIUM_ADMIN_SHIPPING_SMNAME","Shipping Method Name");
define("_EMPORIUM_ADMIN_SHIPPING_CDNAME","Cart Display Name");
define("_EMPORIUM_ADMIN_SHIPPING_CDINFO","Cart Display Info");
define("_EMPORIUM_ADMIN_SHIPPING_DEFSM","Default Payment");
define("_EMPORIUM_ADMIN_SHIPPING_UPDATESM","Update Shipping Method Options");
define("_EMPORIUM_ADMIN_SHIPPING_INCHANDLING","Include Handling Cost");

######################################################################
# From file: taxes.php
######################################################################
define("_EMPORIUM_ADMIN_TAXES_TAXCLASSLIST","Tax Classes");
define("_EMPORIUM_ADMIN_TAXES_TAXCLASS","Tax Class");
define("_EMPORIUM_ADMIN_TAXES_TAXCLASSSTATS","Tax Class Options/Statistics");
define("_EMPORIUM_ADMIN_TAXES_ADDTAXCLASS","Add Tax Class");
define("_EMPORIUM_ADMIN_TAXES_CLASSLOCATIONS","Class Locations");
define("_EMPORIUM_ADMIN_TAXES_TOTALCLASSES","Total Classes");
define("_EMPORIUM_ADMIN_TAXES_NOCLASSES","There are currently no tax classes.");
define("_EMPORIUM_ADMIN_TAXES_NOLIC","There are currently no locations by this class.");
define("_EMPORIUM_ADMIN_TAXES_CLASSNAME","Class Name");
define("_EMPORIUM_ADMIN_TAXES_CLASSDESC","Description");
define("_EMPORIUM_ADMIN_TAXES_UPDATE","Update Class");
define("_EMPORIUM_ADMIN_TAXES_TOTALLOCS","Locations");
define("_EMPORIUM_ADMIN_TAXES_COUNTRIES","Countries");
define("_EMPORIUM_ADMIN_TAXES_STATES","States/Provinces");
define("_EMPORIUM_ADMIN_TAXES_TAXCLASSCOUNTRIES","Tax Class Countries");
define("_EMPORIUM_ADMIN_TAXES_TAXCLASSSTATES","Tax Class States/Provinces");
define("_EMPORIUM_ADMIN_TAXES_TAXVALUEPERCENT","Percent");
define("_EMPORIUM_ADMIN_TAXES_TAXVALUEFLAT","Flat");
define("_EMPORIUM_ADMIN_TAXES_ADDLOCATIONS","Add Locations");
define("_EMPORIUM_ADMIN_TAXES_DELETECLASS","Delete Class");
define("_EMPORIUM_ADMIN_TAXES_TOTALPRODUCTS","Total Products Using Class");
define("_EMPORIUM_ADMIN_TAXES_DELETECLASSOK","Are you sure you want to delete this Tax Class and all product references?");

######################################################################
# From file: includes/functions.php
######################################################################
define("_EMPORIUM_ADMIN_FUNCTIONS_ADMINISTRATION","Emporium Administration");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_MAINMENU","Main Menu");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_AEPRODUCTS","Products");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_AECATEGORIES","Categories");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_AEBRANDS","Brands");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_VIEWORDERS","Orders");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_GENERALOPTIONS","General Settings");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_PAYMENTOPTIONS","Payment Methods");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_SHIPPINGOPTIONS","Shipping Methods");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_LT","Locations");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_TAXES","Taxes");
define("_EMPORIUM_ADMIN_FUNCTIONS_MENU_CURRENCYOPTIONS","Currencies");



#############################################
# PAYMENT METHODS
# DIR: admin/modules/emporium/mail/
#############################################
######################################################################
# From file: orderstatus.php
######################################################################
define("_EMPORIUM_ADMIN_MAIL_ORDERSTATUS_SUBJECT","Status Change for Order #");
define("_EMPORIUM_ADMIN_MAIL_ORDERSTATUS_ORDERID","Order ID");
define("_EMPORIUM_ADMIN_MAIL_ORDERSTATUS_UPDATEDTO","Your order status has been updated to");
define("_EMPORIUM_ADMIN_MAIL_ORDERSTATUS_TRACKSTATUS","You can track your purchase status by visiting the following link");



#############################################
# PAYMENT METHODS
# DIR: admin/modules/emporium/payments/
#############################################
######################################################################
# From file: 2checkout.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_2CHECKOUT_OPTIONS","2Checkout Options");
define("_EMPORIUM_ADMIN_PAYMENT_2CHECKOUT_SELLERID","Seller ID");
define("_EMPORIUM_ADMIN_PAYMENT_2CHECKOUT_TRANSMODE","Transaction Mode");
define("_EMPORIUM_ADMIN_PAYMENT_2CHECKOUT_MODETEST","Test");
define("_EMPORIUM_ADMIN_PAYMENT_2CHECKOUT_MODEPRODUCTION","Production");
define("_EMPORIUM_ADMIN_PAYMENT_2CHECKOUT_2CORECEIPT","Notify Admin");

######################################################################
# From file: authorize.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_OPTIONS","Authorize.net Options");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_LOGINID","Login ID");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_TRANSKEY","Transaction Key");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_TRANSMETH","Transaction Method");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_SIM","Simple Integration Method");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_AIM","Advanced Integration Method");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_TRANSMODE","Transaction Mode");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_MODETEST","Test");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_MODEPRODUCTION","Production");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_NOTIFYC","Notify Customer");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_NOTIFYA","Notify Admin");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_RELAYURL","Relay URL");
define("_EMPORIUM_ADMIN_PAYMENT_AUTHORIZE_RUINFO","You <B>must</B> add this Relay URL in the Authorize Merchant Interface.");

######################################################################
# From file: bankofamerica.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_BANKOFAMERICA_OPTIONS","Bank of America Options");
define("_EMPORIUM_ADMIN_PAYMENT_BANKOFAMERICA_MERCHANTID","Merchant ID");
define("_EMPORIUM_ADMIN_PAYMENT_BANKOFAMERICA_CVV","CVV");

######################################################################
# From file: creditcard.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_OPTIONS","Credit Card List");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_OPTSTATS","Credit Card Options/Statistics");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_ADDCARD","Add Credit Card");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_ADD","Add");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_TOTALCARDS","Total Cards");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_CREDITCARDS","Credit Cards");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_FUNCTIONS","Functions");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_ACTIVATE","Activate");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_DEACTIVATE","Deactivate");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_DELETE","Delete");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_NOCARDS","There are no credit cards. Add a credit card!");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_CUSTOMERINFO","Customer Credit Card Information");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_CARDTYPE","Card Type");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_CVV","Card Number/CVV");
define("_EMPORIUM_ADMIN_PAYMENT_CREDITCARD_EXP","Card Expiration Date");

######################################################################
# From file: directdeposit.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_DIRECTDEPOSIT_OPTIONS","Direct Deposit Options");
define("_EMPORIUM_ADMIN_PAYMENT_DIRECTDEPOSIT_BANKNAME","Bank Name");
define("_EMPORIUM_ADMIN_PAYMENT_DIRECTDEPOSIT_ROUTINGNO","Routing #");
define("_EMPORIUM_ADMIN_PAYMENT_DIRECTDEPOSIT_BRANCHNO","Branch / BSB #");
define("_EMPORIUM_ADMIN_PAYMENT_DIRECTDEPOSIT_ACCOUNTNO","Account #");
define("_EMPORIUM_ADMIN_PAYMENT_DIRECTDEPOSIT_ACCOUNTNAME","Account Name");

######################################################################
# From file: nochex.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_NOCHEX_OPTIONS","NOCHEX Options");
define("_EMPORIUM_ADMIN_PAYMENT_NOCHEX_EMAIL","NOCHEX Email");

######################################################################
# From file: paymate.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_PAYMATE_OPTIONS","PayMate Options");
define("_EMPORIUM_ADMIN_PAYMENT_PAYMATE_PMID","PayMate ID");

######################################################################
# From file: paypal.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_OPTIONS","PayPal Options");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_PPEMAIL","PayPal Email");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_IPN","Instant Payment Notification");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_IPNNOTE","Make sure the Domain Protocol/URL is correct to ensure IPN will work properly.");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_TRANSCURR","Transaction Currency");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_PPIPNTI","PayPal (IPN) Transaction Information");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_PAYEREMAIL","Payer Email");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_TRANSID","Transaction ID");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_TRANSTYPE","Transaction Type");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_PAYMENTTYPE","Payment Type");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_PAYMENTSTATUS","Payment Status");
define("_EMPORIUM_ADMIN_PAYMENT_PAYPAL_PENDINGREASON","Pending Reason");

######################################################################
# From file: paysystems.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_PAYSYSTEMS_OPTIONS","PaySystems Options");
define("_EMPORIUM_ADMIN_PAYMENT_PAYSYSTEMS_CID","Company ID");

######################################################################
# From file: psigate.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_PSIGATE_OPTIONS","PSiGate Options");
define("_EMPORIUM_ADMIN_PAYMENT_PSIGATE_MID","Merchant ID");

######################################################################
# From file: secpay.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_SECPAY_OPTIONS","SecPay Options");
define("_EMPORIUM_ADMIN_PAYMENT_SECPAY_MERCHANTID","Merchant ID");
define("_EMPORIUM_ADMIN_PAYMENT_SECPAY_PROCESSMODE","Process Mode");
define("_EMPORIUM_ADMIN_PAYMENT_SECPAY_TESTSUCCESS","Test: Always Successful");
define("_EMPORIUM_ADMIN_PAYMENT_SECPAY_TESTFAILURE","Test: Always Fail");
define("_EMPORIUM_ADMIN_PAYMENT_SECPAY_PRODUCTION","Production");

######################################################################
# From file: stormpay.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_STORMPAY_OPTIONS","StormPay Options");
define("_EMPORIUM_ADMIN_PAYMENT_STORMPAY_SPEMAIL","StormPay Email");

######################################################################
# From file: verisign.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_VERISIGN_OPTIONS","Verisign Options");
define("_EMPORIUM_ADMIN_PAYMENT_VERISIGN_LOGINID","Login ID");
define("_EMPORIUM_ADMIN_PAYMENT_VERISIGN_PARTNERID","Partner ID");
define("_EMPORIUM_ADMIN_PAYMENT_VERISIGN_NOTIFYC","Notify Customer");

######################################################################
# From file: worldpay.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_WORLDPAY_OPTIONS","WorldPay Options");
define("_EMPORIUM_ADMIN_PAYMENT_WORLDPAY_VENDORID","Vendor ID");
define("_EMPORIUM_ADMIN_PAYMENT_WORLDPAY_PROCESSMODE","Process Mode");
define("_EMPORIUM_ADMIN_PAYMENT_WORLDPAY_PMNORMAL","Normal");
define("_EMPORIUM_ADMIN_PAYMENT_WORLDPAY_PMTESTSUCCESS","Test Success");
define("_EMPORIUM_ADMIN_PAYMENT_WORLDPAY_PMTESTFAILURE","Test Failure");



#############################################
# SHIPPING METHODS
# DIR: admin/modules/emporium/shipping/
#############################################
######################################################################
# From file: flatrate.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_FLATRATE_OPTIONS","Flat Rate Options");
define("_EMPORIUM_ADMIN_SHIPPING_FLATRATE_FCOST","Flat Cost");

######################################################################
# From file: peritem.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_PERITEM_OPTIONS","Per Item Options");
define("_EMPORIUM_ADMIN_SHIPPING_PERITEM_CPITEM","Cost Per Item");

######################################################################
# From file: producttotal.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_PRODUCTTOTAL_OPTIONS","Product Total (Percentage) Options");
define("_EMPORIUM_ADMIN_SHIPPING_PRODUCTTOTAL_PERCENT","Percent of Product Total");

######################################################################
# From file: productweight.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_PRODUCTWEIGHT_OPTIONS","Product Weight Options");
define("_EMPORIUM_ADMIN_SHIPPING_PRODUCTWEIGHT_CPWU","Cost Per Weight Unit");










###############################
# Emporium 2.3.1 Lang Changes
# ---------------------------
# This is for translators
###############################
######################################################################
# From file: config.php
######################################################################
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_CONFIG","Checkout Configuration");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQUIRED","Required");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQUIREDFIELDS","Required Checkout Fields");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPFIRSTNAME","Shipping - First Name");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPLASTNAME","Shipping - Last Name");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPADDRESS1","Shipping - Address 1");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPADDRESS2","Shipping - Address 2");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPCITY","Shipping - City");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPSTATE","Shipping - State");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPZIP","Shipping - ZIP");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQSHIPCOUNTRY","Shipping - Country");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLFIRSTNAME","Billing - First Name");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLLASTNAME","Billing - Last Name");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLADDRESS1","Billing - Address 1");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLADDRESS2","Billing - Address 2");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLCITY","Billing - City");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLSTATE","Billing - State");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLZIP","Billing - ZIP");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLCOUNTRY","Billing - Country");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLDAYPHONE","Billing - Day Phone");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLEVEPHONE","Billing - Evening Phone");
define("_EMPORIUM_ADMIN_CONFIG_CHECKOUT_REQBILLEMAIL","Billing - Email");
######################################################################
# From file: products.php
######################################################################
define("_EMPORIUM_ADMIN_PRODUCTS_KEYWORDS","Keywords");
define("_EMPORIUM_ADMIN_PRODUCTS_SHIPPINGETS","Shipping ETS");
define("_EMPORIUM_ADMIN_PRODUCTS_AVAILABILITY","Availability");
######################################################################
# From file: categories.php
######################################################################
define("_EMPORIUM_ADMIN_CATEGORIES_KEYWORDS","Keywords");
######################################################################
# From file: payment.virtualtiendas.php
######################################################################
define("_EMPORIUM_ADMIN_PAYMENT_VIRTUALTIENDAS_OPTIONS","VirtualTienda Options");
define("_EMPORIUM_ADMIN_PAYMENT_VIRTUALTIENDAS_STOREDOMAIN","VT Store Domain");
define("_EMPORIUM_ADMIN_PAYMENT_VIRTUALTIENDAS_STOREDOMAINNOTE","example: yourdomain.com, yourdomain.zonavirtual.com");
define("_EMPORIUM_ADMIN_PAYMENT_VIRTUALTIENDAS_STOREROUTE","VT Store Route");
define("_EMPORIUM_ADMIN_PAYMENT_VIRTUALTIENDAS_STOREROUTENOTE","Respective route, usually 3 characters");
define("_EMPORIUM_ADMIN_PAYMENT_VIRTUALTIENDAS_STORECURRENCY","Currency Conversion");
######################################################################
# From file: shipping.ups.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_UPS_OPTIONS","UPS Options");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_COUNTRYCODE","Country Code (2 Letters)");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_POSTALCODE","Postal Code");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_SHIPPINGSERVICE","Shipping Services");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_USERID","UPS User ID");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_USERPASSWORD","UPS Password");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_LICENSENUMBER","UPS License Number");
define("_EMPORIUM_ADMIN_SHIPPING_UPS_DEFAULTSERVICE","Default Service");

######################################################################
# From file: shipping.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPING_SHIPTAXCLASS","Shipping Tax Class");
define("_EMPORIUM_ADMIN_SHIPPING_TAXNONE","-----------");
######################################################################
# From file: orders.php
######################################################################
define("_EMPORIUM_ADMIN_ORDERS_GUEST","Guest");
define("_EMPORIUM_ADMIN_ORDERS_CUSTOMER","Customer");
######################################################################
# From file: orders_status.php
######################################################################
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_ADD","Add Order Status");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_STATUSTYPE","Status Type");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_STATUS","Status");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_STATUSLIST","Status List");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_SUBSTATUS","Sub-Status");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_SUBSTATUSLIST","Sub-Status List");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_STATUSLABEL","Status Label");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_STATUSINFO","Status Info");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_ORDERSTATUSLIST","Order Status List");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_STATUSOPTIONS","Order Status Options");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_NOSTATUS","There are no selectable order statuses.");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_EDIT","Edit Order Status");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_UPDATE","Update Order Status");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_DELETE","Delete Order Status");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_SWAPSTATUS","If the status is being used by any order, select a status substitute.");
define("_EMPORIUM_ADMIN_ORDERS_OSTATUS_NONE","-- None --");
######################################################################
# From file: index.php
######################################################################
define("_EMPORIUM_ADMIN_INDEX_STORECONFIGCHECKOUT","Checkout Options");
define("_EMPORIUM_ADMIN_INDEX_ORDERSSTATUSES","Statuses");
define("_EMPORIUM_ADMIN_INDEX_PRODUCTAVAIL","Availability");
define("_EMPORIUM_ADMIN_INDEX_SHIPPINGETS","Shipping EST");
######################################################################
# From file: shipping_ets.php
######################################################################
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSLISTSECTION","Shipping ETS (Estimated Time of Shipping) List");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSOPTIONS","ETS Options");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSADD","Add ETS");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSUPDATE","Update ETS");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSLIST","ETS List");
define("_EMPORIUM_ADMIN_SHIPPINGETS_NOETS","There are no ETS classes in the database.");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ADDSHIPPINGETS","Add Shipping ETS");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSCLASSNAME","ETS Class Name");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSLABEL","ETS Label");
define("_EMPORIUM_ADMIN_SHIPPINGETS_ETSDESCRIPTION","ETS Description");
define("_EMPORIUM_ADMIN_SHIPPINGETS_EDITSHIPPINGETS","Edit Shipping ETS");
define("_EMPORIUM_ADMIN_SHIPPINGETS_DELETEETS","Delete Shipping ETS");
define("_EMPORIUM_ADMIN_SHIPPINGETS_SWAPETS","If the ETS is being used by any product, select an ETS substitute.");
define("_EMPORIUM_ADMIN_SHIPPINGETS_DEFAULTETS","Default Shipping ETS");
######################################################################
# From file: products_availability.php
######################################################################
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILLISTSECTION","Product Availability Status List");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILOPTIONS","Availability Status Options");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILADD","Add Availability Status");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILUPDATE","Update Availability Status");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILLIST","Availability Status List");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_NOAVAIL","There are no Availability Statuses in the database.");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_ADDPRODUCTAVAIL","Add Availability Status");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILNAME","Status Name");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILLABEL","Status Label");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_AVAILDESCRIPTION","Status Description");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_EDITPRODUCTAVAIL","Edit Status");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_DELETEAVAIL","Delete Status");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_SWAPAVAIL","If the status is being used by any product, select an ETS substitute.");
define("_EMPORIUM_ADMIN_PRODUCTAVAIL_DEFAULTAVAIL","Default Availability");

?>