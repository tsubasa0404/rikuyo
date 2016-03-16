;(function(){
  $(document).ready(function() {
    var jp_province = $('.jp_province').val();
    var en_province;
    $('.jp_province').val(en_province(jp_province));
      function en_province(jp_province){
        switch (jp_province) {
          case '北海道': en_province   = 'Hokkaido'; break;
          case '青森県': en_province   = 'Aomori'; break;
          case '岩手県': en_province   = 'Iwate'; break;
          case '宮城県': en_province   = 'Miyagi'; break;
          case '秋田県': en_province   = 'Akita'; break;
          case '山形県': en_province   = 'Yamagata'; break;
          case '福島県': en_province   = 'Fukushima'; break;
          case '茨城県': en_province   = 'Ibaraki'; break;
          case '栃木県': en_province   = 'Tochigi'; break;
          case '群馬県': en_province   = 'Gunma'; break;
          case '埼玉県': en_province   = 'Saitama'; break;
          case '千葉県': en_province   = 'Chiba'; break;
          case '東京都': en_province   = 'Tokyo'; break;
          case '神奈川県': en_province = 'Kanagawa'; break;
          case '新潟県': en_province   = 'Niigata'; break;
          case '富山県': en_province   = 'Toyama'; break;
          case '石川県': en_province   = 'Ishikawa'; break;
          case '福井県': en_province   = 'Fukui'; break;
          case '山梨県': en_province   = 'Yamanashi'; break;
          case '長野県': en_province   = 'Nagano'; break;
          case '岐阜県': en_province   = 'Gifu'; break;
          case '静岡県': en_province   = 'Shizuoka'; break;
          case '愛知県': en_province   = 'Aichi'; break;
          case '三重県': en_province   = 'Mie'; break;
          case '滋賀県': en_province   = 'Shiga'; break;
          case '京都府': en_province   = 'Kyoto'; break;
          case '大阪府': en_province   = 'Osaka'; break;
          case '兵庫県': en_province   = 'Hyogo'; break;
          case '奈良県': en_province   = 'Nara'; break;
          case '和歌山県': en_province = 'Wakayama'; break;
          case '鳥取県': en_province   = 'Tottori'; break;
          case '島根県': en_province   = 'Shimane'; break;
          case '岡山県': en_province   = 'Okayama'; break;
          case '広島県': en_province   = 'Hiroshima'; break;
          case '山口県': en_province   = 'Yamaguchi'; break;
          case '徳島県': en_province   = 'Tokushima'; break;
          case '香川県': en_province   = 'Kagawa'; break;
          case '愛媛県': en_province   = 'Ehime'; break;
          case '高知県': en_province   = 'Kochi'; break;
          case '福岡県': en_province   = 'Fukuoka'; break;
          case '佐賀県': en_province   = 'Saga'; break;
          case '長崎県': en_province   = 'Nagasaki'; break;
          case '熊本県': en_province   = 'Kumamoto'; break;
          case '大分県': en_province   = 'Oita'; break;
          case '宮崎県': en_province   = 'Miyazaki'; break;
          case '鹿児島県': en_province = 'Kagoshima'; break;
          case '沖縄県': en_province   = 'Okinawa'; break;
        }
        return en_province;
      }

  });
})(jQuery);















































