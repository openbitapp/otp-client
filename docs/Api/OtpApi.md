# OpenBitApp\OTPClient\OtpApi

All URIs are relative to https://otp.bitapp.it/v2/otp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlan()**](OtpApi.md#getPlan) | **GET** /routers/default/plan | Calcolo percorso


## `getPlan()`

```php
getPlan($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $max_walk_distance, $wait_reluctance, $walk_reluctance, $preferred_agencies, $preferred_routes, $banned_agencies, $banned_routes, $banned_stops, $banned_trips, $unpreferred_agencies, $unpreferred_routes, $transfer_penalty, $num_itineraries, $min_transfer_time): \OpenBitApp\OTPClient\Model\OTPPlanResponse
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
$max_walk_distance = 3.4; // float
$wait_reluctance = 3.4; // float
$walk_reluctance = 3.4; // float
$preferred_agencies = 'preferred_agencies_example'; // string
$preferred_routes = 'preferred_routes_example'; // string
$banned_agencies = 'banned_agencies_example'; // string
$banned_routes = 'banned_routes_example'; // string
$banned_stops = 'banned_stops_example'; // string
$banned_trips = 'banned_trips_example'; // string
$unpreferred_agencies = 'unpreferred_agencies_example'; // string
$unpreferred_routes = 'unpreferred_routes_example'; // string
$transfer_penalty = 'transfer_penalty_example'; // string
$num_itineraries = 56; // int
$min_transfer_time = 56; // int

try {
    $result = $apiInstance->getPlan($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $max_walk_distance, $wait_reluctance, $walk_reluctance, $preferred_agencies, $preferred_routes, $banned_agencies, $banned_routes, $banned_stops, $banned_trips, $unpreferred_agencies, $unpreferred_routes, $transfer_penalty, $num_itineraries, $min_transfer_time);
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
 **max_walk_distance** | **float**|  | [optional]
 **wait_reluctance** | **float**|  | [optional]
 **walk_reluctance** | **float**|  | [optional]
 **preferred_agencies** | **string**|  | [optional]
 **preferred_routes** | **string**|  | [optional]
 **banned_agencies** | **string**|  | [optional]
 **banned_routes** | **string**|  | [optional]
 **banned_stops** | **string**|  | [optional]
 **banned_trips** | **string**|  | [optional]
 **unpreferred_agencies** | **string**|  | [optional]
 **unpreferred_routes** | **string**|  | [optional]
 **transfer_penalty** | **string**|  | [optional]
 **num_itineraries** | **int**|  | [optional]
 **min_transfer_time** | **int**|  | [optional]

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
