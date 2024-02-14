@extends('Admins.components.SideBar')

@section('title', 'Affichage Archives')


@section('content')
@livewireStyles
<style>
    h3{
      font-size: 3rem;
    }
    
  </style>
    <div class="container py-5">
        <div class="row ">
            <div class="col-12 d-flex  px-5 py-2">
                <h3 class="py-1 fw-bold">{{ __('content.الأرشيف') }}</h3>
            </div>
       
            <div class="col-12 ">
              <div class="row ">
                <div class="col-8 ">
                  <p class=" " style="font-weight: bold;font-size:20px;color: #8C8D93;">
                    {{ __('content.TextDoc') }}
                  </p>
                </div>
              </div>
               
            </div>

            <div class="col-12">
                <livewire:afficher-archive/> 
              </div>

        </div>
    </div>

    @livewireScripts

@endsection
