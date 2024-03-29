{!! view_render_event('bagisto.shop.checkout.shipping.method.before') !!}

<v-shipping-method ref="vShippingMethod">
    {{-- Shipping Method Shimmer Effect --}}
    <x-shop::shimmer.checkout.onepage.shipping-method/>
</v-shipping-method>

{!! view_render_event('bagisto.shop.checkout.shipping.method.after') !!}

@pushOnce('scripts')
    <script type="text/x-template" id="v-shipping-method-template">
        <div class="mt-[30px]">
            <template v-if="! isShowShippingMethod && isShippingMethodLoading">
                <!-- Shipping Method Shimmer Effect -->
                <x-shop::shimmer.checkout.onepage.shipping-method/>
            </template>

            <template v-if="isShowShippingMethod" @change="show">
                <x-shop::accordion>
                    <x-slot:header>
                        <div class="flex justify-between items-center">
                            <h2 class="text-[26px] font-medium max-sm:text-[20px]" @click="coba">
                                @lang('shop::app.checkout.onepage.shipping.shipping-method')
                            </h2>
                        </div>
                    </x-slot:header>

                    <x-slot:content>
                        <div v-if="jumlahObject > 0">
                        <div class="flex flex-wrap gap-[30px] mt-[30px]">
                           
                            <div
                                class="relative max-w-[218px] max-sm:max-w-full max-sm:flex-auto select-none"
                                v-for="shippingMethod in shippingMethods"
                            >

                                {!! view_render_event('bagisto.shop.checkout.shipping-method.before') !!}


                                <div v-for="rate in shippingMethod.rates" >
                                    <input 
                                        type="radio"
                                        name="shipping_method"
                                        :id="rate.method"
                                        :value="rate.method"
                                        class="hidden peer"
                                        @change="store(rate.method)"
                                    >

                                    <label 
                                        class="icon-radio-unselect absolute ltr:right-[20px] rtl:left-[20px] top-[20px] text-[24px] text-navyBlue peer-checked:icon-radio-select cursor-pointer"
                                        :for="rate.method"
                                    >
                                    </label>

                                    <label 
                                        class="block p-[20px] border border-[#E9E9E9] rounded-[12px] cursor-pointer"
                                        :for="rate.method"
                                    >
                                    <img v-if="shippingMethod.icon" :src="shippingMethod.icon" alt="Flat Rate Icon" class="your-image-styles" />
                                <span v-else class="text-[60px] text-navyBlue icon-flate-rate"></span>

                                        <p class="text-[25px] mt-[5px] font-semibold max-sm:text-[20px]">
                                            @{{ rate.base_formatted_price }}
                                        </p>
                                        
                                        <p class="text-[12px] mt-[10px] font-medium">
                                            <span class="font-medium">@{{ rate.method_title }}</span> - @{{ rate.method_description }}
                                        </p>
                                    </label>
                                </div>
                                </div>
                                
                                {!! view_render_event('bagisto.shop.checkout.shipping-method.after') !!}
                                
                            </div>
                        </div>
                        <div v-else>
                        <p>No shipping methods available. please select again</p>
                            <!-- You can customize this message according to your needs -->
                        </div>
                    </x-slot:content>
                </x-shop::accordion>
            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-shipping-method', {
            template: '#v-shipping-method-template',

            data() {
                return {
                    shippingMethods: [],

                    isShowShippingMethod: false,

                    isShippingMethodLoading: false,
                }
            }, 
            watch: {
                isShowShippingMethod(newValue) {
                if (newValue) {
                    this.show();
                }
                },
                jumlahObject(newValue) {
                if (newValue > 0) {
                   
                    console.log("jumlahObject is greater than 0!");
                }
                },
            },
            created() {
                
                
                
            },
            methods: {
                store(selectedShippingMethod) {
                    this.$parent.$refs.vCartSummary.canPlaceOrder = false;

                    this.$parent.$refs.vPaymentMethod.isShowPaymentMethod = false;

                    this.$parent.$refs.vPaymentMethod.isPaymentMethodLoading = true;

                    this.$axios.post("{{ route('shop.checkout.onepage.shipping_methods.store') }}", {    
                            shipping_method: selectedShippingMethod,
                        })
                        .then(response => {
                            this.$parent.getOrderSummary();

                            this.$parent.$refs.vPaymentMethod.payment_methods = response.data.payment_methods;
                                
                            this.$parent.$refs.vPaymentMethod.isShowPaymentMethod = true;

                            this.$parent.$refs.vPaymentMethod.isPaymentMethodLoading = false;
                        })
                        .catch(error => {});
                },
               show(){
                console.log(this.shippingMethods);
                this.jumlahObject = Object.keys(this.shippingMethods).length;

                console.log(this.jumlahObject); 


               }
                    
                
            },
        });
    </script>
@endPushOnce
