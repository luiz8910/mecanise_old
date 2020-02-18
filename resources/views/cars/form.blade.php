<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" id="user_edit_tab_1" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg> Detalhes do Carro
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            {{--<form action="{{ route('person.update', ['id' => $person->id]) }}" method="POST">
                @method('PUT')--}}
            <div class="tab-content">
                <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                @if(!$edit)
                                    <form class="kt-section__body" id="form" action="{{ route('cars.store') }}" method="POST">

                                @else
                                    <form class="kt-section__body" id="form" action="{{ route('cars.update', ['id' => $car->id]) }}" method="POST">
                                    @method('PUT')
                                @endif
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Informações:</h3>
                                        </div>
                                    </div>

                                    <div class="form-group row validated">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Modelo</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group kt-section__content kt-section__content--solid--" id="input-model">

                                                <div id="spinner_model">
                                                    <input class="form-control tab-info" id="model" type="text" value="@if($edit){{ $car->model }}@endif"
                                                       placeholder="Digite o Modelo do Carro" required name="model">
                                                    <div class="valid-feedback" id="span-valid-model" style="display:none;">Ótimo! Este carro ainda não existe na base de dados</div>
                                                    <div class="invalid-feedback" id="span-invalid-model" style="display:none;"></div>
                                                </div>
                                            </div>
                                            <span class="form-text text-danger" id="span_model_status" style="display:none;">Insira o modelo.</span>
                                        </div>
                                    </div>

                                        @if($edit)
                                            <input type="hidden" id="car_id" value="{{ $car->id }}">
                                        @endif


                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Marca / Montadora</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group" id="input-brand">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-car"></i>
                                                    </span>
                                                </div>
                                                <input type="text" id="brand" class="form-control tab-info" value="@if($edit){{ $car->brand }}@endif"
                                                       required placeholder="Digite a marca, Ex: Fiat, Chevrolet"  aria-describedby="basic-addon1" name="brand">
                                            </div>
                                            <span class="form-text text-danger" id="span_brand_status" style="display:none;">Insira uma montadora válida.</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Ano Inicial de Fabricação</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group" id="input-year">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar"></i>
                                                </span>

                                                <input type="text" id="start_year" name="start_year" value="@if($edit){{ $car->start_year }}@endif" class="form-control tab-info number"
                                                       placeholder="Digite o ano de fabricação com quatro digítos" minlength="4" maxlength="4" aria-describedby="basic-addon1" required>
                                            </div>
                                            <span class="form-text text-danger" id="span_start_year_status" style="display: none;">Insira um ano válido</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Ano Final de Fabricação</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group" id="input-year">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>

                                                <input type="text" id="end_year" name="end_year" value="@if($edit){{ $car->end_year }}@endif" class="form-control tab-info number"
                                                       placeholder="Digite o ano de fabricação com quatro digítos" minlength="4" maxlength="4" aria-describedby="basic-addon1" required>
                                            </div>
                                            <span class="form-text text-danger" id="span_end_year_status" style="display: none;">Insira um ano válido</span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Versão</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group" id="input-version">
                                                <span class="input-group-text">
                                                    <i class="la la-car"></i>
                                                </span>

                                                <input type="text" id="version" name="version" value="@if($edit){{ $car->version }}@endif" class="form-control tab-info"
                                                       placeholder="Por Ex: Fire Economy, GLS 16v, Turbo LTZ" aria-describedby="basic-addon1" required>
                                            </div>
                                            <span class="form-text text-danger" id="span_version_status" style="display: none;">Insira uma versão válida</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Combustível</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <select class="form-control tab-info select-input" id="fuel" name="fuel" required>

                                                @if($edit)
                                                    <option value="">Selecione...</option>
                                                    <option value="Flex" @if($car->fuel == "Flex") selected @endif>Flex</option>
                                                    <option value="Gasolina" @if($car->fuel == "Gasolina") selected @endif>Gasolina</option>
                                                    <option value="Álcool" @if($car->fuel == "Álcool") selected @endif>Álcool</option>
                                                    <option value="GNV" @if($car->fuel == "GNV") selected @endif>GNV</option>
                                                    <option value="Diesel" @if($car->fuel == "Diesel") selected @endif>Diesel</option>

                                                @else
                                                    <option value="" selected>Selecione...</option>
                                                    <option value="Flex">Flex</option>
                                                    <option value="Gasolina">Gasolina</option>
                                                    <option value="Álcool">Álcool</option>
                                                    <option value="GNV">GNV</option>
                                                    <option value="Diesel">Diesel</option>
                                                @endif
                                            </select>
                                            <span class="form-text text-danger" id="span_fuel_status" style="display: none;">Selecione uma opção</span>
                                        </div>
                                    </div>

                                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>

                                    <div class="row">

                                        <div class="col-lg-5 col-xl-5">
                                            <a href="javascript:" onclick="clean_fields('tab-info')" class="btn btn-default" style="float:right;">
                                                <i class="fas fa-broom"></i>
                                                Limpar
                                            </a>
                                        </div>

                                        <div class="col-lg-5 col-xl-5">
                                            <button class="btn btn-default next-tab" onclick="next_tab(0, 'tab-info')" disabled>
                                                <i class="la la-arrow-right"></i>
                                                Próximo
                                            </button>
                                        </div>
                                    </div>

                                </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            {{--</form>--}}
        </div>
    </div>
</div>
