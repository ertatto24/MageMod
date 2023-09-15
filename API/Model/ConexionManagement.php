<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\API\Model;

class ConexionManagement implements \Devsarrollo\API\Api\ConexionManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getConexion($param)
    {
        return 'Parámetro GET: ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function postConexion($param)
    {
        return 'Parámetro POST: ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function putConexion($param)
    {
        return 'Parámetro PUT: ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteConexion($param)
    {
        return 'Parámetro DELETE: ' . $param;
    }
}
