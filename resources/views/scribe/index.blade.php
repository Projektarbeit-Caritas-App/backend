<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Caritas Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
                    body .content .python-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean(1);
        var csrfUrl = "/api/handshake";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.37.2.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.37.2.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;,&quot;python&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                                            <button type="button" class="lang-button" data-language-name="python">python</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="schedule">
                    <a href="#schedule">Schedule</a>
                </li>
                                    <ul id="tocify-subheader-schedule" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="schedule-GETapi-schedule">
                        <a href="#schedule-GETapi-schedule">List available shops</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="schedule-GETapi-schedule--id-">
                        <a href="#schedule-GETapi-schedule--id-">List today´s reservations</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="limitation-set">
                    <a href="#limitation-set">Limitation Set</a>
                </li>
                                    <ul id="tocify-subheader-limitation-set" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="limitation-set-GETapi-admin-limitation-set">
                        <a href="#limitation-set-GETapi-admin-limitation-set">List all LimitationSets</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-set-POSTapi-admin-limitation-set">
                        <a href="#limitation-set-POSTapi-admin-limitation-set">Create new LimitationSet</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-set-GETapi-admin-limitation-set--id-">
                        <a href="#limitation-set-GETapi-admin-limitation-set--id-">Show specified LimitationSet</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-set-PUTapi-admin-limitation-set--id-">
                        <a href="#limitation-set-PUTapi-admin-limitation-set--id-">Update specified LimitationSet</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-set-DELETEapi-admin-limitation-set--id-">
                        <a href="#limitation-set-DELETEapi-admin-limitation-set--id-">Delete specified LimitationSet</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user">
                    <a href="#user">User</a>
                </li>
                                    <ul id="tocify-subheader-user" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-GETapi-admin-user">
                        <a href="#user-GETapi-admin-user">List all Users</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-POSTapi-admin-user">
                        <a href="#user-POSTapi-admin-user">Create new User</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-GETapi-admin-user--id-">
                        <a href="#user-GETapi-admin-user--id-">Show specified User</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-PUTapi-admin-user--id-">
                        <a href="#user-PUTapi-admin-user--id-">Update specified User</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-DELETEapi-admin-user--id-">
                        <a href="#user-DELETEapi-admin-user--id-">Delete specified User</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-5" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pdf">
                    <a href="#pdf">PDF</a>
                </li>
                                    <ul id="tocify-subheader-pdf" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pdf-GETapi-pdf-card--id-">
                        <a href="#pdf-GETapi-pdf-card--id-">Print specified Card</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-6" class="tocify-header">
                <li class="tocify-item level-1" data-unique="organization">
                    <a href="#organization">Organization</a>
                </li>
                                    <ul id="tocify-subheader-organization" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="organization-GETapi-admin-organization">
                        <a href="#organization-GETapi-admin-organization">List all Organization</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="organization-POSTapi-admin-organization">
                        <a href="#organization-POSTapi-admin-organization">Create new Organization</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="organization-GETapi-admin-organization--id-">
                        <a href="#organization-GETapi-admin-organization--id-">Show specified Organization</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="organization-PUTapi-admin-organization--id-">
                        <a href="#organization-PUTapi-admin-organization--id-">Update specified Organization</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="organization-DELETEapi-admin-organization--id-">
                        <a href="#organization-DELETEapi-admin-organization--id-">Delete specified Organization</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-7" class="tocify-header">
                <li class="tocify-item level-1" data-unique="checkout">
                    <a href="#checkout">Checkout</a>
                </li>
                                    <ul id="tocify-subheader-checkout" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="checkout-GETapi-card-visit--id-">
                        <a href="#checkout-GETapi-card-visit--id-">Show specified Card and related Persons</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="checkout-POSTapi-card-visit--id-">
                        <a href="#checkout-POSTapi-card-visit--id-">Create new Visit, LineItems</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="checkout-POSTapi-card-visit--id--comment">
                        <a href="#checkout-POSTapi-card-visit--id--comment">Add comment to card</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-8" class="tocify-header">
                <li class="tocify-item level-1" data-unique="card">
                    <a href="#card">Card</a>
                </li>
                                    <ul id="tocify-subheader-card" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="card-GETapi-admin-card">
                        <a href="#card-GETapi-admin-card">List all Cards</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="card-POSTapi-admin-card">
                        <a href="#card-POSTapi-admin-card">Create new Card</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="card-GETapi-admin-card--id-">
                        <a href="#card-GETapi-admin-card--id-">Show specified Card</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="card-PUTapi-admin-card--id-">
                        <a href="#card-PUTapi-admin-card--id-">Update specified Card</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="card-DELETEapi-admin-card--id-">
                        <a href="#card-DELETEapi-admin-card--id-">Delete specified Card</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-9" class="tocify-header">
                <li class="tocify-item level-1" data-unique="password-reset">
                    <a href="#password-reset">Password reset</a>
                </li>
                                    <ul id="tocify-subheader-password-reset" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="password-reset-POSTapi-password-forgot">
                        <a href="#password-reset-POSTapi-password-forgot">Initiate Password Reset</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="password-reset-POSTapi-password-reset">
                        <a href="#password-reset-POSTapi-password-reset">Password Reset</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-10" class="tocify-header">
                <li class="tocify-item level-1" data-unique="reservation">
                    <a href="#reservation">Reservation</a>
                </li>
                                    <ul id="tocify-subheader-reservation" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="reservation-GETapi-admin-reservation">
                        <a href="#reservation-GETapi-admin-reservation">List all Reservations</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="reservation-POSTapi-admin-reservation">
                        <a href="#reservation-POSTapi-admin-reservation">Create new Reservation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="reservation-GETapi-admin-reservation--id-">
                        <a href="#reservation-GETapi-admin-reservation--id-">Show specified Reservation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="reservation-PUTapi-admin-reservation--id-">
                        <a href="#reservation-PUTapi-admin-reservation--id-">Update specified Reservation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="reservation-DELETEapi-admin-reservation--id-">
                        <a href="#reservation-DELETEapi-admin-reservation--id-">Delete specified Reservation</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-11" class="tocify-header">
                <li class="tocify-item level-1" data-unique="limitation">
                    <a href="#limitation">Limitation</a>
                </li>
                                    <ul id="tocify-subheader-limitation" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="limitation-GETapi-admin-limitation-limit">
                        <a href="#limitation-GETapi-admin-limitation-limit">List all Limitation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-POSTapi-admin-limitation-limit">
                        <a href="#limitation-POSTapi-admin-limitation-limit">Create new Limitation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-GETapi-admin-limitation-limit--id-">
                        <a href="#limitation-GETapi-admin-limitation-limit--id-">Show specified Limitation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-PUTapi-admin-limitation-limit--id-">
                        <a href="#limitation-PUTapi-admin-limitation-limit--id-">Update specified Limitation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="limitation-DELETEapi-admin-limitation-limit--id-">
                        <a href="#limitation-DELETEapi-admin-limitation-limit--id-">Delete specified Limitation</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-12" class="tocify-header">
                <li class="tocify-item level-1" data-unique="shop">
                    <a href="#shop">Shop</a>
                </li>
                                    <ul id="tocify-subheader-shop" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="shop-GETapi-admin-shop">
                        <a href="#shop-GETapi-admin-shop">List all Shops</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="shop-POSTapi-admin-shop">
                        <a href="#shop-POSTapi-admin-shop">Create new Shop</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="shop-GETapi-admin-shop--id-">
                        <a href="#shop-GETapi-admin-shop--id-">Show specified Shop</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="shop-PUTapi-admin-shop--id-">
                        <a href="#shop-PUTapi-admin-shop--id-">Update specified Shop</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="shop-DELETEapi-admin-shop--id-">
                        <a href="#shop-DELETEapi-admin-shop--id-">Delete specified Shop</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-13" class="tocify-header">
                <li class="tocify-item level-1" data-unique="line-item">
                    <a href="#line-item">Line Item</a>
                </li>
                                    <ul id="tocify-subheader-line-item" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="line-item-GETapi-admin-lineItem">
                        <a href="#line-item-GETapi-admin-lineItem">List all LineItems</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="line-item-POSTapi-admin-lineItem">
                        <a href="#line-item-POSTapi-admin-lineItem">Create new LineItem</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="line-item-GETapi-admin-lineItem--id-">
                        <a href="#line-item-GETapi-admin-lineItem--id-">Show specified LineItem</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="line-item-PUTapi-admin-lineItem--id-">
                        <a href="#line-item-PUTapi-admin-lineItem--id-">Update specified LineItem</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="line-item-DELETEapi-admin-lineItem--id-">
                        <a href="#line-item-DELETEapi-admin-lineItem--id-">Delete specified LineItem</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-14" class="tocify-header">
                <li class="tocify-item level-1" data-unique="visit">
                    <a href="#visit">Visit</a>
                </li>
                                    <ul id="tocify-subheader-visit" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="visit-GETapi-admin-visit">
                        <a href="#visit-GETapi-admin-visit">List all Visits</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="visit-POSTapi-admin-visit">
                        <a href="#visit-POSTapi-admin-visit">Create new Visit</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="visit-GETapi-admin-visit--id-">
                        <a href="#visit-GETapi-admin-visit--id-">Show specified Visit</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="visit-PUTapi-admin-visit--id-">
                        <a href="#visit-PUTapi-admin-visit--id-">Update specified Visit</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="visit-DELETEapi-admin-visit--id-">
                        <a href="#visit-DELETEapi-admin-visit--id-">Delete specified Visit</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-15" class="tocify-header">
                <li class="tocify-item level-1" data-unique="person">
                    <a href="#person">Person</a>
                </li>
                                    <ul id="tocify-subheader-person" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="person-GETapi-admin-person">
                        <a href="#person-GETapi-admin-person">List all persons</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="person-POSTapi-admin-person">
                        <a href="#person-POSTapi-admin-person">Create new Person</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="person-GETapi-admin-person--id-">
                        <a href="#person-GETapi-admin-person--id-">Show specified Person</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="person-PUTapi-admin-person--id-">
                        <a href="#person-PUTapi-admin-person--id-">Update specified Person</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="person-DELETEapi-admin-person--id-">
                        <a href="#person-DELETEapi-admin-person--id-">Delete specified Person</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-16" class="tocify-header">
                <li class="tocify-item level-1" data-unique="product-type">
                    <a href="#product-type">Product Type</a>
                </li>
                                    <ul id="tocify-subheader-product-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="product-type-GETapi-admin-product-type">
                        <a href="#product-type-GETapi-admin-product-type">List all ProductTypes</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-type-POSTapi-admin-product-type">
                        <a href="#product-type-POSTapi-admin-product-type">Create new ProductType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-type-GETapi-admin-product-type--id-">
                        <a href="#product-type-GETapi-admin-product-type--id-">Show specified ProductType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-type-PUTapi-admin-product-type--id-">
                        <a href="#product-type-PUTapi-admin-product-type--id-">Update specified ProductType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-type-DELETEapi-admin-product-type--id-">
                        <a href="#product-type-DELETEapi-admin-product-type--id-">Delete specified ProductType</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-17" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-GETapi-handshake">
                        <a href="#authentication-GETapi-handshake">Create session and XSRF-Token</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-auth-login">
                        <a href="#authentication-POSTapi-auth-login">Login with SPA-Session (Cookies)</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-auth-token">
                        <a href="#authentication-POSTapi-auth-token">Login with Bearer Token (Authorization Header)</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-auth-logout">
                        <a href="#authentication-POSTapi-auth-logout">Logout</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="authentication-GETapi-auth-heartbeat">
                        <a href="#authentication-GETapi-auth-heartbeat">Heartbeat</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: September 13 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Alternatively to the Token-Auth you can also use Session-Auth with XSRF-Protection, which is useful for SPAs.</p>

        <h1 id="schedule">Schedule</h1>

    

            <h2 id="schedule-GETapi-schedule">List available shops</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>List all shops that are in the same organization as the user</p>

<span id="example-requests-GETapi-schedule">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedule" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedule"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/schedule',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/schedule'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-schedule">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
  &quot;items&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;organization_id&quot;: 1,
      &quot;name&quot;: &quot;organization&quot;,
      &quot;street&quot;: &quot;organizations street&quot;,
      &quot;postcode&quot;: &quot;12345&quot;,
      &quot;city&quot;: &quot;organizations city&quot;,
      &quot;contact&quot;: &quot;organizations contact&quot;,
      &quot;opening_hours&quot;: {
        &quot;monday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;tuesday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;wednesday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;thursday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;friday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;saturday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;sunday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ]
      },
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }, {
      &quot;id&quot;: 2
      &quot;organization_id&quot;: 3,
      &quot;name&quot;: &quot;organization&quot;,
      &quot;street&quot;: &quot;organizations street&quot;,
      &quot;postcode&quot;: &quot;12345&quot;,
      &quot;city&quot;: &quot;organizations city&quot;,
      &quot;contact&quot;: &quot;organizations contact&quot;,
      &quot;opening_hours&quot;: {
        &quot;monday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;tuesday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;wednesday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;thursday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;friday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;saturday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;sunday&quot;: [
          {
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ]
      },
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }
  ],
  &quot;meta&quot;: {
    &quot;current_page&quot;: 1,
    &quot;last_page&quot;: 1,
    &quot;per_page&quot;: 25,
    &quot;item_count&quot;: 2
  },
  &quot;links&quot;: {
    &quot;prev_page_url&quot;: null,
    &quot;next_page_url&quot;: null
  }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedule" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedule"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule"></code></pre>
</span>
<span id="execution-error-GETapi-schedule" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule"></code></pre>
</span>
<form id="form-GETapi-schedule" data-method="GET"
      data-path="api/schedule"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedule"
                    onclick="tryItOut('GETapi-schedule');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedule"
                    onclick="cancelTryOut('GETapi-schedule');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedule" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedule</code></b>
        </p>
                <p>
            <label id="auth-GETapi-schedule" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-schedule"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="schedule-GETapi-schedule--id-">List today´s reservations</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>List all today's reservations for a specified store</p>

