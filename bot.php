<?php
echo "Hello RAN Demand Management";

curl -X POST \-H 'Content-Type:application/json' \-H 'Authorization: Bearer {yljVPwAACVbpoFQBCmMKwJlmk3Pe4J9pqqKOHGQ9WhRqiuEcM+J7A0VzgPDDxuuvfHMdyis34vIzWIXZ19poQVbQxTRQGTMfEAyxsCCzmMOE9WChL3EP42q8iNQLJPXe3HVEMO/wPn6JXALbxe2MSQdB04t89/1O/w1cDnyilFU=}' \...

curl -X GET \-H 'Authorization: Bearer {yljVPwAACVbpoFQBCmMKwJlmk3Pe4J9pqqKOHGQ9WhRqiuEcM+J7A0VzgPDDxuuvfHMdyis34vIzWIXZ19poQVbQxTRQGTMfEAyxsCCzmMOE9WChL3EP42q8iNQLJPXe3HVEMO/wPn6JXALbxe2MSQdB04t89/1O/w1cDnyilFU=}' \https://api.line.me/v1/oauth/verify

<?php$access_token = 'yljVPwAACVbpoFQBCmMKwJlmk3Pe4J9pqqKOHGQ9WhRqiuEcM+J7A0VzgPDDxuuvfHMdyis34vIzWIXZ19poQVbQxTRQGTMfEAyxsCCzmMOE9WChL3EP42q8iNQLJPXe3HVEMO/wPn6JXALbxe2MSQdB04t89/1O/w1cDnyilFU=';$url = 'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result;
