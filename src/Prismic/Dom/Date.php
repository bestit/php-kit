<?php

namespace Prismic\Dom;

class Date
{
    /**
     * Returns the date as a DateTime object
     *
     *
     * @param string $date The date as a string
     *
     * @return \DateTime The DateTime object representing the date
     */
    public static function asDate($date = null)
    {
        if (!$date) {
            return null;
        }

        return new \DateTime($date);
    }
}
