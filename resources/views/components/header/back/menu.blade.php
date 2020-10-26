<div
    {{ $attributes->merge([
    'class' => 'tassy::page-guide-components-header-back-menu app-theme-base
    absolute top-0 right-0  mr-4
    flex
    bg-gray-100']
    )}}
>
@php
    if (\TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isABackPage()) {
        $bgColor =  "bg-gray-100";
    } elseif (\TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isAFrontPage()) {
        $bgColor =  "bg-gray-50";
    } else {
        $bgColor =  "bg-red-500";
    }


// =========================== Boot Stuff  =============================================================================
/*  Build back-end menu entries
    This should almost definitely live somewhere else

$isBackPage = \TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isABackPage();

if ($isBackPage || app('request')->ajax() ) {
    \TallAndSassy\PageGuide\PageGuideMenuWranglerBack::wrangleMe(
        "home",
        [
            'name' => __('tassy::PageGuide.FrontLinkText'),
            "url" => "/",
            "classes" => "",
            "routeIs" => fn () => \TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isAFrontPage(),
        ]
    );

    \TallAndSassy\PageGuide\PageGuideMenuWranglerBack::wrangleMe(
        "admin",
        [
            'name' => __('tassy::PageGuide.AdminLinkText'),
            "url" => "/admin",
            "classes" => "",
            "routeIs" => fn () => \TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isAnAdminPage(),
        ]
    );

    \TallAndSassy\PageGuide\PageGuideMenuWranglerBack::wrangleMe(
        "me",
        [
            'name' => __('tassy::PageGuide.MeLinkText'),
            "url" => "/me",
            "classes" => "",
            "routeIs" => fn () => \TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isAMePage(),

        ]
    );
} else {
      \TallAndSassy\PageGuide\PageGuideMenuWranglerBack::wrangleMe(
        "me",
        [
            'name' => __('tassy::PageGuide.Not a back page'),
            "url" => "/me",
            "classes" => "",
            "routeIs" => fn () => \TallAndSassy\PageGuide\Http\Controllers\PageGuideController::isAMePage(),

        ]
    );
}*/
@endphp

    @foreach (\TallAndSassy\PageGuide\PageGuideMenuWranglerBack::wranglees() as $asrMenuPackage)
        @php
        if (gettype($asrMenuPackage['routeIs']) == 'object') {
            $f = $asrMenuPackage['routeIs'];
            $isRouteZO = $f();
        } elseif (gettype($asrMenuPackage['routeIs']) == 'string') {
            $isRouteZO = request()->routeIs($asrMenuPackage['routeIs'])  ? 1 : 0;
        } else {
            assert(0,__FILE__,__LINE__);
        }

        @endphp

        <x-tassy::nav-link
            href="{{$asrMenuPackage['url']}}"
            pretty="{{$asrMenuPackage['name']}}"
            isActive="{{$isRouteZO}}"
          />
    @endforeach

    <x-tassy::user-settings-dropdown class="pt-2  {{$bgColor}}"/>

</div>
