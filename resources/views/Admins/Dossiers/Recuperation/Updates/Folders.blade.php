  <div class="container my-5" id="FormOne">
      <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
          <div class="col-11 text-center">
              <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                {{ __('content.إضافة ملف') }}
              </h3>
              <h4 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}};color: #C09F5E">{{ __('content.إستعادة') }}</h4>
              <div class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="13" viewBox="0 0 82 13"
                      fill="none">
                      <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                      <circle cx="29.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                      <circle cx="52.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                      <circle cx="75.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                  </svg>
              </div>

          </div>
          <div class="col-1">
                <a href="{{ route('recuperations.index') }}">
                    <svg style="{{ app()->getLocale() === 'ar' ? '' :'rotate:180deg;' }}" xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68" fill="none">
                        <path
                            d="M19.6923 0.5H44.3077C54.9069 0.5 63.5 9.10025 63.5 19.7101V48.2899C63.5 58.8998 54.9069 67.5 44.3077 67.5H19.6923C9.09312 67.5 0.5 58.8998 0.5 48.2899V19.7101C0.5 9.10025 9.09312 0.5 19.6923 0.5Z"
                            stroke="#C09F5E" />
                        <path
                            d="M33.9611 45.0522C34.5451 45.6363 35.4921 45.6363 36.0762 45.0522C36.6602 44.4682 36.6602 43.5212 36.0762 42.9372L33.9611 45.0522ZM23.9713 35.0624L33.9611 45.0522L36.0762 42.9372L26.0864 32.9473L23.9713 35.0624Z"
                            fill="#C09F5E" />
                        <path d="M35.0625 24.0322L25.031 34.0638" stroke="#C09F5E" stroke-width="3"
                            stroke-linecap="round" />
                    </svg>
                </a>
            </div>


      </div>
      <div class="row py-2 justify-content-center" >
          <div class="col-11">
              <div class="row">
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="LettreDossier" class="form-control rounded-1"
                              placeholder= '{{ __('content.خطاب نقل الملف') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Lettre_transmission_dossier" value="{{$folder_recuperations->Lettre_transmission_dossier}}" >
                          <input type="file" name="" id="input_file1" hidden />
                          <div class="input-group-append" onclick="Lettre_transmission_dossier()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Contrat_credit" class="form-control rounded-1"
                              placeholder= '{{ __('content.اتفاق الائتمان') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Contrat_credit">
                          <input type="file" name="" id="input_file2" hidden />
                          <div class="input-group-append" onclick="Contrat_credit()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">
                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Releve_compte" class="form-control rounded-1"
                              placeholder= '{{ __('content.كشف الحساب البنكي') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Releve_compte">
                          <input type="file" name="" id="input_file3" hidden />
                          <div class="input-group-append" onclick="Releve_compte()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Tableau_damortissement" class="form-control rounded-1"
                              placeholder= '{{ __('content.الجدول الزمني للاستهلاك') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Tableau_damortissement">
                          <input type="file" name="" id="input_file4" hidden />
                          <div class="input-group-append" onclick="Tableau_damortissement()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Copie_CIN" class="form-control rounded-1"
                              placeholder= '{{ __('content.بطاقة التعريف الوطنية') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Copie_CIN">
                          <input type="file" name="" id="input_file5" hidden />
                          <div class="input-group-append" onclick="Copie_CIN()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="PV_vente_vehicule" class="form-control rounded-1"
                              placeholder= '{{ __('content.تقرير بيع السيارة') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="PV_vente_vehicule">
                          <input type="file" name="" id="input_file6" hidden />
                          <div class="input-group-append" onclick="PV_vente_vehicule()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Reconnaissance_dette" class="form-control rounded-1"
                              placeholder='{{ __('content.الإقرار بالديون') }}'  aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Reconnaissance_dette">
                          <input type="file" name="" id="input_file7" hidden />
                          <div class="input-group-append" onclick="Reconnaissance_dette()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Acte_davalCautionnement_solidaire" class="form-control rounded-1"
                              placeholder= '{{ __('content.سند تأييد/ضمان مشترك') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Acte_davalCautionnement_solidaire">
                          <input type="file" name="" id="input_file8" hidden />
                          <div class="input-group-append" onclick="Acte_davalCautionnement_solidaire()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Registre_commerce" class="form-control rounded-1"
                              placeholder= '{{ __('content.السجل التجاري') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Registre_commerce">
                          <input type="file" name="" id="input_file9" hidden />
                          <div class="input-group-append" onclick="Registre_commerce()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Attestation_salaireAttestationTravail"
                              class="form-control rounded-1" placeholder= '{{ __('content.شهادة الراتب / شهادة العمل') }}'
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px" name="Attestation_salaireAttestationTravail">
                          <input type="file" name="" id="input_file10" hidden />
                          <div class="input-group-append" onclick="Attestation_salaireAttestationTravail()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Ordre_Prelevement_PermanentIrrevocable"
                              class="form-control rounded-1"
                              placeholder='{{ __('content.أمر الخصم المباشر الدائم وغير القابل للإلغاء') }}'
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px" name="Ordre_Prelevement_PermanentIrrevocable">
                          <input type="file" name="" id="input_file11" hidden />
                          <div class="input-group-append" onclick="Ordre_Prelevement_PermanentIrrevocable()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Contra_dhypotheque_cautionnement_hypothecaire"
                              class="form-control rounded-1" placeholder= '{{ __('content.عقد الرهن العقاري أو ضمان الرهن العقاري') }}'
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px"
                              name="Contra_dhypotheque_cautionnement_hypothecaire">
                          <input type="file" name="" id="input_file12" hidden />
                          <div class="input-group-append" onclick="Contra_dhypotheque_cautionnement_hypothecaire()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Copie_statuts" class="form-control rounded-1"
                              placeholder= 'Copie des statuts' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Copie_statuts">
                          <input type="file" name="" id="input_file13" hidden />
                          <div class="input-group-append" onclick="Copie_statuts()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="PV_AGE" class="form-control rounded-1"
                              placeholder= '{{ __('content.تقرير العمر') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="PV_AGE">
                          <input type="file" name="" id="input_file14" hidden />
                          <div class="input-group-append" onclick="PV_AGE()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Facture_tel_Electricite" class="form-control rounded-1"
                              placeholder= '{{ __('content.فاتورة الهاتف/الكهرباء') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Facture_tel_Electricite">
                          <input type="file" name="" id="input_file15" hidden />
                          <div class="input-group-append" onclick="Facture_tel_Electricite()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Certificat_residence" class="form-control rounded-1"
                              placeholder='{{ __('content.شهادة إقامة') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Certificat_residence">
                          <input type="file" name="" id="input_file16" hidden />
                          <div class="input-group-append" onclick="Certificat_residence()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Protocole_daccord" class="form-control rounded-1"
                              placeholder= '{{ __('content.بروتوكول الاتفاق') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Protocole_daccord">
                          <input type="file" name="" id="input_file17" hidden />
                          <div class="input-group-append" onclick="Protocole_daccord()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Contrat_subrogation_contrat_LOA_Contrat_Mourabaha"
                              class="form-control rounded-1" placeholder= '{{ __('content.عقد الإحالة/عقد التفويض/عقد المرابحة') }}'
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px"
                              name="Contrat_subrogation_contrat_LOA_Contrat_Mourabaha">
                          <input type="file" name="" id="input_file18" hidden />
                          <div class="input-group-append"
                              onclick="Contrat_subrogation_contrat_LOA_Contrat_Mourabaha()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Nantissement_fond_commerce" class="form-control rounded-1"
                              placeholder='{{ __('content.الرهن على الأصول التجارية') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Nantissement_fond_commerce">
                          <input type="file" name="" id="input_file19" hidden />
                          <div class="input-group-append" onclick="Nantissement_fond_commerce()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Recepisse_depot_declaration_mise_circulation_provisoire"
                              class="form-control rounded-1" placeholder='{{ __('content.إيصال الإيداع/إعلان الإفراج المؤقت') }}'
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px"
                              name="Recepisse_depot_declaration_mise_circulation_provisoire">
                          <input type="file" name="" id="input_file20" hidden />
                          <div class="input-group-append"
                              onclick="Recepisse_depot_declaration_mise_circulation_provisoire()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Certificat_propriete" class="form-control rounded-1"
                              placeholder='{{ __('content.شهادة الملكية') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Certificat_propriete">
                          <input type="file" name="" id="input_file21" hidden />
                          <div class="input-group-append" onclick="Certificat_propriete()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Contrat_bail" class="form-control rounded-1"
                              placeholder= '{{ __('content.عقد كراء') }}' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Contrat_bail">
                          <input type="file" name="" id="input_file22" hidden />
                          <div class="input-group-append" onclick="Contrat_bail()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>

                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Specimen_cheque" class="form-control rounded-1"
                              placeholder= 'Spécimen de chèque' aria-label="Recipient's username"
                              aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                              name="Specimen_cheque">
                          <input type="file" name="" id="input_file23" hidden />
                          <div class="input-group-append" onclick="Specimen_cheque()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6 py-2">
                      <div class="input-group">

                          <input type="text" id="Attestation_RIB" class="form-control rounded-1"
                              placeholder= 'RIB' aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px" name="Attestation_RIB">
                          <input type="file" name="" id="input_file24" hidden />
                          <div class="input-group-append" onclick="Attestation_RIB()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Autres_1" class="form-control rounded-1" placeholder= '{{ __('content.أخرى 1') }}'
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px" name="Autres_1">
                          <input type="file" name="" id="input_file25" hidden />
                          <div class="input-group-append" onclick="Autres_1()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
                  <div class="col-6">
                      <div class="input-group">

                          <input type="text" id="Autres_2" class="form-control rounded-1" placeholder= {{ __('content.أخرى 2') }}
                              aria-label="Recipient's username" aria-describedby="basic-addon2"
                              style="font-weight: bold;font-size:18px" name="Autres_2">
                          <input type="file" name="" id="input_file26" hidden />
                          <div class="input-group-append" onclick="Autres_2()">
                              <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                          </div>

                      </div>

                  </div>
              </div>
          </div>


          <div class="row d-flex justify-content-center py-5">
              <div class="col-8  ">
                  <div class="row">
                      <div class="col-6">
                          <button id="next" class="btn text-light w-100 py-2 text-capitalize" onclick="hide()"
                              type="button"
                              style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.التالي') }}</button>
                      </div>
                      <div class="col-6">
                          <button type="submit" class="btn  w-100 py-2 text-capitalize"
                              style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.تعديل') }}</button>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>