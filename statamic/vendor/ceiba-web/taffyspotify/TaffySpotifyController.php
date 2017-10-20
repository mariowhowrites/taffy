<?php

namespace Statamic\Addons\TaffySpotify;

use Statamic\Extend\Controller;

class TaffySpotifyController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {
        return $this->view('index');
    }
}
