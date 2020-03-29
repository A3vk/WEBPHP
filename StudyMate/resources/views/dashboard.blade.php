@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            <div class="accordion" id="accordion">
                @for($period = 1; $period <= 4; $period++)
                    <div class="card">
                        <div class="card-header" id="heading{{ $period }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $period }}" aria-expanded="false" aria-controls="collapse{{ $period }}">
                                    Periode {{ $period }}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{ $period }}" class="collapse {{ $period == 1 ? 'show' : '' }}" aria-labelledby="heading{{ $period }}" data-parent="#accordion">
                            <div class="card-body">
                                <div class="list-group">
                                    @for($block = $period; $block <= 16; $block+=4)
                                        @if(array_key_exists($block, $modules))
                                            <a class="list-group-item list-group-item-action {{ $block == 1 ? 'active' : '' }}" id="list-block{{ $block }}-list" data-toggle="list" href="#list-block{{ $block }}" role="tab" aria-controls="block{{ $block }}">Blok {{ $block }}</a>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="nav-tabContent">
                @for($block = 1; $block <= 16; $block++)
                    @if(array_key_exists($block, $modules))
                        <div class="tab-pane fade {{ $block == 1 ? 'show active' : '' }}" id="list-block{{ $block }}" role="tabpanel" aria-labelledby="list-block{{ $block }}-list">
                            <h1>Blok {{ $block }}</h1>
                            <div class="table-responsive">
                                <table class="table table-hover table-fixed dashboard-table">
                                    <thead class="bg-success">
                                    <tr>
                                        <th scope="col">vak</th>
                                        <th scope="col">cijfer</th>
                                        <th scope="col">behaalde studiepunten</th>
                                        <th scope="col">te behalen studiepunten</th>
                                    </tr>
                                    </thead>
                                    <tbody class="dashboard-height">
                                        @foreach($modules[$block] as $module)
                                            @if(!is_numeric($module))
                                                <tr>
                                                    <th scope="row">{{ $module->name }}</th>
                                                    @isset($module->grade)
                                                        <td>{{ $module->grade }}</td>
                                                    @else
                                                        <td>N/A</td>
                                                    @endisset
                                                    <td>{{ $module->obtained_credits }}</td>
                                                    <td>{{ $module->total_credits }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="meters">
                                <div class="block">
                                    <h2>Studiepunten dit blok</h2>
                                    @include('layouts.progress-meter', ['credits' => $modules[$block]['credits'], 'total_credits' => 15])
                                </div>
                                <div class="total">
                                    <h2>Studiepunten totaal</h2>
                                    @include('layouts.progress-meter', ['credits' => $modules['credits'], 'total_credits' => 240])
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
@endsection
