<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Stdlib\DateTime;

/**
 * @api
 */
interface DateTimeFormatterInterface
{
    /**
     * Returns a translated and localized date string
     *
     * @param \IntlCalendar|\DateTime $object
     * @param string|int|array|null $format
     * @param string|null $locale
     * @return string
     */
    public function formatObject($object, $format = null, $locale = null);
}
