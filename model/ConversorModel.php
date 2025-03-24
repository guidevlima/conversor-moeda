<?php

class ConversorModel {
    public function converter($valor, $moeda) {
        $url = "https://api.apilayer.com/currency_data/live?source=BRL&currencies=$moeda";

        $headers = [
            "apikey: WszbBqgqMDvud7oj7yY7iECgxc1xB3Oi"
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_TIMEOUT => 10
        ]);

        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);
        $chave = "BRL" . $moeda;

        if (isset($data['quotes'][$chave])) {
            $cotacao = $data['quotes'][$chave];
            $convertido = $valor * $cotacao;
            return [
                'original' => $valor,
                'moeda' => $moeda,
                'convertido' => $convertido,
                'cotacao' => $cotacao,
                'sucesso' => true
            ];
        } else {
            return ['sucesso' => false];
        }
    }
}
