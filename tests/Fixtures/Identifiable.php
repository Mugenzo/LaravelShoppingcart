<?php

namespace Gloudemans\Tests\Shoppingcart\Fixtures;

use Gloudemans\Shoppingcart\Contracts\InstanceIdentifier;

class Identifiable implements InstanceIdentifier {
	/**
	 * @var int|string
	 */
	private $identifier;

	/**
	 * @var string
	 */
	private $discountType;

	/**
	 * @var int
	 */
	private $discountRate;

	/**
	 * BuyableProduct constructor.
	 *
	 * @param string $identifier
	 * @param string $discountType
	 * @param int $discountRate
	 */
	public function __construct( $identifier = 'identifier', $discountType = 'percent', $discountRate = 0 ) {
		$this->identifier   = $identifier;
		$this->discountType = $discountType;
		$this->discountRate = $discountRate;
	}

	/**
	 * Get the unique identifier to load the Cart from.
	 *
	 * @param null $options
	 *
	 * @return int|string
	 */
	public function getInstanceIdentifier( $options = null ) {
		return $this->identifier;
	}

	/**
	 *
	 *
	 * @param null $options
	 *
	 * @return string
	 */
	public function getInstanceGlobalDiscountType( $options = null ) {
		return $this->discountType;
	}

	/**
	 * Get the unique identifier to load the Cart from.
	 *
	 * @param null $options
	 *
	 * @return int|string
	 */
	public function getInstanceGlobalDiscount( $options = null ) {
		return $this->discountRate;
	}
}
