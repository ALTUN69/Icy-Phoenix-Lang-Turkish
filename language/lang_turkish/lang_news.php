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
// Main Stuff.
	'Regular_Post' => 'Normal Mesaj (Haber olarak gösterilmez)',
	'Current_Selection' => 'Geçerli Seçim',
	'Select_News_Category' => 'Haber Kategorisi Seçin',
	'News' => 'Haber',
	'News_Cmx' => '<b>Haber:</b>&nbsp;',
	'Auth_News' => 'Haber',
	'View_Comments' => 'Yorumlara Bak',
	'Read_More' => 'Devamını Oku',
	'News_Categories' => 'Haber Kategorileri',

// Admin Stuff

// News Config
	'Add_news_categories' => 'Haber Kategorisi Ekle',
	'News_Configuration' => 'Haber Yapılandırma',
	'News_Add_Description' => 'Yeni haber kategorileri ekle',
	'Icon' => 'Haber Simgesi',
	'Add_new_category' => 'Yeni haber kategorisi ekle',

	'Click_return_newsadmin' => 'Haber Yönetimine geri dönmek için %sBuraya%s tıklayın',
	'Category_Deleted' => 'Haber kategorisi başarıyla silindi',
	'Category_Updated' => 'Haber kategorisi başarıyla güncellendi',
	'Category_Added' => 'Haber kategorisi başarıyla eklendi',

	'News_Editing_Utility' => 'Haber Kategorisi Düzneleme',
	'News_Config' => 'Haber Kategorisi Yapılandırma',
	'News_Explain' => 'Buradan haber kategorileri ekleyebilir, silebilir ve düzenleyebilirsiniz.',

	'Enable_News' => '<strong>Haber gönderilmesini etkinleştir</strong>',
	'News_Path' => '<strong>Haber simgeleri yolu</strong>',
	'News_Path_Explain' => 'Icyphoenix kök dizin altındaki yolu. Örnek: images/news',

	'News_explain' => 'CMX tarafından yapılan Slashdot News Mod yapılandırması.',
	'News_settings' => 'Haber Ayarları',

	'News_trim' => '<strong>Haber kırpma uzunluğu</strong>',
	'News_trim_explain' => 'Ana Sayfada haber mesajlarının azami uzunluğunu önceden kırpmak için ayarlar. (0 = kesintisiz).',

	'News_topic_trim' => '<strong>Haber konusu kırpma uzunluğu</strong>',
	'News_topic_trim_explain' => 'Ana Sayfada haber konularının azami uzunluğunu önceden kırpmak için ayarlar. (0 = kesintisiz).',

	'News_item_num' => '<strong>Görüntülenecek öğe sayısı</strong>',
	'News_item_num_explain' => 'Ana Sayfada görüntülenecek haber mesajlarının varsayılan sayısını belirler.',

	'RSS_Configuration' => 'RSS Haber Kaynağı Yapılandırması',
	'Enable_RSS' => '<strong>RSS Kaynağını Etkinleştir</strong>',
	'Enable_RSS_explain' => 'Diğer web sitelerinin haberlerinize erişmesini ve kendi sayfalarında görüntülemesini sağlar',

	'Feed_Description' => '<strong>Kaynak Açıklaması</strong>',
	'Feed_Description_Explain' => 'Kaynağı tanımlayan ifade veya cümleler.',

	'Feed_Language' => '<strong>Kaynak Dili</strong>',
	'Feed_Language_Explain' => 'Haberlerin yazıldığı dil. W3C tarafından tanımlanmış değerleri kullanabilirsiniz.',

	'Feed_TTL' => '<strong>Kaynak TTL (Yenilenme Zamanı)</strong>',
	'Feed_TTL_Explain' => 'TTL haberlerin yenilenme zamanını dakika olarak gösteren sayıdır.',

	'Feed_Category' => '<strong>Kaynak Kategorisi</strong>',

	'Feed_Image' => '<strong>Kaynak Resmi</strong>',
	'Feed_Image_Explain' => 'Haber kaynağı ile ilişkili bir resimdir. (Sadece küçük bür boyutlu buton resmi olabilir)',

	'Feed_Image_Desc' => '<strong>Kaynak Resmi Açıklaması</strong>',

// New
	'Articles' => 'Haberler',
	'Archives' => 'Arşivler',
	'Categories' => 'Kategoriler',

	'News_base_url' => '<strong>Temel Haber Mod URL\'si</strong>',
	'News_base_url_explain' => 'Haber dizin dosyasının konumu.<br /> Örnek: http://mydomain.com/, haber anasayfa dosyası burada bulunmaktadır.',
	'Show_RSS_abstract' => '<strong>RSS Kaynak Özetlerini Göster.</strong>',

	'News_index_file' => '<strong>Haber Mod Ana Sayfa Dosyası</strong>',
	'News_index_file_explain' => 'Haber Ana Sayfa dosyasının adı. Örnek: news_index.php',
	)
);

?>