<?php
/**
 * Created by Magenest JSC.
 * Author: Jacob
 * Date: 18/01/2019
 * Time: 9:41
 */

namespace Magenest\SagepayLib\Classes;


/**
 * Factory to obtain an instance of any of the available APIs.
 */
class SagepayApiManager
{
    /**
     * Create instance of required integration type
     *
     * @param string           $type    Integration type
     * @param SagepaySettings  $config  Sagepay config instance
     *
     * @return SagepayAbstractApi
     */
    static public function create($type, SagepaySettings $config)
    {
        $integration = strtolower($type);
        $integrationApi = __NAMESPACE__ . "\\" . 'Sagepay' . ucfirst($integration) . 'Api';

        if (class_exists($integrationApi))
        {
            return new $integrationApi($config);
        }
        else
        {
            return NULL;
        }
    }

}
