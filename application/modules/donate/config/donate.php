<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| PayPal Currency
|--------------------------------------------------------------------------
|
| Check the available currencies in:
| https://developer.paypal.com/docs/classic/api/currency_codes/
|
*/
$config['currencyType'] = 'USD';

/*
|--------------------------------------------------------------------------
| PayPal Mode
|--------------------------------------------------------------------------
|
| Options Available:
|
| live = Testing the code end-to-end
| live    = Ready for production
|
*/
$config['ppMode'] = 'live';

/*
|--------------------------------------------------------------------------
| PayPal Client ID
|--------------------------------------------------------------------------
|
| Check your client id in:
| https://developer.paypal.com/developer/applications
|
*/
$config['userID'] = 'ASkyQqmm8rPLTWLhw9lH2YJBrB0rAofmQhNiB1aBoL9CqGQOshoi3bLjkkFnT-PrRUtBfkWL9ZExcMOg';

/*
|--------------------------------------------------------------------------
| PayPal Secret Password
|--------------------------------------------------------------------------
|
| Check your secret password in:
| https://developer.paypal.com/developer/applications
|
*/
$config['secretPass'] = 'EMzT4lF7B8m3STILywWEDe1VtOdXiFCGoBpgJJO3rpeHy-7iVpw2Tzgl9RHyXZxIDre-JWKk-KNqUzGI';

/*
|--------------------------------------------------------------------------
| Currency Symbol
|--------------------------------------------------------------------------
|
| Write the symbol of currency used in paypal
|
*/
$config['currencySymbol'] = '$';