```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            // Recursive call if the item is an array
            $result[] = self::processData($item); // Error: self:: used outside a class
        } else {
            $result[] = $item * 2; //Process the item
        }
    }
    return $result;
}

$data = [1, 2, [3, 4], 5];
$processedData = processData($data);
print_r($processedData); 
```