(function ($) {
    $.fn.gallery = function (options) {
        var is_animating = false,
            current_photo,
            big_photo,
            title,
            settings = $.extend({
                animation_time: 500,
                folder_gallery: "uploads/carousel/",
                id_main_photo: "#main-photo",
                id_title: "#gallery-title",
                has_title:false,
                container_img_gallery: ".container-imgs-controle"
            }, options);

        function start_gallery() {
            $(settings.container_img_gallery + ' img').click(function () {
                var key = $(this).attr('data-key');
                if (!is_animating && current_photo != key) {
                    big_photo = $(this).attr('data-foto');
                    if (settings.has_title)
                        title = $(this).attr('alt');
                    change_main_photo(key);
                }
            }).bind("animationend", function () {
                if ($(this).hasClass('photo-out-in'))
                    $(settings.container_img_gallery).append($(this).removeClass('photo-out-in'));
                else
                    $(this).removeClass('photo-in-out');
            });
            $('.arrow-gallery-1').click(function () {
                gallery_up_left();
            });
            $('.arrow-gallery-2').click(function () {
                gallery_right_down()
            });
            $(settings.container_img_gallery).on("swipeleft", function () {
                if ($('.arrow-gallery').css('display') != "none")
                    gallery_up_left();
            }).on("swiperight", function () {
                if ($('.arrow-gallery').css('display') != "none")
                    gallery_right_down()
            });
            $(settings.container_img_gallery + ' img[data-key="0"]').click();
        };

        function change_main_photo(key) {
            is_animating = true;
            $(settings.id_main_photo).fadeTo(settings.animation_time, 0, function () {
                $(this).attr('src', settings.folder_gallery + big_photo);
                $(this).fadeTo(settings.animation_time, 1);
                is_animating = false;
            });
            if (settings.has_title)
                change_title();
            current_photo = key;
        }

        function change_title() {
            $(settings.id_title).fadeTo(settings.animation_time, 0, function () {
                $(this).html(title);
                $(this).fadeTo(settings.animation_time, 1);
            });
        }

        function gallery_up_left() {
            if (!$(settings.container_img_gallery + ' img:first-child').hasClass('photo-in-out'))
                $(settings.container_img_gallery + ' img:first-child').addClass('photo-out-in');
        }

        function gallery_right_down() {
            if (!$(settings.container_img_gallery + ' img:first-child').hasClass('photo-out-in'))
                $(settings.container_img_gallery + ' img:last-child').addClass('photo-in-out').insertBefore(settings.container_img_gallery + ' img:first-child');
        }

        start_gallery();
    }
}(jQuery));
//# sourceMappingURL=gallery.js.map
