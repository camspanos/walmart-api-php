# Walmart\Apis\US\DSVLagTimeApi  
All URIs are relative to https://api-gateway.walmart.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLagTime()**](LagTimeApi.md#getLagTime) | **GET** /v3/lagtime | Lag Time |
| [**updateLagTimeBulk()**](LagTimeApi.md#updateLagTimeBulk) | **POST** /v3/feeds | Update Lag Time |


## `getLagTime()`

```php
getLagTime($shipNode, $sku, $gtin): \Walmart\Models\DSV\US\LagTime\GetLagTime200Response
```
Lag Time

This request retrieves the lag time for an item with a given product identifier—such as a stock keeping unit (SKU) or global trade item number (GTIN)—and ship node. Lag time is the number of days between when an item is ordered and when it is shipped.  Drop ship vendor (DSV) suppliers are expected to ship items the day they receive the purchase order (PO). In certain exceptions, those suppliers can have items with extended lag times. Use GET Lag Time to see the lag time of an item at a node. For more information about order processing and shipping channels, see <a href=\"https://supplierhelp.walmart.com/s/faq?articlenumber=000008139&article=DSV_Order_Processing_and_Shipping&channel=Drop%20Ship\">DSV Order Processing and Shipping Channel reference material</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Apis\LagTimeApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$shipNode = 'shipNode_example'; // string | Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated.
$sku = 'sku_example'; // string | Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding.
$gtin = 'gtin_example'; // string | Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.

try {
    $result = $apiInstance->getLagTime($shipNode, $sku, $gtin);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling LagTimeApi->getLagTime: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipNode** | **string**| Specifies the distribution facility distributor identifier.   This parameter identifies each facility for which the data should be updated. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. | |
| **sku** | **string**| Specifies the stock keeping unit (SKU) item identifier.   This type of identifier is an arbitrary, alphanumeric identifier that is specified by the drop ship vendor (DSV) and used by the vendor in the specification file to refer to each item.   Either the `sku` or `gtin` parameter will be required. The user can only submit one.   The following special characters in the stock keeping unit (SKU) require encoding: ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', \"'\", '(', ')', '*', '+', ',', ';', '=', ' ', '{', and '}'. '%' requires encoding if it is part of the stock keeping unit (SKU). Encode spaces with %20. Other characters do not require encoding. | [optional] |
| **gtin** | **string**| Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user's number is less than 14 digits, add zeros at the beginning.   Either the `sku` or `gtin` parameter will be required. The user can only submit one. | [optional] |


### Return type

[**\Walmart\Models\DSV\US\LagTime\GetLagTime200Response**](../Model/GetLagTime200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLagTimeBulk()`

```php
updateLagTimeBulk($feedType, $shipNode, $updateLagTimeBulkRequest): \Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulk200Response
```
Update Lag Time

This request updates the lag time for items in bulk. Lag time is the number of days between when an item is ordered and when it is shipped. This feature is only available for select drop ship vendor (DSV) suppliers. For more on how to request permission, see the <a href=\"https://developer.walmart.com/doc/us/us-dsv/us-dsv-lagtime/\">guide overview</a>.  Two versions of this feed type exist: * v2.x: Uses global trade item number (GTIN) as the primary item identifier (JSON only). Suppliers can update lag time of multiple items across multiple nodes. * v1.0: Uses the stock keeping unit (SKU) as the primary item identifier (XML and JSON). v1.0 is in the process of being deprecated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Apis\LagTimeApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$feedType = 'lagtime'; // string | Specifies the type of the feed content.   Use `lagtime` for this API.
$shipNode = 'shipNode_example'; // string | Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated.
$updateLagTimeBulkRequest = {"LagTimeHeader":{"version":"1.0"},"lagTime":[{"sku":"30348_KFTest","fulfillmentLagTime":"1"}]}; // \Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequest | File fields

try {
    $result = $apiInstance->updateLagTimeBulk($feedType, $shipNode, $updateLagTimeBulkRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling LagTimeApi->updateLagTimeBulk: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedType** | **string**| Specifies the type of the feed content.   Use `lagtime` for this API. | [default to 'lagtime'] |
| **shipNode** | **string**| Specifies the distribution facility distributor identifier.   This parameter is used in v1.0 and not used in v2.x.    This parameter identifies each facility from which the inventory is requested. The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated. | |
| **updateLagTimeBulkRequest** | [**\Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulkRequest**](../Model/UpdateLagTimeBulkRequest.md)| File fields | |


### Return type

[**\Walmart\Models\DSV\US\LagTime\UpdateLagTimeBulk200Response**](../Model/UpdateLagTimeBulk200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)