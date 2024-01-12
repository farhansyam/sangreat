{!! view_render_event('bagisto.shop.layout.footer.before') !!}

{{--
    The category repository is injected directly here because there is no way
    to retrieve it from the view composer, as this is an anonymous component.
--}}
@inject('themeCustomizationRepository', 'Webkul\Shop\Repositories\ThemeCustomizationRepository')

{{--
    This code needs to be refactored to reduce the amount of PHP in the Blade
    template as much as possible.
--}}
@php
$customization = $themeCustomizationRepository->findOneWhere([
'type' => 'footer_links',
'status' => 1,
'channel_id' => core()->getCurrentChannel()->id,
]);
@endphp

<footer class="mt-[36px] bg-lightOrange  max-sm:mt-[30px]" style="color:white;background-color:#5dbbbf">

    <div class="flex justify-between  px-[60px] py-[13px]" style="background-color:#42A3A7;">
        <p class="text-[14px] text-[#ffffff]">
            
        </p>
    </div>
</footer>

{!! view_render_event('bagisto.shop.layout.footer.after') !!}