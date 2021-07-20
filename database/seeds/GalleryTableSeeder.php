<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(
            "INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_name`, `gallery_image`, `product_id`, `created_at`, `updated_at`) VALUES
            (40, 'sanpham127.jpg', 'sanpham127.jpg', 20, NULL, NULL),
            (41, 'sanpham1166.jpg', 'sanpham1166.jpg', 20, NULL, NULL),
            (42, 'sanpham11155.jpg', 'sanpham11155.jpg', 20, NULL, NULL),
            (43, 'sanpham228.jpg', 'sanpham228.jpg', 21, NULL, NULL),
            (44, 'sanpham2229.jpg', 'sanpham2229.jpg', 21, NULL, NULL),
            (45, 'sanpham22251.jpg', 'sanpham22251.jpg', 21, NULL, NULL),
            (46, 'sanpham318.jpg', 'sanpham318.jpg', 22, NULL, NULL),
            (47, 'sanpham3368.jpg', 'sanpham3368.jpg', 22, NULL, NULL),
            (49, 'sanpham3331.jpg', 'sanpham3331.jpg', 22, NULL, NULL),
            (50, 'sanpham478.jpg', 'sanpham478.jpg', 23, NULL, NULL),
            (51, 'sanpham556.jpg', 'sanpham556.jpg', 24, NULL, NULL),
            (52, 'sanpham4416.jpg', 'sanpham4416.jpg', 23, NULL, NULL),
            (53, 'sanpham44452.jpg', 'sanpham44452.jpg', 23, NULL, NULL),
            (54, 'sanpham5572.jpg', 'sanpham5572.jpg', 24, NULL, NULL),
            (55, 'sanpham55547.jpg', 'sanpham55547.jpg', 24, NULL, NULL),
            (56, 'sanpham673.jpg', 'sanpham673.jpg', 25, NULL, NULL),
            (57, 'sanpham290.jpg', 'asus516.jpg', 30, NULL, NULL),
            (58, 'sanpham2280.jpg', 'asus5559.jpg', 30, NULL, NULL),
            (59, 'sanpham22222.jpg', 'asus5559.jpg', 30, NULL, NULL),
            (60, 'asus171.jpg', 'asus171.jpg', 26, NULL, NULL),
            (61, 'asus1152.jpg', 'asus1152.jpg', 26, NULL, NULL),
            (62, 'asus1117.jpg', 'asus1117.jpg', 26, NULL, NULL),
            (63, 'asus221.jpg', 'asus221.jpg', 27, NULL, NULL),
            (64, 'asus228.jpg', 'asus228.jpg', 27, NULL, NULL),
            (65, 'asus22226.jpg', 'asus22226.jpg', 27, NULL, NULL),
            (66, 'asus349.jpg', 'asus349.jpg', 28, NULL, NULL),
            (67, 'asus3324.jpg', 'asus3324.jpg', 28, NULL, NULL),
            (68, 'asus33339.jpg', 'asus33339.jpg', 28, NULL, NULL),
            (69, 'asus426.jpg', 'asus426.jpg', 29, NULL, NULL),
            (70, 'asus4463.jpg', 'asus4463.jpg', 29, NULL, NULL),
            (71, 'asus44424.jpg', 'asus44424.jpg', 29, NULL, NULL),
            (72, 'asus63.jpg', 'asus63.jpg', 31, NULL, NULL),
            (73, 'asus6670.jpg', 'asus6670.jpg', 31, NULL, NULL),
            (74, 'asus66654.jpg', 'asus66654.jpg', 31, NULL, NULL),
            (75, 'apple129.jpg', 'apple129.jpg', 39, NULL, NULL),
            (76, 'apple113.jpg', 'apple113.jpg', 39, NULL, NULL),
            (77, 'apple1172.jpg', 'apple1172.jpg', 39, NULL, NULL),
            (78, 'apple11115.jpg', 'apple11115.jpg', 39, NULL, NULL),
            (79, 'apple252.jpg', 'apple252.jpg', 44, NULL, NULL),
            (80, 'apple2274.jpg', 'apple2274.jpg', 44, NULL, NULL),
            (81, 'apple22252.jpg', 'apple22252.jpg', 44, NULL, NULL),
            (82, 'apple347.jpg', 'apple347.jpg', 43, NULL, NULL),
            (83, 'apple3392.jpg', 'apple3392.jpg', 43, NULL, NULL),
            (84, 'apple33376.jpg', 'apple33376.jpg', 43, NULL, NULL),
            (85, 'apple425.jpg', 'apple425.jpg', 42, NULL, NULL),
            (86, 'apple4461.jpg', 'apple4461.jpg', 42, NULL, NULL),
            (87, 'apple44410.jpg', 'apple44410.jpg', 42, NULL, NULL),
            (88, 'apple275.jpg', 'apple275.jpg', 40, NULL, NULL),
            (89, 'apple2246.jpg', 'apple2246.jpg', 40, NULL, NULL),
            (90, 'apple22244.jpg', 'apple22244.jpg', 40, NULL, NULL),
            (91, 'dell174.jpg', 'dell174.jpg', 45, NULL, NULL),
            (92, 'dell111.jpg', 'dell111.jpg', 45, NULL, NULL),
            (93, 'dell1112.jpg', 'dell1112.jpg', 45, NULL, NULL),
            (94, 'asus471.jpg', 'asus471.jpg', 50, NULL, NULL),
            (95, 'asus581.jpg', 'asus581.jpg', 50, NULL, NULL),
            (96, 'asus692.jpg', 'asus692.jpg', 50, NULL, NULL),
            (97, 'apple160.jpg', 'apple160.jpg', 49, NULL, NULL),
            (98, 'apple1194.jpg', 'apple1194.jpg', 49, NULL, NULL),
            (99, 'apple11144.jpg', 'apple11144.jpg', 49, NULL, NULL),
            (100, 'le121.jpg', 'le121.jpg', 51, NULL, NULL),
            (101, 'dell189.jpg', 'dell189.jpg', 48, NULL, NULL),
            (102, 'dell1144.jpg', 'dell1144.jpg', 48, NULL, NULL),
            (103, 'dell11134.jpg', 'dell11134.jpg', 48, NULL, NULL),
            (104, 'le160.jpg', 'le160.jpg', 51, NULL, NULL),
            (105, 'le1164.jpg', 'le1164.jpg', 51, NULL, NULL),
            (106, 'le11122.jpg', 'le11122.jpg', 51, NULL, NULL),
            (107, 'le288.jpg', 'le288.jpg', 52, NULL, NULL),
            (108, 'le2284.jpg', 'le2284.jpg', 52, NULL, NULL),
            (109, 'le2222.jpg', 'le2222.jpg', 52, NULL, NULL),
            (110, 'le336.jpg', 'le336.jpg', 53, NULL, NULL),
            (111, 'le3311.jpg', 'le3311.jpg', 53, NULL, NULL),
            (112, 'le3332.jpg', 'le3332.jpg', 53, NULL, NULL),
            (113, 'le432.jpg', 'le432.jpg', 54, NULL, NULL),
            (114, 'le4424.jpg', 'le4424.jpg', 54, NULL, NULL),
            (115, 'le44452.jpg', 'le44452.jpg', 54, NULL, NULL),
            (116, 'le172.jpg', 'le172.jpg', 55, NULL, NULL),
            (117, 'le110.jpg', 'le110.jpg', 55, NULL, NULL),
            (118, 'le1116.jpg', 'le1116.jpg', 55, NULL, NULL),
            (119, 'le277.jpg', 'le277.jpg', 56, NULL, NULL),
            (120, 'le2210.jpg', 'le2210.jpg', 56, NULL, NULL),
            (121, 'le22247.jpg', 'le22247.jpg', 56, NULL, NULL),
            (122, 'apple128.jpg', 'apple128.jpg', 57, NULL, NULL),
            (123, 'asus53.jpg', 'asus53.jpg', 57, NULL, NULL),
            (124, 'asus637.jpg', 'asus637.jpg', 57, NULL, NULL),
            (125, 'asus6642.jpg', 'asus6642.jpg', 57, NULL, NULL),
            (126, 'asus47.jpg', 'asus47.jpg', 58, NULL, NULL),
            (127, 'asus5556.jpg', 'asus5556.jpg', 58, NULL, NULL),
            (128, 'asus662.jpg', 'asus662.jpg', 58, NULL, NULL),
            (129, 'asus6673.jpg', 'asus6673.jpg', 59, NULL, NULL),
            (130, 'asus11170.jpg', 'asus11170.jpg', 59, NULL, NULL),
            (131, 'asus22258.jpg', 'asus22258.jpg', 59, NULL, NULL),
            (132, 'apple475.jpg', 'apple475.jpg', 60, NULL, NULL),
            (133, 'apple112.jpg', 'apple112.jpg', 60, NULL, NULL),
            (134, 'apple2256.jpg', 'apple2256.jpg', 60, NULL, NULL),
            (135, 'asus1198.jpg', 'asus1198.jpg', 61, NULL, NULL),
            (136, 'asus2225.jpg', 'asus2225.jpg', 61, NULL, NULL),
            (137, 'asus33376.jpg', 'asus33376.jpg', 61, NULL, NULL),
            (138, 'sanpham357.jpg', 'sanpham357.jpg', 62, NULL, NULL),
            (139, 'sanpham1132.jpg', 'sanpham1132.jpg', 62, NULL, NULL),
            (140, 'sanpham339.jpg', 'sanpham339.jpg', 62, NULL, NULL),
            (141, 'apple1117.jpg', 'apple1117.jpg', 63, NULL, NULL),
            (142, 'dell18.jpg', 'dell18.jpg', 67, NULL, NULL),
            (143, 'apple1167.jpg', 'apple1167.jpg', 68, NULL, NULL),
            (144, 'apple2286.jpg', 'apple2286.jpg', 68, NULL, NULL),
            (145, 'asus4488.jpg', 'asus4488.jpg', 68, NULL, NULL),
            (146, 'asus657.jpg', 'asus657.jpg', 67, NULL, NULL),
            (147, 'asus1173.jpg', 'asus1173.jpg', 67, NULL, NULL),
            (148, 'apple289.jpg', 'apple289.jpg', 66, NULL, NULL),
            (149, 'apple320.jpg', 'apple320.jpg', 66, NULL, NULL),
            (150, 'apple433.jpg', 'apple433.jpg', 66, NULL, NULL),
            (151, 'sanpham640.jpg', 'sanpham640.jpg', 65, NULL, NULL),
            (152, 'sanpham1149.jpg', 'sanpham1149.jpg', 65, NULL, NULL),
            (153, 'sanpham22272.jpg', 'sanpham22272.jpg', 65, NULL, NULL),
            (154, 'sanpham44485.jpg', 'sanpham44485.jpg', 64, NULL, NULL),
            (155, 'sanpham55575.jpg', 'sanpham55575.jpg', 64, NULL, NULL),
            (156, 'sanpham66614.jpg', 'sanpham66614.jpg', 64, NULL, NULL),
            (157, 'asus296.jpg', 'asus296.jpg', 69, NULL, NULL),
            (158, 'asus5599.jpg', 'asus5599.jpg', 69, NULL, NULL),
            (159, 'asus6677.jpg', 'asus6677.jpg', 69, NULL, NULL),
            (160, 'asus1119.jpg', 'asus1119.jpg', 69, NULL, NULL),
            (161, 'sanpham188.jpg', 'sanpham188.jpg', 70, NULL, NULL),
            (162, 'sanpham4476.jpg', 'sanpham4476.jpg', 70, NULL, NULL),
            (163, 'sanpham66699.jpg', 'sanpham66699.jpg', 70, NULL, NULL),
            (164, 'apple3345.jpg', 'apple3345.jpg', 71, NULL, NULL),
            (165, 'asus387.jpg', 'asus387.jpg', 71, NULL, NULL),
            (166, 'asus5580.jpg', 'asus5580.jpg', 71, NULL, NULL),
            (167, 'apple235.jpg', 'apple235.jpg', 72, NULL, NULL),
            (168, 'sanpham6647.jpg', 'sanpham6647.jpg', 72, NULL, NULL),
            (169, 'sanpham11153.jpg', 'sanpham11153.jpg', 72, NULL, NULL),
            (170, 'demo4 - Copy47.jpg', 'demo4 - Copy47.jpg', 73, NULL, NULL),
            (171, 'le470.jpg', 'le470.jpg', 73, NULL, NULL),
            (172, 'le44496.jpg', 'le44496.jpg', 73, NULL, NULL),
            (173, 'apple315.jpg', 'apple315.jpg', 74, NULL, NULL),
            (174, 'apple470.jpg', 'apple470.jpg', 74, NULL, NULL),
            (175, 'apple1158.jpg', 'apple1158.jpg', 74, NULL, NULL);"
        );
    }
}
