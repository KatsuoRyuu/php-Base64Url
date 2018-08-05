<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KryuuCommon\Base64Url;

/**
 * Description of Base64Url
 *
 * @author spawn
 */
class Base64Url {

    /**
     * Convert a base64url encoded string to a Buffer.
     *
     * @param {String} base64urlString base64url-encoded string
     * @return {Buffer} Decoded data.
     */
    static public function decode($base64urlString) {
        return base64_decode(str_replace(['-', '_'], ['+', '/'], $base64urlString));
    }

    /**
     * Encode a buffer as base64url.
     *
     * @param {Buffer} buffer Data to encode.
     * @return {String} base64url-encoded data.
     */
    static public function encode($buffer) {
        return str_replace(['=', '+', '/'], ['', '-', '_'], base64_encode($buffer));
    }

}
