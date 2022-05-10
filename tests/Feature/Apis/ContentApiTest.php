<?php

use Igorsgm\Ghost\Facades\Ghost;
use Igorsgm\Ghost\Responses\ErrorResponse;

it('returns ErrorResponse on slug not found for resources', function () {
    $response = Ghost::content()->posts()->fromSlug('random-slug');

    expect($response)->toBeInstanceOf(ErrorResponse::class);
});
