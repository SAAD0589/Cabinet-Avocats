@extends('Admins.components.SideBar')

@section('title', 'Affichage Bibliotheque')


@section('content')
@livewireStyles
<style>
    h3{
      font-size: 3rem;
    }
    
  </style>
    <div class="container ">
        <div class="row py-5">
          <div class="col-xl-9 col-sm-7">
            <div class="row">
              <div class="col-12">
                  <h3 class="py-1 fw-bold ">
                    {{ __('content.ملفات الكتابة') }}
                  </h3>
              </div>
            </div>
          </div>
            <div class="d-flex justify-content-between py-4">
            
            <div class="col-6">
              <p class="fw-bold " style="font-size:18px;color: #8C8D93;">
                {{ __('content.TextDoc') }}
              </p>
          </div>
            <div class=" rounded-3 align-self-center ">
                <a href="{{route('expBib')}}" class="btn fw-bold border  px-5 py-2 text-capitalize">{{ __('content.تحميل') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 26" fill="none">
                        <g clip-path="url(#clip0_542_5550)">
                          <path d="M21.6117 5.99733L17.8374 2.22083C16.4042 0.788667 14.4997 0 12.4749 0H7.58366C4.59691 0 2.16699 2.42992 2.16699 5.41667V20.5833C2.16699 23.5701 4.59691 26 7.58366 26H18.417C21.4037 26 23.8337 23.5701 23.8337 20.5833V11.3588C23.8337 9.33183 23.0439 7.4295 21.6117 5.99733ZM20.0799 7.53025C20.4244 7.87367 20.7158 8.25608 20.952 8.66775H16.2492C15.6512 8.66775 15.1659 8.18133 15.1659 7.58442V2.88058C15.5776 3.11675 15.96 3.40817 16.3045 3.75267L20.0788 7.52917L20.0799 7.53025ZM21.667 20.5844C21.667 22.3763 20.2088 23.8344 18.417 23.8344H7.58366C5.79183 23.8344 4.33366 22.3763 4.33366 20.5844V5.41667C4.33366 3.62483 5.79183 2.16667 7.58366 2.16667H12.4749C12.6515 2.16667 12.827 2.17533 13.0003 2.19158V7.58333C13.0003 9.37517 14.4585 10.8333 16.2503 10.8333H21.6421C21.6583 11.0067 21.667 11.1822 21.667 11.3588V20.5844ZM17.0162 17.4482C17.4398 17.8707 17.4398 18.5564 17.0162 18.98L15.2688 20.7285C14.6437 21.3536 13.8215 21.6667 13.0003 21.6667C12.1792 21.6667 11.3569 21.3536 10.7318 20.7285L8.98441 18.98C8.56083 18.5564 8.56083 17.8707 8.98441 17.4482C9.40799 17.0246 10.0927 17.0246 10.5162 17.4482L11.917 18.8489V14.0844C11.917 13.4864 12.4012 13.0011 13.0003 13.0011C13.5994 13.0011 14.0837 13.4864 14.0837 14.0844V18.8489L15.4844 17.4482C15.908 17.0246 16.5927 17.0246 17.0162 17.4482Z" fill="#070707"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_542_5550">
                            <rect width="26" height="26" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                </a>
            </div>
           
        </div>
        <div class="row">
          <div class="col-12">
            <livewire:afficher-bib /> 

          </div>
        </div>

        </div>
    </div>

    @livewireScripts

@endsection
