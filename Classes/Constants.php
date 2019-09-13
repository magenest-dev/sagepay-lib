<?php
/**
 * Copyright © 2019 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\SagepayLib\Classes;

/**
 * Class Constants
 * @package Magenest\SagepayLib\Classes
 */
class Constants
{
    const SAGEPAY_SDK_PATH = __DIR__;
    // Define variables to indicate the transaction mode.
    const SAGEPAY_ENV_LIVE = 'live';
    const SAGEPAY_ENV_TEST = 'test';

// Define transaction type
    const SAGEPAY_TXN_AUTHENTICATE = 'AUTHENTICATE';
    const SAGEPAY_TXN_AUTHORISE = 'AUTHORISE';
    const SAGEPAY_TXN_CANCEL = 'CANCEL';
    const SAGEPAY_TXN_DEFERRED = 'DEFERRED';
    const SAGEPAY_TXN_PAYMENT = 'PAYMENT';
    const SAGEPAY_TXN_VOID = 'VOID';
    const SAGEPAY_TXN_REFUND = 'REFUND';
    const SAGEPAY_TXN_REPEAT = 'REPEAT';
    const SAGEPAY_TXN_REPEATDEFERRED = 'REPEATDEFERRED';
    const SAGEPAY_TXN_ABORT = 'ABORT';
    const SAGEPAY_TXN_RELEASE = 'RELEASE';
    const SAGEPAY_TXN_COMPLETE = 'COMPLETE';

// Define Server URLs for all integration methods.
    const SAGEPAY_SERVER_SHOWPOST = 'https://test.sagepay.com/showpost/showpost.asp';
    const SAGEPAY_SERVER_SIMULATOR = 'https://test.sagepay.com/Simulator/VSPDirectGateway.asp';

    const SAGEPAY_DIRECT_SERVER_LIVE = 'https://live.sagepay.com/gateway/service/vspdirect-register.vsp';
    const SAGEPAY_DIRECT_SERVER_TEST = 'https://test.sagepay.com/gateway/service/vspdirect-register.vsp';

    const SAGEPAY_DIRECT_SERVER_3D_SECURE_CALLBACK_LIVE = 'https://live.sagepay.com/gateway/service/direct3dcallback.vsp';
    const SAGEPAY_DIRECT_SERVER_3D_SECURE_CALLBACK_TEST = 'https://test.sagepay.com/gateway/service/direct3dcallback.vsp';

    const SAGEPAY_FORM_SERVER_LIVE = 'https://live.sagepay.com/gateway/service/vspform-register.vsp';
    const SAGEPAY_FORM_SERVER_TEST = 'https://test.sagepay.com/gateway/service/vspform-register.vsp';

    const SAGEPAY_SERVER_SERVER_LIVE = 'https://live.sagepay.com/gateway/service/vspserver-register.vsp';
    const SAGEPAY_SERVER_SERVER_TEST = 'https://test.sagepay.com/gateway/service/vspserver-register.vsp';

    const SAGEPAY_SHARED_REPEAT_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/repeat.vsp';
    const SAGEPAY_SHARED_REPEAT_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/repeat.vsp';

    const SAGEPAY_SHARED_ABORT_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/abort.vsp';
    const SAGEPAY_SHARED_ABORT_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/abort.vsp';

    const SAGEPAY_SHARED_RELEASE_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/release.vsp';
    const SAGEPAY_SHARED_RELEASE_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/release.vsp';

    const SAGEPAY_SHARED_REFUND_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/refund.vsp';
    const SAGEPAY_SHARED_REFUND_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/refund.vsp';

    const SAGEPAY_SHARED_VOID_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/void.vsp';
    const SAGEPAY_SHARED_VOID_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/void.vsp';

    const SAGEPAY_SHARED_AUTHORISE_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/authorise.vsp';
    const SAGEPAY_SHARED_AUTHORISE_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/authorise.vsp';

