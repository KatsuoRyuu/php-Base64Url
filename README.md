# Base64 URL encoder/decoder

This is a simple library for encoding and decoding Base64Url, the basis of this
is that the Base64 is not URL safe due to the characters `+`, `/` and `=`, so this
encode replaces these characters with `=` to ``, `+` to `-` and `/` to `_` for 
the purpose of using it in the URL.

## Installation

composer require kryuu-common/base64-url

## Usage

### encode

``` php
use KryuuCommon\Base64Url\Base64Url;

echo Base64Url::encode('¹º»¼½¾¿À');
```

**output*
```
wrnCusK7wrzCvcK-wr_DgA
```

### decode

``` php
use KryuuCommon\Base64Url\Base64Url;

echo Base64Url::decode('wrnCusK7wrzCvcK-wr_DgA');
```

**output**

```
¹º»¼½¾¿À
```