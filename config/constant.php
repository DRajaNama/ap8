<?php

//https://github.com/msonowal/laraxchange
//https://packagist.org/packages/torann/geoip

return [
    'weightage' => [1 => 'Gm',2 => 'Kg', 3 => 'Mg', 4 => 'GAL',5=>'ML',6=>'Ltr',7=>'KL',8=>'Dz'],
    'weightageList' => [1 => 'Grams',2 => 'kilograms', 3 => 'Tonnes (Megagram)', 4 => 'Gallons', 5 => 'Millilitres',6=>'litres',7=>'kilolitres',8=>'Dozen'],
    'quote_status' => [0 => 'Pending', 1 => 'Accept', 2 => 'Declined', 3 => 'Quotation Sent To Buyer', 4 => 'Re-Quote', 5 => 'Accept By Buyer',6 => 'Decline By Buyer', 7 => 'Confirm Quote'],
    'order_status' => [0 => 'Pending', 1 => 'Processing', 2 =>  'Canceled', 3 => 'Processed', 4 => 'Complete', /*5 => 'Shipped',*/ 6 => 'Confirmed Order', 7 => 'Decline Order'],
    'plan_features'=>['max_file_size'=>'Total Storage','max_product_size'=>'Max Product Uploads'],
    'package_features'=>[
        'heighest_in_search'=>'Appear <strong>highest</strong> in search results',
        'weekly_email_with_hint'=>'Weekly email with <strong>stats, hints &amp; tips</strong>',
    'top_of_Category'=>'Be on top of your category for <strong>30 days</strong>',
    'virtual_phone_number_for_added'=>'Virtual phone no# for added <strong>security</strong>'
    ],
    'subscription_plans'=>['plan_F6HZvHPSavLHvd'=>'Gold','plan_F6HaeNrDnfSSWK'=>'Silver','plan_F6HbE7gAm9DrVf'=>'Free'],
    'stripe_action' => [1 => 'CREATE AN ACCOUNT',2 => 'CREATE A BANK ACCOUNT', 3 => 'CREATE A PERSON (account_opener)', 4 => 'CREATE A PERSON (owner)', 5 => 'CREATE A PERSON (director)', 6=> 'Verification Document', 7 => 'CREATE A CUSTOMER'],
    'referral' => ['Google' => 'Google', 'Social Media' => 'Social Media', 'Word of Mouth' => 'Word of Mouth', 'Advertisement' => 'Advertisement', 'Referral' => 'Referral', 'Other' => 'Other'],
    'organization_type' => [1 => 'Company', 2 => 'Hotel', 3 => 'School', 4 => 'Hospital', 5 => 'Sole Trader', 6 => 'Association / Body Corporate', 7 => 'Other'],
];
