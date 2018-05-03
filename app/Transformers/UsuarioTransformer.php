<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Usuario;

/**
 * Class UsuarioTransformer.
 *
 * @package namespace App\Transformers;
 */
class UsuarioTransformer extends TransformerAbstract
{
    /**
     * Transform the Usuario entity.
     *
     * @param \App\Entities\Usuario $model
     *
     * @return array
     */
    public function transform(Usuario $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
