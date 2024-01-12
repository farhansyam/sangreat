<?php

namespace Webkul\Shop\Http\Controllers\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Event;
use Webkul\Customer\Repositories\CustomerAddressRepository;
use Webkul\Shop\Http\Requests\Customer\AddressRequest;
use Webkul\Shop\Http\Resources\AddressResource;

class AddressController extends APIController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected CustomerAddressRepository $customerAddressRepository)
    {
    }

    /**
     * Customer addresses.
     */
    public function index(): JsonResource
    {
        $customer = auth()->guard('customer')->user();

        return AddressResource::collection($customer->addresses);
    }

    /**
     * Create a new address for customer.
     */
    public function store(AddressRequest $request): JsonResource
    {
        $customer = auth()->guard('customer')->user();

        Event::dispatch('customer.addresses.create.before');
            
        $data = array_merge(request()->only([
            'company_name',
            'first_name',
            'last_name',
            'vat_id',
            'address1',
            'country',
            'state',
            'city',
            'provinsi',
            'postcode',
            'phone',
            'default_address'
        ]));

        if (isset($data['city'])) {
            $cityInfo = explode('-', $data['city'], 2);
            if (count($cityInfo) === 2) {
                $data['id_kota'] = $cityInfo[0]; // Mendapatkan city_id
                $data['city'] = $cityInfo[1];    // Mendapatkan city_name
            }
        }

        // Merge dengan data lainnya
        $data = array_merge($data, [
            'customer_id' => $customer->id,
            'address1' => implode(PHP_EOL, array_filter($request->input('address1'))),
            'address2' => implode(PHP_EOL, array_filter($request->input('address2', []))),
        ]);

        $customerAddress = $this->customerAddressRepository->create($data);

        Event::dispatch('customer.addresses.create.after', $customerAddress);

        return new JsonResource([
            'message' => trans('shop::app.customers.account.addresses.create-success'),
        ]);
    }
}
