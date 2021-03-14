@extends('layouts.layout')
@section('title')
Welcome
@endsection
@section('content')
    <section class="py-12 bg-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center bg-gray-50">
            <h2 class="mt-2 text-3xl leading-8 font-extrabold font-mono tracking-tight text-gray-900 sm:text-4xl">
                Un manera mejor de hacer analitica sobre ferrias
            </h2>
          </div>

          <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

              <div class="relative bg-gray-50">
                <dt>
                  <p class="ml-16 text-lg leading-6 font-medium font:serif text-gray-900">Es completamente gratis</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                </dd>
              </div>

              <div class="relative bg-gray-50">
                <dt>
                  <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Manejo facil</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                </dd>
              </div>
            </dl>
          </div>
        </div>
</section>
@endsection
