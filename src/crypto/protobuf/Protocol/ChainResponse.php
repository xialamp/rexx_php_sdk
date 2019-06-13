<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: overlay.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.ChainResponse</code>
 */
class ChainResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 error_code = 1;</code>
     */
    private $error_code = 0;
    /**
     * Generated from protobuf field <code>string error_desc = 2;</code>
     */
    private $error_desc = '';

    public function __construct() {
        \GPBMetadata\Overlay::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 error_code = 1;</code>
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Generated from protobuf field <code>int32 error_code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->error_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_desc = 2;</code>
     * @return string
     */
    public function getErrorDesc()
    {
        return $this->error_desc;
    }

    /**
     * Generated from protobuf field <code>string error_desc = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_desc = $var;

        return $this;
    }

}

