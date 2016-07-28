# Link HTTP Prefixer

This Plugin adds a twig filter `|httpPrefix` to twig that lets you prefix a string with `http://` if there isn't any `://` already in the string.


### Why?
This helps if people add links like this in the CMS: `www.website.com` or `website.com` without a protocol. Links to this URL get wrongly appended to your website as a relative link: `http://www.yoursite.com/www.website.com`.

By prefixing it with `http://` the link works correctly. If the url already has another protocol like `https://` or `ftp://`, it doesn't get touched.


### Example

```
<a href="{{ item.url|httpPrefix }}">External Link</a>
```

### Matches

```
www.website.com         -->    http://www.website.com
website.com             -->    http://website.com
https://website.com     -->    https://website.com (untouched)
```