<span id="example-requests-GETapi-schedule--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedule/57960114483871" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedule/57960114483871"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/schedule/57960114483871',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/schedule/57960114483871'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-schedule--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 4,
        &quot;card_id&quot;: 1,
        &quot;shop_id&quot;: 1,
        &quot;time&quot;: &quot;2022-08-21T08:00:00.000000Z&quot;,
        &quot;created_at&quot;: &quot;2022-08-19T08:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-19T08:00:00.000000Z&quot;,
        &quot;card&quot;: {
            &quot;id&quot;: 1,
            &quot;last_name&quot;: &quot;Yasu&quot;,
            &quot;first_name&quot;: &quot;Kitsune&quot;,
            &quot;street&quot;: null,
            &quot;postcode&quot;: null,
            &quot;city&quot;: null,
            &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
            &quot;valid_until&quot;: &quot;2022-12-31T00:00:00.000000Z&quot;,
            &quot;creator_id&quot;: 1,
            &quot;created_at&quot;: &quot;2022-08-20T13:16:22.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-20T13:16:22.000000Z&quot;,
            &quot;instance_id&quot;: 1,
            &quot;comment&quot;: null
        }
    },
    {
        &quot;id&quot;: 6,
        &quot;card_id&quot;: 2,
        &quot;shop_id&quot;: 1,
        &quot;time&quot;: &quot;2022-08-21T08:00:00.000000Z&quot;,
        &quot;created_at&quot;: &quot;2022-08-19T08:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-19T08:00:00.000000Z&quot;,
        &quot;card&quot;: {
            &quot;id&quot;: 2,
            &quot;last_name&quot;: &quot;User&quot;,
            &quot;first_name&quot;: &quot;Test&quot;,
            &quot;street&quot;: null,
            &quot;postcode&quot;: null,
            &quot;city&quot;: null,
            &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
            &quot;valid_until&quot;: &quot;2022-12-31T00:00:00.000000Z&quot;,
            &quot;creator_id&quot;: 1,
            &quot;created_at&quot;: &quot;2022-08-20T13:16:22.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-20T13:16:22.000000Z&quot;,
            &quot;instance_id&quot;: 1,
            &quot;comment&quot;: null
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedule--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedule--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedule--id-"></code></pre>
</span>
<span id="execution-error-GETapi-schedule--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedule--id-"></code></pre>
</span>
<form id="form-GETapi-schedule--id-" data-method="GET"
      data-path="api/schedule/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedule--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedule--id-"
                    onclick="tryItOut('GETapi-schedule--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedule--id-"
                    onclick="cancelTryOut('GETapi-schedule--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedule--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedule/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-schedule--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-schedule--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-schedule--id-"
               value="57960114483871"
               data-component="url" hidden>
    <br>
<p>The ID of the shop.</p>
            </p>
                    </form>

        <h1 id="limitation-set">Limitation Set</h1>

    

            <h2 id="limitation-set-GETapi-admin-limitation-set">List all LimitationSets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-limitation-set">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/limitation/set?name=laudantium&amp;valid_from[]=2022-09-13T16%3A58%3A38&amp;valid_until[]=2022-09-13T16%3A58%3A38&amp;sort=name&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/set"
);

const params = {
    "name": "laudantium",
    "valid_from[]": "2022-09-13T16:58:38",
    "valid_until[]": "2022-09-13T16:58:38",
    "sort": "name",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/limitation/set',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'laudantium',
            'valid_from[]'=&gt; '2022-09-13T16:58:38',
            'valid_until[]'=&gt; '2022-09-13T16:58:38',
            'sort'=&gt; 'name',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/set'
params = {
  'name': 'laudantium',
  'valid_from[]': '2022-09-13T16:58:38',
  'valid_until[]': '2022-09-13T16:58:38',
  'sort': 'name',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-limitation-set">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;limitation_set 1&quot;,
            &quot;valid_from&quot;: &quot;1999-08-20 22:00:00&quot;,
            &quot;valid_until&quot;: &quot;2016-08-20 22:00:00&quot;,
            &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;limitation_set 2&quot;,
            &quot;valid_from&quot;: &quot;2020-02-14 00:00:00&quot;,
            &quot;valid_until&quot;: &quot;2021-05-17 00:00:00&quot;,
            &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 2
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-limitation-set" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-limitation-set"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-limitation-set"></code></pre>
</span>
<span id="execution-error-GETapi-admin-limitation-set" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-limitation-set"></code></pre>
</span>
<form id="form-GETapi-admin-limitation-set" data-method="GET"
      data-path="api/admin/limitation/set"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-limitation-set', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-limitation-set"
                    onclick="tryItOut('GETapi-admin-limitation-set');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-limitation-set"
                    onclick="cancelTryOut('GETapi-admin-limitation-set');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-limitation-set" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/limitation/set</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-limitation-set" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-limitation-set"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-admin-limitation-set"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Filter by name.</p>
            </p>
                    <p>
                <b><code>valid_from</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_from"
               data-endpoint="GETapi-admin-limitation-set"
               value=""
               data-component="query" hidden>
    <br>

            </p>
                    <p>
                <b><code>valid_from.0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_from.0"
               data-endpoint="GETapi-admin-limitation-set"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid from is after this date. Must be a valid date.</p>
            </p>
                    <p>
                <b><code>valid_from.1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_from.1"
               data-endpoint="GETapi-admin-limitation-set"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid from is before this date. Must be a valid date. This field is required when <code>valid_from.0</code> is present.</p>
            </p>
                    <p>
                <b><code>valid_until</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until"
               data-endpoint="GETapi-admin-limitation-set"
               value=""
               data-component="query" hidden>
    <br>

            </p>
                    <p>
                <b><code>valid_until.0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until.0"
               data-endpoint="GETapi-admin-limitation-set"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid until is after this date. Must be a valid date.</p>
            </p>
                    <p>
                <b><code>valid_until.1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until.1"
               data-endpoint="GETapi-admin-limitation-set"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid until is before this date. Must be a valid date. This field is required when <code>valid_until.0</code> is present.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-limitation-set"
               value="name"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>name</code>, <code>valid_from</code>, or <code>valid_until</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-limitation-set"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-limitation-set"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-limitation-set"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="limitation-set-POSTapi-admin-limitation-set">Create new LimitationSet</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-limitation-set">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/limitation/set" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"A set to limit them all ~ Tolkien II\",
    \"valid_from\": \"2022-08-04 12:00:00\",
    \"valid_until\": \"2022-08-04 12:00:00\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/set"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "A set to limit them all ~ Tolkien II",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/limitation/set',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'A set to limit them all ~ Tolkien II',
            'valid_from' =&gt; '2022-08-04 12:00:00',
            'valid_until' =&gt; '2022-08-04 12:00:00',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/set'
payload = {
    "name": "A set to limit them all ~ Tolkien II",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-limitation-set">
</span>
<span id="execution-results-POSTapi-admin-limitation-set" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-limitation-set"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-limitation-set"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-limitation-set" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-limitation-set"></code></pre>
</span>
<form id="form-POSTapi-admin-limitation-set" data-method="POST"
      data-path="api/admin/limitation/set"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-limitation-set', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-limitation-set"
                    onclick="tryItOut('POSTapi-admin-limitation-set');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-limitation-set"
                    onclick="cancelTryOut('POSTapi-admin-limitation-set');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-limitation-set" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/limitation/set</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-limitation-set" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-limitation-set"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-admin-limitation-set"
               value="A set to limit them all ~ Tolkien II"
               data-component="body" hidden>
    <br>
<p>Name of the limitation set. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>valid_from</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="valid_from"
               data-endpoint="POSTapi-admin-limitation-set"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the start of the validity of the limitation set. Must be a valid date.</p>
        </p>
                <p>
            <b><code>valid_until</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until"
               data-endpoint="POSTapi-admin-limitation-set"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the expiry of the limitation set. Must be a valid date.</p>
        </p>
        </form>

            <h2 id="limitation-set-GETapi-admin-limitation-set--id-">Show specified LimitationSet</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-limitation-set--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/limitation/set/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/set/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/limitation/set/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/set/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-limitation-set--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;limitation_set 1&quot;,
    &quot;valid_from&quot;: &quot;1999-08-20 22:00:00&quot;,
    &quot;valid_until&quot;: &quot;2016-08-20 22:00:00&quot;,
    &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-limitation-set--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-limitation-set--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-limitation-set--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-limitation-set--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-limitation-set--id-"></code></pre>
</span>
<form id="form-GETapi-admin-limitation-set--id-" data-method="GET"
      data-path="api/admin/limitation/set/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-limitation-set--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-limitation-set--id-"
                    onclick="tryItOut('GETapi-admin-limitation-set--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-limitation-set--id-"
                    onclick="cancelTryOut('GETapi-admin-limitation-set--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-limitation-set--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/limitation/set/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-limitation-set--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-limitation-set--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-limitation-set--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the limitationSet.</p>
            </p>
                    </form>

            <h2 id="limitation-set-PUTapi-admin-limitation-set--id-">Update specified LimitationSet</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-limitation-set--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/limitation/set/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"A set to limit them all ~ Tolkien II\",
    \"valid_from\": \"2022-08-04 12:00:00\",
    \"valid_until\": \"2022-08-04 12:00:00\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/set/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "A set to limit them all ~ Tolkien II",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/limitation/set/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'A set to limit them all ~ Tolkien II',
            'valid_from' =&gt; '2022-08-04 12:00:00',
            'valid_until' =&gt; '2022-08-04 12:00:00',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/set/10'
payload = {
    "name": "A set to limit them all ~ Tolkien II",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-limitation-set--id-">
</span>
<span id="execution-results-PUTapi-admin-limitation-set--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-limitation-set--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-limitation-set--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-limitation-set--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-limitation-set--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-limitation-set--id-" data-method="PUT"
      data-path="api/admin/limitation/set/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-limitation-set--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-limitation-set--id-"
                    onclick="tryItOut('PUTapi-admin-limitation-set--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-limitation-set--id-"
                    onclick="cancelTryOut('PUTapi-admin-limitation-set--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-limitation-set--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/limitation/set/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-limitation-set--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-limitation-set--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-limitation-set--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the limitationSet.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-admin-limitation-set--id-"
               value="A set to limit them all ~ Tolkien II"
               data-component="body" hidden>
    <br>
<p>Name of the limitation set. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>valid_from</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="valid_from"
               data-endpoint="PUTapi-admin-limitation-set--id-"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the start of the validity of the limitation set. Must be a valid date.</p>
        </p>
                <p>
            <b><code>valid_until</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until"
               data-endpoint="PUTapi-admin-limitation-set--id-"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the expiry of the limitation set. Must be a valid date.</p>
        </p>
        </form>

            <h2 id="limitation-set-DELETEapi-admin-limitation-set--id-">Delete specified LimitationSet</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-limitation-set--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/limitation/set/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/set/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/limitation/set/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/set/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-limitation-set--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-limitation-set--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-limitation-set--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-limitation-set--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-limitation-set--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-limitation-set--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-limitation-set--id-" data-method="DELETE"
      data-path="api/admin/limitation/set/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-limitation-set--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-limitation-set--id-"
                    onclick="tryItOut('DELETEapi-admin-limitation-set--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-limitation-set--id-"
                    onclick="cancelTryOut('DELETEapi-admin-limitation-set--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-limitation-set--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/limitation/set/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-limitation-set--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-limitation-set--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-limitation-set--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the limitationSet.</p>
            </p>
                    </form>

        <h1 id="user">User</h1>

    

            <h2 id="user-GETapi-admin-user">List all Users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/user?name=laudantium&amp;email=laudantium&amp;sort=organization_id&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/user"
);

const params = {
    "name": "laudantium",
    "email": "laudantium",
    "sort": "organization_id",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/user',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'laudantium',
            'email'=&gt; 'laudantium',
            'sort'=&gt; 'organization_id',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/user'
params = {
  'name': 'laudantium',
  'email': 'laudantium',
  'sort': 'organization_id',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;instance_id&quot;: 3,
            &quot;organization_id&quot;: 3,
            &quot;name&quot;: &quot;Rene&quot;,
            &quot;email&quot;: &quot;rene@web.de&quot;,
            &quot;created_at&quot;: &quot;2022-08-21T11:34:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-21T11:34:55.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 1
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-user"></code></pre>
</span>
<span id="execution-error-GETapi-admin-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-user"></code></pre>
</span>
<form id="form-GETapi-admin-user" data-method="GET"
      data-path="api/admin/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-user"
                    onclick="tryItOut('GETapi-admin-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-user"
                    onclick="cancelTryOut('GETapi-admin-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/user</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-user" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-user"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>organization_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="organization_id"
               data-endpoint="GETapi-admin-user"
               value=""
               data-component="query" hidden>
    <br>
<p>Organization.</p>
            </p>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-admin-user"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Name contains.</p>
            </p>
                    <p>
                <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="GETapi-admin-user"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>E-Mail contains.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-user"
               value="organization_id"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>organization_id</code>, <code>name</code>, or <code>email</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-user"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-user"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-user"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="user-POSTapi-admin-user">Create new User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"organization_id\": \"50080528753334\",
    \"name\": \"xX_B4d-gUY_08_Xx\",
    \"email\": \"B4d-gUY@web.de\",
    \"password\": \"MyP4zzW0rD\",
    \"role\": \"external_employee\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "organization_id": "50080528753334",
    "name": "xX_B4d-gUY_08_Xx",
    "email": "B4d-gUY@web.de",
    "password": "MyP4zzW0rD",
    "role": "external_employee"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/user',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'organization_id' =&gt; '50080528753334',
            'name' =&gt; 'xX_B4d-gUY_08_Xx',
            'email' =&gt; 'B4d-gUY@web.de',
            'password' =&gt; 'MyP4zzW0rD',
            'role' =&gt; 'external_employee',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/user'
payload = {
    "organization_id": "50080528753334",
    "name": "xX_B4d-gUY_08_Xx",
    "email": "B4d-gUY@web.de",
    "password": "MyP4zzW0rD",
    "role": "external_employee"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-user">
</span>
<span id="execution-results-POSTapi-admin-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-user"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-user"></code></pre>
</span>
<form id="form-POSTapi-admin-user" data-method="POST"
      data-path="api/admin/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-user"
                    onclick="tryItOut('POSTapi-admin-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-user"
                    onclick="cancelTryOut('POSTapi-admin-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/user</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-user" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-user"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>organization_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="organization_id"
               data-endpoint="POSTapi-admin-user"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the organization the user is attached to.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-admin-user"
               value="xX_B4d-gUY_08_Xx"
               data-component="body" hidden>
    <br>
<p>Name of the user. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-admin-user"
               value="B4d-gUY@web.de"
               data-component="body" hidden>
    <br>
<p>Email of the user. Must be a valid email address. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-admin-user"
               value="MyP4zzW0rD"
               data-component="body" hidden>
    <br>
<p>Password of the user.</p>
        </p>
                <p>
            <b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="role"
               data-endpoint="POSTapi-admin-user"
               value="external_employee"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>inactive</code>, <code>external_employee</code>, <code>external_manager</code>, <code>employee</code>, <code>organization_manager</code>, or <code>instance_manager</code>.</p>
        </p>
        </form>

            <h2 id="user-GETapi-admin-user--id-">Show specified User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/user/57911074968077" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/user/57911074968077"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/user/57911074968077',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/user/57911074968077'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-user--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-user--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-user--id-"></code></pre>
</span>
<form id="form-GETapi-admin-user--id-" data-method="GET"
      data-path="api/admin/user/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-user--id-"
                    onclick="tryItOut('GETapi-admin-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-user--id-"
                    onclick="cancelTryOut('GETapi-admin-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-user--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/user/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-user--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-user--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-user--id-"
               value="57911074968077"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="user-PUTapi-admin-user--id-">Update specified User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/user/57911074968077" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"organization_id\": \"laudantium\",
    \"name\": \"gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke\",
    \"email\": \"qbpozzmbeloiizfbptdjzqfjlwkpteisdwcgpxuyfnecrhpxrycgvrganz\",
    \"password\": \"laudantium\",
    \"role\": \"external_employee\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/user/57911074968077"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "organization_id": "laudantium",
    "name": "gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke",
    "email": "qbpozzmbeloiizfbptdjzqfjlwkpteisdwcgpxuyfnecrhpxrycgvrganz",
    "password": "laudantium",
    "role": "external_employee"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/user/57911074968077',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'organization_id' =&gt; 'laudantium',
            'name' =&gt; 'gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke',
            'email' =&gt; 'qbpozzmbeloiizfbptdjzqfjlwkpteisdwcgpxuyfnecrhpxrycgvrganz',
            'password' =&gt; 'laudantium',
            'role' =&gt; 'external_employee',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/user/57911074968077'
payload = {
    "organization_id": "laudantium",
    "name": "gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke",
    "email": "qbpozzmbeloiizfbptdjzqfjlwkpteisdwcgpxuyfnecrhpxrycgvrganz",
    "password": "laudantium",
    "role": "external_employee"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-user--id-">
</span>
<span id="execution-results-PUTapi-admin-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-user--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-user--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-user--id-" data-method="PUT"
      data-path="api/admin/user/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-user--id-"
                    onclick="tryItOut('PUTapi-admin-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-user--id-"
                    onclick="cancelTryOut('PUTapi-admin-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-user--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/user/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-user--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-user--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-user--id-"
               value="57911074968077"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>organization_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="organization_id"
               data-endpoint="PUTapi-admin-user--id-"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>ID of the organization the user is attached to.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-admin-user--id-"
               value="gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke"
               data-component="body" hidden>
    <br>
<p>Name of the user. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-admin-user--id-"
               value="qbpozzmbeloiizfbptdjzqfjlwkpteisdwcgpxuyfnecrhpxrycgvrganz"
               data-component="body" hidden>
    <br>
<p>Email of the user. Must be a valid email address. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-admin-user--id-"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>Password of the user.</p>
        </p>
                <p>
            <b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="role"
               data-endpoint="PUTapi-admin-user--id-"
               value="external_employee"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>inactive</code>, <code>external_employee</code>, <code>external_manager</code>, <code>employee</code>, <code>organization_manager</code>, or <code>instance_manager</code>.</p>
        </p>
        </form>

            <h2 id="user-DELETEapi-admin-user--id-">Delete specified User</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/user/57911074968077" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/user/57911074968077"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/user/57911074968077',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/user/57911074968077'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-user--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-user--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-user--id-" data-method="DELETE"
      data-path="api/admin/user/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-user--id-"
                    onclick="tryItOut('DELETEapi-admin-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-user--id-"
                    onclick="cancelTryOut('DELETEapi-admin-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-user--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/user/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-user--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-user--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-user--id-"
               value="57911074968077"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

        <h1 id="pdf">PDF</h1>

    

            <h2 id="pdf-GETapi-pdf-card--id-">Print specified Card</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Generate PDF for the given Card-ID. You can control the response with the Query-Params listed below.
If none is given it will generate a json with the base64 encoded PDF-File.</p>

<span id="example-requests-GETapi-pdf-card--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/pdf/card/57959734536623" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/pdf/card/57959734536623"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/pdf/card/57959734536623',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/pdf/card/57959734536623'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-pdf-card--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pdf-card--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pdf-card--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pdf-card--id-"></code></pre>
</span>
<span id="execution-error-GETapi-pdf-card--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pdf-card--id-"></code></pre>
</span>
<form id="form-GETapi-pdf-card--id-" data-method="GET"
      data-path="api/pdf/card/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pdf-card--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pdf-card--id-"
                    onclick="tryItOut('GETapi-pdf-card--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pdf-card--id-"
                    onclick="cancelTryOut('GETapi-pdf-card--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pdf-card--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pdf/card/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-pdf-card--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-pdf-card--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-pdf-card--id-"
               value="57959734536623"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>download</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="download"
               data-endpoint="GETapi-pdf-card--id-"
               value=""
               data-component="query" hidden>
    <br>
<p>Download generated PDF</p>
            </p>
                    <p>
                <b><code>raw</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="raw"
               data-endpoint="GETapi-pdf-card--id-"
               value=""
               data-component="query" hidden>
    <br>
<p>Show PDF in Browser</p>
            </p>
                </form>

        <h1 id="organization">Organization</h1>

    

            <h2 id="organization-GETapi-admin-organization">List all Organization</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-organization">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/organization?name=laudantium&amp;street=laudantium&amp;postcode=laudantium&amp;city=laudantium&amp;contact=laudantium&amp;sort=name&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/organization"
);

const params = {
    "name": "laudantium",
    "street": "laudantium",
    "postcode": "laudantium",
    "city": "laudantium",
    "contact": "laudantium",
    "sort": "name",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/organization',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'laudantium',
            'street'=&gt; 'laudantium',
            'postcode'=&gt; 'laudantium',
            'city'=&gt; 'laudantium',
            'contact'=&gt; 'laudantium',
            'sort'=&gt; 'name',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/organization'
params = {
  'name': 'laudantium',
  'street': 'laudantium',
  'postcode': 'laudantium',
  'city': 'laudantium',
  'contact': 'laudantium',
  'sort': 'name',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-organization">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;instance_id&quot;: 1,
            &quot;name&quot;: &quot;test&quot;,
            &quot;street&quot;: &quot;abc&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;abc&quot;,
            &quot;contact&quot;: &quot;abc&quot;,
            &quot;created_at&quot;: &quot;2022-08-15T17:23:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-15T17:23:12.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;instance_id&quot;: 2,
            &quot;name&quot;: &quot;Instance&quot;,
            &quot;street&quot;: &quot;Street&quot;,
            &quot;postcode&quot;: &quot;Postcode&quot;,
            &quot;city&quot;: &quot;City&quot;,
            &quot;contact&quot;: &quot;Contact&quot;,
            &quot;created_at&quot;: &quot;2022-08-21T11:34:14.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-21T11:34:14.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;instance_id&quot;: 3,
            &quot;name&quot;: &quot;Instance&quot;,
            &quot;street&quot;: &quot;Street&quot;,
            &quot;postcode&quot;: &quot;Postcode&quot;,
            &quot;city&quot;: &quot;City&quot;,
            &quot;contact&quot;: &quot;Contact&quot;,
            &quot;created_at&quot;: &quot;2022-08-21T11:34:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-21T11:34:55.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 1
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-organization" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-organization"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-organization"></code></pre>
</span>
<span id="execution-error-GETapi-admin-organization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-organization"></code></pre>
</span>
<form id="form-GETapi-admin-organization" data-method="GET"
      data-path="api/admin/organization"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-organization', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-organization"
                    onclick="tryItOut('GETapi-admin-organization');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-organization"
                    onclick="cancelTryOut('GETapi-admin-organization');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-organization" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/organization</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-organization" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-organization"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-admin-organization"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Name contains.</p>
            </p>
                    <p>
                <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="street"
               data-endpoint="GETapi-admin-organization"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Street contains.</p>
            </p>
                    <p>
                <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="GETapi-admin-organization"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Postcode contains.</p>
            </p>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="city"
               data-endpoint="GETapi-admin-organization"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>City contains.</p>
            </p>
                    <p>
                <b><code>contact</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="contact"
               data-endpoint="GETapi-admin-organization"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Contact contains.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-organization"
               value="name"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>name</code>, <code>street</code>, <code>postcode</code>, <code>city</code>, or <code>contact</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-organization"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-organization"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-organization"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="organization-POSTapi-admin-organization">Create new Organization</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-organization">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/organization" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Caritas\",
    \"street\": \"Franziskanergasse 3\",
    \"postcode\": \" 97070\",
    \"city\": \"Wuerzburg\",
    \"contact\": \"You can call me under 1-603-413-4124\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/organization"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Caritas",
    "street": "Franziskanergasse 3",
    "postcode": " 97070",
    "city": "Wuerzburg",
    "contact": "You can call me under 1-603-413-4124"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/organization',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Caritas',
            'street' =&gt; 'Franziskanergasse 3',
            'postcode' =&gt; ' 97070',
            'city' =&gt; 'Wuerzburg',
            'contact' =&gt; 'You can call me under 1-603-413-4124',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/organization'
payload = {
    "name": "Caritas",
    "street": "Franziskanergasse 3",
    "postcode": " 97070",
    "city": "Wuerzburg",
    "contact": "You can call me under 1-603-413-4124"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-organization">
</span>
<span id="execution-results-POSTapi-admin-organization" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-organization"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-organization"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-organization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-organization"></code></pre>
</span>
<form id="form-POSTapi-admin-organization" data-method="POST"
      data-path="api/admin/organization"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-organization', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-organization"
                    onclick="tryItOut('POSTapi-admin-organization');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-organization"
                    onclick="cancelTryOut('POSTapi-admin-organization');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-organization" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/organization</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-organization" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-organization"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-admin-organization"
               value="Caritas"
               data-component="body" hidden>
    <br>
<p>Name of the organization. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="street"
               data-endpoint="POSTapi-admin-organization"
               value="Franziskanergasse 3"
               data-component="body" hidden>
    <br>
<p>Street where the organization is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="POSTapi-admin-organization"
               value=" 97070"
               data-component="body" hidden>
    <br>
<p>Postcode where the organization is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="city"
               data-endpoint="POSTapi-admin-organization"
               value="Wuerzburg"
               data-component="body" hidden>
    <br>
<p>City where the organization is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>contact</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="contact"
               data-endpoint="POSTapi-admin-organization"
               value="You can call me under 1-603-413-4124"
               data-component="body" hidden>
    <br>
<p>Contact information from the organization.</p>
        </p>
        </form>

            <h2 id="organization-GETapi-admin-organization--id-">Show specified Organization</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-organization--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/organization/57911074739244" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/organization/57911074739244"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/organization/57911074739244',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/organization/57911074739244'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-organization--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;instance_id&quot;: 2,
    &quot;name&quot;: &quot;Instance&quot;,
    &quot;street&quot;: &quot;Street&quot;,
    &quot;postcode&quot;: &quot;Postcode&quot;,
    &quot;city&quot;: &quot;City&quot;,
    &quot;contact&quot;: &quot;Contact&quot;,
    &quot;created_at&quot;: &quot;2022-08-21T11:34:14.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-21T11:34:14.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-organization--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-organization--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-organization--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-organization--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-organization--id-"></code></pre>
</span>
<form id="form-GETapi-admin-organization--id-" data-method="GET"
      data-path="api/admin/organization/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-organization--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-organization--id-"
                    onclick="tryItOut('GETapi-admin-organization--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-organization--id-"
                    onclick="cancelTryOut('GETapi-admin-organization--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-organization--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/organization/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-organization--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-organization--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-organization--id-"
               value="57911074739244"
               data-component="url" hidden>
    <br>
<p>The ID of the organization.</p>
            </p>
                    </form>

            <h2 id="organization-PUTapi-admin-organization--id-">Update specified Organization</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-organization--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/organization/57911074739244" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Caritas\",
    \"street\": \"Franziskanergasse 3\",
    \"postcode\": \" 97070\",
    \"city\": \"Wuerzburg\",
    \"contact\": \"You can call me under 1-603-413-4124\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/organization/57911074739244"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Caritas",
    "street": "Franziskanergasse 3",
    "postcode": " 97070",
    "city": "Wuerzburg",
    "contact": "You can call me under 1-603-413-4124"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/organization/57911074739244',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Caritas',
            'street' =&gt; 'Franziskanergasse 3',
            'postcode' =&gt; ' 97070',
            'city' =&gt; 'Wuerzburg',
            'contact' =&gt; 'You can call me under 1-603-413-4124',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/organization/57911074739244'
payload = {
    "name": "Caritas",
    "street": "Franziskanergasse 3",
    "postcode": " 97070",
    "city": "Wuerzburg",
    "contact": "You can call me under 1-603-413-4124"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-organization--id-">
</span>
<span id="execution-results-PUTapi-admin-organization--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-organization--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-organization--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-organization--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-organization--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-organization--id-" data-method="PUT"
      data-path="api/admin/organization/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-organization--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-organization--id-"
                    onclick="tryItOut('PUTapi-admin-organization--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-organization--id-"
                    onclick="cancelTryOut('PUTapi-admin-organization--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-organization--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/organization/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-organization--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-organization--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-organization--id-"
               value="57911074739244"
               data-component="url" hidden>
    <br>
<p>The ID of the organization.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-admin-organization--id-"
               value="Caritas"
               data-component="body" hidden>
    <br>
<p>Name of the organization. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="street"
               data-endpoint="PUTapi-admin-organization--id-"
               value="Franziskanergasse 3"
               data-component="body" hidden>
    <br>
<p>Street where the organization is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="PUTapi-admin-organization--id-"
               value=" 97070"
               data-component="body" hidden>
    <br>
<p>Postcode where the organization is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="city"
               data-endpoint="PUTapi-admin-organization--id-"
               value="Wuerzburg"
               data-component="body" hidden>
    <br>
<p>City where the organization is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>contact</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="contact"
               data-endpoint="PUTapi-admin-organization--id-"
               value="You can call me under 1-603-413-4124"
               data-component="body" hidden>
    <br>
<p>Contact information from the organization.</p>
        </p>
        </form>

            <h2 id="organization-DELETEapi-admin-organization--id-">Delete specified Organization</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-organization--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/organization/57911074739244" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/organization/57911074739244"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/organization/57911074739244',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/organization/57911074739244'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-organization--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-organization--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-organization--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-organization--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-organization--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-organization--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-organization--id-" data-method="DELETE"
      data-path="api/admin/organization/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-organization--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-organization--id-"
                    onclick="tryItOut('DELETEapi-admin-organization--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-organization--id-"
                    onclick="cancelTryOut('DELETEapi-admin-organization--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-organization--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/organization/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-organization--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-organization--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-organization--id-"
               value="57911074739244"
               data-component="url" hidden>
    <br>
<p>The ID of the organization.</p>
            </p>
                    </form>

        <h1 id="checkout">Checkout</h1>

    

            <h2 id="checkout-GETapi-card-visit--id-">Show specified Card and related Persons</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Endpoint shows the specified card, the associated people and the limitation_state.
The limitation_state shows for the persons the limit for a productType and how
many of them have already been used by a person</p>

<span id="example-requests-GETapi-card-visit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/card/visit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/card/visit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/card/visit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/card/visit/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-card-visit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;card&quot;: {
        &quot;id&quot;: 1,
        &quot;last_name&quot;: &quot;Mustermann&quot;,
        &quot;first_name&quot;: &quot;M&uuml;ller&quot;,
        &quot;street&quot;: &quot;M&uuml;hlenstra&szlig;e 5&quot;,
        &quot;postcode&quot;: &quot;12345&quot;,
        &quot;city&quot;: &quot;W&uuml;rzburg&quot;,
        &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
        &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
        &quot;creator_id&quot;: 1,
        &quot;comment&quot;: &quot;Hallo Welt&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    &quot;persons&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;gender&quot;: &quot;male&quot;,
            &quot;age&quot;: 18,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;limitation_states&quot;: [
                {
                    &quot;product_type&quot;: {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;t-shirt&quot;,
                        &quot;icon&quot;: &quot;t-shirt icon&quot;
                    },
                    &quot;limit&quot;: 3,
                    &quot;used&quot;: 4
                },
                {
                    &quot;product_type&quot;: {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;shoe&quot;,
                        &quot;icon&quot;: &quot;shoe icon&quot;
                    },
                    &quot;limit&quot;: 5,
                    &quot;used&quot;: 0
                },
                {
                    &quot;product_type&quot;: {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;sock&quot;,
                        &quot;icon&quot;: &quot;sock icon&quot;
                    },
                    &quot;limit&quot;: 2,
                    &quot;used&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;gender&quot;: &quot;female&quot;,
            &quot;age&quot;: 15,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;limitation_states&quot;: [
                {
                    &quot;product_type&quot;: {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;t-shirt&quot;,
                        &quot;icon&quot;: &quot;t-shirt icon&quot;
                    },
                    &quot;limit&quot;: 3,
                    &quot;used&quot;: 0
                },
                {
                    &quot;product_type&quot;: {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;shoe&quot;,
                        &quot;icon&quot;: &quot;shoe icon&quot;
                    },
                    &quot;limit&quot;: 5,
                    &quot;used&quot;: 1
                },
                {
                    &quot;product_type&quot;: {
                        &quot;id&quot;: 3,
                        &quot;name&quot;: &quot;sock&quot;,
                        &quot;icon&quot;: &quot;sock icon&quot;
                    },
                    &quot;limit&quot;: 2,
                    &quot;used&quot;: 0
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-card-visit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-card-visit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-card-visit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-card-visit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-card-visit--id-"></code></pre>
</span>
<form id="form-GETapi-card-visit--id-" data-method="GET"
      data-path="api/card/visit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-card-visit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-card-visit--id-"
                    onclick="tryItOut('GETapi-card-visit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-card-visit--id-"
                    onclick="cancelTryOut('GETapi-card-visit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-card-visit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/card/visit/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-card-visit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-card-visit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-card-visit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                    </form>

            <h2 id="checkout-POSTapi-card-visit--id-">Create new Visit, LineItems</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Endpoint creates a new Visit entry and stores the submitted lineItems</p>

<span id="example-requests-POSTapi-card-visit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/card/visit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"lineItems\": [
        {
            \"person_id\": \"50080528753334\",
            \"product_type_id\": \"50080528753334\",
            \"amount\": 5
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/card/visit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "lineItems": [
        {
            "person_id": "50080528753334",
            "product_type_id": "50080528753334",
            "amount": 5
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/card/visit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'lineItems' =&gt; [
                [
                    'person_id' =&gt; '50080528753334',
                    'product_type_id' =&gt; '50080528753334',
                    'amount' =&gt; 5,
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/card/visit/10'
payload = {
    "lineItems": [
        {
            "person_id": "50080528753334",
            "product_type_id": "50080528753334",
            "amount": 5
        }
    ]
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-card-visit--id-">
</span>
<span id="execution-results-POSTapi-card-visit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-card-visit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-card-visit--id-"></code></pre>
</span>
<span id="execution-error-POSTapi-card-visit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-card-visit--id-"></code></pre>
</span>
<form id="form-POSTapi-card-visit--id-" data-method="POST"
      data-path="api/card/visit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-card-visit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-card-visit--id-"
                    onclick="tryItOut('POSTapi-card-visit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-card-visit--id-"
                    onclick="cancelTryOut('POSTapi-card-visit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-card-visit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/card/visit/{id}</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-card-visit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-card-visit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-card-visit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>lineItems</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>lineItems[].person_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="lineItems.0.person_id"
               data-endpoint="POSTapi-card-visit--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the person the lineItem is for.</p>
                    </p>
                                                                <p>
                        <b><code>lineItems[].product_type_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="lineItems.0.product_type_id"
               data-endpoint="POSTapi-card-visit--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the product_type of the lineItem.</p>
                    </p>
                                                                <p>
                        <b><code>lineItems[].amount</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="lineItems.0.amount"
               data-endpoint="POSTapi-card-visit--id-"
               value="5"
               data-component="body" hidden>
    <br>
<p>The amount of purchased lineItems of the same product_type. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
        </form>

            <h2 id="checkout-POSTapi-card-visit--id--comment">Add comment to card</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Allows the app to add a comment to the given card</p>

<span id="example-requests-POSTapi-card-visit--id--comment">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/card/visit/10/comment" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"comment\": \"Took an additional buggy for his newly born child\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/card/visit/10/comment"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "Took an additional buggy for his newly born child"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/card/visit/10/comment',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Took an additional buggy for his newly born child',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/card/visit/10/comment'
payload = {
    "comment": "Took an additional buggy for his newly born child"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-card-visit--id--comment">
</span>
<span id="execution-results-POSTapi-card-visit--id--comment" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-card-visit--id--comment"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-card-visit--id--comment"></code></pre>
</span>
<span id="execution-error-POSTapi-card-visit--id--comment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-card-visit--id--comment"></code></pre>
</span>
<form id="form-POSTapi-card-visit--id--comment" data-method="POST"
      data-path="api/card/visit/{id}/comment"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-card-visit--id--comment', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-card-visit--id--comment"
                    onclick="tryItOut('POSTapi-card-visit--id--comment');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-card-visit--id--comment"
                    onclick="cancelTryOut('POSTapi-card-visit--id--comment');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-card-visit--id--comment" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/card/visit/{id}/comment</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-card-visit--id--comment" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-card-visit--id--comment"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-card-visit--id--comment"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="comment"
               data-endpoint="POSTapi-card-visit--id--comment"
               value="Took an additional buggy for his newly born child"
               data-component="body" hidden>
    <br>
<p>Additional Comment for the card.</p>
        </p>
        </form>

        <h1 id="card">Card</h1>

    

            <h2 id="card-GETapi-admin-card">List all Cards</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-card">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/card?last_name=laudantium&amp;first_name=laudantium&amp;street=laudantium&amp;postcode=laudantium&amp;city=laudantium&amp;valid_from[]=2022-09-13T16%3A58%3A38&amp;valid_until[]=2022-09-13T16%3A58%3A38&amp;comment=laudantium&amp;sort=last_name&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/card"
);

const params = {
    "last_name": "laudantium",
    "first_name": "laudantium",
    "street": "laudantium",
    "postcode": "laudantium",
    "city": "laudantium",
    "valid_from[]": "2022-09-13T16:58:38",
    "valid_until[]": "2022-09-13T16:58:38",
    "comment": "laudantium",
    "sort": "last_name",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/card',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'last_name'=&gt; 'laudantium',
            'first_name'=&gt; 'laudantium',
            'street'=&gt; 'laudantium',
            'postcode'=&gt; 'laudantium',
            'city'=&gt; 'laudantium',
            'valid_from[]'=&gt; '2022-09-13T16:58:38',
            'valid_until[]'=&gt; '2022-09-13T16:58:38',
            'comment'=&gt; 'laudantium',
            'sort'=&gt; 'last_name',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/card'
params = {
  'last_name': 'laudantium',
  'first_name': 'laudantium',
  'street': 'laudantium',
  'postcode': 'laudantium',
  'city': 'laudantium',
  'valid_from[]': '2022-09-13T16:58:38',
  'valid_until[]': '2022-09-13T16:58:38',
  'comment': 'laudantium',
  'sort': 'last_name',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-card">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;last_name&quot;: &quot;Mustermann&quot;,
            &quot;first_name&quot;: &quot;M&uuml;ller&quot;,
            &quot;street&quot;: &quot;M&uuml;hlenstra&szlig;e 5&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;W&uuml;rzburg&quot;,
            &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
            &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
            &quot;creator_id&quot;: 1,
            &quot;comment&quot;: null,
            &quot;created_at&quot;: &quot;2022-08-16T15:00:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T15:00:00.000000Z&quot;
        },
        {
            &quot;id&quot;: 49394739894111,
            &quot;last_name&quot;: &quot;Kitsune&quot;,
            &quot;first_name&quot;: &quot;Yasu&quot;,
            &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Teststadt&quot;,
            &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
            &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
            &quot;creator_id&quot;: 1,
            &quot;comment&quot;: &quot;Hallo Welt&quot;,
            &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 2
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-card" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-card"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-card"></code></pre>
</span>
<span id="execution-error-GETapi-admin-card" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-card"></code></pre>
</span>
<form id="form-GETapi-admin-card" data-method="GET"
      data-path="api/admin/card"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-card', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-card"
                    onclick="tryItOut('GETapi-admin-card');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-card"
                    onclick="cancelTryOut('GETapi-admin-card');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-card" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/card</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-card" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-card"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="GETapi-admin-card"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Last name contains.</p>
            </p>
                    <p>
                <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="GETapi-admin-card"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>First name contains.</p>
            </p>
                    <p>
                <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="street"
               data-endpoint="GETapi-admin-card"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Street contains.</p>
            </p>
                    <p>
                <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="GETapi-admin-card"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Postcode contains.</p>
            </p>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="city"
               data-endpoint="GETapi-admin-card"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>City contains.</p>
            </p>
                    <p>
                <b><code>valid_from</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_from"
               data-endpoint="GETapi-admin-card"
               value=""
               data-component="query" hidden>
    <br>

            </p>
                    <p>
                <b><code>valid_from.0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_from.0"
               data-endpoint="GETapi-admin-card"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid from is after this date. Must be a valid date.</p>
            </p>
                    <p>
                <b><code>valid_from.1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_from.1"
               data-endpoint="GETapi-admin-card"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid from is before this date. Must be a valid date. This field is required when <code>valid_from.0</code> is present.</p>
            </p>
                    <p>
                <b><code>valid_until</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until"
               data-endpoint="GETapi-admin-card"
               value=""
               data-component="query" hidden>
    <br>

            </p>
                    <p>
                <b><code>valid_until.0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until.0"
               data-endpoint="GETapi-admin-card"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid until is after this date. Must be a valid date.</p>
            </p>
                    <p>
                <b><code>valid_until.1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="valid_until.1"
               data-endpoint="GETapi-admin-card"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Valid until is before this date. Must be a valid date. This field is required when <code>valid_until.0</code> is present.</p>
            </p>
                    <p>
                <b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="comment"
               data-endpoint="GETapi-admin-card"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Comment contains.</p>
            </p>
                    <p>
                <b><code>creator_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="creator_id"
               data-endpoint="GETapi-admin-card"
               value=""
               data-component="query" hidden>
    <br>
<p>Created by user_id.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-card"
               value="last_name"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>last_name</code>, <code>first_name</code>, <code>street</code>, <code>postcode</code>, <code>city</code>, <code>valid_from</code>, <code>valid_until</code>, or <code>creator_id</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-card"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-card"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-card"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="card-POSTapi-admin-card">Create new Card</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-card">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/card" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"last_name\": \"Kitsune\",
    \"first_name\": \"Yasu\",
    \"street\": \"Foxstreet 10\",
    \"postcode\": \"12345\",
    \"city\": \"Foxhole\",
    \"valid_from\": \"2022-08-04 12:00:00\",
    \"valid_until\": \"2022-08-04 12:00:00\",
    \"comment\": \"Took an additional buggy for his newly born child\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/card"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "last_name": "Kitsune",
    "first_name": "Yasu",
    "street": "Foxstreet 10",
    "postcode": "12345",
    "city": "Foxhole",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00",
    "comment": "Took an additional buggy for his newly born child"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/card',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'last_name' =&gt; 'Kitsune',
            'first_name' =&gt; 'Yasu',
            'street' =&gt; 'Foxstreet 10',
            'postcode' =&gt; '12345',
            'city' =&gt; 'Foxhole',
            'valid_from' =&gt; '2022-08-04 12:00:00',
            'valid_until' =&gt; '2022-08-04 12:00:00',
            'comment' =&gt; 'Took an additional buggy for his newly born child',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/card'
payload = {
    "last_name": "Kitsune",
    "first_name": "Yasu",
    "street": "Foxstreet 10",
    "postcode": "12345",
    "city": "Foxhole",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00",
    "comment": "Took an additional buggy for his newly born child"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-card">
</span>
<span id="execution-results-POSTapi-admin-card" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-card"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-card"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-card" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-card"></code></pre>
</span>
<form id="form-POSTapi-admin-card" data-method="POST"
      data-path="api/admin/card"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-card', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-card"
                    onclick="tryItOut('POSTapi-admin-card');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-card"
                    onclick="cancelTryOut('POSTapi-admin-card');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-card" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/card</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-card" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-card"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-admin-card"
               value="Kitsune"
               data-component="body" hidden>
    <br>
<p>Last name of the cardholder. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTapi-admin-card"
               value="Yasu"
               data-component="body" hidden>
    <br>
<p>First name of the cardholder. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="street"
               data-endpoint="POSTapi-admin-card"
               value="Foxstreet 10"
               data-component="body" hidden>
    <br>
<p>Street where the cardholder is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="POSTapi-admin-card"
               value="12345"
               data-component="body" hidden>
    <br>
<p>Postcode where the cardholder is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="city"
               data-endpoint="POSTapi-admin-card"
               value="Foxhole"
               data-component="body" hidden>
    <br>
<p>City where the cardholder is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>valid_from</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="valid_from"
               data-endpoint="POSTapi-admin-card"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the start of validity of the card. Must be a valid date.</p>
        </p>
                <p>
            <b><code>valid_until</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="valid_until"
               data-endpoint="POSTapi-admin-card"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the expiry of the card. Must be a valid date.</p>
        </p>
                <p>
            <b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="comment"
               data-endpoint="POSTapi-admin-card"
               value="Took an additional buggy for his newly born child"
               data-component="body" hidden>
    <br>
<p>Additional Comment for the card.</p>
        </p>
        </form>

            <h2 id="card-GETapi-admin-card--id-">Show specified Card</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-card--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/card/57959734536623" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/card/57959734536623"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/card/57959734536623',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/card/57959734536623'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-card--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 49394739894111,
    &quot;last_name&quot;: &quot;Kitsune&quot;,
    &quot;first_name&quot;: &quot;Yasu&quot;,
    &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
    &quot;postcode&quot;: &quot;12345&quot;,
    &quot;city&quot;: &quot;Teststadt&quot;,
    &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
    &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
    &quot;creator_id&quot;: 1,
    &quot;comment&quot;: null,
    &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-card--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-card--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-card--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-card--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-card--id-"></code></pre>
</span>
<form id="form-GETapi-admin-card--id-" data-method="GET"
      data-path="api/admin/card/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-card--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-card--id-"
                    onclick="tryItOut('GETapi-admin-card--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-card--id-"
                    onclick="cancelTryOut('GETapi-admin-card--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-card--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/card/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-card--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-card--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-card--id-"
               value="57959734536623"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                    </form>

            <h2 id="card-PUTapi-admin-card--id-">Update specified Card</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-card--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/card/57959734536623" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"last_name\": \"Kitsune\",
    \"first_name\": \"Yasu\",
    \"street\": \"Foxstreet 10\",
    \"postcode\": \"12345\",
    \"city\": \"Foxhole\",
    \"valid_from\": \"2022-08-04 12:00:00\",
    \"valid_until\": \"2022-08-04 12:00:00\",
    \"comment\": \"Took an additional buggy for his newly born child\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/card/57959734536623"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "last_name": "Kitsune",
    "first_name": "Yasu",
    "street": "Foxstreet 10",
    "postcode": "12345",
    "city": "Foxhole",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00",
    "comment": "Took an additional buggy for his newly born child"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/card/57959734536623',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'last_name' =&gt; 'Kitsune',
            'first_name' =&gt; 'Yasu',
            'street' =&gt; 'Foxstreet 10',
            'postcode' =&gt; '12345',
            'city' =&gt; 'Foxhole',
            'valid_from' =&gt; '2022-08-04 12:00:00',
            'valid_until' =&gt; '2022-08-04 12:00:00',
            'comment' =&gt; 'Took an additional buggy for his newly born child',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/card/57959734536623'
payload = {
    "last_name": "Kitsune",
    "first_name": "Yasu",
    "street": "Foxstreet 10",
    "postcode": "12345",
    "city": "Foxhole",
    "valid_from": "2022-08-04 12:00:00",
    "valid_until": "2022-08-04 12:00:00",
    "comment": "Took an additional buggy for his newly born child"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-card--id-">
</span>
<span id="execution-results-PUTapi-admin-card--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-card--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-card--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-card--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-card--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-card--id-" data-method="PUT"
      data-path="api/admin/card/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-card--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-card--id-"
                    onclick="tryItOut('PUTapi-admin-card--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-card--id-"
                    onclick="cancelTryOut('PUTapi-admin-card--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-card--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/card/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-card--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-card--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-card--id-"
               value="57959734536623"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="PUTapi-admin-card--id-"
               value="Kitsune"
               data-component="body" hidden>
    <br>
<p>Last name of the cardholder. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="PUTapi-admin-card--id-"
               value="Yasu"
               data-component="body" hidden>
    <br>
<p>First name of the cardholder. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="street"
               data-endpoint="PUTapi-admin-card--id-"
               value="Foxstreet 10"
               data-component="body" hidden>
    <br>
<p>Street where the cardholder is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="PUTapi-admin-card--id-"
               value="12345"
               data-component="body" hidden>
    <br>
<p>Postcode where the cardholder is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="city"
               data-endpoint="PUTapi-admin-card--id-"
               value="Foxhole"
               data-component="body" hidden>
    <br>
<p>City where the cardholder is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>valid_from</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="valid_from"
               data-endpoint="PUTapi-admin-card--id-"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the start of validity of the card. Must be a valid date.</p>
        </p>
                <p>
            <b><code>valid_until</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="valid_until"
               data-endpoint="PUTapi-admin-card--id-"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and time of the expiry of the card. Must be a valid date.</p>
        </p>
                <p>
            <b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="comment"
               data-endpoint="PUTapi-admin-card--id-"
               value="Took an additional buggy for his newly born child"
               data-component="body" hidden>
    <br>
<p>Additional Comment for the card.</p>
        </p>
        </form>

            <h2 id="card-DELETEapi-admin-card--id-">Delete specified Card</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-card--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/card/57959734536623" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/card/57959734536623"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/card/57959734536623',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/card/57959734536623'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-card--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-card--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-card--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-card--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-card--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-card--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-card--id-" data-method="DELETE"
      data-path="api/admin/card/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-card--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-card--id-"
                    onclick="tryItOut('DELETEapi-admin-card--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-card--id-"
                    onclick="cancelTryOut('DELETEapi-admin-card--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-card--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/card/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-card--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-card--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-card--id-"
               value="57959734536623"
               data-component="url" hidden>
    <br>
<p>The ID of the card.</p>
            </p>
                    </form>

        <h1 id="password-reset">Password reset</h1>

    

            <h2 id="password-reset-POSTapi-password-forgot">Initiate Password Reset</h2>

<p>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Allow a user to request a reset of his password.
An E-Mail with the Token will be sent, if we can find a user with the given E-Mail-Address.</p>

<span id="example-requests-POSTapi-password-forgot">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/password/forgot" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"jeffry.mitchell@example.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/forgot"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "jeffry.mitchell@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/password/forgot',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'jeffry.mitchell@example.net',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/password/forgot'
payload = {
    "email": "jeffry.mitchell@example.net"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-password-forgot">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-password-forgot" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-password-forgot"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-forgot"></code></pre>
</span>
<span id="execution-error-POSTapi-password-forgot" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-forgot"></code></pre>
</span>
<form id="form-POSTapi-password-forgot" data-method="POST"
      data-path="api/password/forgot"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-forgot', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-password-forgot"
                    onclick="tryItOut('POSTapi-password-forgot');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-password-forgot"
                    onclick="cancelTryOut('POSTapi-password-forgot');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-password-forgot" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/password/forgot</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-password-forgot"
               value="jeffry.mitchell@example.net"
               data-component="body" hidden>
    <br>
<p>Registered E-Mail-Address of the user who forgot the password. Must be a valid email address.</p>
        </p>
        </form>

            <h2 id="password-reset-POSTapi-password-reset">Password Reset</h2>

<p>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Reset the password of the given user. It is required to initiate the request to receive the mail with the reset-token.</p>

<span id="example-requests-POSTapi-password-reset">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/password/reset" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"laudantium\",
    \"email\": \"laudantium\",
    \"password\": \"laudantium\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/reset"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "laudantium",
    "email": "laudantium",
    "password": "laudantium"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/password/reset',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'token' =&gt; 'laudantium',
            'email' =&gt; 'laudantium',
            'password' =&gt; 'laudantium',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/password/reset'
payload = {
    "token": "laudantium",
    "email": "laudantium",
    "password": "laudantium"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-password-reset">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Your password has been reset!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, failure):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;This password reset token is invalid.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-password-reset" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-password-reset"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-reset"></code></pre>
</span>
<span id="execution-error-POSTapi-password-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-reset"></code></pre>
</span>
<form id="form-POSTapi-password-reset" data-method="POST"
      data-path="api/password/reset"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-reset', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-password-reset"
                    onclick="tryItOut('POSTapi-password-reset');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-password-reset"
                    onclick="cancelTryOut('POSTapi-password-reset');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-password-reset" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/password/reset</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="token"
               data-endpoint="POSTapi-password-reset"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>Token that was sent to the user via E-Mail.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-password-reset"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>Registered E-Mail-Address of the user who forgot the password.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-password-reset"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>New password for the user.</p>
        </p>
        </form>

        <h1 id="reservation">Reservation</h1>

    

            <h2 id="reservation-GETapi-admin-reservation">List all Reservations</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-reservation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/reservation?time[]=2022-09-13T16%3A58%3A38&amp;sort=card_id&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/reservation"
);

const params = {
    "time[]": "2022-09-13T16:58:38",
    "sort": "card_id",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/reservation',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'time[]'=&gt; '2022-09-13T16:58:38',
            'sort'=&gt; 'card_id',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/reservation'
params = {
  'time[]': '2022-09-13T16:58:38',
  'sort': 'card_id',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-reservation">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;card_id&quot;: 1,
            &quot;shop_id&quot;: 1,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;shop&quot;: {
                &quot;id&quot;: 1,
                &quot;organization_id&quot;: 1,
                &quot;name&quot;: &quot;organization&quot;,
                &quot;street&quot;: &quot;organizations street&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;organizations city&quot;,
                &quot;contact&quot;: &quot;organizations contact&quot;,
                &quot;opening_hours&quot;: {
                    &quot;monday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;tuesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;wednesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;thursday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;friday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;saturday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;sunday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ]
                },
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;time&quot;: &quot;2022-08-20T16:30:00.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;card_id&quot;: 1,
            &quot;shop_id&quot;: 1,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;shop&quot;: {
                &quot;id&quot;: 1,
                &quot;organization_id&quot;: 1,
                &quot;name&quot;: &quot;organization&quot;,
                &quot;street&quot;: &quot;organizations street&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;organizations city&quot;,
                &quot;contact&quot;: &quot;organizations contact&quot;,
                &quot;opening_hours&quot;: {
                    &quot;monday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;tuesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;wednesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;thursday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;friday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;saturday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;sunday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ]
                },
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;time&quot;: &quot;2022-08-20T08:00:00.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;card_id&quot;: 1,
            &quot;shop_id&quot;: 1,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;shop&quot;: {
                &quot;id&quot;: 1,
                &quot;organization_id&quot;: 1,
                &quot;name&quot;: &quot;organization&quot;,
                &quot;street&quot;: &quot;organizations street&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;organizations city&quot;,
                &quot;contact&quot;: &quot;organizations contact&quot;,
                &quot;opening_hours&quot;: {
                    &quot;monday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;tuesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;wednesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;thursday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;friday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;saturday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;sunday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ]
                },
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;time&quot;: &quot;2022-08-21T08:00:00.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;card_id&quot;: 49394739894111,
            &quot;shop_id&quot;: 2,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;shop&quot;: {
                &quot;id&quot;: 2,
                &quot;organization_id&quot;: 1,
                &quot;name&quot;: &quot;organization&quot;,
                &quot;street&quot;: &quot;organizations street&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;organizations city&quot;,
                &quot;contact&quot;: &quot;organizations contact&quot;,
                &quot;opening_hours&quot;: {
                    &quot;monday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;tuesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;wednesday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;thursday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;friday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;saturday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ],
                    &quot;sunday&quot;: [
                        {
                            &quot;opens_at&quot;: &quot;08:00&quot;,
                            &quot;closes_at&quot;: &quot;17:00&quot;
                        }
                    ]
                },
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;time&quot;: &quot;2022-08-21T15:00:00.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 4
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-reservation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-reservation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-reservation"></code></pre>
</span>
<span id="execution-error-GETapi-admin-reservation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-reservation"></code></pre>
</span>
<form id="form-GETapi-admin-reservation" data-method="GET"
      data-path="api/admin/reservation"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-reservation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-reservation"
                    onclick="tryItOut('GETapi-admin-reservation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-reservation"
                    onclick="cancelTryOut('GETapi-admin-reservation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-reservation" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/reservation</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-reservation" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-reservation"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="GETapi-admin-reservation"
               value=""
               data-component="query" hidden>
    <br>
<p>Card.</p>
            </p>
                    <p>
                <b><code>shop_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="shop_id"
               data-endpoint="GETapi-admin-reservation"
               value=""
               data-component="query" hidden>
    <br>
<p>Shop.</p>
            </p>
                    <p>
                <b><code>time</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="time"
               data-endpoint="GETapi-admin-reservation"
               value=""
               data-component="query" hidden>
    <br>

            </p>
                    <p>
                <b><code>time.0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="time.0"
               data-endpoint="GETapi-admin-reservation"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Time is after this date. Must be a valid date.</p>
            </p>
                    <p>
                <b><code>time.1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="time.1"
               data-endpoint="GETapi-admin-reservation"
               value="2022-09-13T16:58:38"
               data-component="query" hidden>
    <br>
<p>Time is before this date. Must be a valid date. This field is required when <code>time.0</code> is present.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-reservation"
               value="card_id"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>card_id</code>, <code>shop_id</code>, or <code>time</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-reservation"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-reservation"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-reservation"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="reservation-POSTapi-admin-reservation">Create new Reservation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-reservation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/reservation" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"card_id\": \"50080528753334\",
    \"shop_id\": \"50080528753334\",
    \"time\": \"2022-08-04 12:00:00\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/reservation"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "card_id": "50080528753334",
    "shop_id": "50080528753334",
    "time": "2022-08-04 12:00:00"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/reservation',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'card_id' =&gt; '50080528753334',
            'shop_id' =&gt; '50080528753334',
            'time' =&gt; '2022-08-04 12:00:00',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/reservation'
payload = {
    "card_id": "50080528753334",
    "shop_id": "50080528753334",
    "time": "2022-08-04 12:00:00"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-reservation">
</span>
<span id="execution-results-POSTapi-admin-reservation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-reservation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-reservation"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-reservation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-reservation"></code></pre>
</span>
<form id="form-POSTapi-admin-reservation" data-method="POST"
      data-path="api/admin/reservation"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-reservation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-reservation"
                    onclick="tryItOut('POSTapi-admin-reservation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-reservation"
                    onclick="cancelTryOut('POSTapi-admin-reservation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-reservation" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/reservation</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-reservation" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-reservation"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="POSTapi-admin-reservation"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the card the reservation is attached to.</p>
        </p>
                <p>
            <b><code>shop_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="shop_id"
               data-endpoint="POSTapi-admin-reservation"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the shop the reservation is for.</p>
        </p>
                <p>
            <b><code>time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="time"
               data-endpoint="POSTapi-admin-reservation"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and Time for the reservation. Must be a valid date.</p>
        </p>
        </form>

            <h2 id="reservation-GETapi-admin-reservation--id-">Show specified Reservation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-reservation--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/reservation/57960188035205" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/reservation/57960188035205"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/reservation/57960188035205',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/reservation/57960188035205'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-reservation--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;card_id&quot;: 49394739894111,
    &quot;shop_id&quot;: 1,
    &quot;card&quot;: {
        &quot;id&quot;: 49394739894111,
        &quot;last_name&quot;: &quot;Kitsune&quot;,
        &quot;first_name&quot;: &quot;Yasu&quot;,
        &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
        &quot;postcode&quot;: &quot;12345&quot;,
        &quot;city&quot;: &quot;Teststadt&quot;,
        &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
        &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
        &quot;creator_id&quot;: 1,
        &quot;comment&quot;: null,
        &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
    },
    &quot;shop&quot;: {
        &quot;id&quot;: 1,
        &quot;organization_id&quot;: 1,
        &quot;name&quot;: &quot;organization&quot;,
        &quot;street&quot;: &quot;organizations street&quot;,
        &quot;postcode&quot;: &quot;12345&quot;,
        &quot;city&quot;: &quot;organizations city&quot;,
        &quot;contact&quot;: &quot;organizations contact&quot;,
        &quot;opening_hours&quot;: {
            &quot;monday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ],
            &quot;tuesday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ],
            &quot;wednesday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ],
            &quot;thursday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ],
            &quot;friday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ],
            &quot;saturday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ],
            &quot;sunday&quot;: [
                {
                    &quot;opens_at&quot;: &quot;08:00&quot;,
                    &quot;closes_at&quot;: &quot;17:00&quot;
                }
            ]
        },
        &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    },
    &quot;time&quot;: &quot;2022-08-20T16:30:00.000000Z&quot;,
    &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-reservation--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-reservation--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-reservation--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-reservation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-reservation--id-"></code></pre>
</span>
<form id="form-GETapi-admin-reservation--id-" data-method="GET"
      data-path="api/admin/reservation/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-reservation--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-reservation--id-"
                    onclick="tryItOut('GETapi-admin-reservation--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-reservation--id-"
                    onclick="cancelTryOut('GETapi-admin-reservation--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-reservation--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/reservation/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-reservation--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-reservation--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-reservation--id-"
               value="57960188035205"
               data-component="url" hidden>
    <br>
<p>The ID of the reservation.</p>
            </p>
                    </form>

            <h2 id="reservation-PUTapi-admin-reservation--id-">Update specified Reservation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-reservation--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/reservation/57960188035205" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"card_id\": \"50080528753334\",
    \"shop_id\": \"50080528753334\",
    \"time\": \"2022-08-04 12:00:00\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/reservation/57960188035205"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "card_id": "50080528753334",
    "shop_id": "50080528753334",
    "time": "2022-08-04 12:00:00"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/reservation/57960188035205',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'card_id' =&gt; '50080528753334',
            'shop_id' =&gt; '50080528753334',
            'time' =&gt; '2022-08-04 12:00:00',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/reservation/57960188035205'
payload = {
    "card_id": "50080528753334",
    "shop_id": "50080528753334",
    "time": "2022-08-04 12:00:00"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-reservation--id-">
</span>
<span id="execution-results-PUTapi-admin-reservation--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-reservation--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-reservation--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-reservation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-reservation--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-reservation--id-" data-method="PUT"
      data-path="api/admin/reservation/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-reservation--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-reservation--id-"
                    onclick="tryItOut('PUTapi-admin-reservation--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-reservation--id-"
                    onclick="cancelTryOut('PUTapi-admin-reservation--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-reservation--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/reservation/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-reservation--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-reservation--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-reservation--id-"
               value="57960188035205"
               data-component="url" hidden>
    <br>
<p>The ID of the reservation.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="PUTapi-admin-reservation--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the card the reservation is attached to.</p>
        </p>
                <p>
            <b><code>shop_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="shop_id"
               data-endpoint="PUTapi-admin-reservation--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the shop the reservation is for.</p>
        </p>
                <p>
            <b><code>time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="time"
               data-endpoint="PUTapi-admin-reservation--id-"
               value="2022-08-04 12:00:00"
               data-component="body" hidden>
    <br>
<p>Date and Time for the reservation. Must be a valid date.</p>
        </p>
        </form>

            <h2 id="reservation-DELETEapi-admin-reservation--id-">Delete specified Reservation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-reservation--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/reservation/57960188035205" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/reservation/57960188035205"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/reservation/57960188035205',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/reservation/57960188035205'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-reservation--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-reservation--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-reservation--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-reservation--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-reservation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-reservation--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-reservation--id-" data-method="DELETE"
      data-path="api/admin/reservation/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-reservation--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-reservation--id-"
                    onclick="tryItOut('DELETEapi-admin-reservation--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-reservation--id-"
                    onclick="cancelTryOut('DELETEapi-admin-reservation--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-reservation--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/reservation/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-reservation--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-reservation--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-reservation--id-"
               value="57960188035205"
               data-component="url" hidden>
    <br>
<p>The ID of the reservation.</p>
            </p>
                    </form>

        <h1 id="limitation">Limitation</h1>

    

            <h2 id="limitation-GETapi-admin-limitation-limit">List all Limitation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-limitation-limit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/limitation/limit?sort=limitation_set_id&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/limit"
);

const params = {
    "sort": "limitation_set_id",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/limitation/limit',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'sort'=&gt; 'limitation_set_id',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/limit'
params = {
  'sort': 'limitation_set_id',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-limitation-limit">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;product_type_id&quot;: 1,
            &quot;limitation_set_id&quot;: 1,
            &quot;limit&quot;: 3,
            &quot;product_type&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;t-shirt&quot;,
                &quot;icon&quot;: &quot;t-shirt icon&quot;,
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;product_type_id&quot;: 2,
            &quot;limitation_set_id&quot;: 2,
            &quot;limit&quot;: 5,
            &quot;product_type&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;skirt&quot;,
                &quot;icon&quot;: &quot;skirt icon&quot;,
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;product_type_id&quot;: 2,
            &quot;limitation_set_id&quot;: 1,
            &quot;limit&quot;: 5,
            &quot;product_type&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;skirt&quot;,
                &quot;icon&quot;: &quot;skirt icon&quot;,
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;product_type_id&quot;: 3,
            &quot;limitation_set_id&quot;: 1,
            &quot;limit&quot;: 2,
            &quot;product_type&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;toy&quot;,
                &quot;icon&quot;: &quot;toy icon&quot;,
                &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 4
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-limitation-limit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-limitation-limit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-limitation-limit"></code></pre>
</span>
<span id="execution-error-GETapi-admin-limitation-limit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-limitation-limit"></code></pre>
</span>
<form id="form-GETapi-admin-limitation-limit" data-method="GET"
      data-path="api/admin/limitation/limit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-limitation-limit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-limitation-limit"
                    onclick="tryItOut('GETapi-admin-limitation-limit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-limitation-limit"
                    onclick="cancelTryOut('GETapi-admin-limitation-limit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-limitation-limit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/limitation/limit</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-limitation-limit" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-limitation-limit"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>limitation_set_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="limitation_set_id"
               data-endpoint="GETapi-admin-limitation-limit"
               value=""
               data-component="query" hidden>
    <br>
<p>Limitation Set.</p>
            </p>
                    <p>
                <b><code>product_type_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="product_type_id"
               data-endpoint="GETapi-admin-limitation-limit"
               value=""
               data-component="query" hidden>
    <br>
<p>Product Type.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-limitation-limit"
               value="limitation_set_id"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>limitation_set_id</code>, <code>product_type_id</code>, or <code>limit</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-limitation-limit"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-limitation-limit"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-limitation-limit"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="limitation-POSTapi-admin-limitation-limit">Create new Limitation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-limitation-limit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/limitation/limit" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_type_id\": \"50080528753334\",
    \"limitation_set_id\": \"50080528753334\",
    \"limit\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/limit"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_type_id": "50080528753334",
    "limitation_set_id": "50080528753334",
    "limit": 3
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/limitation/limit',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'product_type_id' =&gt; '50080528753334',
            'limitation_set_id' =&gt; '50080528753334',
            'limit' =&gt; 3,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/limit'
payload = {
    "product_type_id": "50080528753334",
    "limitation_set_id": "50080528753334",
    "limit": 3
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-limitation-limit">
</span>
<span id="execution-results-POSTapi-admin-limitation-limit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-limitation-limit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-limitation-limit"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-limitation-limit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-limitation-limit"></code></pre>
</span>
<form id="form-POSTapi-admin-limitation-limit" data-method="POST"
      data-path="api/admin/limitation/limit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-limitation-limit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-limitation-limit"
                    onclick="tryItOut('POSTapi-admin-limitation-limit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-limitation-limit"
                    onclick="cancelTryOut('POSTapi-admin-limitation-limit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-limitation-limit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/limitation/limit</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-limitation-limit" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-limitation-limit"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>product_type_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product_type_id"
               data-endpoint="POSTapi-admin-limitation-limit"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the product type the limitation is attached to.</p>
        </p>
                <p>
            <b><code>limitation_set_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="limitation_set_id"
               data-endpoint="POSTapi-admin-limitation-limit"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the limitation set the limitation is attached to.</p>
        </p>
                <p>
            <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="POSTapi-admin-limitation-limit"
               value="3"
               data-component="body" hidden>
    <br>
<p>Number that determines the limit.</p>
        </p>
        </form>

            <h2 id="limitation-GETapi-admin-limitation-limit--id-">Show specified Limitation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-limitation-limit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/limitation/limit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/limit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/limitation/limit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/limit/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-limitation-limit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;product_type_id&quot;: 1,
    &quot;limitation_set_id&quot;: 1,
    &quot;limit&quot;: 3,
    &quot;product_type&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;t-shirt&quot;,
        &quot;icon&quot;: &quot;t-shirt icon&quot;,
        &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    },
    &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-limitation-limit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-limitation-limit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-limitation-limit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-limitation-limit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-limitation-limit--id-"></code></pre>
</span>
<form id="form-GETapi-admin-limitation-limit--id-" data-method="GET"
      data-path="api/admin/limitation/limit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-limitation-limit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-limitation-limit--id-"
                    onclick="tryItOut('GETapi-admin-limitation-limit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-limitation-limit--id-"
                    onclick="cancelTryOut('GETapi-admin-limitation-limit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-limitation-limit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/limitation/limit/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-limitation-limit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-limitation-limit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-limitation-limit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the limitation.</p>
            </p>
                    </form>

            <h2 id="limitation-PUTapi-admin-limitation-limit--id-">Update specified Limitation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-limitation-limit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/limitation/limit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_type_id\": \"50080528753334\",
    \"limitation_set_id\": \"50080528753334\",
    \"limit\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/limit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_type_id": "50080528753334",
    "limitation_set_id": "50080528753334",
    "limit": 3
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/limitation/limit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'product_type_id' =&gt; '50080528753334',
            'limitation_set_id' =&gt; '50080528753334',
            'limit' =&gt; 3,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/limit/10'
payload = {
    "product_type_id": "50080528753334",
    "limitation_set_id": "50080528753334",
    "limit": 3
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-limitation-limit--id-">
</span>
<span id="execution-results-PUTapi-admin-limitation-limit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-limitation-limit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-limitation-limit--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-limitation-limit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-limitation-limit--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-limitation-limit--id-" data-method="PUT"
      data-path="api/admin/limitation/limit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-limitation-limit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-limitation-limit--id-"
                    onclick="tryItOut('PUTapi-admin-limitation-limit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-limitation-limit--id-"
                    onclick="cancelTryOut('PUTapi-admin-limitation-limit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-limitation-limit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/limitation/limit/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-limitation-limit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-limitation-limit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-limitation-limit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the limitation.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>product_type_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product_type_id"
               data-endpoint="PUTapi-admin-limitation-limit--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the product type the limitation is attached to.</p>
        </p>
                <p>
            <b><code>limitation_set_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="limitation_set_id"
               data-endpoint="PUTapi-admin-limitation-limit--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the limitation set the limitation is attached to.</p>
        </p>
                <p>
            <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="PUTapi-admin-limitation-limit--id-"
               value="3"
               data-component="body" hidden>
    <br>
<p>Number that determines the limit.</p>
        </p>
        </form>

            <h2 id="limitation-DELETEapi-admin-limitation-limit--id-">Delete specified Limitation</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-limitation-limit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/limitation/limit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/limitation/limit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/limitation/limit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/limitation/limit/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-limitation-limit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-limitation-limit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-limitation-limit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-limitation-limit--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-limitation-limit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-limitation-limit--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-limitation-limit--id-" data-method="DELETE"
      data-path="api/admin/limitation/limit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-limitation-limit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-limitation-limit--id-"
                    onclick="tryItOut('DELETEapi-admin-limitation-limit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-limitation-limit--id-"
                    onclick="cancelTryOut('DELETEapi-admin-limitation-limit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-limitation-limit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/limitation/limit/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-limitation-limit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-limitation-limit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-limitation-limit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the limitation.</p>
            </p>
                    </form>

        <h1 id="shop">Shop</h1>

    

            <h2 id="shop-GETapi-admin-shop">List all Shops</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-shop">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/shop?name=laudantium&amp;street=laudantium&amp;postcode=laudantium&amp;city=laudantium&amp;contact=laudantium&amp;sort=street&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/shop"
);

const params = {
    "name": "laudantium",
    "street": "laudantium",
    "postcode": "laudantium",
    "city": "laudantium",
    "contact": "laudantium",
    "sort": "street",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/shop',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'laudantium',
            'street'=&gt; 'laudantium',
            'postcode'=&gt; 'laudantium',
            'city'=&gt; 'laudantium',
            'contact'=&gt; 'laudantium',
            'sort'=&gt; 'street',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/shop'
params = {
  'name': 'laudantium',
  'street': 'laudantium',
  'postcode': 'laudantium',
  'city': 'laudantium',
  'contact': 'laudantium',
  'sort': 'street',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-shop">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
  &quot;items&quot;: [
    {
      &quot;id&quot;: 1,
      &quot;organization_id&quot;: 1,
      &quot;name&quot;: &quot;organization&quot;,
      &quot;street&quot;: &quot;organizations street&quot;,
      &quot;postcode&quot;: &quot;12345&quot;,
      &quot;city&quot;: &quot;oraganizations city&quot;,
      &quot;contact&quot;: &quot;organizations contact&quot;,
      &quot;opening_hours&quot;: {
        &quot;monday&quot;: [
          {
            &quot;slots&quot;: &quot;4&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;tuesday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;wednesday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;thursday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;friday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;saturday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;sunday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ]
      },
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }, {
      &quot;id&quot;: 2
      &quot;organization_id&quot;: 3,
      &quot;name&quot;: &quot;organization&quot;,
      &quot;street&quot;: &quot;organizations street&quot;,
      &quot;postcode&quot;: &quot;12345&quot;,
      &quot;city&quot;: &quot;organizations city&quot;,
      &quot;contact&quot;: &quot;organizations contact&quot;,
      &quot;opening_hours&quot;: {
        &quot;monday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;tuesday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;wednesday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;thursday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;friday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;saturday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ],
        &quot;sunday&quot;: [
          {
            &quot;slots&quot;: &quot;2&quot;,
            &quot;opens_at&quot;: &quot;08:00&quot;,
            &quot;closes_at&quot;: &quot;17:00&quot;
          }
        ]
      },
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }
  ],
  &quot;meta&quot;: {
    &quot;current_page&quot;: 1,
    &quot;last_page&quot;: 1,
    &quot;per_page&quot;: 25,
    &quot;item_count&quot;: 2
  },
  &quot;links&quot;: {
    &quot;prev_page_url&quot;: null,
    &quot;next_page_url&quot;: null
  }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-shop" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-shop"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-shop"></code></pre>
</span>
<span id="execution-error-GETapi-admin-shop" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-shop"></code></pre>
</span>
<form id="form-GETapi-admin-shop" data-method="GET"
      data-path="api/admin/shop"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-shop', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-shop"
                    onclick="tryItOut('GETapi-admin-shop');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-shop"
                    onclick="cancelTryOut('GETapi-admin-shop');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-shop" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/shop</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-shop" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-shop"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>organization_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="organization_id"
               data-endpoint="GETapi-admin-shop"
               value=""
               data-component="query" hidden>
    <br>
<p>Organization.</p>
            </p>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-admin-shop"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Name contains.</p>
            </p>
                    <p>
                <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="street"
               data-endpoint="GETapi-admin-shop"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Street contains.</p>
            </p>
                    <p>
                <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="GETapi-admin-shop"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Postcode contains.</p>
            </p>
                    <p>
                <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="city"
               data-endpoint="GETapi-admin-shop"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>City contains.</p>
            </p>
                    <p>
                <b><code>contact</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="contact"
               data-endpoint="GETapi-admin-shop"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Contact contains.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-shop"
               value="street"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>organization_id</code>, <code>name</code>, <code>street</code>, <code>postcode</code>, <code>city</code>, or <code>contact</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-shop"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-shop"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-shop"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="shop-POSTapi-admin-shop">Create new Shop</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-shop">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/shop" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"organization_id\": \"50080528753334\",
    \"name\": \"The friendly shop around the corner\",
    \"street\": \"Around the corner\",
    \"postcode\": \"50080\",
    \"city\": \"Cornville\",
    \"contact\": \"You can call me under 1-603-413-4124\",
    \"opening_hours\": {
        \"monday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 4
            }
        ],
        \"tuesday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 2
            }
        ],
        \"wednesday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 6
            }
        ],
        \"thursday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 4
            }
        ],
        \"friday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 4
            }
        ],
        \"saturday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 2
            }
        ],
        \"sunday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 2
            }
        ]
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/shop"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "organization_id": "50080528753334",
    "name": "The friendly shop around the corner",
    "street": "Around the corner",
    "postcode": "50080",
    "city": "Cornville",
    "contact": "You can call me under 1-603-413-4124",
    "opening_hours": {
        "monday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "tuesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "wednesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 6
            }
        ],
        "thursday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "friday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "saturday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "sunday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ]
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/shop',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'organization_id' =&gt; '50080528753334',
            'name' =&gt; 'The friendly shop around the corner',
            'street' =&gt; 'Around the corner',
            'postcode' =&gt; '50080',
            'city' =&gt; 'Cornville',
            'contact' =&gt; 'You can call me under 1-603-413-4124',
            'opening_hours' =&gt; [
                'monday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 4,
                    ],
                ],
                'tuesday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 2,
                    ],
                ],
                'wednesday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 6,
                    ],
                ],
                'thursday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 4,
                    ],
                ],
                'friday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 4,
                    ],
                ],
                'saturday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 2,
                    ],
                ],
                'sunday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 2,
                    ],
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/shop'
payload = {
    "organization_id": "50080528753334",
    "name": "The friendly shop around the corner",
    "street": "Around the corner",
    "postcode": "50080",
    "city": "Cornville",
    "contact": "You can call me under 1-603-413-4124",
    "opening_hours": {
        "monday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "tuesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "wednesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 6
            }
        ],
        "thursday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "friday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "saturday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "sunday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ]
    }
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-shop">
</span>
<span id="execution-results-POSTapi-admin-shop" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-shop"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-shop"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-shop" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-shop"></code></pre>
</span>
<form id="form-POSTapi-admin-shop" data-method="POST"
      data-path="api/admin/shop"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-shop', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-shop"
                    onclick="tryItOut('POSTapi-admin-shop');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-shop"
                    onclick="cancelTryOut('POSTapi-admin-shop');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-shop" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/shop</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-shop" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-shop"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>organization_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="organization_id"
               data-endpoint="POSTapi-admin-shop"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the organization the shop is attached to.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-admin-shop"
               value="The friendly shop around the corner"
               data-component="body" hidden>
    <br>
