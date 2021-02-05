<?php

namespace ITColima\Siitec2\Api\Resources\App;

use ITColima\Siitec2\Api\AbstractResource;
use Francerz\Http\Utils\MessageHelper;

class UsuariosResource extends AbstractResource
{
    public function findTerm($term, array $params = [])
    {
        $this->requiresClientAccessToken(true);
        $params['q'] = $term;
        $response = $this->get('/app/usuarios', $params);
        return MessageHelper::getContent($response);
    }

    public function findMatricula($matricula, array $params = [])
    {
        $this->requiresClientAccessToken(true);
        $params['matricula'] = $matricula;
        $response = $this->get('/app/usuarios', $params);
        return MessageHelper::getContent($response);
    }
}