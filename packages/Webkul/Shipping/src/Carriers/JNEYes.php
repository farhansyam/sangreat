<?php

namespace Webkul\Shipping\Carriers;

use Illuminate\Support\Facades\Http;
use Webkul\Checkout\Facades\Cart;
use Webkul\Checkout\Models\CartShippingRate;

class JNEYes extends AbstractShipping
{
    /**
     * Shipping method carrier code.
     *
     * @var string
     */
    protected $code = 'jneyes';

    /**
     * Shipping method code.
     *
     * @var string
     */
    protected $method = 'jneyes_jneyes';

    /**
     * Calculate rate for flatrate.
     *
     * @return \Webkul\Checkout\Models\CartShippingRate|false
     */
    public function calculate()
    {
        if (! $this->isAvailable()) {
            return false;
        }

        return $this->getRate();
    }

    /**
     * Get rate.
     *
     * @return \Webkul\Checkout\Models\CartShippingRate
     */
    public function getRate(): \Webkul\Checkout\Models\CartShippingRate | false
    {
        $cart = Cart::getCart();

        $cartShippingRate = new CartShippingRate;

        $citys = Http::withOptions(['verify' => false,])->withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
            ])->get('https://api.rajaongkir.com/starter/city')
            ->json()['rajaongkir']['results'];
        foreach($citys as $city){
            if($city['city_name'] == ucwords(strtolower(trim($cart->billing_address['city'])))){
                $city_id = $city['city_id'];
            }
        }
        $response = Http::withOptions(['verify' => false,])->withHeaders([
                'key' => env('RAJAONGKIR_API_KEY')
            ])->post('https://api.rajaongkir.com/starter/cost',[
                'origin'        => env('RAJAONGKIR_ORIGIN_CODE', 12),
                'destination'   => $city_id,
                'weight'        => $cart->all_items[0]['weight'],
                'courier'       => 'jne',
            ])
        ->json()['rajaongkir']['results'][0]['costs'];
        if(array_key_exists(3,$response)){
            $cartShippingRate->carrier_title = 'JNE '.$response[3]['service'];
            $cartShippingRate->method = $this->getMethod();
            $cartShippingRate->method_title = 'JNE '.$response[3]['service'];
            $cartShippingRate->method_description = $response[3]['description'];
            $cartShippingRate->price = $response[3]['cost'][0]['value'];
            $cartShippingRate->base_price = $response[3]['cost'][0]['value'];
            return $cartShippingRate;
        }else{
            return false;
        }
    }
}