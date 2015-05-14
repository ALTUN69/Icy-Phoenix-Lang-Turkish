<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Smartor (smartor_xp@hotmail.com)
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
// Album Index
	'Photo_Album' => 'Fotoğraf Albümü',
	'Pics' => 'Resimler',
	'Last_Pic' => 'Son Resim',
	'Public_Categories' => 'Herkese Açık Kategoriler',
	'No_Pics' => 'Resim Yok',
	'Users_Personal_Galleries' => 'Kullanıcıların Kişisel Galerileri',
	'Your_Personal_Gallery' => 'Sizin Kişisel Galeriniz',
	'Recent_Public_Pics' => 'En Son Eklenen Herkeze Açık Resimler',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'Bu kategori mevcut değil',
	'Upload_Pic' => 'Resim Yükle',
	'Upload_Pics' => 'Resimleri Yükle',
	'JUpload_Pic' => 'Jupload İle Çoklu Resimleri Yükle',
	'Pic_Title' => 'Resim Başlığı',
	'View' => 'Görünüm',
	'Pic_Poster' => 'Gönderen',
	'Pic_Image' => 'Resim',
	'Waiting' => ' resim(ler) onay bekliyor',

/*
	'Album_upload_can' => 'Bu kategoriye yeni resimler <b>yükleyebilirsiniz</b>';',
	'Album_upload_cannot' => 'Bu kategoriye yeni resimler <b>yükleyemezsiniz</b>',
	'Album_rate_can' => 'Bu kategorideki resimleri <b>derecelendirebilirsiniz</b>',
	'Album_rate_cannot' => 'Bu kategorideki resimleri <b>derecelendiremezsiniz',
	'Album_comment_can' => 'Bu kategorideki resimler için yorum <b>yapabilirsiniz</b>',
	'Album_comment_cannot' => 'Bu kategorideki resimler için yorum <b>yapamazsınız</b>',
	'Album_edit_can' => 'Bu kategorideki resimlerinizi ve yorumlarınızı <b>düzenleyebilirsiniz</b>',
	'Album_edit_cannot' => 'Bu kategorideki resimlerinizi ve yorumlarınızı <b>düzenleyemezsiniz</b>',
	'Album_delete_can' => 'Bu kategorideki resimlerinizi ve yorumlarınızı <b>silebilirsiniz</b>',
	'Album_delete_cannot' => 'Bu kategorideki resimlerinizi ve yorumlarınızı <b>silemezsiniz</b>',
*/
	'Album_view_can' => 'Resimleri <b>görüntüleyebilirsiniz</b>',
	'Album_view_cannot' => 'Resimleri <b>görüntüleyemezsiniz</b>',
	'Album_upload_can' => 'Yeni resimler <b>yükleyebilirsiniz</b>',
	'Album_upload_cannot' => 'Yeni resimler <b>yükleyemezsiniz</b>',
	'Album_rate_can' => 'Resimleri <b>derecelendirebilirsiniz</b>',
	'Album_rate_cannot' => 'Resimleri <b>derecelendiremezsiniz</b>',
	'Album_comment_can' => 'Resimler için yorum <b>yapabilirsiniz</b>',
	'Album_comment_cannot' => 'Resimler için yorum <b>yapamazsınız</b>',
	'Album_edit_can' => 'Resimlerinizi ve yorumlarınızı <b>düzenleyebilirsiniz</b>',
	'Album_edit_cannot' => 'Resimlerinizi ve yorumlarınızı <b>düzenleyemezsiniz</b>',
	'Album_delete_can' => 'Resimlerinizi ve yorumlarınızı <b>silebilirsiniz</b>',
	'Album_delete_cannot' => 'Resimlerinizi ve yorumlarınızı <b>silemezsiniz',
	'Album_moderate_can' => 'Bu kategoriyi <b>yönetmek</b> için %sburaya%s tıklayın',

	'Edit_pic' => 'Düzenle',
	'Delete_pic' => 'Sil',
	'Rating' => 'Derece',
	'Comments' => 'Yorumlar',
	'Last_Comment' => 'Son Yorum',
	'New_Comment' => 'Yeni Yorum',
	'Not_rated' => '<i>Derecelendirilmedi</i>',
	'Random_Pictures' => 'Rastgele Resimler',
	'Highest_Rated_Pictures' => 'En Yüksek Derecelendırılen Resimler',
	'Most_Viewed_Pictures' => 'En Çok Görüntülenen Resimler',

	'Avatar_Set' => 'Avatar olarak ayarla',
	'BBCode_Copy' => 'BBCode Kaydı',