<p>Name of the shop. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="street"
               data-endpoint="POSTapi-admin-shop"
               value="Around the corner"
               data-component="body" hidden>
    <br>
<p>Street where the shop is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="POSTapi-admin-shop"
               value="50080"
               data-component="body" hidden>
    <br>
<p>Postcode where the shop is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="city"
               data-endpoint="POSTapi-admin-shop"
               value="Cornville"
               data-component="body" hidden>
    <br>
<p>City where the shop is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>contact</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="contact"
               data-endpoint="POSTapi-admin-shop"
               value="You can call me under 1-603-413-4124"
               data-component="body" hidden>
    <br>
<p>Contact information from the shop.</p>
        </p>
                <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.monday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.monday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.monday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Monday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.monday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.monday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Monday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.monday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.monday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="4"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Monday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.tuesday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.tuesday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.tuesday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Tuesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.tuesday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.tuesday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Tuesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.tuesday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.tuesday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="2"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Tuesday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.wednesday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.wednesday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.wednesday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Wednesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.wednesday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.wednesday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Wednesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.wednesday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.wednesday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="6"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Wednesday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.thursday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.thursday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.thursday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Thursday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.thursday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.thursday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Thursday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.thursday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.thursday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="4"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Thursday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.friday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.friday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.friday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Friday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.friday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.friday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Friday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.friday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.friday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="4"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Friday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.saturday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.saturday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.saturday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Saturday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.saturday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.saturday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Saturday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.saturday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.saturday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="2"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Saturday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.sunday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.sunday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.sunday.0.opens_at"
               data-endpoint="POSTapi-admin-shop"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Sunday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.sunday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.sunday.0.closes_at"
               data-endpoint="POSTapi-admin-shop"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Sunday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.sunday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.sunday.0.slots"
               data-endpoint="POSTapi-admin-shop"
               value="2"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Sunday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                        </details>
        </p>
        </form>

            <h2 id="shop-GETapi-admin-shop--id-">Show specified Shop</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-shop--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/shop/57960114483871" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/shop/57960114483871"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/shop/57960114483871',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/shop/57960114483871'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-shop--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;organization_id&quot;: 1,
    &quot;name&quot;: &quot;organization&quot;,
    &quot;street&quot;: &quot;organizations street&quot;,
    &quot;postcode&quot;: &quot;12345&quot;,
    &quot;city&quot;: &quot;organizations city&quot;,
    &quot;contact&quot;: &quot;organizations contact&quot;,
    &quot;opening_hours&quot;: {
        &quot;monday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ],
        &quot;tuesday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ],
        &quot;wednesday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ],
        &quot;thursday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ],
        &quot;friday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ],
        &quot;saturday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ],
        &quot;sunday&quot;: [
            {
                &quot;opens_at&quot;: &quot;08:00&quot;,
                &quot;closes_at&quot;: &quot;17:00&quot;
            }
        ]
    },
    &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-shop--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-shop--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-shop--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-shop--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-shop--id-"></code></pre>
