<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.ValuePair</code>
 */
class ValuePair extends \Google\Protobuf\Internal\Message
{
    /**
     * Url对应的JobId
     *
     * Generated from protobuf field <code>string JobId = 1;</code>
     */
    protected $JobId = '';
    /**
     * 上传的Url
     *
     * Generated from protobuf field <code>string SourceUrl = 2;</code>
     */
    protected $SourceUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $JobId
     *           Url对应的JobId
     *     @type string $SourceUrl
     *           上传的Url
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Url对应的JobId
     *
     * Generated from protobuf field <code>string JobId = 1;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->JobId;
    }

    /**
     * Url对应的JobId
     *
     * Generated from protobuf field <code>string JobId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->JobId = $var;

        return $this;
    }

    /**
     * 上传的Url
     *
     * Generated from protobuf field <code>string SourceUrl = 2;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->SourceUrl;
    }

    /**
     * 上传的Url
     *
     * Generated from protobuf field <code>string SourceUrl = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->SourceUrl = $var;

        return $this;
    }

}

