<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>
   
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 50%;
  padding: 10px;
  
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<br><br>
<b><p style="font-size: 30px; font-family:Arial Black; color:#36454F;text-align:center">STUDENT INFORMATION<p></b>
<div class="row">

  <div class="column">
  <x-guest-layout>
  

    <x-jet-authentication-card>
        <x-slot name="logo">
        
        </x-slot>

    
        <h1>Enrollment Number</h1></br>
        <h1>&emsp;&emsp;UWU/IIT/18/005</h1></br></br>
        <h1>Full Name</h1></br>
        <h1>&emsp;&emsp;S.M Dissanayake</h1></br></br>
        <h1>Hostel Name</h1></br>
        <h1>&emsp;&emsp;Silver Tips</h1></br></br>
        <h1>Room Number</h1></br>
        <h1>&emsp;&emsp;Room No 13</h1>
        
    </x-jet-authentication-card>
</x-guest-layout>
  </div>
  <div class="column" >
  <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <b><p style="font-size: 20px; font-family:Arial Black; color:#36454F;text-align:center">Appeal to change the hostel<p></b>
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="hostelname" value="{{ __('Hostel Name') }}" />
                <x-jet-input id="hostelname" class="block mt-1 w-full" type="text" name="hostelname" required autocomplete="Enter Hostel Name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Description') }}" />
                <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" required autocomplete="description" />
            </div>

            <!-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif -->

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-jet-button class="ml-4">
                    {{ __('Send') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

  </div>
</div>

</body>


    
</x-app-layout>
