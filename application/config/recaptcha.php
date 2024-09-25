<?php
defined('BASEPATH') or exit('No direct script access allowed');


// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            $config['recaptcha_site_key'] = '6Lel9ygcAAAAAO_jMhkc4vwxS00nPOF2fc2VFmQQ';
            $config['recaptcha_secret_key'] = '6Lel9ygcAAAAABn60SlRCduLjmf5-1fI0DyyHp5b';
            break;

        case 'production':
            $config['recaptcha_site_key'] = '6LfH_mIcAAAAAMwjgSJFHHTFlxvsLyg9MkG52Ey4';
            $config['recaptcha_secret_key'] = '6LfH_mIcAAAAAPA-HwNYNKmZcF_4J1i9YU7nUJHO';
            break;

        default:
            exit('The application environment is not set correctly.');
    }
}


// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
