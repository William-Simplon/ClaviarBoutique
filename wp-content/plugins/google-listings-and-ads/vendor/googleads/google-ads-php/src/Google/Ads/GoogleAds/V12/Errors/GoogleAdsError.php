<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/errors.proto

namespace Google\Ads\GoogleAds\V12\Errors;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GoogleAds-specific error.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.errors.GoogleAdsError</code>
 */
class GoogleAdsError extends \Google\Protobuf\Internal\Message
{
    /**
     * An enum value that indicates which error occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorCode error_code = 1;</code>
     */
    protected $error_code = null;
    /**
     * A human-readable description of the error.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';
    /**
     * The value that triggered the error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.Value trigger = 3;</code>
     */
    protected $trigger = null;
    /**
     * Describes the part of the request proto that caused the error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorLocation location = 4;</code>
     */
    protected $location = null;
    /**
     * Additional error details, which are returned by certain error codes. Most
     * error codes do not include details.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorDetails details = 5;</code>
     */
    protected $details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V12\Errors\ErrorCode $error_code
     *           An enum value that indicates which error occurred.
     *     @type string $message
     *           A human-readable description of the error.
     *     @type \Google\Ads\GoogleAds\V12\Common\Value $trigger
     *           The value that triggered the error.
     *     @type \Google\Ads\GoogleAds\V12\Errors\ErrorLocation $location
     *           Describes the part of the request proto that caused the error.
     *     @type \Google\Ads\GoogleAds\V12\Errors\ErrorDetails $details
     *           Additional error details, which are returned by certain error codes. Most
     *           error codes do not include details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Errors\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * An enum value that indicates which error occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorCode error_code = 1;</code>
     * @return \Google\Ads\GoogleAds\V12\Errors\ErrorCode|null
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    public function hasErrorCode()
    {
        return isset($this->error_code);
    }

    public function clearErrorCode()
    {
        unset($this->error_code);
    }

    /**
     * An enum value that indicates which error occurred.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorCode error_code = 1;</code>
     * @param \Google\Ads\GoogleAds\V12\Errors\ErrorCode $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Errors\ErrorCode::class);
        $this->error_code = $var;

        return $this;
    }

    /**
     * A human-readable description of the error.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * A human-readable description of the error.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The value that triggered the error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.Value trigger = 3;</code>
     * @return \Google\Ads\GoogleAds\V12\Common\Value|null
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    public function hasTrigger()
    {
        return isset($this->trigger);
    }

    public function clearTrigger()
    {
        unset($this->trigger);
    }

    /**
     * The value that triggered the error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.Value trigger = 3;</code>
     * @param \Google\Ads\GoogleAds\V12\Common\Value $var
     * @return $this
     */
    public function setTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\Value::class);
        $this->trigger = $var;

        return $this;
    }

    /**
     * Describes the part of the request proto that caused the error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorLocation location = 4;</code>
     * @return \Google\Ads\GoogleAds\V12\Errors\ErrorLocation|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Describes the part of the request proto that caused the error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorLocation location = 4;</code>
     * @param \Google\Ads\GoogleAds\V12\Errors\ErrorLocation $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Errors\ErrorLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * Additional error details, which are returned by certain error codes. Most
     * error codes do not include details.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorDetails details = 5;</code>
     * @return \Google\Ads\GoogleAds\V12\Errors\ErrorDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Additional error details, which are returned by certain error codes. Most
     * error codes do not include details.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.errors.ErrorDetails details = 5;</code>
     * @param \Google\Ads\GoogleAds\V12\Errors\ErrorDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Errors\ErrorDetails::class);
        $this->details = $var;

        return $this;
    }

}