</span>
<form id="form-GETapi-admin-shop--id-" data-method="GET"
      data-path="api/admin/shop/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-shop--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-shop--id-"
                    onclick="tryItOut('GETapi-admin-shop--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-shop--id-"
                    onclick="cancelTryOut('GETapi-admin-shop--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-shop--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/shop/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-shop--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-shop--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-shop--id-"
               value="57960114483871"
               data-component="url" hidden>
    <br>
<p>The ID of the shop.</p>
            </p>
                    </form>

            <h2 id="shop-PUTapi-admin-shop--id-">Update specified Shop</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-shop--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/shop/57960114483871" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"organization_id\": \"50080528753334\",
    \"name\": \"The friendly shop around the corner\",
    \"street\": \"Around the corner\",
    \"postcode\": \"50080\",
    \"city\": \"Cornville\",
    \"contact\": \"You can call me under 1-603-413-4124\",
    \"opening_hours\": {
        \"monday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 4
            }
        ],
        \"tuesday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 2
            }
        ],
        \"wednesday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 6
            }
        ],
        \"thursday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 4
            }
        ],
        \"friday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 4
            }
        ],
        \"saturday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 2
            }
        ],
        \"sunday\": [
            {
                \"opens_at\": \"07:30\",
                \"closes_at\": \"19:00\",
                \"slots\": 2
            }
        ]
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/shop/57960114483871"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "organization_id": "50080528753334",
    "name": "The friendly shop around the corner",
    "street": "Around the corner",
    "postcode": "50080",
    "city": "Cornville",
    "contact": "You can call me under 1-603-413-4124",
    "opening_hours": {
        "monday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "tuesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "wednesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 6
            }
        ],
        "thursday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "friday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "saturday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "sunday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ]
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/shop/57960114483871',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'organization_id' =&gt; '50080528753334',
            'name' =&gt; 'The friendly shop around the corner',
            'street' =&gt; 'Around the corner',
            'postcode' =&gt; '50080',
            'city' =&gt; 'Cornville',
            'contact' =&gt; 'You can call me under 1-603-413-4124',
            'opening_hours' =&gt; [
                'monday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 4,
                    ],
                ],
                'tuesday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 2,
                    ],
                ],
                'wednesday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 6,
                    ],
                ],
                'thursday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 4,
                    ],
                ],
                'friday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 4,
                    ],
                ],
                'saturday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 2,
                    ],
                ],
                'sunday' =&gt; [
                    [
                        'opens_at' =&gt; '07:30',
                        'closes_at' =&gt; '19:00',
                        'slots' =&gt; 2,
                    ],
                ],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/shop/57960114483871'
