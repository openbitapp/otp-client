<?php
/**
 * OtpApi
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenBitApp\OTPClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OTP
 *
 * OTP API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenBitApp\OTPClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenBitApp\OTPClient\ApiException;
use OpenBitApp\OTPClient\Configuration;
use OpenBitApp\OTPClient\HeaderSelector;
use OpenBitApp\OTPClient\ObjectSerializer;

/**
 * OtpApi Class Doc Comment
 *
 * @category Class
 * @package  OpenBitApp\OTPClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OtpApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPlan
     *
     * Calcolo percorso
     *
     * @param  string $from_place from_place (required)
     * @param  string $to_place to_place (required)
     * @param  string $date date (required)
     * @param  string $time time (required)
     * @param  bool $arrive_by arrive_by (required)
     * @param  string $mode mode (required)
     * @param  string $lang lang (required)
     * @param  bool $show_intermediate_stops show_intermediate_stops (optional)
     * @param  float $max_walk_distance max_walk_distance (optional)
     * @param  float $wait_reluctance wait_reluctance (optional)
     * @param  float $walk_reluctance walk_reluctance (optional)
     * @param  string $preferred_agencies preferred_agencies (optional)
     * @param  string $preferred_routes preferred_routes (optional)
     * @param  string $banned_agencies banned_agencies (optional)
     * @param  string $banned_routes banned_routes (optional)
     * @param  string $banned_stops banned_stops (optional)
     * @param  string $banned_trips banned_trips (optional)
     * @param  string $unpreferred_agencies unpreferred_agencies (optional)
     * @param  string $unpreferred_routes unpreferred_routes (optional)
     * @param  string $transfer_penalty transfer_penalty (optional)
     * @param  int $num_itineraries num_itineraries (optional)
     * @param  int $min_transfer_time min_transfer_time (optional)
     *
     * @throws \OpenBitApp\OTPClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenBitApp\OTPClient\Model\OTPPlanResponse
     */
    public function getPlan($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops = null, $max_walk_distance = null, $wait_reluctance = null, $walk_reluctance = null, $preferred_agencies = null, $preferred_routes = null, $banned_agencies = null, $banned_routes = null, $banned_stops = null, $banned_trips = null, $unpreferred_agencies = null, $unpreferred_routes = null, $transfer_penalty = null, $num_itineraries = null, $min_transfer_time = null)
    {
        list($response) = $this->getPlanWithHttpInfo($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $max_walk_distance, $wait_reluctance, $walk_reluctance, $preferred_agencies, $preferred_routes, $banned_agencies, $banned_routes, $banned_stops, $banned_trips, $unpreferred_agencies, $unpreferred_routes, $transfer_penalty, $num_itineraries, $min_transfer_time);
        return $response;
    }

    /**
     * Operation getPlanWithHttpInfo
     *
     * Calcolo percorso
     *
     * @param  string $from_place (required)
     * @param  string $to_place (required)
     * @param  string $date (required)
     * @param  string $time (required)
     * @param  bool $arrive_by (required)
     * @param  string $mode (required)
     * @param  string $lang (required)
     * @param  bool $show_intermediate_stops (optional)
     * @param  float $max_walk_distance (optional)
     * @param  float $wait_reluctance (optional)
     * @param  float $walk_reluctance (optional)
     * @param  string $preferred_agencies (optional)
     * @param  string $preferred_routes (optional)
     * @param  string $banned_agencies (optional)
     * @param  string $banned_routes (optional)
     * @param  string $banned_stops (optional)
     * @param  string $banned_trips (optional)
     * @param  string $unpreferred_agencies (optional)
     * @param  string $unpreferred_routes (optional)
     * @param  string $transfer_penalty (optional)
     * @param  int $num_itineraries (optional)
     * @param  int $min_transfer_time (optional)
     *
     * @throws \OpenBitApp\OTPClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenBitApp\OTPClient\Model\OTPPlanResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlanWithHttpInfo($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops = null, $max_walk_distance = null, $wait_reluctance = null, $walk_reluctance = null, $preferred_agencies = null, $preferred_routes = null, $banned_agencies = null, $banned_routes = null, $banned_stops = null, $banned_trips = null, $unpreferred_agencies = null, $unpreferred_routes = null, $transfer_penalty = null, $num_itineraries = null, $min_transfer_time = null)
    {
        $request = $this->getPlanRequest($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $max_walk_distance, $wait_reluctance, $walk_reluctance, $preferred_agencies, $preferred_routes, $banned_agencies, $banned_routes, $banned_stops, $banned_trips, $unpreferred_agencies, $unpreferred_routes, $transfer_penalty, $num_itineraries, $min_transfer_time);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenBitApp\OTPClient\Model\OTPPlanResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenBitApp\OTPClient\Model\OTPPlanResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenBitApp\OTPClient\Model\OTPPlanResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenBitApp\OTPClient\Model\OTPPlanResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPlanAsync
     *
     * Calcolo percorso
     *
     * @param  string $from_place (required)
     * @param  string $to_place (required)
     * @param  string $date (required)
     * @param  string $time (required)
     * @param  bool $arrive_by (required)
     * @param  string $mode (required)
     * @param  string $lang (required)
     * @param  bool $show_intermediate_stops (optional)
     * @param  float $max_walk_distance (optional)
     * @param  float $wait_reluctance (optional)
     * @param  float $walk_reluctance (optional)
     * @param  string $preferred_agencies (optional)
     * @param  string $preferred_routes (optional)
     * @param  string $banned_agencies (optional)
     * @param  string $banned_routes (optional)
     * @param  string $banned_stops (optional)
     * @param  string $banned_trips (optional)
     * @param  string $unpreferred_agencies (optional)
     * @param  string $unpreferred_routes (optional)
     * @param  string $transfer_penalty (optional)
     * @param  int $num_itineraries (optional)
     * @param  int $min_transfer_time (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPlanAsync($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops = null, $max_walk_distance = null, $wait_reluctance = null, $walk_reluctance = null, $preferred_agencies = null, $preferred_routes = null, $banned_agencies = null, $banned_routes = null, $banned_stops = null, $banned_trips = null, $unpreferred_agencies = null, $unpreferred_routes = null, $transfer_penalty = null, $num_itineraries = null, $min_transfer_time = null)
    {
        return $this->getPlanAsyncWithHttpInfo($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $max_walk_distance, $wait_reluctance, $walk_reluctance, $preferred_agencies, $preferred_routes, $banned_agencies, $banned_routes, $banned_stops, $banned_trips, $unpreferred_agencies, $unpreferred_routes, $transfer_penalty, $num_itineraries, $min_transfer_time)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPlanAsyncWithHttpInfo
     *
     * Calcolo percorso
     *
     * @param  string $from_place (required)
     * @param  string $to_place (required)
     * @param  string $date (required)
     * @param  string $time (required)
     * @param  bool $arrive_by (required)
     * @param  string $mode (required)
     * @param  string $lang (required)
     * @param  bool $show_intermediate_stops (optional)
     * @param  float $max_walk_distance (optional)
     * @param  float $wait_reluctance (optional)
     * @param  float $walk_reluctance (optional)
     * @param  string $preferred_agencies (optional)
     * @param  string $preferred_routes (optional)
     * @param  string $banned_agencies (optional)
     * @param  string $banned_routes (optional)
     * @param  string $banned_stops (optional)
     * @param  string $banned_trips (optional)
     * @param  string $unpreferred_agencies (optional)
     * @param  string $unpreferred_routes (optional)
     * @param  string $transfer_penalty (optional)
     * @param  int $num_itineraries (optional)
     * @param  int $min_transfer_time (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPlanAsyncWithHttpInfo($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops = null, $max_walk_distance = null, $wait_reluctance = null, $walk_reluctance = null, $preferred_agencies = null, $preferred_routes = null, $banned_agencies = null, $banned_routes = null, $banned_stops = null, $banned_trips = null, $unpreferred_agencies = null, $unpreferred_routes = null, $transfer_penalty = null, $num_itineraries = null, $min_transfer_time = null)
    {
        $returnType = '\OpenBitApp\OTPClient\Model\OTPPlanResponse';
        $request = $this->getPlanRequest($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops, $max_walk_distance, $wait_reluctance, $walk_reluctance, $preferred_agencies, $preferred_routes, $banned_agencies, $banned_routes, $banned_stops, $banned_trips, $unpreferred_agencies, $unpreferred_routes, $transfer_penalty, $num_itineraries, $min_transfer_time);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPlan'
     *
     * @param  string $from_place (required)
     * @param  string $to_place (required)
     * @param  string $date (required)
     * @param  string $time (required)
     * @param  bool $arrive_by (required)
     * @param  string $mode (required)
     * @param  string $lang (required)
     * @param  bool $show_intermediate_stops (optional)
     * @param  float $max_walk_distance (optional)
     * @param  float $wait_reluctance (optional)
     * @param  float $walk_reluctance (optional)
     * @param  string $preferred_agencies (optional)
     * @param  string $preferred_routes (optional)
     * @param  string $banned_agencies (optional)
     * @param  string $banned_routes (optional)
     * @param  string $banned_stops (optional)
     * @param  string $banned_trips (optional)
     * @param  string $unpreferred_agencies (optional)
     * @param  string $unpreferred_routes (optional)
     * @param  string $transfer_penalty (optional)
     * @param  int $num_itineraries (optional)
     * @param  int $min_transfer_time (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPlanRequest($from_place, $to_place, $date, $time, $arrive_by, $mode, $lang, $show_intermediate_stops = null, $max_walk_distance = null, $wait_reluctance = null, $walk_reluctance = null, $preferred_agencies = null, $preferred_routes = null, $banned_agencies = null, $banned_routes = null, $banned_stops = null, $banned_trips = null, $unpreferred_agencies = null, $unpreferred_routes = null, $transfer_penalty = null, $num_itineraries = null, $min_transfer_time = null)
    {
        // verify the required parameter 'from_place' is set
        if ($from_place === null || (is_array($from_place) && count($from_place) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_place when calling getPlan'
            );
        }
        // verify the required parameter 'to_place' is set
        if ($to_place === null || (is_array($to_place) && count($to_place) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_place when calling getPlan'
            );
        }
        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling getPlan'
            );
        }
        // verify the required parameter 'time' is set
        if ($time === null || (is_array($time) && count($time) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $time when calling getPlan'
            );
        }
        // verify the required parameter 'arrive_by' is set
        if ($arrive_by === null || (is_array($arrive_by) && count($arrive_by) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $arrive_by when calling getPlan'
            );
        }
        // verify the required parameter 'mode' is set
        if ($mode === null || (is_array($mode) && count($mode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mode when calling getPlan'
            );
        }
        // verify the required parameter 'lang' is set
        if ($lang === null || (is_array($lang) && count($lang) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lang when calling getPlan'
            );
        }

        $resourcePath = '/routers/default/plan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($from_place !== null) {
            if('form' === 'form' && is_array($from_place)) {
                foreach($from_place as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['fromPlace'] = $from_place;
            }
        }
        // query params
        if ($to_place !== null) {
            if('form' === 'form' && is_array($to_place)) {
                foreach($to_place as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['toPlace'] = $to_place;
            }
        }
        // query params
        if ($date !== null) {
            if('form' === 'form' && is_array($date)) {
                foreach($date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['date'] = $date;
            }
        }
        // query params
        if ($time !== null) {
            if('form' === 'form' && is_array($time)) {
                foreach($time as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['time'] = $time;
            }
        }
        // query params
        if ($arrive_by !== null) {
            if('form' === 'form' && is_array($arrive_by)) {
                foreach($arrive_by as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['arriveBy'] = $arrive_by;
            }
        }
        // query params
        if ($mode !== null) {
            if('form' === 'form' && is_array($mode)) {
                foreach($mode as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['mode'] = $mode;
            }
        }
        // query params
        if ($show_intermediate_stops !== null) {
            if('form' === 'form' && is_array($show_intermediate_stops)) {
                foreach($show_intermediate_stops as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['showIntermediateStops'] = $show_intermediate_stops;
            }
        }
        // query params
        if ($lang !== null) {
            if('form' === 'form' && is_array($lang)) {
                foreach($lang as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['lang'] = $lang;
            }
        }
        // query params
        if ($max_walk_distance !== null) {
            if('form' === 'form' && is_array($max_walk_distance)) {
                foreach($max_walk_distance as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['maxWalkDistance'] = $max_walk_distance;
            }
        }
        // query params
        if ($wait_reluctance !== null) {
            if('form' === 'form' && is_array($wait_reluctance)) {
                foreach($wait_reluctance as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['waitReluctance'] = $wait_reluctance;
            }
        }
        // query params
        if ($walk_reluctance !== null) {
            if('form' === 'form' && is_array($walk_reluctance)) {
                foreach($walk_reluctance as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['walkReluctance'] = $walk_reluctance;
            }
        }
        // query params
        if ($preferred_agencies !== null) {
            if('form' === 'form' && is_array($preferred_agencies)) {
                foreach($preferred_agencies as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['preferredAgencies'] = $preferred_agencies;
            }
        }
        // query params
        if ($preferred_routes !== null) {
            if('form' === 'form' && is_array($preferred_routes)) {
                foreach($preferred_routes as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['preferredRoutes'] = $preferred_routes;
            }
        }
        // query params
        if ($banned_agencies !== null) {
            if('form' === 'form' && is_array($banned_agencies)) {
                foreach($banned_agencies as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['bannedAgencies'] = $banned_agencies;
            }
        }
        // query params
        if ($banned_routes !== null) {
            if('form' === 'form' && is_array($banned_routes)) {
                foreach($banned_routes as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['bannedRoutes'] = $banned_routes;
            }
        }
        // query params
        if ($banned_stops !== null) {
            if('form' === 'form' && is_array($banned_stops)) {
                foreach($banned_stops as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['bannedStops'] = $banned_stops;
            }
        }
        // query params
        if ($banned_trips !== null) {
            if('form' === 'form' && is_array($banned_trips)) {
                foreach($banned_trips as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['bannedTrips'] = $banned_trips;
            }
        }
        // query params
        if ($unpreferred_agencies !== null) {
            if('form' === 'form' && is_array($unpreferred_agencies)) {
                foreach($unpreferred_agencies as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['unpreferredAgencies'] = $unpreferred_agencies;
            }
        }
        // query params
        if ($unpreferred_routes !== null) {
            if('form' === 'form' && is_array($unpreferred_routes)) {
                foreach($unpreferred_routes as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['unpreferredRoutes'] = $unpreferred_routes;
            }
        }
        // query params
        if ($transfer_penalty !== null) {
            if('form' === 'form' && is_array($transfer_penalty)) {
                foreach($transfer_penalty as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['transferPenalty'] = $transfer_penalty;
            }
        }
        // query params
        if ($num_itineraries !== null) {
            if('form' === 'form' && is_array($num_itineraries)) {
                foreach($num_itineraries as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['numItineraries'] = $num_itineraries;
            }
        }
        // query params
        if ($min_transfer_time !== null) {
            if('form' === 'form' && is_array($min_transfer_time)) {
                foreach($min_transfer_time as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['minTransferTime'] = $min_transfer_time;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
