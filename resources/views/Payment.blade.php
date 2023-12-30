<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="/css/Home.css" />
    <link rel="stylesheet" href="/ICON CSS/css/all.css">
    <link rel="stylesheet" href="/css/Header.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-wrap my-12 mx-20 rounded-3xl justify-center">
        <div class="flex flex-col m-8 max-w-xl px-12 rounded-2xl">
                <img class="w-96 h-80 mt-8 rounded-2xl" src="{{ asset('Assets/' . $vehicle->image) }}" alt="">
            <div class="mt-8">
                <h1 class="text-4xl font-bold">{{$vehicle->itemName}} {{--Nama Judul Mobil--}}</h1>
                <h1 class="text-6xl mt-8 font-extrabold text-blue-500">Rp {{ number_format($vehicle->price, 0, '.', '.') }} {{--isi Harga--}}</h1>
            </div>
        </div>

        <div class="flex flex-col m-8 max-w-xl px-12 py-4 rounded-2xl bg-blue-200">
            <form method="post" action="{{ route('PaymentController.validation') }}">
                @csrf
                <h1 class="text-6xl font-extrabold mb-8 mt-4">payment</h1>
                <div>
                    <h1 class="font-extrabold text-xl mb-4">payment method</h1>
                    <div class="flex flex-row mb-8">
                        <div class="flex items-center">
                            <label class="inline-flex items-center mr-16">
                                <input type="radio" class="form-radio text-indigo-600" name="paymentMethod" id="paymentMethodDebit" value="debit" {{ old('paymentMethod') == 'debit' ? 'checked' : '' }}>
                                <span class="ml-2 text-2xl font-extrabold bg-white py-3 px-8 rounded-2xl">Debit</span>
                            </label>
                            <label class="inline-flex items-center mr-8">
                                <input type="radio" class="form-radio text-indigo-600" name="paymentMethod" id="paymentMethodCredit" value="credit" {{ old('paymentMethod') == 'credit' ? 'checked' : '' }}>
                                <span class="ml-2 text-2xl font-extrabold bg-white py-3 px-8 rounded-2xl">Credit</span>
                            </label>
                        </div>

                        @error('paymentMethod')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <h1 class="font-extrabold text-xl">Select Bank</h1>
                    <div class="flex items-center">
                        <label class="inline-flex items-center mr-8">
                            <input type="radio" class="form-radio text-indigo-600" name="selectedBank" id="selectedBankBCA" value="BCA" {{ old('selectedBank') == 'BCA' ? 'checked' : '' }}>
                            <img class="w-20" src="Assets/logoBCA.png" alt="">
                        </label>
                        <label class="inline-flex items-center mr-8">
                            <input type="radio" class="form-radio text-indigo-600" name="selectedBank" id="selectedBankBNI" value="BNI" {{ old('selectedBank') == 'BNI' ? 'checked' : '' }}>
                            <img class="w-20" src="Assets/logoBNI.png" alt="">
                        </label>

                        <label class="inline-flex items-center mr-8">
                            <input type="radio" class="form-radio text-indigo-600" name="selectedBank" id="selectedBankBRI" value="BRI" {{ old('selectedBank') == 'BRI' ? 'checked' : '' }}>
                            <img class="w-20" src="Assets/logoBRI.png" alt="">
                        </label>

                        <label class="inline-flex items-center mr-8">
                            <input type="radio" class="form-radio text-indigo-600" name="selectedBank" id="selectedBankMandiri" value="Mandiri" {{ old('selectedBank') == 'Mandiri' ? 'checked' : '' }}>
                            <img class="w-20" src="Assets/logoMANDIRI.png" alt="">
                        </label>
                    </div>

                    @error('selectedBank')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div>  
                    <h1 class="font-extrabold text-xl mb-4">Account Number</h1>
                    <input
                        type="text"
                        id="accountNumber"
                        name="accountNumber"
                        value="{{ old('accountNumber') }}"
                        placeholder="Enter your bank account number"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200"
                    />
                    
                    @error('accountNumber')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-gray-100 transition duration-300 text-4xl font-extrabold p-4 my-8 rounded-2xl">PAY</button>
                @if(session('success'))
                    <script>
                        alert("{{ session('success') }}");
                    </script>
                @endif
            </form>
        </div>
    </div>
</body>
</html>