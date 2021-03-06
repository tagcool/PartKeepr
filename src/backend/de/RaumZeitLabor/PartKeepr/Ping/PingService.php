<?php
namespace de\RaumZeitLabor\PartKeepr\Ping;
use de\RaumZeitLabor\PartKeepr\Service\AnonService;

use de\RaumZeitLabor\PartKeepr\Service\Service,
	de\RaumZeitLabor\PartKeepr\PartKeepr;

class PingService extends AnonService {
	/**
	 * Simple test call to verify if the service layer is reachable.
	 * 
	 * This is used for the PartKeeprMobile client to verify if the URL
	 * is entered correctly.
	 */
	public function ping () {
		return "pong";
	}
	
}