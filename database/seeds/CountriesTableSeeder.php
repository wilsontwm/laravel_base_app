<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('country_code' => 'AF','name' => 'Afghanistan','currency' => 'AFN'),
            array('country_code' => 'AL','name' => 'Albania','currency' => 'ALL'),
            array('country_code' => 'DZ','name' => 'Algeria','currency' => 'DZD'),
            array('country_code' => 'AS','name' => 'American Samoa','currency' => 'USD'),
            array('country_code' => 'AD','name' => 'Andorra','currency' => 'EUR'),
            array('country_code' => 'AO','name' => 'Angola','currency' => 'AOA'),
            array('country_code' => 'AI','name' => 'Anguilla','currency' => 'XCD'),
            array('country_code' => 'AQ','name' => 'Antarctica','currency' => ''),
            array('country_code' => 'AG','name' => 'Antigua and Barbuda','currency' => 'XCD'),
            array('country_code' => 'AR','name' => 'Argentina','currency' => 'ARS'),
            array('country_code' => 'AM','name' => 'Armenia','currency' => 'AMD'),
            array('country_code' => 'AW','name' => 'Aruba','currency' => 'AWG'),
            array('country_code' => 'AU','name' => 'Australia','currency' => 'AUD'),
            array('country_code' => 'AT','name' => 'Austria','currency' => 'EUR'),
            array('country_code' => 'AZ','name' => 'Azerbaijan','currency' => 'AZN'),
            array('country_code' => 'BS','name' => 'Bahamas','currency' => 'BSD'),
            array('country_code' => 'BH','name' => 'Bahrain','currency' => 'BHD'),
            array('country_code' => 'BD','name' => 'Bangladesh','currency' => 'BDT'),
            array('country_code' => 'BB','name' => 'Barbados','currency' => 'BBD'),
            array('country_code' => 'BY','name' => 'Belarus','currency' => 'BYR'),
            array('country_code' => 'BE','name' => 'Belgium','currency' => 'EUR'),
            array('country_code' => 'BZ','name' => 'Belize','currency' => 'BZD'),
            array('country_code' => 'BJ','name' => 'Benin','currency' => 'XOF'),
            array('country_code' => 'BM','name' => 'Bermuda','currency' => 'BMD'),
            array('country_code' => 'BT','name' => 'Bhutan','currency' => 'BTN'),
            array('country_code' => 'BO','name' => 'Bolivia','currency' => 'BOB'),
            array('country_code' => 'BA','name' => 'Bosnia and Herzegovina','currency' => 'BAM'),
            array('country_code' => 'BW','name' => 'Botswana','currency' => 'BWP'),
            array('country_code' => 'BV','name' => 'Bouvet Island','currency' => 'NOK'),
            array('country_code' => 'BR','name' => 'Brazil','currency' => 'BRL'),
            array('country_code' => 'IO','name' => 'British Indian Ocean Territory','currency' => 'USD'),
            array('country_code' => 'BN','name' => 'Brunei Darussalam','currency' => 'BND'),
            array('country_code' => 'BG','name' => 'Bulgaria','currency' => 'BGN'),
            array('country_code' => 'BF','name' => 'Burkina Faso','currency' => 'XOF'),
            array('country_code' => 'BI','name' => 'Burundi','currency' => 'BIF'),
            array('country_code' => 'KH','name' => 'Cambodia','currency' => 'KHR'),
            array('country_code' => 'CM','name' => 'Cameroon','currency' => 'XAF'),
            array('country_code' => 'CA','name' => 'Canada','currency' => 'CAD'),
            array('country_code' => 'CV','name' => 'Cape Verde','currency' => 'CVE'),
            array('country_code' => 'KY','name' => 'Cayman Islands','currency' => 'KYD'),
            array('country_code' => 'CF','name' => 'Central African Republic','currency' => 'XAF'),
            array('country_code' => 'TD','name' => 'Chad','currency' => 'XAF'),
            array('country_code' => 'CL','name' => 'Chile','currency' => 'CLP'),
            array('country_code' => 'CN','name' => 'China','currency' => 'CNY'),
            array('country_code' => 'CX','name' => 'Christmas Island','currency' => 'AUD'),
            array('country_code' => 'CC','name' => 'Cocos (Keeling) Islands','currency' => 'AUD'),
            array('country_code' => 'CO','name' => 'Colombia','currency' => 'COP'),
            array('country_code' => 'KM','name' => 'Comoros','currency' => 'KMF'),
            array('country_code' => 'CG','name' => 'Congo','currency' => 'XAF'),
            array('country_code' => 'CD','name' => 'Congo, The Democratic Republic of the','currency' => 'CDF'),
            array('country_code' => 'CK','name' => 'Cook Islands','currency' => 'NZD'),
            array('country_code' => 'CR','name' => 'Costa Rica','currency' => 'CRC'),
            array('country_code' => 'CI','name' => utf8_encode('C�te D\'Ivoire'),'currency' => 'XOF'),
            array('country_code' => 'HR','name' => 'Croatia','currency' => 'HRK'),
            array('country_code' => 'CU','name' => 'Cuba','currency' => 'CUP'),
            array('country_code' => 'CY','name' => 'Cyprus','currency' => 'CYP'),
            array('country_code' => 'CZ','name' => 'Czech Republic','currency' => 'CZK'),
            array('country_code' => 'DK','name' => 'Denmark','currency' => 'DKK'),
            array('country_code' => 'DJ','name' => 'Djibouti','currency' => 'DJF'),
            array('country_code' => 'DM','name' => 'Dominica','currency' => 'XCD'),
            array('country_code' => 'DO','name' => 'Dominican Republic','currency' => 'DOP'),
            array('country_code' => 'EC','name' => 'Ecuador','currency' => 'USD'),
            array('country_code' => 'EG','name' => 'Egypt','currency' => 'EGP'),
            array('country_code' => 'SV','name' => 'El Salvador','currency' => 'SVC'),
            array('country_code' => 'GQ','name' => 'Equatorial Guinea','currency' => 'XAF'),
            array('country_code' => 'ER','name' => 'Eritrea','currency' => 'ERN'),
            array('country_code' => 'EE','name' => 'Estonia','currency' => 'EEK'),
            array('country_code' => 'ET','name' => 'Ethiopia','currency' => 'ETB'),
            array('country_code' => 'FK','name' => 'Falkland Islands (Malvinas)','currency' => 'FKP'),
            array('country_code' => 'FO','name' => 'Faroe Islands','currency' => 'DKK'),
            array('country_code' => 'FJ','name' => 'Fiji','currency' => 'FJD'),
            array('country_code' => 'FI','name' => 'Finland','currency' => 'EUR'),
            array('country_code' => 'FR','name' => 'France','currency' => 'EUR'),
            array('country_code' => 'GF','name' => 'French Guiana','currency' => 'EUR'),
            array('country_code' => 'PF','name' => 'French Polynesia','currency' => 'XPF'),
            array('country_code' => 'TF','name' => 'French Southern Territories','currency' => 'EUR'),
            array('country_code' => 'GA','name' => 'Gabon','currency' => 'XAF'),
            array('country_code' => 'GM','name' => 'Gambia','currency' => 'GMD'),
            array('country_code' => 'GE','name' => 'Georgia','currency' => 'GEL'),
            array('country_code' => 'DE','name' => 'Germany','currency' => 'EUR'),
            array('country_code' => 'GH','name' => 'Ghana','currency' => 'GHC'),
            array('country_code' => 'GI','name' => 'Gibraltar','currency' => 'GIP'),
            array('country_code' => 'GR','name' => 'Greece','currency' => 'EUR'),
            array('country_code' => 'GL','name' => 'Greenland','currency' => 'DKK'),
            array('country_code' => 'GD','name' => 'Grenada','currency' => 'XCD'),
            array('country_code' => 'GP','name' => 'Guadeloupe','currency' => 'EUR'),
            array('country_code' => 'GU','name' => 'Guam','currency' => 'USD'),
            array('country_code' => 'GT','name' => 'Guatemala','currency' => 'GTQ'),
            array('country_code' => 'GG','name' => 'Guernsey','currency' => ''),
            array('country_code' => 'GN','name' => 'Guinea','currency' => 'GNF'),
            array('country_code' => 'GW','name' => 'Guinea-Bissau','currency' => 'XOF'),
            array('country_code' => 'GY','name' => 'Guyana','currency' => 'GYD'),
            array('country_code' => 'HT','name' => 'Haiti','currency' => 'HTG'),
            array('country_code' => 'HM','name' => 'Heard Island and McDonald Islands','currency' => 'AUD'),
            array('country_code' => 'VA','name' => 'Holy See (Vatican City State)','currency' => 'EUR'),
            array('country_code' => 'HN','name' => 'Honduras','currency' => 'HNL'),
            array('country_code' => 'HK','name' => 'Hong Kong','currency' => 'HKD'),
            array('country_code' => 'HU','name' => 'Hungary','currency' => 'HUF'),
            array('country_code' => 'IS','name' => 'Iceland','currency' => 'ISK'),
            array('country_code' => 'IN','name' => 'India','currency' => 'INR'),
            array('country_code' => 'ID','name' => 'Indonesia','currency' => 'IDR'),
            array('country_code' => 'IR','name' => 'Iran, Islamic Republic of','currency' => 'IRR'),
            array('country_code' => 'IQ','name' => 'Iraq','currency' => 'IQD'),
            array('country_code' => 'IE','name' => 'Ireland','currency' => 'EUR'),
            array('country_code' => 'IM','name' => 'Isle of Man','currency' => ''),
            array('country_code' => 'IL','name' => 'Israel','currency' => 'ILS'),
            array('country_code' => 'IT','name' => 'Italy','currency' => 'EUR'),
            array('country_code' => 'JM','name' => 'Jamaica','currency' => 'JMD'),
            array('country_code' => 'JP','name' => 'Japan','currency' => 'JPY'),
            array('country_code' => 'JE','name' => 'Jersey','currency' => ''),
            array('country_code' => 'JO','name' => 'Jordan','currency' => 'JOD'),
            array('country_code' => 'KZ','name' => 'Kazakhstan','currency' => 'KZT'),
            array('country_code' => 'KE','name' => 'Kenya','currency' => 'KES'),
            array('country_code' => 'KI','name' => 'Kiribati','currency' => 'AUD'),
            array('country_code' => 'KP','name' => 'Korea, Democratic People\'s Republic of','currency' => 'KPW'),
            array('country_code' => 'KR','name' => 'Korea, Republic of','currency' => 'KRW'),
            array('country_code' => 'KW','name' => 'Kuwait','currency' => 'KWD'),
            array('country_code' => 'KG','name' => 'Kyrgyzstan','currency' => 'KGS'),
            array('country_code' => 'LA','name' => 'Lao People\'s Democratic Republic','currency' => 'LAK'),
            array('country_code' => 'LV','name' => 'Latvia','currency' => 'LVL'),
            array('country_code' => 'LB','name' => 'Lebanon','currency' => 'LBP'),
            array('country_code' => 'LS','name' => 'Lesotho','currency' => 'LSL'),
            array('country_code' => 'LR','name' => 'Liberia','currency' => 'LRD'),
            array('country_code' => 'LY','name' => 'Libyan Arab Jamahiriya','currency' => 'LYD'),
            array('country_code' => 'LI','name' => 'Liechtenstein','currency' => 'CHF'),
            array('country_code' => 'LT','name' => 'Lithuania','currency' => 'LTL'),
            array('country_code' => 'LU','name' => 'Luxembourg','currency' => 'EUR'),
            array('country_code' => 'MO','name' => 'Macao','currency' => 'MOP'),
            array('country_code' => 'MK','name' => 'Macedonia, The Former Yugoslav Republic of','currency' => 'MKD'),
            array('country_code' => 'MG','name' => 'Madagascar','currency' => 'MGA'),
            array('country_code' => 'MW','name' => 'Malawi','currency' => 'MWK'),
            array('country_code' => 'MY','name' => 'Malaysia','currency' => 'MYR'),
            array('country_code' => 'MV','name' => 'Maldives','currency' => 'MVR'),
            array('country_code' => 'ML','name' => 'Mali','currency' => 'XOF'),
            array('country_code' => 'MT','name' => 'Malta','currency' => 'MTL'),
            array('country_code' => 'MH','name' => 'Marshall Islands','currency' => 'USD'),
            array('country_code' => 'MQ','name' => 'Martinique','currency' => 'EUR'),
            array('country_code' => 'MR','name' => 'Mauritania','currency' => 'MRO'),
            array('country_code' => 'MU','name' => 'Mauritius','currency' => 'MUR'),
            array('country_code' => 'YT','name' => 'Mayotte','currency' => 'EUR'),
            array('country_code' => 'MX','name' => 'Mexico','currency' => 'MXN'),
            array('country_code' => 'FM','name' => 'Micronesia, Federated States of','currency' => 'USD'),
            array('country_code' => 'MD','name' => 'Moldova, Republic of','currency' => 'MDL'),
            array('country_code' => 'MC','name' => 'Monaco','currency' => 'EUR'),
            array('country_code' => 'MN','name' => 'Mongolia','currency' => 'MNT'),
            array('country_code' => 'ME','name' => 'Montenegro','currency' => ''),
            array('country_code' => 'MS','name' => 'Montserrat','currency' => 'XCD'),
            array('country_code' => 'MA','name' => 'Morocco','currency' => 'MAD'),
            array('country_code' => 'MZ','name' => 'Mozambique','currency' => 'MZN'),
            array('country_code' => 'MM','name' => 'Myanmar','currency' => 'MMK'),
            array('country_code' => 'NA','name' => 'Namibia','currency' => 'NAD'),
            array('country_code' => 'NR','name' => 'Nauru','currency' => 'AUD'),
            array('country_code' => 'NP','name' => 'Nepal','currency' => 'NPR'),
            array('country_code' => 'NL','name' => 'Netherlands','currency' => 'EUR'),
            array('country_code' => 'AN','name' => 'Netherlands Antilles','currency' => 'ANG'),
            array('country_code' => 'NC','name' => 'New Caledonia','currency' => 'XPF'),
            array('country_code' => 'NZ','name' => 'New Zealand','currency' => 'NZD'),
            array('country_code' => 'NI','name' => 'Nicaragua','currency' => 'NIO'),
            array('country_code' => 'NE','name' => 'Niger','currency' => 'XOF'),
            array('country_code' => 'NG','name' => 'Nigeria','currency' => 'NGN'),
            array('country_code' => 'NU','name' => 'Niue','currency' => 'NZD'),
            array('country_code' => 'NF','name' => 'Norfolk Island','currency' => 'AUD'),
            array('country_code' => 'MP','name' => 'Northern Mariana Islands','currency' => 'USD'),
            array('country_code' => 'NO','name' => 'Norway','currency' => 'NOK'),
            array('country_code' => 'OM','name' => 'Oman','currency' => 'OMR'),
            array('country_code' => 'PK','name' => 'Pakistan','currency' => 'PKR'),
            array('country_code' => 'PW','name' => 'Palau','currency' => 'USD'),
            array('country_code' => 'PS','name' => 'Palestinian Territory, Occupied','currency' => 'ILS'),
            array('country_code' => 'PA','name' => 'Panama','currency' => 'PAB'),
            array('country_code' => 'PG','name' => 'Papua New Guinea','currency' => 'PGK'),
            array('country_code' => 'PY','name' => 'Paraguay','currency' => 'PYG'),
            array('country_code' => 'PE','name' => 'Peru','currency' => 'PEN'),
            array('country_code' => 'PH','name' => 'Philippines','currency' => 'PHP'),
            array('country_code' => 'PN','name' => 'Pitcairn','currency' => 'NZD'),
            array('country_code' => 'PL','name' => 'Poland','currency' => 'PLN'),
            array('country_code' => 'PT','name' => 'Portugal','currency' => 'EUR'),
            array('country_code' => 'PR','name' => 'Puerto Rico','currency' => 'USD'),
            array('country_code' => 'QA','name' => 'Qatar','currency' => 'QAR'),
            array('country_code' => 'RE','name' => 'Reunion','currency' => 'EUR'),
            array('country_code' => 'RO','name' => 'Romania','currency' => 'RON'),
            array('country_code' => 'RU','name' => 'Russian Federation','currency' => 'RUB'),
            array('country_code' => 'RW','name' => 'Rwanda','currency' => 'RWF'),
            array('country_code' => 'BL','name' => utf8_encode('Saint Barth�lemy'),'currency' => ''),
            array('country_code' => 'SH','name' => 'Saint Helena','currency' => 'SHP'),
            array('country_code' => 'KN','name' => 'Saint Kitts and Nevis','currency' => 'XCD'),
            array('country_code' => 'LC','name' => 'Saint Lucia','currency' => 'XCD'),
            array('country_code' => 'MF','name' => 'Saint Martin','currency' => ''),
            array('country_code' => 'PM','name' => 'Saint Pierre and Miquelon','currency' => 'EUR'),
            array('country_code' => 'VC','name' => 'Saint Vincent and the Grenadines','currency' => 'XCD'),
            array('country_code' => 'WS','name' => 'Samoa','currency' => 'WST'),
            array('country_code' => 'SM','name' => 'San Marino','currency' => 'EUR'),
            array('country_code' => 'ST','name' => 'Sao Tome and Principe','currency' => 'STD'),
            array('country_code' => 'SA','name' => 'Saudi Arabia','currency' => 'SAR'),
            array('country_code' => 'SN','name' => 'Senegal','currency' => 'XOF'),
            array('country_code' => 'RS','name' => 'Serbia','currency' => ''),
            array('country_code' => 'SC','name' => 'Seychelles','currency' => 'SCR'),
            array('country_code' => 'SL','name' => 'Sierra Leone','currency' => 'SLL'),
            array('country_code' => 'SG','name' => 'Singapore','currency' => 'SGD'),
            array('country_code' => 'SK','name' => 'Slovakia','currency' => 'SKK'),
            array('country_code' => 'SI','name' => 'Slovenia','currency' => 'EUR'),
            array('country_code' => 'SB','name' => 'Solomon Islands','currency' => 'SBD'),
            array('country_code' => 'SO','name' => 'Somalia','currency' => 'SOS'),
            array('country_code' => 'ZA','name' => 'South Africa','currency' => 'ZAR'),
            array('country_code' => 'GS','name' => 'South Georgia and the South Sandwich Islands','currency' => 'GBP'),
            array('country_code' => 'ES','name' => 'Spain','currency' => 'EUR'),
            array('country_code' => 'LK','name' => 'Sri Lanka','currency' => 'LKR'),
            array('country_code' => 'SD','name' => 'Sudan','currency' => 'SDD'),
            array('country_code' => 'SR','name' => 'Suriname','currency' => 'SRD'),
            array('country_code' => 'SJ','name' => 'Svalbard and Jan Mayen','currency' => 'NOK'),
            array('country_code' => 'SZ','name' => 'Swaziland','currency' => 'SZL'),
            array('country_code' => 'SE','name' => 'Sweden','currency' => 'SEK'),
            array('country_code' => 'CH','name' => 'Switzerland','currency' => 'CHF'),
            array('country_code' => 'SY','name' => 'Syrian Arab Republic','currency' => 'SYP'),
            array('country_code' => 'TW','name' => 'Taiwan, Province Of China','currency' => 'TWD'),
            array('country_code' => 'TJ','name' => 'Tajikistan','currency' => 'TJS'),
            array('country_code' => 'TZ','name' => 'Tanzania, United Republic of','currency' => 'TZS'),
            array('country_code' => 'TH','name' => 'Thailand','currency' => 'THB'),
            array('country_code' => 'TL','name' => 'Timor-Leste','currency' => 'USD'),
            array('country_code' => 'TG','name' => 'Togo','currency' => 'XOF'),
            array('country_code' => 'TK','name' => 'Tokelau','currency' => 'NZD'),
            array('country_code' => 'TO','name' => 'Tonga','currency' => 'TOP'),
            array('country_code' => 'TT','name' => 'Trinidad and Tobago','currency' => 'TTD'),
            array('country_code' => 'TN','name' => 'Tunisia','currency' => 'TND'),
            array('country_code' => 'TR','name' => 'Turkey','currency' => 'TRY'),
            array('country_code' => 'TM','name' => 'Turkmenistan','currency' => 'TMM'),
            array('country_code' => 'TC','name' => 'Turks and Caicos Islands','currency' => 'USD'),
            array('country_code' => 'TV','name' => 'Tuvalu','currency' => 'AUD'),
            array('country_code' => 'UG','name' => 'Uganda','currency' => 'UGX'),
            array('country_code' => 'UA','name' => 'Ukraine','currency' => 'UAH'),
            array('country_code' => 'AE','name' => 'United Arab Emirates','currency' => 'AED'),
            array('country_code' => 'GB','name' => 'United Kingdom','currency' => 'GBP'),
            array('country_code' => 'US','name' => 'United States','currency' => 'USD'),
            array('country_code' => 'UM','name' => 'United States Minor Outlying Islands','currency' => 'USD'),
            array('country_code' => 'UY','name' => 'Uruguay','currency' => 'UYU'),
            array('country_code' => 'UZ','name' => 'Uzbekistan','currency' => 'UZS'),
            array('country_code' => 'VU','name' => 'Vanuatu','currency' => 'VUV'),
            array('country_code' => 'VE','name' => 'Venezuela','currency' => 'VEF'),
            array('country_code' => 'VN','name' => 'Viet Nam','currency' => 'VND'),
            array('country_code' => 'VG','name' => 'Virgin Islands, British','currency' => 'USD'),
            array('country_code' => 'VI','name' => 'Virgin Islands, U.S.','currency' => 'USD'),
            array('country_code' => 'WF','name' => 'Wallis And Futuna','currency' => 'XPF'),
            array('country_code' => 'EH','name' => 'Western Sahara','currency' => 'MAD'),
            array('country_code' => 'YE','name' => 'Yemen','currency' => 'YER'),
            array('country_code' => 'ZM','name' => 'Zambia','currency' => 'ZMK'),
            array('country_code' => 'ZW','name' => 'Zimbabwe','currency' => 'ZWD')
        );

        foreach($countries as $country) {
            Country::create($country);
        }
    }
}