<?php

return [
    'email-title' => 'Email verification',
    'email-intro'=> 'Bấm vào nút sau để xác nhận email.',
    'email-button' => 'Email verification',
    'message' => 'Cảm ơn bạn đã đăng ký, vui lòng kiểm tra email (hoặc hộp thư spam) ',
    'success' => 'Tài khoản của bạn đã được xác nhận. Bạn có thể <a href="' . url('/login') . '" class="alert-link">đăng nhập</a> ngay.',
    'again' => 'Bạn phải xác nhận mail trước khi login. ' .
                '<br>Nếu không nhận được mail, vui lòng kiểm tra hộp thư spam.'.
                '<br>Để nhận lại mail xác nhận vui lòng bấm <a href="' . url('/resend') . '" class="alert-link">vào  đây</a>.',
    'resend' => 'Mail xác nhận đã được gởi lại. Vui lòng kiểm tra email (hoặc hộp thư spam) '
];
