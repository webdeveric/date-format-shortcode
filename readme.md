# Date Format Shortcode

This plugin provides a shortcode that allows you to format a timestamp.

## Shortcode Attributes

### format

See [date](php.net/manual/en/function.date.php) for possible values.

This defaults to the date and time format defined on the general settings page in wp-admin.

### timestamp

This is a Unix timestamp or any string that can be parsed by [strtotime](http://php.net/strtotime).

This defaults to the current time.

## Example usage

**Now**

```
[date-format]
```

**Tomorrow**

```
[date-format timestamp="+1 day"]
```

**Values returned from other shortcodes**

```
[date-format format="F j, Y"][post-content id="123" autop="false" shortcode="false" field="post_date"][/date-format]
```
