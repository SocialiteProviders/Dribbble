<?php
namespace SocialiteProviders\Dribbble;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DribbbleExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('dribbble', __NAMESPACE__.'\Provider');
    }
}
