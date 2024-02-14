<div class="row py-2 justify-content-center">
    <div class="col-11">
        <div class="row">
            <div class="col-6">
                <div class="input-group">

                    <input type="text" id="LettreDossier" class="form-control rounded-1"
                        placeholder='{{ __('content.خطاب نقل الملف') }}' aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Lettre_transmission_dossier">
                    <input type="file" name="" id="input_file1" hidden />
                    <div class="input-group-append" onclick="handleFileSelection('LettreDossier','input_file1')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('Contrat_credit','input_file2')">
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
                    <div class="input-group-append" onclick="handleFileSelection('Releve_compte','input_file3')">
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
                    <div class="input-group-append" onclick="handleFileSelection('Tableau_damortissement','input_file4')">
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
                    <div class="input-group-append" onclick="handleFileSelection('Copie_CIN','input_file5')">
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
                    <div class="input-group-append" onclick="handleFileSelection('PV_vente_vehicule','input_file6')">
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
                    <div class="input-group-append" onclick="handleFileSelection('Reconnaissance_dette','input_file7')">
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
                    <div class="input-group-append" onclick="handleFileSelection('Acte_davalCautionnement_solidaire','input_file8')">
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
                    <div class="input-group-append" onclick="handleFileSelection('Registre_commerce','input_file9')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6">
                <div class="input-group">

                    <input type="text" id="Attestation_salaireAttestationTravail" class="form-control rounded-1"
                        placeholder= '{{ __('content.شهادة الراتب / شهادة العمل') }}'
                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                        style="font-weight: bold;font-size:18px" name="Attestation_salaireAttestationTravail">
                    <input type="file" name="" id="input_file10" hidden />
                    <div class="input-group-append" onclick="handleFileSelection('Attestation_salaireAttestationTravail','input_file10')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6 py-2">
                <div class="input-group">

                    <input type="text" id="Ordre_Prelevement_PermanentIrrevocable" class="form-control rounded-1"
                        placeholder= '{{ __('content.أمر الخصم المباشر الدائم وغير القابل للإلغاء') }}'
                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                        style="font-weight: bold;font-size:18px" name="Ordre_Prelevement_PermanentIrrevocable">
                    <input type="file" name="" id="input_file11" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Ordre_Prelevement_PermanentIrrevocable','input_file11')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6 py-2">
                <div class="input-group">

                    <input type="text" id="Contra_dhypotheque_cautionnement_hypothecaire" class="form-control rounded-1"
                        placeholder= '{{ __('content.عقد الرهن العقاري أو ضمان الرهن العقاري') }}'
                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                        style="font-weight: bold;font-size:18px" name="Contra_dhypotheque_cautionnement_hypothecaire">
                    <input type="file" name="" id="input_file12" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Contra_dhypotheque_cautionnement_hypothecaire','input_file12')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('Copie_statuts','input_file13')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('PV_AGE','input_file14')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('Facture_tel_Electricite','input_file15')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6 py-2">
                <div class="input-group">

                    <input type="text" id="Certificat_residence" class="form-control rounded-1"
                        placeholder= '{{ __('content.شهادة إقامة') }}' aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Certificat_residence">
                    <input type="file" name="" id="input_file16" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Certificat_residence','input_file16')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('Protocole_daccord','input_file17')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6">
                <div class="input-group">

                    <input type="text" id="Contrat_subrogation_contrat_LOA_Contrat_Mourabaha" class="form-control rounded-1"
                        placeholder= '{{ __('content.عقد الإحالة/عقد التفويض/عقد المرابحة') }}'
                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                        style="font-weight: bold;font-size:18px" name="Contrat_subrogation_contrat_LOA_Contrat_Mourabaha">
                    <input type="file" name="" id="input_file18" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Contrat_subrogation_contrat_LOA_Contrat_Mourabaha','input_file18')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6 py-2">
                <div class="input-group">

                    <input type="text" id="Nantissement_fond_commerce" class="form-control rounded-1"
                        placeholder= '{{ __('content.الرهن على الأصول التجارية') }}' aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Nantissement_fond_commerce">
                    <input type="file" name="" id="input_file19" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Nantissement_fond_commerce','input_file19')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6 py-2">
                <div class="input-group">

                    <input type="text" id="Recepisse_depot_declaration_mise_circulation_provisoire" class="form-control rounded-1"
                        placeholder= '{{ __('content.إيصال الإيداع/إعلان الإفراج المؤقت') }}'
                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                        style="font-weight: bold;font-size:18px" name="Recepisse_depot_declaration_mise_circulation_provisoire">
                    <input type="file" name="" id="input_file20" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Recepisse_depot_declaration_mise_circulation_provisoire','input_file20')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6">
                <div class="input-group">

                    <input type="text" id="Certificat_propriete" class="form-control rounded-1"
                        placeholder= '{{ __('content.شهادة الملكية') }}' aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Certificat_propriete">
                    <input type="file" name="" id="input_file21" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Certificat_propriete','input_file21')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('Contrat_bail','input_file22')">
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
                    <div class="input-group-append"  onclick="handleFileSelection('Specimen_cheque','input_file23')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6 py-2">
                <div class="input-group">

                    <input type="text" id="Attestation_RIB" class="form-control rounded-1"
                        placeholder= 'RIB' aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Attestation_RIB">
                    <input type="file" name="" id="input_file24" hidden />
                    <div class="input-group-append" onclick="handleFileSelection('Attestation_RIB','input_file24')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6">
                <div class="input-group">

                    <input type="text" id="Autres_1" class="form-control rounded-1"
                        placeholder= '{{ __('content.أخرى 1') }}' aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Autres_1">
                    <input type="file" name="" id="input_file25" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Autres_1','input_file25')">
                       <img  src="{{ asset(
                         app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                            srcset="" style="cursor: pointer">

                    </div>

                </div>

            </div>
            <div class="col-6">
                <div class="input-group">

                    <input type="text" id="Autres_2" class="form-control rounded-1"
                        placeholder= {{ __('content.أخرى 2') }} aria-label="Recipient's username"
                        aria-describedby="basic-addon2" style="font-weight: bold;font-size:18px"
                        name="Autres_2">
                    <input type="file" name="" id="input_file26" hidden />
                    <div class="input-group-append"  onclick="handleFileSelection('Autres_2','input_file16')">
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
                    <button class="btn text-light w-100 py-2 text-capitalize" type="submit"
                        style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn  w-100 py-2 text-capitalize"
                        onclick="display()"
                        style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</button>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
   function handleFileSelection(inputFieldId, fileInputId) {
    let inputField = document.getElementById(inputFieldId);
    let fileInput = document.getElementById(fileInputId);

    fileInput.click(); // Trigger file input click

    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
            // Set the value of the input field to the selected file name
            inputField.value = fileInput.files[0].name;
            inputField.setAttribute('readonly', true); // Set as readonly
        }
    });
}

</script>