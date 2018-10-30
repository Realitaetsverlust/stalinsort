<?php

class Stalin {
    /**
     * Sorts
     *
     * @param array $array array to be sorted
     * @param string $order order
     * @return array
     */
    public static function sort($array, $order = 'ASC') {
        $arrayLength = count($array);
        //Fetch the first element of the array and reset the counter
        $comparisonElement = reset($array);
        $sortedArray[] = $comparisonElement;

        //use for instead of foreach to avoid copying the array
        for($i = 0; $i <= $arrayLength; $i++) {
            if(self::checkForOrder($comparisonElement, $array[$i+1], $order)) {
                //push the element into the sorted array and set the comparison element to the next element
                //since it's the bigger/smaller one.
                $sortedArray[] = $array[$i+1];
                $comparisonElement = $array[$i+1];
            }
        }

        return $sortedArray;
    }

    /**
     * Checks order
     *
     * @param double $element current element
     * @param double $nextElement next element
     * @param string $order order
     * @return bool
     */
    private static function checkForOrder($element, $nextElement, $order) {
        //In the last iteration, the index of the $nextElement will be NULL in the DESC order because I'm just checking
        //for $i + 1. This here avoids having a NULL as last element in the array
        if($nextElement === null) {
            return false;
        }

        if($order === 'ASC') {
            return $nextElement > $element;
        } elseif($order === 'DESC') {
            return $nextElement < $element;
        }
    }
}