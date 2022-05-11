# OpenBitApp\OTPClient\OtpApi

All URIs are relative to https://otp.bitapp.it/v2/otp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlan()**](OtpApi.md#getPlan) | **GET** /routers/default/plan | Calcolo percorso


## `getPlan()`

```php
getPlan($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $banned_routes): \OpenBitApp\OTPClient\Model\OTPPlanResponse
```

Calcolo percorso

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenBitApp\OTPClient\Api\OtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_place = 'from_place_example'; // string
$to_place = 'to_place_example'; // string
$date = 'date_example'; // string
$time = 'time_example'; // string
$arrive_by = True; // bool
$mode = 'mode_example'; // string
$lang = 'lang_example'; // string
$show_intermediate_stops = True; // bool
$banned_routes = 'banned_routes_example'; // string

try {
    $result = $apiInstance->getPlan($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $banned_routes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtpApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_place** | **string**|  |
 **to_place** | **string**|  |
 **date** | **string**|  |
 **time** | **string**|  |
 **arrive_by** | **bool**|  |
 **mode** | **string**|  |
 **lang** | **string**|  |
 **show_intermediate_stops** | **bool**|  | [optional]
 **banned_routes** | **string**|  | [optional]

### Return type

[**\OpenBitApp\OTPClient\Model\OTPPlanResponse**](../Model/OTPPlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
