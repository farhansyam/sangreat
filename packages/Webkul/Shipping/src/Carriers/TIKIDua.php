<?php

namespace Webkul\Shipping\Carriers;

use Illuminate\Support\Facades\Http;
use Webkul\Checkout\Facades\Cart;
use Webkul\Checkout\Models\CartShippingRate;

class TIKIDua extends AbstractShipping
{
    /**
     * Shipping method carrier code.
     *
     * @var string
     */
    protected $code = 'tikidua';

    /**
     * Shipping method code.
     *
     * @var string
     */
    protected $method = 'tikidua_tikidua';

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

        $cartShippingRate->carrier = $this->getCode();
       
        $response = Http::withOptions(['verify' => false,])->withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin'        => env('RAJAONGKIR_ORIGIN_CODE', 12),
            'destination'   => $cart->billing_address->city_id,
            'weight'        => $cart->all_items[0]['weight'],
            'courier'       => 'tiki',
        ])
        ->json()['rajaongkir']['results'][0]['costs'];
        if(array_key_exists(1,$response)){
            $cartShippingRate->carrier_title = 'TIKI '.$response[1]['service'];
            $cartShippingRate->method = $this->getMethod();
            $cartShippingRate->method_title = 'TIKI '.$response[1]['service'];
            $cartShippingRate->method_description = $response[1]['description'];
            $cartShippingRate->price = $response[1]['cost'][0]['value'];
            $cartShippingRate->base_price = $response[1]['cost'][0]['value'];
            return $cartShippingRate;
        }else{
            return false;
        }
    }
}
