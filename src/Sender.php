<?php
namespace Maksimusyan\SmsSender;

class Sender implements ISender
{
    protected $provider = null;
    protected $config;

    public function __construct($provider_name='Epochta',array $config=array())
    {
        $this->config = $config;
        switch ($provider_name) {
            case 'Epochta':
                $this->provider = new Epochta\Epochtasms($this->config);
                break;
        }
        $this->init();
    }

    protected function init(){
        if(null === $this->provider){
            throw new \Exception("Could not connect to the database");
        }
    }

    public function sendSMS(array $data)
    {
        return $this->provider->sendSMS($data);
    }

    public function getBalance($data=null)
    {
        return $this->provider->getBalance($data);
    }

    public function getCountryCodes(){
        $country_list[] = array(
        'name'=>'Афганистан',
        'code'=>'AF',
        'numb'=>'93'
        );
        $country_list[] = array(
        'name'=>'Албания',
        'code'=>'AL',
        'numb'=>'355'
        );
        $country_list[] = array(
        'name'=>'Алжир',
        'code'=>'DZ',
        'numb'=>'213'
        );
        $country_list[] = array(
        'name'=>'Американское Самоа',
        'code'=>'AS',
        'numb'=>'1684'
        );
        $country_list[] = array(
        'name'=>'Андора',
        'code'=>'AD',
        'numb'=>'376'
        );
        $country_list[] = array(
        'name'=>'Ангола',
        'code'=>'AO',
        'numb'=>'244'
        );
        $country_list[] = array(
        'name'=>'Ангилья',
        'code'=>'AI',
        'numb'=>'1264'
        );
        $country_list[] = array(
        'name'=>'Абхазия',
        'code'=>'AB',
        'numb'=>'7940'
        );
        $country_list[] = array(
        'name'=>'Аргентина',
        'code'=>'AR',
        'numb'=>'54'
        );
        $country_list[] = array(
        'name'=>'Армения',
        'code'=>'AM',
        'numb'=>'374'
        );
        $country_list[] = array(
        'name'=>'Аруба',
        'code'=>'AW',
        'numb'=>'297'
        );
        $country_list[] = array(
        'name'=>'Австралия',
        'code'=>'AU',
        'numb'=>'61'
        );
        $country_list[] = array(
        'name'=>'Австрия',
        'code'=>'AT',
        'numb'=>'43'
        );
        $country_list[] = array(
        'name'=>'Азербайджан',
        'code'=>'AZ',
        'numb'=>'994'
        );
        $country_list[] = array(
        'name'=>'Багамские Острова',
        'code'=>'BS',
        'numb'=>'1242'
        );
        $country_list[] = array(
        'name'=>'Бахрейн',
        'code'=>'BH',
        'numb'=>'973'
        );
        $country_list[] = array(
        'name'=>'Бангладеш',
        'code'=>'BD',
        'numb'=>'880'
        );
        $country_list[] = array(
        'name'=>'Барбадос',
        'code'=>'BB',
        'numb'=>'1246'
        );
        $country_list[] = array(
        'name'=>'Беларусь',
        'code'=>'BY',
        'numb'=>'375'
        );
        $country_list[] = array(
        'name'=>'Бельгия',
        'code'=>'BE',
        'numb'=>'32'
        );
        $country_list[] = array(
        'name'=>'Белиз',
        'code'=>'BZ',
        'numb'=>'501'
        );
        $country_list[] = array(
        'name'=>'Бенин',
        'code'=>'BJ',
        'numb'=>'229'
        );
        $country_list[] = array(
        'name'=>'Бермудские Острова',
        'code'=>'BM',
        'numb'=>'1441'
        );
        $country_list[] = array(
        'name'=>'Бутан',
        'code'=>'BT',
        'numb'=>'975'
        );
        $country_list[] = array(
        'name'=>'Боливия',
        'code'=>'BO',
        'numb'=>'591'
        );
        $country_list[] = array(
        'name'=>'Босния и Герцеговина',
        'code'=>'BA',
        'numb'=>'387'
        );
        $country_list[] = array(
        'name'=>'Ботсвана',
        'code'=>'BW',
        'numb'=>'267'
        );
        $country_list[] = array(
        'name'=>'Бразилия',
        'code'=>'BR',
        'numb'=>'55'
        );
        $country_list[] = array(
        'name'=>'Бруней',
        'code'=>'BN',
        'numb'=>'673'
        );
        $country_list[] = array(
        'name'=>'Болгария',
        'code'=>'BG',
        'numb'=>'359'
        );
        $country_list[] = array(
        'name'=>'Буркина-Фасо',
        'code'=>'BF',
        'numb'=>'226'
        );
        $country_list[] = array(
        'name'=>'Бурунди',
        'code'=>'BI',
        'numb'=>'257'
        );
        $country_list[] = array(
        'name'=>'Камбоджа',
        'code'=>'KH',
        'numb'=>'855'
        );
        $country_list[] = array(
        'name'=>'Камерун',
        'code'=>'CM',
        'numb'=>'237'
        );
        $country_list[] = array(
        'name'=>'Канада',
        'code'=>'CA',
        'numb'=>'1'
        );
        $country_list[] = array(
        'name'=>'Кабо-Верде',
        'code'=>'CV',
        'numb'=>'238'
        );
        $country_list[] = array(
        'name'=>'Каймановы Острова',
        'code'=>'KY',
        'numb'=>'1345'
        );
        $country_list[] = array(
        'name'=>'Центральноафриканская Республика',
        'code'=>'CF',
        'numb'=>'236'
        );
        $country_list[] = array(
        'name'=>'Чад',
        'code'=>'TD',
        'numb'=>'235'
        );
        $country_list[] = array(
        'name'=>'Чили',
        'code'=>'CL',
        'numb'=>'56'
        );
        $country_list[] = array(
        'name'=>'Китай',
        'code'=>'CN',
        'numb'=>'86'
        );
        $country_list[] = array(
        'name'=>'Кокосовые Острова',
        'code'=>'CC',
        'numb'=>'61'
        );
        $country_list[] = array(
        'name'=>'Колумбия',
        'code'=>'CO',
        'numb'=>'57'
        );
        $country_list[] = array(
        'name'=>'Коморские Острова',
        'code'=>'KM',
        'numb'=>'269'
        );
        $country_list[] = array(
        'name'=>'Республика Конго',
        'code'=>'CG',
        'numb'=>'242'
        );
        $country_list[] = array(
        'name'=>'Кука острова',
        'code'=>'CK',
        'numb'=>'682'
        );
        $country_list[] = array(
        'name'=>'Коста-Рика',
        'code'=>'CR',
        'numb'=>'506'
        );
        $country_list[] = array(
        'name'=>'Хорватия',
        'code'=>'HR',
        'numb'=>'385'
        );
        $country_list[] = array(
        'name'=>'Куба',
        'code'=>'CU',
        'numb'=>'53'
        );
        $country_list[] = array(
        'name'=>'Кипр',
        'code'=>'CY',
        'numb'=>'357'
        );
        $country_list[] = array(
        'name'=>'Чехия',
        'code'=>'CZ',
        'numb'=>'420'
        );
        $country_list[] = array(
        'name'=>'Дания',
        'code'=>'DK',
        'numb'=>'45'
        );
        $country_list[] = array(
        'name'=>'Джибути',
        'code'=>'DJ',
        'numb'=>'253'
        );
        $country_list[] = array(
        'name'=>'Доминика',
        'code'=>'DM',
        'numb'=>'1767'
        );
        $country_list[] = array(
        'name'=>'Доминиканская Республика',
        'code'=>'DO',
        'numb'=>'1809'
        );
        $country_list[] = array(
        'name'=>'Эквадор',
        'code'=>'EC',
        'numb'=>'593'
        );
        $country_list[] = array(
        'name'=>'Египет',
        'code'=>'EG',
        'numb'=>'20'
        );
        $country_list[] = array(
        'name'=>'Сальвадор',
        'code'=>'SV',
        'numb'=>'503'
        );
        $country_list[] = array(
        'name'=>'Экваториальная Гвинея',
        'code'=>'GQ',
        'numb'=>'240'
        );
        $country_list[] = array(
        'name'=>'Эстония',
        'code'=>'EE',
        'numb'=>'372'
        );
        $country_list[] = array(
        'name'=>'Эфиопия',
        'code'=>'ET',
        'numb'=>'251'
        );
        $country_list[] = array(
        'name'=>'Фолклендские (Мальвинские) острова',
        'code'=>'FK',
        'numb'=>'500'
        );
        $country_list[] = array(
        'name'=>'Фарерские Острова',
        'code'=>'FO',
        'numb'=>'298'
        );
        $country_list[] = array(
        'name'=>'Фиджи',
        'code'=>'FJ',
        'numb'=>'679'
        );
        $country_list[] = array(
        'name'=>'Финляндия',
        'code'=>'FI',
        'numb'=>'358'
        );
        $country_list[] = array(
        'name'=>'Франция',
        'code'=>'FR',
        'numb'=>'33'
        );
        $country_list[] = array(
        'name'=>'Гайана',
        'code'=>'GF',
        'numb'=>'594'
        );
        $country_list[] = array(
        'name'=>'Габон',
        'code'=>'GA',
        'numb'=>'241'
        );
        $country_list[] = array(
        'name'=>'Гамбия',
        'code'=>'GM',
        'numb'=>'220'
        );
        $country_list[] = array(
        'name'=>'Грузия',
        'code'=>'GE',
        'numb'=>'995'
        );
        $country_list[] = array(
        'name'=>'Германия',
        'code'=>'DE',
        'numb'=>'49'
        );
        $country_list[] = array(
        'name'=>'Гана',
        'code'=>'GH',
        'numb'=>'233'
        );
        $country_list[] = array(
        'name'=>'Гибралтар',
        'code'=>'GI',
        'numb'=>'350'
        );
        $country_list[] = array(
        'name'=>'Греция',
        'code'=>'GR',
        'numb'=>'30'
        );
        $country_list[] = array(
        'name'=>'Гренландия',
        'code'=>'GL',
        'numb'=>'299'
        );
        $country_list[] = array(
        'name'=>'Гренада',
        'code'=>'GD',
        'numb'=>'1473'
        );
        $country_list[] = array(
        'name'=>'Гваделупа',
        'code'=>'GP',
        'numb'=>'590'
        );
        $country_list[] = array(
        'name'=>'Гуам',
        'code'=>'GU',
        'numb'=>'1671'
        );
        $country_list[] = array(
        'name'=>'Гватемала',
        'code'=>'GT',
        'numb'=>'502'
        );
        $country_list[] = array(
        'name'=>'Гвинея',
        'code'=>'GN',
        'numb'=>'224'
        );
        $country_list[] = array(
        'name'=>'Гвинея-Бисау',
        'code'=>'GW',
        'numb'=>'245'
        );
        $country_list[] = array(
        'name'=>'Гвиана',
        'code'=>'GY',
        'numb'=>'592'
        );
        $country_list[] = array(
        'name'=>'Гаити',
        'code'=>'HT',
        'numb'=>'509'
        );
        $country_list[] = array(
        'name'=>'Гондурас',
        'code'=>'HN',
        'numb'=>'504'
        );
        $country_list[] = array(
        'name'=>'Гонконг',
        'code'=>'HK',
        'numb'=>'852'
        );
        $country_list[] = array(
        'name'=>'Венгрия',
        'code'=>'HU',
        'numb'=>'36'
        );
        $country_list[] = array(
        'name'=>'Исландия',
        'code'=>'IS',
        'numb'=>'354'
        );
        $country_list[] = array(
        'name'=>'Индия',
        'code'=>'IN',
        'numb'=>'91'
        );
        $country_list[] = array(
        'name'=>'Индонезия',
        'code'=>'ID',
        'numb'=>'62'
        );
        $country_list[] = array(
        'name'=>'Иран',
        'code'=>'IR',
        'numb'=>'98'
        );
        $country_list[] = array(
        'name'=>'Ирак',
        'code'=>'IQ',
        'numb'=>'964'
        );
        $country_list[] = array(
        'name'=>'Ирландия',
        'code'=>'IE',
        'numb'=>'353'
        );
        $country_list[] = array(
        'name'=>'Израиль',
        'code'=>'IL',
        'numb'=>'972'
        );
        $country_list[] = array(
        'name'=>'Италия',
        'code'=>'IT',
        'numb'=>'39'
        );
        $country_list[] = array(
        'name'=>'Ямайка',
        'code'=>'JM',
        'numb'=>'1876'
        );
        $country_list[] = array(
        'name'=>'Япония',
        'code'=>'JP',
        'numb'=>'81'
        );
        $country_list[] = array(
        'name'=>'Иордания',
        'code'=>'JO',
        'numb'=>'962'
        );
        $country_list[] = array(
        'name'=>'Казахстан',
        'code'=>'KZ',
        'numb'=>'77'
        );
        $country_list[] = array(
        'name'=>'Кения',
        'code'=>'KE',
        'numb'=>'254'
        );
        $country_list[] = array(
        'name'=>'Кирибати',
        'code'=>'KI',
        'numb'=>'686'
        );
        $country_list[] = array(
        'name'=>'Кувейт',
        'code'=>'KW',
        'numb'=>'965'
        );
        $country_list[] = array(
        'name'=>'Кыргызстан',
        'code'=>'KG',
        'numb'=>'996'
        );
        $country_list[] = array(
        'name'=>'Лаос',
        'code'=>'LAO',
        'numb'=>'856'
        );
        $country_list[] = array(
        'name'=>'Латвия',
        'code'=>'LV',
        'numb'=>'371'
        );
        $country_list[] = array(
        'name'=>'Ливан',
        'code'=>'LB',
        'numb'=>'961'
        );
        $country_list[] = array(
        'name'=>'Лесото',
        'code'=>'LS',
        'numb'=>'266'
        );
        $country_list[] = array(
        'name'=>'Либерия',
        'code'=>'LR',
        'numb'=>'231'
        );
        $country_list[] = array(
        'name'=>'Ливия',
        'code'=>'LY',
        'numb'=>'218'
        );
        $country_list[] = array(
        'name'=>'Лихтенштейн',
        'code'=>'LI',
        'numb'=>'423'
        );
        $country_list[] = array(
        'name'=>'Литва',
        'code'=>'LT',
        'numb'=>'370'
        );
        $country_list[] = array(
        'name'=>'Люксембург',
        'code'=>'LU',
        'numb'=>'352'
        );
        $country_list[] = array(
        'name'=>'Макао',
        'code'=>'MO',
        'numb'=>'853'
        );
        $country_list[] = array(
        'name'=>'Республика Македония',
        'code'=>'MK',
        'numb'=>'389'
        );
        $country_list[] = array(
        'name'=>'Мадагаскар',
        'code'=>'MG',
        'numb'=>'261'
        );
        $country_list[] = array(
        'name'=>'Малави',
        'code'=>'MW',
        'numb'=>'265'
        );
        $country_list[] = array(
        'name'=>'Малайзия',
        'code'=>'MY',
        'numb'=>'60'
        );
        $country_list[] = array(
        'name'=>'Мальдивы',
        'code'=>'MV',
        'numb'=>'960'
        );
        $country_list[] = array(
        'name'=>'Мали',
        'code'=>'ML',
        'numb'=>'223'
        );
        $country_list[] = array(
        'name'=>'Мальта',
        'code'=>'MT',
        'numb'=>'356'
        );
        $country_list[] = array(
        'name'=>'Мартиника',
        'code'=>'MQ',
        'numb'=>'596'
        );
        $country_list[] = array(
        'name'=>'Мавритания',
        'code'=>'MR',
        'numb'=>'222'
        );
        $country_list[] = array(
        'name'=>'Маврикий',
        'code'=>'MU',
        'numb'=>'230'
        );
        $country_list[] = array(
        'name'=>'Мексика',
        'code'=>'MX',
        'numb'=>'52'
        );
        $country_list[] = array(
        'name'=>'Молдова',
        'code'=>'MD',
        'numb'=>'373'
        );
        $country_list[] = array(
        'name'=>'Монако',
        'code'=>'MC',
        'numb'=>'377'
        );
        $country_list[] = array(
        'name'=>'Монголия',
        'code'=>'MN',
        'numb'=>'976'
        );
        $country_list[] = array(
        'name'=>'Монтсеррат',
        'code'=>'MS',
        'numb'=>'1664'
        );
        $country_list[] = array(
        'name'=>'Морокко',
        'code'=>'MA',
        'numb'=>'212'
        );
        $country_list[] = array(
        'name'=>'Мозамбик',
        'code'=>'MZ',
        'numb'=>'258'
        );
        $country_list[] = array(
        'name'=>'Мьянма',
        'code'=>'MM',
        'numb'=>'95'
        );
        $country_list[] = array(
        'name'=>'Намибия',
        'code'=>'NA',
        'numb'=>'264'
        );
        $country_list[] = array(
        'name'=>'Науру',
        'code'=>'NR',
        'numb'=>'674'
        );
        $country_list[] = array(
        'name'=>'Непал',
        'code'=>'NP',
        'numb'=>'977'
        );
        $country_list[] = array(
        'name'=>'Нидерланды',
        'code'=>'NL',
        'numb'=>'31'
        );
        $country_list[] = array(
        'name'=>'Антильские Острова',
        'code'=>'AN',
        'numb'=>'599'
        );
        $country_list[] = array(
        'name'=>'Новая Каледония',
        'code'=>'NC',
        'numb'=>'687'
        );
        $country_list[] = array(
        'name'=>'Новая Зеландия',
        'code'=>'NZ',
        'numb'=>'64'
        );
        $country_list[] = array(
        'name'=>'Никарагуа',
        'code'=>'NI',
        'numb'=>'505'
        );
        $country_list[] = array(
        'name'=>'Нигер',
        'code'=>'NE',
        'numb'=>'227'
        );
        $country_list[] = array(
        'name'=>'Нигерия',
        'code'=>'NG',
        'numb'=>'234'
        );
        $country_list[] = array(
        'name'=>'Норфолк',
        'code'=>'NF',
        'numb'=>'672'
        );
        $country_list[] = array(
        'name'=>'Корея (Северная)',
        'code'=>'KP',
        'numb'=>'850'
        );
        $country_list[] = array(
        'name'=>'Норвегия',
        'code'=>'NO',
        'numb'=>'47'
        );
        $country_list[] = array(
        'name'=>'Оман',
        'code'=>'OM',
        'numb'=>'968'
        );
        $country_list[] = array(
        'name'=>'Пакистан',
        'code'=>'PK',
        'numb'=>'92'
        );
        $country_list[] = array(
        'name'=>'Палау',
        'code'=>'PW',
        'numb'=>'680'
        );
        $country_list[] = array(
        'name'=>'Панама',
        'code'=>'PA',
        'numb'=>'507'
        );
        $country_list[] = array(
        'name'=>'Папуа — Новая Гвинея',
        'code'=>'PG',
        'numb'=>'675'
        );
        $country_list[] = array(
        'name'=>'Парагвай',
        'code'=>'PY',
        'numb'=>'595'
        );
        $country_list[] = array(
        'name'=>'Перу',
        'code'=>'PE',
        'numb'=>'51'
        );
        $country_list[] = array(
        'name'=>'Филиппины',
        'code'=>'PH',
        'numb'=>'63'
        );
        $country_list[] = array(
        'name'=>'Польша',
        'code'=>'PL',
        'numb'=>'48'
        );
        $country_list[] = array(
        'name'=>'Португалия',
        'code'=>'PT',
        'numb'=>'351'
        );
        $country_list[] = array(
        'name'=>'Пуэрто-Рико',
        'code'=>'PR',
        'numb'=>'1787'
        );
        $country_list[] = array(
        'name'=>'Катар',
        'code'=>'QA',
        'numb'=>'974'
        );
        $country_list[] = array(
        'name'=>'Реюньон',
        'code'=>'RE',
        'numb'=>'262'
        );
        $country_list[] = array(
        'name'=>'Румыния',
        'code'=>'RO',
        'numb'=>'40'
        );
        $country_list[] = array(
        'name'=>'Россия',
        'code'=>'RU',
        'numb'=>'7'
        );
        $country_list[] = array(
        'name'=>'Руанда',
        'code'=>'RW',
        'numb'=>'250'
        );
        $country_list[] = array(
        'name'=>'Остров Святой Елены',
        'code'=>'SH',
        'numb'=>'1758'
        );
        $country_list[] = array(
        'name'=>'Сент-Люсия',
        'code'=>'LC',
        'numb'=>'1784'
        );
        $country_list[] = array(
        'name'=>'Самоа',
        'code'=>'WS',
        'numb'=>'685'
        );
        $country_list[] = array(
        'name'=>'Сан-Марино',
        'code'=>'SM',
        'numb'=>'378'
        );
        $country_list[] = array(
        'name'=>'Саудовская Аравия',
        'code'=>'SA',
        'numb'=>'966'
        );
        $country_list[] = array(
        'name'=>'Сенегал',
        'code'=>'SN',
        'numb'=>'221'
        );
        $country_list[] = array(
        'name'=>'Сейшельские острова',
        'code'=>'SC',
        'numb'=>'248'
        );
        $country_list[] = array(
        'name'=>'Сьерра-Леоне',
        'code'=>'SL',
        'numb'=>'232'
        );
        $country_list[] = array(
        'name'=>'Сингапур',
        'code'=>'SG',
        'numb'=>'65'
        );
        $country_list[] = array(
        'name'=>'Словакия',
        'code'=>'SK',
        'numb'=>'421'
        );
        $country_list[] = array(
        'name'=>'Словения',
        'code'=>'SI',
        'numb'=>'386'
        );
        $country_list[] = array(
        'name'=>'Соломоновы Острова',
        'code'=>'SB',
        'numb'=>'677'
        );
        $country_list[] = array(
        'name'=>'Сомали',
        'code'=>'SO',
        'numb'=>'252'
        );
        $country_list[] = array(
        'name'=>'Южно-Африканская Республика',
        'code'=>'ZA',
        'numb'=>'27'
        );
        $country_list[] = array(
        'name'=>'Корея (Южная)',
        'code'=>'KR',
        'numb'=>'82'
        );
        $country_list[] = array(
        'name'=>'Испания',
        'code'=>'ES',
        'numb'=>'34'
        );
        $country_list[] = array(
        'name'=>'Шри-Ланка',
        'code'=>'LK',
        'numb'=>'94'
        );
        $country_list[] = array(
        'name'=>'Судан',
        'code'=>'SD',
        'numb'=>'249'
        );
        $country_list[] = array(
        'name'=>'Суринам',
        'code'=>'SR',
        'numb'=>'597'
        );
        $country_list[] = array(
        'name'=>'Свазиленд',
        'code'=>'SZ',
        'numb'=>'268'
        );
        $country_list[] = array(
        'name'=>'Швеция',
        'code'=>'SE',
        'numb'=>'46'
        );
        $country_list[] = array(
        'name'=>'Швейцария',
        'code'=>'CH',
        'numb'=>'41'
        );
        $country_list[] = array(
        'name'=>'Сирия',
        'code'=>'SY',
        'numb'=>'963'
        );
        $country_list[] = array(
        'name'=>'Таджикистан',
        'code'=>'TJ',
        'numb'=>'992'
        );
        $country_list[] = array(
        'name'=>'Тайвань',
        'code'=>'TW',
        'numb'=>'886'
        );
        $country_list[] = array(
        'name'=>'Танзания',
        'code'=>'TZ',
        'numb'=>'255'
        );
        $country_list[] = array(
        'name'=>'Таиланд',
        'code'=>'TH',
        'numb'=>'66'
        );
        $country_list[] = array(
        'name'=>'Того',
        'code'=>'TG',
        'numb'=>'228'
        );
        $country_list[] = array(
        'name'=>'Тонга',
        'code'=>'TO',
        'numb'=>'676'
        );
        $country_list[] = array(
        'name'=>'Тринидад и Тобаго',
        'code'=>'TT',
        'numb'=>'1868'
        );
        $country_list[] = array(
        'name'=>'Тунис',
        'code'=>'TN',
        'numb'=>'216'
        );
        $country_list[] = array(
        'name'=>'Турция',
        'code'=>'TR',
        'numb'=>'90'
        );
        $country_list[] = array(
        'name'=>'Туркменистан',
        'code'=>'TM',
        'numb'=>'993'
        );
        $country_list[] = array(
        'name'=>'Уганда',
        'code'=>'UG',
        'numb'=>'256'
        );
        $country_list[] = array(
        'name'=>'Украина',
        'code'=>'UA',
        'numb'=>'380'
        );
        $country_list[] = array(
        'name'=>'Объединенные Арабские Эмираты',
        'code'=>'AE',
        'numb'=>'971'
        );
        $country_list[] = array(
        'name'=>'Великобритания',
        'code'=>'GB',
        'numb'=>'44'
        );
        $country_list[] = array(
        'name'=>'Соединенные Штаты Америки',
        'code'=>'US',
        'numb'=>'1'
        );
        $country_list[] = array(
        'name'=>'Уругвай',
        'code'=>'UY',
        'numb'=>'598'
        );
        $country_list[] = array(
        'name'=>'Узбекистан',
        'code'=>'UZ',
        'numb'=>'998'
        );
        $country_list[] = array(
        'name'=>'Вануату',
        'code'=>'VU',
        'numb'=>'678'
        );
        $country_list[] = array(
        'name'=>'Ватикан',
        'code'=>'VA',
        'numb'=>'39'
        );
        $country_list[] = array(
        'name'=>'Венесуэла',
        'code'=>'VE',
        'numb'=>'58'
        );
        $country_list[] = array(
        'name'=>'Вьетнам',
        'code'=>'VN',
        'numb'=>'84'
        );
        $country_list[] = array(
        'name'=>'Виргинские Острова (Британские)',
        'code'=>'VG',
        'numb'=>'1284'
        );
        $country_list[] = array(
        'name'=>'Виргинские Острова (США)',
        'code'=>'VI',
        'numb'=>'1340'
        );
        $country_list[] = array(
        'name'=>'Йемен',
        'code'=>'YE',
        'numb'=>'967'
        );
        $country_list[] = array(
        'name'=>'Замбия',
        'code'=>'ZM',
        'numb'=>'260'
        );
        $country_list[] = array(
        'name'=>'Зимбабве',
        'code'=>'ZW',
        'numb'=>'263'
        );
        $country_list[] = array(
        'name'=>'Сербия',
        'code'=>'RS',
        'numb'=>'381'
        );
        $country_list[] = array(
        'name'=>'Черногория',
        'code'=>'ME',
        'numb'=>'382'
        );
        $country_list[] = array(
        'name'=>'Сент-Винсент и Гренадины',
        'code'=>'VC',
        'numb'=>'1869'
        );
        $country_list[] = array(
        'name'=>'Кот-д&#8242;Ивуар',
        'code'=>'CI',
        'numb'=>'225'
        );
        $country_list[] = array(
        'name'=>'Палестина',
        'code'=>'PS',
        'numb'=>'970'
        );
        $country_list[] = array(
        'name'=>'Антигуа и Барбуда',
        'code'=>'AG',
        'numb'=>'1268'
        );
        $country_list[] = array(
        'name'=>'Южный Судан',
        'code'=>'SS',
        'numb'=>'211'
        );
        $country_list[] = array(
        'name'=>'Французская Полинезия',
        'code'=>'PF',
        'numb'=>'689'
        );

        $countries=array();
        foreach($country_list as $c){
            $countries[$c['code']] = $c;
        }
        ksort($countries);
        return $countries;
    }

}