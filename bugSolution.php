The solution involves using a more explicit check to distinguish between unset variables, empty strings, and empty arrays.  Instead of relying solely on `isset()`, we employ a combination of `isset()` and checks for emptiness to ensure we handle each case correctly.  This makes the intent clearer and eliminates the ambiguity of relying on PHP's implicit type coercion within `isset()`.

```php
<?php
function checkValue($value) {
  if (!isset($value)) {
    return 'Variable is not set';
  } elseif (is_string($value) && $value === '') {
    return 'Variable is an empty string';
  } elseif (is_array($value) && empty($value)) {
    return 'Variable is an empty array';
  } else {
    return 'Variable is set and has a value: ' . $value;
  }
}

// Test cases
$var1 = null;
$var2 = '';
$var3 = [];
$var4 = 'hello';
$var5 = [1, 2, 3];

echo checkValue($var1) . '\n';
echo checkValue($var2) . '\n';
echo checkValue($var3) . '\n';
echo checkValue($var4) . '\n';
echo checkValue($var5) . '\n';
?>
```