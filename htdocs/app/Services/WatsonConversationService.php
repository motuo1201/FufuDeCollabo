<?php
namespace App\Services;

/**
 * Watson Conversationの呼び出しに関するメソッド
 *
 * @author Enomoto Yousuke
 */
class WatsonConversationService {
    /**
     * 話しかけられた内容を元にWatson Conversationを呼び出し、その結果を返却する。
     * @param string $spokenWord
     * @param string $context
     * @return json
     * @throws Exception
     */
    public function sendRequest(string $spokenWord,string $context) {
        $url = 'https://gateway.watsonplatform.net/conversation/api/v1/workspaces/' . config('watson.workspace_id') . '/message?version=2018-02-16';
        $curl = curl_init($url); 
        $data = json_encode(['input'=>['text'=>$spokenWord,'context'=>$context]]);

        $options = [
              CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data),
              ],
              // https://console.ng.bluemix.net/ で取得可能
              CURLOPT_USERPWD => config('watson.user_name')  . ':' . config('watson.password'),
              CURLOPT_POST => true,
              CURLOPT_POSTFIELDS => $data,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_SSL_VERIFYPEER=>false
        ];

        curl_setopt_array($curl, $options);
        $jsonString = curl_exec($curl);
        if($jsonString === false){
            throw new Exception('Watson APIの呼び出しに失敗しました。コード:'. curl_error($curl));
        }
        return $jsonString;
    }

}
