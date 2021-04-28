<?php

namespace ITColima\Siitec2\Api\Resources\Preinscripciones;

use Francerz\Http\Utils\MessageHelper;
use ITColima\Siitec2\Api\AbstractResource;

class PeriodosResource extends AbstractResource
{/**
     * Obtiene los periodos de preinscripción que cumplan con los parámetros.
     *
     * @param array $params
     *  - fin_desde: Periodos que terminen a partir de la fecha proporcionada
     * @return array
     */
    public function getAll(array $params = [])
    {
        $response = $this->_get('/preinscripciones/periodos', $params);
        return MessageHelper::getContent($response);
    }

    /**
     * Obtiene el periodo de preinscripción con el ID señalado.
     *
     * @param int|string|array $periodo_id Uno o varios ID de periodo.
     *      Usar @current para obtener el periodo de preinscripción actual.
     * @param array $params
     *  - fin_desde: Periodos que terminen a partir de la fecha proporcionada
     * @return object
     */
    public function getById($periodo_id, array $params = [])
    {
        if (is_array($periodo_id)) {
            $periodo_id = join('+', $periodo_id);
        }
        $response = $this->_get("/preinscripciones/periodos/{$periodo_id}", $params);
        return MessageHelper::getContent($response);
    }
}