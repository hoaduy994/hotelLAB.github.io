<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Phòng loại thường',
            'Phòng cao cấp',
            'Phòng Sang trọng',
            'Phòng Suite Junior',
            'Phong thay đô',
            'Phòng tổng thống',
            'Phòng đơn',
            'Phòng đôi',
            'Phòng đôi',
            'Phòng gia đình/Phòng 3 người',
            'Phòng kết nối',
            'Phòng Murphy',
            'Phòng dành cho người khuyết tật/Phòng dành cho người khuyết tật',
            'Phòng hút thuốc/không hút thuốc',
            'Phòng Cabana',
        ];

        $information = [
            'Đúng như tên gọi, loại phòng tiêu chuẩn là loại phòng khách sạn cơ bản nhất trong khách sạn. Thông thường, loại phòng này có giá tương đối rẻ. Các tiện nghi được cung cấp cũng là tiêu chuẩn, chẳng hạn như giường cỡ king hoặc hai giường cỡ queen. Tuy nhiên, ưu đãi đưa ra tùy thuộc vào từng khách sạn. Tiêu chuẩn phòng của khách sạn 1 sao và 5 sao tất nhiên là khác nhau.',
            'Về cơ bản, phòng superior là loại phòng tốt hơn một chút so với loại phòng tiêu chuẩn. Sự khác biệt có thể ở dạng cơ sở vật chất được cung cấp, nội thất của căn phòng hoặc tầm nhìn từ căn phòng.',
            'Phía trên loại phòng khách sạn cao cấp là phòng sang trọng. Căn phòng này chắc chắn có một căn phòng lớn hơn. Có một sự lựa chọn về nệm mà bạn có thể chọn, giường đôi hoặc giường đôi. Thông thường, về mặt nội thất của căn phòng này, nó có vẻ sang trọng hơn.',
            'Loại phòng khách sạn, phòng junior suite, có đặc điểm là có sự hiện diện của phòng khách. Tuy nhiên, phòng khách vẫn chung phòng với giường ngủ. Phòng khách thường được hạn chế hoặc ngăn bằng tủ lớn để không nhìn thấy giường ngủ. ',
            'Phòng Suite ở trên phòng khách sạn loại phòng cơ sở. Phòng khách trong phòng khách sạn này tách biệt với phòng ngủ. Về cơ sở vật chất, tất nhiên là khác với phòng junior suite. Ngoài phòng khách, loại phòng khách sạn này thường được trang bị nhà bếp.',
            'Phòng tổng thống là loại phòng khách sạn tốt nhất và đắt nhất. Trên thực tế, không phải khách sạn nào cũng có phòng tổng thống. Cơ sở vật chất được cung cấp tất nhiên là tốt nhất, bắt đầu từ nội thất, quang cảnh phòng và nhiều thứ khác.',
            'Phòng đơn là loại phòng khách sạn phổ biến nhất. Loại phòng khách sạn này bao gồm một giường đơn, ghế sofa và phòng tắm. Kích thước phòng cũng không quá lớn. Loại phòng khách sạn này thường được du khách ba lô hoặc khách du lịch một mình lựa chọn vì cơ sở vật chất thực sự dành cho một người và giá cả lại rẻ.',
            'Từ cái tên thôi, bạn có thể đoán rằng loại phòng khách sạn này có hai giường đơn riêng biệt. Loại phòng khách sạn này thích hợp cho vợ chồng hoặc ở cùng nhóm bạn 2-3 người.',
            'Muốn có một kỳ nghỉ thoải mái hơn và cơ sở vật chất tốt hơn? Bạn có thể đặt loại phòng khách sạn phòng đôi. Loại phòng khách sạn này thường có kích thước giường lớn như king size. Phòng đôi này thực sự phù hợp cho các cặp vợ chồng muốn hưởng tuần trăng mật.',
            'Đi du lịch với đại gia đình hoặc bạn bè? Bạn có thể chọn loại phòng khách sạn phòng gia đình. Về diện tích phòng thì tất nhiên là rộng hơn nhiều so với các loại phòng khách sạn khác. Loại phòng khách sạn dành cho gia đình này thường có một giường cỡ King và một giường nhỏ hơn.',
            'Loại phòng khách sạn Connecting Room phù hợp với các bạn đi theo gia đình hoặc nhóm đông người nhưng muốn có phòng ngủ riêng. Các phòng của bạn và các thành viên khác trong gia đình sẽ ở cạnh nhau và sẽ có một cánh cửa nối các phòng của bạn. Vì vậy, nếu bạn hoặc các thành viên khác trong gia đình muốn vào phòng của nhau, bạn có thể đi qua cửa thông nhau và không cần phải đi qua cửa trước, Toppers.',
            'Phòng Murphy này là loại phòng khách sạn cung cấp giường sofa trong phòng. Giường sofa này được dùng làm giường ngủ vào ban đêm và phòng khách vào ban ngày. Kích thước của Phòng Murphy là khoảng 20 – 40 m. Ồ, thật là một khái niệm thú vị!',
            'Loại phòng dành cho người khuyết tật/Phòng dành cho người khuyết tật này dành cho khách khuyết tật. Sự tồn tại của loại phòng này cũng là yêu cầu của pháp luật, bạn biết đấy, để tránh sự phân biệt đối xử. Điều này cũng được thực hiện để giúp những vị khách này lưu trú tại khách sạn dễ dàng hơn.',
            'Thông thường khách không được phép hút thuốc trong phòng. Tuy nhiên, nhiều khách sạn đã cung cấp loại phòng hút thuốc/không hút thuốc. Điều này cũng hữu ích để không làm phiền những vị khách tương lai với mùi thuốc lá trong phòng. Vì vậy, nếu bạn là người hút thuốc, bây giờ bạn có thể đặt phòng với loại phòng hút thuốc.',
            'Bạn muốn bơi ngay khi mở cửa phòng ngủ? Hoặc có một hồ bơi riêng? Chọn loại phòng khách sạn Cabana Room! Loại phòng khách sạn này thực sự được thiết kế với một hồ bơi riêng cho đơn đặt phòng. Diện tích Phòng Cabana là khoảng 30 – 40 m.',
        ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i]
            ]);
        }
    }
}
