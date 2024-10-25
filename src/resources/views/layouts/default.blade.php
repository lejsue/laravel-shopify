<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ \Osiset\ShopifyApp\Util::getShopifyConfig('app_name') }}</title>
        <meta name="shopify-api-key" content="{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name ) }}" />
        <script src="{{ config('shopify-app.appbridge_cdn_url') ?? 'https://cdn.shopify.com/shopifycloud/app-bridge.js' }}"></script>
        @yield('styles')
    </head>

    <body>
        <div class="app-wrapper">
            <div class="app-content">
                <main role="main">
                    @yield('content')
                </main>
            </div>
        </div>

        @if(\Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_enabled') && \Osiset\ShopifyApp\Util::useNativeAppBridge())
            @include('shopify-app::partials.flash_messages')
        @endif

        @yield('scripts')
    </body>
</html>
