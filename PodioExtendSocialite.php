<?php

namespace GitaSums\Sums;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SumsExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('podio', Provider::class);
    }
}
