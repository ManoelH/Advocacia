<?php

namespace App\Presenters;

use App\Transformers\UsuarioTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UsuarioPresenter.
 *
 * @package namespace App\Presenters;
 */
class UsuarioPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UsuarioTransformer();
    }
}
