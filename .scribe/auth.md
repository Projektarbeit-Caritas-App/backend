# Authenticating requests

This API is authenticated by sending an **`Authorization`** header with the value **`"Bearer {YOUR_AUTH_KEY}"`**.

All authenticated endpoints are marked with a `requires authentication` badge in the documentation below.

Alternatively to the Token-Auth you can also use Session-Auth with XSRF-Protection, which is useful for SPAs.
