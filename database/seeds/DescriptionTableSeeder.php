<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(
            "INSERT INTO `tbl_description` (`description_id`, `product_id`, `brand_id`, `desc_guarantee`, `desc_warranty`, `desc_color`, `desc_serieslaptop`, `desc_partnumber`, `desc_CPUgeneration`, `desc_CPU`, `desc_card`, `desc_ram`, `desc_screen`, `desc_storage`, `desc_maxstorage`, `desc_supported`, `desc_output`, `desc_connector`, `desc_wireless`, `desc_keyboard`, `desc_window`, `desc_size`, `desc_battery`, `desc_weight`, `desc_security`, `desc_accessories`, `desc_led`, `created_at`, `updated_at`) VALUES
            (16, 20, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (17, 21, 1, '12 tháng', 'Không có', 'Trắng xám', 'Swift 3', 'NX.GSJSV.005', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX150 2GB Intel UHD Graphics 620', '8GB Onboard DDR4 2400MHz Không nâng cấp được )', '15.6\" ( 1920 x 1080 ) Full HD IPS không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.2', 'thường , có phím số , LED', 'Windows 10 Home SL 64-bit', '37 x 25.5 x 1.89 cm', '4 cell 48 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'không đèn', NULL, NULL),
            (18, 25, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (19, 22, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (20, 23, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (21, 24, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (22, 26, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (23, 27, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (24, 28, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (25, 29, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (26, 30, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (27, 31, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (28, 39, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (29, 40, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (30, 41, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (31, 42, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (32, 43, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (33, 44, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (34, 45, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (35, 46, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (36, 47, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (37, 48, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (38, 49, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (39, 50, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (40, 51, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (41, 52, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (42, 53, 1, '12 tháng', 'Không có', 'Trắng xám', 'Swift 3', 'NX.GSJSV.005', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX150 2GB Intel UHD Graphics 620', '8GB Onboard DDR4 2400MHz Không nâng cấp được )', '15.6\" ( 1920 x 1080 ) Full HD IPS không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.2', 'thường , có phím số , LED', 'Windows 10 Home SL 64-bit', '37 x 25.5 x 1.89 cm', '4 cell 48 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'không đèn', NULL, NULL),
            (43, 54, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (44, 55, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (45, 56, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (46, 57, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (47, 58, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (48, 59, 1, '12 tháng', 'Không có', 'Trắng xám', 'Swift 3', 'NX.GSJSV.005', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX150 2GB Intel UHD Graphics 620', '8GB Onboard DDR4 2400MHz Không nâng cấp được )', '15.6\" ( 1920 x 1080 ) Full HD IPS không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.2', 'thường , có phím số , LED', 'Windows 10 Home SL 64-bit', '37 x 25.5 x 1.89 cm', '4 cell 48 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'không đèn', NULL, NULL),
            (49, 60, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (50, 61, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (51, 62, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (52, 63, 1, '12 tháng', 'Không có', 'Trắng xám', 'Swift 3', 'NX.GSJSV.005', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX150 2GB Intel UHD Graphics 620', '8GB Onboard DDR4 2400MHz Không nâng cấp được )', '15.6\" ( 1920 x 1080 ) Full HD IPS không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.2', 'thường , có phím số , LED', 'Windows 10 Home SL 64-bit', '37 x 25.5 x 1.89 cm', '4 cell 48 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'không đèn', NULL, NULL),
            (53, 64, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (54, 65, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (55, 66, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (56, 67, 1, '12 tháng', 'Không có', 'Trắng xám', 'Swift 3', 'NX.GSJSV.005', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX150 2GB Intel UHD Graphics 620', '8GB Onboard DDR4 2400MHz Không nâng cấp được )', '15.6\" ( 1920 x 1080 ) Full HD IPS không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.2', 'thường , có phím số , LED', 'Windows 10 Home SL 64-bit', '37 x 25.5 x 1.89 cm', '4 cell 48 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'không đèn', NULL, NULL),
            (57, 68, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (58, 69, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (59, 70, 1, '12 tháng', 'Không có', 'Trắng xám', 'Aspire 5', 'NX.H82SV.001', 'Core i5 , Intel Core thế hệ thứ 8', 'Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )', 'NVIDIA GeForce MX130 2GB GDDR5 / Intel UHD Graphics 620', '1 x 4GB Onboard DDR4 ( 1 Khe cắm / Hỗ trợ tối đa 12GB )', '15.6\" ( 1920 x 1080 ) Full HD không cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', '1 x USB Type C , 2 x USB 3.0 , 1 x SD card slot , LAN 1 Gb/s', 'WiFi 802.11ac , Bluetooth 5.0', 'thường , có phím số , LED', 'Free DOS', '17.95 x 363.40 x 247.50 mm', '3 cell 61 Wh , Pin liền', '2.1 kg', 'Vân tay', 'Không có', 'Không có', NULL, NULL),
            (60, 71, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (61, 72, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (62, 73, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL),
            (63, 74, 1, '12 tháng', 'Không có', 'Trắng xám', 'Spin 3', 'NX.GUWSV.005', 'Core i3 , Intel Core thế hệ thứ 7', 'Intel Core i3-7130U ( 2.7 GHz / 3MB / 2 nhân, 4 luồng )', 'Intel HD Graphics 620', '1 x 4GB Onboard DDR4 Không nâng cấp được )', '14\" ( 1920 x 1080 ) Full HD IPS cảm ứng , HD webcam', '1TB HDD 5400RPM', '1 x 2.5\" SATA , 1 x M.2 SATA/NVMe', 'M.2 SATA/NVMe', '1 x HDMI', ', 2 x USB 3.0 , 1 x USB 2.0 , 1 x SD card slot', 'WiFi 802.11ac , Bluetooth 4.1', 'thường , không phím số , không đèn', 'Windows 10 Home SL 64-bit', '33.5 x 23 x 2 cm', '3 cell 52 Wh , Pin liền', '1.7 kg', 'Vân tay', 'Dây sạc', 'Không đèn', NULL, NULL);"
        );
    }
}