<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Helper\ApiResponse;

class CapchaController extends Controller
{
    public function generate()
    {
        // Tạo mã random 4 số
        $code = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Lưu vào session (tuỳ nhu cầu)
        Session::put('captcha', $code);

        // Kích thước ảnh
        $width = 120;
        $height = 40;

        // Tạo ảnh mới
        $image = imagecreate($width, $height);

        // Màu nền
        $bgColor = imagecolorallocate($image, 242, 242, 242);

        // Màu chữ
        $textColor = imagecolorallocate($image, 0, 0, 0);

        // Font size
        $fontSize = 5;

        // Tính vị trí để text nằm giữa
        $x = ($width - imagefontwidth($fontSize) * strlen($code)) / 2;
        $y = ($height - imagefontheight($fontSize)) / 2;

        // Vẽ text
        imagestring($image, $fontSize, $x, $y, $code, $textColor);

        // Lấy dữ liệu ảnh
        ob_start();
        imagepng($image);
        $imageData = ob_get_clean();

        // Giải phóng
        imagedestroy($image);

        // Encode base64
        $base64Image = 'data:image/png;base64,' . base64_encode($imageData);

        // Trả ApiResponse
        return ApiResponse::success([
            'image' => $base64Image,
            'code'  => $code // Có thể bỏ nếu không muốn trả code (thường chỉ dùng debug)
        ], 'Captcha generated successfully');
    }
}
