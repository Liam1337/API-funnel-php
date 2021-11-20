# API-funnel-php
 
API GET Request http://localhost/?apiKey=<key>&host=<host>


## Basic Usage

### Change Your API-Keys In api_keys.php

```php
$Keys = array(
    1 => "ADHUiLuGyJ", 
    2 => "HsnlW8y1iH", 
    3 => "G0yuiRcJTP", 
    );
```

### Change The URL To Use Your API

```php
$url = "http://ip-api.com/json/".$host;
```

### API Key Ban

```php
<?php

   $Keys = array(
    1 => "ADHUiLuGyJ", 
    2 => "HsnlW8y1iH", 
    3 => "G0yuiRcJTP", 
    );

    // If The User Is To Be Banned Delete The Entry
    $bannedKeys = array(
      1 => "ADHUiLuGyJ", 
      2 => "HsnlW8y1iH", 
      3 => "G0yuiRcJTP", 
    );

?>
```
### For Example

```php
<?php

   $Keys = array(
    1 => "ADHUiLuGyJ", 
    2 => "HsnlW8y1iH", 
    3 => "G0yuiRcJTP", 
    );

    // If The User Is To Be Banned Delete The Entry
    $bannedKeys = array(
      1 => "ADHUiLuGyJ", 
      2 => "HsnlW8y1iH", 
    );

?>
```
### Result:
```php
{"error":"yes","data":"Your API-Key is banned! Please contact the support"}
```

* `Feel Free To Use The Source`
* `Source Made By Liam1337`

### Response Object

| Error   | Type            | Note                                                                    |
|---------|-----------------|-------------------------------------------------------------------------|
|   401   | `Unauthorized`  | No Access To The Requested Web Page                                     |
|   404   | `Not Found`     | Incorrect URL Request                                                   |
|  1020   | `Access Denied` | The Request Is Blocked By For Example A Firewall                        |