// Upload
	'Pic_Desc' => 'Resim Açıklaması',
	'Plain_text_only' => 'Sadece düz metin',
	'Max_length' => 'En fazla uzunluğu (bayt)',
	'Upload_pic_from_machine' => 'Makinenizden bir resim yükleyin',
	'Upload_to_Category' => 'Kategoriye yükle',
	'Upload_thumbnail_from_machine' => 'Makinenizden küçük resmini yükle (resminiz ile aynı olmalıdır)',
	'Upload_thumbnail' => 'Küçük bir resim yükle',
	'Upload_thumbnail_explain' => 'Resminizle aynı dosya türünde olmalıdır',
	'Thumbnail_size' => 'Küçük Resim boyutu (piksel)',
	'Filetype_and_thumbtype_do_not_match' => 'Resminiz ve küçük resmi aynı türde olmalıdır',

	'Upload_no_title' => 'Resminiz için bir başlık girmelisiniz',
	'Upload_no_file' => 'Dosya yolunu ve dosya adını girmeniz gerekir',
	'Desc_too_long' => 'Açıklamanız çok uzun',

	'JPG_allowed' => 'JPG dosya yüklemek için izin',
	'PNG_allowed' => 'PNG dosya yüklemek için izin',
	'GIF_allowed' => 'GIF dosya yüklemek için izin',

	'Album_reached_quota' => 'Bu kategoride belirtilen resim kotasına ulaşılmıştır. Şimdi daha fazla yükleyemezsiniz. Daha fazla bilgi için yöneticilerle irtibata geçiniz',
	'User_reached_pics_quota' => 'Size verilen resimler kotasına ulaştınız. Şimdi daha fazla yükleyemezsiniz. Daha fazla bilgi için yöneticilerle irtibata geçiniz',

	'No_valid_category_selected' => 'Geçersiz albüm kategorisi seçildi',
	'No_category_to_upload' => 'Ne yazık ki şu anda yükleyebileceğiniz hiçbir kategori mevcut değil.',
	'Not_allowed_file_type' => 'Sizin dosya türüne izin verilmiyor',
	'Upload_image_size_too_big' => 'Resminizin boyutu cok büyük',
	'Upload_thumbnail_size_too_big' => 'Küçük Resim boyutu çok büyük',

	'Missed_pic_title' => 'Resminiz için bir başlık girmelisiniz',

	'Click_return_category' => 'Kategoriye dönmek için %sburaya%s tıklayın',
	'Click_return_album_index' => 'Albüm Ana Sayfasına dönmek için %sburaya%s tıklayın',

	'Add_File' => 'Dosya Ekle',
	'File_thumbnail_count_mismatch' => 'Yüklenen resim sayısı ve küçük resimler uyuşmuyor',
	'No_thumbnail_for_picture_found' => 'Yüklenen resim için hiçbir küçük resim bulunmamaktadır (adı: %s)',
	'No_picture_for_thumbnail_found' => 'Yüklenen küçük resim için resim bulunamadı (adı: %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Resim ve Küçük Resmi yüklenirken bilinmeyen bir hata oluştu<br />Resim adı: %s ve Küçük Resim adı: %s<br />',
	'Picture_exceeded_maximum_size_INI' => '\'%s\' adlı resim çok büyük. Resim atlandı.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => '\'%s\' adlı küçük resim çok büyük. Resim ve küçük resim atlandı.<br />',
	'Execution_time_exceeded_skipping' => 'Komut dosyasının çalıştırılması için izin verilen azami süre aşıldı. Aşağıdaki dosyalar atlandı:<br />',
	'Skipping_uploaded_picture_file' => '%s<br />',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (küçük resim: %s)<br />',
	'Album_upload_not_successful' => 'Resimlerinizden hiç biri başarılı bir şekilde yüklenemedi<br /><br />',
	'Album_upload_partially_successful' => 'Sadece resimlerinizin bir kısmı başarıyla yüklendi<br /><br />',
	'No_pictures_selected_for_upload' => 'Yükleme için herhangi bir resim seçilmedi ya da bilinmeyen bir hata oluştu',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your picture has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your picture has been uploaded successfully.<br /><br />But the feature Picture Approval has been enabled so your picture must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'Kötü yükleme',
	'Bad_upload_file_size' => 'Yüklenen dosya (%s) çok büyük yada bozuk',
	'Album_upload_successful' => 'Resminiz/Resimleriniz başarıyla yüklendi',
	'Album_upload_need_approval' => 'Resminiz/Resimleriniz başarıyla yüklendi.<br /><br />Ancak resim onayı özelliği devrede olduğundan, resminiz yayınlanmadan önce bir yönetici yada moderatör tarafından onaylanması gerekiyor.',

	'Rotation' => 'Döndür (Saat yönünün tersinde) - Dereceler',

	'Max_file_size' => 'En büyük dosya boyutu (bayt)',
	'Max_width' => 'Yeniden sıkıştırmadan önce resmin en fazla genişliği (piksel)',
	'Max_height' => 'Yeniden sıkıştırmadan önce resmin en fazla yüksekliği (piksel)',

