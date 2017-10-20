<?php

namespace Statamic\SiteHelpers;

use Statamic\API\User;
use Statamic\Extend\Tags as AbstractTags;

class Tags extends AbstractTags
{
    /**
     * The {{ site:example }} tag
     *
     * @return mixed
     */
    public function example()
    {
        //
    }

    public function showSpotifyId() {
        $user = User::getCurrent();

        return $user->getOAuthID('spotify');
    }
}
