<?php

namespace Gloudemans\Shoppingcart\Contracts;

interface InstanceIdentifier
{
	/**
	 * Get the unique identifier to load the Cart from.
	 *
	 * @param null $options
	 *
	 * @return int|string
	 */
    public function getInstanceIdentifier($options = null);

	/**
	 * @param null $options
	 *
	 * @return mixed
	 */
	public function getInstanceGlobalDiscountType( $options = null );

	/**
	 * Get the unique identifier to load the Cart from.
	 *
	 * @param null $options
	 *
	 * @return int|string
	 */
    public function getInstanceGlobalDiscount($options = null);
}
