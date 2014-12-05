<?php
/**
 * Payment Gateway Base Class
 *
 * @package     Restrict Content Pro
 * @subpackage  Classes/Roles
 * @copyright   Copyright (c) 2012, Pippin Williamson
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       3.0
*/

class RCP_Payment_Gateway {
	
	public $id;
	public $title;
	public $description;
	public $email;
	public $user_id;
	public $user_name;
	public $currency;
	public $amount;
	public $length;
	public $length_unit;
	public $signup_fee;
	public $subscription_key;
	public $subscription_id;
	public $subscription_name;
	public $auto_renew;
	public $return_url;
	public $test_mode;


	public function __construct( $subscription_data ) {

		$this->init();

		$this->email               = $subscription_data['user_email'];
		$this->user_id             = $subscription_data['user_id'];
		$this->user_name           = $subscription_data['user_name'];
		$this->currency            = $subscription_data['currency'];
		$this->amount              = $subscription_data['price'];
		$this->length              = $subscription_data['length'];
		$this->length_unit         = $subscription_data['length_unit'];
		$this->signup_fee          = $subscription_data['fee'];
		$this->subscription_key    = $subscription_data['key'];
		$this->subscription_id     = $subscription_data['subscription_id'];
		$this->subscription_name   = $subscription_data['subscription_name'];
		$this->auto_renew          = $subscription_data['auto_renew'];
		$this->return_url          = $subscription_data['return_url'];


	}

	public function init() {}

	public function get_return_url() {}

	public function get_subscription_details() {}

	public function get_subscription_amount() {}

	public function get_subscription_period() {}

	public function get_subscription_length() {}

	public function get_subscription_length_unit() {}

	public function process_payment() {}

	public function process_refund() {}

	public function process_cancellation() {}

	public function process_eot() {}

	public function process_webhooks() {}

	public function has_fields() {
		return false;
	}

	public function vaidate_fields() {
		return true;
	}

}