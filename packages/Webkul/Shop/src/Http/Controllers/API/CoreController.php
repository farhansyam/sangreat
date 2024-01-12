<?php

namespace Webkul\Shop\Http\Controllers\API;

use Illuminate\Support\Facades\Http;
use Webkul\Shop\Http\Controllers\API\APIController;

class CoreController extends APIController
{
    /**
     * Get countries.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCountries()
    {
        return response()->json([
            'data' => core()->countries()->map(fn ($country) => [
                'id'   => $country->id,
                'code' => $country->code,
                'name' => $country->name,
            ]),
        ]);
    }

    /**
     * Get states.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStates()
    {
        return response()->json([
            'data' => core()->groupedStatesByCountries(),
        ]);
    }
    public function getProvinsi()
    {
        $apiKey = '00b720e4ba6e99a8fd70f546caebd7a0';
        $baseUrl = 'https://api.rajaongkir.com/starter';

        $response = Http::withOptions([
            'verify' => false, // This bypasses SSL verification
        ])->get("{$baseUrl}/province", [
            'key' => $apiKey,
        ]);

        if ($response->successful()) {
            $provinsi = $response->json()['rajaongkir']['results'];
            return response()->json(['provinsi' => $provinsi]);
        }

        return response()->json(['message' => 'Gagal mendapatkan data provinsi'], $response->status());
    }

    public function getKota()
    {   
        $provinceId = $_GET['province_id'];
        $apiKey = '00b720e4ba6e99a8fd70f546caebd7a0';
        $baseUrl = 'https://api.rajaongkir.com/starter';

        $response = Http::withOptions([
            'verify' => false, // This bypasses SSL verification
        ])->get("{$baseUrl}/city", [
            'key' => $apiKey,
            'province' => $provinceId, // Add province_id as a parameter
        ]);

        if ($response->successful()) {
            $kota = $response->json()['rajaongkir']['results'];
            return response()->json(['kota' => $kota]);
        }

        return response()->json(['message' => 'Gagal mendapatkan data kota'], $response->status());
    }


    public function getCost()
    {
        $id_city = $_GET['id_city'];
        $apiKey = '00b720e4ba6e99a8fd70f546caebd7a0'; // Ganti dengan API key Anda
        $baseUrl = 'https://api.rajaongkir.com/starter';

        $response = Http::withHeaders([
            'key' => $apiKey,
        ])->withOptions([
            'verify' => false, // This bypasses SSL verification
        ])->post("{$baseUrl}/cost", [
            'origin' => '501', // Ganti dengan ID kota asal yang sesuai
            'destination' => $id_city, // Gunakan parameter ID kota yang diberikan
            'weight' => 500, // Isi dengan berat paket yang sesuai
            'courier' => 'jne', // Ganti dengan kurir yang diinginkan
            'key' => $apiKey, // Ganti dengan kurir yang diinginkan
        ]);

        if ($response->successful()) {
            $costs = $response->json()['rajaongkir']['results'];
            return response()->json(['cost' => $costs]);
        }

        return response()->json(['message' => 'Gagal mendapatkan biaya pengiriman'], $response->status());
    }
}
