<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\API\Api;

interface ConexionManagementInterface
{

    /**
     * GET for conexion api
     * @param string $param
     * @return string
     */
    public function getConexion($param);

    /**
     * POST for conexion api
     * @param string $param
     * @return string
     */
    public function postConexion($param);

    /**
     * PUT for conexion api
     * @param string $param
     * @return string
     */
    public function putConexion($param);

    /**
     * DELETE for conexion api
     * @param string $param
     * @return string
     */
    public function deleteConexion($param);
}