    const SAGEPAY_SHARED_CANCEL_TRANSACTION_LIVE = 'https://live.sagepay.com/gateway/service/cancel.vsp';
    const SAGEPAY_SHARED_CANCEL_TRANSACTION_TEST = 'https://test.sagepay.com/gateway/service/cancel.vsp';

    const SAGEPAY_SERVER_TOKEN_REGISTER_LIVE = 'https://live.sagepay.com/gateway/service/token.vsp';
    const SAGEPAY_SERVER_TOKEN_REGISTER_TEST = 'https://test.sagepay.com/gateway/service/token.vsp';

    const SAGEPAY_DIRECT_TOKEN_REGISTER_LIVE = 'https://live.sagepay.com/gateway/service/directtoken.vsp';
    const SAGEPAY_DIRECT_TOKEN_REGISTER_TEST = 'https://test.sagepay.com/gateway/service/directtoken.vsp';

    const SAGEPAY_TOKEN_REMOVE_LIVE = 'https://live.sagepay.com/gateway/service/removetoken.vsp';
    const SAGEPAY_TOKEN_REMOVE_TEST = 'https://test.sagepay.com/gateway/service/removetoken.vsp';

    const SAGEPAY_PAYPAL_COMPLETION_TEST = 'https://test.sagepay.com/gateway/service/complete.vsp';
    const SAGEPAY_PAYPAL_COMPLETION_LIVE = 'https://live.sagepay.com/gateway/service/complete.vsp';

// Define Settings for integration method.
    const SAGEPAY_FORM = 'form';
    const SAGEPAY_SERVER = 'server';
    const SAGEPAY_DIRECT = 'direct';
    const SAGEPAY_TOKEN = 'token';
    const SAGEPAY_PAYPAL = 'paypal';


// Define remote status codes for SagePay.
    const SAGEPAY_REMOTE_STATUS_DEFERRED = 'DEFERRED';
    const SAGEPAY_REMOTE_STATUS_REPEAT_DEFERRED = 'REPEAT_DEFERRED';
    const SAGEPAY_REMOTE_STATUS_AUTHENTICATED = 'AUTHENTICATED';
    const SAGEPAY_REMOTE_STATUS_REGISTERED = 'REGISTERED';
    const SAGEPAY_REMOTE_STATUS_FAIL = 'FAIL';
    const SAGEPAY_REMOTE_STATUS_INVALID = 'INVALID';
    const SAGEPAY_REMOTE_STATUS_STARTED = 'STARTED';
    const SAGEPAY_REMOTE_STATUS_OK = 'OK';
    const SAGEPAY_REMOTE_STATUS_UNKNOWN = 'UNKNOWN';
    const SAGEPAY_REMOTE_STATUS_PAYMENT = 'PAYMENT';
    const SAGEPAY_REMOTE_STATUS_REFUNDED = 'REFUNDED';
    const SAGEPAY_REMOTE_STATUS_VOIDED = 'VOIDED';
    const SAGEPAY_REMOTE_STATUS_CANCELLED = 'CANCELLED';
    const SAGEPAY_REMOTE_STATUS_3D_SECURE = '3DSECURE';
    const SAGEPAY_REMOTE_STATUS_PAYPAL_REDIRECT = 'PPREDIRECT';
    const SAGEPAY_REMOTE_STATUS_PAYPAL_OK = 'PAYPALOK';
    const SAGEPAY_REMOTE_STATUS_NOTAUTHED = 'NOTAUTHED';
    const SAGEPAY_REMOTE_STATUS_MALFORMED = 'MALFORMED';
    const SAGEPAY_REMOTE_STATUS_ERROR = 'ERROR';
    const SAGEPAY_REMOTE_STATUS_ABORTED = 'ABORTED';

// Define account type
    const SAGEPAY_ACCOUNT_ECOMMERCE = 'E';
    const SAGEPAY_ACCOUNT_CONTINUOUS = 'C';
    const SAGEPAY_ACCOUNT_MAIL = 'M';

// Define Server profile
    const SAGEPAY_SERVER_PROFILE_NORMAL = 'NORMAL';
    const SAGEPAY_SERVER_PROFILE_LOW = 'LOW';
}