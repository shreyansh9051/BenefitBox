@extends('layouts.app')

@section('content')

    <section class="text-gray-600 body-font">

        <div class="container px-5 py-24 mx-auto">

            <div class="flex flex-wrap -m-4 text-center">

                <div class="p-4 sm:w-1/3 w-1/2">

                    <h2 class="title-font font-medium sm:text-5xl text-3xl text-gray-900">{{ \App\Helpers\Helper::numberFormat($plansCount) }}</h2>

                    <p class="leading-relaxed">Plans</p>

                </div>

                <div class="p-4 sm:w-1/3 w-1/2">

                    <h2 class="title-font font-medium sm:text-5xl text-3xl text-gray-900">{{ \App\Helpers\Helper::numberFormat($comboPlansCount) }}</h2>

                    <p class="leading-relaxed">Combo Plans</p>

                </div>

                <div class="p-4 sm:w-1/3 w-1/2">

                    <h2 class="title-font font-medium sm:text-5xl text-3xl text-gray-900">{{ \App\Helpers\Helper::numberFormat($eligibilityCriteriaCount) }}</h2>

                    <p class="leading-relaxed">Eligibility Criteria</p>

                </div>

            </div>

        </div>

    </section>

@endsection