// Album Nuffload
	'time_elapsed' => 'Geçen Zaman',
	'time_remaining' => 'Kalan Zaman',
	'upload_in_progress' => 'Yükleme İlerlemesi',
	'please_wait' => 'Lütfen bekleyin ...',
	'uploaded' => '%multi_max% resmin %multi_id%\'i yüklendi.',
	'no_file_received' => 'Hiç bir resim dosyası alınamadı',
	'no_thumbnail_file_received' => 'Hiç bir küçük resim dosyası alınamadı',
	'file_too_big' => 'Resim dosya boyutu çok büyük',
	'thumbnail_too_big' => 'Küçük Resim dosya boyutu çok büyükg',
	'image_res_too_high' => 'Resim çözünürlüğü çok yüksek',
	'add_field' => 'Dosya yükleme alanına ekle',
	'remove_field' => 'Dosya yükleme alanından kaldır',
	'ZIP_allowed' => 'ZIP dosyalarını yüklemek için izin',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Resim Detayları',
	'Pic_Size' => 'Boyutu',
	'Pic_Type' => 'Resim Türü',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'Bu resim yok',
	'Click_enlarge' => 'Resmi büyük görmek için üzerine tıklayın',
	'Prev_Pic' => 'Önceki Resmi Görüntüle',
	'Next_Pic' => 'Sonraki Resim Görüntüle',
	'Slideshow' => 'Slayt Gösteri',
	'Slideshow_Delay' => 'Slayt Gösteri Gecikmesi',
	'Slideshow_On' => 'Slayt Gösteri',
	'Slideshow_Off' => 'Gösteriyi Durdur',
	'Pics_Nav' => 'Pictures Navigation',
	'Pics_Nav_Next' => 'Sonraki Resim',
	'Pics_Nav_Prev' => 'Önceki Resim',
	'Pics_Counter' => 'Görüntülenen Resim %s Toplam: %s',

// Edit Pic
	'Edit_Pic_Info' => 'Resim Bilgisini Düzenle',
	'Pics_updated_successfully' => 'Resiminizin bilgisi başarıyla güncellendi',

// Delete Pic
	'Album_delete_confirm' => 'Bu resim yada resimleri silmek istediğinizden emin misiniz?',
	'Pics_deleted_successfully' => 'Bu resim yada resimler başarıyla silindi',

// ModCP
	'Approval' => 'Onay',
	'Approve' => 'Onayla',
	'Unapprove' => 'Unapprove',
	'Status' => 'Durum',
	'Locked' => 'Kilitli',
	'Not_approved' => 'Onaylanmayan',
	'Approved' => 'Onaylanan',
	'Copy' => 'Kopyala',
	'Move_to_Category' => 'Kategoriye taşı',
	'Pics_moved_successfully' => 'Your pic(s) have been moved successfully',
	'Copy_to_Category' => 'Kategoriye kopyala',
	'Pics_copied_successfully' => 'Your pic(s) have been copied successfully',
	'Pics_locked_successfully' => 'Your pic(s) have been locked successfully',
	'Pics_unlocked_successfully' => 'Your pic(s) have been unlocked successfully',
	'Pics_approved_successfully' => 'Your pic(s) have been approved successfully',
	'Pics_unapproved_successfully' => 'Your pic(s) have been unapproved successfully',
	'NO_PICS_SPECIFIED' => 'No pic(s) specified',

