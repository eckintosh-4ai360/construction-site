<?php

return [
    'contact_recipient' => env(
        'CONTACT_FORM_TO_ADDRESS',
        env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS', 'hello@example.com'))
    ),
    'quote_recipient' => env(
        'QUOTE_FORM_TO_ADDRESS',
        env('CONTACT_FORM_TO_ADDRESS', env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS', 'hello@example.com')))
    ),
];
