<?php
/* Sản phẩm */
$nametype = "san-pham";
$config['product'][$nametype]['title_main'] = "Sản Phẩm";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['brand'] = true;
$config['product'][$nametype]['color'] = true;
$config['product'][$nametype]['size'] = true;
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['comment'] = false;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['images1'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh sản phẩm",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "cart_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 492,
        "height_photo" => 738,
        "thumb_photo" => '492x738x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    ),
);
$config['product'][$nametype]['code'] = true;
$config['product'][$nametype]['regular_price'] = true;
$config['product'][$nametype]['sale_price'] = true;
$config['product'][$nametype]['discount'] = true;
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['desc_cke'] = true;
$config['product'][$nametype]['content'] = true;
$config['product'][$nametype]['content_cke'] = true;
$config['product'][$nametype]['schema'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width'] = 492;
$config['product'][$nametype]['height'] = 738;
$config['product'][$nametype]['thumb'] = '492x738x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (Size) */
$config['product'][$nametype]['check_size'] = array("hienthi" => "Hiển thị");

/* Sản phẩm (Color) */
$config['product'][$nametype]['check_color'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['color_images'] = true;
$config['product'][$nametype]['color_code'] = true;
$config['product'][$nametype]['color_type'] = true;
$config['product'][$nametype]['width_color'] = 30;
$config['product'][$nametype]['height_color'] = 30;
$config['product'][$nametype]['thumb_color'] = '100x100x1';
$config['product'][$nametype]['img_type_color'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (List) */
$config['product'][$nametype]['title_main_list'] = "Loại sản phẩm";
$config['product'][$nametype]['images_list'] = true;
$config['product'][$nametype]['show_images_list'] = true;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['seo_list'] = true;
$config['product'][$nametype]['width_list'] = 300;
$config['product'][$nametype]['height_list'] = 200;
$config['product'][$nametype]['thumb_list'] = '100x100x1';
$config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Sản phẩm (Hãng) */
$config['product'][$nametype]['title_main_brand'] = "Thương hiệu";
$config['product'][$nametype]['images_brand'] = true;
$config['product'][$nametype]['show_images_brand'] = true;
$config['product'][$nametype]['slug_brand'] = true;
$config['product'][$nametype]['check_brand'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['seo_brand'] = true;
$config['product'][$nametype]['width_brand'] = 300;
$config['product'][$nametype]['height_brand'] = 240;
$config['product'][$nametype]['thumb_brand'] = '300x240x1';
$config['product'][$nametype]['img_type_brand'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Thư viện ảnh */
$nametype = "thu-vien-anh";
$config['product'][$nametype]['title_main'] = "Bộ sưu tập";
$config['product'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh Bộ sưu tập",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 492,
        "height_photo" => 738,
        "thumb_photo" => '492x738x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width'] = 492;
$config['product'][$nametype]['height'] = 738;
$config['product'][$nametype]['thumb'] = '492x738x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
