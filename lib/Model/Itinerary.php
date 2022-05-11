<?php
/**
 * Itinerary
 *
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

namespace OpenBitApp\OTPClient\Model;

use \ArrayAccess;
use \OpenBitApp\OTPClient\ObjectSerializer;

/**
 * Itinerary Class Doc Comment
 *
 * @category Class
 * @package  OpenBitApp\OTPClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Itinerary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Itinerary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration' => 'int',
        'elevation_gained' => 'double',
        'elevation_lost' => 'double',
        'end_time' => 'int',
        'legs' => '\OpenBitApp\OTPClient\Model\Leg[]',
        'start_time' => 'int',
        'too_sloped' => 'bool',
        'transfers' => 'int',
        'transit_time' => 'int',
        'waiting_time' => 'int',
        'walk_distance' => 'double',
        'walk_limit_exceeded' => 'bool',
        'walk_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'duration' => null,
        'elevation_gained' => 'double',
        'elevation_lost' => 'double',
        'end_time' => 'int64',
        'legs' => null,
        'start_time' => 'int64',
        'too_sloped' => null,
        'transfers' => null,
        'transit_time' => null,
        'waiting_time' => null,
        'walk_distance' => 'double',
        'walk_limit_exceeded' => null,
        'walk_time' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'duration' => 'duration',
        'elevation_gained' => 'elevationGained',
        'elevation_lost' => 'elevationLost',
        'end_time' => 'endTime',
        'legs' => 'legs',
        'start_time' => 'startTime',
        'too_sloped' => 'tooSloped',
        'transfers' => 'transfers',
        'transit_time' => 'transitTime',
        'waiting_time' => 'waitingTime',
        'walk_distance' => 'walkDistance',
        'walk_limit_exceeded' => 'walkLimitExceeded',
        'walk_time' => 'walkTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'elevation_gained' => 'setElevationGained',
        'elevation_lost' => 'setElevationLost',
        'end_time' => 'setEndTime',
        'legs' => 'setLegs',
        'start_time' => 'setStartTime',
        'too_sloped' => 'setTooSloped',
        'transfers' => 'setTransfers',
        'transit_time' => 'setTransitTime',
        'waiting_time' => 'setWaitingTime',
        'walk_distance' => 'setWalkDistance',
        'walk_limit_exceeded' => 'setWalkLimitExceeded',
        'walk_time' => 'setWalkTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'elevation_gained' => 'getElevationGained',
        'elevation_lost' => 'getElevationLost',
        'end_time' => 'getEndTime',
        'legs' => 'getLegs',
        'start_time' => 'getStartTime',
        'too_sloped' => 'getTooSloped',
        'transfers' => 'getTransfers',
        'transit_time' => 'getTransitTime',
        'waiting_time' => 'getWaitingTime',
        'walk_distance' => 'getWalkDistance',
        'walk_limit_exceeded' => 'getWalkLimitExceeded',
        'walk_time' => 'getWalkTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['elevation_gained'] = $data['elevation_gained'] ?? null;
        $this->container['elevation_lost'] = $data['elevation_lost'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['legs'] = $data['legs'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['too_sloped'] = $data['too_sloped'] ?? null;
        $this->container['transfers'] = $data['transfers'] ?? null;
        $this->container['transit_time'] = $data['transit_time'] ?? null;
        $this->container['waiting_time'] = $data['waiting_time'] ?? null;
        $this->container['walk_distance'] = $data['walk_distance'] ?? null;
        $this->container['walk_limit_exceeded'] = $data['walk_limit_exceeded'] ?? null;
        $this->container['walk_time'] = $data['walk_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['elevation_gained'] === null) {
            $invalidProperties[] = "'elevation_gained' can't be null";
        }
        if ($this->container['elevation_lost'] === null) {
            $invalidProperties[] = "'elevation_lost' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ($this->container['legs'] === null) {
            $invalidProperties[] = "'legs' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['too_sloped'] === null) {
            $invalidProperties[] = "'too_sloped' can't be null";
        }
        if ($this->container['transfers'] === null) {
            $invalidProperties[] = "'transfers' can't be null";
        }
        if ($this->container['transit_time'] === null) {
            $invalidProperties[] = "'transit_time' can't be null";
        }
        if ($this->container['waiting_time'] === null) {
            $invalidProperties[] = "'waiting_time' can't be null";
        }
        if ($this->container['walk_distance'] === null) {
            $invalidProperties[] = "'walk_distance' can't be null";
        }
        if ($this->container['walk_limit_exceeded'] === null) {
            $invalidProperties[] = "'walk_limit_exceeded' can't be null";
        }
        if ($this->container['walk_time'] === null) {
            $invalidProperties[] = "'walk_time' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets elevation_gained
     *
     * @return double
     */
    public function getElevationGained()
    {
        return $this->container['elevation_gained'];
    }

    /**
     * Sets elevation_gained
     *
     * @param double $elevation_gained elevation_gained
     *
     * @return self
     */
    public function setElevationGained($elevation_gained)
    {
        $this->container['elevation_gained'] = $elevation_gained;

        return $this;
    }

    /**
     * Gets elevation_lost
     *
     * @return double
     */
    public function getElevationLost()
    {
        return $this->container['elevation_lost'];
    }

    /**
     * Sets elevation_lost
     *
     * @param double $elevation_lost elevation_lost
     *
     * @return self
     */
    public function setElevationLost($elevation_lost)
    {
        $this->container['elevation_lost'] = $elevation_lost;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param int $end_time end_time
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets legs
     *
     * @return \OpenBitApp\OTPClient\Model\Leg[]
     */
    public function getLegs()
    {
        return $this->container['legs'];
    }

    /**
     * Sets legs
     *
     * @param \OpenBitApp\OTPClient\Model\Leg[] $legs legs
     *
     * @return self
     */
    public function setLegs($legs)
    {
        $this->container['legs'] = $legs;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param int $start_time start_time
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets too_sloped
     *
     * @return bool
     */
    public function getTooSloped()
    {
        return $this->container['too_sloped'];
    }

    /**
     * Sets too_sloped
     *
     * @param bool $too_sloped too_sloped
     *
     * @return self
     */
    public function setTooSloped($too_sloped)
    {
        $this->container['too_sloped'] = $too_sloped;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return int
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param int $transfers transfers
     *
     * @return self
     */
    public function setTransfers($transfers)
    {
        $this->container['transfers'] = $transfers;

        return $this;
    }

    /**
     * Gets transit_time
     *
     * @return int
     */
    public function getTransitTime()
    {
        return $this->container['transit_time'];
    }

    /**
     * Sets transit_time
     *
     * @param int $transit_time transit_time
     *
     * @return self
     */
    public function setTransitTime($transit_time)
    {
        $this->container['transit_time'] = $transit_time;

        return $this;
    }

    /**
     * Gets waiting_time
     *
     * @return int
     */
    public function getWaitingTime()
    {
        return $this->container['waiting_time'];
    }

    /**
     * Sets waiting_time
     *
     * @param int $waiting_time waiting_time
     *
     * @return self
     */
    public function setWaitingTime($waiting_time)
    {
        $this->container['waiting_time'] = $waiting_time;

        return $this;
    }

    /**
     * Gets walk_distance
     *
     * @return double
     */
    public function getWalkDistance()
    {
        return $this->container['walk_distance'];
    }

    /**
     * Sets walk_distance
     *
     * @param double $walk_distance walk_distance
     *
     * @return self
     */
    public function setWalkDistance($walk_distance)
    {
        $this->container['walk_distance'] = $walk_distance;

        return $this;
    }

    /**
     * Gets walk_limit_exceeded
     *
     * @return bool
     */
    public function getWalkLimitExceeded()
    {
        return $this->container['walk_limit_exceeded'];
    }

    /**
     * Sets walk_limit_exceeded
     *
     * @param bool $walk_limit_exceeded walk_limit_exceeded
     *
     * @return self
     */
    public function setWalkLimitExceeded($walk_limit_exceeded)
    {
        $this->container['walk_limit_exceeded'] = $walk_limit_exceeded;

        return $this;
    }

    /**
     * Gets walk_time
     *
     * @return int
     */
    public function getWalkTime()
    {
        return $this->container['walk_time'];
    }

    /**
     * Sets walk_time
     *
     * @param int $walk_time walk_time
     *
     * @return self
     */
    public function setWalkTime($walk_time)
    {
        $this->container['walk_time'] = $walk_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


