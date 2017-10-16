<h1>Hello, World</h1>
<pre>
<?php

$entries = FrmEntry::getAll(['form_key' => '7i5d1'], '', '', true, true);

$token = getToken();

$jsonData = [
];

$formCache = [];

foreach ($entries as $entry) {
    $metas = $entry->metas;
    if (!isset($formCache[$entry->form_id])) {
        $formCache[$entry->form_id] = getFields(FrmField::get_all_for_form($entry->form_id));
    }

    $app = [
            'form_id' => $entry->id
    ];

    foreach ($metas as $key => $value) {
        $field = $formCache[$entry->form_id][$key];
        $app[$field['key']] = $value;
    }

    $jsonData[] = $app;
}

function getFields($formFields)
{
    $output = [];
    foreach ($formFields as $field) {
        $output[$field->id] = [
            'key' => $field->field_key,
            'name' => $field->name
        ];
    }

    return $output;
}

$ch = curl_init();

$headers = [
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer ' . $token
];

curl_setopt($ch, CURLOPT_URL, PORTAL_URL . 'import-submit-app');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));

$output = curl_exec($ch);

curl_close($ch);

echo $output;

function getToken() {
    // $token = get_transient('import_submit_your_app:token');

    $token = false;
    if (!$token) {
        $form = [
            'grant_type' => 'client_credentials',
            'client_id' => 4,
            'client_secret' => 'McBUAk55Z5Z1oyYBZx8qdWRD04IWXyCCa6bWefef',
        ];

        $headers = [
            'Accept: application/json',
            'Content-Type: application/json'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, PORTAL_URL . 'get-token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($form));

        if (!$output = curl_exec($ch)) {
            echo curl_error($ch);
        }

        curl_close($ch);

        $json = json_decode($output, true);

        $token = $json['access_token'];
        set_transient('import_submit_your_app:token',$token);
    }

    return $token;
}