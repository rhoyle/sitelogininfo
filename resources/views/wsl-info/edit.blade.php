<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Site Login Info
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('wsl-infos.update', $wsl_info->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="site_name" class="block font-medium text-sm text-gray-700">Site Name</label>
                            <input type="text" name="site_name" id="site_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('site_name', $wsl_info->site_name) }}" />
                            @error('site_name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_name" class="block font-medium text-sm text-gray-700">User Name</label>
                            <input type="text" name="user_name" id="user_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('user_name', $wsl_info->user_name) }}" />
                            @error('user_name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="users_email" class="block font-medium text-sm text-gray-700">Users Email</label>
                            <input type="email" name="users_email" id="users_email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('users_email', $wsl_info->users_email) }}" />
                            @error('users_email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="url" class="block font-medium text-sm text-gray-700">Website Address "URL"</label>
                            <input type="text" name="url" id="url" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('url', $wsl_info->url) }}" />
                            @error('url')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                            <input type="password" name="password" id="password" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('password')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="contact_person" class="block font-medium text-sm text-gray-700">Contact Person</label>
                            <input type="text" name="contact_person" id="contact_person" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('contact_person', $wsl_info->contact_person) }}" />
                            @error('contact_person')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="account_number" class="block font-medium text-sm text-gray-700">Account Number</label>
                            <input type="text" name="account_number" id="account_number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('account_number', $wsl_info->account_number) }}" />
                            @error('account_number')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="miscellaneous" class="block font-medium text-sm text-gray-700">Miscellaneous</label>
                            <input type="text" name="miscellaneous" id="miscellaneous" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('miscellaneous', $wsl_info->miscellaneous) }}" />
                            @error('miscellaneous')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="site_pin" class="block font-medium text-sm text-gray-700">Site Pin</label>
                            <input type="text" name="site_pin" id="site_pin" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('site_pin', $wsl_info->site_pin) }}" />
                            @error('site_pin')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="security_question_1" class="block font-medium text-sm text-gray-700">Security Question 1</label>
                            <input type="text" name="security_question_1" id="security_question_1" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('security_question_1', $wsl_info->security_question_1) }}" />
                            @error('security_question_1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="security_answer_1" class="block font-medium text-sm text-gray-700">Security Answer 1</label>
                            <input type="text" name="security_answer_1" id="security_answer_1" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('security_answer_1', $wsl_info->security_answer_1) }}" />
                            @error('security_answer_1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="security_question_2" class="block font-medium text-sm text-gray-700">Security Question 2</label>
                            <input type="text" name="security_question_2" id="security_question_2" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('security_question_2', $wsl_info->security_question_2) }}" />
                            @error('security_question_2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="security_answer_2" class="block font-medium text-sm text-gray-700">Security Answer 2</label>
                            <input type="text" name="security_answer_2" id="security_answer_2" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('security_answer_2', $wsl_info->security_answer_2) }}" />
                            @error('security_answer_2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="security_question_3" class="block font-medium text-sm text-gray-700">Security Question 3</label>
                            <input type="text" name="security_question_3" id="security_question_3" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('security_question_3', $wsl_info->security_question_3) }}" />
                            @error('security_question_3')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="security_answer_3" class="block font-medium text-sm text-gray-700">Security Answer 3</label>
                            <input type="text" name="security_answer_3" id="security_answer_3" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('security_answer_3', $wsl_info->security_answer_3) }}" />
                            @error('security_answer_3')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>

                <div class="block mt-8">
                    <a href="{{ route('wsl-infos.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