payload = {
    "organization_id": "50080528753334",
    "name": "The friendly shop around the corner",
    "street": "Around the corner",
    "postcode": "50080",
    "city": "Cornville",
    "contact": "You can call me under 1-603-413-4124",
    "opening_hours": {
        "monday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "tuesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "wednesday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 6
            }
        ],
        "thursday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "friday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 4
            }
        ],
        "saturday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ],
        "sunday": [
            {
                "opens_at": "07:30",
                "closes_at": "19:00",
                "slots": 2
            }
        ]
    }
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-shop--id-">
</span>
<span id="execution-results-PUTapi-admin-shop--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-shop--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-shop--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-shop--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-shop--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-shop--id-" data-method="PUT"
      data-path="api/admin/shop/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-shop--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-shop--id-"
                    onclick="tryItOut('PUTapi-admin-shop--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-shop--id-"
                    onclick="cancelTryOut('PUTapi-admin-shop--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-shop--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/shop/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-shop--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-shop--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-shop--id-"
               value="57960114483871"
               data-component="url" hidden>
    <br>
<p>The ID of the shop.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>organization_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="organization_id"
               data-endpoint="PUTapi-admin-shop--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the organization the shop is attached to.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-admin-shop--id-"
               value="The friendly shop around the corner"
               data-component="body" hidden>
    <br>
