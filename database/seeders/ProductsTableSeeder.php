<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('order_product')->truncate();
        DB::table('orders')->truncate();
        $products = [
            [
                'name' => 'Điện thoại iPhone 12 Pro Max 128GB',
                'slug' => 'iphone-12-pro-max',
                'content' => 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.
                    Thay đổi thiết kế mới sau 6 năm
                    Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.
                    iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.',
                'orgin_price' => 32990000,
                'sale_price' => 31990000,
                'category_id' => 1,
                'brand_id' => 1,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB',
                'slug' => 'samsung-galaxy-z-flip3-5g-256gb',
                'content' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.
                Thiết kế nhỏ gọn đầy lôi cuốn
                Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.',
                'orgin_price' => 26990000,
                'sale_price' => 26990000,
                'category_id' => 1,
                'brand_id' => 3,
                'qty' => 10,
                'info' => '{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại iPhone 12 Pro Max 128GB',
                'slug' => 'iphone-12-pro-max',
                'content' => 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.
                    Thay đổi thiết kế mới sau 6 năm
                    Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.
                    iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.',
                'orgin_price' => 32990000,
                'sale_price' => 31990000,
                'category_id' => 1,
                'qty' => 10,
                'brand_id' => 1,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB',
                'slug' => 'samsung-galaxy-z-flip3-5g-256gb',
                'content' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.
                Thiết kế nhỏ gọn đầy lôi cuốn
                Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.',
                'orgin_price' => 26990000,
                'sale_price' => 26990000,
                'qty' => 10,
                'category_id' => 1,
                'brand_id' => 3,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại iPhone 12 Pro Max 128GB',
                'slug' => 'iphone-12-pro-max',
                'content' => 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.
                    Thay đổi thiết kế mới sau 6 năm
                    Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.
                    iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.',
                'orgin_price' => 32990000,
                'sale_price' => 31990000,
                'category_id' => 1,
                'qty' => 10,
                'brand_id' => 1,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB',
                'slug' => 'samsung-galaxy-z-flip3-5g-256gb',
                'content' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.
                Thiết kế nhỏ gọn đầy lôi cuốn
                Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.',
                'orgin_price' => 26990000,
                'sale_price' => 26990000,
                'category_id' => 1,
                'brand_id' => 3,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại iPhone 12 Pro Max 128GB',
                'slug' => 'iphone-12-pro-max',
                'content' => 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.
                    Thay đổi thiết kế mới sau 6 năm
                    Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.
                    iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.',
                'orgin_price' => 32990000,
                'sale_price' => 31990000,
                'category_id' => 1,
                'brand_id' => 1,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB',
                'slug' => 'samsung-galaxy-z-flip3-5g-256gb',
                'content' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.
                Thiết kế nhỏ gọn đầy lôi cuốn
                Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.',
                'orgin_price' => 26990000,
                'sale_price' => 26990000,
                'category_id' => 1,
                'brand_id' => 3,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại iPhone 12 Pro Max 128GB',
                'slug' => 'iphone-12-pro-max',
                'content' => 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.
                    Thay đổi thiết kế mới sau 6 năm
                    Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.
                    iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.',
                'orgin_price' => 32990000,
                'sale_price' => 31990000,
                'category_id' => 1,
                'brand_id' => 1,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB',
                'slug' => 'samsung-galaxy-z-flip3-5g-256gb',
                'content' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.
                Thiết kế nhỏ gọn đầy lôi cuốn
                Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.',
                'orgin_price' => 26990000,
                'sale_price' => 26990000,
                'category_id' => 1,
                'brand_id' => 3,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại iPhone 12 Pro Max 128GB',
                'slug' => 'iphone-12-pro-max',
                'content' => 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.
                    Thay đổi thiết kế mới sau 6 năm
                    Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.
                    iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.',
                'orgin_price' => 32990000,
                'sale_price' => 31990000,
                'category_id' => 1,
                'brand_id' => 1,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB',
                'slug' => 'samsung-galaxy-z-flip3-5g-256gb',
                'content' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.
                Thiết kế nhỏ gọn đầy lôi cuốn
                Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.',
                'orgin_price' => 26990000,
                'sale_price' => 26990000,
                'category_id' => 1,
                'brand_id' => 3,
                'qty' => 10,
                'info'=>'{"color":["red","blue"],"storage":[64,128]}',
                'option' =>'{"color":["red","blue"],"storage":[64,128]}',
                'user_created_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
            
        ];
     
    DB::table('products')->insert($products);
    }
}
