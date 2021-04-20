<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The service account sign blob request.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.SignBlobRequest</code>
 */
class SignBlobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The bytes to sign.
     *
     * Generated from protobuf field <code>bytes bytes_to_sign = 2;</code>
     */
    private $bytes_to_sign = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the service account in the following format:
     *           `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     *           Using `-` as a wildcard for the project will infer the project from
     *           the account. The `account` value can be the `email` address or the
     *           `unique_id` of the service account.
     *     @type string $bytes_to_sign
     *           The bytes to sign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The bytes to sign.
     *
     * Generated from protobuf field <code>bytes bytes_to_sign = 2;</code>
     * @return string
     */
    public function getBytesToSign()
    {
        return $this->bytes_to_sign;
    }

    /**
     * The bytes to sign.
     *
     * Generated from protobuf field <code>bytes bytes_to_sign = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBytesToSign($var)
    {
        GPBUtil::checkString($var, False);
        $this->bytes_to_sign = $var;

        return $this;
    }

}