// Rate
	'Current_Rating' => 'Current Rating',
	'Please_Rate_It' => 'Please Rate It',
	'Login_To_Vote' => 'Please Login To Vote',
	'Already_rated' => 'You have already rated this picture',
	'Own_Pic_Rate' => 'You cannot rate your pictures',
	'Album_rate_successfully' => 'Your picture has been rated successfully.',
	'Click_rate_more' => 'Click %sHere%s to rate more pictures.',
	'Hot_Or_Not' => 'Şimdi Not Ver',

// Comment
	'Comment_no_text' => 'Lütfen yorumunuzu girin',
	'Comment_too_long' => 'Yorumunuz çok uzun',
	'Comment_delete_confirm' => 'Bu yorumu silmek istediğinizden emin misiniz?',
	'Pic_Locked' => 'Üzgünüz, bu resim kilitlendi. Yani artık bu resim için bir yorum açamazsınız',
	'Post_your_comment' => 'Lütfen Yorumunuzu Giriniz',

// Personal Gallery
	'Personal_Gallery_Explain' => 'You can view the personal galleries of other members by clicking on the link in their profiles',
	'Personal_gallery_not_created' => 'The personal gallery of %s has not been created',
	'Not_allowed_to_create_personal_gallery' => 'Sorry, the administrators of this board do not allow you to create your personal gallery',
	'Click_return_personal_gallery' => 'Click %sHere%s to return to the personal gallery',

// Download Archive
	'Download_pics' => 'Download Pics (ZIP)',
	'Download_page' => 'Download Pics In This Page (ZIP)',
	'No_Download_auth' => 'You are not authorized to archive photos from this album!',

// Email Notification
	'Email_Notification' => 'Album Email Notification',
	'Email_Notification_Explain' => 'This setting allow admins to receive a notification when a new picture is posted in the album',
	'Approvation_OK' => 'Approved',
	'Approvation_NO' => 'To Be Approved',

// Album Hierarchy Index Table
	'Last_Comment' => 'Son Yorum',
	'Last_Comments' => 'Son Yorumlar',
	'No_Comment_Info' => 'Yorum Yok',
	'No_Pictures_In_Cat' => 'Kategoride Resim Yok',
	'Total_Pics' => 'Toplam Resimler',
	'Total_Comments' => 'Toplam Yorumlar',
	'Last_Index_Thumbnail' => 'Son Resim',
	'One_Sub_Total_Pics' => '%d Resim',
	'Multiple_Sub_Total_Pics' => '%d Resimler',
	'Album_sub_categories' => 'Alt Kategoriler',
	'No_Public_Galleries' => 'No Public Galleries',
	'One_new_picture' => '%d yeni resim',
	'Multiple_new_pictures' => '%d yeni resimler',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Kişisel Galeri',
	'Create_Personal_Categories' => 'Kişisel Galeri Oluştur',
	'Personal_Cat_Admin' => 'Kişisel Galeri Kategori Yönetimi',
	'Recent_Personal_Pics' => 'Recent Pictures From the Personal Gallery of %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Check All',
	'Modcp_uncheck_all' => 'Uncheck All',
	'Modcp_inverse_selection' => 'Inverse Selection',

	'Show_selected_pic_view_mode' => 'Show Only The Selected Personal Gallery Category',
	'Show_all_pic_view_mode' => 'Show All Pictures In this Personal Gallery',

