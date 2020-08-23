<?php

namespace app\services;

use app\models\dto\GetDataDTO;
use app\models\forms\DataForm;
use nizsheanez\jsonRpc\Client;
use app\models\dto\DataDTO;

class DataService
{
    const SERVICE_URL = 'http://localhost:8080/data';

    /**
     * @param $page_uid
     * @return DataDTO[]
     * @throws \nizsheanez\jsonRpc\Exception
     */
    public function get($page_uid)
    {
        $pager = new GetDataDTO([
            'page_uid' => $page_uid
        ]);

        $client = new Client(self::SERVICE_URL);
        return $client->get($pager);
    }


    /**
     * @param DataForm $model
     * @return bool
     * @throws \nizsheanez\jsonRpc\Exception
     */
    public function create(DataForm $model)
    {
        $client = new Client(self::SERVICE_URL);

        $client->create(new DataDTO([
            'page_uid' => (string)$model->page_uid,
            'field_string' => (string)$model->field_string,
            'field_integer' => (integer)$model->field_integer,
            'field_boolean' => (boolean)$model->field_boolean
        ]));
        return true;
    }
}