<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pioneers Compass') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-mapbox 
                        id="mapID"  
                        position="relative"
                        style="height: 500px; width: max;" 
                        :center="['long' => 0.1, 'lat' => 51]"
                        :navigationControls="true"
                        :interactive="true"
                        :draggable="true"
                        :markers="
                        [['long' => 0, 'lat' => 51,'description' => 'helloworld'], 
                        ['long' => 0.5, 'lat' => 51.4,'description' => 'another hello']]" />
            </div>
        </div>
    </div>
</x-app-layout>
