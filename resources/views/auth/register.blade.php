<x-layout>

    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">
                            First Name
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" required id="first_name" />
                        </div>

                        <x-form-error name="first_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">
                            Last Name
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input name="last_name" required id="last_name" />
                        </div>

                        <x-form-error name="last_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">
                            Email
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input name="email" required id="email" type="email" />
                        </div>

                        <x-form-error name="email" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">
                            Password
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input name="password" required id="password" type="password" />
                        </div>

                        <x-form-error name="password" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">
                            Confirm Password
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input name="password_confirmation" required id="password_confirmation"
                                type="password" />
                        </div>

                        <x-form-error name="password_confirmation" />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>
                Register
            </x-form-button>
        </div>
    </form>


</x-layout>
