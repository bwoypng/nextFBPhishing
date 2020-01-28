<?php

namespace facebookAPI\Models;

/**
 * Class DeviceModel
 * @package facebookAPI\Models
 */
class DeviceModel {

    /**
     * @var $retail_branding string
     */
    protected $retail_branding;

    /**
     * @var $marketing_name string
     */
    protected $marketing_name;

    /**
     * @var $device string
     */
    protected $device;

    /**
     * @var $model string
     */
    protected $model;

    /**
     * DeviceModel constructor.
     * @param string $retail_branding
     * @param string $marketing_name
     * @param string $device
     * @param string $model
     */
    public function __construct($retail_branding, $marketing_name, $device, $model) {
        $this->retail_branding = $retail_branding;
        $this->marketing_name = $marketing_name;
        $this->device = $device;
        $this->model = $model;
    }


    /**
     * @return string
     */
    public function getRetailBranding() {
        return $this->retail_branding;
    }

    /**
     * @return string
     */
    public function getMarketingName() {
        return $this->marketing_name;
    }

    /**
     * @return string
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * @return string
     */
    public function getModel() {
        return $this->model;
    }


}