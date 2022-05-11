<?php
/**
 * RelativeDirection
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
use \OpenBitApp\OTPClient\ObjectSerializer;

/**
 * RelativeDirection Class Doc Comment
 *
 * @category Class
 * @package  OpenBitApp\OTPClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RelativeDirection
{
    /**
     * Possible values of this enum
     */
    const DEPART = 'DEPART';

    const HARD_LEFT = 'HARD_LEFT';

    const LEFT = 'LEFT';

    const SLIGHTLY_LEFT = 'SLIGHTLY_LEFT';

    const _CONTINUE = 'CONTINUE';

    const SLIGHTLY_RIGHT = 'SLIGHTLY_RIGHT';

    const RIGHT = 'RIGHT';

    const HARD_RIGHT = 'HARD_RIGHT';

    const CIRCLE_CLOCKWISE = 'CIRCLE_CLOCKWISE';

    const CIRCLE_COUNTERCLOCKWISE = 'CIRCLE_COUNTERCLOCKWISE';

    const ELEVATOR = 'ELEVATOR';

    const UTURN_LEFT = 'UTURN_LEFT';

    const UTURN_RIGHT = 'UTURN_RIGHT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEPART,
            self::HARD_LEFT,
            self::LEFT,
            self::SLIGHTLY_LEFT,
            self::_CONTINUE,
            self::SLIGHTLY_RIGHT,
            self::RIGHT,
            self::HARD_RIGHT,
            self::CIRCLE_CLOCKWISE,
            self::CIRCLE_COUNTERCLOCKWISE,
            self::ELEVATOR,
            self::UTURN_LEFT,
            self::UTURN_RIGHT
        ];
    }
}

