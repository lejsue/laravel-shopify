<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <base target="_top">

        <title>Redirecting...</title>
        <meta name="shopify-api-key" content="{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name ) }}" />
        <script src="{{ config('shopify-app.appbridge_cdn_url') ?? 'https://cdn.shopify.com/shopifycloud/app-bridge.js' }}"></script>
        <script type="text/javascript">
            const redirectUrl = "{!! $url !!}";

            open(redirectUrl, '_top');
        </script>
    </head>
    <body>
    </body>
</html>