<p>Name of the shop. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="street"
               data-endpoint="PUTapi-admin-shop--id-"
               value="Around the corner"
               data-component="body" hidden>
    <br>
<p>Street where the shop is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="postcode"
               data-endpoint="PUTapi-admin-shop--id-"
               value="50080"
               data-component="body" hidden>
    <br>
<p>Postcode where the shop is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="city"
               data-endpoint="PUTapi-admin-shop--id-"
               value="Cornville"
               data-component="body" hidden>
    <br>
<p>City where the shop is located. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>contact</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="contact"
               data-endpoint="PUTapi-admin-shop--id-"
               value="You can call me under 1-603-413-4124"
               data-component="body" hidden>
    <br>
<p>Contact information from the shop.</p>
        </p>
                <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.monday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.monday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.monday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Monday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.monday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.monday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Monday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.monday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.monday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="4"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Monday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.tuesday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.tuesday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.tuesday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Tuesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.tuesday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.tuesday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Tuesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.tuesday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.tuesday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="2"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Tuesday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.wednesday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.wednesday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.wednesday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Wednesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.wednesday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.wednesday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Wednesday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.wednesday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.wednesday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="6"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Wednesday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.thursday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.thursday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.thursday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Thursday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.thursday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.thursday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Thursday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.thursday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.thursday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="4"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Thursday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.friday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.friday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.friday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Friday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.friday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.friday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Friday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.friday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.friday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="4"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Friday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.saturday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.saturday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.saturday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Saturday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.saturday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.saturday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Saturday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.saturday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.saturday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="2"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Saturday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                                                    <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <b><code>opening_hours.sunday</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>

            </summary>
                                                <p>
                        <b><code>opening_hours.sunday[].opens_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.sunday.0.opens_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="07:30"
               data-component="body" hidden>
    <br>
<p>Time of opening of the store on Sunday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.sunday[].closes_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="opening_hours.sunday.0.closes_at"
               data-endpoint="PUTapi-admin-shop--id-"
               value="19:00"
               data-component="body" hidden>
    <br>
<p>Time of closing of the store on Sunday. The value format is invalid.</p>
                    </p>
                                                                <p>
                        <b><code>opening_hours.sunday[].slots</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="opening_hours.sunday.0.slots"
               data-endpoint="PUTapi-admin-shop--id-"
               value="2"
               data-component="body" hidden>
    <br>
<p>Number of slots of the store for Sunday. Must be at least 1.</p>
                    </p>
                                    </details>
        </p>
                                        </details>
        </p>
        </form>

            <h2 id="shop-DELETEapi-admin-shop--id-">Delete specified Shop</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-shop--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/shop/57960114483871" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/shop/57960114483871"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/shop/57960114483871',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/shop/57960114483871'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-shop--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-shop--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-shop--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-shop--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-shop--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-shop--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-shop--id-" data-method="DELETE"
      data-path="api/admin/shop/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-shop--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-shop--id-"
                    onclick="tryItOut('DELETEapi-admin-shop--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-shop--id-"
                    onclick="cancelTryOut('DELETEapi-admin-shop--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-shop--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/shop/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-shop--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-shop--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-shop--id-"
               value="57960114483871"
               data-component="url" hidden>
    <br>
<p>The ID of the shop.</p>
            </p>
                    </form>

        <h1 id="line-item">Line Item</h1>

    

            <h2 id="line-item-GETapi-admin-lineItem">List all LineItems</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-lineItem">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/lineItem?sort=visit_id&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/lineItem"
);

const params = {
    "sort": "visit_id",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/lineItem',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'sort'=&gt; 'visit_id',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/lineItem'
params = {
  'sort': 'visit_id',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-lineItem">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
  &quot;items&quot;: [
    {
      &quot;id&quot;: 6,
      &quot;visit_id&quot;: 5,
      &quot;person_id&quot;: 1,
      &quot;product_type_id&quot;: 1,
      &quot;person&quot;: {
        &quot;id&quot;: 1,
        &quot;card_id&quot;: 56815898664224,
        &quot;gender&quot;: &quot;male&quot;,
        &quot;age&quot;: 20,
        &quot;created_at&quot;: &quot;2022-09-08T13:05:07.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-08T13:05:07.000000Z&quot;,
        &quot;instance_id&quot;: 1
      },
      &quot;product_type&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;fugiat&quot;,
        &quot;icon&quot;: &quot;quo_icon&quot;,
        &quot;created_at&quot;: &quot;2022-09-08T15:01:01.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-08T15:01:01.000000Z&quot;,
        &quot;instance_id&quot;: 1
      },
      &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
    }, {
      &quot;id&quot;: 7,
      &quot;visit_id&quot;: 6,
      &quot;person_id&quot;: 1,
      &quot;product_type_id&quot;: 1,
      &quot;person&quot;: {
        &quot;id&quot;: 1,
        &quot;card_id&quot;: 56815898664224,
        &quot;gender&quot;: &quot;male&quot;,
        &quot;age&quot;: 20,
        &quot;created_at&quot;: &quot;2022-09-08T13:05:07.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-08T13:05:07.000000Z&quot;,
        &quot;instance_id&quot;: 1
      },
      &quot;product_type&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;fugiat&quot;,
        &quot;icon&quot;: &quot;quo_icon&quot;,
        &quot;created_at&quot;: &quot;2022-09-08T15:01:01.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-08T15:01:01.000000Z&quot;,
        &quot;instance_id&quot;: 1
      },
      &quot;created_at&quot;: &quot;2022-08-16T16:32:52.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-16T16:32:52.000000Z&quot;
    },
  ],
  &quot;meta&quot;: {
    &quot;current_page&quot;: 1,
    &quot;last_page&quot;: 1,
    &quot;per_page&quot;: 25,
    &quot;item_count&quot;: 6
  },
  &quot;links&quot;: {
    &quot;prev_page_url&quot;: null,
    &quot;next_page_url&quot;: null
  }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-lineItem" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-lineItem"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-lineItem"></code></pre>
</span>
<span id="execution-error-GETapi-admin-lineItem" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-lineItem"></code></pre>
</span>
<form id="form-GETapi-admin-lineItem" data-method="GET"
      data-path="api/admin/lineItem"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-lineItem', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-lineItem"
                    onclick="tryItOut('GETapi-admin-lineItem');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-lineItem"
                    onclick="cancelTryOut('GETapi-admin-lineItem');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-lineItem" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/lineItem</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-lineItem" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-lineItem"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>visit_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="visit_id"
               data-endpoint="GETapi-admin-lineItem"
               value=""
               data-component="query" hidden>
    <br>
<p>Visit.</p>
            </p>
                    <p>
                <b><code>person_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="person_id"
               data-endpoint="GETapi-admin-lineItem"
               value=""
               data-component="query" hidden>
    <br>
<p>Person.</p>
            </p>
                    <p>
                <b><code>product_type_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="product_type_id"
               data-endpoint="GETapi-admin-lineItem"
               value=""
               data-component="query" hidden>
    <br>
<p>Product Type.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-lineItem"
               value="visit_id"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>visit_id</code>, <code>person_id</code>, or <code>product_type_id</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-lineItem"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-lineItem"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-lineItem"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="line-item-POSTapi-admin-lineItem">Create new LineItem</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-lineItem">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/lineItem" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"visit_id\": \"50080528753334\",
    \"person_id\": \"50080528753334\",
    \"product_type_id\": \"50080528753334\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/lineItem"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "visit_id": "50080528753334",
    "person_id": "50080528753334",
    "product_type_id": "50080528753334"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/lineItem',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'visit_id' =&gt; '50080528753334',
            'person_id' =&gt; '50080528753334',
            'product_type_id' =&gt; '50080528753334',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/lineItem'
payload = {
    "visit_id": "50080528753334",
    "person_id": "50080528753334",
    "product_type_id": "50080528753334"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-lineItem">
</span>
<span id="execution-results-POSTapi-admin-lineItem" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-lineItem"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-lineItem"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-lineItem" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-lineItem"></code></pre>
</span>
<form id="form-POSTapi-admin-lineItem" data-method="POST"
      data-path="api/admin/lineItem"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-lineItem', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-lineItem"
                    onclick="tryItOut('POSTapi-admin-lineItem');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-lineItem"
                    onclick="cancelTryOut('POSTapi-admin-lineItem');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-lineItem" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/lineItem</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-lineItem" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-lineItem"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>visit_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="visit_id"
               data-endpoint="POSTapi-admin-lineItem"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the visit the lineItem is attached to.</p>
        </p>
                <p>
            <b><code>person_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="person_id"
               data-endpoint="POSTapi-admin-lineItem"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the person the lineItem is attached to.</p>
        </p>
                <p>
            <b><code>product_type_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product_type_id"
               data-endpoint="POSTapi-admin-lineItem"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the product_type the lineItem is attached to.</p>
        </p>
        </form>

            <h2 id="line-item-GETapi-admin-lineItem--id-">Show specified LineItem</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-lineItem--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/lineItem/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/lineItem/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/lineItem/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/lineItem/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-lineItem--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 6,
    &quot;visit_id&quot;: 5,
    &quot;person_id&quot;: 1,
    &quot;product_type_id&quot;: 1,
    &quot;person&quot;: {
        &quot;id&quot;: 1,
        &quot;card_id&quot;: 56815898664224,
        &quot;gender&quot;: &quot;male&quot;,
        &quot;age&quot;: 20,
        &quot;created_at&quot;: &quot;2022-09-08T13:05:07.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-08T13:05:07.000000Z&quot;,
        &quot;instance_id&quot;: 1
    },
    &quot;product_type&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;fugiat&quot;,
        &quot;icon&quot;: &quot;quo_icon&quot;,
        &quot;created_at&quot;: &quot;2022-09-08T15:01:01.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-09-08T15:01:01.000000Z&quot;,
        &quot;instance_id&quot;: 1
    },
    &quot;created_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-16T16:32:23.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-lineItem--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-lineItem--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-lineItem--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-lineItem--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-lineItem--id-"></code></pre>
</span>
<form id="form-GETapi-admin-lineItem--id-" data-method="GET"
      data-path="api/admin/lineItem/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-lineItem--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-lineItem--id-"
                    onclick="tryItOut('GETapi-admin-lineItem--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-lineItem--id-"
                    onclick="cancelTryOut('GETapi-admin-lineItem--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-lineItem--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/lineItem/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-lineItem--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-lineItem--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-lineItem--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the lineItem.</p>
            </p>
                    </form>

            <h2 id="line-item-PUTapi-admin-lineItem--id-">Update specified LineItem</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-lineItem--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/lineItem/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"visit_id\": \"50080528753334\",
    \"person_id\": \"50080528753334\",
    \"product_type_id\": \"50080528753334\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/lineItem/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "visit_id": "50080528753334",
    "person_id": "50080528753334",
    "product_type_id": "50080528753334"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/lineItem/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'visit_id' =&gt; '50080528753334',
            'person_id' =&gt; '50080528753334',
            'product_type_id' =&gt; '50080528753334',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/lineItem/10'
