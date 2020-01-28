<?php

namespace facebookAPI;

use facebookAPI\Constants\Androiddevices;
use facebookAPI\Constants\Constants;
use facebookAPI\Generators\DeviceID;
use facebookAPI\Generators\userAgent;
use facebookAPI\Models\UserAgentModel;
use facebookAPI\Response\LoginResponse;
use Ramsey\Uuid\Uuid;

class facebook {

    /**
     * @var $authorizationHeader string
     */
    protected $authorizationHeader;

    /**
     * @var $userAgent string
     */
    protected $userAgent;

    /**
     * @var $request Request
     */
    protected $request;

    /**
     * facebook constructor.
     *
     * @param $locale string
     *
     */
    public function __construct($locale = "en_US") {
        $this->authorizationHeader = ' OAuth ' . hexdec("b648f293770a") . '|2a9918c6bcd75b94cefcbb5635c6ad16';
        $this->generateUserAgent($locale);
        $this->request = new Request($this->authorizationHeader, $this->userAgent);
    }

    public function login($username, $password) {
        $device_id = DeviceID::generateUUID();
        $strQuerry = gzencode($this->buildLoginQuerry($username, $password, $device_id));
        $response = $this->request->req('POST', 'https://b-api.facebook.com/method/auth.login', $strQuerry);

        $loginResponse= $response->getBody()->getContents();
        return new LoginResponse(json_decode($loginResponse, true));

    }

    public function buildLoginQuerry($username, $password, $device_id){
        $arrayOptions = [
            "email" => $username,
            "password"=>$password,
            "credentials_type"=>"password",
            "error_detail_type"=>"button_with_disabled",
            "format"=>"json",
            "device_id"=>$device_id,
            "generate_session_cookies"=>1,
            "generate_analytics_claim"=>1,
            "generate_machine_id"=>1,
            "method"=>"auth.login",
        ];
        $str = '';
        foreach ($arrayOptions as $optionKey => $optionValue) {
            $str .= $optionKey.'='.$optionValue.'&';
        }
        return mb_substr($str, 0, -1);

    }

    protected function generateUserAgent($locale) {
        $userAgentGenerator = new userAgent();
        $this->userAgent = $userAgentGenerator->generate('android');
        $device = Androiddevices::generateDevice();
        $userAgentModel = new UserAgentModel(
            Constants::FacebookName,
            Constants::facebook_version,
            Constants::facebook_package_name,
            $locale,
            Constants::facebook_package_number,
            "AT",
            $device->getRetailBranding(),
            $device->getMarketingName(),
            $device->getModel(),
            Constants::facebook_version_release,
            Androiddevices::CPU_ABI
        );
        $this->userAgent= '';
        $this->userAgent = $this->userAgent . ' ' . $userAgentModel->getUserAgentString();

    }
}
