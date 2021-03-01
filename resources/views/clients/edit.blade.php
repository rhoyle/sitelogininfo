<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Client Info
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('clients.update', $client->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $client->name) }}" />
                            @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="contact_number" class="block font-medium text-sm text-gray-700">Contact Number</label>
                            <input type="text" name="contact_number" id="contact_number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('contact_number', $client->contact_number) }}" />
                            @error('contact_number')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="cell_phone" class="block font-medium text-sm text-gray-700">Cell Phone</label>
                            <input type="text" name="cell_phone" id="cell_phone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('cell_phone', $client->cell_phone) }}" />
                            @error('cell_phone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="text_message" class="block font-medium text-sm text-gray-700">Message</label>
                            <input type="text" name="text_message" id="text_message" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('text_message', $client->text_message) }}" />
                            @error('text_message')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="street_address" class="block font-medium text-sm text-gray-700">Street Address</label>
                            <input type="text" name="street_address" id="street_address" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('street_address', $client->street_address) }}" />
                            @error('street_address')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="street_address_line_2" class="block font-medium text-sm text-gray-700">Street Address Line 2</label>
                            <input type="text" name="street_address_line_2" id="street_address_line_2" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('street_address_line_2', $client->street_address_line_2) }}" />
                            @error('street_address_line_2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="city" class="block font-medium text-sm text-gray-700">City</label>
                            <input type="text" name="city" id="city" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('city', $client->city) }}" />
                            @error('city')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="state" class="block font-medium text-sm text-gray-700">State</label>
                            <input type="text" name="state" id="state" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('state', $client->state) }}" />
                            @error('state')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="zip_code" class="block font-medium text-sm text-gray-700">Zip Code</label>
                            <input type="text" name="zip_code" id="zip_code" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('zip_code', $client->zip_code) }}" />
                            @error('zip_code')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a href="{{ route('clients.index') }}" class="mr-4 bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