// Access language strings
	'Album_Can_Manage_Categories' => 'You <b>can</b> %smanage%s the categories in the gallery',
	'No_Personal_Category_admin' => 'You are not allowed to manage your personal gallery categories',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Kategori',
	'Picture_List_Of_User' => 'All Pictures by %s',
	'Member_Picture_List_Explain' => 'You can view the complete list of picture contributed by other members by clicking on the link in their profiles',
	'Comment_List_Of_User' => 'All Comments by %s',
	'Rating_List_Of_User' => 'All Ratings by %s',
	'Show_All_Pictures_Of_user' => 'Show All Pictures by %s',
	'Show_All_Comments_Of_user' => 'Show All Comments by %s',
	'Show_All_Ratings_Of_user' => 'Show All Ratings by %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Tüm Resimler',
	'All_Comment_List_Of_User' => 'Tüm Yorumlar',
	'All_Rating_List_Of_User' => 'Tüm Dereceler',
	'All_Show_All_Pictures_Of_user' => 'Tüm Resimleri Göster',
	'All_Show_All_Comments_Of_user' => 'Tüm Yorumları Göster',
	'All_Show_All_Ratings_Of_user' => 'Tüm Derecelendırmeleri Göster',

	'Not_commented' => '<i>Yorumlanmadı</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Click here to apply Special Effects',
	'Nuff_UnClick' => 'Click here for normal visualization',
	'Nuff_Title' => 'Special Effects',
	'Nuff_Explain' => 'Apply multiple effects to the pictures.<br />Remember that this is a <i><b>very heavy operation on server CPU load</b></i>, so please do not abuse it. Some effects will automatically resize the output image to prevent too much charge on the server CPU.',
	'Nuff_Normal' => 'Normal Image',
	'Nuff_Normal_Explain' => 'No effects applied',
	'Nuff_BW' => 'Black & White',
	'Nuff_BW_Explain' => 'Transform the image into Black and White',
	'Nuff_Sepia' => 'Sepia Tone',
	'Nuff_Sepia_Explain' => 'Apply sepia toning to the picture',
	'Nuff_Flip' => 'Flip',
	'Nuff_Flip_Explain' => 'Flip the image',
	'Nuff_Mirror' => 'Mirror',
	'Nuff_Mirror_Explain' => 'Mirror the image',
	'Nuff_Flip_H' => 'Horizontal',
	'Nuff_Flip_V' => 'Vertical',
	'Nuff_Rotate' => 'Picture Rotation (Anti Clockwise)',
	'Nuff_Rotate_Explain' => 'Rotates the images anti clockwise',
	'Nuff_Resize' => 'Resize',
	'Nuff_Resize_Explain' => 'Image resize',
	'Nuff_Resize_W' => 'Width',
	'Nuff_Resize_H' => 'Height',
	'Nuff_Resize_No_Resize' => 'No Resize',
	'Nuff_Watermark' => 'Watermark',
	'Nuff_Watermark_Explain' => 'Apply a watermark to the image',
	'Nuff_Recompress' => 'Recompress',
	'Nuff_Recompress_Explain' => 'Re-compress the image',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'Overlay an alpha channel to the image',
	'Nuff_Blur' => 'Blur',
	'Nuff_Blur_Explain' => 'Apply a blur filter to the image',
	'Nuff_Pixelate' => 'Pixelate',
	'Nuff_Pixelate_Explain' => 'Apply a pixelate filter to the image',
	'Nuff_Scatter' => 'Scatter',
	'Nuff_Scatter_Explain' => 'Apply a scatter filter to the image',
	'Nuff_Infrared' => 'Infrared',
	'Nuff_Infrared_Explain' => 'Apply an infrared filter to the image',
	'Nuff_Tint' => 'Tint',
	'Nuff_Tint_Explain' => 'Apply a red tint to the image',
	'Nuff_Interlace' => 'Interlace (Horizontal Lines)',
	'Nuff_Interlace_Explain' => 'Overlay an interlace channel to the image',
	'Nuff_Screen' => 'Screen (Hor Ver Lines)',
	'Nuff_Screen_Explain' => 'Overlay a screen channel to the image',
	'Nuff_Stereogram' => 'Stereograph',
	'Nuff_Stereogram_Explain' => 'Convert the image to a stereograph (BW 16 bit required)',

	'Pic_Gallery' => 'OTF Gallery',
	'Select_Pic' => 'Resim Seç',
	'Select_Category' => 'Kategori Seç',
	'Title_Description' => 'Başlık &amp; Açıklama',

// Pic watch
	'No_longer_watching_comment' => 'You are no longer watching this picture for comments',
	'Watching_comment' => 'You are now watching this picture for comments',
	'Pic_comment_notification' => 'Album Comment Notification',
	'Pic_comment_watch_checkbox' => 'Check box to be notified on picture comments:',
	'Watch_pic' => 'Watch this picture for comments',
	'Unwatch_pic' => 'Stop watching this picture for comments',
	'Click_return_pic' => 'Click %sHere%s to return to the picture',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>