payload = {
    "visit_id": "50080528753334",
    "person_id": "50080528753334",
    "product_type_id": "50080528753334"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-lineItem--id-">
</span>
<span id="execution-results-PUTapi-admin-lineItem--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-lineItem--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-lineItem--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-lineItem--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-lineItem--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-lineItem--id-" data-method="PUT"
      data-path="api/admin/lineItem/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-lineItem--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-lineItem--id-"
                    onclick="tryItOut('PUTapi-admin-lineItem--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-lineItem--id-"
                    onclick="cancelTryOut('PUTapi-admin-lineItem--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-lineItem--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/lineItem/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-lineItem--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-lineItem--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-lineItem--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the lineItem.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>visit_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="visit_id"
               data-endpoint="PUTapi-admin-lineItem--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the visit the lineItem is attached to.</p>
        </p>
                <p>
            <b><code>person_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="person_id"
               data-endpoint="PUTapi-admin-lineItem--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the person the lineItem is attached to.</p>
        </p>
                <p>
            <b><code>product_type_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product_type_id"
               data-endpoint="PUTapi-admin-lineItem--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the product_type the lineItem is attached to.</p>
        </p>
        </form>

            <h2 id="line-item-DELETEapi-admin-lineItem--id-">Delete specified LineItem</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-lineItem--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/lineItem/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/lineItem/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/lineItem/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/lineItem/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-lineItem--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-lineItem--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-lineItem--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-lineItem--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-lineItem--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-lineItem--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-lineItem--id-" data-method="DELETE"
      data-path="api/admin/lineItem/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-lineItem--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-lineItem--id-"
                    onclick="tryItOut('DELETEapi-admin-lineItem--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-lineItem--id-"
                    onclick="cancelTryOut('DELETEapi-admin-lineItem--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-lineItem--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/lineItem/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-lineItem--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-lineItem--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-lineItem--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the lineItem.</p>
            </p>
                    </form>

        <h1 id="visit">Visit</h1>

    

            <h2 id="visit-GETapi-admin-visit">List all Visits</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-visit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/visit?sort=card_id&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/visit"
);

