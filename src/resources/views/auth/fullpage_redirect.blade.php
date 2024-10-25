<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <base target="_top">

        <title>Redirecting...</title>

        <meta name="shopify-api-key" content="{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name ) }}" />
        <script src="{{ config('shopify-app.appbridge_cdn_url') ?? 'https://cdn.shopify.com/shopifycloud/app-bridge.js' }}"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                var redirectUrl = "{!! $authUrl !!}";
                var normalizedLink;
                if (window.top === window.self) {
                    // If the current window is the 'parent', change the URL by setting location.href
                    window.top.location.href = redirectUrl;
                } else {
                    // If the current window is the 'child', change the parent's URL with postMessage
                    normalizedLink = document.createElement('a');
                    normalizedLink.href = redirectUrl;

                    open(redirectUrl, '_top');
                }
            });
        </script>
    </head>
    <body>
    </body>
</html>
