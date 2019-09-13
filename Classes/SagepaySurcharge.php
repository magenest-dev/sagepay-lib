<?php
/**
 * Created by Magenest JSC.
 * Author: Jacob
 * Date: 18/01/2019
 * Time: 9:41
 */

namespace Magenest\SagepayLib\Classes;


/**
 * Surcharge values (fixed amount or percentage) for transactions
 */
class SagepaySurcharge
{

    /**
     * List of surchanges
     *
     * @var array
     */
    private $_surcharges = array();

    /**
     * Get surcharges
     *
     * @return array
     */
    public function getSurcharges()
    {
        return $this->_surcharges;
    }

    /**
     * Set surcharges
     *
     * @param array $surcharges
     */
    public function setSurcharges($surcharges)
    {
        $this->_surcharges = $surcharges;
    }

    /**
     * Add a surcharge to list
     *
     * @param array $surcharge
     */
    private function _addSurcharge($surcharge)
    {
        $this->_surcharges[] = $surcharge;
    }

    /**
     * List of fields that should be exported to surcharges XML
     * 
     * @var array
     */
    private $_exportFields = array(
        'paymentType',
        'percentage',
        'fixed',
    );

    /**
     * Add surcharge by details
     * @uses SagepayUtil::cardTypes List of cards
     *
     * @param string $paymentType
     * @param float $percentage
     * @param float $fixed
     *
     * @return boolean
     */
    public function addSurchargeDetails($paymentType, $percentage = null, $fixed = null)
    {
        if (!in_array(strtolower($paymentType), SagepayUtil::cardTypes()))
        {
            return false;
        }

        $surcharge = array('paymentType' => $paymentType);
        if (!empty($percentage))
        {
            $surcharge['percentage'] = $percentage;
            $this->_addSurcharge($surcharge);
            return true;
        }

        if (!empty($fixed))
        {
            $surcharge['fixed'] = $fixed;
            $this->_addSurcharge($surcharge);
            return true;
        }

        return false;
    }

    /**
     * Export surcharges details as XML string
     *
     * @return string XML with surcharges details
     */
    public function export()
    {
        $dom = new \DOMDocument();
        $dom->loadXML("<surcharges></surcharges>");

        foreach ($this->_surcharges as $surcharge)
        {
            $surchargeEl = $dom->createElement('surcharge');
            $exportFieldsCount = 0;
            foreach ($this->_exportFields as $field)
            {
                if (isset($surcharge[$field]) && $exportFieldsCount < 2)
                {
                    $exportFieldsCount++;
                    $node = $dom->createElement($field, $surcharge[$field]);
                    $surchargeEl->appendChild($node);
                }
            }
            $dom->documentElement->appendChild($surchargeEl);
        }

        return $dom->saveXML($dom->documentElement);
    }

}
