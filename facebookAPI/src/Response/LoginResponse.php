<?php

namespace facebookAPI\Response;

use facebookAPI\Response;

/**
 * Class LoginResponse
 * @package facebookAPI\Response
 *
 * @method bool hasAccessToken()
 * @method bool isAccessToken()
 * @method string getAccessToken()
 * @method $this setAccessToken(string $value)
 * @method $this unsetAccessToken()
 * @method bool hasAnalyticsClaim()
 * @method bool isAnalyticsClaim()
 * @method string getAnalyticsClaim()
 * @method $this setAnalyticsClaim(string $value)
 * @method $this unsetAnalyticsClaim()
 * @method bool hasErrorCode()
 * @method bool isErrorCode()
 * @method int getErrorCode()
 * @method $this setErrorCode(int $value)
 * @method $this unsetErrorCode()
 * @method bool hasErrorData()
 * @method bool isErrorData()
 * @method string getErrorData()
 * @method $this setErrorData(string $value)
 * @method $this unsetErrorData()
 * @method bool hasErrorMsg()
 * @method bool isErrorMsg()
 * @method string getErrorMsg()
 * @method $this setErrorMsg(string $value)
 * @method $this unsetErrorMsg()
 * @method bool hasMachineId()
 * @method bool isMachineId()
 * @method string getMachineId()
 * @method $this setMachineId(string $value)
 * @method $this unsetMachineId()
 * @method bool hasRequestArgs()
 * @method bool isRequestArgs()
 * @method \facebookAPI\Response\Models\LoginErrorRequestArgsModel[] getRequestArgs()
 * @method $this setRequestArgs(\facebookAPI\Response\Models\LoginErrorRequestArgsModel[] $value)
 * @method $this unsetRequestArgs()
 * @method bool hasSecret()
 * @method bool isSecret()
 * @method string getSecret()
 * @method $this setSecret(string $value)
 * @method $this unsetSecret()
 * @method bool hasSessionCookies()
 * @method bool isSessionCookies()
 * @method \facebookAPI\Response\Models\LoginSuccessSessionCookiesModel[] getSessionCookies()
 * @method $this setSessionCookies(\facebookAPI\Response\Models\LoginSuccessSessionCookiesModel[] $value)
 * @method $this unsetSessionCookies()
 * @method bool hasSessionKey()
 * @method bool isSessionKey()
 * @method string getSessionKey()
 * @method $this setSessionKey(string $value)
 * @method $this unsetSessionKey()
 * @method bool hasUid()
 * @method bool isUid()
 * @method string getUid()
 * @method $this setUid(string $value)
 * @method $this unsetUid()
 * @method bool hasUserStorageKey()
 * @method bool isUserStorageKey()
 * @method string getUserStorageKey()
 * @method $this setUserStorageKey(string $value)
 * @method $this unsetUserStorageKey()
 */
class LoginResponse extends Response {

    const JSON_PROPERTY_MAP = [
        "error_code" => "int",
        "error_msg" => "string",
        "error_data" => "string",
        "request_args" => "Models\LoginErrorRequestArgsModel[]",
        "session_key" => "string",
        "uid" => "string",
        "secret" => "string",
        "access_token" => "string",
        "machine_id" => "string",
        "session_cookies" => "Models\LoginSuccessSessionCookiesModel[]",
        "analytics_claim" => "string",
        "user_storage_key" => "string"
    ];
}
