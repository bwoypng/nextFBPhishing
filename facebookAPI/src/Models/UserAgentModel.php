<?php

namespace facebookAPI\Models;

class UserAgentModel {

    /**
     * @var $userAgentString string
     */
    protected $userAgentString;


    /**
     * UserAgentModel constructor.
     * @param $FBAN string
     * @param $FBAV string
     * @param $FBPN string
     * @param $FBLC string
     * @param $FBBV string
     * @param $FBCR string
     * @param $FBMF string
     * @param $FBBD string
     * @param $FBDV string
     * @param $FBSV string
     * @param $FBCA string
     * @param int $FBDM_density
     * @param int $FBDM_width
     * @param int $FBDM_height
     */
    public function __construct($FBAN, $FBAV, $FBPN, $FBLC, $FBBV, $FBCR, $FBMF, $FBBD, $FBDV, $FBSV, $FBCA, $FBDM_density = 2, $FBDM_width = 720, $FBDM_height = 1280) {
        $this->userAgentString = 'FBAN/'.$FBAN.";FBAV/$FBAV;FBPN/$FBPN;FBLC/$FBLC;FBBV/$FBBV;FBCR/$FBCR;FBMF/$FBMF;FBBD/$FBBD;FBDV/$FBDV;FBSV/$FBSV;FBCA/$FBCA;FBDM/{density=$FBDM_density},width=$FBDM_width},height=$FBDM_height};";
    }

    /**
     * @return string
     */
    public function getUserAgentString() {
        return $this->userAgentString;
    }

}
