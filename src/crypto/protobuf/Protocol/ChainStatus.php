<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: overlay.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *1.ChainHello response
 *2.async notification from local
 *
 * Generated from protobuf message <code>protocol.ChainStatus</code>
 */
class ChainStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string self_addr = 1;</code>
     */
    private $self_addr = '';
    /**
     * Generated from protobuf field <code>int64 ledger_version = 2;</code>
     */
    private $ledger_version = 0;
    /**
     * Generated from protobuf field <code>int64 monitor_version = 3;</code>
     */
    private $monitor_version = 0;
    /**
     * Generated from protobuf field <code>string rexx_version = 4;</code>
     */
    private $rexx_version = '';
    /**
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     */
    private $timestamp = 0;

    public function __construct() {
        \GPBMetadata\Overlay::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string self_addr = 1;</code>
     * @return string
     */
    public function getSelfAddr()
    {
        return $this->self_addr;
    }

    /**
     * Generated from protobuf field <code>string self_addr = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ledger_version = 2;</code>
     * @return int|string
     */
    public function getLedgerVersion()
    {
        return $this->ledger_version;
    }

    /**
     * Generated from protobuf field <code>int64 ledger_version = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLedgerVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->ledger_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 monitor_version = 3;</code>
     * @return int|string
     */
    public function getMonitorVersion()
    {
        return $this->monitor_version;
    }

    /**
     * Generated from protobuf field <code>int64 monitor_version = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMonitorVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->monitor_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rexx_version = 4;</code>
     * @return string
     */
    public function getBumoVersion()
    {
        return $this->rexx_version;
    }

    /**
     * Generated from protobuf field <code>string rexx_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBumoVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->rexx_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

}

