<?php

namespace Database\Seeders;

use App\Models\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Trống',
            'Đã được sử dụng',
            'Phòng đã được dọn sạch',
            'Phòng chưa được dọn',
            'Đã kiểm tra sạch sẽ trống',
            'Phòng trống và sạch sẽ',
            'Phòng trống và chưa vệ sinh',
            'Khen ngợi',
            'Sử dụng trong nhà',
            'Đừng làm phiền',
            'Phòng đã được đăng ký',
            'Thuyền trưởng',
            'Ngừng phục vụ',
            'Hết thứ tự',
            'Hết hạn/Khởi hành dự kiến',
            'Khách hàng mong đợi',
            'Thủ tục thanh toán',
            'Check out muộn',
            'Không có hành lý',
            'Khóa đôi',
        ];

        $codes = [
            'V',
            'O',
            'OC',
            'OD',
            'VCI',
            'VC',
            'VD',
            'Comp',
            'HU',
            'DND',
            'SO',
            'Skip',
            'OS',
            'OOO',
            'DO/ED',
            'EA',
            'CO',
            'LCO',
            'ONL',
            'DL',
        ];

        $informations = [
            'Thuật ngữ cho một căn phòng trống.',
            'Phòng đang được ai đó sử dụng hợp pháp và được đăng ký là khách của khách sạn.',
            'Phòng đang được ai đó sử dụng hợp pháp và được đăng ký là khách của khách sạn trong một căn phòng sạch sẽ.',
            'Một căn phòng đang được ai đó chiếm giữ hợp pháp và được đăng ký là khách của khách sạn trong một căn phòng bẩn thỉu. Điều này xảy ra do sự thay đổi trạng thái từ OC sang OD sau một đêm lưu trú.',
            'Phòng trống đã được nhân viên giám sát sàn dọn dẹp và kiểm tra và sẵn sàng tiếp khách (để bán).',
            'Phòng trống sạch sẽ.',
            'Căn phòng trống và bẩn. Phòng bẩn có thể xảy ra do khách đã trả phòng hoặc chương trình dọn dẹp của dịch vụ dọn phòng.',
            'Phòng đã được khách đăng ký, nhưng phòng này miễn phí.',
            'Phòng đã đăng ký nhưng được quản lý khách sạn sử dụng.',
            'Các phòng treo biển nghĩa là khách không muốn bị làm phiền.',
            'Khách vẫn đăng ký nhưng phòng không được sử dụng do khách phải rời khách sạn vài ngày hoặc khách ngủ ngoài khu vực khách sạn.',
            'Khách rời khách sạn trước khi thanh toán hết các nghĩa vụ của mình.',
            'Tình trạng của căn phòng đang được sửa chữa.',
            'Những phòng cần sửa chữa nghiêm trọng, việc sửa chữa thường mất hơn một ngày. Tình trạng này có thể xảy ra do phòng bị hư hỏng hoặc chương trình dọn dẹp của dịch vụ dọn phòng. Hết đơn đặt hàng làm giảm khả năng cung cấp phòng.',
            'Danh sách các phòng dự kiến ​​trả phòng hôm nay theo ngày khởi hành.',
            'Danh sách tên những vị khách dự kiến ​​sẽ đến hôm nay.',
            'Những khách đã rời khách sạn hôm nay sau khi thanh toán xong mọi nghĩa vụ của họ bao gồm cả việc nộp chìa khóa đã sử dụng cho văn phòng.',
            'Khách yêu cầu rời khách sạn muộn hơn thời gian trả phòng quy định.',
            'Một khách vẫn được đăng ký trong phòng mà không có bất kỳ vật dụng nào trong đó.',
            'Khách yêu cầu khách sạn khóa 2 lần không cho ai vào phòng.',
        ];

        for ($i = 0; $i < count($codes); $i++) {
            RoomStatus::create([
                'name' => $names[$i],
                'code' => $codes[$i],
                'information' => $informations[$i]
            ]);
        }
    }
}