const params = {
    "sort": "card_id",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/visit',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'sort'=&gt; 'card_id',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/visit'
params = {
  'sort': 'card_id',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-visit">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;card_id&quot;: 1,
            &quot;user_id&quot;: 1,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-16T16:32:52.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-16T16:32:52.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;card_id&quot;: 49394739894111,
            &quot;user_id&quot;: 1,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-17T13:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-17T13:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;card_id&quot;: 49394739894111,
            &quot;user_id&quot;: 3,
            &quot;card&quot;: {
                &quot;id&quot;: 49394739894111,
                &quot;last_name&quot;: &quot;Kitsune&quot;,
                &quot;first_name&quot;: &quot;Yasu&quot;,
                &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
                &quot;postcode&quot;: &quot;12345&quot;,
                &quot;city&quot;: &quot;Teststadt&quot;,
                &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
                &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
                &quot;creator_id&quot;: 1,
                &quot;comment&quot;: null,
                &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
            },
            &quot;created_at&quot;: &quot;2022-08-21T11:50:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-21T11:50:35.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 2
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-visit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-visit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-visit"></code></pre>
</span>
<span id="execution-error-GETapi-admin-visit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-visit"></code></pre>
</span>
<form id="form-GETapi-admin-visit" data-method="GET"
      data-path="api/admin/visit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-visit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-visit"
                    onclick="tryItOut('GETapi-admin-visit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-visit"
                    onclick="cancelTryOut('GETapi-admin-visit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-visit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/visit</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-visit" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-visit"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="GETapi-admin-visit"
               value=""
               data-component="query" hidden>
    <br>
<p>Card.</p>
            </p>
                    <p>
                <b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="user_id"
               data-endpoint="GETapi-admin-visit"
               value=""
               data-component="query" hidden>
    <br>
<p>User.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-visit"
               value="card_id"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>card_id</code>, or <code>user_id</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-visit"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-visit"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-visit"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="visit-POSTapi-admin-visit">Create new Visit</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-visit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/visit" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"card_id\": \"50080528753334\",
    \"user_id\": \"50080528753334\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/visit"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "card_id": "50080528753334",
    "user_id": "50080528753334"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/visit',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'card_id' =&gt; '50080528753334',
            'user_id' =&gt; '50080528753334',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/visit'
payload = {
    "card_id": "50080528753334",
    "user_id": "50080528753334"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-visit">
</span>
<span id="execution-results-POSTapi-admin-visit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-visit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-visit"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-visit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-visit"></code></pre>
</span>
<form id="form-POSTapi-admin-visit" data-method="POST"
      data-path="api/admin/visit"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-visit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-visit"
                    onclick="tryItOut('POSTapi-admin-visit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-visit"
                    onclick="cancelTryOut('POSTapi-admin-visit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-visit" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/visit</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-visit" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-visit"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="POSTapi-admin-visit"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the card the visit is attached to.</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="user_id"
               data-endpoint="POSTapi-admin-visit"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the user the visit is attached to.</p>
        </p>
        </form>

            <h2 id="visit-GETapi-admin-visit--id-">Show specified Visit</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-visit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/visit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/visit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/visit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/visit/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-visit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 6,
    &quot;card_id&quot;: 49394739894111,
    &quot;user_id&quot;: 1,
    &quot;card&quot;: {
        &quot;id&quot;: 49394739894111,
        &quot;last_name&quot;: &quot;Kitsune&quot;,
        &quot;first_name&quot;: &quot;Yasu&quot;,
        &quot;street&quot;: &quot;Teststra&szlig;e 123&quot;,
        &quot;postcode&quot;: &quot;12345&quot;,
        &quot;city&quot;: &quot;Teststadt&quot;,
        &quot;valid_from&quot;: &quot;2022-01-01T00:00:00.000000Z&quot;,
        &quot;valid_until&quot;: &quot;2022-03-31T00:00:00.000000Z&quot;,
        &quot;creator_id&quot;: 1,
        &quot;comment&quot;: null,
        &quot;created_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-18T13:47:42.000000Z&quot;
    },
    &quot;created_at&quot;: &quot;2022-08-16T16:32:52.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-16T16:32:52.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-visit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-visit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-visit--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-visit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-visit--id-"></code></pre>
</span>
<form id="form-GETapi-admin-visit--id-" data-method="GET"
      data-path="api/admin/visit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-visit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-visit--id-"
                    onclick="tryItOut('GETapi-admin-visit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-visit--id-"
                    onclick="cancelTryOut('GETapi-admin-visit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-visit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/visit/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-visit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-visit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-visit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the visit.</p>
            </p>
                    </form>

            <h2 id="visit-PUTapi-admin-visit--id-">Update specified Visit</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-visit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/visit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"card_id\": \"50080528753334\",
    \"user_id\": \"50080528753334\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/visit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "card_id": "50080528753334",
    "user_id": "50080528753334"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/visit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'card_id' =&gt; '50080528753334',
            'user_id' =&gt; '50080528753334',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/visit/10'
payload = {
    "card_id": "50080528753334",
    "user_id": "50080528753334"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-visit--id-">
</span>
<span id="execution-results-PUTapi-admin-visit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-visit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-visit--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-visit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-visit--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-visit--id-" data-method="PUT"
      data-path="api/admin/visit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-visit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-visit--id-"
                    onclick="tryItOut('PUTapi-admin-visit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-visit--id-"
                    onclick="cancelTryOut('PUTapi-admin-visit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-visit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/visit/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-visit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-visit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-visit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the visit.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="PUTapi-admin-visit--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the card the visit is attached to.</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="user_id"
               data-endpoint="PUTapi-admin-visit--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the user the visit is attached to.</p>
        </p>
        </form>

            <h2 id="visit-DELETEapi-admin-visit--id-">Delete specified Visit</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-visit--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/visit/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/visit/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/visit/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/visit/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-visit--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-visit--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-visit--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-visit--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-visit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-visit--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-visit--id-" data-method="DELETE"
      data-path="api/admin/visit/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-visit--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-visit--id-"
                    onclick="tryItOut('DELETEapi-admin-visit--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-visit--id-"
                    onclick="cancelTryOut('DELETEapi-admin-visit--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-visit--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/visit/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-visit--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-visit--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-visit--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the visit.</p>
            </p>
                    </form>

        <h1 id="person">Person</h1>

    

            <h2 id="person-GETapi-admin-person">List all persons</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-person">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/person?gender=laudantium&amp;age=10&amp;sort=card_id&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/person"
);

const params = {
    "gender": "laudantium",
    "age": "10",
    "sort": "card_id",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/person',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'gender'=&gt; 'laudantium',
            'age'=&gt; '10',
            'sort'=&gt; 'card_id',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/person'
params = {
  'gender': 'laudantium',
  'age': '10',
  'sort': 'card_id',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-person">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;items&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;card_id&quot;: 1,
            &quot;gender&quot;: &quot;male&quot;,
            &quot;age&quot;: 18,
            &quot;limitation_sets&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;A set to limit them all&quot;,
                    &quot;valid_from&quot;: &quot;2022-08-04 12:00:00&quot;,
                    &quot;valid_until&quot;: &quot;2022-08-04 12:00:00&quot;,
                    &quot;created_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
                    &quot;instance_id&quot;: 1,
                    &quot;pivot&quot;: {
                        &quot;person_id&quot;: 1,
                        &quot;limitation_set_id&quot;: 1,
                        &quot;created_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;
                    }
                }
            ],
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;card_id&quot;: 1,
            &quot;gender&quot;: &quot;female&quot;,
            &quot;age&quot;: 15,
            &quot;limitation_sets&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;A set to limit them all&quot;,
                    &quot;valid_from&quot;: &quot;2022-08-04 12:00:00&quot;,
                    &quot;valid_until&quot;: &quot;2022-08-04 12:00:00&quot;,
                    &quot;created_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
                    &quot;instance_id&quot;: 1,
                    &quot;pivot&quot;: {
                        &quot;person_id&quot;: 2,
                        &quot;limitation_set_id&quot;: 1,
                        &quot;created_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;
                    }
                }
            ],
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;card_id&quot;: 49394739894111,
            &quot;gender&quot;: &quot;male&quot;,
            &quot;age&quot;: 23,
            &quot;limitation_sets&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;A set to limit them all&quot;,
                    &quot;valid_from&quot;: &quot;2022-08-04 12:00:00&quot;,
                    &quot;valid_until&quot;: &quot;2022-08-04 12:00:00&quot;,
                    &quot;created_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
                    &quot;instance_id&quot;: 1,
                    &quot;pivot&quot;: {
                        &quot;person_id&quot;: 3,
                        &quot;limitation_set_id&quot;: 1,
                        &quot;created_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;
                    }
                }
            ],
            &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
        }
    ],
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;per_page&quot;: 25,
        &quot;item_count&quot;: 3
    },
    &quot;links&quot;: {
        &quot;prev_page_url&quot;: null,
        &quot;next_page_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-person" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-person"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-person"></code></pre>
</span>
<span id="execution-error-GETapi-admin-person" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-person"></code></pre>
</span>
<form id="form-GETapi-admin-person" data-method="GET"
      data-path="api/admin/person"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-person', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-person"
                    onclick="tryItOut('GETapi-admin-person');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-person"
                    onclick="cancelTryOut('GETapi-admin-person');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-person" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/person</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-person" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-person"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="GETapi-admin-person"
               value=""
               data-component="query" hidden>
    <br>
<p>Card.</p>
            </p>
                    <p>
                <b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="gender"
               data-endpoint="GETapi-admin-person"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Gender contains.</p>
            </p>
                    <p>
                <b><code>age</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="age"
               data-endpoint="GETapi-admin-person"
               value="10"
               data-component="query" hidden>
    <br>
<p>Age is.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-person"
               value="card_id"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>card_id</code>, <code>gender</code>, or <code>age</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-person"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-person"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-person"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="person-POSTapi-admin-person">Create new Person</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-person">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/person" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"card_id\": \"50080528753334\",
    \"gender\": \"male\",
    \"age\": 20,
    \"limitation_sets\": [
        \"49394739894111\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/person"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "card_id": "50080528753334",
    "gender": "male",
    "age": 20,
    "limitation_sets": [
        "49394739894111"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/person',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'card_id' =&gt; '50080528753334',
            'gender' =&gt; 'male',
            'age' =&gt; 20,
            'limitation_sets' =&gt; [
                '49394739894111',
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/person'
payload = {
    "card_id": "50080528753334",
    "gender": "male",
    "age": 20,
    "limitation_sets": [
        "49394739894111"
    ]
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-person">
</span>
<span id="execution-results-POSTapi-admin-person" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-person"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-person"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-person" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-person"></code></pre>
</span>
<form id="form-POSTapi-admin-person" data-method="POST"
      data-path="api/admin/person"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-person', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-person"
                    onclick="tryItOut('POSTapi-admin-person');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-person"
                    onclick="cancelTryOut('POSTapi-admin-person');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-person" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/person</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-person" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-person"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="POSTapi-admin-person"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the card the person is attached to.</p>
        </p>
                <p>
            <b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="gender"
               data-endpoint="POSTapi-admin-person"
               value="male"
               data-component="body" hidden>
    <br>
<p>Gender of the person. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>age</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="age"
               data-endpoint="POSTapi-admin-person"
               value="20"
               data-component="body" hidden>
    <br>
<p>Age of the Person.</p>
        </p>
                <p>
            <b><code>limitation_sets</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
                <input type="text"
               name="limitation_sets[0]"
               data-endpoint="POSTapi-admin-person"
               data-component="body" hidden>
        <input type="text"
               name="limitation_sets[1]"
               data-endpoint="POSTapi-admin-person"
               data-component="body" hidden>
    <br>
<p>IDs of the limitation_sets.</p>
        </p>
        </form>

            <h2 id="person-GETapi-admin-person--id-">Show specified Person</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-person--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/person/57959838684647" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/person/57959838684647"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/person/57959838684647',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/person/57959838684647'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-person--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 2,
    &quot;card_id&quot;: 1,
    &quot;gender&quot;: &quot;female&quot;,
    &quot;age&quot;: 15,
    &quot;limitation_sets&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;A set to limit them all&quot;,
            &quot;valid_from&quot;: &quot;2022-08-04 12:00:00&quot;,
            &quot;valid_until&quot;: &quot;2022-08-04 12:00:00&quot;,
            &quot;created_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-09-08T13:05:40.000000Z&quot;,
            &quot;instance_id&quot;: 1,
            &quot;pivot&quot;: {
                &quot;person_id&quot;: 2,
                &quot;limitation_set_id&quot;: 1,
                &quot;created_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-09-08T13:06:41.000000Z&quot;
            }
        }
    ],
    &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-person--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-person--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-person--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-person--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-person--id-"></code></pre>
</span>
<form id="form-GETapi-admin-person--id-" data-method="GET"
      data-path="api/admin/person/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-person--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-person--id-"
                    onclick="tryItOut('GETapi-admin-person--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-person--id-"
                    onclick="cancelTryOut('GETapi-admin-person--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-person--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/person/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-person--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-person--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-person--id-"
               value="57959838684647"
               data-component="url" hidden>
    <br>
<p>The ID of the person.</p>
            </p>
                    </form>

            <h2 id="person-PUTapi-admin-person--id-">Update specified Person</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-person--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/person/57959838684647" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"card_id\": \"50080528753334\",
    \"gender\": \"male\",
    \"age\": 20,
    \"limitation_sets\": [
        \"49394739894111\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/person/57959838684647"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "card_id": "50080528753334",
    "gender": "male",
    "age": 20,
    "limitation_sets": [
        "49394739894111"
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/person/57959838684647',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'card_id' =&gt; '50080528753334',
            'gender' =&gt; 'male',
            'age' =&gt; 20,
            'limitation_sets' =&gt; [
                '49394739894111',
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/person/57959838684647'
payload = {
    "card_id": "50080528753334",
    "gender": "male",
    "age": 20,
    "limitation_sets": [
        "49394739894111"
    ]
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-person--id-">
</span>
<span id="execution-results-PUTapi-admin-person--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-person--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-person--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-person--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-person--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-person--id-" data-method="PUT"
      data-path="api/admin/person/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-person--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-person--id-"
                    onclick="tryItOut('PUTapi-admin-person--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-person--id-"
                    onclick="cancelTryOut('PUTapi-admin-person--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-person--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/person/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-person--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-person--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-person--id-"
               value="57959838684647"
               data-component="url" hidden>
    <br>
<p>The ID of the person.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>card_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="card_id"
               data-endpoint="PUTapi-admin-person--id-"
               value="50080528753334"
               data-component="body" hidden>
    <br>
<p>ID of the card the person is attached to.</p>
        </p>
                <p>
            <b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="gender"
               data-endpoint="PUTapi-admin-person--id-"
               value="male"
               data-component="body" hidden>
    <br>
<p>Gender of the person. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>age</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="age"
               data-endpoint="PUTapi-admin-person--id-"
               value="20"
               data-component="body" hidden>
    <br>
<p>Age of the Person.</p>
        </p>
                <p>
            <b><code>limitation_sets</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
                <input type="text"
               name="limitation_sets[0]"
               data-endpoint="PUTapi-admin-person--id-"
               data-component="body" hidden>
        <input type="text"
               name="limitation_sets[1]"
               data-endpoint="PUTapi-admin-person--id-"
               data-component="body" hidden>
    <br>
<p>IDs of the limitation_sets.</p>
        </p>
        </form>

            <h2 id="person-DELETEapi-admin-person--id-">Delete specified Person</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-person--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/person/57959838684647" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/person/57959838684647"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/person/57959838684647',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/person/57959838684647'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-person--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-person--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-person--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-person--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-person--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-person--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-person--id-" data-method="DELETE"
      data-path="api/admin/person/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-person--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-person--id-"
                    onclick="tryItOut('DELETEapi-admin-person--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-person--id-"
                    onclick="cancelTryOut('DELETEapi-admin-person--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-person--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/person/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-person--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-person--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-person--id-"
               value="57959838684647"
               data-component="url" hidden>
    <br>
<p>The ID of the person.</p>
            </p>
                    </form>

        <h1 id="product-type">Product Type</h1>

    

            <h2 id="product-type-GETapi-admin-product-type">List all ProductTypes</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-product-type">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/product-type?name=laudantium&amp;icon=laudantium&amp;sort=name&amp;order=desc&amp;page=10&amp;limit=120" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/product-type"
);

const params = {
    "name": "laudantium",
    "icon": "laudantium",
    "sort": "name",
    "order": "desc",
    "page": "10",
    "limit": "120",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/product-type',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'laudantium',
            'icon'=&gt; 'laudantium',
            'sort'=&gt; 'name',
            'order'=&gt; 'desc',
            'page'=&gt; '10',
            'limit'=&gt; '120',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/product-type'
params = {
  'name': 'laudantium',
  'icon': 'laudantium',
  'sort': 'name',
  'order': 'desc',
  'page': '10',
  'limit': '120',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-product-type">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
  &quot;items: [
    {
      &quot;id&quot;: 1,
      &quot;name&quot;: &quot;t-shirt&quot;,
      &quot;icon&quot;: &quot;t-shirt icon&quot;,
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }, {
      &quot;id&quot;: 2,
      &quot;name&quot;: &quot;shoe&quot;,
      &quot;icon&quot;: &quot;shoe icon&quot;,
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }, {
      &quot;id&quot;: 3,
      &quot;name&quot;: &quot;sock&quot;,
      &quot;icon&quot;: &quot;sock icon&quot;,
      &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
      &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
    }
  ],
  &quot;meta&quot;: {
    &quot;current_page&quot;: 1,
    &quot;last_page&quot;: 1,
    &quot;per_page&quot;: 25,
    &quot;item_count&quot;: 3
  },
  &quot;links&quot;: {
    &quot;prev_page_url&quot;: null,
    &quot;next_page_url&quot;: null
  }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-product-type" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-product-type"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-product-type"></code></pre>
</span>
<span id="execution-error-GETapi-admin-product-type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-product-type"></code></pre>
</span>
<form id="form-GETapi-admin-product-type" data-method="GET"
      data-path="api/admin/product-type"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-product-type', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-product-type"
                    onclick="tryItOut('GETapi-admin-product-type');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-product-type"
                    onclick="cancelTryOut('GETapi-admin-product-type');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-product-type" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/product-type</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-product-type" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-product-type"
                                                                data-component="header"></label>
        </p>
                    <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-admin-product-type"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Name contains.</p>
            </p>
                    <p>
                <b><code>icon</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="icon"
               data-endpoint="GETapi-admin-product-type"
               value="laudantium"
               data-component="query" hidden>
    <br>
<p>Icon contains.</p>
            </p>
                    <p>
                <b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sort"
               data-endpoint="GETapi-admin-product-type"
               value="name"
               data-component="query" hidden>
    <br>
<p>Sort by given field. Must be one of <code>id</code>, <code>name</code>, or <code>icon</code>.</p>
            </p>
                    <p>
                <b><code>order</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="order"
               data-endpoint="GETapi-admin-product-type"
               value="desc"
               data-component="query" hidden>
    <br>
<p>Sort ascending or descending. Must be one of <code>asc</code> or <code>desc</code>.</p>
            </p>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-admin-product-type"
               value="10"
               data-component="query" hidden>
    <br>
<p>Page to load.</p>
            </p>
                    <p>
                <b><code>limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="limit"
               data-endpoint="GETapi-admin-product-type"
               value="120"
               data-component="query" hidden>
    <br>
<p>Items per page. Must be at least 10. Must not be greater than 500.</p>
            </p>
                </form>

            <h2 id="product-type-POSTapi-admin-product-type">Create new ProductType</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-admin-product-type">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/admin/product-type" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"T-Shirt\",
    \"icon\": \"Icon value\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/product-type"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "T-Shirt",
    "icon": "Icon value"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/admin/product-type',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'T-Shirt',
            'icon' =&gt; 'Icon value',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/product-type'
payload = {
    "name": "T-Shirt",
    "icon": "Icon value"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-admin-product-type">
</span>
<span id="execution-results-POSTapi-admin-product-type" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-admin-product-type"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-product-type"></code></pre>
</span>
<span id="execution-error-POSTapi-admin-product-type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-product-type"></code></pre>
</span>
<form id="form-POSTapi-admin-product-type" data-method="POST"
      data-path="api/admin/product-type"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-product-type', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-admin-product-type"
                    onclick="tryItOut('POSTapi-admin-product-type');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-admin-product-type"
                    onclick="cancelTryOut('POSTapi-admin-product-type');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-admin-product-type" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/admin/product-type</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-admin-product-type" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-admin-product-type"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-admin-product-type"
               value="T-Shirt"
               data-component="body" hidden>
    <br>
<p>Name of the product type. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>icon</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="icon"
               data-endpoint="POSTapi-admin-product-type"
               value="Icon value"
               data-component="body" hidden>
    <br>
<p>Icon of the product type. Must not be greater than 125 characters.</p>
        </p>
        </form>

            <h2 id="product-type-GETapi-admin-product-type--id-">Show specified ProductType</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-admin-product-type--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/product-type/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/product-type/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/admin/product-type/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/product-type/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-product-type--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;t-shirt&quot;,
    &quot;icon&quot;: &quot;t-shirt icon&quot;,
    &quot;created_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-08-18T13:48:25.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin-product-type--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-product-type--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-product-type--id-"></code></pre>
</span>
<span id="execution-error-GETapi-admin-product-type--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-product-type--id-"></code></pre>
</span>
<form id="form-GETapi-admin-product-type--id-" data-method="GET"
      data-path="api/admin/product-type/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-product-type--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-product-type--id-"
                    onclick="tryItOut('GETapi-admin-product-type--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-product-type--id-"
                    onclick="cancelTryOut('GETapi-admin-product-type--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-product-type--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/product-type/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-admin-product-type--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-admin-product-type--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-admin-product-type--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the productType.</p>
            </p>
                    </form>

            <h2 id="product-type-PUTapi-admin-product-type--id-">Update specified ProductType</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-admin-product-type--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/admin/product-type/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"T-Shirt\",
    \"icon\": \"Icon value\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/product-type/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "T-Shirt",
    "icon": "Icon value"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/admin/product-type/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'T-Shirt',
            'icon' =&gt; 'Icon value',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/product-type/10'
payload = {
    "name": "T-Shirt",
    "icon": "Icon value"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-admin-product-type--id-">
</span>
<span id="execution-results-PUTapi-admin-product-type--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-admin-product-type--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-admin-product-type--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-admin-product-type--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-admin-product-type--id-"></code></pre>
</span>
<form id="form-PUTapi-admin-product-type--id-" data-method="PUT"
      data-path="api/admin/product-type/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-admin-product-type--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-admin-product-type--id-"
                    onclick="tryItOut('PUTapi-admin-product-type--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-admin-product-type--id-"
                    onclick="cancelTryOut('PUTapi-admin-product-type--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-admin-product-type--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/admin/product-type/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-admin-product-type--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-admin-product-type--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-admin-product-type--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the productType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-admin-product-type--id-"
               value="T-Shirt"
               data-component="body" hidden>
    <br>
<p>Name of the product type. Must not be greater than 125 characters.</p>
        </p>
                <p>
            <b><code>icon</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="icon"
               data-endpoint="PUTapi-admin-product-type--id-"
               value="Icon value"
               data-component="body" hidden>
    <br>
<p>Icon of the product type. Must not be greater than 125 characters.</p>
        </p>
        </form>

            <h2 id="product-type-DELETEapi-admin-product-type--id-">Delete specified ProductType</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-admin-product-type--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/admin/product-type/10" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/product-type/10"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/admin/product-type/10',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/admin/product-type/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-admin-product-type--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-admin-product-type--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-admin-product-type--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-admin-product-type--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-admin-product-type--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-admin-product-type--id-"></code></pre>
</span>
<form id="form-DELETEapi-admin-product-type--id-" data-method="DELETE"
      data-path="api/admin/product-type/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-admin-product-type--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-admin-product-type--id-"
                    onclick="tryItOut('DELETEapi-admin-product-type--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-admin-product-type--id-"
                    onclick="cancelTryOut('DELETEapi-admin-product-type--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-admin-product-type--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/admin/product-type/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-admin-product-type--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-admin-product-type--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-admin-product-type--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the productType.</p>
            </p>
                    </form>

        <h1 id="authentication">Authentication</h1>

    

            <h2 id="authentication-GETapi-handshake">Create session and XSRF-Token</h2>

<p>
</p>

<p>Required to initialise a new Cookie-Session for SPAs.
Do not use this endpoint if you want to use Token-Auth.</p>

<span id="example-requests-GETapi-handshake">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/handshake" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Referer: {URL of your SPA}"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/handshake"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Referer": "{URL of your SPA}",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/handshake',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Referer' =&gt; '{URL of your SPA}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/handshake'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Referer': '{URL of your SPA}'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-handshake">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-handshake" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-handshake"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-handshake"></code></pre>
</span>
<span id="execution-error-GETapi-handshake" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-handshake"></code></pre>
</span>
<form id="form-GETapi-handshake" data-method="GET"
      data-path="api/handshake"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Referer":"{URL of your SPA}"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-handshake', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-handshake"
                    onclick="tryItOut('GETapi-handshake');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-handshake"
                    onclick="cancelTryOut('GETapi-handshake');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-handshake" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/handshake</code></b>
        </p>
                    </form>

            <h2 id="authentication-POSTapi-auth-login">Login with SPA-Session (Cookies)</h2>

<p>
</p>

<p>After you send a GET-request to <code>/api/handshake</code>, which will create the Session and give you a XSRF-Token,
you can send your Credentials to this endpoint and authenticate your session.</p>
<p>All further requests are now authenticated through cookies and do not require an Authorization-Header.</p>
<aside class="warning">
  If you get an Error 419, make sure your Request contains the X-XSRF-TOKEN header.
  <p>
    You can enable this in axios with the following line:
    <pre style="float: none; width: 100%;"><code>axios.defaults.withCredentials = true;</code></pre>
  </p>
</aside>

<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Referer: {URL of your SPA}" \
    --header "X-XSRF-TOKEN: {Your XSRF-Token}" \
    --data "{
    \"email\": \"laudantium\",
    \"password\": \"laudantium\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Referer": "{URL of your SPA}",
    "X-XSRF-TOKEN": "{Your XSRF-Token}",
};

let body = {
    "email": "laudantium",
    "password": "laudantium"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/auth/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Referer' =&gt; '{URL of your SPA}',
            'X-XSRF-TOKEN' =&gt; '{Your XSRF-Token}',
        ],
        'json' =&gt; [
            'email' =&gt; 'laudantium',
            'password' =&gt; 'laudantium',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/auth/login'
payload = {
    "email": "laudantium",
    "password": "laudantium"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Referer': '{URL of your SPA}',
  'X-XSRF-TOKEN': '{Your XSRF-Token}'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
            <blockquote>
            <p>Example response (200, Valid credentials):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Example User&quot;,
        &quot;email&quot;: &quot;example@localhost.test&quot;,
        &quot;roles&quot;: [
            &quot;instance_manager&quot;
        ],
        &quot;permissions&quot;: [
            &quot;card.external&quot;,
            &quot;card.manage&quot;,
            &quot;card.view&quot;,
            &quot;limits.manage&quot;,
            &quot;organisation.manage&quot;,
            &quot;organisation.view&quot;,
            &quot;shop.manage&quot;,
            &quot;shop.view&quot;,
            &quot;stats.view&quot;,
            &quot;user.manage&quot;,
            &quot;user.view&quot;
        ],
        &quot;instance&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example Instance&quot;,
            &quot;street&quot;: &quot;Teststreet 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Test&quot;,
            &quot;contact&quot;: &quot;example@localhost.test&quot;,
            &quot;created_at&quot;: &quot;2022-08-02T11:59:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-02T11:59:43.000000Z&quot;
        },
        &quot;organization&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example Organisation&quot;,
            &quot;street&quot;: &quot;Teststreet 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Test&quot;,
            &quot;contact&quot;: &quot;example@localhost.test&quot;,
            &quot;created_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;
        },
        &quot;created_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Invalid credentials):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: false
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login"></code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Referer":"{URL of your SPA}","X-XSRF-TOKEN":"{Your XSRF-Token}"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-auth-login"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>E-Mail of the user.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-auth-login"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>Password of the user.</p>
        </p>
        </form>

            <h2 id="authentication-POSTapi-auth-token">Login with Bearer Token (Authorization Header)</h2>

<p>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>If you are not able to use Cookies, for example in a mobile application, you can use Token-Auth instead.
Tokens will be valid for 20 hours before they expire.</p>
<aside class="warning">
  Endpoints under the <code>/admin</code> path will not be available for Applications using Token-Auth.
</aside>

<span id="example-requests-POSTapi-auth-token">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"laudantium\",
    \"password\": \"laudantium\",
    \"device_name\": \"gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "laudantium",
    "password": "laudantium",
    "device_name": "gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/auth/token',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'laudantium',
            'password' =&gt; 'laudantium',
            'device_name' =&gt; 'gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/auth/token'
payload = {
    "email": "laudantium",
    "password": "laudantium",
    "device_name": "gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-token">
            <blockquote>
            <p>Example response (200, Valid credentials):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;token&quot;: &quot;{YOUR_AUTH_KEY}&quot;,
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Example User&quot;,
        &quot;email&quot;: &quot;example@localhost.test&quot;,
        &quot;roles&quot;: [
            &quot;instance_manager&quot;
        ],
        &quot;permissions&quot;: [
            &quot;card.external&quot;,
            &quot;card.manage&quot;,
            &quot;card.view&quot;,
            &quot;limits.manage&quot;,
            &quot;organisation.manage&quot;,
            &quot;organisation.view&quot;,
            &quot;shop.manage&quot;,
            &quot;shop.view&quot;,
            &quot;stats.view&quot;,
            &quot;user.manage&quot;,
            &quot;user.view&quot;
        ],
        &quot;instance&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example Instance&quot;,
            &quot;street&quot;: &quot;Teststreet 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Test&quot;,
            &quot;contact&quot;: &quot;example@localhost.test&quot;,
            &quot;created_at&quot;: &quot;2022-08-02T11:59:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-02T11:59:43.000000Z&quot;
        },
        &quot;organization&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example Organisation&quot;,
            &quot;street&quot;: &quot;Teststreet 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Test&quot;,
            &quot;contact&quot;: &quot;example@localhost.test&quot;,
            &quot;created_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;
        },
        &quot;created_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Invalid credentials):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: false
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-token"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-token"></code></pre>
</span>
<form id="form-POSTapi-auth-token" data-method="POST"
      data-path="api/auth/token"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-token"
                    onclick="tryItOut('POSTapi-auth-token');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-token"
                    onclick="cancelTryOut('POSTapi-auth-token');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-token" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/token</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-auth-token"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>E-Mail of the user.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-auth-token"
               value="laudantium"
               data-component="body" hidden>
    <br>
<p>Password of the user.</p>
        </p>
                <p>
            <b><code>device_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="device_name"
               data-endpoint="POSTapi-auth-token"
               value="gnpvoahjpxfnvoeetmtfqumygmyxaxnluacrxfsujgdqrujyxgirkkndke"
               data-component="body" hidden>
    <br>
<p>Name of the device, used for identification of the token. Must not be greater than 125 characters.</p>
        </p>
        </form>

            <h2 id="authentication-POSTapi-auth-logout">Logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Invalidate your current session/token</p>

<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/auth/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/auth/logout',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/auth/logout'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout"></code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-auth-logout" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-auth-logout"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="authentication-GETapi-auth-heartbeat">Heartbeat</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p><small class="badge badge-purple">App authorization available</small></p>
<p>Checks if the session is still valid and active and returns information about the authenticated user.</p>
<aside class="warning">
    This endpoint does NOT change the active session and therefore is unable to increase the lifetime of the session.
    Its purpose is only for testing if the session is still valid and active.
</aside>

<span id="example-requests-GETapi-auth-heartbeat">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/auth/heartbeat" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/auth/heartbeat"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/auth/heartbeat',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://localhost/api/auth/heartbeat'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-heartbeat">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Example User&quot;,
        &quot;email&quot;: &quot;example@localhost.test&quot;,
        &quot;roles&quot;: [
            &quot;instance_manager&quot;
        ],
        &quot;permissions&quot;: [
            &quot;card.external&quot;,
            &quot;card.manage&quot;,
            &quot;card.view&quot;,
            &quot;limits.manage&quot;,
            &quot;organisation.manage&quot;,
            &quot;organisation.view&quot;,
            &quot;shop.manage&quot;,
            &quot;shop.view&quot;,
            &quot;stats.view&quot;,
            &quot;user.manage&quot;,
            &quot;user.view&quot;
        ],
        &quot;instance&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example Instance&quot;,
            &quot;street&quot;: &quot;Teststreet 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Test&quot;,
            &quot;contact&quot;: &quot;example@localhost.test&quot;,
            &quot;created_at&quot;: &quot;2022-08-02T11:59:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-02T11:59:43.000000Z&quot;
        },
        &quot;organization&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example Organisation&quot;,
            &quot;street&quot;: &quot;Teststreet 123&quot;,
            &quot;postcode&quot;: &quot;12345&quot;,
            &quot;city&quot;: &quot;Test&quot;,
            &quot;contact&quot;: &quot;example@localhost.test&quot;,
            &quot;created_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;
        },
        &quot;created_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-08-02T11:59:44.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-heartbeat" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-heartbeat"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-heartbeat"></code></pre>
</span>
<span id="execution-error-GETapi-auth-heartbeat" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-heartbeat"></code></pre>
</span>
<form id="form-GETapi-auth-heartbeat" data-method="GET"
      data-path="api/auth/heartbeat"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-heartbeat', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-heartbeat"
                    onclick="tryItOut('GETapi-auth-heartbeat');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-heartbeat"
                    onclick="cancelTryOut('GETapi-auth-heartbeat');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-heartbeat" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/heartbeat</code></b>
        </p>
                <p>
            <label id="auth-GETapi-auth-heartbeat" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-auth-heartbeat"
                                                                data-component="header"></label>
        </p>
                </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                                                        <button type="button" class="lang-button" data-language-name="python">python</button>
                            </div>
            </div>
</div>
</body>
</html>
